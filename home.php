<?php include(dirname(__FILE__).'/header.php'); ?>

	<!-- static content -->
	<div id="home_content">
		<div class="container">
			<p><?php $plxShow->staticInclude('1') ?></p>
		</div>
	</div>

	<div class="container">
	<!-- Articles -->
	<div class="grid">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<div class="col sml-12 med-2 lrg-2 meta">
					<p>
						<i class="fa fa-calendar-o"></i> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
					</p>
					<p>
						<i class="fa fa-pencil"></i> <?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
					</p>
					<p>
						<i class="fa fa-comments"></i> <?php $plxShow->artNbCom(); ?>
					</p>
					<p>
						<i class="fa fa-folder fa-fw"></i> <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?>
					</p>
					<p>
						<i class="fa fa-tag fa-fw"></i> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
			</div>

			<article role="article" class="col sml-12 med-10 lrg-10" id="post-<?php echo $plxShow->artId(); ?>">

				<h1><?php $plxShow->artTitle('link'); ?></h1>
				<?php
				$format='<img class="art_thumbnail float-center" src="#img_url" alt="#img_alt" title="#img_title" />';
				$plxShow->artThumbnail($format);
				$plxShow->artChapo();
				?>

			</article>

			<?php endwhile; ?>

	</div>

	<div id="pagination">
		<?php $plxShow->pagination(); ?>
	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
