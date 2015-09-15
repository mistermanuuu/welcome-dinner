<?php snippet( 'header' ) ?>

	<main class="main" role="main">

		<div class="text text__copy_bound">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>

		<?php snippet( 'cta' ) ?>

	</main>

<?php snippet( 'footer' ) ?>