<?php include(dirname(__FILE__) . '/header.php'); ?>

	<div class="container">
	<section>
			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle(''); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				</header>

				<section>
					<?php
					$format='<img class="art_thumbnail float-center" src="#img_url" alt="#img_alt" title="#img_title" />';
					$plxShow->artThumbnail($format);
					$plxShow->artContent();
					 ?>
				</section>

				<footer>
					<p>
						<i class="fa fa-folder fa-fw"></i> <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<i class="fa fa-tag fa-fw"></i> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

				<!-- share button !-->
				<div class="text-center">
				<div id="lessbuttons_holder"></div><script async src="https://lessbuttons.com/script.js?facebook=1&twitter=1&googleplus=1&linkedin=1&reddit=1&position=inline"></script>
				</div>

			</article>

			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

	</section>

<?php include(dirname(__FILE__) . '/footer.php'); ?>
