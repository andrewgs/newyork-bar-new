<?=form_open($this->uri->uri_string(),array('id'=>'contacts-form','name'=>'contacts-form')); ?>
	<textarea rows="5" id="text" name="textblock" id="textblock" class="inpval" style="width: 960px; height: 460px;"><?=$textblock;?></textarea>
	<button class="btn btn-success" type="submit" id="submit" name="submit" value="send">Сохранить</button>
<?= form_close(); ?>