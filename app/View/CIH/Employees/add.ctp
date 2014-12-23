<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<h2><?php echo __('Adicionar Colaborador'); ?></h2>
<div class="row">
    <?php echo $this->Form->create('employees', array('inputDefaults' => array('div' => false))); ?>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="text" name="name" placeholder="Nome" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="date" name="birthdate" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <?php
                    echo $this->Form->input('type_id',
                                array(
                                    'label' => false,
                                    'class' => 'form-control',
                                    'name' => 'type_id',
                                    'required',
                                    'after' => '<span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-asterisk">
                                                    </span>
                                               </span>'
                                )
                            );
                ?>
            </div>
        </div>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Cadastrar">
    </form>
</div>
</div>