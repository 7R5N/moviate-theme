<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>


<@ if not @{ checkboxHideTitle } ~@>
	<header class="main__header">
		<h1 class="main__title">
			@{ title }
		</h1>
		<div class="main__subtitle">
			<@ subtitle.php @>
		</div>
</header>
<@~ end @>
