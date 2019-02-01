<html>
    <head>
        <?php
        global $msg;
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $source=$_POST['source'];
            $destination=$_POST['destination'];
            $distance=$_POST['distance'];
            $sql="insert into route_tbl values(NULL,'$source','$destination','$distance')";
            $rs=mysqli_query($cn,$sql);
            if($rs)
            {
                header('location: viewroute.php');
            }
        }
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
                width: 600px;
                height: 400px;
                padding-left: 25px;
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
        <form method="post" class="form" enctype="multipart/form-data">
            <legend>Add Route Details</legend>
            <table>
                <tr>
                    <td>Source</td>
                    <td><input class="input" type="text" placeholder="Source" name="source"></td>
                </tr>
                <tr>
                    <td>Destination</td>
                    <td><input class="input" type="text" placeholder="Destination" name="destination"></td>
                </tr>
                <tr>
                    <td>Distance (in Km)</td>
                    <td><input class="input" type="text" placeholder="Distance" name="distance"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" class="sub"></td>
                </tr>
            </table>
        </form>
        <?php echo $msg; ?>
    </body>
</html>