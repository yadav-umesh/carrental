<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $companyid=$_REQUEST['edit'];
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $companyname=$_POST['cname'];
            $sql1="update company_tbl set companyname='$companyname' where companyid='$companyid'";
            $rs=mysqli_query($cn,$sql1);
            if($rs)
            {
                header('location: viewcompany.php');
            }
        }
        $sql="select * from company_tbl where companyid='$companyid'";
        $res=mysqli_query($cn,$sql);
        $db=mysqli_fetch_array($res);
        ?>
        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <style>
            .form
            {
                margin: 150px;
                margin-left: 700px;
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
            }
        </style>
    </head>
    <body>
        <form method="post" class="form">
            <table>
                <tr>
                    <td><input class="input" type="text" name="cname" value="<?php echo $db['companyname'];?>"></td>
                </tr>
                <tr>
                    <td><input class="submit" type="submit" value="Update"></td>
                </tr>
            </table>
        </form>    
    </body>
</html>