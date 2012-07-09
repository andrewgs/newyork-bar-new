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
					<h2>Джазовые вечера</h2>
				</header>
				<section class="afisha-columns">
					<aside>
						<img src="<?=$baseurl;?>images/afisha_promo_1.jpg" alt="Джазовые вечера" /> 
					</aside>
					<div class="column">
						<p>
							Музкальные вечера в ресторане Нью-Йорк — это подборка лучших хитов в стиле джаз, блюз, фьюжн и 
							американской эстрады, вживую исполненные джазовым коллективом.  
						</p>
						<p>
							Хиты американской эстрады тридцатых годов станут лучшим сопровождением вечера как для дружной 
							компании, так и для влюблённой пары.
						</p>
					</div>
				</section>
			</article>
			<article class="cf">
				<header>
					<h2>Спортивные трансляции</h2>
				</header>
				<section class="afisha-columns">
					<div class="column text">
						<p>
							Трансляции лучших спортивных событий на огромном экране с помощью HD-технологии проецирования плюс 
							шесть плазменных панелей создают эффект присутствия на футбольном матче, теннисном корте или на 
							турнире по биллиарду.
						</p>
					</div>
				</section>
			</article>
			<article class="cf">
				<header>
					<h2>Живая музыка</h2>
				</header>
				<section class="afisha-columns">
					<div class="column text">
						<p>
							В выходные дни мы приглашаем провести приятный вечер и поужинать под звуки живой музыки. Теплая атмосфера 
							и живая музыка помогут отвлечься от суеты рабочих будней и шума большого города. Наши музыканты рады исполнить 
							для Вас музыкальные композиции как собственного сочинения, так и музыка известных исполнителей. 
						</p>
					</div>
				</section>
			</article>
			<article class="cf">
				<header>
					<h2>Кальянный бар</h2>
				</header>
				<section class="afisha-columns">
					<aside>
						<img src="<?=$baseurl;?>images/afisha_promo_2.jpg" alt="Джазовые вечера" /> 
					</aside>
					<div class="column">
						<p>
							У любителей отведать ароматного дыма есть великолепная возможность провести время в восточных традициях: 
							широкий выбор табаков и способов приготовления кальяна, богатая винная карта, ягоды и фрукты.
						</p>
						<p>
							Сказочная атмосфера, удобные диваны, традиционная восточная музыка и юные красавицы, исполняющие танец 
							живота помогут расслабиться и надолго забыть о тщете бытия.
						</p>
					</div>
				</section>
			</article>
		</div>
		<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<?=$this->load->view("users_interface/includes/scripts");?>
</body>

</html>