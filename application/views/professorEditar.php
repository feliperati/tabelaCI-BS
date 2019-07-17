
<div class="row">				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        <h1 class="jumbotrom_heading">Editar Cadastro</h1><p></p>

        <?php echo form_open('professor/atualizar'); ?>

        <div class="form-group">
            <input type="text" value="<?php echo $professorEditar[0]->id; ?>" class="hide form-control form-control-lg"  name="id" placeholder="Nome"> 
            <input type="text" value="<?php echo $professorEditar[0]->nome; ?>" class="form-control form-control-lg"  name="nome" placeholder="Nome"> 
        </div><p></p>

        <div class="form-group">
            <input type="text" value="<?php echo $professorEditar[0]->turma; ?>" class="form-control form-control-lg"  name="turma" placeholder="Turma"><p></p>
        </div>

        <div class="form-group">
            <input type="text" value="<?php echo $professorEditar[0]->telefone; ?>" class="form-control form-control-lg"  name="telefone" placeholder="Telefone"><p></p>
        </div>

        <div class="form-check form-check-inline">
                    <input class="form-check-input"  type="radio" name="sexo" id="inlineRadio1" value="Masculino" <?php if($professorEditar[0]->sexo ==="MASCULINO") echo set_radio('sexo','1',true);?>>
                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Feminino" <?php if($professorEditar[0]->sexo ==="FEMININO") echo set_radio('sexo','1',true);?>>
                    <label class="form-check-label" for="inlineRadio2">Feminino</label>
                </div>
                <p></p>

        <input name="acao" type="submit" value="Salvar" class="btn btn-success"/><p></p>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>../../professor"id="cancelar">Cancelar</a>

<?php form_close(); ?>	

    </div>
    <div class="col-3 col-lg-3 col-md-3"></div>
</div>    
</div>
