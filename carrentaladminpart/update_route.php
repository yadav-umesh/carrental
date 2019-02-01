<html>
    <head>
        <?php
        session_start();
        $msg="";
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $routeid=$_REQUEST['edit'];
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $source=$_POST['source'];
            $destination=$_POST['destination'];
            $distance=$_POST['distance'];
            $sql1="update route_tbl set routesource='$source',routedestination='$destination',routekm='$distance' where routeid='$routeid'";
            $rs=mysqli_query($cn,$sql1);
            if($rs)
            {
                header('location: viewroute.php');
            }
        }
        $sql="select * from route_tbl where routeid='$routeid'";
        $res=mysqli_query($cn,$sql);
        $db=mysqli_fetch_array($res);
        ?>
        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <style>
            table
            {
                font-size: 25px;   
            }
            .form
            {
                border-radius: 15px;
                margin-top: 80px;
                margin-left: 600px;
                width: 500px;
            }
            .input,.select
            {
                border: 2px solid black;
                height: 40px;
                width: 300px;
                font-size: 25px;
                margin-bottom: 20px;
            }
            .sub
            {
                margin-left: 150px;
                padding: 10px;
                font-size: 15px;
                color: white;
                background: #5F9EA0;
                border: none;
                border-radius: 5px;
                height: 40px;
                width: 90px;
            }
            legend
            {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" class="form">
            <legend>Add Route Details</legend>
            <table>
                <tr>
                    <td>Source</td>
                    <td><input class="input" type="text" value="<?php echo $db['routesource']; ?>" name="source"></td>
                </tr>
                <tr>
                    <td>Destination</td>
                    <td><input class="input" type="text" value="<?php echo $db['routedestination']; ?>" name="destination"></td>
                </tr>
                <tr>
                    <td>Distance (in Km)</td>
                    <td><input class="input" type="text" value="<?php echo $db['routekm']; ?>" name="distance"></td>
                </tr>
                <tr>
                    <td><a href="viewroute.php"><input type="submit" value="submit" class="sub"></a></td>
                </tr>
            </table>
        </form>
    </body>
</html>