<div class="row">				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        <h1 class="jumbotrom_heading">Cadastro de usuario</h1><p></p>

        <?php echo form_open('usuario/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg"  name="nomeUsuario" placeholder="nome"> 
        </div><p></p>

        <div class="form-group">
            <input type="text" class="form-control form-control-lg"  name="user" placeholder="user">
        </div><p></p>

        <div class="form-group">
            <input type="password" class="form-control form-control-lg"  name="senha" placeholder="senha">
        </div><p></p>
        
        <div class="radio">
            <label><input type="radio" value="Adm" name="perfilAcesso" >Adm</label>

            <label><input type="radio" value="Usuario" name="perfilAcesso" >Usuario</label>
        </div><p></p>

        <input name="acao" type="submit" value="Salvar" class="btn btn-success"/><p></p>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>home"id="cancelar">Cancelar</a>
        
    <?php form_close(); ?>	
           
    </div>
    <div class="col-3 col-lg-3 col-md-3"></div>
</div>    
<div class="row">				
    <div class="col-3 col-lg-3 col-md-3"></div>
    <div class="col-6 col-lg-6 col-md-6">
        
        <h1 class="jumbotron-heading">Lista de usuario</h1><p></p> 
        
        <table id="table_id" class="table table-striped table-bordered" style="width:120%">
            
            <thead>
                <tr class="table-active">
                    <th scope="col">Nome</th>
                    <th scope="col">user</th>
                    <th scope="col">Acesso</th>
                    <th scope="col">Funçoes</th>            
                </tr>              
            </thead>
          
            <tbody>               
                <?php foreach ($usuario as $row): ?>
                    <tr>
                        <td class="bg-info"> <?php echo $row->nomeUsuario; ?></td>
                        <td class="bg-info"> <?php echo $row->user; ?></td>
                        <td class="bg-info"> <?php echo $row->perfilAcesso; ?></td>
                        <td> 
                            <a href="<?php echo base_url().'usuario/excluir/'.$row->idusuario;?>">Excluir</a> <p></p>
                            <a href="<?php echo base_url().'usuario/editar/'.$row->idusuario;?>">Editar</a>
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
</script>