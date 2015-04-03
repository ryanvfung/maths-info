<?php
	$subtitle = 'Calculus';
	$home = '../';
	@include '../inc/header.php';
	@include '../inc/latex-declarations.php';
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
			<td>\[ \frac{1}{\sqrt{1 + x^2}} \]</td>
			<td>\[ \sinh^{-1}{x} \]</td>
			<td />
		</tr><tr>
			<td>\[ \frac{1}{\sqrt{x^2 - 1}} \]</td>
			<td>\[ \cosh^{-1}{x} \]</td>
			<td />
		</tr><tr>
			<td>\[ \frac{1}{1 - x^2} \]</td>
			<td>\[ \tanh^{-1}{x} \]</td>
			<td />
		</tr></table>
</section>
<section>
	<h1 id='differentiation-laws'>Differentiation Laws</h1>
	<h2 id='constant-rule'>Constant Rule</h2>
		<p>\[ \ddx{}{x} (c u) = c \ddx{u}{x}  \]</p>
	<h2 id='product-rule'>Product Rule</h2>
		<p>\[ \ddx{}{x} (u v) = v\ddx{u}{x} + u\ddx{v}{x} \]</p>
	<h2 id='quotient-rule'>Quotient Rule</h2>
		<p>\[ \ddx{}{x} \left( \frac{u}{v} \right) = \frac{ v\ddx{u}{x} - u\ddx{v}{x} }{v^2} \]</p>
	<h2 id='chain-rule'>Chain Rule</h2>
		<p>\[ \ddx{u}{x} = \ddx{u}{y} \ddx{y}{x} \]</p>
	<h2 id='implicit-differentiation'>Implicit Differentiation</h2>
		<p>Implicit differentiation is used to differentiate functions such as f(y) in terms of another variable using the chain rule:</p>
		<p>\[ \ddx{}{x}f(y) = \ddx{}{y}f(y) \times \ddx{y}{x} \]</p>
	<h2 id='parametric-differentiation'>Parametric Differentiation</h2>
		<p>Parametric differentiation is used to differentiate parametrically defined functions using the chain rule</p>
		<p>Given that \( y=f(x), x=g(t), y=h(t) \):</p>
		<p>\[ \ddx{y}{x} = \ddx{y}{t} \Big/ \ddx{x}{t} = \ddx{y}{t} \ddx{t}{x} \]</p>
		<p>\[ \dddx{y}{x} = \ddx{}{x}\ddx{y}{x} = \left(\ddx{}{t}\ddx{y}{x}\right) \Big/ \ddx{x}{t} \]</p>
	<h2 id='logarithmnic-differentiation'>Logarithmic differentiation</h2>
		<p>Logarithmic differentiation is used to differentiate complicated functions such as functions raised to powers</p>
		<p>
			\[
				\begin{align}
					    y &amp;= f(x) \\
					\ln y &amp;= \ln f(x) \\
					\frac{1}{y}\ddx{y}{x} &amp;= \ddx{}{x} \ln f(x)
				\end{align}
			\]
		</p>
</section>
<section>
	<h1 id='integration-laws'>Integration Laws</h1>
	<h2 id='integration-by-simple-substitution'>Integration by Simple Substitution</h2>
		<p>Given \( u = f(x) , \ddx{u}{x} = f'(x) \therefore \dx{x} = \frac{\dx{u}}{f'(x)} \):</p>
		<p>\[ \int_a^b g \left( f(x) \right) \dx{x} = \int_{f(a)}^{f(b)} g(u) \frac{\dx{u}}{f'(x)} \]</p>
	<h2 id='integration-by-parts'>Integration by Parts</h2>
		<p>Integrate the product rule with respect to \( x \):</p>
		<p>\[ \int{u\ddx{v}{x}\dx{x}} = uv - \int{v\ddx{u}{x}\dx{x}} \]</p>
	<h2 id='integration-by-substitution'>Integration by Substitution</h2>
		<p>Integrate the chain rule with respect to \( x \):</p>
		<p>\[ \int{f'(g(x))g'(x)\ \dx{x}} = f(g(x)) + c \]</p>
		<p>Given \( t = g(x) \):</p>
		<p>\[ \int{f'(t) \ddx{t}{x} \dx{x}} = \int{ f'(t)\ \dx{t}} = f(t) + c = f(g(x)) + c \]</p>
</section>
<section>
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
<section>
	<h1 id='applications-of-integration'>Applications of Integration</h1>
	<h2 id='solid-of-revolution'>Solid of Revolution</h2>
		<h3>Volume of Revolution</h3>
			<p>
				\[
					\begin{align}
						V &amp;= \pi \int_a^b{[f(x)]^2 \dx{x}}\qquad\quad = \pi \int_a^b y^2\ \dx{x} \\
						V &amp;= \pi \int_a^b{[f(x)-g(x)]^2 \dx{x}}       = \pi \int_a^b (y_2-y_1)^2 \dx{x}
					\end{align}
				\]
			</p>
		<h3>Centroid of a Plane Area</h3>
			<p>The plane area between two continuous functions \( f(x) \lt g(x) \) on a given interval \( x \in [a,b] \) is defined as:</p>
			<p>\[ A = \int_a^b{f(x)\dx{x}} - \int_a^b{g(x)\dx{x}} \]</p>
			<p>The coordinates of the centroid \( (\bar{x}, \bar{y}) \) are defined by:</p>
			<p>
				\[
					\begin{align}
						\bar{x} &amp;= \ \frac{1}{A} \int_a^b{x[f(x)-g(x)]\dx{x}}           \qquad\ \ = \ \frac{1}{A} \int_a^b{x(y_2-y_1)\dx{x}} \\
						\bar{y} &amp;= \frac{1}{2A}  \int_a^b{\left\{[f(x)]^2-[g(x)]^2\right\}\dx{x}} = \frac{1}{2A}  \int_a^b{(y_2^2 - y_1^2)\dx{x}}
					\end{align}
				\]
			</p>
		<h3>Geometric Properties</h3>
			<p>Arc length of the curve:</p>
			<p>\[ s = \int_a^b{\sqrt{1 + \left(\ddx{y}{x}\right)^2 }\dx{x}} \]</p>
			<p>Surface area of the solid of revolution:</p>
			<p>\[ S = 2\pi \int_a^b{y \sqrt{1 + \left(\ddx{y}{x}\right)^2 }\dx{x}} \]</p>
	<h2 id='continuously-varying-quantities'>Continuously Varying Quantities</h2>
		<p>Mean value</p>
		<p>\[ \mathrm{m.v.}(f(x)) = \frac{1}{b-a} \int_a^b{f(x)\dx{x}} = \frac{1}{b-a} \int_a^b{y\ \dx{x}} \]</p>
		<p>Root mean square value</p>
		<p>
			\[
				\begin{align}
					\left[\mathrm{r.m.s.}(f(x))\right]^2 &amp;= \quad \frac{1}{b-a} \int_a^b{[f(x)]^2\dx{x}}  = \quad\,\frac{1}{b-a} \int_a^b{y^2\dx{x}} \\
					      \mathrm{r.m.s.}(f(x))          &amp;= \sqrt{\frac{1}{b-a} \int_a^b{[f(x)]^2\dx{x}}} =  \sqrt{\frac{1}{b-a} \int_a^b{y^2\dx{x}}}
				\end{align}
			\]
		</p>		
</section>
<?php
	@include '../inc/footer.php';
?>