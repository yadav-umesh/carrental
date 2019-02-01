<!doctype html>
<?php
include("config.php");
if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
{
	header("location:index.php");
}
?>

<html>
<head>
<?php
	$carid=$_REQUEST['carid'];
	$userid=$_REQUEST['userid'];
	$routeid=$_REQUEST['routeid'];
	
	$sql="select * from cardetail_tbl where carid='$carid'";
	$rs=mysqli_query($con,$sql);
	$db=mysqli_fetch_array($rs);
	
	$sql1="select * from usersignup_tbl where userid='$userid'";
	$rs1=mysqli_query($con,$sql1);
	$db1=mysqli_fetch_array($rs1);
	
	$sql2="select * from route_tbl where routeid='$routeid'";
	$rs2=mysqli_query($con,$sql2);
	$db2=mysqli_fetch_array($rs2);
	
	$booking=500;
	$rent=$db['carrent'];
	$km=$db2['routekm'];
?>

<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/view.css">

</head>
<body class="preview">
	<div class="header">
		<?php include("lheader.php"); ?>
	</div>
	<div class="table">
		<table id="table">
			<tr>
				<th id="th" colspan="2">CHECKOUT</th>
			</tr>
			<tr>
				<td id="td">Booking Fee</td>
				<td id="blank">&#8377; <?php echo $booking; ?></td>
			</tr>
			<tr>
				<td id="td">Rate/Km</td>
				<td id="blank">&#8377; <?php echo $rent;?></td>
			</tr>
			<tr>
				<td id="td">Distance (in Km)</td>
				<td id="blank">&#8377; <?php echo $km;?></td>
			</tr>
			<tr>
				<td id="none">Total Payable Amount</td>
				<td id="blankk">&#8377; <?php echo($booking+($rent*$km));?></td>
			</tr>
		</table>
		<input type="submit" name="s1" class="buttton" value="CHECKOUT">
	</div>
	<div class="summary">
		<div class="booking-car">
			<div class="headline">
				SUMMARY
			</div>
			<div class="car">
				<img src="Admin/image/car/<?php echo $db['carpic'];?>">
			</div>
			<div class="model">
				<?php
				$companyid=$db['companyid'];
				$sql3="select * from company_tbl where companyid='$companyid'";
				$res=mysqli_query($con,$sql3);
				while ($d=mysqli_fetch_array($res))
				{
					echo $d['companyname'];
				}
				echo $db['carmodel'];
				?>
			</div>
			<div class="seat">
				<b>Seater : </b><?php echo $db['carseat'];?>
			</div>
		</div>
		<br>
		<hr>
		<div class="pickup">
			I Shahbaz Alam student of Institute of Engineering And Management
		</div>
		<hr>
		<table class="preview-table">
			<tr>
				<td>Km (?)</td>
				<td id="summ"><?php echo $km; ?></td>
			</tr>
			<tr>
				<td>Excess Km (?)</td>
				<td id="sum">&#8377; <?php echo $db['carrent'];?>/Km</td>
			</tr>
		</table>
		<hr>
		<div class="fare">
			<br>FARE INCLUDES
		</div>
		<div class="icon">
			<img src="image/fuel-service_318-27525.jpg" class="preview-logo">
			<img src="image/800px_COLOURBOX25808814.jpg" class="preview-logo">
			<img src="image/download.jpg" class="preview-logo">
		</div>
	</div>
	<div class="footer">
		<?php include("footer.php"); ?>
	</div>
</body>
</html>