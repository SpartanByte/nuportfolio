# Brian Wardwell
# This program calculates and displays a person's BMI.

# Global constant for body mass
BODY_MASS_MULTIPLIER = 703

# main module
def main():
    # Local variables
    weight = 0.0
    height = 0.0
    BMI = 0.0

    # Print my name
    print ("Brian Wardwell")
    print ("BMI Calculator")

    # Get the weight
    weight = float(input("Enter the weight in pounds: "))

    # Get the height
    height = float(input("Enter the height in inches: "))

    # Calculate the body mass
    BMI = weight * (BODY_MASS_MULTIPLIER/ (height* height))

    # print body mass
    showBMI(BMI)



# The showBMI module accepts BMI as argument and displays the
# body mass indicator
def showBMI(BMI):
    print ("Body Mass Indicator: ", format(BMI, '.2f'))

    # Call the main function.
main()
"""
Test Data
Enter the weight in pounds: 178
Enter the height in inches: 67
Body Mass Indicator:  27.88

Process finished with exit code 0

C:\Python33\python.exe C:/Deb/D2L/CPTR1001/Practice/Ch3Ex6.py
Deb Flaskerud
Enter the weight in pounds: 119
Enter the height in inches: 64
Body Mass Indicator:  20.42

Process finished with exit code 0
"""
