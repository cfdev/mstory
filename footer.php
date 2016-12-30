<?php if (!defined('PLX_ROOT')) exit; ?>

	<!-- end container -->
	</div>
	
	<footer role="contentinfo">
		<div class="container">
		<div class="grid">
		
			<!-- derniers commentaires -->
			<div class="col sml-12 med-6 lrg-4">
				<h3>
					<?php $plxShow->lang('LATEST_COMMENTS'); ?>
				</h3>

				<ul>
					<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
				</ul>
			</div>
			
			<!-- Tag  -->
			<div class="col sml-12 med-6 lrg-4">
				<h3>
					<?php $plxShow->lang('TAGS'); ?>
				</h3>

				<ul class="menu">
					<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
				</ul>
			
			</div>
			
			<!-- categories -->		
			<div class="col sml-12 med-6 lrg-4">
				<h3>
					<?php $plxShow->lang('CATEGORIES'); ?>
				</h3>
				<ul>
					<?php $plxShow->catList('','<li class="cat" id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> <span class="badge">#art_nb</span></li>'); ?>
				</ul>
			</div>
		
		</div>
		</div>
		
		<div class="info">		
		<div class="container">
		<div class="grid">
			<!-- stay tuned  -->
			<div class="col sml-12 med-6 lrg-6">
				<ul class="gallery sml-6 med-2 lrg-2 text-center">
					<li>
						<a href="#"><i class="fa fa-twitter fa-fw fa-2x"> </i><br>Twitter</a>
					</li>                                               
					<li>
						<a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i><br>Facebook</a>
					</li>                       
					<li>
						<a href="#"><i class="fa fa-google-plus fa-fw fa-2x"></i><br>Google+</a>
					</li>				
					<li>
						<a href="#"><i class="fa fa-rss fa-fw fa-2x"></i><br>Rss</a>
					</li>
				</ul>
			</div>
			<!-- Admin  -->
			<div class="col sml-12 med-6 lrg-6">
				<p class="text-right">
					<?php $plxShow->mainTitle('link'); ?> © 2016 - <?php $plxShow->subTitle(); ?> -  		
					<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
					<br/>
					<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> - 
					<small><a href="http://cfdev.fr" class="cfdev" title="mstory template by cfdev under GPLV3"> </a></small>
					<?php $plxShow->httpEncoding() ?>
				</p>
			</div>	
		</div>		
		</div>	
		</div>
		
	</footer>

</body>

</html>
