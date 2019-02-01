<html>
    <head>
        <?php include 'lheader.php'; ?>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:contact.php");
        }
        ?>
        <script>
            function fun()
            {
                alert("Thank you for your Response");
            }
        </script>
        <style>
            fieldset
            {
                border-color: darkred;
                border-radius: 15px;
                background-color: darkred;
                color: white;
            }
            .us
            {
                margin-bottom: 10px;
                padding-bottom: 5px;
                color: red;
                font-size: 30px;
            }
            .text
            {
                width: 350px;
                height: 40px;
                border-radius: 15px;
                margin-bottom: 15px;
                font-size: 20px;
                padding-left: 10px;
            }
            .btn
            {
                height: 40px;
                width: 150px;
            }
            body
            {
                    
                margin: 0px;
                padding: 0px;
                width: 100%;
            }
            .first
            {
                height: 600px;
                width: 100%;
            }
            .second
            {
                padding-left: 100px;
                float: left;
                height: 600px;
                width: 55%;
            }
            .third
            {
                padding-top: 50px;
                padding-left: 100px;
                margin-left: 920px;
                height: 550px;
                width: 20%;
            }
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
        </style>
    </head>
    <body>
        <img src="super_menu_banner641.jpg" width="1535"><br><br><br>
        <div class="first">
            <div class="second">
                <div class="us"><strong>Contact Us</strong></div>
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
            <div class="third">
                <fieldset>
                   <legend><b>Feedback</b></legend>
                    <input type="text" placeholder="Name" size="45" class="text"><br/>
                    <input type="text" placeholder="Email Id" size="45" class="text"><br/>
                    <input type="text" placeholder="Mobile No." size="45" class="text"><br/>
                    <input type="text" placeholder="City Name" size="45" class="text"><br/>
                    <textarea cols="42" rows="10">Enter your Comments...</textarea><br/><br/>
                    <a href="contact.php"><input type="submit" value="Submit" class="btn" onclick=fun();></a>
                </fieldset>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>