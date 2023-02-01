
<section class="page__header">

	<header class="header">

		<a href="/" class="header__link">
			<@~ with @{ imageLogo } ~@>
				<img class="header__logo"
					src="<@ with @{ :file } { height: @{ logoHeight | def (40) } } @>@{ :fileResized }<@ end @>"
					srcset="<@ with @{ :file } { height: @{ logoHeight | def (40) | *2 } } @>@{ :fileResized } 2x<@ end @>"
					alt="@{ :basename }"
				>xyxyxyxy
			<@~ else ~@>
				@{ brand | def (@{ sitename }) }
			<@~ end ~@>
		</a>

	</header>

	<@ navigation.php @>

</section>
