<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>


<nav class="navigation">
	<@ snippet navigation @>

		<@ if @{ :pagelistCount } @>
			<ul class="navigation__items">

				<@ foreach in pagelist @>
					<@ if @{ checkboxShowInNavbar } ~@>
						<li class="navigation__item<@ if @{ :current } @> navigation__item--current<@ end @>">
							<a class="navigation__link" href="@{ url }">
								@{ title }
							</a>
							<@ if @{ :currentPath } @>
								<@ navigation @>
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
		<@ navigation @>
	<@ end @>

</nav>
