
# MLM Multi Level Marketing - Sontigui

This is an MLM architecture that i wrote with PHP (OOP) for BE

### Composer

Run [Composer](https://getcomposer.org/) using

```
composer
```

After cloning the repository, install all the php dependencies using

```
composer install
```

### Environment variables

The project needs the following environment variables

```
DB_HOST
DB_PORT
DB_USER
DB_PASSWORD
DB_NAME
```


For development, an example file `.env.example` is provided. Just copy it to `.env`


### Migrations

Run migrations with

```
phinx migrate
```

Run seeds

```
phinx seed:run
```

Rollback one step with

```
phinx rollback
```

Create a new migration with

```
phinx create {MigrationName}
```