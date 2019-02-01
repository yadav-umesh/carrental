<!doctype html>
<html>
<head>
      <?php include 'lheader.php'; ?>
      <?php
      session_start();
      if($_SESSION['is_login']=="" or !isset($_SESSION['is_login']))
      {
         header("location:aboutus.php");
      }
      ?>
   <style>
	.introband 
	{
		background-color:cornflowerblue;
		color:black;
		height:120px;
		width:1296px;
		border-radius:15px;
		padding-top: 7px;
		padding-left: 25px;
		
	}
	.middle
	{
		background-color:powderblue;
		color: black;
		height:250px;
		width:1296px;
		border-radius:15px;
		padding-top: 7px;
		padding-left: 25px;
	}
	.know
	{
		background-color: cyan;
		color: black;
		height:125px;
		width:1296px;
		border-radius: 15px;
		padding-top: 7px;
		padding-left: 25px
	}
	.last
	{
		background-color: limegreen;
		color: black;
		height:180px;
		width:1296px;
		border-radius:15px;
		padding-top: 7px;
		padding-left: 25px
	}
	.cmt
	{
		background-color:dodgerblue;
		color:black;
		font-family:Baskerville, Palatino Linotype, Palatino, Century Schoolbook L, Times New Roman, serif;
		height:500px;
		width:1296px;
		border-radius: 15px;
		padding-top: 7px;
		padding-left: 25px;
	}
	.pic
	{
		background-color: black;
		color:white;
		height:305px;
		width:100%;
		padding-left: 5px;
		padding-top: 5px;
	}
	</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div>
   <div class="introband section">
   <section class="band intro-band">
    <h1>ABOUT  EXPANDABLES CAR RENTAL</h1>
    <h2>What's the Expandables way? Taking care of our customers, our communities, our employees and our environment.</h2>
	   </div>
    <section class="g g-4up">
        <section class="gi">
            <div class="icon-container">
                <i class="icon icon-about-car"></i>
            </div>
        </section>
        <section class="middle">
            <h3 id="culture-and-hard-work-created-expandables">Culture and hard work created Expandables</h3>
<p>Expandables Car Rental is an ongoing Indian success story. Our guiding principles, and humble beginning, revolve around personal honesty and integrity. We believe in strengthening our communities one neighborhood at a time, serving our customers as if they were our family, and rewarding hard work. These things are as true today as they were when we were founded in 2018.</p>
<p>Today, our massive network means Expandables is the largest transportation solutions provider. We offer car and truck rentals, as well as car sharing and car sales. We’re in over 85 countries with more than 7,600 locations. What does this mean to our customers? We're there when you need us.</p>
<p>We take an active role in sustainability, not only because it’s smart for our business, but because we believe in making the world a better place for future generations. Because of our size, we are in a unique position to foster innovation, advance research and test market-driven solutions.</p>

        </section>
        <section class="know">
            <h3 id="did-you-know-">Did you know?</h3>
<p>Founder Sushant Chakraborty selected the name Expandables as a salute to the INS(Indian Navy Ship) Vikrant, the biggest weapon of India in Ghazi attack in 1971. Today, the “Expandables” name is synonymous with the leadership and vision of the business. </p>

        </section>
    </section>
</section></div>
            <section class="last">
                <h3>It all started with seven cars and a hunch</h3>
<p>Utilizing lessons learned in the Navy—including the value of hard work, team spirit and simply doing the right thing—Sushant Chakraborty the novel concept of leasing automobiles, with a fleet of seven cars.</p>
<p>Expandables is now a household name for frequent travelers, road trippers and those with a car in the shop. We're a brand that’s recognized as a worldwide leader in the car rental industry. We value employees and customers as much as a member of the family. Today Expandables continues to drive success through a simple, yet powerful set of beliefs to become a leader in car rental, serving all of your transportation needs.<br />
</p>

                <br>
                
                
            </section>
            <div class="cmt">
				<h3>Our team says-</h3>
            	<h4 id="cmt">Sushant says:</h4>
            	<p>'Getting great feedback from our loyal customers gives us the drive to continue to innovate & exceed their expectations' </p>
            	<h4 id="cmt">Gyan says:</h4>
            	<p>'Being part of a team that really cares about what they do is probably the best part of our job-we never have to worry that customers aren't getting the best of us'</p>
            	<h4 id="cmt">Subham says:</h4>
            	<p>'You can analyse the past but you have to design the future'</p>
            	<h4 id="cmt">Keshaw says:</h4>
            	<p>'Being challenged in life is inevitable, being defeated is optional'</p>
            	<h4 id="cmt">Shahbaaz says:</h4>
            	<p>'Be the change you wish to see in the world'</p>
            </div>
<div class="pic">
	<img src="e.jpg"height="300"width="440"/>
	<img src="all.jpg"height="300"width="440"/>
	<img src="audir8.jpg"height="300"width="440"/>
</div>
    <?php include 'footer.php'; ?>
</body>
</html>