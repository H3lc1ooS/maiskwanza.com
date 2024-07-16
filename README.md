# maiskwanza.com

Descriçã: WebSite para o podcast +Kwanza de Nuno Baio e Vaneza Von-Hoff.

## Como Executar o Projecto
* Instalar o Composer <https://getcomposer.org/download/>

* Instalar dependências:
    ** composer install
    ** composer require google/apiclient
    ** composer require symfony/var-dumper

* Alterar o nome do ficheiro env-example.php para env.php

* Gerar chave para a API do YoutubeData v3 <https://console.cloud.google.com/apis>

* Atribuir a chave à variável $KEY no ficheiro env.php