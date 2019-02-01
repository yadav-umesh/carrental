<html>
    <head>
        <?php include 'header.php'; ?>
        <?php
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $sql="select * from company_tbl";
        $n=mysqli_query($cn,$sql);
        ?>
        <style>
            .frame
            {
                border-radius: 10px;
                margin-left: 50px;
                margin-bottom: 25px;
                border: 10px solid black;
                float: left;
                height: 400px;
                width: 410px;
                margin-right: 25px;
                margin-top: 50px;
            }
            .pic
            {
                float: left;
                max-height: 100%;
                max-width: 100%;
            }
            .desc
            {
                float: left;
                margin-right: 5px;
            }
            .disc
            {
                margin-left: 20px;
                color: black;
                font-size: 40px;
                height: 20px;
                width: 400px;
            }
            .book
            {
                margin-top: 90px;
                margin-left: 150px;
                width: 100px;
                height: 50px;
                border-radius: 15px;
                font-size: 15px;
                background-color: pink;
            }
            .head
            {
                height: 80px;
                background-color: darkred;
                font-size: 65px;
                font-weight: 900;
                margin-bottom: 25px;
                color: grey;
            }
        </style>
    </head>
    <body>
        <?php while($db=mysqli_fetch_array($n))
        {
        ?>
            <div class="head"><marquee scrollamount="20" behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"><?php echo $db['companyname'];?></marquee></div>       <?php
            $companyid=$db['companyid'];
            $sql2="select * from cardetails_tbl where companyid='$companyid'";
            $res=mysqli_query($cn,$sql2);
            while($d=mysqli_fetch_array($res))
            {
            ?>
                <div class="frame">
                    <img src="admin/CarImage/<?php echo $d['carphoto'];?>" class="pic" alt="Car Picture">
                    <div class="disc">
                        <div class="desc"><?php echo $db['companyname'];?></div>
                        <div class="desc1"><?php echo $d['carmodel'];?></div>
                        <div class="desc1"><?php echo $d['carseat'];?></div>
                        <div class="desc1"><?php echo $d['carfeature'];?></div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <a href="login.php?id=<?php echo $d['carid'];?>"><input type="submit" value="Book Now" class="book"></a>
                </div>
            <?php
            }
            ?>
            
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
        }
        ?>
    </body>
</html>