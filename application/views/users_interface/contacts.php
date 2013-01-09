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
			
			<div class="ya-map cf">
				<div id="ymaps-map-id_133876530959542054863"></div>
				<script type="text/javascript">
					function fid_133876530959542054863(ymaps) {var map = new ymaps.Map("ymaps-map-id_133876530959542054863", {center : [39.774624076721146, 47.23498908113597],zoom : 15,type : "yandex#map"});
						map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
						map.geoObjects.add(new ymaps.Placemark([39.774409, 47.235179], {balloonContent : "Ресторан-бар Нью-Йорк"},{preset : "twirl#redDotIcon"}));
					};
				</script>
				<script type="text/javascript" src="http://api-maps.yandex.ru/2.0/?coordorder=longlat&load=package.full&wizard=constructor&lang=ru-RU&onload=fid_133876530959542054863"></script>
			</div>
			
			<article class="cf">
				<section>
					<div class="column left-contacts">
						<h3>Звоните</h3>
						<p class="red-phone">
			    			(863) 300-07-31 
			    		</p>
						<h3>Пишите</h3>
						<p class="red-email">
			    			<a href="mailto:info@newyork-bar.ru">info@newyork-bar.ru</a> 
			    		</p>
						<h3>Приходите</h3>
						<p>
			    			Ростов-на-Дону, <br /> 
			    			40-я линия, 5/64 
			    		</p>
					</div>
					<div class="column right-contacts">
						<h3>Обратная связь</h3>
						<div id="message_box"></div>
						<?=$this->load->view("forms/frmcontact");?>
					</div>
				</section>
    	</article>			

		</div>
		<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<div class="bottom-shadow"></div>
	<?=$this->load->view("users_interface/includes/scripts");?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#submit").click(function(event){
			var err = false;
			var email = $("#email").val();
			$(".inpval").each(function(i,element){if($(this).val()==''){err = true;$(this).addClass('empty-error');}});
			if(err){$("#message_box").html('<div class="alert alert-error">Поля не могут быть пустыми</div>'); event.preventDefault();};
			if(!err && !isValidEmailAddress(email)){$("#message_box").html('<div class="alert alert-error">Не верный адрес E-Mail</div>'); event.preventDefault();}
		});
		$(".inpval").focusin(function(){
			$(this).removeClass('empty-error');
		});
			
		function isValidEmailAddress(emailAddress){
			var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
			return pattern.test(emailAddress);
		};
	});
</script>
</body>
</html>