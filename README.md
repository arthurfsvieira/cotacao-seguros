# Sistema de Cotação de Seguros

Este é um projeto de sistema de cotação de seguros de veículos desenvolvido na intenção de consolidar os conhecimentos em desenvolvimento web fazendo este também parte do meu portifólio pessoal. O sistema permite que os usuários preencham um formulário com informações sobre o veículo e enviem uma cotação de seguro. Os dados são armazenados em um banco de dados, e o usuário recebe uma confirmação da cotação, com opções de envio por e-mail e download em PDF.

## Funcionalidades Principais

- **Formulário de Cotação**: Os usuários podem preencher informações sobre o veículo, como nome, e-mail, telefone, modelo do carro, ano e valor do carro.
- **Validação de Dados**: O campo de valor do carro possui validação para impedir valores inválidos como `0` ou números negativos.
- **Processamento de Dados**: As informações do formulário são enviadas para um banco de dados MySQL, onde ficam armazenadas.
- **Página de Sucesso**: Após o envio da cotação, uma página confirma o sucesso do processo com uma mensagem personalizada. Se o e-mail foi submetido, o usuário recebe uma notificação adicional.
- **Responsividade**: O layout do projeto é responsivo e se adapta bem a diferentes tamanhos de tela (smartphones, tablets, desktops).
- **Opções Adicionais**:
  - Um botão para realizar uma nova cotação.
  - A possibilidade de enviar a cotação para o e-mail do cliente.
  - (Futuro) Geração de PDF da cotação para download.

## Tecnologias Utilizadas

- **Frontend**:
  - **HTML5**: Estrutura do formulário e página de sucesso.
  - **CSS3**: Estilização, incluindo responsividade com media queries.
  - **JavaScript**: Para funções interativas (futuro: geração de PDF, validações adicionais).

- **Backend**:
  - **PHP**: Processamento dos dados do formulário e comunicação com o banco de dados.
  - **MySQL (MariaDB)**: Armazenamento dos dados de cotação (usando a extensão MariaDB no XAMPP).

- **Servidor Local**:
  - **XAMPP (MariaDB)**: Para rodar o servidor Apache e gerenciar o banco de dados local.

## Instalação e Configuração

1. **Clone o repositório**:
   
   git clone https://github.com/seu-usuario/cotacao-seguros.git

2. **Configuração do Banco de Dados**:

  - Certifique-se de que o XAMPP esteja instalado e rodando.
  - No phpMyAdmin, crie um banco de dados chamado cotacao_db.
  - Execute o seguinte SQL para criar a tabela de cotação:

  CREATE TABLE cotacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(255) NOT NULL,
    email_cliente VARCHAR(255),
    telefone_cliente VARCHAR(20),
    modelo_carro VARCHAR(255),
    ano_carro INT,
    valor_carro DECIMAL(10,2)
);

4. **Rodar o Projeto**:
  - Abra o navegador e acesse: http://localhost/cotacao-seguros/index.php

##Melhorias Futuras

  - Geração de PDF: Implementar uma funcionalidade para que o cliente possa baixar sua cotação em formato PDF diretamente da página de sucesso.
  - Envio Automático de E-mail: Automatizar o envio de um e-mail com a cotação detalhada para o cliente após o envio do formulário.
  - Validações mais robustas: Melhorar a validação dos campos de entrada, como verificações de formato correto de e-mail e número de telefone.
  - Dashboard Administrativo: Criar uma página para que administradores possam visualizar e gerenciar todas as cotações feitas, incluindo filtros por data e status.
  - Histórico de Cotações: Adicionar um recurso para que os clientes possam ver suas cotações anteriores ao enviar o e-mail ou acessar o site futuramente.
  - Integração com APIs de Seguros: Implementar a integração com APIs de provedores de seguros reais para fornecer cotações mais precisas e instantâneas.

##Contribuições

  Sinta-se à vontade para contribuir com este projeto, sugerindo melhorias ou corrigindo problemas. Faça um fork do repositório e envie suas mudanças via pull request.