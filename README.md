# PHP-Cadastro-de-Clientes

Teste para medir conhecimentos de promgramação em Backend, proposto pela empresa Hibrido.
Neste projeto, é feito um sistema para cadastro de Clientes usando o PHP para o desenvolvimento do sistema.

### Como rodar o Projeto

Para executar o projeto, primeiro precisamos fazer a instalação de alguns softwares:

- > XAMPP ou outro programa para abrir um servidor Local. Neste projeto, foi usado o XAMPP.
  - > [Clique aqui para download do XAMPP](https://www.apachefriends.org/pt_br/download.html)
- > Algum software para leitura dos códigos. Neste projeto, foi usado o Visual Studio Code.
  - > [Clique aqui para download do Visual Studio Code](https://code.visualstudio.com/download)
 - > Algum navegador da sua preferencia, para visualização da página. Neste projeto, foi usado o Google Chrome.
  - > [Clique aqui para download do Google Chrome](https://www.google.com/intl/pt-BR/chrome/)

### Desenvolvimento

Depois de termos instalado os softwares, será necessário clonar o projeto do GitHub para um diretório a sua escolha.
```shell
cd "diretorio de sua preferencia"
git clone https://github.com/lucaszit/PHP-Cadastro-de-clientes
```

### Abrindo o Servidor Local

Após ter o projeto baixado em um diretório da sua escolha, precisamos abrir o XAMPP, que já instalamos, e clicar em Start Apache e MySQL.

### Colocando o projeto no LocalHost

Com o Apache e o MySQL rodando, podemos entrar na pasta de instalação do XAMPP (C:\xampp\htdocs) e dentro da pasta htdocs precisamos
colar o projeto baixado do GitHub. Para isto, vamos criar uma pasta chamada cadastro, dentro da pasta htdocs, e vamos pegar todos
os arquivos baixados do GitHub e colocar dentro desta pasta. O diretório ficará assim: (C:\xampp\htdocs\cadastro).

### Entrando em phpmyadmin

Após termos colocado os arquivos do projeto na pasta htdocs do XAMPP, precisamos entrar no Navegador. Vamos digitar na barra de 
endereços o seguinte comando: localhost/phpmyadmin 
Com isso, entraremos na página do phpmyadmin para podermos importar o banco de dados do projeto.

### Importando o Banco de dados

Agora que já estamos na página do phpmyadmin, vamos importar o banco de dados que está dentro da pasta do projeto, que foi colocado na
pasta do XAMPP (C:\xampp\htdocs\cadastro). Dentro desta pasta, temos uma pasta chamada data_base. Entrando nela, podemos
encontrar o arquivo db_clientes.sql
Agora, vamos voltar no phpmyadmin que abrimos anteriormente e clicar em Importar. Onde diz "Ficheiro a importar" vamos clicar em
Escolher Arquivo, aqui vamos na pasta (C:\xampp\htdocs\cadastro\data_base) e clicamos no arquivo db_clientes.sql
Feito isso, clicamos em Executar, no final da página de importação que estamos, no phpmyadmin.

### Abrindo o projeto no navegador

Pronto, agora temos tudo que precisamos para abrir o projeto em nosso navegador e visualizar o que foi feito.
Para fazermos isto, vamos entrar no navegador e digitar na barra de endereços (localhost/cadastro/index.php)
Lembrando que tudo isso é feito com o XAMPP aberto executando o Apache e o MySQL.

### Arquiteturas e Bibliotecas usadas

Neste projeto foi usado um Framework Frontend chamado Materialize, para dar um estilo mais bonito a página e afim de testar esta função
para um aprendizado mais amplo. [Clique aqui para visitar o site do Materialize](https://materializecss.com/).
Toda a parte lógica foi desenvolvida com PHP.

