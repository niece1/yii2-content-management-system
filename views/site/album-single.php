<?php

/* @var $this yii\web\View */

namespace frontend\assets;

use Yii;
use yii\helpers\Url;

$this->title = Yii::t('blog', $album_item->title);
?>
<!--Header-->
	<section class="header" data-type="background" style="background-image: url(/markup/img/IMG_5521.jpg);">
		<div class="menu_page">
			<a href="<?= Url::to(['site/index']);?>">gael</a>			
			
			<div id="trigger-overlay" class="hamburger_wrapper">
				<div class="hamburger_menu"></div>	  
			</div>	  
		</div>
		<div class="parallax_text">
			<h3><?php echo Yii::t('blog', $album_item->title); ?></h3>
		</div>
	</section><!-- /.Header -->

	<!--Portfolio section-->

	<section class="album">
		
		<h6 id="albums">Choose an album</h6>
		<h5>I chose the very best of my shots.</h5>
		
		<div id="imageGallery" class="album_container">

			<div class="album_items">			
				<?php if($album_item->image_01): ?><img src="<?=$album_item->getImage01(); ?>" alt="board"> <?php endif;?>
				<?php if($album_item->image_02): ?><img src="<?=$album_item->getImage02(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_03): ?><img src="<?=$album_item->getImage03(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_04): ?><img src="<?=$album_item->getImage04(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_05): ?><img src="<?=$album_item->getImage05(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_06): ?><img src="<?=$album_item->getImage06(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_07): ?><img src="<?=$album_item->getImage07(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_08): ?><img src="<?=$album_item->getImage08(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_09): ?><img src="<?=$album_item->getImage09(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_10): ?><img src="<?=$album_item->getImage10(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_11): ?><img src="<?=$album_item->getImage11(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_12): ?><img src="<?=$album_item->getImage12(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_13): ?><img src="<?=$album_item->getImage13(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_14): ?><img src="<?=$album_item->getImage14(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_15): ?><img src="<?=$album_item->getImage15(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_16): ?><img src="<?=$album_item->getImage16(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_17): ?><img src="<?=$album_item->getImage17(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_18): ?><img src="<?=$album_item->getImage18(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_19): ?><img src="<?=$album_item->getImage19(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_20): ?><img src="<?=$album_item->getImage20(); ?>" alt="board"> <?php endif;?>
                                <?php if($album_item->image_21): ?><img src="<?=$album_item->getImage21(); ?>" alt="board"> <?php endif;?>
			</div>

		</section><!--/.Portfolio section-->

		<div id="modal">



			<div id="imgCounter">3 of 5</div>
			<div id="imageWrapper">
				<img id="myImg" alt="Main Image">  
			</div>
			<div class="modal_navigation">
				<button id="larr"><i class="fas fa-chevron-left"></i></button>
				<span id="close"><i class="fas fa-times"></i></span>
				<button id="rarr"><i class="fas fa-chevron-right"></i></button>
			</div>
		</div>

