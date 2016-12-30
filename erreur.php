<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div class="container">

			<article role="article">

				<h1>
				<?php $plxShow->lang('ERROR'); ?>
				</h1>

				<div class="alert orange">
					<ul class="fa-ul">
					  <li>
						<i class="fa fa-exclamation-triangle fa-lg fa-li"></i>
						<?php $plxShow->erreurMessage(); ?>
					  </li>
					</ul>
				 </div>

			</article>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
