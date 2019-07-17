
<div class="row">				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        <h1 class="jumbotrom_heading">Editar Cadastro</h1><p></p>

        <?php echo form_open('usuario/atualizar'); ?>

        <div class="form-group">
            <input type="text" value="<?php echo $usuarioEditar[0]->idusuario; ?>" class="hide" class="form-control form-control-lg"  name="idusuario" placeholder="idusuario"/><p></p>
        </div><p></p>            
        <div class="form-group">
            <input type="text" value="<?php echo $usuarioEditar[0]->nomeUsuario; ?>" class="form-control form-control-lg"  name="nomeUsuario" placeholder="Nome"/><p></p>
        </div><p></p>
        <div class="form-group">
            <input type="text" value="<?php echo $usuarioEditar[0]->user; ?>" class="form-control form-control-lg"  name="user" placeholder="user"/><p></p>
        </div>
        <div class="form-group">
            <input type="password" value="<?php echo $usuarioEditar[0]->senha; ?>" class="form-control form-control-lg"  name="senha" placeholder="Nova senha"/><p></p>
        </div>

        <div class="form-check form-check-inline">
                    <input class="form-check-input"  type="radio" name="perfilAcesso" id="inlineRadio1" value="Adm" 
                        <?php if($usuarioEditar[0]->perfilAcesso ==="Adm") echo set_radio('perfilAcesso','1',true);?>>
                    <label class="form-check-label" for="inlineRadio1">Adm</label>

        <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio2" value="usuario" 
                        <?php if($usuarioEditar[0]->perfilAcesso ==="usuario") echo set_radio('perfilAcesso','1',true);?>>
                    <label class="form-check-label" for="inlineRadio2">usuario</label>
        </div><p></p>

        <input name="acao" type="submit" value="Salvar" class="btn btn-success"/><p></p>

        <input type="reset" class="btn btn-danger"/><p></p>

        <a class="btn btn-primary" href="<?php base_url(); ?>../../usuario"id="cancelar">Cancelar</a><p></p>

<?php form_close(); ?>	

    </div>
    <div class="col-3 col-lg-3 col-md-3"></div>
</div>    
</div>
