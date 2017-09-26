namespace Prime
{
    partial class primeForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(primeForm));
            this.label1 = new System.Windows.Forms.Label();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.High = new System.Windows.Forms.NumericUpDown();
            this.Low = new System.Windows.Forms.NumericUpDown();
            this.primesButton = new System.Windows.Forms.Button();
            this.resultTextBox = new System.Windows.Forms.TextBox();
            this.groupBox1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.High)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.Low)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(0, 31);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(95, 13);
            this.label1.TabIndex = 2;
            this.label1.Text = "Enter two integers:";
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.High);
            this.groupBox1.Controls.Add(this.Low);
            this.groupBox1.Controls.Add(this.primesButton);
            this.groupBox1.Controls.Add(this.label1);
            this.groupBox1.Location = new System.Drawing.Point(12, 12);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(261, 90);
            this.groupBox1.TabIndex = 3;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "User Input For Range";
            // 
            // High
            // 
            this.High.Location = new System.Drawing.Point(175, 24);
            this.High.Minimum = new decimal(new int[] {
            1,
            0,
            0,
            0});
            this.High.Name = "High";
            this.High.Size = new System.Drawing.Size(56, 20);
            this.High.TabIndex = 5;
            this.High.Value = new decimal(new int[] {
            10,
            0,
            0,
            0});
            this.High.ValueChanged += new System.EventHandler(this.numericUpDown2_ValueChanged);
            // 
            // Low
            // 
            this.Low.Location = new System.Drawing.Point(113, 24);
            this.Low.Name = "Low";
            this.Low.Size = new System.Drawing.Size(56, 20);
            this.Low.TabIndex = 4;
            this.Low.Value = new decimal(new int[] {
            1,
            0,
            0,
            0});
            this.Low.ValueChanged += new System.EventHandler(this.numericUpDown1_ValueChanged);
            // 
            // primesButton
            // 
            this.primesButton.Location = new System.Drawing.Point(50, 61);
            this.primesButton.Name = "primesButton";
            this.primesButton.Size = new System.Drawing.Size(181, 23);
            this.primesButton.TabIndex = 3;
            this.primesButton.Text = "List Primes Within This Range";
            this.primesButton.UseVisualStyleBackColor = true;
            this.primesButton.Click += new System.EventHandler(this.primeButton_Click);
            // 
            // resultTextBox
            // 
            this.resultTextBox.Location = new System.Drawing.Point(12, 116);
            this.resultTextBox.Multiline = true;
            this.resultTextBox.Name = "resultTextBox";
            this.resultTextBox.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.resultTextBox.Size = new System.Drawing.Size(260, 119);
            this.resultTextBox.TabIndex = 4;
            // 
            // primeForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(293, 261);
            this.Controls.Add(this.resultTextBox);
            this.Controls.Add(this.groupBox1);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "primeForm";
            this.Text = "Range Based Prime Numbers";
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.High)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.Low)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.NumericUpDown High;
        private System.Windows.Forms.NumericUpDown Low;
        private System.Windows.Forms.Button primesButton;
        private System.Windows.Forms.TextBox resultTextBox;
    }
}

