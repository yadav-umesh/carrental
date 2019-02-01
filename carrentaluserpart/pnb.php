<html>
    <head>
        <?php
        session_start();
        if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
        {
            header("location:login.php");
        }
        $pid=$_REQUEST['id'];
        $cn=mysqli_connect("localhost","root","","carrental_db");
        $sql="select * from paymentdetails_tbl where id='$pid'";
        $db=mysqli_query($cn,$sql);
        ?>
        <style>
            table
            {
                margin-bottom: 20px;
            }
            body
            {
                margin: 0px;
                padding: 0px;
            }
            .image
            {
                float: left;
                height: 150px;
                width: 750px;
            }
            .img
            {
                float: left;
                width: 760px;
            }
            #master
            {
                margin-top: 25px;
                margin-left: 500px;
                height: 80px;
                width: 140px;
            }
            #pnb
            {
                width: 250px;
                margin-top: 50px;
                height: 90px;
            }
            .p
            {
                margin-left: 510px;
                font-family: arial;
                font-size: 30px;
                width: 300px;
                color: #063A5E;
                font-weight: 700;
            }
            .about
            {
                margin-top: 30px;
                width: 500px;
                margin-left: 510px;
                font-size: 20px;
                font-weight: 500;
                line-height: 25px;
                color: #656769;
                font-family: arial;
            }
            .pin
            {
                height: 150px;
                width: 380px;
                margin-left: 580px;
                margin-top: 55px;
            }
            td
            {
                padding-right: 10px;
                float: !important;
                font-weight: 700;
                color: #0C2263;
                font-size: 18px;
                padding-bottom: 10px;
            }
            select
            {
                color: #0C2263;
                font-weight: 700;
                width: 75px;
                height: 25px;
                padding-left: 10px;
                font-size: 15px;
            }
            #pinno
            {
                height: 35px;
                width: 155px;
                font-size: 20px;
                padding-left: 45px; 
            }
            .sub
            {
                border: none;
                background-color: #0E4581;
                font-weight: 550px;
                color: white;
                font-size: 20px;
                font-family: arial;
                margin-left: 120px;
            }
            .cancel
            {
                border: none;
                background-color: #0E4581;
                font-weight: 550px;
                color: white;
                font-size: 20px;
                font-family: arial;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <div class="image">
            <img id="master" src="mastercard-securecode.png">
        </div>
        <div class="img">
            <img id="pnb" src="punjab-national-bank-logo-C89A37A387-seeklogo.com.png">
        </div>
        <div class="p">Expiry Validation</div>
        <div class="about">
            MasterCard&#174 &nbsp; SecureCode&#8481 &nbsp; protects your PNB MasterCard card against unauthorized use at online stores.Please enter the Expiry and ATM pin.
        </div>
        <div class="pin">
            <table>
                <tr>
                    <td>Card Number:</td>
                    <?php
                    while($rs=mysqli_fetch_array($db))
                    {
                    ?>
                    <td><?php echo $rs['pin1'];?>&nbsp;XXXX&nbsp;XXXX&nbsp;<?php echo $rs['pin4'];?></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;Expiry Date:</td>
                    <td>
                        <select>
                            <option value="-mm-">-mm-</option>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                            <option value="1">6</option>
                            <option value="1">7</option>
                            <option value="1">8</option>
                            <option value="1">9</option>
                            <option value="1">10</option>
                            <option value="1">11</option>
                            <option value="1">12</option>
                            <option value="1">13</option>
                            <option value="1">14</option>
                            <option value="1">15</option>
                            <option value="1">16</option>
                            <option value="1">17</option>
                            <option value="1">18</option>
                            <option value="1">19</option>
                            <option value="1">20</option>
                            <option value="1">21</option>
                            <option value="1">22</option>
                            <option value="1">23</option>
                            <option value="1">24</option>
                            <option value="1">25</option>
                            <option value="1">26</option>
                            <option value="1">27</option>
                            <option value="1">28</option>
                            <option value="1">29</option>
                            <option value="1">30</option>
                            <option value="1">31</option>
                        </select>
                        <select required="required">
                            <option value="-yy-">-yy-</option>
                            <option value="1">2018</option>
                            <option value="1">2019</option>
                            <option value="1">2020</option>
                            <option value="1">2021</option>
                            <option value="1">2022</option>
                            <option value="1">2023</option>
                            <option value="1">2024</option>
                            <option value="1">2025</option>
                            <option value="1">2026</option>
                            <option value="1">2027</option>
                            <option value="1">2028</option>
                        </select>
                        (MMYY)
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATM Pin:</td>
                    <td><input id="pinno" type="password" name="pin" maxlength="4" size="4" required="required"></td>
                </tr>
            </table>
            <a href="loading.php"><input class="sub" type="submit" value="Submit"></a>
            <input class="cancel" type="submit" value="Cancel">
        </div>
    </body>
</html>