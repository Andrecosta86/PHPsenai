

<div class="row justify-content-center">
        <div class="col-md-10">
                <br>
            <table class="table table-hover">
                <tr>
                    <th>Lista de Tarefas</th>
                    <th class="col-sm-1" colspan="2">Ações</th>
                </tr>
                
                <?php 
                //listar tarefas         
                   $sql = "select * from tarefa";
                    $resultado = conectar($sql);
                    while($linha = $resultado ->fetch_assoc()){
                    $fazer = $linha['fazer'];
                    $id = $linha ["id"];
                  
                    echo"
                     <tr>
                     
                    <td>$fazer</td>
                    <td width=175px class ='btn btn-success'><a href='editar-tarefa.php?id=$id'>✏</td></a>
                    <td width=175px class='btn btn-danger'><a href='editar-tarefa.php?id_apagar=$id'>🗑</td></a>
                       

                    </tr>";
                    
                    }


                ?>
            </table>
                    
        </div>
</div>




