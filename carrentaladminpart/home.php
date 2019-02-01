<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        ?>
        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <style>
            .second p,.second h2
            {
                color: black;
            }
            .add1
            {
                height: 210px;
                float: left;
                width: 340px;
                padding-left: 25px; 
                border: 2px solid black;
                border-radius: 15px;
                margin-bottom: 25px;
                margin-right: 35px;
                background-color: #E7CAE4;
                opacity: 0.9;
            }
            .add2
            {
                margin-left: 400px;
                height: 210px;
                width: 340px;
                padding-left: 25px; 
                border: 2px solid black;
                border-radius: 15px;
                margin-bottom: 25px;
                margin-right: 35px;
                background-color: #E7CAE4;
                opacity: 0.9;
            }
            .add3
            {
                height: 210px;
                float: left;
                width: 340px;
                padding-left: 25px; 
                border: 2px solid black;
                border-radius: 15px;
                margin-bottom: 25px;
                margin-right: 35px;
                background-color: #E7CAE4;
                opacity: 0.9;
            }
            .add4
            {
                height: 210px;
                width: 340px;
                float: left;
                padding-left: 25px;
                border: 2px solid black;
                border-radius: 15px;
                margin-bottom: 25px;
                margin-right: 35px;
                background-color: #E7CAE4;
                opacity: 0.9;
            }
            .add1:hover,.add2:hover,.add3:hover,.add4:hover
            {
                height: 220px;
                width: 350px;
                font-size: 17px;
                margin-bottom: 15px;
            }
            .second
            {
                padding-top: 80px;
                padding-left: 100px;
                float: left;
                height: 600px;
                width: 80%;
            }
        </style>
    </head>
    <body>
        <div class="second">
            <div class="add1">
                <h2>Salt Lake, Kolkata</h2>
                <p>SDF Building, Module #132<br>Ground Floor, Salt Lake City, GP Block<br>Sector V Kolkata 700091</p>
                <p>Phone No. : 9674735471 / 7603047848</p>
                <p>Email Id : training@ardentcollaborations.com</p>
            </div>
            <div class="add2">
                <h2>Jadavpur, Kolkata</h2>
                <p> A-1/20, Ramgarh, Ganguly Bagan<br>Kolkata, West Bengal 700091</p>
                <p>Phone No. :  9674735470 / 9933188883</p>
                <p>Email Id : training@ardentcollaborations.com</p>
            </div>
            <div class="add3">
                <h2>Durgapur, Kolkata</h2>
                <p>A1/9, Sahid Sukumar Banerjee Sarani<br>Aranyak (West), Bidhannagar, Aranyak (West)<br>Bidhannagar, Durgapur, West Bengal 713212</p>
                <p>Phone No. : +91 99330 44443/99331 44443</p>
                <p>Email Id : training@ardentcollaborations.com</p>
            </div>
            <div class="add4">
                <h2>Ghaziabad, UP</h2>
                <p>106, Sector 2C, Vasundhara<br>Ghaziabad, Uttar Pradesh 201012</p>
                <p>Phone No. : 97118 00650</p>
                <p>Email Id : training@ardentcollaborations.com</p>
            </div>
        </div>
    </body>
</html>