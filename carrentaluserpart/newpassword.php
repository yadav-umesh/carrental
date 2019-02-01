<html>
  <head>
    <?php include 'header.php';?>
    <?php
    session_start();
    $msg="";
    $cn=mysqli_connect("localhost","root","","carrental_db");
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $sql="select * from usersignup_tbl where email='$username' and password='$password'";
      $db=mysqli_query($cn,$sql);
      $d=mysqli_fetch_array($db);
      if(($d['email']==$username && $d['password']==$password)&&($username!="" && $password!=""))
      {
        $_SESSION['is_login']="true";
        $_SESSION['user']=$username;
        header('location: lmenu.php');
      }
      else
      {
        $msg="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Wrong Username/Password";
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
        height: 450px;
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
        height: 50px;
        width: 325px;
        font-size: 25px;
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
        font-size: 25px;
        color: white;
        background-color: #8560BC;
        border: none;
        margin-left: 25px;
        height: 60px;
        width: 350px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <form method="post" class="form">
      <div class="header"><b>Create New Password</b></div><br>
      <?php echo $msg; ?>
      <input type="password" name="newpassword" placeholder="New Password" class="input"</br>
      <input type="password" name="password" placeholder="Retype Password" class="input"><br>
      <input type="submit" name="s1" value="Submit" class="btn">
    </form>  
  </body>
</html>