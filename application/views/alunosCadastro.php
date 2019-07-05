<div class="row">				
	<div class="col-3 col-lg-3 col-md-3"></div>
	<div class="col-6 col-lg-6 col-md-6">
            <h1 class="jumbotrom_heading">Cadastro de alunos</h1><p></p>
            
		<?php echo form_open('alunos/inserir'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg"  name="nome" placeholder="Nome"> 
                    </div><p></p>
            
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg"  name="rg" placeholder="Rg"><p></p>
                    </div>
            
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg"  name="cpf" placeholder="Cpf"><p></p>
                    </div>
                    
                    <div class="radio">
                        <label><input type="radio" value="Feminino" name="sexo" >Feminino</label>
                   
                        <label><input type="radio" value="Masculino" name="sexo" >Masculino</label>
                    </div>
            
                    <input name="acao" type="submit" value="Salvar" class="btn btn-success"/><p></p>
						
                    <input type = "reset" class="btn btn-danger"/>
                        
                    <a class="btn btn-primary" href="<?php base_url(); ?>home"id="cancelar">Cancelar</a>
                <?php form_close(); ?>				
	</div>
	<div class="col-3 col-lg-3 col-md-3"></div>
</div>