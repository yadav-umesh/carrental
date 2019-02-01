<html>
    <head>
        <style>
            .side
            {
                float: left;
                height: 100%;
                width: 200px;
                background-color: #C39BD3;
            }
            body
            {
                margin: 0px;
                padding: 0px;
                background-color: #D2E0E4;
                height: 100%;
            }
            .dropbtn
            {
                width: 200px;
                background-color: #884EA0;
                color: white;
                height: 80px;
                margin-bottom: 5px;
                font-size: 28px;
                border: none;
            }
            .dropdown
            {
                position: relative;
                display: inline-block;
            }
            .dropdown-content
            {
                display: none;
                position: relative;
                background-color: #f1f1f1;
                min-width: 200px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a
            {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover
            {
                background-color: #ddd;
            }
            .dropdown:hover .dropdown-content
            {
                display: block;
            }
            .dropdown:hover .dropbtn
            {
                background-color: #5D6D7E;
            }
        </style>
    </head>
    <body>
        <div class="side">
            <div class="dropdown">
                <a href="home.php"><button class="dropbtn">Dashboard</button></a>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Company</button>
                <div class="dropdown-content">
                    <a href="addcompany.php">Add Company</a>
                    <a href="viewcompany.php">View Company</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Car Details</button>
                <div class="dropdown-content">
                    <a href="addcar.php">Add Car Details</a>
                    <a href="viewcar.php">View Car Details</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Driver</button>
                <div class="dropdown-content">
                    <a href="adddriver.php">Add Driver</a>
                    <a href="viewdriver.php">View Driver</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="user.php"><button class="dropbtn">Registered User</button></a>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Route Details</button>
                <div class="dropdown-content">
                    <a href="addroute.php">Add Route</a>
                    <a href="viewroute.php">View Route</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="viewbooking.php"><button class="dropbtn">Booking Request</button></a>
            </div>
        </div>
    </body>
</html>