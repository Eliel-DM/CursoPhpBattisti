# 🗂 Pequeno Task Manager (PHP + JSON)

## 📌 Descrição

Projeto simples de gerenciamento de tarefas desenvolvido com **HTML, PHP
e JavaScript**, com persistência de dados utilizando arquivo JSON.

---

## 🎯 Guia do Role Play

Suas metas:

1.  Criar formulários HTML e processar dados com PHP.\
2.  Implementar lógica de adicionar, editar e deletar tarefas.\
3.  Salvar e recuperar informações usando arquivos ou banco de dados
    simples.

---

## ✅ Funcionalidades Implementadas

- ✔ Criação de tarefas via formulário HTML\
- ✔ Processamento de dados com PHP\
- ✔ Persistência utilizando arquivo `tarefas.json`\
- ✔ Listagem dinâmica de tarefas via JavaScript (Fetch API)

---

## 🏗 Estrutura do Projeto

    .
    ├── backend.php        # Processamento PHP (API simples)
    ├── meioDeCampo.js     # Comunicação via Fetch API
    ├── tarefas.json       # Armazenamento persistente das tarefas
    └── index.html         # Interface HTML

---

## ⚙ Funcionamento

### 🔹 Backend (PHP)

- Verifica se `tarefas.json` existe
- Caso exista → carrega e converte JSON para array
- Caso não exista → inicia array vazio
- Recebe requisições POST
- Adiciona nova tarefa ao array
- Salva novamente no arquivo JSON
- Retorna lista completa em formato JSON

Funções utilizadas:

- `file_get_contents()`
- `json_decode()`
- `json_encode()`
- `file_put_contents()`

---

### 🔹 Frontend (HTML + JavaScript)

- Formulário envia dados via Fetch API
- `preventDefault()` evita reload da página
- Comunicação assíncrona com `backend.php`
- Renderização dinâmica das tarefas no DOM

---

## 📦 Estrutura da Tarefa

Cada tarefa é armazenada no formato:

```json
{
  "nome": "TAREFA 1",
  "prioridade": "media",
  "descricao": "DESENVOLVER UM SISTEMA MASTER"
}
```

---

## 🚀 Como Executar

### 1️⃣ Requisitos

- PHP 7+

### 2️⃣ Executar servidor local

Dentro da pasta do projeto:

```bash
php -S localhost:8000
```

Acesse:

    http://localhost:8000/backend.php

---

## 🔮 Melhorias Futuras

- Implementar edição de tarefas\
- Implementar exclusão de tarefas\
- Melhorar tratamento de erros e status HTTP\
- Implementar validação e sanitização de inputs\
- Evoluir para SQLite ou MySQL

---

## 📚 Finalidade

Projeto desenvolvido para prática de:

- Integração Frontend ↔ Backend
- Manipulação de JSON em PHP
- Comunicação assíncrona com Fetch API
- Persistência simples sem banco de dados
