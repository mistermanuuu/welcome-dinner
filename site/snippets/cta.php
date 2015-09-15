<div class="teaser cf">
	<?php $i=1; foreach ( page( 'home' )->children()->visible()->limit( 2 ) as $cta ): ?>
		<div class="teaser__cta_alignment <?php if ($i==2) echo 'cf';  $i++; ?>">
			<?php echo $cta->text()->kirbytext() ?>
		</div>
	<?php endforeach ?>
</div>
