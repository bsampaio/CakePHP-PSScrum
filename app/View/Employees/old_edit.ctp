<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>