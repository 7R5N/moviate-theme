<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>


<footer class="footer">

	<p class="footer__copyright">
		© 19XX – <?php echo date('Y') ?> by Moviate GmbH
	</p>

	<nav class="footer__navigation">
		<@ snippet footer @>

			<@ if @{ :pagelistCount } @>
				<ul class="footer__items">

					<@ foreach in pagelist @>
						<@ if @{ checkboxShowInFooter } ~@>
							<li class="footer__item<@ if @{ :current } @> footer__item--current<@ end @>">
								<a class="footer__link" href="@{ url }">
									@{ title }
								</a>
								<@ if @{ :currentPath } @>
									<@ footer @>
								<@ end @>
							</li>
						<@ end @>
					<@ end @>
				</ul>
			<@ end @>

		<@ end @>

		<@ newPagelist {
			type: 'children'
		} @>

		<@ with '/' @>
			<@ footer @>
		<@ end @>

	</nav>
</footer>
