<html>
    <head>
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $model=$_POST['model'];
			$seat=$_POST['seat'];
			$feature=$_POST['feature'];
			$id=$_POST['id'];
			$rent=$_POST['rent'];
		
			$sql="INSERT INTO cardetails_tbl values(NULL,'$model','$seat','$feature','$rent','$id')";
			$n=mysqli_query($con,$sql);	
				
        }
        ?>
        <style>
            .form
            {
                margin: 150px;
                margin-left: 700px;
            }
            .input
            {
                border: 2px solid black;
                height: 40px;
                width: 300px;
                font-size: 25px;
                margin-bottom: 20px;
            }
            .submit
            {
                height: 40px;
                width: 100px;
                font-size: 25px;
            }
        </style>
    </head>
    <body>
       <?php include 'file:///C|/Users/ZEESHAN/Downloads/Documents/Book/header.php'; ?>
        <?php include 'file:///C|/Users/ZEESHAN/Downloads/Documents/Book/sidebar.php'; ?>
        <form method="post" class="form">
            <table>
                <tr>
                    <td>Model Name</td>
                    <td><input class="input" name="model" type="text" placeholder="Model Name"></td>
                </tr>
                <tr>
                    <td>Seater</td>
                    <td><input type="radio" name="seat" value="2" checked="checked"/>Two</td>
                    <td><input type="radio" name="seat" value="4" name="seat"/>Four</td>
                    <td><input type="radio" name="seat" value="6"/>Six</td>
                    <td><input type="radio" name="seat" value="8"/>Eight</td>
                </tr>
                
                <tr>
                    <td>AC/Non-AC</td>
                    <td><select name="feature">
                        <option value="AC">AC</option>
                        <option value="NON-AC">Non-AC</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td>
                        <select name="id">
                            <?php
                            $sql="select * from company_tbl";
                            $rs=mysqli_query($con,$sql);
                            while($d=mysqli_fetch_array($rs))
                            {
                            ?>
                                <option value="<?php echo $d['companyid'];?>"><?php echo $d['companyname'];?></option>
                            <?php
                            }
                            ?>  
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Rent Per Day</td>
                    <td><input class="input" type="text" name="rent" placeholder="Rate"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>