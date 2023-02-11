<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>


<main class="main">

	<section class="main__hero">
		@{ +hero }
	</section>

	<section class="main__title">
		<@ title.php @>
	</section>

	<section class="main__content">
		@{ +main }
	</section>

</main>
