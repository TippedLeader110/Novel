CREATE TABLE fav (id int PRIMARY KEY, user varchar(30), tanggal varchar(30), nama_novel varchar(30), wikiid int);
CREATE TABLE komentar (id int PRIMARY KEY, komentar text, wikiid int);
CREATE TABLE popular (id int PRIMARY KEY, wikiid int, view varchar(100));
