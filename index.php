<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>women welfare</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/slider.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
  		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
  		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
  		<link rel="manifest" href="images/favicon_io/site.webmanifest">
	</head>
	<body class="is-preload">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" >
						<div class="inner">
							<header>
								
								<center><h1 class='smit'>Women Welfare Schemes</h1></center>
								<table class="tab col-xs-3" style="top:30%; left:33%; bottom:85%; right:15%; position:absolute;">
								<tr>
								<td class="tdt"><div id="buttons">
									<select class="dropdown" align="center" >
										<option value="" >SELECT AGE</option>
										<option value="6">0-6 YEARS</option>
										<option value="7"> 6-10 YEARS</option>
										<option value="10">10-18 YEARS</option>
										<option value="19">ABOVE 18 YEARS</option>
										</select></td>
									<td class="tdt">
										<select class="dropdown">
											<option value="">CATEGORIES</option>
											<option value="general">GENERAL</option>
											<option value="obc">OBC</option>
											<option value="scst">SC/ST</option>
										</select>
									</td>
									<td class="tdt">
									</select>
									<select class="dropdown">
										<option value="">MARITAL STATUS</option>
										<option value="married">MARRIED</option>
										<option value="unmarried">UNMARRIED</option>
										<option value="widowed">WIDOWED</option>
										<option value="divored">DIVORCED</option>
									</select>
									</td>
								</tr>
									<button type="button" class="primary anybutton" style="top:30%; left:80%; bottom:84%; right:10%; position:absolute;" btn1>Apply</button>
								
									</table>
							</header>
							
							
							
<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
	
						</div>
					</header>
<!-- Menu -->
					 <nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">Schemes</a></li>
							<li><a href="generic.html">contect us</a></li>
							<li><a href="generic.html">Help</a></li>
						</ul>
					</nav>
<!-- Main -->
				<!-- scheme slider -->
		<div id="inner">
        		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            		<div class="carousel-indicators">
            		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   			</div>
			</br>
        		<div class="carousel-inner">
         		<div class="carousel-item active">
            		<a href="bbbp.html"><img src="images/poster 2.png" class="d-block w-100" alt="..."></a>
        		</div>
      			<div class="carousel-item">
        		<a href="bbbp.html"><img src="images/poster 3.png" class="d-block w-100" alt="..."></a>
      			</div>
      			<div class="carousel-item">
        		<a href="bbbp.html"><img src="images/poster 4.png" class="d-block w-100" alt="..."></a>
      			</div>
    			</div>
  			</div>
		</div>
		</br>
<!-- silder end -->
<!-- schemes -->
<div id="main">
						<div class="inner">
							
							<section class="tiles">
								<?php
								$conn = mysqli_connect("localhost", "root", "", "womenwel");
								if($conn === false){
									die("ERROR: Could not connect. "
										. mysqli_connect_error());
								}
								$sql = "SELECT * FROM schemes";
								$result = mysqli_query($conn, $sql);
								$style_array = array('style1', 'style2', 'style3', 'style4', 'style5', 'style6');

								while($row = mysqli_fetch_array($result)) {
									if($row['status']==1) {
										
										echo "<article class='style".(array_rand($style_array,1)+1)."'>";
										echo "<span class='image'>";
										echo "<img src='image/".$row['right_logo']."'>";
										echo "</span>";
										echo "<a href='createNewScheme.php?id=".$row['no']."'>";
										echo "<h2 class='fon'>".$row['title']."</h2>";
										echo "<div class='content'>";
										echo "</div>";
										echo "</a>";
										echo "</article>"; 
									}
								}
								?>
							</section>
						</div>
					</div>
<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field half">
											<input type="number" name="monumber" id="number" placeholder="Mobile No." />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/slider.js"></script>

	</body>
</html>