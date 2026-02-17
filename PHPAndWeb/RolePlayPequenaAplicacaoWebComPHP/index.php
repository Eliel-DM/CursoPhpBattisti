<?php
/*
Guia do role play
Suas metas:
    1
    Criar formulários HTML e processar dados com PHP.
    2
    Implementar lógica de adicionar, editar e deletar tarefas.
    3
    Salvar e recuperar informações usando arquivos ou banco de dados simples.
*/

$data = [
    ['nome' => 'Criar Função PHP', 'prioridade' => 'Alta', 'descricao' => 'Realizar a criação de uma função das nervosa'],
    ['nome' => 'Ir no parquinho', 'prioridade' => 'Média', 'descricao' => 'É preciso levar o cachorro ao parque cara'],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST"></form>
    <?php if ($data) ?>
</body>

</html>