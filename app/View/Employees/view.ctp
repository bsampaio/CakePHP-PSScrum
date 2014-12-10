<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Type']['name'], array('controller' => 'types', 'action' => 'view', $employee['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), array(), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>
