import socket
import struct

sock = socket.socket()
sock.connect(('localhost',12345))
buf = b''
try:
    while True:
        buf += sock.recv(1024)
        if len(buf) % 4 == 0:
            floats = struct.unpack('i'*(len(buf)//4), buf)
            print('{}'.format(floats[0:len(floats)]))
            buf = b''
except:
    print('Disconnected')
