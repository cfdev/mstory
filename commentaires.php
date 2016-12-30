<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

	<div id="comments">

		<h2>
			<i class="fa fa-comment fa-fw"></i> <?php echo $plxShow->artNbCom(); ?>
		</h2>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>" class="comment">
			<blockquote>
				<p class="info_comment">
					<a class="num-com badge" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>
					<?php $plxShow->comAuthor('link'); ?>
					<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?></time>
					:
				</p>
				<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
			</blockquote>
		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

		<div class="rss">
			<?php $plxShow->comFeed('rss',$plxShow->artId()); ?>
		</div>

	</div>

	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<div id="form">

		<h2>
			<i class="fa fa-pencil fa-fw"></i> <?php $plxShow->lang('WRITE_A_COMMENT') ?>
		</h2>

		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
				<p>
					<input id="id_name" name="name" type="text" placeholder="<?php $plxShow->lang('NAME') ?>" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
				</p>
				<p>
					<input id="id_mail" class="form-control" name="mail" type="text" placeholder="<?php $plxShow->lang('EMAIL') ?>" size="20" value="<?php $plxShow->comGet('mail',''); ?>" />
				</p>
				<p>
					<input id="id_site" name="site" type="text" placeholder="<?php $plxShow->lang('WEBSITE') ?>" "size="20" value="<?php $plxShow->comGet('site',''); ?>" />
				</p>
				<p>
					<textarea id="id_content" name="content" placeholder="<?php $plxShow->lang('COMMENT') ?>" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea>
				</p>
				<p class="com-alert">
					<?php $plxShow->comMessage(); ?>
				</p>
				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
				<p>
					<label for="id_rep"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></label>
					<?php $plxShow->capchaQ(); ?> :
					<input id="id_rep" name="rep" type="text" size="2" maxlength="1" />
				</p>
				<?php endif; ?>
				<p>
					<input type="submit" value="<?php $plxShow->lang('SEND') ?>" />
				</p>
			</fieldset>
		</form>

	</div>

	<?php else: ?>

		<p>
			<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
		</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
