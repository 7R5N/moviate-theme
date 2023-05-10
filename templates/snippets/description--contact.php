<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>


<dl class="description">
	<dt class="description__name">
		Adresse
	</dt>
	<dd class="description__value">
		@{ :Firma }
		<br>
		@{ :Str-Nr }
		<br>
		@{ :Plz-Ort }
	</dd>
	<dt class="description__name">
		Telefon
	</dt>
	<dd class="description__value">
		<a href="tel:@{ :Telefon }">
			@{ :Telefon }
		</a>
	</dd>
	<dt class="description__name">
		Telefax
	</dt>
	<dd class="description__value">
		<a href="fax:@{ :Telefax }">
			@{ :Telefax }
		</a>
	</dd>
	<dt class="description__name">
		E-Mail
	</dt>
	<dd class="description__value">
		<a href="mailto:@{ :E-Mail }">
			@{ :E-Mail }
		</a>
	</dd>
</dl>
