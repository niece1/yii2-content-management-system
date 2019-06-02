<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model frontend\models\Subscribe */


use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use app\assets\GaelAsset;
use app\widgets\Subscription\SubscriptionWidget;
use yii\widgets\Menu;

GaelAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    <!--Preloader-->
    <div id="gael_preloader" class="preloader">
		<div id="load">
			<div>G</div>
			<div>N</div>
			<div>I</div>
			<div>D</div>
			<div>A</div>
			<div>O</div>
			<div>L</div>
		</div>
	</div> <!--/.Preloader-->
    
    <!--Overlay menu-->
	<div class="overlay overlay-door">
		<button type="button" class="overlay-close">Close</button>
		<nav>
	<!--		<ul>
				<li><a href="index.html" class="active_page">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>-->
        <?= Menu::widget([
    
    'items' => [        
        ['label' => Yii::t('menu', 'Home'), 'url' => ['site/index']],
        ['label' => Yii::t('menu', 'About'), 'url' => ['site/about']],
        ['label' => Yii::t('menu', 'Albums'), 'url' => ['site/albums']],
        ['label' => Yii::t('menu', 'Blog'), 'url' => ['site/blog']],
        ['label' => Yii::t('menu', 'Contact'), 'url' => ['site/contact']]
    ],
    'activeCssClass' => 'active_page',
]);
?>
		</nav>
	</div> <!--/.Overlay menu-->

<?= $content ?>

<!--Footer-->
	<footer>
		<div class="footer_wrapper_upper">
			<div class="footer_about">
				<a href="<?= Url::to(['site/index']);?>" class="footer_logo">Gael</a>		
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis veniam unde tenetur ullam. Amet, reprehenderit ea nam voluptatibus quisquam harum!</p>
				<a href="<?= Url::to(['site/about']);?>"><span>Read more</span></a>
			</div>

			<div class="footer_contact">
				<h6>Contact me</h6>
				<p><i class="fab fa-viber"></i>+380 63 257 1046</p>
				<p><i class="far fa-envelope"></i>gael@gmail.com</p>
				<p><i class="fab fa-skype"></i>vladimir.zhonchuk</p>
				<a href="<?= Url::to(['site/contact']);?>"><span>Contact me</span></a>
			</div>

			<div class="footer_links">
				<h6>Useful links</h6>
				<ul>
					<li><a href="/"><span>Home</span></a></li>
					<li><a href="<?= Url::to(['site/about']);?>"><span>About</span></a></li>
					<li><a href="<?= Url::to(['site/albums']);?>"><span>Albums</span></a></li>
					<li><a href="<?= Url::to(['site/blog']);?>"><span>Blog</span></a></li>
					<li><a href="<?= Url::to(['site/contact']);?>"><span>Contact</span></a></li>
				</ul>
			</div>

			<div class="footer_twitter">
				<h6>Twitter Feed</h6>
				<p><i class="fab fa-twitter"></i>@gael</p>
				<div class="footer_slider">
					<div class="twitter_item">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo atque at soluta eaque deserunt, tempore, vero labore eos ea necessitatibus.</p>
						<p id="twitter_date">05.03.2019</p>
					</div>

					<div class="twitter_item">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo atque at soluta eaque deserunt, tempore, vero labore eos ea necessitatibus.</p>
						<p id="twitter_date">05.03.2019</p>
					</div>

					<div class="twitter_item">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo atque at soluta eaque deserunt, tempore, vero labore eos ea necessitatibus.</p>
						<p id="twitter_date">05.03.2019</p>
					</div>
				</div>

				<div class="footer_slider_arrows">
					<i id="twitter_left" class="fas fa-long-arrow-alt-left"></i>								
					<i id="twitter_right" class="fas fa-long-arrow-alt-right"></i>				
			</div>

			</div>
		</div>

		<div class="footer_wrapper_down">
			<div class="footer_copyright">
				
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
						<i class="fas fa-globe"></i>
                                                <?=Html::beginForm(['/site/language']) ?>
                                 <?=Html::dropDownList('language', Yii::$app->language, ['en-US' => 'eng', 'ru-RU' => 'rus']) ?>
                                 <?= Html::submitButton('Go<span>Go</span>', ['class' => 'button_language_footer button_language_footer-swap_language_footer']) ?>
                                 <?=Html::endForm() ?>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Choose language</div>
					</div>
				</div>
                            <p class="copy">	&#169; Copyright <?= date('Y')?> Gael. Powered by NoaSoft.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, repellendus.</p>
			</div>

			<div class="footer_newsletter">
				  <h6>Newsletter Subscribe</h6>
                          
                                
<?= SubscriptionWidget::widget([]) ?>

                             
				<p>Don't forget to folow me on:</p>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-pinterest"></i></a>
				<a href="#"><i class="fab fa-dribbble"></i></a>
			</div>
		</div>
	</footer><!--/.Footer-->
        
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
