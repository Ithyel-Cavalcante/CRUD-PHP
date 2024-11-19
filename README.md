# CRUD-PHP
Agendamentos de Cortes - Sistema de Agendamento

Este projeto é um sistema simples para agendamento de cortes de cabelo, onde os clientes podem agendar seus cortes e os administradores podem visualizar os agendamentos. O sistema possui um painel administrativo, onde apenas o administrador pode visualizar todos os agendamentos e os usuários podem acessar suas informações pessoais.
Tecnologias Utilizadas

    PHP: Linguagem de programação principal para o back-end.
    MySQL: Banco de dados para armazenamento de informações de usuários e agendamentos.
    Bootstrap: Framework CSS para a construção da interface.
    Tailwind: Outro framework CSS.
    HTML/CSS: Marcação e estilização da página web.

Funcionalidades
Para os Usuários:

    Cadastro e Login: Os usuários podem criar uma conta e fazer login utilizando e-mail e senha.
    Agendamento de Cortes: Os usuários autenticados podem agendar cortes, informando o tipo de corte, telefone, data e hora.

Para o Administrador:

    Visão Geral de Agendamentos: O administrador pode visualizar todos os agendamentos realizados, com informações sobre o nome, telefone e tipo de corte dos clientes, organizados por data.
    Restrição de Acesso: Apenas o administrador com e-mail "admin@gmail.com" e senha "admin" pode acessar o painel administrativo.

Instalação
1 - Clone o repositório: 
    
        git clone https://github.com/ithyel-cavalcante/CRUD-PHP.git

2 - Acesse o diretório do projeto:
    
    cd CRUD-PHP
    
3 - Configure o banco de dados MySQL:

    Crie um banco de dados chamado "agendamentos".
    Importe as tabelas necessárias, como a tabela de users e agendamento.

4 - Configure a conexão com o banco de dados:

    Abra o arquivo connection.php e ajuste os parâmetros de conexão (usuário, senha e banco de dados) conforme sua configuração local.

5 - Abra o projeto no seu navegador

6 - Como usar o site: 
    
    Ao baixar a pasta, a primeira coisa a se fazer é acessar o arquivo "login.php" é o primeiro na hierarquia de acesso.
    Em seguida fica a criterio do usuario fazer um agendamento e navegar pelas abas.

7 - Consultas Sql utilizadas:
    
    login.php:   "select * from users where email = '$email' and senha = '$senha'";

    newUser.php:  "INSERT INTO `users`(`id`, `nome`, `email`, `telefone`, `senha`) VALUES ('0','$nome','$email','$tel','$senha')";

    editarPerfil.php: "UPDATE users SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha' WHERE id = '$id_usuario'"

    agendarCorte.php: "INSERT INTO agendamento (telefone_cliente, corte_cliente, data_corte, hora_corte, user_id) 
                     VALUES ('$telefone', '$corte', '$data', '$horario', '$user_id')";

    admin.php: "SELECT * FROM agendamento ORDER BY data_corte DESC, hora_corte DESC";


