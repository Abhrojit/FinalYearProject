from gpiozero import LED
import RPi.GPIO as GPIO
import time

testled = 13

def setup(led):
    GPIO.cleanup()
    GPIO.setmode(GPIO.BCM)
    GPIO.setup(led, GPIO.OUT)
    GPIO.output(led, GPIO.LOW)


def blink(led):
    leds = LED(led)
    leds.off();


if __name__ == '__main__':
	blink(testled)
	setup(testled)
