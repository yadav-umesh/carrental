  <html>
    <head>
        <?php include 'lheader.php'; ?>
        <?php
        $msg="";
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $carid=$_REQUEST['id'];
        $cn=mysqli_connect("localhost","root","","carrental_db");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name=$_POST['name'];
            $email1=$_POST['email'];
            $phone=$_POST['phone'];
            $source=$_POST['source'];
            $destination=$_POST['destination'];            
            $sql="insert into booking_tbl values(NULL,'$name','$email1','$phone','$source','$destination','$carid')";
            $n=mysqli_query($cn,$sql);
            if($n)
            {
                $last_id=mysqli_insert_id($cn);
                $_SESSION['lastid']=$last_id;
                header('location: preview.php?id='.$carid);
            }
        }
        ?>
    <style>
      body
      {
        background-image: url("highway-cars-wallpaper-3.jpg");
        background-position: center;
      }
      .form
      {
        margin-top: 100px;
        background-color: #706E74;
        height: 650px;
        width: 400px;
        margin-left: 600px;
        margin-bottom: 50px;
        opacity: 0.9;
      }
      .input
      {
        margin-top: 5px;
        margin-left: 35px;
        height: 40px;
        width: 325px;
        font-size: 18px;
        padding-left: 25px;
        margin-bottom: 20px;
      }
      .header
      {
        padding-top: 70px;
        color: white;
        font-size: 40px;
        margin-left: 110px;
        margin-bottom: 20px;
      }
      .btn
      {
        color: white;
        background-color: #8560BC;
        margin-top: 5px;
        margin-left: 35px;
        height: 55px;
        width: 325px;
        font-size: 30px;
        margin-bottom: 20px;
        border: none;
      }
      p
      {
        margin-left: 35px;
      }
      .signup
      {
        opacity: 0.9;
        background-color: #706E74;
        color: white;
        margin-left: 600px;
        width: 400px;
        height: 100px;
        margin-bottom: 20px;
      }
      .create
      {
        color: white;
        background-color: #8560BC;
        border: none;
        margin-left: 25px;
        height: 60px;
        width: 350px;
        margin-top: 20px;
        font-size: 30px;
      }
    </style>
  </head>
  <body>
    <form method="post" class="form" enctype="multipart/form-data">
      <div class="header"><b>Book Now</b></div><br>
      <?php echo $msg; ?>
      <input type="text" name="car"
             <?php
             $sql0="select * from cardetails_tbl where carid='$carid'";
             $result=mysqli_query($cn,$sql0);
             while ($dbd=mysqli_fetch_array($result))
             {
              ?>
                <?php
                    $a1=$dbd['companyid'];
                    $a2="select * from company_tbl where companyid='$a1'";
                    $a3=mysqli_query($cn,$a2);
                    while ($a4=mysqli_fetch_array($a3))
                    {
                    ?>
                        value="<?php echo $a4['companyname'];?>&nbsp;<?php echo $dbd['carmodel'];?>" class="input" readonly="readonly"></br>
                    <?php
                    }
                    ?>
              <?php
             }
             ?>
             <?php
        $username=$_SESSION['user'];
        $z1="select * from usersignup_tbl where email='$username'";
        $z2=mysqli_query($cn,$z1);
        while($z3=mysqli_fetch_array($z2))
        {
        ?>
            <input type="text" name="name" class="input" value="<?php echo $z3['name'];?>" readonly="readonly"></br>
            <input type="email" name="email" placeholder="Email Id" class="input" value="<?php echo $z3['email'];?>" readonly="readonly"><br>
            <input type="text" name="phone" placeholder="Contact No" class="input" value="<?php echo $z3['phone'];?>" readonly="readonly"></br>
        <?php
        }
        ?>
      <select name="source" class="input" required="required">
        <option value="select">Select Source</option>
        <?php
        $sql2="select distinct routesource from route_tbl";
        $rs=mysqli_query($cn,$sql2);
        while($db=mysqli_fetch_array($rs))
        {
        ?>
            <option value="<?php echo $db['routesource']; ?>"><?php echo $db['routesource']; ?></option>
        <?php
        }
        ?>
      </select>
      <select name="destination" class="input" required="required">
        <option value="select">Select Destination</option>
        <?php
        $sql1="select distinct routedestination from route_tbl";
        $res=mysqli_query($cn,$sql1);
        while($d=mysqli_fetch_array($res))
        {
        ?>
            <option value="<?php echo $d['routedestination']; ?>"><?php echo $d['routedestination']; ?></option>
        <?php
        }
        ?>
      </select>
      <a href="preview.php?source=<?php echo $source?>&destination=<?php echo $destination?>"><input type="submit" name="s1" value="Book Now" class="btn"></a>
    </form>
  </body>
  </html>