<?php include(dirname(__FILE__) . '/header.php'); ?>

<section>

	<div class="container">

			<article role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

				<header>
					<h1 class= "title_icon">
						<?php $plxShow->staticTitle(); ?>
					</h1>
				</header>

				<section>
					<?php $plxShow->staticContent(); ?>
				</section>

			</article>

	</div>

</section>

<?php include(dirname(__FILE__) . '/footer.php'); ?>
