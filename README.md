# Sistema de Cadastro Simples em PHP

Um sistema básico para gerenciar cadastros de usuários utilizando PHP e MySQL.

## 🔧 Funcionalidades

- Criar um novo usuário
- Exibir lista de usuários
- Editar dados de um usuário existente
- Excluir usuário
- Interface web simples com formulários

## 🛠️ Tecnologias Utilizadas

- **PHP** (versão 7 ou superior)
- **MySQL** / **MariaDB**
- **HTML** + **CSS**
- Servidor local como XAMPP, WAMP, MAMP ou LAMP

## 📁 Estrutura do Projeto

      /cadastro  
      │  
      ├── index.php       # Página inicial (listagem de usuários)  
      ├── create.php      # Formulário de novo cadastro  
      ├── store.php       # Processamento do cadastro  
      ├── edit.php        # Formulário para editar usuário  
      ├── update.php      # Processamento da edição  
      ├── delete.php      # Exclusão de usuário  
      ├── config.php      # Conexão com o banco de dados  
      ├── style.css       # Estilo básico (opcional)  
      └── README.md       # Este arquivo  



## ⚙️ Instalação

1. Clone este repositório:
   ```bash
   git clone https://github.com/mathHenri05/cadastro.git

2. Mova a pasta cadastro para o diretório htdocs (caso use XAMPP) ou equivalente do seu servidor.
3. Crie o banco de dados:
    ```sql
   CREATE DATABASE cadastro_db;

4. Crie a tabela users:
   ```sql
   CREATE TABLE users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nome VARCHAR(100) NOT NULL,
     email VARCHAR(150) NOT NULL UNIQUE
   );

5. Configure seu config.php com os dados de conexão do seu MySQL:
   ```php
   <?php
   $host = 'localhost';
   $db   = 'cadastro_db';
   $user = 'root';
   $pass = '';
   $charset = 'utf8mb4';
   // restante da configuração PDO...

6. Acesse no navegador:
   ```arduino
   http://localhost/cadastro/

## 🚀 Como Usar

- Acesse a página inicial para visualizar os usuários cadastrados.
- Clique em "Novo Cadastro" para adicionar um novo usuário.
- Use os botões "Editar" ou "Excluir" para gerenciar os dados.

## 💡 Melhorias Futuras

- Validação com JavaScript no formulário
- Upload de foto de perfil do usuário
- Paginação e filtro de busca
- Sistema de login/autenticação

## 🤝 Contribuindo

Pull requests são bem-vindos!  
Sinta-se à vontade para propor melhorias ou corrigir qualquer problema.

## 📄 Licença

Este projeto está licenciado sob a licença MIT.  
Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
