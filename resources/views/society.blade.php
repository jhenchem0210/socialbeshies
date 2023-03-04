﻿<!DOCTYPE html>
<html>
<head>
	<!-- meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Beshies Society</title>
	<!-- CSS and JavaScript references -->
	<link rel="stylesheet" type="text/css" href="../CSS/header.css">
	<link rel="stylesheet" type="text/css" href="../CSS/society.css">
	<script src="../javascript/header.js"></script>
	<script src="../javascript/society.js"></script>
	<!-- Ending of CSS and JavaScrit -->
</head>
<body onload="loadconnection();">
	<!-- Header section -->
	<div class="headerfixed">
		<!-- Header start -->
	<div class="header">
		<!-- Wrapper start of heading-->
		<div class="wrapper">
			<!-- Beshies logo -->
			<a href='home'><img src="../images/logo1.png" width=120 height=45 class="logoletter"/></a>
			<!-- Search bar -->
			<form id="searching">
			  <input type="text" name="search" placeholder="Search.." id="search">
			</form>

			<!-- icon bar to navigate to all pages -->
			<div class="icon-bar">
			 <ul>
			 	<!-- home -->
			 	<li><a href='home' onmouseover="headerchange(1);" onmouseout="headerorigin(1);"><img src="../images/login/home.png" id="GPA-home"><p id="p1">Home</p></a></li>
			 	<!-- profile -->
			 	<li> <a href='profile' onmouseover="headerchange(2);" onmouseout="headerorigin(2);"><img src="../images/login/profile.png" id="GPA-profile"><p id="p2">Profile</p></a> </li>
			 	<!-- society -->
			 	<li style="border-bottom: 6px solid white;"><a href='society' onmouseover="headerchange(3);" onmouseout="headerorigin(3);"><img src="../images/login/society.png" id="GPA-society"><p id="p3">Society</p></a></li>
			 	<!-- message -->
			 	<li> <a href='messages' onmouseover="headerchange(4);" onmouseout="headerorigin(4);"><img src="../images/login/message.png" id="GPA-message"><p id="p4">Messages</p></a></li>
			 	<!-- notification -->
			 	<li><a href="#" onmouseover="headerchange(5);" onmouseout="headerorigin(5);"><img src="../images/login/notification.png" id="GPA-notification"><p id="p5">Notifications</p></a>
			 	<div id="notify">
			 		<p>No New Notification</p>
			 		<hr style="background-color:white;width: 90%;">
			 	</div>
			 	</li>
			 </ul>	 
			   
			</div>
			<!-- Ending of Icon bar -->

		</div>
		<!-- Wrapper End of heading -->

	</div>
	<!-- End of header -->
</div>
<!-- End of header section -->


	<!-- Content Section -->
	<div class="content">
		<!-- Start wrapper -->
		<div class="wrapper">

			<!-- Start Left section -->
			<div class="leftfixed">
				<!-- start sidebar left -->
				<div class="sidebarleft">
					<img src="../images/profile/profilepic (1).png"/>
					<p id="sidename"> Arjhen Armonio Sonio Pajalla Bravo</p>
					<p id="ssn"> Philippine Institute of Science and Techonology</p>
					<p id="country">Philippines</p>
					<a href="profile.html" id="viewall">View All</a>
					<hr>
					<p id="nosociety">31</p>
					<p id="societyname"><a href="society.html">Society</a></p>
					<p id="logout"><a href="../index.html">Log Out</a></p>
				</div>
				<!-- End of sidebar left -->
			</div>
			<!-- End of leftfixed -->


			<!-- start of main content section -->
			<div class="mainnotfixed">

			  <!-- connection suggestion -->
				<div class="people">
				<div class="connection">
					<img src="../images/profile/upload1.png">
					<h5>Rica Norman</h5>
					<p>Secondary School</p>
					<a href="#" id="connect6" onclick="changelogo1('connect6');" style="margin: 10px auto;">&#x271A; Connect</a>
				</div> -->
				</div>
				<!-- end of connection suggestion -->

				<!-- button to view more friends -->
				<button type="button" id="viewmore" class="viewmore" onclick="loadconnection();">More</button>

			</div>
			<!-- end of main content section -->

			<!-- start of right section suggestion user -->
			<div class="rightfixed">
				<div class="suggesfixed"><p id="suggestion">Suggestion</p><div>

				<!-- Start of right fixed -->
				<div class="sidebarright">

					<!-- suggested user -->
					<div class="rightcontent">
						<img src="../images/profile/other_profile.png"/>
						<p class="name">Ingrid E.</p>
						<a href="#" id="connect1" onclick="changelogo('connect1');">&#x271A; Connect</a>

					</div>

					<div class="rightcontent">
						<img src="../images/profile/other_profile.png"/>
						<p class="name">Elmer P.</p>
						<a href="#" id="connect2" onclick="changelogo('connect2');">&#x271A; Connect</a>
					</div>

					<div class="rightcontent">
						<img src="../images/profile/other_profile.png"/>
						<p class="name">Trek U.</p>
						<a href="#" id="connect3" onclick="changelogo('connect3');">&#x271A; Connect</a>
					</div>

					<div class="rightcontent">
						<img src="../images/profile/other_profile.png"/>
						<p class="name">Cesar W.</p>
						<a href="#" id="connect4" onclick="changelogo('connect4');">&#x271A; Connect</a>
					</div>

					<div class="rightcontent">
						<img src="../images/profile/other_profile.png"/>
						<p class="name">Jen Q.</p>
						<a href="#" id="connect5" onclick="changelogo('connect5');">&#x271A; Connect</a>
					</div>
					<!-- End of sugested user -->
				</div>
				<!-- End of right fixed -->

			</div>
			<!-- End of right section suggestion user -->

			<!-- Start of about homaj -->
			<div class="rightfixed">
				
				<div class="sidebarright" style="width: 280px;padding: 4px;margin-top: 20px;height: 150px;">
					<hr style="top: -25px;">
				<div class="foot">

					<ul>
						<li><a href="">About</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">Privacy and Policy</a></li>
						<li><a href="">Help</a></li>
					</ul>
					<img src="../images/logo1.png" width=120 height=45 class="logoletter"/>
					<p>Copyright © www.socialbeshies.online 
						<br>2023 All Rights Reserved.</p>
				</div>
				</div>
			</div>
			<!-- End of about Beshies -->

			<!-- message bar at the bottom -->
			<div class="message" id="msg1">
				<button id="msg2" onclick="showhide()">Messaging</button>
				<p> No New Messages.</p>
			</div>
			<!-- End of message bar at the bottom -->

		</div>
		<!-- End of wrapper -->

	</div>


</body>
</html>