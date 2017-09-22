using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Prime
{
    public partial class primeForm : Form
    {
        public primeForm()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void numericUpDown1_ValueChanged(object sender, EventArgs e)
        {
            if (High.Value <= Low.Value) {
                High.Value = Low.Value + 1;
             };

        }

        private void numericUpDown2_ValueChanged(object sender, EventArgs e)
        {

            if (Low.Value >= High.Value)
            {
                Low.Value = High.Value - 1;
            };
        }

        private void primeButton_Click(object sender, EventArgs e)
        {
            int highVal, lowVal, numerator, denominator, remainder;
            
            highVal = Convert.ToInt32(High.Value);
            lowVal = Convert.ToInt32(Low.Value);
    
            // Seed the result string
            string sResult = "";

            //
            // Loop through all the values from HIGH to LOW and determine the prime numbers.
            //
            for (int curValue = highVal; curValue >= lowVal && curValue > 0; curValue--)
            {
                // seed the result string with the current Value
                sResult = sResult + curValue.ToString();

                numerator = curValue;
                denominator = 2;

                //
                // Resolve the PRIME numbers from the current value.
                //
                while (denominator <= numerator && denominator < curValue)
                {
                    remainder = numerator % denominator;
                    if (remainder == 0)
                    {
                        sResult = sResult + ":" + denominator.ToString();
                        numerator = numerator / denominator;
                        denominator = 2;

                    }
                    else
                    {
                        denominator++;
                    }

                };

                //
                // write out the Prime as a result.
                //
                sResult = sResult + "\r\n";
            }

            //
            // write the results out to the screen.
            //
            resultTextBox.Text = sResult;
        }

    }
}
