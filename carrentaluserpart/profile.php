<html>
    <head>
        <?php include 'lheader.php'; ?>
        <style>
            .links
            {
                float: left;
                width: 290px;
            }
            table img
            {
                width: 30px;
                height: 20px;
            }
            body
            {
                margin: 0px;
                padding: 0px;
            }
            .family
            {
                width: 1520px;
                height: 800px;
                position: fixed;
                z-index: -1;
                background-image: url("Top-factors-to-consider-when-buying-a-family-car.jpg");
                filter: blur(3px);
                -webkit-filter: blur(3px);
            }
            td
            {
                border-bottom: 1px solid black;
                font-size: 25px;
            }
            th
            {
                border-bottom: 2px solid black;
                font-size: 30px;
            }
            table
            {
                background-color: white;
                margin-top: 100px;
                margin-left: 50px;
                opacity: 0.7;
            }
            table a
            {
                color: black;
            }
            #logout
            {
                color: red;
            }
            table a:hover
            {
                font-size: 28px;
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="family"></div>
        <div class="links">
            <table>
                <tr>
                    <th>User Profile Links</th>
                </tr>
                <tr>
                    <td><img src="triangle-right-arrow.png"><a href="editprofile.php">Edit Profile</a></td>
                </tr>
                <tr>
                    <td><img src="triangle-right-arrow.png"><a href="bookhistory.php">Booking History</a></td>
                </tr>
                <tr>
                    <td><img src="triangle-right-arrow.png"><a href="logout.php" id="logout">Logout</a></td>
                </tr>
            </table>
        </div>
    </body>
</html>