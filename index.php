<#
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup.
#>

<@ elements/html-head.php @>

	<article class="article">

		<section class="article__header">
			<@ elements/header.php @>
			<@ elements/navigation.php @>
		</section>

		<section class="article__container">
			<@ elements/main.php @>
			<@ elements/aside.php @>
		</section>

		<section class="article__footer">
			<@ elements/footer.php @>
		</section>

	</article>

<@ elements/html-foot.php @>
