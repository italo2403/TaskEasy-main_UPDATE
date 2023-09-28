<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEasy</title>
    <!-- Seus estilos CSS aqui -->
</head>
<body>
<form action="inserir_tarefa.php" method="post">
        <input type="text" id="novaTarefa" name="descricao" placeholder="Digite uma nova tarefa" required>
        <button type="submit">Enviar</button>
        <!-- <button id="adicionarBtn" type="button">Adicionar</button> -->
    </form>

    <ul class="task_list" id="listaTarefas">
        <!-- Tarefas serão adicionadas aqui -->
    </ul>
<?php
$sql = "SELECT descricao FROM tarefas";
$resultado = $conexao->query($sql);

// Verificar se a consulta foi bem-sucedida
if ($resultado->num_rows > 0) {
    // Iterar sobre os resultados
    while ($row = $resultado->fetch_assoc()) {
        echo "descricao: " . $row["descricao"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}
?>
   
</body>
</html>
