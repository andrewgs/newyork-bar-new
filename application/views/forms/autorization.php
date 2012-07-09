<form class="" method="POST" action="<?=$this->uri->uri_string();?>">
	<fieldset>
		<legend>Введите логин и пароль для входа в панель администрирования</legend>
	<?php if($msgr):?>
		<div class="">
			<h4 class="">Внимание!</h4>
			<?=$msgr;?>
		</div>
	<?php endif; ?>
		<div class="control-group">
			<label for="login" class="control-label">Логин</label>
			<div class="controls">
				<input type="text" id="login" class="input-xlarge" name="login">
			</div>
		</div>
		<div class="control-group">
			<label for="password" class="control-label">Пароль</label>
			<div class="controls">
				<input type="password" id="password" class="input-xlarge" name="password">
			</div>
		</div>
		<div class="form-actions">
			<button class="" type="submit" id="send" name="submit" value="send">Войти на сайт</button>
			<button class="" type="reset" id="reset">Отменить</button>
		</div>
	</fieldset>
</form>