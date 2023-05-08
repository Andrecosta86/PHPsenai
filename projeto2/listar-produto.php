<div class="row justify-content-center">
    <div class="col-md-10">
        <br>
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th class="col-sm-1">Imagem</th>
                <th class="col-sm-1">Valor</th>
                <th class="col-sm-1" colspam="2">Ações</th>                
            </tr>
            <?php          
            $sql = "select * from produto";
            $resultado = conectar($sql);
            while($linha = $resultado ->fetch_assoc()){
                $nome = $linha['nome'];
                $valor =$linha['valor'];
                $imagem =$linha['imagem'];
                $id = $linha ["id"];
                echo"
            <tr>
                <td>$nome</td>
                <td><a href='$imagem' target='_blank'>🎂</td>
                <td><a href='$valor' target='_blank'>🤑</td>
                <td><a href='admin.php?editar=$id'>✏</td> 
                <td><a href='admin.php?apagar=$id'>🗑</td>    

            </tr>";
            }
            //<td>$valor</td>
            ?>
        </table>
    </div>
</div>