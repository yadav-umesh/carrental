<?php
session_start();
if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
{
    header("location:login.php");
}
$cn=mysqli_connect("localhost","root","","carrental_db");
$driverid=$_REQUEST['miss'];
$sql="delete from driver_tbl where driverid='$driverid'";
mysqli_query($cn,$sql);
header("location:viewdriver.php");
?>