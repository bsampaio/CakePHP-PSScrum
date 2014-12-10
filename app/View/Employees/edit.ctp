<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="row">
    <?php echo $this->Form->create('employees', array('inputDefaults' => array('div' => false))); ?>
        <!-- Form group responsável pelo NOME do Colaborador -->
        <input type="hidden" name="id" id="id" value="<?php echo $this->request->data['Employee']['id']; ?>"/>
        <!-- Form group responsável pelo NOME do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <input value="<?php echo $this->request->data['Employee']['name']; ?>" class="form-control" type="text" name="name" placeholder="Nome" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <!-- Form group responsável pelo EMAIL do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="email" name="email" placeholder="E-mail" required value="<?php echo $this->request->data['Employee']['email'];?>">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <!-- Form group responsável pela DATA DE NASCIMENTO do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="date" name="birthdate" required value="<?php echo $this->request->data['Employee']['birthdate'];?>">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <!-- Form group responsável pelo TIPO do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <select class="form-control" name="type_id" required>
                    <?php foreach ($types as $type): ?>
                        <option value="<?php echo $type['Type']['id']?>"
                                <?php
                                    if($type['Type']['id'] == $this->request->data['Employee']['type_id']):
                                        echo "selected";
                                    endif;
                                ?>
                        >
                            <?php echo $type['Type']['name'];?>
                        </option>
                    <?php endforeach ?>
                </select>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <input class="btn btn-success btn-lg btn-block" type="submit" value="Editar">
    </form>
</div>
</div>