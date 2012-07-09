<!DOCTYPE html>
<!-- /ht Paul Irish - http://front.ie/j5OMXi -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view("users_interface/includes/head");?>

<body>
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
						В ресторан-бар Нью-Йорк требуются современные юноши и девушки приятной внешности возраста до 30 лет.
						Опыт работы необязателен.
						Нам важно ваше умение и желание общаться с людьми, работать и строить успешную карьеру в молодом коллективе.
					</p>
					<p>
						По всем вопросам связанным с трудоустройством обращайтесь в отдел персонала &ndash; 8 (928) 607-47-77 (Николай)
						или отправьте ваше резюме по почте <?=safe_mailto('personal@newyork-bar.ru','personal@newyork-bar.ru');?>
					</p>
				</div>
			</section>
			<section class="vac-columns">
				<div class="column">
					<h2>Официанты</h2>
					<p>Желательно с опытом работы, старше 18 лет.  Коммуникабельность, аккуратность, ответственность, обучаемость, без вредных привычек, 
						наличие санитарной книжки.</p>
				</div>
				<div class="column">
					<h2>Повара</h2
					<p>	Требуются повара со знанием русской, американской и европейской кухонь. Умение работать в коллективе. Чистоплотность и аккуратность. 
						Наличие санитарной книжки.</p>
				</div>
				<div class="column">
					<h2>Посудомойщики</h2>
					<p>Ищем работников, готовых содержать в чистоте зал ресторана и посуду.</p>
				</div>
			</section>
		</article>
		</div>
		<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<?=$this->load->view("users_interface/includes/scripts");?>
</body>

</html>