<!DOCTYPE html>
<!-- /ht Paul Irish - http://front.ie/j5OMXi -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view("users_interface/includes/head");?>

<body>
	<div class="top-shadow"> </div>
	<div id="container" class="cf">
		<?=$this->load->view("users_interface/includes/header");?>
		<div id="main" role="main">
			<?=$this->load->view("users_interface/includes/navigation");?>
		<article class="menu cf">
			<aside class="side-menu">
				<ul class="menu-categories cf">
				<?php for($i=0;$i<count($fcategory);$i++):?>
					<?php if($fcategory[$i]['uri'] == $this->uri->segment(2)):?>
						<li class="active"><?=anchor('menu/'.$fcategory[$i]['uri'],$fcategory[$i]['title']);?></li>
					<?php else:?>
						<li><?=anchor('menu/'.$fcategory[$i]['uri'],$fcategory[$i]['title']);?></li>
					<?php endif;?>
				<?php endfor;?>
				</ul> 
				<div class="promo-block">
					<h2>Банкетное меню</h2>
					<img src="<?=$baseurl;?>images/menu_promo_1.jpg" alt="Услуги по организации банкетов" />
					<p class="image-caption">
						Мы примем участие в проведении вашей свадьбы, дня рождения, юбилея и корпоротива.
						Все мероприятия в нашем банкетном зале проводятся в любое время, удобное для 
						Заказчика. Сервисное банкетное обслуживание (официанты, бармены) зависит от 
						длительности мероприятия. Условия по спиртным напиткам обсуждаются индивидуально.
					</p>
				</div>
				<div class="promo-block">
					<h2>Бизнес-ланчи</h2>
					<img src="<?=$baseurl;?>images/menu_promo_2.jpg" alt="Бизнес-ланчи" />
					<p class="image-caption">
						Ресторан-бар «Нью-Йорк» специализируется на быстром обслуживании офисов в обеденные
						часы и предлагает разнообразные бизнес-ланчи по доступным ценам. Комплексные
						бизнес-обеды, приготовленные нашими поварами, отличаются большим разнообразием
						первых и вторых блюд, салатами и десертами.
					</p>
				</div>
			</aside>
			<section class="menu-list">
				<header>
					<h2><?=$ctgtitle;?></h2>
				</header>
				<div class="menu-item caption cf">
					<div class="title">наименование</div>
					<div class="price">цена</div>
				</div>
			<?php for($i=0;$i<count($foods);$i++):?>
				<div class="menu-item cf">
					<div class="title"><?=$foods[$i]['title'];?></div>
				<?php if(!empty($foods[$i]['composition'])):?>
					<div class="receipt"><?=$foods[$i]['composition'];?><br/><span class="weight"><?=$foods[$i]['weight'];?>&mdash;</span></div>
				<?php else:?>
					<div class="receipt"><br/> <span class="weight"><?=$foods[$i]['weight'];?>&mdash;</span> <br/>&nbsp;</div>
				<?php endif;?>
					<div class="price"><?=$foods[$i]['price'];?> руб.</div>
				</div>
			<?php endfor;?>
			</section>
		</article>
	</div>
	<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<div class="bottom-shadow"></div>
	<?=$this->load->view("users_interface/includes/scripts");?>
</body>
</html>