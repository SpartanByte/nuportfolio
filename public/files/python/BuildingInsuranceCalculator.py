# Brian Wardwell
# This program prompts the user to enter the replacement cost of a building
# and then displays the minimum amount of insurance they should buy for
# the property.

# Global constants for the percent of replacement cost
REPLACE_PERCENT = 0.8

# main def
def main():
    # Local variables
    replace= 0.0
    minInsure = 0.0

    # Print my name
    print ("Brian Wardwell")

    # Get the replacement cost
    replace = float(input("Enter the replacement amount: $"))

    # Calculate the insurance amount
    minInsure = replace * REPLACE_PERCENT

    # print information about the insurance
    showInsure(replace, minInsure)


# The showInsure function accepts the replace value
# and the minimum recommended insurance as arguments
# and displays the transaction information.
def showInsure (replace, minInsure):
    print ("Replacement cost: $", format(replace, '.2f'))
    print ("Percent insured: ", REPLACE_PERCENT)
    print ("Minimum insurance: $", format(minInsure, '.2f'))

    # Call the main function.
main()
"""
Test Data
Enter the replacement amount: 238614
Replacement cost:  238614.00
Percent insured:  0.8
Minimum insurance:  190891.20

Process finished with exit code 0
"""
