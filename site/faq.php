<?php
echo '<html>
	<head>
		<title>Frequently Asked Questions | Blue and Gold Yearbook</title>
		<link href="style.css" rel="stylesheet">
		<link href=\'http://fonts.googleapis.com/css?family=Lato:100,300,400,700\' rel=\'stylesheet\' type=\'text/css\'>
		<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
	</head>
	<body class="faq">
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
	echo '<section class="intro" style="background:url(\'images/faq-01.png\') #333 no-repeat top; background-size:cover">
			<div class="wrap">
				<h1 class="title">Questions?</h1>
			</div>
		</section>
		<section class="text">
			<div class="wrap">
				<h2>The Berkeley Yearbook</h2>
				<div class="copy">
					<p class="light">coming soon</p>
				</div>
			</div>
		</section>';
		include 'footer.php';
		echo '
	</body>
</html>';
exit;
?>