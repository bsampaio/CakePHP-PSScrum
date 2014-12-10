<h1><?php echo __('Adicionar Colaborador'); ?></h1>
<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="row">
    <?php echo $this->Form->create('Employee'); ?>
        <div class="form-group">
            <?php echo $this->Form->input('name', 
                       array(
                            'div' => 'input-group',
                            'class' => 'form-control',
                            'type' => 'text',
                            'name' => 'name',
                            'placeholder' => 'Nome',
                            'required'
                        )
                    );
              ?>
         </div>
        <div class="form-group">
            <?php echo $this->Form->input('email', 
                       array(
                            'div' => 'input-group',
                            'class' => 'form-control',
                            'type' => 'email',
                            'name' => 'name',
                            'placeholder' => 'E-mail',
                            'required'
                        )
                    );
              ?>
         </div>
        <div class="form-group">
            <?php echo $this->Form->input('birthdate', 
                       array(
                            'div' => 'input-group',
                            'class' => 'form-control',
                            'type' => 'date',
                            'name' => 'birthdate',
                            'placeholder' => 'Data de Nascimento',
                            'required'
                        )
                    );
              ?>
         </div>
            <?php
                echo $this->Form->input('type_id');
            ?>
    <?php echo $this->Form->end(__('Submit')); ?>
    </div>
</div>