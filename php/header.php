<!doctype html>
<!-- Ryan Fung's HTML Template v5.1 -->
<html><head>
	<title><?php echo $subtitle ?> | Maths Info</title>
	<link rel='icon' type='image/png' href='http://www.ryanvfung.com/images/favicon.png' />
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Maven+Pro:400,700'>
	<link rel='stylesheet' type='text/css' href='<?php echo $homedirectory; ?>z51.css'>
	<link rel='stylesheet' type='text/css' href='<?php echo $homedirectory; ?>z51-maths-info.css'>
	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
	<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.14/jquery.scrollTo.min.js'></script>
	<script type='text/javascript' src='//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
	<script type='text/javascript' src='<?php echo $homedirectory; ?>z51.js'></script>
	<meta name='author' content='Ryan Fung' />
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
		<li>
			<a href='../algebra/'>Algebra</a>
			<ul>
				<li>
					<a href='../algebra/#fundamentals'>Fundamentals</a>
					<ul>
						<li><a href='../algebra/#exponent-laws'>Exponent Laws</a></li>
						<li><a href='../algebra/#logarithm-laws'>Logarithm Laws</a></li>
					</ul>
				</li>
				<li><a href='../algebra/#partial-fractions'>Partial Fractions</a></li>
			</ul>
		</li>
		<li>
			<a href='../trigonometry/'>Trigonometry</a>
			<ul>
				<li>
					<a href='../trigonometry/#trigonometric-identities'>Trigonometric Identities</a>
					<ul>
						<li><a href='../trigonometry/#angle-identities'>Angle Identities</a></li>
						<li><a href='../trigonometry/#pythagoras-theorem'>Pythagoras' Theorem</a></li>
						<li><a href='../trigonometry/#addition-formulae'>Addition Formulae</a></li>
						<li><a href='../trigonometry/#complex-identities'>Complex Identities</a></li>
					</ul>
				</li>
				<li>
					<a href='../trigonometry/#integral-identities'>Integral Identities</a>
					<ul>
						<li><a href='../trigonometry/#orthogonality-conditions'>Orthogonality Conditions</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href='../calculus/'>Calculus</a>
			<ul>
				<li>
					<a href='../calculus/#standard-results'>Standard Results</a>
					<a href='../calculus/#differentiation-laws'>Differentiation Laws</a>
					<a href='../calculus/#integration-laws'>Integration Laws</a>
				</li>
			</ul>
		</li>
	</ul>
</nav>
<div id='main-wrapper'><main>