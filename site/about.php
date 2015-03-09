<?php
echo '<html>
	<head>
		<title>About | Blue and Gold Yearbook</title>
		<link href="style.css" rel="stylesheet">
		<link href=\'http://fonts.googleapis.com/css?family=Lato:100,300,400,700\' rel=\'stylesheet\' type=\'text/css\'>
		<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
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
		echo '<section class="intro" style="background:url(\'images/about-01.png\') #333 no-repeat center; background-size:cover">
			<div class="wrap">
				<h1 class="title">Who <span>we</span> are.</h1>
			</div>
		</section>
		<section class="text">
			<div class="wrap">
				<h2>The Berkeley Yearbook</h2>
				<div class="copy">
					<p>The Blue &amp; Gold Yearbook is the official yearbook for the University of California, Berkeley. Published since 1875, we provide readers coverage of events, issues and trends within the Berkeley community. As a historical record, the yearbook also includes campus facts, figures and people, including a section for graduating seniors\' portraits and majors.</p>
				</div>
			</div>
		</section>';
		include 'footer.php';
		echo '
	</body>
</html>';
exit;
?>