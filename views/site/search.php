<?php

/* @var $this yii\web\View */

namespace frontend\assets;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\GaelAsset;
use yii\widgets\LinkPager;
use app\models\Article;

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
                    <?php foreach($results as $article):?> 
                   
			<div class="blog_item">
				<div class="thumbnail">
					<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>">
						<img src="<?= $article->getImage(); ?>" alt="Blogpost">
						<div class="thumbnail_overlay">

						</div>
					</a>
				</div>

				<div class="blogpost_content">
					<div class="blog_date">
						<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>">
							<span id="date"><?= $article->dayDate(); ?></span>
							<span><?= $article->monthDate(); ?></span>
							<span><?= $article->yearDate(); ?></span>
						</a>
					</div>
					<div class="blogpost_info">
						<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>"><h5><?= $article->title; ?></h5></a>
						<div class="blog_line"></div>
						<p>
							By <a href="<?= Url::to(['site/author','id'=>$article->author->id]); ?>"><?= $article->author->name; ?></a><i class="fas fa-circle"></i>In <a href="<?= Url::to(['site/category','id'=>$article->category->id]); ?>"><?= $article->category->title; ?></a>
						</p>
						<p><?= $article->description; ?></p>
						<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>" class="button_blog button_blog-swap_blog">Read more<span>Read more</span></a>
					</div>
				</div>
			</div>
<?php endforeach; ?>
                    <?php endif; ?>
		</div>
               
	</section><!--/.Blog section-->
        
        <!--Pagination-->
                <?php
                echo LinkPager::widget([
    'pagination' => $pagination,
]);
                ?><!--/.Pagination-->