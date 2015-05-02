create database rpl;
use rpl;
create table buku(
	id int auto_increment primary key,
	kode varchar(10) not null unique,
	judul varchar(50) not null,
	tahun year not null,
	pengarang varchar(30) not null,
	penerbit varchar(30) not null
);
insert into buku values(null, 'KB001', 'Rekayasa Perangkat Lunak', 2012, 'Mulyadi', 'Balai Pustaka');
insert into buku values(null, 'KB002', 'Algoritma dan Pemrograman', 2012, 'Danang', 'Balai Pustaka');
insert into buku values(null, 'KB003', 'Teknik Multimedia', 2012, 'Samekto', 'Balai Pustaka');
create table petugas(
	id int auto_increment primary key,
	nama varchar(30) not null,
	jabatan varchar(30) not null,
	username varchar(20) not null,
	password varchar(20) not null
);
insert into petugas values(null, 'Tommy', 'Kasir', 'tommy', 'tommy');
insert into petugas values(null, 'Sekretaris', 'ani', 'ani');