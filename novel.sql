CREATE TABLE fav (id int PRIMARY KEY, user varchar(30), tanggal varchar(30), nama_novel varchar(30), wikiid int);
CREATE TABLE komentar (id int PRIMARY KEY, komentar text, wikiid int, tanggal varchar(30));
CREATE TABLE popular (id int PRIMARY KEY, wikiid int, view varchar(100));
CREATE TABLE `novel`.`users` ( `id_user` INT NOT NULL AUTO_INCREMENT ,  `username` VARCHAR(32) NOT NULL ,  `password` VARCHAR(32) NOT NULL ,  `email` INT NOT NULL ,    PRIMARY KEY  (`id_user`)) ENGINE = InnoDB;
