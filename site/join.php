<?php
echo '
	<html>
		<head>
			<title>Blue and Gold Yearbook</title>
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
echo '<section class="intro" style="background:url(\'images/banquet.jpg\') #333 no-repeat center; background-size:cover">
			<div class="wrap">
				<h1 class="title">Be a part of the <br><span>Blue & Gold Yearbook</span> family.</h1>
				<!-- <p class="byline">Are you a <a href="#">student group</a>? A <a href="#">senior</a>? A <a href="#">Yearbook-swag</a>-seeking shopper? -->
			</div>
		</section>
		<a href="http://tinyurl.com/calyearbook2015" class="banner">
			<p>Submit an application!<span class="arrow right"><span class="leg"></span></span></p>
		</a>
		<section class="text">
			<div class="wrap">
				<div class="join_a_team">
				<h2>Join a Team</h2>
				</div>
				<div class="team">
					<div class="team_title">Business Operations</div>
					<div class="team_description">
						<span class="bullet_point">•</span>
						<div class="team_text">
							Does the friend of your friend’s roommate’s classmate know about the yearbook? Does that guy know that he can be in the yearbook? As part of the Business Operations Team, you will be responsible for ensuring widespread knowledge and name-recognition for the Blue & Gold. Additionally, you will help our staff maximize consumer satisfaction, and gain invaluable experience working with customers and data management.
						</div>
					</div>
				</div>
				<div class="team">
					<div class="team_title">Design</div>
					<div class="team_description">
						<span class="bullet_point">•</span>
						<div class="team_text">
							The Design Team is the core of the yearbook production, responsible for putting together stories and photos, and creating cohesive and visually consistent spreads and graphics. By incorporating new and classy design elements, the Design Team is responsible for much of what makes the book distinctive from previous years.
						</div>
					</div>
				</div>
				<div class="team">
				<div class="team_title">Copy</div>
					<div class="team_description">
						<span class="bullet_point">•</span>
						<div class="team_text">
							The Journalism Team provides diverse coverage of events, issues and trends that define the year and jumpstart every spread in the book. Staff writers are encouraged to discover topics on their own, as well as work on assigned stories and supplemental content. They gain experience researching, interviewing, and writing for the yearbook.
						</div>
					</div>
				</div>
				<div class="team">
					<div class="team_title">Photography</div>
					<div class="team_description">
						<span class="bullet_point">•</span>
						<div class="team_text">
							Photos complement the written and visual aspects of the yearbook. As part of the photo team, you may find yourself on the sidelines of a football field with the Golden Bears or in the midst of a protest or even at a concert a few feet away from the main action with a Blue & Gold press pass dangling from your neck. By joining the team, not only will you have access to these powerful press passes, you will feel the independent, freelance spirit of a professional photographer while building a comprehensive, high-quality portfolio.
						</div>
					</div>
				</div>
			</div>
		</section>';
		include 'footer.php';
		echo '
	</body>
</html>';
exit;
?>