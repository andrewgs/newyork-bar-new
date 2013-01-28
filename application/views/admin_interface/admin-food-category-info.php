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
			<div><?=anchor('admin-panel/actions/food-category/list','Вернутся назад');?></div>
			<h3>Список блюд (<?=$cname;?>)</h3>
			<?php $this->load->view('alert_messages/alert-error');?>
			<?php $this->load->view('alert_messages/alert-success');?>
			<hr/>
			<a href="#addFood" data-toggle="modal" title="Добавить блюдо"><button class="btn btn-primary" type="button"> Добавить блюдо </button></a>
			<hr/>
		<?php for($i=0;$i<count($foods);$i++):?>	
			<table class="table table-bordered">
				<tr>
					<td style="min-width: 15px;"><?=$i+1;?>.</td>
					<td style="min-width: 600px;"><?=anchor('',$foods[$i]['title'],array('class'=>'none'));?></td>
					<td><a href="#editFood" class="editFood" data-ifood="<?=$foods[$i]['id'];?>" data-tfood="<?=$foods[$i]['title'];?>" data-wfood="<?=$foods[$i]['weight'];?>" data-cpfood="<?=$foods[$i]['composition'];?>" data-pfood="<?=$foods[$i]['price'];?>" data-toggle="modal" title="Редактировать блюдо">Редактировать</a></td>
					<td><a href="#delFood" class="delFood" data-food="<?=$foods[$i]['id'];?>" data-toggle="modal" title="Удалить блюдо">Удалить</a></td>
				</tr>
			</table>
		<?php endfor;?>	
			<hr/>
			<a href="#addFood" data-toggle="modal" title="Добавить блюдо"><button class="btn btn-primary" type="button"> Добавить блюдо </button></a>
		</div>
	</div>
	<?php $this->load->view('admin_interface/modal/admin-add-food');?>
	<?php $this->load->view('admin_interface/modal/admin-del-food');?>
	<?php $this->load->view('admin_interface/modal/admin-edit-food');?>
<?=$this->load->view("admin_interface/footer");?>
<?=$this->load->view("admin_interface/scripts");?>
	<script type="text/javascript">
		$(document).ready(function(){
			var Food = -1;
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
			
			$(".editFood").click(function(){
				Food = $(this).attr('data-ifood');
				$("#idFood").val(Food);
				$("#etitle").val($(this).attr("data-tfood"));
				$("#eweight").val($(this).attr("data-wfood"));
				$("#ecomposition").html($(this).attr("data-cpfood"));
				$("#eprice").val($(this).attr("data-pfood"));
			});
			
			$(".delFood").click(function(){Food = $(this).attr('data-food');});
			$("#deleteFood").click(function(){location.href='<?=$baseurl;?>admin-panel/actions/food-category/id/<?=$this->uri->segment(5);?>/delete-food/'+Food;});
			$("#addFood").on("hidden",function(){$("#msgalert").remove();$(".control-group").removeClass('error');$(".help-inline").hide();$(".input-xlarge").val('');});
		});
	</script>
</body>
</html>