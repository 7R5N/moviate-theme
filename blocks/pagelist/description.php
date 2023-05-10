<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>


<dl class="description">
	<@ if @>
		
		<@ foreach in pagelist ~@>
			<dt class="description__name">
				@{ name }
			</dt>
			<dd class="description__value">
				@{ value }
			</dd>		
		<@~ end @>

	<@ else @>

	<@ endif @>
</dl>
