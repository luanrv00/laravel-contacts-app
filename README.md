# SoftMakers Contatos

Aplicação desenvolvida utilizando [Laravel 8][laravel], [MySQL][mysql], [Bulma][bulma] e [Dusk][dusk]

## Ambiente de desenvolvimento

### Utilizando o servidor embutido do Laravel

**Você precisará configurar manualmente um banco de dados**

Para isso, basta criar tabela e usuário no seu MySQL local e em seguida configurar esses dados no arquivo `.env`:

```sh
# Outros dados de configuração..

DB_DATABASE=<database-de-sua-escolha>
DB_USERNAME=<usuário-de-sua-escolha>
DB_PASSWORD=<senha-de-sua-escolha>
```

E então executar o seguinte comando no terminal:

**Obs.:** Tenha certeza de ter o [composer][composer] instalado.

```sh
sh ./scripts/serve
```

A aplicação deverá estar disponível em [http://localhost:8000](http://localhost:8000)

### Utilizando o Docker

Para iniciar um ambiente com Docker foi utilizado o pacote [Sail][sail] do Laravel.

Basta passar `docker` como argumento para o script `serve`:

```sh
sh ./scripts/serve docker
```

Após isso, a aplicação deverá estar disponível em [http://localhost](http://localhost)

**Obs.:** Após o desenvolvimento é necessário parar o servidor quer estará sendo executado em background.  Para isso, execute o seguinte comando no terminal:

```sh
sh ./scripts/serve stop
```

## Testes

Todos os testes funcionais foram escritos utilizando o pacote [Dusk][dusk] do Laravel.

Para rodar os testes, execute no terminal:

```sh
sh ./scripts/test
```

## Troubleshooting

**`Temporary failure in name resolution`**

Verifique se a variável de ambiente `DB_HOST` está setada para `127.0.0.1` ou
`localhost:8000`.

**`Cannot start service`**

Se tiver um servidor MySQL ou Apache executando em sua máquina é possível que você precise pausa-los antes de iniciar o Docker, pois as mesmas portas são utilizadas. 

**`Falha no carregamento das fotos`**

Pode ser que o link esteja apontando para o caminho errado. Para fixar isso siga
os seguintes passos:

```sh
# remova o link atual
rm public/storage

# gere um novo link
php artisan storage:link
```

[laravel]: https://laravel.com/
[bulma]: https://bulma.io/
[sail]: https://laravel.com/docs/8.x/sail
[dusk]: https://laravel.com/docs/8.x/dusk
[mysql]: https://www.mysql.com/
[composer]: https://getcomposer.org/
