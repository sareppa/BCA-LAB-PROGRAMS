using System;
using System.Windows.Forms;
using System.Drawing;

namespace events
{
    public partial class Form1 : Form
    {
        TextBox txtNum1 = new TextBox();
        TextBox txtNum2 = new TextBox();
        Label lblResult = new Label();
        Button btnAdd = new Button();
        Button btnSubtract = new Button();
        Button btnMultiply = new Button();
        Button btnDivide = new Button();

        public Form1()
        {
            InitializeComponent();

            // Form settings
            Text = "Basic Arithmetic Operations";
            Size = new Size(400, 300);

            // First Number
            Label l1 = new Label();
            l1.Text = "First Number:";
            l1.Location = new Point(30, 30);
            l1.AutoSize = true;
            Controls.Add(l1);

            txtNum1.Location = new Point(150, 30);
            Controls.Add(txtNum1);

            // Second Number
            Label l2 = new Label();
            l2.Text = "Second Number:";
            l2.Location = new Point(30, 70);
            l2.AutoSize = true;
            Controls.Add(l2);

            txtNum2.Location = new Point(150, 70);
            Controls.Add(txtNum2);

            // Buttons
            btnAdd.Text = "Addition";
            btnAdd.Location = new Point(30, 120);
            Controls.Add(btnAdd);

            btnSubtract.Text = "Subtract";
            btnSubtract.Location = new Point(120, 120);
            Controls.Add(btnSubtract);

            btnMultiply.Text = "Multiply";
            btnMultiply.Location = new Point(220, 120);
            Controls.Add(btnMultiply);

            btnDivide.Text = "Divide";
            btnDivide.Location = new Point(120, 160);
            Controls.Add(btnDivide);

            // Result Label
            lblResult.Text = "Result:";
            lblResult.Location = new Point(30, 210);
            lblResult.AutoSize = true;
            Controls.Add(lblResult);

            // Arithmetic Logic
            btnAdd.Click += (s, e) =>
            {
                int a = int.Parse(txtNum1.Text);
                int b = int.Parse(txtNum2.Text);
                lblResult.Text = "Result: " + (a + b);
            };

            btnSubtract.Click += (s, e) =>
            {
                int a = int.Parse(txtNum1.Text);
                int b = int.Parse(txtNum2.Text);
                lblResult.Text = "Result: " + (a - b);
            };

            btnMultiply.Click += (s, e) =>
            {
                int a = int.Parse(txtNum1.Text);
                int b = int.Parse(txtNum2.Text);
                lblResult.Text = "Result: " + (a * b);
            };

            btnDivide.Click += (s, e) =>
            {
                int a = int.Parse(txtNum1.Text);
                int b = int.Parse(txtNum2.Text);

                if (b != 0)
                    lblResult.Text = "Result: " + ((double)a / b);
                else
                    MessageBox.Show("Cannot divide by zero");
            };
        }
    }
}