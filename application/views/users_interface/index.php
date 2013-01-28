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
			
			<div id="carousel" class="cf" style="margin-bottom: 0;">
				<div class="photo-wrapper clear">
					<!--
					<a class="promo-banner" href="<?=$baseurl;?>afisha">
						<img src="<?=$baseurl;?>images/nyc_country.jpg" alt="Вечеринка в стиле Country" alt="image" />
					</a>
					<a class="promo-banner" href="<?=$baseurl;?>afisha">
						<img src="<?=$baseurl;?>images/nyc_odessa.jpg" alt="Вечеринка Одесса - Нью-Йорк" alt="image" />
					</a>
					-->
					<a class="promo-banner" href="<?=$baseurl;?>afisha">
						<img src="<?=$baseurl;?>images/avakova.jpg" alt="Выступление группы Music for the soul" />
					</a>
					<a class="promo-banner" href="<?=$baseurl;?>menu/kalyan">
						<img src="<?=$baseurl;?>images/kalyan.jpg" alt="Обновленное кальянное меню" />
					</a>
					<a class="promo-banner" href="<?=$baseurl;?>afisha">
						<img src="<?=$baseurl;?>images/disko80s.jpg" alt="Дискотека 80-х" />
					</a>
					<!--
					<iframe src="http://player.vimeo.com/video/43527522?title=0&amp;byline=0&amp;autoplay=0" width="896" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<div class="event-title">
						<p>15 декабря @ 20:00</p>
						<p>Выступление группы The Hobots</p>
					</div>
					-->
					
					<!--
					<div id="photo-thumbs"></div>
					<div id="photo-slider">
						<img src="<?=$baseurl;?>images/slide_1.jpg" alt="вид" alt="image" />
						<img src="<?=$baseurl;?>images/slide_2.jpg" alt="вид" alt="image" />
						<img src="<?=$baseurl;?>images/slide_4.jpg" alt="вид" alt="image" />
						<img src="<?=$baseurl;?>images/slide_5.jpg" alt="вид" alt="image" />
						<img src="<?=$baseurl;?>images/slide_6.jpg" alt="вид" alt="image" />
					</div>
					-->
				</div>
			</div>
			<article class="cf">
				<header>
					<h2>О ресторане</h2>
				</header>
				<section class="paper-columns">
					<div class="column">
						<p>
							Как, вы еще не были в «Нью-Йорке»? Тогда вам срочно надо исправлять реноме знатока 
							самых знаковых мест Ростова-на-Дону. А можно ничего не исправлять, а просто приехать 
							в наш бар-ресторан вкусно поесть и отлично провести время.
						</p>
						<p>
							По атмосфере гостеприимства и радушия, по чистоте и уюту Вы сразу почувствуете, что 
							здесь Вас ждали, Вам рады, как самому дорогому гостю. Вас приятно удивит соотношение 
							цены и качества в нашем заведении, а вкус фирменных блюд не оставит равнодушными даже 
							изысканных гурманов. Самые лучшие впечатления на наших гостей производит работа обслуживающего 
							персонала, все их заказы и просьбы выполняются быстро, четко и деликатно. Само название 
							ресторана - «Нью-Йорк» ко многому обязывает, и мы стараемся ему соответствовать.
						</p>
						<p>
							Как город Нью-Йорк стал плавильным котлом, в котором перемешаны все народы Земли, так и наше заведение  
						</p>
					</div>
					<div class="column">
						<p>
							привержено стилю фьюжн и вобрало в себя культуру и традиции многих национальных
							кухонь – армянской, грузинской, европейской, средиземноморской и, конечно же, русской. К 
							широкому выбору блюд из меню этих кухонь, наш шеф-повар всегда предлагает что-то свое – 
							особенное. Готов он выполнить и Ваши пожелания, будь то нечто изысканное или просто любимое Вами. 
							Прекрасная винная карта, а так же коктейли на любой вкус дополняют красоту и богатство стола.
						</p>
						<p>
							Особой популярностью наш ресторан пользуется в период больших спортивных состязаний, так как 
							болельщикам у нас комфортно и они зажигают по полной.
						</p>
						<p>
							Ваш досуг украсит и разнообразит живая музыка и неповторимая атмосфера заведения. В баре Вам 
							предложат пиво, коктейли и вина, чай и кофе, прохладительные напитки.
						</p>
					</div>
				</section>
				<aside>
					<img src="<?=$baseurl;?>images/main_promo_1.jpg" alt="Услуги по организации банкетов" /> 
					<p class="image-caption">Ресторан-бар «Нью-Йорк» предлагает услуги по организации банкетов, фуршетов, свадеб, корпоративных вечеров и юбилеев.</p> 
				</aside>
			</article>
			<article class="cf">
				<header>
					<h2>Комфорт и удобство</h2>
				</header>
				<section class="paper-columns narrow">
					<div class="column wide">
						<p>Проектор высокого разрешения и большой экран, а так же шесть плоских плазменных панелей расположены в ресторане таким образом, чтобы обеспечить вам прекрасную видимость из любого места в ресторане. Сидите, где хотите. Смотрите, что хотите.</p>
						<h3>Всегда на связи</h3>
						<p>Две зоны Wi-Fi позволят вам оставаться на связи в любой точке нашего ресторана.</p>
					</div>
				</section>
				<aside class="wide">
					<img src="<?=$baseurl;?>images/main_promo_2.jpg" alt="Интерьер ресторана Нью-Йорк" /> 
				</aside>
			</article>
			<div class="map"> </div>
			<div class="welcome">Welcome to New York</div>
		</div>
		<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<div class="bottom-shadow"></div>
	<?=$this->load->view("users_interface/includes/scripts");?>
	<script src="<?=$baseurl;?>js/libs/jquery.cycle.js"></script>
	<script src="<?=$baseurl;?>js/libs/jquery.easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			/*
			$('div#photo-slider').cycle({
				fx: 'scrollLeft',
				speed: 'fast',
				timeout: 5000,
				pager: "#photo-thumbs", 
				pagerAnchorBuilder: function(idx, slide){
					return '<a class="thumbnail" href="#" style="background: url(\''+slide.src+'\') no-repeat center center;">Slide '+idx+'</a>';
				} 
			});
			*/
			$('div.photo-wrapper').cycle({
				fx: 'fade',
				//speed: 'slow',
				timeout: 5000
			});
		});
	</script>
</body>
</html>