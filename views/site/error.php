<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
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
			<h3><?= Html::encode($this->title) ?></h3>
		</div>
	</section><!-- /.Header -->
        
<div class="site-error">
        
    <div class="alert alert-danger">
        <h5>  <?= nl2br(Html::encode($message)) ?></h5>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>
    <a href="<?= Url::to(['site/index']);?>" class="button_error button-swap_error">Back to home<span>Back to home</span></a>
</div>
