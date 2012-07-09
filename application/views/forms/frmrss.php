<?=form_open($this->uri->uri_string(),array('id'=>'contacts-form','name'=>'contacts-form')); ?>
	<input value="" type="text" placeholder="Введите email..." class="inpval" id="email" name="email"/>
	<button type="submit" id="submit" name="submit" value="send">Быть в курсе!</button>
<?= form_close(); ?>