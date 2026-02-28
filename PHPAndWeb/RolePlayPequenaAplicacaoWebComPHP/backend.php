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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeTarefa = $_POST['nome'];
    $prioridadeTarefa = $_POST['prioridade'];
    $descricaoTarefa = $_POST['descricao'];

    array_push($data, ["nome" => $nomeTarefa, "prioridade" => $prioridadeTarefa, "descricao" => $descricaoTarefa]);
}

echo json_encode($data);
