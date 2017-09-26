namespace AveragesForm
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.instructionsLabel = new System.Windows.Forms.Label();
            this.numberInputBox = new System.Windows.Forms.TextBox();
            this.moreNumbersButton = new System.Windows.Forms.Button();
            this.getAveragesButton = new System.Windows.Forms.Button();
            this.numbersDisplayBox = new System.Windows.Forms.TextBox();
            this.averageDisplayLabel = new System.Windows.Forms.Label();
            this.numbersListBox = new System.Windows.Forms.ListBox();
            this.SuspendLayout();
            // 
            // instructionsLabel
            // 
            this.instructionsLabel.AutoSize = true;
            this.instructionsLabel.Location = new System.Drawing.Point(62, 31);
            this.instructionsLabel.Name = "instructionsLabel";
            this.instructionsLabel.Size = new System.Drawing.Size(101, 13);
            this.instructionsLabel.TabIndex = 0;
            this.instructionsLabel.Text = "Enter your numbers:";
            // 
            // numberInputBox
            // 
            this.numberInputBox.Location = new System.Drawing.Point(243, 31);
            this.numberInputBox.Name = "numberInputBox";
            this.numberInputBox.Size = new System.Drawing.Size(85, 20);
            this.numberInputBox.TabIndex = 1;
            // 
            // moreNumbersButton
            // 
            this.moreNumbersButton.Location = new System.Drawing.Point(65, 72);
            this.moreNumbersButton.Name = "moreNumbersButton";
            this.moreNumbersButton.Size = new System.Drawing.Size(134, 23);
            this.moreNumbersButton.TabIndex = 2;
            this.moreNumbersButton.Text = "Add Another Number";
            this.moreNumbersButton.UseVisualStyleBackColor = true;
            this.moreNumbersButton.Click += new System.EventHandler(this.moreNumbersButton_Click);
            // 
            // getAveragesButton
            // 
            this.getAveragesButton.Location = new System.Drawing.Point(205, 72);
            this.getAveragesButton.Name = "getAveragesButton";
            this.getAveragesButton.Size = new System.Drawing.Size(127, 23);
            this.getAveragesButton.TabIndex = 3;
            this.getAveragesButton.Text = "Get The Average!";
            this.getAveragesButton.UseVisualStyleBackColor = true;
            this.getAveragesButton.Click += new System.EventHandler(this.getAveragesButton_Click);
            // 
            // numbersDisplayBox
            // 
            this.numbersDisplayBox.Location = new System.Drawing.Point(65, 120);
            this.numbersDisplayBox.Multiline = true;
            this.numbersDisplayBox.Name = "numbersDisplayBox";
            this.numbersDisplayBox.ReadOnly = true;
            this.numbersDisplayBox.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.numbersDisplayBox.Size = new System.Drawing.Size(263, 88);
            this.numbersDisplayBox.TabIndex = 4;
            // 
            // averageDisplayLabel
            // 
            this.averageDisplayLabel.AutoSize = true;
            this.averageDisplayLabel.Location = new System.Drawing.Point(65, 250);
            this.averageDisplayLabel.Name = "averageDisplayLabel";
            this.averageDisplayLabel.Size = new System.Drawing.Size(168, 13);
            this.averageDisplayLabel.TabIndex = 5;
            this.averageDisplayLabel.Text = "The average of these numbers is: ";
            // 
            // numbersListBox
            // 
            this.numbersListBox.FormattingEnabled = true;
            this.numbersListBox.Location = new System.Drawing.Point(274, 264);
            this.numbersListBox.Name = "numbersListBox";
            this.numbersListBox.Size = new System.Drawing.Size(120, 95);
            this.numbersListBox.TabIndex = 6;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(686, 490);
            this.Controls.Add(this.numbersListBox);
            this.Controls.Add(this.averageDisplayLabel);
            this.Controls.Add(this.numbersDisplayBox);
            this.Controls.Add(this.getAveragesButton);
            this.Controls.Add(this.moreNumbersButton);
            this.Controls.Add(this.numberInputBox);
            this.Controls.Add(this.instructionsLabel);
            this.Name = "Form1";
            this.Text = "Form1";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label instructionsLabel;
        private System.Windows.Forms.TextBox numberInputBox;
        private System.Windows.Forms.Button moreNumbersButton;
        private System.Windows.Forms.Button getAveragesButton;
        private System.Windows.Forms.TextBox numbersDisplayBox;
        private System.Windows.Forms.Label averageDisplayLabel;
        private System.Windows.Forms.ListBox numbersListBox;
    }
}

