<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=7300AB&height=180&section=header&animation=twinkling"/>

# Hotel Website - Laravel

Este repositório contém o código-fonte de um site web temático de hotel desenvolvido em Laravel, utilizando PHP, um banco de dados orientado a objeto, rotas, Bootstrap 5 e JavaScript para aprimorar a experiência do usuário.

## Descrição

O projeto é uma aplicação web para um hotel fictício, onde os usuários podem visualizar informações sobre os serviços oferecidos, disponibilidade de quartos, fazer reservas e entrar em contato com o hotel.

## Funcionalidades

- Permitir aos usuários fazer reservas.
- Interface responsiva usando Bootstrap 5 para garantir uma experiência consistente em dispositivos móveis e desktops.

## Pré-requisitos

- PHP
- Composer
- Laravel CLI
- Banco de dados MySQL
- Node.js e npm (para compilar assets JavaScript)
- Bootstrap 5

## Instalação

1. Clone o repositório:

        git clone https://github.com/GusThyerris/appReservaHotel.git

2. Navegue até o diretório do projeto:
     
       cd nome-do-repositorio

3. Instale as dependências do PHP:

        composer install

4. Crie um arquivo `.env` baseado no `.env.example` e configure sua conexão com o banco de dados:

        cp .env.example .env

5. Gere uma chave de aplicativo:

       php artisan key:generate


6. Execute as migrações para criar as tabelas do banco de dados:

       php artisan migrate

7. Instale as dependências JavaScript:

       npm install

    ou

       yarn install

9. Inicie o servidor local:

       php artisan serve

Acesse a aplicação em seu navegador em `http://localhost:8000`.

## Uso

Você pode navegar pelo site como um usuário padrão, verificar disponibilidade de quartos, fazer reservas e entrar em contato com o hotel através do formulário de contato.

## Contribuição

Contribuições são bem-vindas! Se você quiser contribuir para este projeto, siga as etapas abaixo:

1. Fork o projeto
2. Crie sua branch de recurso (`git checkout -b feature/NovoRecurso`)
3. Faça commit de suas alterações (`git commit -am 'Adicionar novo recurso'`)
4. Faça push para a branch (`git push origin feature/NovoRecurso`)
5. Crie um novo Pull Request

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo LICENSE para obter mais detalhes.

## Contato

Se você tiver alguma dúvida ou sugestão, sinta-se à vontade para entrar em contato através do [email](gustavothyerrisdonascimentooli@gmail.com).



