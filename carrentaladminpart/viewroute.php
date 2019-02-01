<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $sql="select * from route_tbl";
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
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Distance (in Km)</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php while($db=mysqli_fetch_array($n))
                {
                ?>
                <tr>
                    <td><?php echo $db['routeid'];?></td>
                    <td><?php echo $db['routesource']; ?></td>
                    <td><?php echo $db['routedestination']; ?></td>
                    <td><?php echo $db['routekm']; ?></td>
                    <td><a href="update_route.php?edit=<?php echo $db['routeid'];?>">Update</a></td>
                    <td><a href="delete_route.php?miss=<?php echo $db['routeid'];?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </body>
</html>