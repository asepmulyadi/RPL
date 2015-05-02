create database rpl;
use rpl;
create table buku(
	id int auto_increment primary key,
	judul varchar(50) not null,
	tahun year not null,
	pengarang varchar(30) not null,
	penerbit varchar(30) not null
);
insert into buku values(null, 'Rekayasa Perangkat Lunak', 2012, 'Mulyadi', 'Balai Pustaka');
insert into buku values(null, 'Algoritma dan Pemrograman', 2012, 'Danang', 'Balai Pustaka');
insert into buku values(null, 'Teknik Multimedia', 2012, 'Samekto', 'Balai Pustaka');
