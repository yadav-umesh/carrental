<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $carid=$_REQUEST['edit'];
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $carmodel=$_POST['m1'];
            $carseat=$_POST['genre'];
            $carrent=$_POST['rent'];
            $carfeature=$_POST['feature'];
            $compid=$_POST['s1'];
            $fil=$_FILES['fil'];
            $fname=$fil['name'];
            $old=$fil['tmp_name'];
            $new="CarImage/".$fname;
            move_uploaded_file($old,$new);
            if($fname=="")
            {
                $sql1="update cardetails_tbl set carmodel='$carmodel',carseat='$carseat',carrent='$carrent',carfeature='$carfeature',companyid='$compid' where carid='$carid'";
                $rs=mysqli_query($cn,$sql1);
                if($rs)
                {
                    header('location: viewcar.php');
                }
            }
            else
            {
                $sql1="update cardetails_tbl set carmodel='$carmodel',carseat='$carseat',carrent='$carrent',carfeature='$carfeature',companyid='$compid',carphoto='$fname' where carid='$carid'";
                $rs=mysqli_query($cn,$sql1);
                if($rs)
                {
                    header('location: viewcar.php');
                }
            }
        }
        $sql="select * from cardetails_tbl where carid='$carid'";
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
        <form method="post" class="form" enctype="multipart/form-data">
            <legend>Update Car Details</legend>
            <table>
                <tr>
                    <td>Model Name</td>
                    <td><input class="input" type="text" placeholder="Model Name" name="m1" value="<?php echo $db['carmodel']; ?>"></td>
                </tr>
                <tr>
                    <td>Seater</td>
                    <td><select class="select" name="genre">
                        <option value="select"
                        <?php
                                if($db['carseat']=="select")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                        >Select</option>
                        <option value="Two Seater"
                        <?php
                                if($db['carseat']=="Two Seater")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                        >Two Seater</option>
                        <option value="Four Seater"
                        <?php
                                if($db['carseat']=="Four Seater")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                        >Four Seater</option>
                        <option value="Six Seater"
                        <?php
                                if($db['carseat']=="Six Seater")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                        >Six Seater</option>
                        <option value="Eight Seater"
                        <?php
                                if($db['carseat']=="Eight Seater")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                        >Eight Seater</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Rent Per Day</td>
                    <td><input class="input" type="text" placeholder="Rate" name="rent" value="<?php echo $db['carrent']; ?>"></td>
                </tr>
                <tr>
                    <td>AC/Non-AC</td>
                    <td><select class="select" name="feature">
                        <option value="select"
                                <?php
                                if($db['carfeature']=="select")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                                >Select</option>
                        <option value="AC"
                        <?php
                                if($db['carfeature']=="AC")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                        >AC</option>
                        <option value="Non-AC"
                        <?php
                                if($db['carfeature']=="Non-AC")
                                {
                                ?>
                                selected="selected"
                                <?php
                                }
                                ?>
                        >Non-AC</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td>
                        <select name="s1" class="select">
                            <?php
                            $sql1="select * from company_tbl";
                            $rs1=mysqli_query($cn,$sql1);
                            while($d=mysqli_fetch_array($rs1))
                            {
                            ?>
                                <option value="<?php echo $d['companyid'];?>"
                                <?php
                                if($d['companyid']==$db['companyid'])
                                {
                                    ?>
                                    selected="selected"
                                    <?php
                                    }
                                    ?>
                                    ><?php echo $d['companyname'];?></option>
                            <?php
                            }
                            ?>  
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Car Photo</td>
                    <td><img src="CarImage/<?php echo $db['carphoto'];?>" height="100"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="file" name="fil"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Update" class="sub"></td>
                </tr>
            </table>
        </form>
    </body>
</html>