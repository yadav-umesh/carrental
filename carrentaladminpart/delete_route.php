<?php
session_start();
if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
{
    header("location:login.php");
}
$cn=mysqli_connect("localhost","root","","carrental_db");
$routeid=$_REQUEST['miss'];
$sql="delete from route_tbl where routeid='$routeid'";
mysqli_query($cn,$sql);
header("location:viewroute.php");
?>