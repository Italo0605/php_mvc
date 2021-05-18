# Estrutura MVC PHP
Este repositório tem como objetivo auxiliar desenvolvedores iniciantes como eu, não perder tempo criando toda estrutura MVC
após o aprendizado do conceito de cada estrutura, o projeto sofrerá melhorias futuras como disponibilização de arquivos
dockerfile e docker-compose.yml para possibilitar a utilização de containers do docker.
Deixo este repositório aberto para sugestões de melhoria de meus colegas desenvolvedores.

# Tecnologias que foram utilizadas
- Estrutura MVC

# Passo a Passo para utilização do Projeto.
- Instalar o <a href="https://www.apachefriends.org/pt_br/index.html" target="_blank">XAMMP</a>.
- Clonar este projeto para seu repositório local.
- Habilitar o mod_rewrite dentro das configurações do apache no arquivo apache2.conf.
- Caso seja alterado o nome da raiz do diretório (mvc), é necessário alterar o nome da raiz dentro do arquivo .htaccess, pois se o nome do 
diretório estiver diferente sua aplicação não vai funcionar assim que iniciada.
- Para utilização dessa estrutura em provedor é possível alterar as configurações, retirando o comentário do arquivo Environment.php
para implementar as configurações de em produção do código, para um bom funcionamento peço que comente a linha acima deste arquivo para
não gerar conflito no site.
- As configurações do banco de dados e BASE_URL encontra-se dentro do arquivo config.php disponibilizado na raiz do diretório, siga as instruções
dos comentários para fácil alteração.


# Melhorias Futuras

- Implementação do Docker para utilização do PHP, Apache, PhpMyAdmin e MySQL
- Criação de outro repositório para utilização do Framework Laravel.