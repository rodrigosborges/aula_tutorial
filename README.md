A documentação do Laravel é muito bem feita, caso tenham qualquer dúvida, provavelmente tem lá.

Essa parte da instalação se encontra aqui: https://laravel.com/docs/5.7/installation

Baixar composer e instalar na pasta do php (só dar next next next):
https://getcomposer.org/Composer-Setup.exe

abrir um cmd na pasta C:\xampp\htdocs

composer global require laravel/installer
laravel new nome_do_projeto (demora um pouco)
rodar o comando php artisan serve para rodar o projeto no link localhost:8000
pode abrir o localhost/nome_do-projeto/public também, funciona do mesmo jeito

Gerar o controller para route resource
  php artisan make:controller NomeAquiController --resource
  
Gerar um model
	php artisan make:model NomeDoModel
