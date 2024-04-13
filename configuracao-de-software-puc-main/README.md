
# Sistema de Gestão de Clientes

## Descrição
Este projeto, baseado em Laravel, é um sistema de gestão de clientes simples, projetado para gerenciar informações de clientes. Permite aos usuários registrar, atualizar e deletar detalhes dos clientes, incluindo nome, email, data de nascimento, número de telefone e endereço.

## Funcionalidades
- **Registro de Cliente**: Adicionar novos clientes com seus detalhes.
- **Listagem de Clientes**: Visualizar todos os clientes registrados em formato de tabela.
- **Edição de Informações do Cliente**: Atualizar detalhes de clientes existentes.
- **Exclusão de Cliente**: Remover informações de clientes do sistema.

## Instalação

1. **Clonar o Repositório**
   ```
   git clone https://github.com/GustavoSantosgfs/configuracao-de-software-puc
   cd configuracao-de-software-puc
   ```

2. **Instalar Dependências**
   ```
   composer install
   ```

3. **Configuração do Ambiente**
   - Copie `.env.example` para `.env`
   - Configure sua base de dados e outras configurações de ambiente no `.env`

4. **Migração de Banco de Dados**
   ```
   php artisan migrate
   ```

5. **Executar a Aplicação**
   ```
   php artisan serve
   ```
   Acesse `http://localhost:8000` no seu navegador.

## Uso

- Acesse a página principal em `http://localhost:8000`.
- Adicione novos clientes usando a seção "Registrar Cliente".
- Visualize todos os clientes na seção "Lista de Clientes".
- Utilize o botão "Editar" para atualizar detalhes do cliente ou o botão "Deletar" para remover um cliente.

## Tecnologias Utilizadas
- **Backend**: Laravel
- **Frontend**: HTML, CSS, JavaScript

## Estrutura do Projeto

- `routes/web.php`: Define as rotas para operações com clientes.
- `app/Http/Controllers/ClientController.php`: Manipula a lógica de negócios para a gestão de clientes.
- `resources/views/`: Contém os arquivos de visualização da aplicação.
- `database/migrations/`: Arquivos de migração para criação das tabelas do banco de dados.
