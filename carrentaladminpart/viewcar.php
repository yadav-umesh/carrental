<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $sql="select * from cardetails_tbl";
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
                    <th>ID</th>
                    <th>Model Name</th>
                    <th>Seater</th>
                    <th>Rent/Day</th>
                    <th>AC/Non-AC</th>
                    <th>Company Name</th>
                    <th>Car Photo</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php while($db=mysqli_fetch_array($n))
                {
                ?>
                <tr>
                    <td><?php echo $db['carid'];?></td>
                    <td><?php echo $db['carmodel']; ?></td>
                    <td><?php echo $db['carseat']; ?></td>
                    <td><?php echo $db['carrent']; ?></td>
                    <td><?php echo $db['carfeature']; ?></td>
                    <?php
                    $idd=$db['companyid'];
                    $sql2="select * from company_tbl where companyid='$idd'";
                    $rs=mysqli_query($cn,$sql2);
                    $d=mysqli_fetch_array($rs)
                    ?>
                    <td><?php echo $d['companyname'];?></td>
                    <td><img src="CarImage/<?php echo $db['carphoto'];?>" height="100"></td>
                    <td><a href="update_cars.php?edit=<?php echo $db['carid'];?>">Update</a></td>
                    <td><a href="delete_car.php?miss=<?php echo $db['carid'];?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </body>
</html>