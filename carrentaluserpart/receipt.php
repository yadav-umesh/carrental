<html>
    <head>
        <?php
        global $msg;
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $email=$_SESSION['user'];
        $bookid=$_REQUEST['bookid'];
        $cn=mysqli_connect("localhost","root","","carrental_db");                 
        $sql="select * from usersignup_tbl where email='$email'";
        $db=mysqli_query($cn,$sql);
        ?>
        <style>
            body
            {
                padding: 0px;
                margin: 0px;
            }
            .receipt
            {
                border: 5px solid black;
                width: 1000px;
                height: 800px;
                margin-left: 250px;
            }
            .logo
            {
                float: left;
                height: 120px;
                width: 180px;
                margin-left: 80px;
                margin-top: 60px;
            }
            img
            {
                height: 100%;
                width: 100%;
            }
            .print
            {
                margin-left: 500px;
                font-size: 25px;
                font-family: arial;
                margin-top: 90px;
                color: #122749;
                font-weight: 600;
            }
            .print a
            {
                color: black;
            }
            .name
            {
                margin-left: 40px;
                font-size: 25px;
                font-weight: 700;
                margin-bottom: 30px;
            }
            #bookid
            {
                font-size: 35px;
                font-weight: 900;
                margin-left: 50px;
                margin-bottom: 35px;
            }
            #price
            {
                margin-left: 80px;
                font-size: 25px;
                font-weight: 550;
                margin-bottom: 50px;
            }
            .credit
            {
                font-size: 25px;
                font-weight: 700;
                margin-left: 160px;
            }
        </style>
    </head>
    <body>
        <div class="receipt">
            <div class="logo">
                <img src="zjHl2lgef9cYrQL0JFa7kzbw2vuEqRJPmBbJ1jp9OXdE9g5shnN1i.. (1).jpg">
            </div>
            <div class="print">
                Printable Reservation Receipt<br>
                <a href="#">Click Here To Print This Page</a>
            </div>
            <br><br><hr>
            <div class="name">
                <?php while($rs=mysqli_fetch_array($db))
                {
                ?>
                Thank You <b><?php echo $rs['name']; ?></b>, for renting with us. Your car is reserved!
                <?php
                }
                ?>
            </div>
            <div id="bookid">
                Your Booking Number Is: <?php echo $bookid; ?>
            </div>
            <div id="price">
                Your Base Rate for a
                <?php
                $sql1="select * from booking_tbl where bookid='$bookid'";
                $db1=mysqli_query($cn,$sql1);
                while($rs1=mysqli_fetch_array($db1))
                {
                ?>
                    <?php
                    $carid=$rs1['carid'];
                    $source=$rs1['source'];
                    $destination=$rs1['destination'];
                    $sql2="select * from route_tbl where routesource='$source' and routedestination='$destination'";
                    $db2=mysqli_query($cn,$sql2);
                    while($rs2=mysqli_fetch_array($db2))
                    {
                    ?>
                        <?php
                        $msg=$rs2['routekm'];
                        echo $rs2['routekm'];?> Km  
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
                is :
                <?php
                $sql3="select * from cardetails_tbl where carid='$carid'";
                $db3=mysqli_query($cn,$sql3);
                while($rs3=mysqli_fetch_array($db3))
                {
                ?>
                    &#8377;<?php echo $rs3['carrent']*$msg; ?>
                <?php
                }
                ?>
            </div>
            <div class="credit">
                Ardent does not require a credit card to make a reservation.
            </div>
            <div class=selection">
                Car Selection
            </div>
        </div>
    </body>
</html>