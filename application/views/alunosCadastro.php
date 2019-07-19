
<div id="div-lista" class="hide row">
				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        <h1 class="jumbotrom_heading">Cadastro de Alunos</h1><p></p>

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

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>home"id="cancelar">Cancelar</a>
        
        <a class="btn btn-info" id="btn-lista" href="<?php base_url(); ?>alunosCadastro">Listar Contatos</a>
        
    <?php form_close(); ?>	
           
    </div>
    <div class="col-3 col-lg-3 col-md-3"></div>
</div>    
<div class="row">				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        
        <h1 class="jumbotron-heading">Lista de Alunos</h1><p></p> 
        
        <table id="table_id" class="table table-striped table-bordered" style="width:120%">
            
            <thead>
                <tr class="table-active">
                    <th scope="col">Nome</th>
                    <th scope="col">Rg</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Funçoes</th>            
                </tr>              
            </thead>
          
            <tbody>               
                <?php foreach ($alunos as $row): ?>
                    <tr>
                        <td class="bg-info"> <?php echo $row->nome; ?></td>
                        <td class="bg-info"> <?php echo $row->rg; ?></td>
                        <td class="bg-info"> <?php echo $row->cpf; ?></td>
                        <td class="bg-info"> <?php echo $row->sexo; ?></td>
                        <td> 
                            <a href="<?php echo base_url().'alunos/excluir/'.$row->id;?>">Excluir</a> <p></p>
                            <a href="<?php echo base_url().'alunos/editar/'.$row->id;?>">Editar</a>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>                 
            </tbody>
            
        </table>
        
    </div>
    <div class="col-3 col-lg-3 col-md-3"></div>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            }
        });
    });
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });

</script>