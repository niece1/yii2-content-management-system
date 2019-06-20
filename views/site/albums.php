<?php

/* @var $this yii\web\View */

namespace frontend\assets;

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\GaelAsset;

$this->title = 'Albums';
?>

<!--Header-->
	<section class="header" data-type="background" style="background-image: url(/markup/img/IMG_2056.jpg);">
		<div class="menu_page">
			<a href="<?= Url::to(['site/index']);?>">gael</a>			
			
			<div id="trigger-overlay" class="hamburger_wrapper">
				<div class="hamburger_menu"></div>	  
			</div>	  
		</div>
		<div class="parallax_text">
			<h3>Albums</h3>
		</div>
	</section><!-- /.Header -->

	<!--Portfolio section-->

	<section class="portfolio">
		
		<h6 id="albums">Choose an album</h6>
		<h5>I chose the very best of my shots.</h5>
		
		<div class="portfolio_container aware_direction">
                         <?php foreach($shots as $album):?>
			<div class="portfolio_item item_load_more">
				<a href="<?= Url::to(['site/album_view', 'id'=>$album->id]); ?>">
					<img src="<?= $album->getImage();?>" alt="board">
					<div>
						<div class="caption"><?= $album->title; ?></div>
					</div>
				</a>
			</div>
                    <?php endforeach; ?>
		</div>

		<button type="submit" id="loadMore" class="button_loadmore button_loadmore-swap_loadmore">Load more<span>Load more</span></button>

	</section><!--/.Portfolio section-->

