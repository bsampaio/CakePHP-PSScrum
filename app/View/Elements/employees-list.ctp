<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
                        <th><?php echo __('Name'); ?></th>
                        <th><?php echo __('Email'); ?></th>
                        <th><?php echo __('Birth Date'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <?php
            if(!empty($employees)):
            foreach ($employees as $employee) :
        ?>
            <tr>
                <td><?php echo $employee['Employee']['name']; ?></td>
                <td><?php echo $employee['Employee']['email']; ?></td>
                <td><input type="date" value="<?php echo $employee['Employee']['birthdate']; ?>" readonly="true"/></td>
                <td>
                        <?php
                        echo $this->Html->link(
                            'Edit',
                            '/employees/edit/'.$employee['Employee']['id'],
                            array('class' => 'btn btn-warning', 'target' => '_blank')
                        );
                        ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                                            array('action' => 'delete', $employee['Employee']['id']),
                                            array('confirm' => __("Are you sure you want to delete?") , 'class' => 'btn btn-danger'));?>
                </td>
            </tr>
        <?php
            endforeach;
            endif;
        ?>
    </table>
</div>