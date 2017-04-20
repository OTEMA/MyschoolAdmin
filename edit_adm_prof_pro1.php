<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}

?>

<?php
if(isset($_POST['upd']))
{
$adm_no=$conn->escape_string($_POST['adm_no']);
$tc_issue=$conn->escape_string($_POST['tc_issue']);
$year=$conn->escape_string($_POST['year']);
$twnvill=$conn->escape_string($_POST['twnvill']);
$dob=$conn->escape_string($_POST['dob']);
$gen=$conn->escape_string($_POST['gen']);
$religion=$conn->escape_string($_POST['religion']);
$caste=$conn->escape_string($_POST['caste']);
$comunit=$conn->escape_string($_POST['comunit']);
$fname=$conn->escape_string($_POST['fname']);
$f_ed_qua=$conn->escape_string($_POST['f_ed_qua']);
$f_add_pin=$conn->escape_string($_POST['f_add_pin']);
$ph_no=$conn->escape_string($_POST['ph_no']);
$cls_adm=$conn->escape_string($_POST['cls_adm']);
$cls_sec=$conn->escape_string($_POST['cls_sec']);
$grop_adm=$conn->escape_string($_POST['grop_adm']);
$med_adm=$conn->escape_string($_POST['med_adm']);
$dat_adm=$conn->escape_string($_POST['dat_adm']);
$emis_no=$conn->escape_string($_POST['emis_no']);

$sql="UPDATE stud_adm SET tc_issue='$tc_issue',year='$year',twnvill='$twnvill',dob='$dob',gen='$gen',religion='$religion',caste='$caste',comunit='$comunit',fname='$fname',f_ed_qua='$f_ed_qua',
f_add_pin='$f_add_pin',ph_no='$ph_no',cls_adm='$cls_adm',cls_sec='$cls_sec',grop_adm='$grop_adm',med_adm='$med_adm',dat_adm='$dat_adm',emis_no='$emis_no' WHERE adm_no='$adm_no'";

$result= mysql_query($sql);

if($result)
{
echo "<br><br><br><br><br><center><h3>Updated Successfully" ;
}
else
{
echo "Failed to Update";
}
}
?>
<br><br>
<center>
<input type="button" style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">