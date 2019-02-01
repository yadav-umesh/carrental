<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $pin1=$_POST['1pin'];
            $pin4=$_POST['4pin'];
            $sql="insert into paymentdetails_tbl values(NULL,'$pin1','$pin4')";
            $db=mysqli_query($cn,$sql);
            if($db)
            {
                $last_id=mysqli_insert_id($cn);
                header('location: pnb.php?id='.$last_id);
            }
        }
        ?>
        <style>
            body
            {
                margin: 0px;
                padding: 0px;
            }
            .form
            {
                border-radius: 15px;
                margin-top: 100px;
                margin-left: 420px;
                background-color: #9CC6F4;
                width: 600px;
                height: 350px;
                margin-bottom: 40px;
            }
            img
            {
                margin-top: 20px;
                padding-left: 20px;
                float: left;
                height: 70px;
                width: 90px;
            }
            .png
            {
                height: 90px;
            }
            p
            {
                color: #344D69;
                margin-left: 30px;
                margin-top: 10px;
                font-family: arial;
                font-size: 35px;
                margin-bottom: 20px;
            }
            .card
            {
                margin-bottom: 10px;
                float: left;
                height: 45px;
                width: 100px;
                margin-left: 30px;
                font-size: 25px;
                padding-left: 17px;
            }
            .ecard
            {
                margin-bottom: 10px;
                float: left;
                height: 45px;
                width: 100px;
                margin-left: 30px;
                font-size: 25px;
                padding-left: 17px;
                margin-left: 20px;
            }
            #expiry
            {
                font-size: 55px;
                float: left;
                margin: 0px;
                height: 45px;
                margin-left: 20px;
                color: #344D69;
            }
            .date
            {
                float: left;
                height: 45px;
                width: 60px;
                margin-left: 30px;
                font-size: 25px;
                padding-left: 14px;
                padding-top: 0px;
            }
            .left
            {
                float: left;
            }
            #date
            {
                float: left;
                height: 45px;
                width: 80px;
                margin-left: 30px;
                font-size: 25px;
                padding-left: 14px;
                padding-top: 0px;
                margin-right: 20px;
            }
            .what
            {
                padding-top: 10px;
                font-size: 20px;
                font-style: italic;
            }
            .btn
            {
                height: 60px;
                width: 160px;
                color: white;
                background-color: #7988B4;
                border: none;
                font-size: 20px;
                margin-top: 50px;
                margin-left: 150px;
            }
        </style>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" class="form">
            <div class="png">
            <img src="visa.png">
            <img src="discover.png">
            <img src="mastercard.png">
            <img src="American-Express-copy.png"></div>
            <p>Card Number</pz>
            <div>
                <input type="text" placeholder="XXXX" name="1pin" maxlength="4" size="4" class="card" required="required">
                <input type="text" placeholder="XXXX" name="pin" maxlength="4" size="4" class="card" required="required">
                <input type="text" placeholder="XXXX" name="pin" maxlength="4" size="4" class="card" required="required">
                <input type="text" placeholder="XXXX" name="4pin" maxlength="4" size="4" class="card" required="required">
            </div>
            <div class="left">
                <p>Expiration Date:</p>
                <div>
                    <input type="text" placeholder="XX" name="pin" maxlength="2" size="2" class="date" required="required">
                    <p id="expiry">/</p>
                    <input type="text" placeholder="XXXX" name="pin" maxlength="4" size="4" class="ecard" required="required">
                </div>
            </div>
            <div class="left">
                <p>Security Code:</p>
                <div>
                    <input type="password" placeholder="XXX" name="pin" maxlength="3" size="3" id="date" required="required">
                    <p class="what">What's this ?</p>
                </div>
            </div>
            <input type="submit" class="btn" value="Pay Now">
        </form>
    </body>
</html>
