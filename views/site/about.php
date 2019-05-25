<?php

/* @var $this yii\web\View */

namespace frontend\assets;

use yii\helpers\Html;
use app\assets\GaelAsset;
use yii\helpers\Url;
$this->title = 'About';
?>


<!--Header-->
	<section class="header" style="background-image: url(/markup/img/IMG_6254.jpg);">
		<div class="menu_page">
			<a href="<?= Url::to(['site/index']);?>">gael</a>			
			
			<div id="trigger-overlay" class="hamburger_wrapper">
				<div class="hamburger_menu"></div>	  
			</div>	  
		</div>
		<div class="parallax_text">
			<h3>About Me</h3>
		</div>
	</section><!-- /.Header -->

	<!--Contact section-->
	<section class="about_me">
		<div class="about_me_wrapper">
			<div class="about_image">
				<img src="/markup/img/me.jpg" alt="Me">
			</div>
			<div class="about_info">
				<h3>How did I start</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In veritatis ducimus assumenda est, vero debitis a rem obcaecati! Fugiat reprehenderit aliquam et pariatur, hic optio accusamus iure nihil soluta unde nostrum incidunt mollitia, illo recusandae quaerat consectetur, a veniam? Quasi itaque dolore, molestiae officiis recusandae.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nihil quasi facere nesciunt cumque alias, quas dolore, deleniti maiores possimus ipsum praesentium veritatis ut, dolores at. Hic deserunt vel sunt saepe expedita, molestiae quos excepturi nemo dolor non pariatur dignissimos? Soluta debitis voluptas a rem numquam vero? Suscipit id sed fugiat illum dicta explicabo corporis unde quis voluptas, a est harum totam nesciunt tempora libero autem similique alias cupiditate. Neque fugit quis, pariatur placeat ipsa facere similique saepe nobis perferendis sit dicta, in rerum suscipit. In deleniti ratione, quasi ut, rerum porro repudiandae tempore numquam minima, distinctio enim iusto odio?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel obcaecati ipsam dolore, blanditiis laudantium mollitia eum assumenda repellat deserunt id dolor placeat totam ad temporibus reprehenderit alias qui! Quibusdam, tempora!</p>
				<p>But, I wanted more…</p>
			</div>
		</div>
	</section><!--/.Contact section-->

	<!--Skills section-->
	<section class="skills">
		<div class="skills_overlay">
			<div class="skills_wrapper">
			
				<div class="skills_item">
					<img src="/markup/img/coffee-break.png" alt="Lifestyle">
					<h6>Lifestyle</h6>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			
				<div class="skills_item">
					<img src="/markup/img/honeymoon.png" alt="Lifestyle">
					<h6>Travels</h6>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			
				<div class="skills_item">
					<img src="/markup/img/office-worker.png" alt="Lifestyle">
					<h6>Portrait</h6>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			
				<div class="skills_item">
					<img src="/markup/img/analysing.png" alt="Lifestyle">
					<h6>Reportage</h6>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			
			</div>
		</div>
	</section> <!--/.Skills section-->

	<!--Accordeon section-->

	<section class="accordeon">
		<h6>faq</h6>
		<h3>Answers on most popular questions about me</h3>
		<div class="accordeon_wrapper">

			<div class="accordeon_side">
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
				</div>
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quia expedita maiores repellat voluptatem mollitia nisi! Quia pariatur eaque iusto molestias doloribus provident illo. Fuga laborum ipsa hic sed quibusdam.
					</p>
				</div>
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
				</div>
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
				</div>
			</div>

			<div class="accordeon_side">
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
				</div>
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quia expedita maiores repellat voluptatem mollitia nisi! Quia pariatur eaque iusto molestias doloribus provident illo. Fuga laborum ipsa hic sed quibusdam.
					</p>
				</div>
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
				</div>
				<h6 class="accordeon_title">Title</h6>
				<div class="accordeon_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, ullam illum obcaecati cumque, quia incidunt eius ipsam doloribus quisquam eveniet, blanditiis ratione rem est. Quo voluptatibus obcaecati, et esse!</p>
				</div>
			</div>

		</div>
	</section><!--/.Accordeon section-->
