<?php
	$subtitle = 'Calculus';
	$homedirectory = '../';
	@include '../php/header.php';
?>
<style>
.vertical {
	display: inline-block;
	transform: rotate(-90deg);
	height: 1em;
	width: 1.5em;
	vertical-align: -4em;
}
</style>
<section>
	<p style='display:none'>
		\[
			\newcommand{\dx}[1]{\mathrm{d}#1}
			\newcommand{\ddx}[2]{\frac{\mathrm{d}#1}{\mathrm{d}#2}}
			\newcommand{\dddx}[2]{\frac{\mathrm{d}^2 #1}{\mathrm{d}#2^2}}
			\newcommand{\dddxx}[3]{\frac{\mathrm{d}^2 #1}{\mathrm{d}#2\mathrm{d}#3}}
			\newcommand{\pdx}[1]{\mathrm{\partial}#1}
			\newcommand{\pddx}[2]{\frac{\mathrm{\partial}#1}{\mathrm{\partial}#2}}
			\newcommand{\pdddx}[2]{\frac{\mathrm{\partial}^2 #1}{\mathrm{\partial}#2^2}}
			\newcommand{\pdddxx}[3]{\frac{\mathrm{\partial}^2 #1}{\mathrm{\partial}#2\mathrm{\partial}#3}}
			\DeclareMathOperator{\sech}{sech}
		\]
	</p>
	<h1 id='standard-results'>Standard Results</h1>
		<h2 id='fundamental-theorem'>Fundamental Theorem of Calculus</h2>
			<p>The process of differentiation is the inverse of that of integration.</p>
			<p>\[ \ddx{}{x} \int{f(x)\ \dx{x}} = f(x) \]</p>
		<h2>Standard Results</h2>
			<table><tr>
				<th />
				<th>
					Derivative<br>
					\( \ddx{}{x} f(x) \)
				</th>
				<th>
					Function<br>
					\( f(x) \)
				</th>
				<th>
					Integral<br>
					\( \int{f(x)\ \dx{x}} \)</th>
			</tr><tr>
				<th rowspan='2'><span class='vertical'>Polynomial</span></th>
				<td>\[ 0 \]</td>
				<td>\[ c \]</td>
				<td>\[ cx \]</td>
			</tr><tr>
				<td>\[ nx^{n-1} \]</td>
				<td>\[ x^n \]</td>
				<td>\[ \frac{1}{n+1} x^{n+1} \]</td>
			</tr><tr>
				<th rowspan='2'><span class='vertical'>Exponential</span></th>
				<td>\[ ae^{ax} \]</td>
				<td>\[ e^{ax} \]</td>
				<td>\[ \frac{1}{a} e^{ax} \]</td>
			</tr><tr>
				<td>\[ \frac{1}{x} \]</td>
				<td>\[ \ln{x} \]</td>
				<td>\[ x \ln{x} + x \]</td>
			</tr><tr>
				<th rowspan='9'><span class='vertical'>Trigonometric</span></th>
				<td>\[ \cos{x} \]</td>
				<td>\[ \sin{x} \]</td>
				<td>\[-\cos{x} \]</td>
			</tr><tr>
				<td>\[-\sin{x} \]</td>
				<td>\[ \cos{x} \]</td>
				<td>\[ \sin{x} \]</td>
			</tr><tr>
				<td>\[ \sec^2{x} \]</td>
				<td>\[ \tan{x} \]</td>
				<td>\[ -\ln(\cos{x}) \]</td>
			</tr><tr>
				<td>\[ -\csc^2{x} \]</td>
				<td>\[ \cot{x} \]</td>
				<td>\[ \ln(\sin{x}) \]</td>
			</tr><tr>
				<td>\[ \sec{x} \tan{x} \]</td>
				<td>\[ \sec{x} \]</td>
				<td><span style='font-size:0.66em'>
					\[ \ln\left(  \sin\frac{x}{2} + \cos\frac{x}{2}  \right) -
						\ln\left(  \cos\frac{x}{2} - \sin\frac{x}{2}  \right) \]
				</span></td>
			</tr><tr>
				<td>\[ -\csc{x}\cot{x} \]</td>
				<td>\[ \csc{x} \]</td>
				<td><span style='font-size:0.75em'>\[ \ln\left(  \sin\frac{x}{2} \right) - \ln\left(  \cos\frac{x}{2} \right) \]</span></td>
			</tr><tr>
				<td>\[ \frac{1}{\sqrt{a^2 - x^2}} \]</td>
				<td>\[ \frac{1}{a} \sin^{-1}\left( \frac{x}{a} \right) \]</td>
				<td />
			</tr><tr>
				<td>\[-\frac{1}{\sqrt{a^2 - x^2}} \]</td>
				<td>\[ \frac{1}{a} \cos^{-1}\left( \frac{x}{a} \right) \]</td>
				<td />
			</tr><tr>
				<td>\[ \frac{1}{a^2 + x^2} \]</td>
				<td>\[ \frac{1}{a} \tan^{-1}\left( \frac{x}{a} \right) \]</td>
				<td />
			</tr><tr>
				<th rowspan='6'><span class='vertical'>Hyperbolic</span></th>
				<td>\[ \cosh{x} \]</td>
				<td>\[ \sinh{x} \]</td>
				<td>\[ \cosh{x} \]</td>
			</tr><tr>
				<td>\[ \sinh{x} \]</td>
				<td>\[ \cosh{x} \]</td>
				<td>\[ \sinh{x} \]</td>
			</tr><tr>
				<td>\[ \sec^2{x} \]</td>
				<td>\[ \tanh{x} \]</td>
				<td>\[ \ln(\cosh{x}) \]</td>
			</tr><tr>
			</tr><tr>
			</tr><tr>
			</tr></table>

	<h1 id='differentiation-laws'>Differentiation Laws</h1>
		<h2>Constant Rule</h2>
			<p>\[ \ddx{}{x} (c u) = c \ddx{u}{x}  \]</p>
		<h2>Product Rule</h2>
			<p>\[ \ddx{}{x} (u v) = v\ddx{u}{x} + u\ddx{v}{x} \]</p>
		<h2>Quotient Rule</h2>
			<p>\[ \ddx{}{x} \left( \frac{u}{v} \right) = \frac{ v\ddx{u}{x} - u\ddx{v}{x} }{v^2} \]</p>
		<h2>Chain Rule</h2>
			<p>\[ \ddx{u}{x} = \ddx{u}{y} \ddx{y}{x} \]</p>

	<h1 id='integration-laws'>Integration Laws</h1>
		<h2>Integration by Simple Substitution</h2>
			<p>Given \( u = f(x) , \ddx{u}{x} = f'(x) \therefore \dx{x} = \frac{\dx{u}}{f'(x)} \):</p>
			<p>\[ \int_a^b g \left( f(x) \right) \dx{x} = \int_{f(a)}^{f(b)} g(u) \frac{\dx{u}}{f'(x)} \]</p>
		<h2>Integration by Parts</h2>
			<p>Integrate the product rule with respect to \( x \):</p>
			<p>\[ \int{u\ddx{v}{x}\dx{x}} = uv - \int{v\ddx{u}{x}\dx{x}} \]</p>
		<h2>Integration by Substitution</h2>
			<p>Integrate the chain rule with respect to \( x \):</p>
			<p>\[ \int{f'(g(x))g'(x)\ \dx{x}} = f(g(x)) + c \]</p>
			<p>Given \( t = g(x) \):</p>
			<p>\[ \int{f'(t) \ddx{t}{x} \dx{x}} = \int{ f'(t)\ \dx{t}} = f(t) + c = f(g(x)) + c \]</p>
	<h1 id='common-substitutions'>Common Substitutions</h1>
		<table><tr>
			<th>Function</th>
			<th>Substitution</th>
			<th>Substituted Derivative</th>
		</tr><tr>
			<td rowspan='2'>\[ \sqrt{a^2 - x^2} \]</td>
			<td>\[ x = a \sin{\theta} \]</td>
			<td>\[ \ddx{x}{\theta} = a \cos{\theta} \]</td>
		</tr><tr>
			<td>\[ x = a \tanh{u} \]</td>
			<td>\[ \ddx{x}{u} = a \sech^2{u} \]</td>
		</tr><tr>
			<td rowspan='2'>\[ \sqrt{a^2 + x^2} \]</td>
			<td>\[ x = a \sinh{u} \]</td>
			<td>\[ \ddx{x}{u} = a \cosh{u} \]</td>
		</tr><tr>
			<td>\[ x = a \tan{\theta} \]</td>
			<td>\[ \ddx{x}{\theta} = a \sec^2{\theta} \]</td>
		</tr><tr>
			<td rowspan='2'>\[ \sqrt{x^2 - a^2} \]</td>
			<td>\[ x = a \cosh{u} \]</td>
			<td>\[ \ddx{x}{u} = a \sinh{u} \]</td>
		</tr><tr>
			<td>\[ x = a \sec{\theta} \]</td>
			<td>\[ \ddx{x}{\theta} = a \sec{\theta}\tan{\theta} \]</td>
		</tr><tr>
			<td rowspan='3' style='font-weight:bold;'>Circular<br>Functions</td>
			<td>\[ s = \sin{x} \]</td>
			<td>\[ \ddx{s}{x} = \cos{x} \]</td>
		</tr><tr>
			<td>\[ c = \cos{x} \]</td>
			<td>\[ \ddx{c}{x} = - \sin{x} \]</td>
		</tr><tr>
			<td>\[ t = \tan{\frac{1}{2}x} \]</td>
			<td style='color:#09f;'>\[ \ddx{x}{t} = \frac{2}{1+t^2} \]</td>
		</tr><tr>
			<td rowspan='4' style='font-weight:bold;'>Hyperbolic<br>Functions</td>
			<td>\[ u = e^x \]</td>
			<td>\[ \ddx{u}{x} = e^x \]</td>
		</tr><tr>
			<td>\[ s = \sinh{x} \]</td>
			<td>\[ \ddx{s}{x} = \cosh{x} \]</td>
		</tr><tr>
			<td>\[ c = \cosh{x} \]</td>
			<td>\[ \ddx{c}{x} = \sinh{x} \]</td>
		</tr><tr>
			<td>\[ t = \tanh{\frac{1}{2}x} \]</td>
			<td>\[ \ddx{t}{x} = \frac{1}{2} \sech^2{\frac{1}{2}x} \]</td>
		</tr></table>
</section>
<?php
	@include '../php/footer.php';
?>