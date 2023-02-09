<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<header class="header">

	<a href="/" class="header__link">
		<@~ with @{ imageLogo } ~@>
			<img class="header__logo"
				src="<@ with @{ :file } { height: @{ logoHeight | def (40) } } @>@{ :fileResized }<@ end @>"
				srcset="<@ with @{ :file } { height: @{ logoHeight | def (40) | *2 } } @>@{ :fileResized } 2x<@ end @>"
				alt="@{ :basename }"
			>
		<@~ else ~@>
			@{ brand | def (@{ sitename }) }
		<@~ end ~@>
	</a>

</header>
