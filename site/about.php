<?php
// filetypes to display
$imagetypes = array("image/jpeg", "image/gif");
	// Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

function getImages($dir) {
	global $imagetypes;
	
	// array to hold return value
	$retval = array();
	
	// add trailing slash if missing
	if(substr($dir, -1) != "/") $dir .= "/";
	
	// full server path to directory
	$fulldir = "{$_SERVER['DOCUMENT_ROOT']}/$dir";
	
	$d = @dir($fulldir) or die("getImages: Failed opening directory $dir for reading");
	while(false !== ($entry = $d->read())) {
	  // skip hidden files
	  if($entry[0] == ".") continue;
	
	  // check for image files
	  $f = escapeshellarg("$fulldir$entry");
	  $mimetype = trim(`file -bi $f`);
	  foreach($imagetypes as $valid_type) {
		if(preg_match("@^{$valid_type}@", $mimetype)) {
		  $retval[] = array(
		   'file' => "/$dir$entry",
		   'size' => getimagesize("$fulldir$entry"),
		   'name' => $entry
		  );
		  break;
		}
	  }
	}
	$d->close();
	
	return $retval;
}
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
				<h2>Staff</h2>';
				// fetch image details
                  $images = getImages("http://bgyearbook.com/images/staff/2014/");

				// display on page
				foreach($images as $img) {
					$filename = $img['name'];
					$arr = explode('_',$filename);
					$name = $arr[0];
					$position = $arr[1];
				echo '
				<div class="person">
					<div class="photo">
						<span class="mask"><img src="'.$img['file'].'"></span>
					</div>
					<div class="caption">
						<h3 class="person-name">'.$name.'</h3>
						<p class="person-title">'.$position.'</p>
					</div>
				</div>';
				}
				echo '
			</div>
		</section>';
		include 'footer.php';
		echo '
	</body>
</html>';
exit;
?>