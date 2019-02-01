<?php
session_start();
if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
{
    header("location:login.php");
}
$cn=mysqli_connect("localhost","root","","carrental_db");
$carid=$_REQUEST['miss'];
$sql="delete from cardetails_tbl where carid='$carid'";
mysqli_query($cn,$sql);
header("location:viewcar.php");
?>