<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <?php
            if(!empty($types)):
            foreach ($types as $type) :
        ?>
            <tr>
                <td><?php echo $type['Type']['id']; ?></td>
                <td><?php echo $type['Type']['name']; ?></td>
                <td>
                        <?php
                        echo $this->Html->link(
                            'Edit',
                            '/types/edit/'.$type['Type']['id'],
                            array('class' => 'btn btn-warning', 'target' => '_blank')
                        );
                        ?>
                        <?php 
                        echo $this->Form->postLink(
                            __('Delete'),
                            array('action' => 'delete', $type['Type']['id']),
                            array('confirm' => __("Are you sure you want to delete?") , 'class' => 'btn btn-danger')
                        );
                        ?>
                </td>
            </tr>
        <?php
            endforeach;
            endif;
        ?>
    </table>
</div>