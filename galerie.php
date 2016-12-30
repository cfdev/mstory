<?php include(dirname(__FILE__) . '/header.php'); ?>

<section>
	<div class="container">
			<article role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

				<header>
					<h1>
						<?php $plxShow->staticTitle(); ?>
					</h1>
				</header>


				<?php $plxShow->staticContent(); ?>
				
				<script src="<?php $plxShow->template(); ?>/lightbox2.5/js/jquery-1.7.2.min.js"></script>
                <script src="<?php $plxShow->template(); ?>/lightbox2.5/js/lightbox.js"></script>
                <link href="<?php $plxShow->template(); ?>/lightbox2.5/css/lightbox.css" rel="stylesheet" />
                <style type='text/css'>
                    .gal {
                        /*margin-top:25px;
                        margin-left:75px;*/
						clear: both;
                    }
					.gal:after {
					content:'';
					display:block;
					clear: both;
					}
                    .pic{
                        float:left;
                        margin:5px 5px 5px 5px;
                        border:0px none transparent;
                        width:175px;
                        height:175px;
                    }
                    .pic:hover{
						/*border: 1px solid #96D656;*/
                    }
                    .pic a{
                        width:175px;
                        height:175px;
                        text-indent:-99999px;
                        display:block;}
                    .pic a, .pic a:visited {outline:none;}
                </style>
	        <?php 
	            $_get=plxUtils::getGets(); 
		    $id=explode('/',$_get); 
	            $directory = 'data/images/realisation/';	//where the gallery images are located .$id[1]
                    $allowed_types=array('jpg','jpeg','gif','png');	//allowed image types

                    $file_parts=array();
                    $ext='';
                    $title='';
                    $i=0;

                    //try to open the directory
                    $dir_handle = @opendir($directory) or die("There is an error with your image directory!".$directory);

                    echo '<div class="gal animated fadeInUp">';
                    while ($file = readdir($dir_handle))	//traverse through the files
                    {
	                    if($file=='.' || $file == '..') continue;	//skip links to the current and parent directories

	                    $file_parts = explode('.',$file);	//split the file name and put each part in an array
	                    $ext = strtolower(array_pop($file_parts));	//the last element is the extension
	                    $title_origin = implode('.',$file_parts);	//once the extension has been popped out, all that is left is the file name
	                    $title = htmlspecialchars($title_origin);	//make the filename html-safe to prevent potential security issues
	                    $nomargin='';
	                    if(in_array($ext,$allowed_types) and !in_array('tb',$file_parts))	//if the extension is an allowable type
	                    {
		                    if(($i+1)%4==0) $nomargin='nomargin';	//the last image on the row is assigned the CSS class "nomargin"
                            echo '
                    		<div class="pic '.$nomargin.'" style="background:url('.$directory.'/'.$title_origin.'.tb.'.$ext.') no-repeat 50% 50%;">
                    		<a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank" rel="lightbox[roadtrip]">'.$title.'</a>
                    		</div>';
		                    $i++;	//increment the image counter
	                    } 
                    }
                    echo '</div>';
                ?>				

			</article>
	</div>
</section>

<?php include(dirname(__FILE__) . '/footer.php'); ?>
