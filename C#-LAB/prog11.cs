<%@ Page Language="C#" AutoEventWireup="true" %>

<script runat="server">
    protected void btnSubmit_Click(object sender, EventArgs e)
    {
        lblResult.Text = "Welcome, " + txtName.Text;
    }
</script>

<html>
<body>
    <form runat="server">
        Enter Name:
        <asp:TextBox ID="txtName" runat="server" />

        <asp:Button ID="btnSubmit" runat="server"
            Text="Submit" OnClick="btnSubmit_Click" />

        <br /><br />

        <asp:Label ID="lblResult" runat="server" />
    </form>
</body>
</html>