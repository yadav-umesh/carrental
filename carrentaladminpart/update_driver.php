<html>
    <head>
        <?php
        session_start();
        $msg="";
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $driverid=$_REQUEST['edit'];
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name=$_POST['t1'];
            $contact=$_POST['t2'];
            $address=$_POST['t3'];
            $email=$_POST['t4'];
            $licence=$_POST['t5'];
            $fil=$_FILES['fil'];
            $fname=$fil['name'];
            $old=$fil['tmp_name'];
            $new="Image/".$fname;
            move_uploaded_file($old,$new);
            if($fname=="")
            {
                $sql1="update driver_tbl set drivername='$name',driverphone='$contact',driveradd='$address',driveremail='$email',driverlicence='$licence' where driverid='$driverid'";
                $rs=mysqli_query($cn,$sql1);
                if($rs)
                {
                    header('location: viewdriver.php');
                }
            }
            else
            {
                $sql1="update driver_tbl set drivername='$name',driverphone='$contact',driveradd='$address',driveremail='$email',driverlicence='$licence',driverpic='$fname' where driverid='$driverid'";
                $rs=mysqli_query($cn,$sql1);
                if($rs)
                {
                    header('location: viewdriver.php');
                }
            }
        }
        $sql="select * from driver_tbl where driverid='$driverid'";
        $res=mysqli_query($cn,$sql);
        $db=mysqli_fetch_array($res);
        ?>
        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <style>
            table
            {
                font-size: 25px;   
            }
            .form
            {
                border-radius: 15px;
                margin-top: 80px;
                margin-left: 600px;
                width: 500px;
            }
            .input,.select
            {
                border: 2px solid black;
                height: 40px;
                width: 300px;
                font-size: 25px;
                margin-bottom: 20px;
            }
            .sub
            {
                margin-left: 150px;
                padding: 10px;
                font-size: 15px;
                color: white;
                background: #5F9EA0;
                border: none;
                border-radius: 5px;
                height: 40px;
                width: 90px;
            }
            legend
            {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" class="form">
            <legend>Add Driver Details</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input class="input" type="text" value="<?php echo $db['drivername']; ?>" name="t1"></td>
                </tr>
                <tr>
                    <td>Contact No.</td>
                    <td><input class="input" type="text" value="<?php echo $db['driverphone']; ?>" name="t2"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea cols="42" rows="10" name="t3"><?php echo $db['driveradd'];?></textarea></td>
                </tr>
                <tr>
                    <td>Email Id</td>
                    <td><input class="input" type="text" value="<?php echo $db['driveremail']; ?>" name="t4"></td>
                </tr>
                <tr>
                    <td>Driving Licence No.</td>
                    <td><input class="input" type="text" value="<?php echo $db['driverlicence']; ?>" name="t5"></td>
                </tr>
                <tr>
                    <td>Driver Photo</td>
                    <td><img src="Image/<?php echo $db['driverpic'];?>" height="100"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="hidden" name="id" value="<?php echo $db['driverid'];?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="file" name="fil"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" class="sub"></td>
                </tr>
            </table>
        </form>
    </body>
</html>