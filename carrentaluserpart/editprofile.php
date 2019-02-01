<html>
    <head>
        <?php include 'lheader.php'; ?>
        <?php
        global $msg;
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $email= $_SESSION['user'];
        $cn=mysqli_connect("localhost","root","","carrental_db");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];
            $repassword=$_POST['repassword'];
            if($password==$repassword)
            {
                $sql1="update usersignup_tbl set name='$name', phone='$phone', password='$password',repassword='$repassword' where email='$email'";
                $rs=mysqli_query($cn,$sql1);
                if($rs)
                {
                    header('location: editprofile.php');
                }
            }
            else
            {
                $msg="Password Mismatch";
            }
        }
        $sql="select * from usersignup_tbl where email='$email'";
        $n=mysqli_query($cn,$sql);
        ?>
        <style>
            .links
            {
                float: left;
                width: 290px;
            }
            table img
            {
                width: 30px;
                height: 20px;
            }
            body
            {
                margin: 0px;
                padding: 0px;
            }
            .family
            {
                width: 1520px;
                height: 800px;
                position: fixed;
                z-index: -1;
                background-image: url("Top-factors-to-consider-when-buying-a-family-car.jpg");
                filter: blur(3px);
                -webkit-filter: blur(3px);
            }
            td
            {
                border-bottom: 1px solid black;
                font-size: 25px;
            }
            th
            {
                border-bottom: 2px solid black;
                font-size: 30px;
            }
            table
            {
                background-color: white;
                margin-top: 100px;
                margin-left: 50px;
                opacity: 0.7;
            }
            table a
            {
                color: black;
            }
            #logout
            {
                color: red;
            }
            table a:hover
            {
                font-size: 28px;
                color: red;
            }
            .profile
            {
                padding-top: 30px;
                padding-right: 10px;
                padding-left: 10px;
                margin-top: 100px;
                margin-left: 400px;
                background-color: white;
                width: 600px;
                height: 730px;
                opacity: 0.9;
            }
            .heading
            {
                font-size: 40px;
                font-family: arial;
            }
            .headline
            {
                margin-bottom: 20px;
                color: #4A4E49;
                padding-top: 15px;
                padding-left: 20px;
                margin-top: 20px;
                font-size: 20PX;
                font-weight: 900;
                background-color: #D6DAD5;
                height: 40px;
            }
            label
            {
                font-size: 30px;
            }
            .input
            {
                color: #424A53;
                font-size: 25px;
                width: 600px;
                height: 40px;
                padding-left: 20px;
            }
            .btn
            {
                width: 240px;
                height: 50px;
                margin-bottom: 100px;
                font-size: 20px;
                color: yellow;
                background-color: #333D49;
                border: none;
            }
        </style>
    </head>
    <body>
        <div class="family"></div>
        <div class="links">
            <table>
                <tr>
                    <th>User Profile Links</th>
                </tr>
                <tr>
                    <td><img src="triangle-right-arrow.png"><a href="editprofile.php">Edit Profile</a></td>
                </tr>
                <tr>
                    <td><img src="triangle-right-arrow.png"><a href="bookhistory.php">Booking History</a></td>
                </tr>
                <tr>
                    <td><img src="triangle-right-arrow.png"><a href="logout.php" id="logout">Logout</a></td>
                </tr>
            </table>
        </div>
        <div class="profile">
            <div class="heading">User Profile Dashboard</div>
            <div class="headline">ENTER YOUR PERSONAL INFORMATION</div>
            <form method="post" enctype="multipart/form-data">
                <?php echo $msg; ?><br>
                <table>
                    <?php while ($db=mysqli_fetch_array($n))
                    {
                    ?>
                        <label>Name</label><br><br>
                        <input type="text" name="name" class="input" value="<?php echo $db['name'];?>"><br><br>
                        <label>Email Id</label><br><br>
                        <input type="email" class="input" value="<?php echo $db['email'];?>" readonly="readonly"><br><br>
                        <label>Contact No</label><br><br>
                        <input type="text" name="phone" class="input" value="<?php echo $db['phone'];?>"><br><br>
                        <label>Password</label><br><br>
                        <input type="password" name="password" class="input" value="<?php echo $db['password'];?>"><br><br>
                        <label>Retype Password</label><br><br>
                        <input type="password" name="repassword" class="input" value="<?php echo $db['repassword'];?>"><br><br>
                    <?php
                    }
                    ?>
                </table>
                <input type="submit" class="btn" value="UPDATE PROFILE" name="s1">
            </form>
        </div>
    </body>
</html>