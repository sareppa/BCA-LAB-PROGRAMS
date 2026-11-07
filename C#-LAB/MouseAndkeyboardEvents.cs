using System;
using System.Windows.Forms;

namespace EventsApp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            this.MouseClick += Form1_MouseClick;
            this.KeyDown += Form1_KeyDown;
            this.KeyPreview = true;
        }

        private void Form1_MouseClick(object sender, MouseEventArgs e)
        {
            lblResult.Text = "Mouse Clicked!";
        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
            lblResult.Text = "Key Pressed: " + e.KeyCode;
        }
    }
}