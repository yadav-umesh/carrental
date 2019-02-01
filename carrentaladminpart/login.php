<html>
    <head>
        <title>Admin Login</title>
        <?php
        session_start();
        global $msg;
        $cn=mysqli_connect("localhost","root","","carrental_db");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql="select * from login_tbl where username='$username' and password='$password'";
            $rs=mysqli_query($cn,$sql);
            $n=mysqli_fetch_array($rs);
            if($n)
            {
                $_SESSION['is_login']="true";
                $_SESSION['user']=$username;
                header('location: home.php');
            }
        }
        ?>
        <style>
            p
            {
                margin-top: 120px;
                color: #1C2833;
                font-size: 70px;
                font-weight: 900;
                text-align: center;
            }
            * {
                margin: 0px;
                padding: 0px;
            }
            body
            {
                font-size: 120%;
                background: #F8F8FF;
            }
            .header
            {
                width: 30%;
                margin: 50px auto 0px;
                color: white;
                background: #5F9EA0;
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
            }
            form, .content
            {    
                width: 30%;
                margin: 0px auto;
                padding: 20px;
                border: 1px solid #B0C4DE;
                background: white;
                border-radius: 0px 0px 10px 10px;
            }   
            .input
            {
                margin: 10px 0px 10px 0px;
            }
            .input label
            {
                display: block;
                text-align: left;
                margin: 3px;
                font-size: 24px;
                font-weight: 800;
                color: grey;
            }
            .input input {
                height: 30px;
                width: 93%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
            }
            .btn
            {
                padding: 10px;
                font-size: 15px;
                color: white;
                background: #5F9EA0;
                border: none;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <p>Welcome Admin</p>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form method="post" action="login.php">
            <?php echo $msg; ?>
            <div class="input">
          		<label>Username</label>
          		<input type="text" name="username" required="required">
        	</div>
            <div class="input">
                <label>Password</label>
                <input type="password" name="password" required="required">
            </div>
            <div class="input">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
        </form>
    </body>
</html>