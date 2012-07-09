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
			<h3>Категории блюд</h3>
			<?php $this->load->view('alert_messages/alert-error');?>
			<?php $this->load->view('alert_messages/alert-success');?>
		<?php for($i=0;$i<count($fcategory);$i++):?>
			<table class="table table-bordered">
				<tr>
					<td style="min-width: 15px;"><?=$i+1;?>.</td>
					<td style="min-width: 600px;"><?=anchor('admin-panel/actions/food-category/id/'.$fcategory[$i]['id'],$fcategory[$i]['title']);?></td>
					<td><a href="#delFoodCategory" class="delcFood" data-cfood="<?=$fcategory[$i]['id'];?>" data-toggle="modal" title="Удалить категорию блюд">Удалить</a></td>
				</tr>
			</table>
		<?php endfor;?>
			<hr/>
			<a href="#addFoodCategory" data-toggle="modal" title="Добавить категорию блюд"><button class="btn btn-primary" type="button"> Добавить категорию </button></a>
		</div>
	</div>
	<?php $this->load->view('admin_interface/modal/admin-add-food-category');?>
	<?php $this->load->view('admin_interface/modal/admin-del-food-category');?>
<?=$this->load->view("admin_interface/footer");?>
<?=$this->load->view("admin_interface/scripts");?>
	<script type="text/javascript">
		$(document).ready(function(){
			var cFood = -1;
			$("#send").click(function(event){
				var err = false;
				$(".control-group").removeClass('error');
				$(".help-inline").hide();
				$(".ainput").each(function(i,element){
					if($(this).val()==''){
						$(this).parents(".control-group").addClass('error');
						$(this).siblings(".help-inline").html("Поле не может быть пустым").show();
						err = true;
					}
				});
				if(err){event.preventDefault();}
			});
			$(".delcFood").click(function(){cFood = $(this).attr('data-cfood');});
			$("#deleteFoodCategory").click(function(){location.href='<?=$baseurl;?>admin-panel/actions/food-category/delete-category/'+cFood;});
			$("#addFoodCategory").on("hidden",function(){$("#msgalert").remove();$(".control-group").removeClass('error');$(".help-inline").hide();$(".input-xlarge").val('');});
		});
	</script>
</body>
</html>