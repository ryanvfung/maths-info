<?php
	$subtitle = 'Algebra';
	$homedirectory = '../';
	@include '../php/header.php';
?>
<section>
	<h1 id='fundamentals'>Fundamentals</h1>
		<h2 id='exponent-laws'>Exponent Laws</h2>
			<p>
				\[
				\begin{align}
					a^0 &amp; = 1 \\
					a^1 &amp; = a \\
					a^{-p} &amp; = \frac{1}{a^p} \\
					a^\frac{1}{p} &amp; = \sqrt[p]{a} \\
					a^\frac{q}{p} &amp; = (\sqrt[p]{a})^q = \sqrt[p]{a^q} \\
					a^m \times a^n &amp; = a^{m+n} \\
					a^m \div a^n &amp; = a^{m-n} \\
					(a^m)^n &amp; = a^{mn} \\
					(ab)^n &amp; = a^n b^n \\
					\left(\frac{a}{b}\right)^n &amp; = \frac{a^n}{b^n} \\
					(\sqrt[n]{a})^n &amp; = a \\
						\sqrt[n]{a^n} &amp; = 
						\begin{cases}
							|a| &amp; \mathrm{if}\ n\ \mathrm{is\ even} \\
							\ a &amp; \mathrm{if}\ n\ \mathrm{is\ odd}
						\end{cases} \\
					\sqrt[n]{a} \times \sqrt[n]{b} &amp; = \sqrt[n]{ab} \\
					\frac{ \sqrt[n]{a} }{ \sqrt[n]{b} } &amp; = \sqrt[n]\frac{a}{b} \\
					\sqrt[m]{\sqrt[n]{a}} &amp; = \sqrt[mn]{a} \\
				\end{align}
				\]
			</p>
		<h2 id='logarithm-laws'>Logarithm Laws</h2>
			<p>
				\[
				\begin{align}
				y &amp; = a^x \Longleftrightarrow x = \log_a y \\
				\log_a a &amp; = 1 \\
				\log_a 1 &amp; = 0 \\
				\log_a (mn) &amp; = \log_a m + \log_a n \\
				\log_a \left(\frac{m}{n}\right) &amp; = \log_a m - \log_a n \\
				\log_a m^n &amp; = n \log_a m \\
				\log_a a^k &amp; = k \\
				\lg x &amp; = \log_{10} x \\
				\ln_x &amp; = \log_e x \\
				\log_a b &amp; = \frac{\log_c b}{\log_c a} \\
				\end{align}
				\]
			</p>
	<h1 id='partial-fractions'>Partial Fractions</h1>
		<table><tr>
			<th colspan='2'>Factor in denominator</th>
			<th>Partial Fraction</th>
		</tr><tr>
			<th>Linear</th>
			<td>\( ax+b \)</td>
			<td>\[ \frac{A}{ax+b} \]</td>
		</tr><tr>
			<th>Repeated Linear</th>
			<td>\[ {(ax+b)}^2 \]</td>
			<td>\[ \frac{A}{ax+b} + \frac{B}{(ax+b)^2} \]</td>
		</tr><tr>
			<th>Quadratic</th>
			<td>\[ ax^2 + bx + c \]</td>
			<td>\[ \frac{Ax+B}{ax^2+bx+c} \]</td>
		</tr><tr>
			<th>Repeated Quadratic</th>
			<td>\[ (ax^2 + bx + c)^2 \]</td>
			<td>\[ \frac{Ax+B}{ax^2+bx+c} + \frac{Cx+D}{(ax^2+bx+c)^2} \]</td>
		</tr></table>
</section>
<?php
	@include '../php/footer.php';
?>