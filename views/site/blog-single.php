<?php

/* @var $this yii\web\View */

namespace frontend\assets;

use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\GaelAsset;
use Yii;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = Yii::t('blog', $article->title);
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
			<h3><?php echo Yii::t('blog', $article->title); ?></h3>
		</div>
	</section><!-- /.Header -->
        
        <!--Blog single section-->
	<section class="blog_single">
		<div class="blog_single_wrapper">
			<div class="single_content">
				<div class="blog_item">
					<div class="thumbnail">

						<img src="<?=$article->getImage(); ?>" alt="Blogpost">

					</div>

					<div class="blogpost_content">
						<div class="blog_date">

							<div class="date_wrapper">
								<span id="date"><?= $article->dayDate(); ?></span>
								<span><?= $article->monthDate(); ?></span>
								<span><?= $article->yearDate(); ?></span>
							</div>

						</div>
						<div class="blogpost_info">
							<h5><?=$article->title; ?></h5>
							<div class="blog_line"></div>
							<p>
								By <a href="<?= Url::to(['site/author','id'=>$article->author->id]); ?>"><?= $article->author->name; ?></a><i class="fas fa-circle"></i>In <a href="<?= Url::to(['site/category','id'=>$article->category->id]); ?>"><?= $article->category->title; ?></a>
							</p>

						</div>

					</div>
					<p><?=$article->content; ?></p>
				</div>
                            
                            <!--Comments -->
                            
        <div class="comments">
            <?php if(!empty($comments)):?>
                            <?php foreach($comments as $comment):?>
            <div class="comments_text">
                <div class="comments_author">
                    <img src="<?= $comment->user->image; ?>" width="45" height="45" alt="Avatar">
                    <p><?= $comment->user->name; ?></p>                                     
                </div>
                <small><?= $comment->getDate(); ?></small>
                <p class="comment_area"><?= $comment->text; ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo atque at soluta eaque deserunt, tempore, vero labore eos ea necessitatibus.</p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            
            <?php if(!Yii::$app->user->isGuest):?>
                <h5>Leave a reply</h5>
                 
                <?php $form = ActiveForm::begin([    
                    'action'=>['site/comment', 'id'=>$article->id],
       'options' => ['class' => 'comment_form'],
     
  
    ]); ?>

       
                
                <?= $form->field($commentForm, 'comment', [
                    'template' => "{input}<span class=\"highlight\"></span><span class=\"bar\"></span>{label}{error}",
'options'=>['id'=>'comment','class'=>'group']])->textInput(['required' => 'required']) ?>
      
                <?= Html::submitButton('Post comment<span>Post comment</span>', ['class' => 'button_comment_form button_comment_form-swap_comment_form']) ?>
            

    <?php ActiveForm::end(); ?>
          <!--      <div class="comment_form">
                    <div class="group" id="comment">
					<input type="text" required="required">
                      <span class="highlight"></span><span class="bar"></span>
                      <label>Comment</label>
				</div>
                    <button type="submit" class="button_comment_form button_comment_form-swap_comment_form">Post comment<span>Post comment</span></button>
                </div>-->
            <?php endif;?>
        </div><!-- /.Comments -->
      
			</div>

			<div class="sidebar">
				<div class="search_widget">
					<form action="#" class="input-search" data-text="">
						<input type="text" id="search" placeholder="Search">
						<button type="submit" class="button_sidebar button_sidebar-swap_sidebar"><i class="fas fa-search"></i><span><i class="fas fa-search"></i></span></button>
					</form>
				</div>

				<div class="popular-posts_widget">
					<h5>Popular Posts</h5>
					<ul class="popular">
                                             <?php foreach($popular as $article):?>
						<li>						
								<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>">
									<img src="<?= $article->getImage(); ?>" alt="Post image">
								</a>
							
							<div class="post_description">
								<p>
									<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>"><?= $article->title; ?></a>
								</p>
								<small class="post_date"><?= $article->getDate(); ?></small>
							</div>
						</li>
                                                <?php endforeach; ?>
					</ul>
				</div>

				<div class="categories_widget">
					<h5>Categories</h5>
					<ul>
                                             <?php foreach($categories as $category):?>
						<li><a href="<?= Url::to(['site/category','id'=>$category->id]); ?>"><?= $category->title; ?></a>(<?= $category->getArticlesCount(); ?>)</li>
						<?php endforeach; ?>
					</ul>
				</div>
                            
                             <div class="ads">
					<h5>Ads</h5>
					<div class="ads_holder">
						<a href="#">
							<img src="/markup/img/IMG_0805.jpg" alt="Ads">
						</a>
					</div>
				</div>

				<div class="tags_widget">
					<h5>Tag Cloud</h5>
					<div class="tag_cloud">
                                             <?php foreach($tags as $tag):?>
						<a href="<?= Url::to(['site/tag','id'=>$tag->id]); ?>"><?= $tag->title; ?></a>
						<?php endforeach; ?>
					</div>
				</div>
                            
			</div>
		</div>
	</section><!-- /.Blog single section -->      