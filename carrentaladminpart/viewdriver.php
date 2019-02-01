<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $sql="select * from driver_tbl";
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
                    <th>Name</th>
                    <th>Contact No</th>
                    <th>Address</th>
                    <th>Email Id</th>
                    <th>Licence No</th>
                    <th>Photo</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php while($db=mysqli_fetch_array($n))
                {
                ?>
                <tr>
                    <td><?php echo $db['driverid'];?></td>
                    <td><?php echo $db['drivername']; ?></td>
                    <td><?php echo $db['driverphone']; ?></td>
                    <td><?php echo $db['driveradd']; ?></td>
                    <td><?php echo $db['driveremail']; ?></td>
                    <td><?php echo $db['driverlicence']; ?></td>
                    <td><img src="Image/<?php echo $db['driverpic'];?>" height="100"></td>
                    <td><a href="update_driver.php?edit=<?php echo $db['driverid'];?>">Update</a></td>
                    <td><a href="delete_driver.php?miss=<?php echo $db['driverid'];?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </body>
</html>