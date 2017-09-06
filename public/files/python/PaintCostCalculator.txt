# Brian Wardwell
# This program prompts the user to enter the square feet of wall space to be painted
# and the price of the paint per gallon. It displays the number of gallons, hours of
# labor required, cost of the paint, labor charges and the total cost of the paint job.

# Global constants for paint job estimator
FEET_PER_GALLON = 115
LABOR_HOURS = 8
LABOR_CHARGE = 20

# main module
def main():
    # Local variables
    pricePaint = 0.0
    feetWall = 0.0
    gallonPaint = 0
    hourLabor = 0
    costPaint = 0.0
    costLabor = 0.0

    # Print my name
    print ("Brian Wardwell")
    paint ("Paint Cost Calculator")

    # Get wall space
    feetWall = float(input("Enter wall space in square feet: "))

    # Get paint price
    pricePaint = float(input("Enter paint price per gallon: "))

    # Calculate gallons of paint
    gallonPaint = int(feetWall / FEET_PER_GALLON) + 1

    # Calculate labor hours
    hourLabor = gallonPaint * LABOR_HOURS

    # Calculate labor charge
    costLabor = hourLabor * LABOR_CHARGE

    # Calculate paint cost
    costPaint = gallonPaint * pricePaint

    # print cost estimate
    showCostEstimate(gallonPaint, hourLabor, costPaint, costLabor)


# The showCostEstimate function accepts gallonPaint, hourLabor, costPaint,
# costLabor as arguments and displays the corresponding data
def showCostEstimate(gallonPaint, hourLabor, costPaint, costLabor):
    #Local variable
    totalCost = 0.0

    #calculate total cost
    totalCost = costPaint + costLabor

    #display results
    print ("Gallons of paint: ", gallonPaint)
    print ("Hours of labor: ", hourLabor)
    print ("Paint charges: $" , format(costPaint, '.2f'))
    print ("Labor charges: $" , format(costLabor, '.2f'))
    print ("Total cost: $" , format(totalCost, '.2f'))

    # Call the main function.
main()
"""
Test Data
Enter wall space in square feet: 384
Enter paint price per gallon: 21
Gallons of paint:  4
Hours of labor:  32
Paint charges: $ 84.00
Labor charges: $ 640.00
Total cost: $ 724.00

Process finished with exit code 0
"""
