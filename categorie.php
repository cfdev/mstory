<?php include(dirname(__FILE__).'/header.php'); ?>

	<div class="container">
	<section>
			<p class="directory">
				<strong><?php $plxShow->catName(); ?></strong>
				<?php $plxShow->catDescription(' : #cat_description'); ?>
			</p>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
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
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</div>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>