
<header class="page__header">

	<div class="header">
		<div class="header__logo">

			<a href="/" class="header__link--home">
				<@~ with @{ imageLogo } ~@>
					<img
					src="<@ with @{ :file } { height: @{ logoHeight | def (40) } } @>@{ :fileResized }<@ end @>"
					srcset="<@ with @{ :file } { height: @{ logoHeight | def (40) | *2 } } @>@{ :fileResized } 2x<@ end @>"
					alt="@{ :basename }"
					>
				<@~ else ~@>
					@{ brand | def (@{ sitename }) }
				<@~ end ~@>
			</a>

		</div>
	</div>

	<@ elements/navigation.php @>

</header>
