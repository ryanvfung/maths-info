<?php
	$subtitle = 'Home';
	$homedirectory = '';
	@include 'php/header.php';
?>
<section>
	<h1>Introduction</h1>
		<p>Welcome to <?php echo $description; ?>.</p>
		<p>Please use the contents menu on the left to view formulae on each mathematical topic.</p>
	<h1>Document Details</h1>
		<p>Title: Mathematical Information</p>
		<p>Author: <a class='link' href='http://www.ryanvfung.com'>Ryan Fung</a></p>
		<h2>Version Details</h2>
			<p>Version: v<?php echo $version; ?></p>
			<p>Last Updated: <?php echo $lastupdated; ?></p>
		<h2>Terms of Use</h2>
			<p>You may use the mathematical information under the <a class='link' href='http://opensource.org/licenses/MIT'>MIT license</a>.</p>
			<p>The author is not liable for damages caused by errors or omissions in this document. Information on various aspects of mathematics might be incorrect. This document is subject to change without further notice from the author.</p>
			<p>Errors should be reported to the <a class='link' href='mailto:ryan@ryanvfung.com'>author</a> as soon as possible. Alternatively, fork the project on <a class='link' href='https://github.com/ryanvfung/maths-info/'>GitHub</a>!</p>
			<p>Recommendations to the author on mathematical topics are welcome.</p>
</section>
<script type='text/javascript'>
var a = $('nav#nav a');
for ( i = 0; i < a.length; i++ ) {
	$(a[i]).attr('href', $(a[i]).attr('href').replace('../','') );
}
</script>
<?php
	@include 'php/footer.php';
?>