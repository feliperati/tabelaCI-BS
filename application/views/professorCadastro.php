
<div class="row">				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        <h1 class="jumbotrom_heading">Cadastro de professores</h1><p></p>

        <?php echo form_open('professor/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg"  name="nome" placeholder="Nome"> 
        </div><p></p>

        <div class="form-group">
            <input type="text" class="form-control form-control-lg"  name="turma" placeholder="Turma"><p></p>
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-lg"  name="telefone" placeholder="Telefone"><p></p>
        </div>

        <div class="radio">
            <label><input type="radio" value="Feminino" name="sexo" >Feminino</label>

            <label><input type="radio" value="Masculino" name="sexo" >Masculino</label>
        </div>

        <input name="acao" type="submit" value="Salvar" class="btn btn-success"/><p></p>

        <input type = "reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>home"id="cancelar">Cancelar</a>
        <?php form_close(); ?>	
        
        <table class="table table-striped">
            <h1 class="jumbotron-heading">Lista de professores</h1><p></p>           
            <thead>
                <tr class="table-active">
                    <th scope="col">nome</th>
                    <th scope="col">sexo</th>
                    <th scope="col">turma</th>  
                    <th scope="col">telefone</th>
                    <th scope="col">Funções</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professor as $row):?>
                <tr>
                    <td class="bg-info"> <?php echo $row->nome; ?></td>
                    <td class="bg-info"> <?php echo $row->sexo; ?></td>
                    <td class="bg-info"> <?php echo $row->turma; ?></td>
                    <td class="bg-info"> <?php echo $row->telefone; ?></td> 
                    <td> 
                        <a href="<?php echo base_url().'professor/excluir/'.$row->id;?>">Excluir</a> <p></p>
                        <a href="<?php echo base_url().'professor/editar/'.$row->id;?>">Editar</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="col-3 col-lg-3 col-md-3"></div>
</div>