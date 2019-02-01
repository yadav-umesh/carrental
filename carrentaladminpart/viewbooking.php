<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $sql="select * from booking_tbl";
        $n=mysqli_query($cn,$sql);
        ?>
        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <style>
            .form
            {
                border: 1px;
                margin-top: 70px;
                margin-left: 300px;
                margin-right: 140px;
            }
            table
            {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            td, th
            {
                border: 1px solid black;
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even)
            {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <form method="post" class="form">
            <table border="1">
                <tr>
                    <th>Booking Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Car</th>
                    <th>Delete</th>
                </tr>
                <?php while($db=mysqli_fetch_array($n))
                {
                ?>
                <tr>
                    <td><?php echo $db['bookid'];?></td>
                    <td><?php echo $db['name']; ?></td>
                    <td><?php echo $db['email']; ?></td>
                    <td><?php echo $db['phone']; ?></td>
                    <td><?php echo $db['source']; ?></td>
                    <td><?php echo $db['destination']; ?></td>
                    <?php
                    $idd=$db['carid'];
                    $sql2="select * from cardetails_tbl where carid='$idd'";
                    $rs=mysqli_query($cn,$sql2);
                    while($d=mysqli_fetch_array($rs))
                    {
                    ?>
                        <td>
                        <?php
                        $companyid=$d['companyid'];
                        $sql3="select * from company_tbl where companyid='$companyid'";
                        $final=mysqli_query($cn,$sql3);?>
                        <?php while($fin1=mysqli_fetch_array($final))
                        {
                        ?>
                            <?php echo $fin1['companyname'];?>
                        <?php
                        }
                        ?>
                        <?php echo $d['carmodel'];?></td>
                    <?php
                    }
                    ?>
                    <td><a href="delete_booking.php?miss=<?php echo $db['bookid'];?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </body>
</html>