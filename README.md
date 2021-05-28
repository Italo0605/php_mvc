# Estrutura MVC PHP
Este repositório tem como objetivo auxiliar desenvolvedores iniciantes como eu, não perder tempo criando toda estrutura MVC
após o aprendizado do conceito de cada estrutura.
Deixo este repositório aberto para sugestões de melhoria de meus colegas desenvolvedores.

# Tecnologias que foram utilizadas
- Estrutura MVC
- PHP 7.4
- Apache
- Docker
- Docker-Compose

# Passo a Passo para utilização do Projeto.

- Clonar este projeto para seu repositório local.
- Realizar a instalação do docker em seu ambiente de desenvolvimento, Link para documentação <a href="https://docs.docker.com/engine/install/" target="_blank">Docker Engine Install<a>
- O container esta configurado para utilização do time-zone America\Sao_Paulo e Collate utf8_general_ci para o banco de dados, para alteração
no arquivo docker-compose.yml contém as configurações necessárias.
- Para utilização dessa estrutura em provedor é possível alterar as configurações, retirando o comentário do arquivo Environment.php
para alterar as configurações de produção do código, para um bom funcionamento peço que comente a linha acima deste arquivo para
não gerar conflito no site.
- As configurações do banco de dados e BASE_URL encontra-se dentro do arquivo config.php disponibilizado na raiz do diretório, siga as instruções
dos comentários para fácil alteração.
- Caso seja necessário mudar o rewrite da página, a configuração está disponível no arquivo .htaccess

# New Features

- Implementação do Docker para utilização do PHP, Apache e MySQL
- Implementação do arquivo Routers e Página de Erro 404 para tratamento de entrada do usuário.

# Next Features

- Utilização do Composer
- Laravel.
- Angular.