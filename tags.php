<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div class="container">

			<p class="directory">
				<strong><?php $plxShow->tagName(); ?></strong>
			</p>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				</header>

				<section>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<p>
						<i class="fa fa-folder fa-fw"></i> <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<i class="fa fa-tag fa-fw"></i> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>

			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			<div class="rss">
				<?php $plxShow->tagFeed() ?>
			</div>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
