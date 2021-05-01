# Seja Bem vindo

Me chamo Natan Martins, há alguns anos desenvolvedor full Stack.
como solcitado segue informações referentes as criações das tabelas.

Todos os recursos foram criados  a partir do console SQL do Mysql.
## Database supliu
Para Criação da base de dados supliu :

    CREATE DATABASE supliu;

## Faixas.table
Para criação da tabela Faixas em  database supliu :
	
    CREATE  TABLE `faixa` (
		`id`  int(11) NOT  NULL AUTO_INCREMENT,
		`numero`  int(255) NOT  NULL,
		`nome`  varchar(255) COLLATE utf8_unicode_ci NOT  NULL,
		`duracao`  varchar(255) COLLATE utf8_unicode_ci NOT  NULL,
		`album_id`  int(255) NOT  NULL,
		PRIMARY  KEY (`id`)
)

## Album.table
Para criação da tabela album em  database supliu :

    CREATE  TABLE `album` (
		`id`  int(11) NOT  NULL AUTO_INCREMENT,
		`nome_album`  varchar(255) COLLATE utf8_unicode_ci NOT  NULL,
		`year`  varchar(255) COLLATE utf8_unicode_ci NOT  NULL,
		PRIMARY  KEY (`id`)
)

