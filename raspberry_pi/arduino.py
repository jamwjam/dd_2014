import serial
import struct
import socket
import time
import select
import math

SAMPLE_RATE = 200
SAMPLES_PER_SEGMENT = 20
WP_HEADER = '''
HTTP:1.1 101 Web Socket Protocol Handshake\r
Upgrade: WebSocket\r
Connection: Upgrade\r
WebSocket-Origin: http://192.168.0.101:12345/\r
WebSocket-Location: ws://192.168.0.101:12345/\r
WebSocket-Protocol: sample
'''.strip() + '\r\n\r\n'

ser = serial.Serial('/dev/ttyAMA0')

print('Opened serial connection')

def read_until_fail(readsize=20):
    try:
        ser.open()
        ser.setTimeout(10)
        ser.write(b'Testing')
        print('Reading')
        while True:
            response = struct.unpack('B'*readsize,ser.read(size=readsize))[0:readsize]
            #response = int(ser.readline())
            average = sum(response)/readsize
            print('{}'.format(average))
    except Exception as E:
        print(E)
        print(':D')
        ser.close()

def init_sensor():
    ser.open()
    ser.setTimeout(10)

def f(data):
    return math.exp((data-82.13572185)/37.29414237)
    
def read_sensor_segment(readsize=20):
    try:
        response = struct.unpack('B'*readsize, \
                                 ser.read(size=readsize))[0:readsize]
        average = sum(response)/readsize
        return f(average)
    except:
        return -1

def run_server():
    listen_socket = socket.socket()
    listen_socket.bind(('',12345))
    listen_socket.listen(10)
    to_read = [listen_socket]
    to_write = []
    readstart = {}
    read_data = b''
    print('Created server')
    try:
        while True:
            try:
                readfds, _, _ = select.select(to_read,[],[], \
                                              SAMPLES_PER_SEGMENT/SAMPLE_RATE/8)
                for fd in readfds:
                    if fd == listen_socket:
                        newsock = listen_socket.accept()[0]
                        to_read += [newsock]
                        to_write += [newsock]
                        readstart[newsock] = 0
                        #newsock.recv(4096)
                        #newsock.sendall(WP_HEADER)
                        print('New connection: {}'.format(newsock))
                    else:
                        try:
                            read_bytes = fd.recv(1024)
                            if len(read_bytes) == 0:
                                del to_read[to_read.index(fd)]
                                del to_write[to_write.index(fd)]
                                print('Disconnected {}'.format(fd))
                                fd.close()
                        except socket.error:
                            del to_read[to_read.index(fd)]
                            del to_write[to_write.index(fd)]
                            print('{} disconnected'.format(fd))
                            fd.close()
                segment = read_sensor_segment(SAMPLES_PER_SEGMENT)
                if segment > 0:
                    #print(segment)
                    read_data += struct.pack('i',int(segment*1000))
                for fd in to_write:
                    fd.sendall(read_data[readstart[fd]:len(read_data)])
                    readstart[fd] = len(read_data)
            except socket.error:
                pass
    except Exception as E:
        print('Closed')
        raise E
    finally:
        listen_socket.close()
