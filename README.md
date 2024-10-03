# 🚀 Projeto: Escritório Médico Online (PROJETO EM DESENVOLVIMENTO)

Bem-vindo ao projeto **Escritório Médico Online**! Este sistema web foi desenvolvido para gerenciar o acesso do usuário a novas consultas, verificar consultas e entre outros.

## 📝 Sobre o Projeto

Este projeto implementa os conceitos básicos do MySQL, incluindo operações de **Criar**, **Ler**, **Atualizar**, **Deletar** e **Excluir** (CRUD). Foi utilizado PHP com PDO (PHP Data Objects) para conectar o front-end ao back-end de forma segura e eficiente.

Para garantir a segurança dos dados dos usuários, o JavaScript é utilizado para gerar um **hash** das senhas antes de armazená-las no banco de dados. Isso assegura que mesmo em caso de acesso indevido ao banco, as senhas estarão protegidas.

## 🚧 Funcionalidades Principais

- **Cadastro de Usuários**: Permite o registro de novos usuários no sistema.
- **Autenticação**: Login seguro com verificação de credenciais hash.
- **Gerenciamento de Dados**: Operações CRUD para manipulação de informações no banco de dados.
- **Interface Responsiva**: Utilização do Bootstrap para garantir compatibilidade com diversos dispositivos.

## ☕ Tecnologias Utilizadas

- **HTML/CSS com Bootstrap**: Desenvolvimento de interfaces web amigáveis e responsivas.
- **PHP**: Linguagem de script para desenvolvimento back-end.
- **MySQL**: Banco de dados relacional para armazenamento de informações.
- **JavaScript**: Implementação de funcionalidades no front-end e segurança de senhas.

## 💻 Ferramentas Utilizadas

- **Visual Studio Code**: Ambiente de desenvolvimento integrado (IDE).
- **XAMPP**: Plataforma que fornece servidor Apache, PHP e MySQL.
- **DBeaver**: Ferramenta universal para gerenciamento de bancos de dados.
- **Bootstrap**: Framework front-end para design responsivo.

## 📦 Como Instalar e Executar o Projeto

1. **Clone o Repositório**

   ```bash
   git clone https://github.com/Daniel-P-Lima/hospital.git
   ```

2. **Configure o Ambiente**

   - Instale o XAMPP e inicie os módulos Apache e MySQL.
   - Utilize o DBeaver ou o phpMyAdmin para criar o banco de dados necessário.
   - Importe o arquivo `database.sql` fornecido no repositório para criar as tabelas.

3. **Configure as Credenciais**

   - Nos arquivos `.php`, insira as credenciais do seu banco de dados MySQL.

   ```php
   <?php
   $host = 'localhost';
   $dbname = 'nome_do_banco';
   $username = 'seu_usuario';
   $password = 'sua_senha';
   ?>
   ```

4. **Inicie a Aplicação**

   - Mova o projeto para a pasta `htdocs` do XAMPP.
   - Acesse `http://localhost/seu-projeto` no seu navegador.

## 📖 Como Utilizar

- **Cadastro e Login**: Crie uma conta e faça login para acessar as funcionalidades.
- **Gerenciamento**: Utilize as operações CRUD para gerenciar os dados conforme necessário.
- **Navegação**: A interface intuitiva permite fácil acesso a todas as funcionalidades.
