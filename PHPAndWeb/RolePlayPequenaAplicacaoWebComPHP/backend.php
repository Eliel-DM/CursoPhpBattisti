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

$nomeArquivo = 'tarefas.json';

// Caso o arquivos já exista ele vai converter o conteúdo para arr, caso contrário vai somente criar um arr vazio;
if (file_exists($nomeArquivo)) {
    $conteudoDoArquivo = file_get_contents($nomeArquivo);
    $data = json_decode($conteudoDoArquivo, true); // O true ele é para instruir diretamente o PHP a transformar em um array;
} else {
    $data =  [];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeTarefa = $_POST['nome'];
    $prioridadeTarefa = $_POST['prioridade'];
    $descricaoTarefa = $_POST['descricao'];

    if (!empty($nomeTarefa)) {
        foreach ($data as $tarefa) {
            if ($tarefa['nome'] == $nomeTarefa) {
                return;
                // Estudar e inserir algum retorno de erro/ já existente para o item informado;
            }
        }
        // Adiciona a nova prioridade ao arr 
        array_push($data, ["nome" => $nomeTarefa, "prioridade" => $prioridadeTarefa, "descricao" => $descricaoTarefa]);
    }

    //Converte a lita para Json e salva no arquivo Json responsável por armazenar as tarefas;
    $jsonFinal = json_encode($data);
    file_put_contents($nomeArquivo, $jsonFinal);
}

echo json_encode($data);
