<?php
session_start();
if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
{
    header("location:login.php");
}
$cn=mysqli_connect("localhost","root","","carrental_db");
$companyid=$_REQUEST['miss'];
$sql="delete from company_tbl where companyid='$companyid'";
mysqli_query($cn,$sql);
header("location:viewcompany.php");
?>