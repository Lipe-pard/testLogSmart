<h1> Teste Dev FullStack Junior Log Smart </h1>

### Descrição

O Projeto é um teste para a vaga de Dev FullStack da empresa Log Smart, a ideia é um sistema com um crud de amigos e um sorteio desses amigos para um amigo secreto. O sistema foi desenvolvido com o framework laravel e com tailwindCss no front para dar uma ajudada.

### Como Utilizar

Para ultilizar o projeto é preciso ter sua maquina preparada para receber um projeto laravel, então se você não tem um ambiente pronto para isso segue o link de como configurar [Config Ambiente Laravel](https://www.youtube.com/watch?v=_h7pq2uc6e4&pp=ygUdY29uZmlndXJhbmRvIGFtYmllbnRlIGxhcmF2ZWw%3D). Outra coisa que você precisa para poder ultilizar o sistema é o git para poder realizar o clone do projeto então segue o link para instalar o git [Git](https://git-scm.com/).

Agora que temos tudo certo podemos fazer o clone do projeto, abra o seu terminal e ultize o seguinte comando para isso:

```bash 
    git clone https://github.com/Lipe-pard/testLogSmart.git
    cd testLogSmart
```

Agora dentro estando dentro do projeto basta rodar os comando para instalar as dependencias do projeto:

```bash 
    composer install
    npm install
```
Caso de erro ao rodar o comando npm install pode ser que precisse instalar o node, segue link para realizar a instalação [Node](https://nodejs.org/pt).

Agora temos que acessar o projeto para poder terminar as configs, dentro do projeto temos o arquivo <b>.env.example</b>, pode copiar ele e colar dentro do projeto mesmo e mudar o nome do arquivo de copia para apenas <b>.env</b>. Dentro do .env é onde configuramos a conexão com nosso banco de dados, então dentro do seu .env localize esse trecho:

```bash 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
```
Ele vai estar assim então coloque as informações do seu banco de dados nos campos da seguinte forma:

```bash 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE= nome do seu banco de dados
    DB_USERNAME= usuario do seu banco de dados
    DB_PASSWORD= senha do seu banco de dados
```
Se você seguiu a instalação do ambiente laravel sugerida não vai haver a nescessidade de modificar o host e a porta. Agora com tudo configurado podemos rodar as migrations para criar as nossas tabelas:

```bash
    php artisan migrate
```

Pronto agora é só colocar nosso servidor para rodar e desfrutar do sistema, primeiro rode o comando:

```bash 
    php artisan serve
```

e em outro terminal rode o seguinte comando:

```bash 
    npm run dev
```

O laravel é um framework muito bom que ajuda e exibe os erros de forma bem explicita o que deixa facil de resolver qualquer erro. Espero que não ocorra nenhum erro 😁.

### Técnologias Utilizadas

<div>
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="icon"/>
    <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="icon"/>
    <img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E" alt="icon"/>
</div>

### Contatos

<div style="display: inline-block">
    <a href="mailto:pardinhorh@gmail.com">
      <img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white"/>
    </a>
    <a href="https://www.linkedin.com/in/felipe-pardinho-695170245/">
      <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"/>
    </a>
</div>
