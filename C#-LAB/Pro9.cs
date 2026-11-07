using System;
using MySql.Data.MySqlClient;

class Program
{
    static void Main()
    {
        string conStr =
            "server=localhost;database=college;uid=root;pwd=;";

        using (MySqlConnection con =
            new MySqlConnection(conStr))
        {
            try
            {
                con.Open();
                Console.WriteLine("Database Connected Successfully!");
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
        }
    }
}