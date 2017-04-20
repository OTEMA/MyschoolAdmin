<?php
include_once("bg.php");
include_once("config.php");
session_start();
ob_start();

?>
<center><img draggable='false' width='100' height='100' src=images/background/logo.png>
</center>
<center>
<h2> Otema College Of Science And Techolgy </h2>
        <h2 style="color: #000033;">(Otema School)</font><h2>
<h3>Student Management System</h3>
<table border="20" height="100" cellpadding="10" bordercolor='#000033' bgcolor='#E5F4F4'>
<form action="default.php" method="POST" autocomplete="off">
<TR>
<TD><b>Email</b></TD>
<TD>
<input type="email" name="uid" autofocus placeholder="someone@domain.com" style="width:180px;height:20px" required>
</TD>
</TR>

<TR>
<TD><b>Password</b></TD>
<TD>
<input type="password" name="pwd" style="width:180px;height:20px" required>
</TD>
</TR>

<TR>
<TD><b></b></TD>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Log-In" name="loger" style="height:30px;width:80px">
</form>
</table>
<?php
if(isset($_POST['loger']))
{
$uid = $conn->escape_string($_POST['uid']);
$pwd = $conn->escape_string($_POST['pwd']);
$result = $conn->query("SELECT * FROM user WHERE eid='$uid' AND pwd='$pwd'");

if($row = mysqli_fetch_array($result))
{
$_SESSION['stduid2']=$row['eid'];//stores userid session
$_SESSION['stdpwd2']=$row['pwd'];//stores password session
header('location:dashboard.php');
}
else
{
echo '<script type="text/javascript">alert("Invalid Username or Password!");</script>';
}
}
?>
</center>