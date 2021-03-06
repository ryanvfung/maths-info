<?php
if(!$subtitle) $subtitle = '&nbsp;';
if($subtitle=='') $subtitle = '&nbsp;';
$version = '3.0.2';
$lastupdated = '2015-04-14';
$description = 'Maths Info: A reference website resource providing all formulae needed for basis and intermediate level mathematics';
$title = $subtitle.' | Maths Info';
?>
<!doctype html>
<!-- Ryan Fung's HTML Template v5.1 -->
<html><head>
	<title><?php echo $title; ?></title>
	<link rel='icon'          type='image/png' href='http://ryanvfung.com/images/favicon.png' />
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Maven+Pro:400,700'>
	<link rel='stylesheet' type='text/css' href='<?php echo $home; ?>z51.css'>
	<link rel='stylesheet' type='text/css' href='<?php echo $home; ?>z51-maths-info.css'>
	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
	<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.14/jquery.scrollTo.min.js'></script>
	<script type='text/javascript' src='//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
	<script type='text/javascript' src='<?php echo $home; ?>z51.js'></script>
	<meta name='viewport' content='width=device-width,initial-scale=1' />
	<meta charset='UTF-8' />
	<meta name='author'              content='Ryan Fung' />
	<meta name='description'         content='<?php echo $description; ?>' />
	<meta property='og:description'  content='<?php echo $description; ?>' />
	<meta name='twitter:description' content='<?php echo $description; ?>' />
	<meta name='title'               content='<?php echo $title; ?>' />
	<meta property="og:title"        content='<?php echo $title; ?>' />
	<meta name="twitter:title"       content='<?php echo $title; ?>' />
<?php /*
	<meta name='image'               content='http://ryanvfung.com/maths/share.png' />
	<meta property='og:image'        content='http://ryanvfung.com/maths/share.png' />
	<meta itemprop='image'           content='http://ryanvfung.com/maths/share.png' />
*/ ?>
	<meta property="og:type"         content='website' />
<?php /*
	<meta name='twitter:card'        content='summary' />
	<meta name='twitter:site'        content='@ryanvfung' />
	<meta name='twitter:creator'     content='@ryanvfung' />
*/ ?>
	<meta name='locale'              content='en_GB' />
	<meta property='og:locale'       content='en_GB' />
	<meta name='site_name'           content='Maths Info' />
	<meta property='og:site_name'    content='Maths Info' />
</head><body>
<div id='header-wrapper'>
	<header>
		<div id='title'><a href='http://ryanvfung.com/maths'>Maths Info</a></div>
		<div id='subtitle'><?php echo $subtitle ?></div>
	</header>
</div>
<nav id='navbar'>
	<span id='navbar-button'></span>
	<span id='navbar-title'><?php echo $subtitle ?></span>
</nav>
<nav id='nav'>
	<p id='nav-title'>Contents</p>
	<ul>
<?php
$nav = array(
"Algebra" => "
		<li>
			<a href='$home"."algebra/'>Algebra</a>
			<ul>
				<li>
					<a href='$home"."algebra/#fundamentals'>Fundamentals</a>
					<ul>
						<li><a href='$home"."algebra/#exponent-laws'>Exponent Laws</a></li>
						<li><a href='$home"."algebra/#logarithm-laws'>Logarithm Laws</a></li>
					</ul>
				</li>
				<li><a href='$home"."algebra/#partial-fractions'>Partial Fractions</a></li>
			</ul>
		</li>
",
"Trigonometry" => "
		<li>
			<a href='$home"."trigonometry/'>Trigonometry</a>
			<ul>
				<li>
					<a href='$home"."trigonometry/#trigonometric-identities'>Trigonometric Identities</a>
					<ul>
						<li><a href='$home"."trigonometry/#angle-identities'>Angle Identities</a></li>
						<li><a href='$home"."trigonometry/#pythagoras-theorem'>Pythagoras' Theorem</a></li>
						<li><a href='$home"."trigonometry/#addition-formulae'>Addition Formulae</a></li>
						<li><a href='$home"."trigonometry/#complex-identities'>Complex Identities</a></li>
					</ul>
				</li>
				<li>
					<a href='$home"."trigonometry/#integral-identities'>Integral Identities</a>
					<ul>
						<li><a href='$home"."trigonometry/#orthogonality-conditions'>Orthogonality Conditions</a></li>
					</ul>
				</li>
			</ul>
		</li>
",
"Calculus" => "
		<li>
			<a href='$home"."calculus/'>Calculus</a>
			<ul>
				<li><a href='$home"."calculus/#standard-results'>Standard Results</a></li>
				<li><a href='$home"."calculus/#differentiation-laws'>Differentiation Laws</a></li>
				<li><a href='$home"."calculus/#integration-laws'>Integration Laws</a></li>
				<li>
					<a href='$home"."calculus/#applications-of-integration'>Applications of Integration</a>
					<ul>
						<li><a href='$home"."calculus/#solid-of-revolution'>Solid of Revolution</a></li>
						<li><a href='$home"."calculus/#continuously-varying-quantities'>Continuously Varying Quantities</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
"
);

while ($key = current($nav)) {
    if ($key == strtolower($subtitle)) {
        echo str_replace(
			"../".strtolower($subtitle)."/",
			"",
			current($nav)
		);
    } else {
		echo current($nav);
	}
    next($nav);
}
?>
</nav>
<div id='main-wrapper'><main>