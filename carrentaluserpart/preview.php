<html>
    <head>
      <?php include 'lheader.php'; ?>
      <?php
      session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
      $carid=$_REQUEST['id'];
      $last_id=$_SESSION['lastid'];
      $cn=mysqli_connect("localhost","root","","carrental_db");
      $sql="select * from cardetails_tbl where carid='$carid'";
      $rs=mysqli_query($cn,$sql);
      $db=mysqli_fetch_array($rs);
      ?>
      <style>
            #summ
            {
                padding-left: 95px;
            }
            #sum
            {
                padding-left: 90px;
            }
            table
            {
                width: 320px;
                height: 80px;
            }
            td
            {
                font-size: 20px;
                padding-left: 12px;
            }
            body
            {
                padding: 0px;
                margin: 0px;
                background-image: none;
                background-color: #E9F0EA;
            }
            .buttton
            {
              margin-left: 520px;
              width: 130px;
              height: 35px;
              background-color: #6CB649;
              border: none;
              color: white;
              font-size: 15px;
            }
            .summary
            {
                border: 1px solid black;
                background-color: white;
                color: grey;
                height: 700px;
                width: 320px;
                margin-top: 75px;
                margin-left: 920px;
                margin-bottom: 80px;
            }
            .table
            {
                width: 900px;
                float: left;
            }
            .headline
            {
              margin-left: 100px;
              font-size: 25px;
              padding-top: 6px;
              margin-bottom: 20px;
            }
            .car
            {
              height: 100px;
              width: 200px;
              margin-left: 80px;
              margin-bottom: 20px;
            }
            img
            {
              max-height: 100%;
              max-width: 100%;
            }
            .model
            {
              font-size: 25px;
              margin-left: 90px;
              margin-bottom: 10px;
            }
            .seat
            {
              font-size: 22px;
              margin-left: 110px;
            }
            .pickup
            {
                padding-left: 15px;
                padding-right: 10px;
                font-size: 25px;
            }
            .fare
            {
                margin-left: 80px;
                color: black;
                font-size: 20px;
            }
            .icon
            {
                margin-top: 20px;
                width: 320px;
                height: 150px;
            }
            .logo
            {
                margin-top: 15px;
                height: 70px;
                margin-right: 10px;
                padding-left: 25px; 
            }
            .right
            {
                font-size: 25px;
                color: blue;
            }
            #rent
            {
                padding-left: 80px;
                font-size: 20px;
            }
            #table
            {
                background-color: white;
                margin-top: 75px;
                margin-left: 275px;
                border-collapse: collapse;
                width: 620px;
                height: 160px;
                border: 1px solid black;
                margin-bottom: 25px;
            }
            #th
            {
                font-size: 35px;
                border-bottom: 1px solid black;
            }
            #td
            {
                border-bottom: 1px solid black;
                font-size: 30px;
                padding-left: 20px;
            }
            #blank
            {
                font-size: 30px;
                color: #53BDD1;
                padding-left: 200px;
                border-bottom: 1px solid black;
            }
            #none
            {
                font-size: 30px;
                padding-left: 20px;
                background-color: #C1D8C4;
                border: none;
            }
            #blankk
            {
                font-size: 30px;
                color: #2A671E;
                border-collapse: collapse;
                background-color: #C1D8C4;
                padding-left: 200px;
                border: none;
            }
      </style>
    </head>
    <body>
        <div class="table">
            <table id="table">
            <tr>
                <th id="th" colspan="2">CHECKOUT</th>
            </tr>
            <tr>
                <td id="td">Booking Fee</td>
                <td id="blank">&#8377; 0</td>
            </tr>
            <tr>
                <td id="td">Rate/Km</td>
                <td id="blank">&#8377; <?php echo $db['carrent'];?></td>
            </tr>
            <tr>
                <?php
                $b1="select * from booking_tbl where bookid='$last_id'";
                $b2=mysqli_query($cn,$b1);
                while($b3=mysqli_fetch_array($b2))
                {
                ?>
                    <?php $source=$b3['source'];
                    $destination=$b3['destination'];
                    $ab1="select * from route_tbl where routesource ='$source' and routedestination='$destination'";
                    $ab2=mysqli_query($cn,$ab1);
                    while($ab3=mysqli_fetch_array($ab2))
                    {
                    ?>
                        <?php $km=$ab3['routekm']; ?>
                        <td id="td">Distance (in Km)</td>
                        <td id="blank"><?php echo $ab3['routekm'];?></td>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </tr>
            <tr>
                <td id="none">Total Payable Amount</td>
                <td id="blankk">&#8377;<?php echo $db['carrent']*$km;?></td>
            </tr>
        </table>
        <a href="check.php?bookid=<?php echo $last_id;?>"><input type="submit" name="s1" class="buttton" value="CHECKOUT"></a>
        </div>
        <div class="summary">
            <div class="headline">SUMMARY</div>
            <div class="car">
                <img src="CarImage/<?php echo $db['carphoto'];?>">
            </div>
            <div class="model">
            <?php
            $companyid=$db['companyid'];
            $sql2="select * from company_tbl where companyid='$companyid'";
            $res=mysqli_query($cn,$sql2);
            while ($d=mysqli_fetch_array($res))
            {
            ?>
                <?php echo $d['companyname'];?>
            <?php
            }
            ?>
            <?php echo $db['carmodel'];?></div>
            <div class="seat"><?php echo $db['carseat'];?></div><br>
            <hr>
            <div class="pickup">I Shahbaz Alam student of Institute of Engineering And Management</div>
            <hr>
            <table>
                <tr>
                    <td>Free Km (?)</td>
                    <td id="summ"><?php echo $km;?> Km</td>
                </tr>
                <tr>
                    <td>Excess Km (?)</td>
                    <td id="sum">&#8377; <?php echo $db['carrent'];?>/Km</td>
                </tr>
            </table>
            <hr>
            <div class="fare">
              <br>FARE INCLUDES
            </div>
            <div class="icon">
              <img src="fuel-service_318-27525.jpg" class="logo">
              <img src="800px_COLOURBOX25808814.jpg" class="logo">
              <img src="download.jpg" class="logo">
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>