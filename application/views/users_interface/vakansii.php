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
			<article class="first cf">
			<header>
				<h2>Вакансии</h2>
			</header>
			<section class="afisha-columns">
				<aside>
					<img src="images/vakansii.jpg" alt="Джазовые вечера" /> 
				</aside>
				<div class="column">
					<p>
						В ресторан-бар «Нью-Йорк» требуются современные юноши и девушки приятной внешности в возрасте до 30 лет. 
						Опыт работы приветствуется, но необязателен. 
						Нам важны ваше умение и желание общаться с людьми, работать и строить успешную карьеру в молодом коллективе.
					</p>
					<p>
						По всем вопросам, связанным с трудоустройством, обращаться в отдел персонала – тел. 8 (928) 229-99-42 (Татьяна). 
						Если сочтете нужным, можете отправить ваше резюме по электронной почте <?=safe_mailto('kitchen.command@gmail.com','kitchen.command@gmail.com');?>
					</p>
				</div>
			</section>
			<section class="vac-columns">
				<div class="column">
					<h2>Официанты</h2>
					<p>
						Желательно с опытом работы, старше 18 лет, без вредных привычек, 
						коммуникабельные, аккуратные, ответственные, обучаемые. Наличие санитарной книжки обязательно. 
						Заработная плата – по результатам собеседования.
					</p>
				</div>
				<div class="column">
					<h2>Повара</h2
					<p>
						Требуются повара со знанием русской, американской и европейской кухонь. 
						Требования - умение работать в коллективе, чистоплотность и аккуратность, наличие санитарной книжки. 
						Заработная плата – высокая.
					</p>
				</div>
				<div class="column">
					<h2>Бармены</h2>
					<p>
						Ресторан «Нью-Йорк» ищет добросовестных работников для консультирования клиентов по продукции,  
						приготовления фирменных коктейлей и других напитков. Расчет покупателя, ведение кассы. 
						Заработная плата – по результатам собеседования.
					</p>
				</div>
			</section>
		</article>
		</div>
		<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<div class="bottom-shadow"></div>
	<?=$this->load->view("users_interface/includes/scripts");?>
</body>

</html>