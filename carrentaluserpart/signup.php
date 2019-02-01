<html>
  <head>
    <?php include 'header.php';?>
    <?php
        session_start();
        $msg="";
      $carid=$_REQUEST['id'];
        $cn=mysqli_connect("localhost","root","","carrental_db");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name=$_POST['name'];
            $email1=$_POST['email'];
            $phn=$_POST['phone'];
            $psw=$_POST['pswd'];
            $rpsw=$_POST['rpswd'];
            if($psw==$rpsw)
            {
                $sql1="select * from usersignup_tbl where email='$email1'";
                $rs=mysqli_query($cn,$sql1);
                $ct=mysqli_num_rows($rs);
                if($ct==0)
                {
                    $sql="insert into usersignup_tbl values(NULL,'$name','$email1','$phn','$psw','$rpsw')";
                    $n=mysqli_query($cn,$sql);
                    if($n)
                    {
                        $_SESSION['is_login']="true";
                        $_SESSION['user']=$email1;
                        header('location: booknow.php?id='.$carid);
                        
                    }
                    else
                    {
                        $msg="REGISTRATION FAILED";
                    }
                }
                else
                {
                    $msg="USER ALREADY EXISTS";
                }
            }
            else
            {
                $msg="PASSWORD MISMATCH";  
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
        height: 580px;
        width: 400px;
        margin-left: 600px;
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
        margin-left: 135px;
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
    <form method="post" class="form">
      <div class="header"><b>Sign Up</b></div><br>
      <?php echo $msg; ?>
      <input type="text" name="name" placeholder="Name" class="input" required="required"></br>
      <input type="text" name="email" placeholder="Email Id" class="input" required="required"><br>
      <input type="text" name="phone" placeholder="Contact No" class="input" required="required"></br>
      <input type="password" name="pswd" placeholder="Password" class="input" required="required"><br>
      <input type="password" name="rpswd" placeholder="Retype Password" class="input" required="required"><br>
      <input type="submit" name="s1" value="Sign Up" class="btn">
    </form>
    <div class="signup">
      <a href="login.php"><input type="submit" value="Sign In" class="create"</a>
    </div>  
  </body>
</html>