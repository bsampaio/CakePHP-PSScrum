<h1><?php echo __('Add Type'); ?></h1>
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="row">
            <?php echo $this->Form->create('Type', array('inputDefaults' => array('div' => false))); ?>
                <!-- Form group responsável pelo NOME do Tipo do Colaborador -->
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="text" name="name" placeholder="Nome" required>
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