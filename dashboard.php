<?php
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}
include_once("bg.php");
ob_start();

$wel="You are Logged in as ";
echo $wel.$_SESSION['stduid2'];
echo "&nbsp"."&nbsp";
echo '<input type="button" style="width:150px;height:30px" class="btn-danger" value="Click here to Logout" onclick="window.location =\'logout.php\'" />';
?>

<html>
<head></head>
<title>
    Dashboard
</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>
<br><br><br><br><br><br><br><br>
<center>
<table border="20" height="100" width="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Enroll New Student" onclick="window.location ='enroll.php'">
</TD>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Edit Student Details" onclick="window.location ='edit_adm_prof.php'">
</TD>
</TR>

<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="View Student Details" onclick="window.location ='view_adm_prof.php'">
</TD>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Delete Student Details" onclick="window.location ='deladmin.php'">
</TD>
</TR>
</table>
</center>
</body>
<?php
ob_end_flush();
?>
<?php
unset($_SESSION['maspwd2']);
?>