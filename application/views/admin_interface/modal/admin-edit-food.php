<div id="editFood" class="modal hide fade dmodal">
<?=form_open($this->uri->uri_string(),array('class'=>'form-horizontal')); ?>
	<input type="hidden" id="idFood" value="" name="idf" />
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>Редактирование блюда</h3>
	</div>
	<div class="modal-body">
		<fieldset>
			<div class="control-group">
				<label for="title" class="control-label">Название: </label>
				<div class="controls">
					<input type="text" id="etitle" class="input-xlarge einput" name="title" value="">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="weight" class="control-label">Вес: </label>
				<div class="controls">
					<input type="text" id="eweight" class="input-xlarge einput" name="weight" value="">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="price" class="control-label">Стоимость: </label>
				<div class="controls">
					<input type="text" id="eprice" class="input-xlarge einput" name="price" value="">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="composition" class="control-label">Состав: </label>
				<div class="controls">
					<textarea rows="5" id="ecomposition" class="input-xlarge" name="composition"></textarea>
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
		</fieldset>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal">Отменить</button>
		<button class="btn btn-success" type="submit" id="asend" name="asubmit" value="send">Добавить</button>
	</div>
<?= form_close(); ?>
</div>