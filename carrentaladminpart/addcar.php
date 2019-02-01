<html>
    <head>
        <?php
        global $msg;
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $carmodel=$_POST['m1'];
            $carseat=$_POST['genre'];
            $carrent=$_POST['rent'];
            $carfeature=$_POST['feature'];
            $compid=$_POST['s1'];
            $fil=$_FILES['pic'];
            $fname=$fil['name'];
            $old=$fil['tmp_name'];
            $new="CarImage/".$fname;
            $res=move_uploaded_file($old,$new);
            $sql="insert into cardetails_tbl values(NULL,'$carmodel','$carseat','$carrent','$carfeature','$compid','$fname')";
            $rs=mysqli_query($cn,$sql);
            if($rs)
            {
                header('location: viewcar.php');
            }
        }
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
                width: 600px;
                height: 400px;
                padding-left: 25px;
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
            <legend>Add Car Details</legend>
            <table>
                <tr>
                    <td>Model Name</td>
                    <td><input class="input" type="text" placeholder="Model Name" name="m1"></td>
                </tr>
                <tr>
                    <td>Seater</td>
                    <td><select class="select" name="genre">
                        <option value="select">Select</option>
                        <option value="Two Seater">Two Seater</option>
                        <option value="Four Seater">Four Seater</option>
                        <option value="Six Seater">Six Seater</option>
                        <option value="Eight Seater">Eight Seater</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Rent Per Day</td>
                    <td><input class="input" type="text" placeholder="Rate" name="rent"></td>
                </tr>
                <tr>
                    <td>AC/Non-AC</td>
                    <td><select class="select" name="feature">
                        <option value="select">Select</option>
                        <option value="AC">AC</option>
                        <option value="Non-AC">Non-AC</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td>
                        <select name="s1" class="select">
                            <?php
                            $sql="select * from company_tbl";
                            $rs=mysqli_query($cn,$sql);
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
                    <td>Car Photo</td>
                    <td><input type="file" name="pic"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" class="sub"></td>
                </tr>
            </table>
        </form>
        <?php echo $msg; ?>
    </body>
</html>