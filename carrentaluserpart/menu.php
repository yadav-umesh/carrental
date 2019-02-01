<html>
    <head>
        <?php include 'header.php'; ?>
        <style>
            body
            {
                margin: 0px;
                padding: 0px;
            }
            .form
            {
                margin-bottom: 50px;
                padding: 110px;
                height: 50%;
                width: 85.6%;
                background-image: url("road.jpg");
                background-size: 100% 100%;
            }
            .book
            {
                border-radius: 20px;
                margin-left: 100px;
                background-color: black;
                opacity: 0.5;
                height: 400px;
                width: 1100px;
            }
            .city
            {
                margin-left: 60px;
                margin-top: 120px;
                height: 40px;
                width: 150px;
                margin-right: 20px;
            }
            .delivery
            {
                height: 40px;
                width: 150px;
                margin-right: 20px;
            }
            .types
            {
                height: 40px;
                width: 150px;
                margin-right: 20px;
            }
            .button
            {
                height: 40px;
                width: 150px;
                background-color: red;
                border: red;
                color: white;
                font-size: 20px;
            }
            p
            {
                color: white;
                font-size: 22px;
            }
            .list
            {
                float: left;
                background-color: white;
                margin-left: 160px;
                margin-right: 300px;
                height: 300px;
                width: 500px;
            }
            .img
            {
                font-size: 18px;
                margin-left: 8px;
                height: 50px;
                width: 110px;
                background-color: #B33333;
                color: white;
                border-color: #B33333;
            }
            .receipt
            {
                float: left;
                background-color: white;
                margin-left: 100px;
                height: 300px;
                width: 250px;
            }
            .invoice
            {
                font-size: 20px;
                background-color: #B33333;
                color: white;
                border-color: #B33333;
                height: 50px;
                width: 250px;
            }
            .article
            {
                height: 400px;
                width: 1500px;
            }
        </style>
    </head>
    <body>
        <video src="video.mp4" width="1500" height="600" metdata preload loop controls autoplay></video>
        <div class="form">
            
        </div>
        <div class="article">
            <div class="list">
                <a href="cars.php"><img src="amg_600x300.jpg" width="500"></a>
                &nbsp;<a href="two.php"><input type="submit" value="Two Seater" class="img"></a>
                <a href="four.php"><input type="submit" value="Four Seater" class="img"></a>
                <a href="six.php"><input type="submit" value="Six Seater" class="img"></a>
                <a href="eight.php"><input type="submit" value="Eight Seater" class="img"></a>
            </div>
            <div class="receipt">
                <a href="login.php"><img src="img_461192.png" width="250" height="250"></a>
                <a href="login.php"><input type="submit" value="Download your Invoice" class="invoice"></a>
            </div>
        </div>
        <?php include 'footer.php'; ?> 
    </body>
</html>