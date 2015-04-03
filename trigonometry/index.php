<?php
	$subtitle = 'Trigonometry';
	$home = '../';
	@include '../inc/header.php';
	@include '../inc/latex-declarations.php';
?>
<section>
	<h1 id='trigonometric-identities'>Trigonometric Identities</h1>
	<h2 id='angle-identities'>Angle Identities</h2>
		<table><tr>
			<th>Sine</th>
			<th>Cosine</th>
			<th>Tangent</th>
		</tr><tr>
			<td>
				\[
				\begin{align}
					\sin(\theta + 180^\circ) &amp; = - \sin\theta \\
					\sin(\theta + 360^\circ) &amp; = \sin\theta
				\end{align}
				\]
			</td>
			<td>
				\[
				\begin{align}
					\cos(\theta + 180^\circ) &amp; = - \cos\theta \\
					\cos(\theta + 360^\circ) &amp; = \cos\theta
				\end{align}
				\]
			</td>
			<td>
				\[
				\begin{align}
					\tan(\theta + 180^\circ) &amp; = \tan\theta \\
					\tan(\theta + 360^\circ) &amp; = \tan\theta

				\end{align}
				\]
			</td>
		</tr><tr>
			<td>
				\[
				\begin{align}
					\sin( 90^\circ - \theta) &amp; = \cos\theta \\
					\sin(180^\circ - \theta) &amp; = \sin\theta
				\end{align}
				\]
			</td>
			<td>
				\[
				\begin{align}
					\cos( 90^\circ - \theta) &amp; = \sin\theta \\
					\cos(180^\circ - \theta) &amp; = -\cos\theta
				\end{align}
				\]
			</td>
			<td>
				\[
				\begin{align}
					\tan( 90^\circ - \theta) &amp; = \frac{1}{\tan\theta} \\
					\tan(180^\circ - \theta) &amp; = -\tan\theta
				\end{align}
				\]
			</td>
		</tr><tr>
			<td>\[ \sin(-\theta) = - \sin(\theta) \]</td>
			<td>\[ \cos(-\theta) =   \cos(\theta) \]</td>
			<td>\[ \tan(-\theta) = - \tan(\theta) \]</td>
		</tr></table>
	<h2 id='pythagoras-theorem'>Pythagoras' Theorem</h2>
		<p>
			\[
				\begin{align}
					\sin^2 x + \cos^2 x &amp; = 1 \\
					\tan^2 x + 1		&amp; = \sec^2 x \\
					1		+ \cot^2 x &amp; = \rm{cosec}^2 x
				\end{align}
			\]
		</p>
	<h2 id='addition-formulae'>Addition Formulae</h2>
		<table><tr>
			<td>\[ \sin \left( {A \pm B} \right) = \sin A \cos B \pm \cos A \sin B \]</td>
			<td>\[ \cos \left( {A \pm B} \right) = \cos A \cos B \mp \sin A \sin B \]</td>
			<td>\[ \tan \left( {A \pm B} \right) = \frac{\tan A \pm \tan B}{1 \mp \tan A \tan B} \]</td>
		</tr><tr>
			<td>\[ \sin 2x = 2 \sin x \cos x \]</td>
			<td>
				\[
					\begin{align}
						\cos 2x &amp; = \cos^2 x - \sin^2x \\
						\cos 2x &amp; = 2 \cos^2 x - 1 = 1 - 2 \sin^2 x
					\end{align}
				\]
			</td>
			<td>\[ \tan 2x = \frac{2\tan x}{1 - \tan^2 x} \]</td>
		</tr></table>
		<p>
			\[
				\begin{align}
					\sin A + \sin B &amp; = 2 \sin \left( \frac{A + B}{2} \right) \cos \left( \frac{A - B}{2} \right) \\
					\sin A - \sin B &amp; = 2 \cos \left( \frac{A + B}{2} \right) \sin \left( \frac{A - B}{2} \right) \\
					\cos A + \cos B &amp; = 2 \cos \left( \frac{A + B}{2} \right) \cos \left( \frac{A - B}{2} \right) \\
					\cos A - \cos B &amp; =-2 \sin \left( \frac{A + B}{2} \right) \sin \left( \frac{A - B}{2} \right) \\
					2 \sin A \sin B &amp; = \cos \left( {A - B} \right) - \cos \left( {A + B} \right) \\
					2 \cos A \cos B &amp; = \cos \left( {A - B} \right) + \cos \left( {A + B} \right) \\
					2 \sin A \cos B &amp; = \sin \left( {A - B} \right) + \sin \left( {A + B} \right)
				\end{align}
			\]
		</p>
	<h2 id='complex-identities'>Complex Identities</h2>
		<p>
			\[
				\begin{aligned}
					\cos{x} &amp; = \mathrm{Re}\{e^{ix}\} = \frac{e^{ix} + e^{-ix}}{2} \\
					\sin{x} &amp; = \mathrm{Im}\{e^{ix}\} = \frac{e^{ix} - e^{-ix}}{2i} = -i\left(\frac{e^{ix} - e^{-ix}}{2}\right) \\
				\end{aligned}
			\]
		</p>
</section>
<section>
	<h1 id='integral-identities'>Integral Identities</h1>
	<h2 id='orthogonality-conditions'>Orthogonality Conditions</h2>
		<p>
		From \(-L\) to \(L\):
		\[
			\begin{aligned}
				\int_{-L}^{L}{\sin(mx)\sin(nx) \ \dx{x}} &amp; = L\delta_{mn} \\
				\int_{-L}^{L}{\cos(mx)\cos(nx) \ \dx{x}} &amp; = L\delta_{mn} \\
				\int_{-L}^{L}{\sin(mx)\cos(nx) \ \dx{x}} &amp; = 0				
			\end{aligned}
		\]
		\[
			\delta_{mn} =
			\begin{cases}
				1 &amp; m = n, \\
				0 &amp; m \neq n
			\end{cases}
		\]
		</p>
		<p>
			From \(0\) to \(L\):
			\[
				\begin{aligned}
					\int_0^{L}{\sin(n\theta)\sin(m\theta) \ \dx{\theta}} \; &amp;=
						\begin{cases}
							\frac{1}{2}L &amp; \mathrm{if} \ n =	m \\
							0			&amp; \mathrm{if} \ n \neq m \\
						\end{cases}
					\\
					\int_0^{L}{\cos(n\theta)\cos(m\theta) \ \dx{\theta}} \; &amp;=
						\begin{cases}
							L			&amp; \mathrm{if} \ n =	m =	0 \\
							\frac{1}{2}L &amp; \mathrm{if} \ n =	m \neq 0 \\
							0			&amp; \mathrm{if} \ n \neq m		\\
						\end{cases}
				\end{aligned}
			\]
		</p>
</section>
<?php
	@include '../inc/footer.php';
?>