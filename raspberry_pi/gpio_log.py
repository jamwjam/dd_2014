import RPi.GPIO as GPIO

pin = 1 	#pin numbers to be changed later

GPIO.setmode(GPIO.BOARD)	#use board numbering system
GPIO.setup(pin, GPIO.I2C)	#I2C or SPI?

while True:
    #read 128 times per second
    count = 0
    while count < 128: #read from pin
	
