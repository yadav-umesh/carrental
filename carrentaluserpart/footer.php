<html>
    <head>
        <script>
            function sub()
            {
                alert("Thank you for Subscribing");
            }
        </script>
        <style>
            body
            {
                margin: 0px;
                padding: 0px;
            }
            a
            {
                text-decoration: none;
                color: white;
            }
            footer
            {
                padding: 50px;
                height: 410px;
                width: 1436px;
                background-color: #464346;
            }
            p,h2
            {
                color: white;
            }
            .btn
            {
                padding: 10px;
                font-size: 15px;
                color: white;
                background: #5F9EA0;
                border: none;
                border-radius: 5px;
            }
            .email
            {
                margin-bottom: 40px;
                height: 40px;
                width: 200px;
            }
            .left
            {
                padding-right: 200px;
                float: left;
                height: 400px;
            }
            h1,.copyright
            {
                color: white;
            }
            ul li a
            {
                color: #21ADAB;
                text-decoration: none;
            }
            ul
            {
                list-style-type: none;
            }
            ul li
            {
                padding-bottom: 10px;
                color: #21ADAB;
            }
            .middle
            {
                float: left;
                padding-right: 50px;
                font-size: 20px;
            }
            .left img
            {
                padding-right: 25px;
            }
            .contact
            {
                float: left;
                padding-right: 120px;
                color: white;
            }
            a:hover
            {
                font-size: 25px;
            }
        </style>
    </head>
    <body>
        <footer>
            <div class="left">
           <h1>STAY CONNECTED</h1>
           <p>Join over 10,500 people who rent everyday <br>branded or non-branded cars </p>
           <input type="text" placeholder="Email Address" class="email" required="required">
           <button type="submit" class="btn" name="subscribe" onclick=sub();>Subscribe</button>
           <br>
           <a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" height="50"></a>
           <a href="https://twitter.com" target="_blank"><img src="twitter.png" height="50"></a>
           <a href="https://plus.google.com" target="_blank"><img src="google-plus.png" height="50"></a>
           <a href="https://www.linkedin.com/" target="_blank"><img src="linkedin.png" height="50"></a>
            </div>
            <div class="contact">
                <h1>Contact Information</h1>
                <img src="house.png" height="40"><br><br> SDF Building,Module #132,Ground Floor<br>Salt Lake City, GP Block, Sector V<br>
                Kolkata - 700091<br><br>
                <img src="phone.png" height="40"><br><br>9674735471 / 7603047848<br><br>
                <img src="telephone.png" height="40"><br><br><a href="mailto:training@ardentcollaborations.com">ardentcollaborations.com</a>
            </div>
            <div class="middle">
                <h1>&nbsp;&nbsp;&nbsp;Navigate</h1>
                <ul>
                    <li><a href="home.php">Home  >></a></li>
                    <li><a href="about.php">About us  >></a></li>
                    <li><a href="services.php">Services  >></a></li>
                    <li><a href="contact.php">Contact us  >></a></li>
                    <li><a href="ourteam.php">Our Team  >></a></li>
                </ul>
            </div>
            <div class="middle">
                <h1>&nbsp;&nbsp;&nbsp;Types</h1>
                <ul>
                    <li>Micro</li>
                    <li>Mini</li>
                    <li>Sedan</li>
                    <li>SUV</li>
                    <li>Luxury</li>
                </ul>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
            <div class="copyright">
                Made by Group of Summer Training Student of course PHP &copy 2018
            </div>
        </footer>
    </body>
</html>