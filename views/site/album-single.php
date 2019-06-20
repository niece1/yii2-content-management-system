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
				<img src="<?=$album_item->getImage01(); ?>" alt="board">
				<img src="<?=$album_item->getImage02(); ?>" alt="board">
                                <img src="<?=$album_item->getImage03(); ?>" alt="board">
                                <img src="<?=$album_item->getImage04(); ?>" alt="board">
                                <img src="<?=$album_item->getImage05(); ?>" alt="board">
                                <img src="<?=$album_item->getImage06(); ?>" alt="board">
                                <img src="<?=$album_item->getImage07(); ?>" alt="board">
                                <img src="<?=$album_item->getImage08(); ?>" alt="board">
                                <img src="<?=$album_item->getImage09(); ?>" alt="board">
                                <img src="<?=$album_item->getImage10(); ?>" alt="board">
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

