
<div class="row">				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        <h1 class="jumbotrom_heading">Editar Cadastro</h1><p></p>

        <?php echo form_open('alunos/atualizar'); ?>

        <div class="form-group">
            <input type="text" value="<?php echo $alunosEditar[0]->id; ?>" class="hide form-control form-control-lg"  name="id" placeholder="Nome"> 
            <input type="text" value="<?php echo $alunosEditar[0]->nome; ?>" class="form-control form-control-lg"  name="nome" placeholder="Nome"> 
        </div><p></p>

        <div class="form-group">
            <input type="text" value="<?php echo $alunosEditar[0]->rg; ?>" class="form-control form-control-lg"  name="rg" placeholder="Rg"><p></p>
        </div>

        <div class="form-group">
            <input type="text" value="<?php echo $alunosEditar[0]->cpf; ?>" class="form-control form-control-lg"  name="cpf" placeholder="Cpf"><p></p>
        </div>

        <div class="form-check form-check-inline">
                    <input class="form-check-input"  type="radio" name="sexo" id="inlineRadio1" value="Masculino" <?php if($alunosEditar[0]->sexo ==="MASCULINO") echo set_radio('sexo','1',true);?>>
                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Feminino" <?php if($alunosEditar[0]->sexo ==="FEMININO") echo set_radio('sexo','1',true);?>>
                    <label class="form-check-label" for="inlineRadio2">Feminino</label>
        </div>
                <p></p>

        <input name="acao" type="submit" value="Salvar" class="btn btn-success"/><p></p>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>../../alunos"id="cancelar">Cancelar</a>

<?php form_close(); ?>	

    </div>
    <div class="col-3 col-lg-3 col-md-3"></div>
</div>    
</div>
