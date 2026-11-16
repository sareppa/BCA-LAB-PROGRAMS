<%@ Page Language="C#" %>
<%@ Import Namespace="System.Data.SqlClient" %>

<script runat="server">
    protected void btnSave_Click(object sender, EventArgs e)
    {
        string cs = @"Data Source=(localdb)\MSSQLLocalDB;
                      Initial Catalog=College;
                      Integrated Security=True";

        using (SqlConnection con = new SqlConnection(cs))
        {
            con.Open();

            string query = "INSERT INTO Student VALUES (@id, @name)";

            SqlCommand cmd = new SqlCommand(query, con);

            cmd.Parameters.AddWithValue("@id", int.Parse(txtId.Text));
            cmd.Parameters.AddWithValue("@name", txtName.Text);

            cmd.ExecuteNonQuery();

            lblResult.Text = "Record Saved Successfully";
        }
    }
</script>

<html>
<body>
    <form runat="server">

        Student ID:
        <asp:TextBox ID="txtId" runat="server" />

        <br /><br />

        Student Name:
        <asp:TextBox ID="txtName" runat="server" />

        <br /><br />

        <asp:Button ID="btnSave" runat="server" Text="Save"
            OnClick="btnSave_Click" />

        <br /><br />

        <asp:Label ID="lblResult" runat="server" />

    </form>
</body>
</html>