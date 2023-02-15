<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>


<aside class="aside">
	<@ info.php @>

	<div class="box">
		<header class="box__header">
			<h4 class="box__title">
				Öffnungszeiten
			</h4>
		</header>
		<div class="box__content">
			<!-- dl class="description">
				<dt class="description__name">
					Montag
				</dt>
				<dd class="description__value">
					8 – 12   14 – 18
				</dd>
				<dt class="description__name">
					Dienstag
				</dt>
				<dd class="description__value">
					8 – 12   14 – 18
				</dd>
				<dt class="description__name">
					Mittwoch
				</dt>
				<dd class="description__value">
					8 – 12   14 – 18
				</dd>
				<dt class="description__name">
					Donnerstag
				</dt>
				<dd class="description__value">
					8 – 12
				</dd>
				<dt class="description__name">
					Freitag
				</dt>
				<dd class="description__value">
					8 – 12   14 – 18
				</dd>
				<dt class="description__name">
					Samstag
				</dt>
				<dd class="description__value">
					geschlossen
				</dd>
			</dl -->
			<!-- @ ../blocks/filelist/description.php @ -->
			@{ +hours }


			<@ newPagelist {
				type: false,
				context: 'teaser/offnungszeiten',
			} @>

		</div>
	</div>

	<div class="box">
		<header class="box__header">
			<h4 class="box__title">
				Kontakt
			</h4>
		</header>
		<div class="box__content">
			<dl class="description">
				<dt class="description__name">
					Adresse
				</dt>
				<dd class="description__value">
					Moviate<br>
					Mittelbergstraße 4<br>
					88400 Biberach
				</dd>
				<dt class="description__name">
					Telefon
				</dt>
				<dd class="description__value">
					<a href="tel:+497351441563">
						+49 (0) 7351 441563
					</a>
				</dd>
				<dt class="description__name">
					Telefax
				</dt>
				<dd class="description__value">
					<a href="fax:+497351441564">
						+49 (0) 7351 441564
					</a>
				</dd>
				<dt class="description__name">
					E-Mail
				</dt>
				<dd class="description__value">
					<a href="mailto:info@moviate.de">
						info@moviate.de
					</a>
				</dd>
			</dl>
		</div>
	</div>

</aside>
