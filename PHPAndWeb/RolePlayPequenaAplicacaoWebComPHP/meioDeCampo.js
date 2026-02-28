const formulario = document.getElementById('formTarefa');

formulario.addEventListener('submit', function (evento) {
  evento.preventDefault();
  const dadosFormulario = new FormData(formulario);
  fetch('backend.php', { method: 'POST', body: dadosFormulario }) // Faz uma resição GET para o arquivo php
    .then((resposta) => resposta.json()) // Pega o retorno da requisição e traduz o payload json para objeto js
    .then((tarefas) => {
      //
    });
});

const lista = document.getElementById('listTarefa');
lista.addEventListener('click', function () {
  fetch('backend.php')
    .then((resposta) => resposta.json())
    .then((tarefas) => {
      exibirTarefas.innerHTML = '';
      tarefas.forEach((tarefa) => {
        const novoItem = document.createElement('li');
        novoItem.textContent = tarefa.nome;
        exibirTarefas.appendChild(novoItem);
      });
    });
});
