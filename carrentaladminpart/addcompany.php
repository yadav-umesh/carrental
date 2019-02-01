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
            $companyname=$_POST['t1'];
            $sql="insert into company_tbl values(NULL,'$companyname')";
            $rs=mysqli_query($cn,$sql);
            if($rs)
            {
                header('location: viewcompany.php');
            }
        }
        ?>
        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <style>
            .form
            {
                padding: 30px;
                width: 350px;
                border-radius: 15px;
                margin-top: 80px;
                margin-left: 600px;
            }
            .input
            {
                border: 2px solid black;
                height: 40px;
                width: 300px;
                font-size: 25px;
                margin-bottom: 20px;
            }
            .submit
            {
                height: 40px;
                width: 100px;
                font-size: 25px;
                background-color: #5F9EA0;
            }
            legend
            {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <form method="post" class="form">
            <legend>Add Company</legend>
            <table>
                <tr>
                    <td><input  class="input" type="text" name="t1" placeholder="Company Name"></td>
                </tr>
                <tr>
                    <td><input class="submit" type="submit" value="Insert"></td>
                </tr>
            </table>
            <?php echo $msg; ?>
        </orm>
    </body>
</html>