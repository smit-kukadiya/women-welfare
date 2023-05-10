<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	$id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "womenwel");
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $sql = "SELECT * FROM schemes where no=$id;";
    $result = mysqli_query($conn, $sql);
?>
<html>
	<head>
		<title>Beti Bachao Beti Padhao</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
  		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
  		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
  		<link rel="manifest" href="images/favicon_io/site.webmanifest">
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
						</div>
                        <div  id="i" class="" style="display:flex;">
							<img class="col-xs-3" src="images\newll.png" alt="logo_left" width="25%" height="150" align="left" style="max-width: 150px;">
							<?php
                            while($row = mysqli_fetch_array($result)) {
                            echo "<img class='col-xs-6 c' src='images/".$row['center_logo']."' alt='logo' width='50%' style='max-width: 500px; image-rendering: smooth;'>";
							echo "<img class='col-xs-3' src='images/".$row['right_logo']."' alt='logo_right' width='25%' height='150' align='right' style='max-width: 150px;'>";
                            ?>
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
					<div style="background-color:orange">
						&nbsp;
					</div>
					</br>
					
				<!-- Main -->
					<div id="main">
						<div class="inner">
						<span class="image main"><?php echo "<img src='image/".$row['banner']."' alt='' />";?></span>
						<h2> <font color="darkblue" size="6" face="calibri"> WHY STARTED A <?php echo $row['title']; ?> SCHEME </font></h2>
					<p> <font color="black" size="4" face="times new roman">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row['descri']; ?></font></p><br>
					
					<h2> <font color="darkblue" size="6" face="calibri"> DOCUMENT FOR <?php echo $row['title']; ?> SCHEME </font></h2>
					<p> <font color="black" size="4" face="times new roman">  Necessary documents needed for filling the application form under the scheme
					Their list is given in the following way.... </font> </p>
					<?php echo "<br/>".$row['doc']; ?>
					<form align="center" ><td>
					<!--<button type="button" class=btn btn1>HOW TO APPLY</button>&nbsp;&nbsp;-->
					<button type="button" class=btn1 btn1>FORM</button>
					</form>
					
					<h2> <font color="darkblue" size="6" face="calibri"> OBJECTIVES OF <?php echo $row['title']; ?> </font></h2>
					
					<?php echo "<br/>".$row['obj']; } ?>
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
										<!--<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div> -->
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

	</body>
</html>