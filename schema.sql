-- Criar a tabela se não existir
CREATE TABLE IF NOT EXISTS itens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT
);

-- Inserir dados de teste (Seed)
INSERT INTO itens (nome, descricao) VALUES
('Notebook Dell', 'Notebook com processador i7 e 16GB de RAM'),
('Mouse Sem Fio', 'Mouse óptico ergonômico com conexão USB'),
('Teclado Mecânico', 'Teclado com iluminação RGB e switches azuis'),
('Monitor 24 Polegadas', 'Monitor Full HD com taxa de atualização de 75Hz'),
('Fone de Ouvido Bluetooth', 'Headset com cancelamento de ruído ativo');