<?php

/* @var $this yii\web\View */

namespace frontend\assets;

use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\GaelAsset;
use Yii;
use yii\widgets\LinkPager;

$this->title = 'Search results';
?>

<!--Header-->
	<section class="header" data-type="background" style="background-image: url(/markup/img/IMG_8562.jpg);">
		<div class="menu_page">
			<a href="<?= Url::to(['site/index']);?>">gael</a>			
			
			<div id="trigger-overlay" class="hamburger_wrapper">
				<div class="hamburger_menu"></div>	  
			</div>	  
		</div>
		<div class="parallax_text">
			<h3>Search results</h3>
		</div>
	</section><!-- /.Header -->

		<!--Blog section-->

	<section class="blog">
		<h6>Latest post</h6>
		<h5>News and Events</h5>
		<div class="blog_wrapper">
                  <?php if ($results): ?>
                    <?php foreach($results as $item):?>
			 <?php echo $item['title']; ?>
<?php endforeach; ?>
                    <?php endif; ?>
		</div>
               
	</section><!--/.Blog section-->

 