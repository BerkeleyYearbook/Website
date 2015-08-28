<?php
echo '<html>
	<head>
		<title>Group | Blue and Gold Yearbook</title>
		<link href="style.css" rel="stylesheet">
		<link href=\'http://fonts.googleapis.com/css?family=Lato:100,300,400,700\' rel=\'stylesheet\' type=\'text/css\'>
		<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1><a href="/"><img src="images/logo.png"><span>Blue and Gold Yearbook</span></a></h1>
			<nav>
				<ul>
					<li><a href="group">group</a></li>
					<li><a href="portrait">portrait</a></li>
					<li><a href="store">store</a></li>
					<!-- <li><a href="#">book</a></li> -->
					<li class="trigger">
						<a href="#">menu
							<span class="box">
								<span class="bar"></span>
								<span class="bar"></span>
								<span class="bar"></span>
							</span>
						</a>
					</li>
				</ul>
			</nav>
		</header>';
include 'nav.php';
	echo '<section class="intro" style="background:url(\'images/group-01.png\') #333 no-repeat center; background-size:cover">
			<div class="wrap">
				<h1 class="title">Feature yours <span>group</span>.</h1>
				<!-- <p class="byline">Are you a <a href="#">student group</a>? A <a href="#">senior</a>? A <a href="#">Yearbook-swag</a>-seeking shopper? -->
			</div>
		</section>
		<a href="http://tinyurl.com/bgclubs15" class="banner">
			<p>Get started. Get in the yearbook. <span class="arrow right"><span class="leg"></span></span></p>
		</a>
		<section class="text">
			<div class="wrap">
				<h2>Talk with Us</h2>
				<div class="copy">
					<p>Your group could be featured in the 2015 Blue&Gold Yearbook. <a href="http://tinyurl.com/bgclubs15">Fill out the form</a> today, and we\'ll let you know.</p>
					<!-- <p class="light">(more details coming soon)</p> -->
				</div>
			</div>
		</section>';
		include 'footer.php';
		echo '
	</body>
</html>';
exit;
?>