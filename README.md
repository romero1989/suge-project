# suge-project

## Sistema Unificado de Gestão Educacional

Sistema Web para Gestão Educacional de forma Unificada. Contempla as diversas áreas de uma Instituição de Ensino, dentre eles:

* Gestão Acadêmica (Registro Acadêmico, Biblioteca, Portal Aluno, Portal Professor, Ambiente Virtual de Ensino, entre outros);
* Gestão Administrativa (Financeiro, Contábil, Protocolo, Patrimônio, Almoxarifado, Contratos, Recursos Humanos, entre outros);
* Gestão de Concursos e Vestibulares;

## Instalação
Clone o projeto para seu host
```
git clone https://github.com/romero1989/suge-project.git
```
Entre no diretório do projeto e execute o seguinte comando:
```
composer update
php artisan key:generate
```
Ajuste as configurações do arquivo .env

## Execução do sistema
Ainda no diretório do projeto execute o comando:
```
php artisan serve
```
Pronto, abra o navegador e entre no seguinte endereço:

```
http://localhost:8000/
```


