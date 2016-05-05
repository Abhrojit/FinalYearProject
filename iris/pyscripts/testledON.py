import RPi.GPIO as GPIO
import time

# Module level constants
LED = 13

# Sets up pins as outputs
def setup(led):
    GPIO.cleanup()
    GPIO.setmode(GPIO.BCM)
    GPIO.setup(led, GPIO.OUT)
    GPIO.output(led, GPIO.LOW)

# Turn on the leds
def on(led):
    GPIO.output(led, GPIO.HIGH)
    

if __name__ == '__main__':
    # Setup leds
    setup(LED)
    # Run led on
    on(LED)


