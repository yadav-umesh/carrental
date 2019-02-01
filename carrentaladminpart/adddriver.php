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
            $sql="insert into driver_tbl values(NULL,'$name','$contact','$address','$email','$licence','$fname')";
            $rs=mysqli_query($cn,$sql);
            if($rs)
            {
                header('location: viewdriver.php');
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
                    <td><input class="input" type="text" placeholder="Driver Name" name="t1"></td>
                </tr>
                <tr>
                    <td>Contact No.</td>
                    <td><input class="input" type="text" placeholder="Driver Contact No." name="t2"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea cols="42" rows="10" name="t3">Enter address....</textarea><br><br></td>
                </tr>
                <tr>
                    <td>Email Id</td>
                    <td><input class="input" type="text" placeholder="Email Id" name="t4"></td>
                </tr>
                <tr>
                    <td>Driving Licence No.</td>
                    <td><input class="input" type="text" placeholder="Licence No." name="t5"></td>
                </tr>
                <tr>
                    <td>Driver Photo</td>
                    <td><input type="file" name="fil"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" class="sub"></td>
                </tr>
            </table>
        </form>
    </body>
</html>