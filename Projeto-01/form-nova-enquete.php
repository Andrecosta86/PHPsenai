<form action="criar-enquete.php" method="get">
    <label for="nome-enquete" class="form-label">Qual o Nome da Enquete</label>
    <input type="text" class="form-control" id ="nome-enquete" name="nome-enquete" value="Nova enquete">
    <label for="nome-enquete" class="form-label">Quais as Opções da Enquete</label>
    <?php
    $qtOpcoes = $_GET['qt-opcoes'];
    for ($i=0; $i < $qtOpcoes; $i++){
        echo "<input type='text' class='form-control' name='opcao[]' value ='Opção $i'><br>";
    }
    ?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>