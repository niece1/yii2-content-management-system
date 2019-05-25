<?php

/* @var $this yii\web\View */

namespace frontend\assets;

use yii\helpers\Html;
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

			<div class="portfolio_item item_load_more">
				<a href="album-single.html">
					<img src="img/IMG_6462.jpg" alt="board">
					<div>
						<div class="caption">Another Flight History</div>
					</div>
				</a>
			</div>

			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_7791.jpg" alt="board">
					<div>
						<div class="caption">Jewish place. Sevilla</div>
					</div>
				</a>
			</div>

			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_7886.jpg" alt="board">
					<div>
						<div class="caption">The Berlin Wall</div>
					</div>
				</a>
			</div>

			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_2017.jpg" alt="board">
					<div>
						<div class="caption">The Rabat Medina</div>
					</div>
				</a>
			</div>

			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_5254.jpg" alt="board">
					<div>
						<div class="caption">Grape harvest 2018</div>
					</div>
				</a>
			</div>

			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_5425.jpg" alt="board">
					<div>
						<div class="caption">Venice Close Up</div>
					</div>
				</a>
			</div>

			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_5725.jpg" alt="laptop">
					<div>
						<div class="caption">Grape harvest 2018</div>
					</div>
				</a>
			</div>

			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_5057.jpg" alt="board">
					<div>
						<div class="caption">Grape harvest 2018</div>
					</div>
				</a>
			</div>


			<div class="portfolio_item item_load_more">
				<a href="#">
					<img src="img/IMG_8537.jpg" alt="board">
					<div>
						<div class="caption">Mysterous Qobustan</div>
					</div>
				</a>
			</div>

		</div>

		<button type="submit" id="loadMore" class="button_loadmore button_loadmore-swap_loadmore">Load more<span>Load more</span></button>

	</section><!--/.Portfolio section-->

