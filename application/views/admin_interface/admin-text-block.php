<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view("admin_interface/head");?>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<?=$this->load->view("admin_interface/header");?>
	<div role="main">
		<div class="container_12">
			<div><?=anchor('admin-panel/actions/control','Вернутся назад');?></div>
			<?php $this->load->view('alert_messages/alert-error');?>
			<?php $this->load->view('alert_messages/alert-success');?>
			<div class=""><?=$tblocktitle;?></div>
			<div>
				<?=$this->load->view("forms/frmedittextblock");?>
			</div>
		</div>
	</div>
<?=$this->load->view("admin_interface/footer");?>
<?=$this->load->view("admin_interface/scripts");?>
<script type="text/javascript" src="<?=$baseurl;?>js/redactor/redactor.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#text').redactor({toolbar:'default',lang: 'ru',css:['wym.css'],'fixed': true});
		$('#text').redactor({ autoresize: true });
	});
</script>
</body>
</html>