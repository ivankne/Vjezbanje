drop database if exists svirka;

create database svirka default character set utf8;
#c:\xampp\mysql\bin\mysql -uedunova -pedunova --default_character_set=utf8 < C:\xampp\htdocs\Ljetni\svirka.sql

use svirka;
create table bend(
sifra int not null primary key auto_increment,
username varchar(20) not null,
email varchar(30) not null,
lozinka varchar(20) not null,
naziv_benda varchar(50) not null,
logo varchar(255)
);

create table dogadaj(
sifra int not null primary key auto_increment,
naziv varchar(20) not null,
napomena varchar(50),
datum_pocetka datetime not null,
datum_zavrsetka datetime not null,
cijena int not null,
narucitelj varchar(20) not null,
adresa varchar(50),
bend int not null
);

create table clan(
sifra int not null primary key auto_increment,
ime varchar(20) not null,
prezime varchar(20) not null,
email varchar(30) not null,
bend int not null,
koeficijent decimal(2,2) not null,
aktivan boolean not null
);

create table dog_clan(
dogadaj int not null,
clan int not null
);

create table operater(
sifra int not null primary key auto_increment,
email varchar(50) not null,
lozinka varchar(255) not null,
ime varchar(50) not null,
prezime varchar(50) not null
);

insert into operater (email,lozinka,ime,prezime)  
values ('ivan@gmail.com','042dc4512fa3d391c5170cf3aa61e6a638f84342',
'Ivan','Knežević');
insert into operater (email,lozinka,ime,prezime)  
values ('edunova@edunova.hr','$2y$12$rLkAxNcXn8dUY1C3MUYVV.qceDJcVbVYZu7El75qAqkCR.cMnuwRC',
'Pero','Perić');

alter table clan add foreign key (bend) references bend(sifra);

alter table dogadaj add foreign key (bend) references bend(sifra);

alter table dog_clan add foreign key (clan) references clan(sifra);
alter table dog_clan add foreign key (dogadaj) references dogadaj(sifra);

insert into bend(sifra,username,email,lozinka,naziv_benda,logo) values
(null,'tscokanj','tscokanj@gmail.com','cokanj123','Tamburaški sastav Čokanj',null),
(null,'sokci','sokci@gmail.com','sokci123','Tamburaški sastav Šokci',null),
(null,'tamburasi','nht@gmail.com','nht123','Najbolji Hrvatski Tamburaši',null);

insert into dogadaj(sifra,naziv,napomena,datum_pocetka,datum_zavrsetka,cijena,narucitelj,adresa,bend) values
(null,'Svatovi','Ne svirati narodnjake! Kum ima milijune.','2018-07-21 12:00:00','2018-07-22 04:00:00','9000','Tomislav Jakopec','Alojzije Stepinca 39, Našice',1),
(null,'Rođendan','60.rođendan, dolazimo kao iznenađenje s pjesmom U san mi dođu tambure','2018-03-01 19:00:00','2018-03-01 23:59:00','2000','Marko Knežević','vijenac Ivana Meštrovića 12, Osijek',2),
(null,'Pratnja','Mladoženja je u Čepinu a mlada u Osijeku. Ide se po kuma u 14h. vjenčanje u 17h','2018-08-12 13:00:00','2018-08-12 17:00:00','2500','Pero Perić','kolodvorska 22, Čepin',1),
(null,'Zabava','Povodom proslave 50 godina NK Njive','2018-05-12 20:00:00','2018-06-12 02:00:00','3500','Miljenko Mumlek','Oranice 3, Njive',1),
(null,'Zabava','Valentinovska zabava','2018-02-14 20:00:00','2018-02-14 02:00:00','3500','Marija Marić','Zagrebačka ulica 94, Ilok',2),
(null,'Svatovi','Svirati samo tamburaške pjesme, kum Amte i mladoženja vole pjesmu duša becarska','2018-08-01 19:00:00','2018-08-01 02:00:00','35000','','kneza Branimira 101, Gospić',3),
(null,'Rođendan','Ovo je napomena','2017-08-01 19:00:00','2018-08-01 02:00:00','35000','','kneza Ivana 11, Zagreb',1),
(null,'Svatovi','Samo tamburaške pjesme','2018-01-11 19:00:00','2018-08-01 02:00:00','35000','','A.stepinca 101, Dalj',3),
(null,'Pratnja','Svirati samo tamburaške pjesme','2018-08-01 19:00:00','2018-08-01 02:00:00','35000','','kneza Branimira 101, Gospić',2),
(null,'Svatovi','Nema himne','2018-08-19 19:00:00','2018-08-01 02:00:00','35000','','brace radic 154, Našice',2),
(null,'Pratnja','kum Amte','2018-07-21 19:00:00','2018-08-01 02:00:00','35000','','kneza Branimira 101, Gospić',1),
(null,'Zabava','Divlja zabava','2018-10-20 19:00:00','2018-08-01 02:00:00','35000','','na livadi, Split',1),
(null,'Zabava','Lovačka','2018-08-01 19:00:00','2018-08-01 02:00:00','35000','','kneza Branimira 101, Gospić',3);

insert into clan(sifra,ime,prezime,email,bend,koeficijent,aktivan) values
(null,'Željko','Sinjeri','sinjeriz@gmail.com',1,'0.16',true),
(null,'Aleksandar','Orlić','aco@gmail.com',1,'0.16',true),
(null,'Danijel','Kos','kosilica@gmail.com',1,'0.16',true),
(null,'Gabriel','Lustig','lustig@gmail.com',1,'0.16',true),
(null,'Toni','Čikvar','ciki@gmail.com',1,'0.16',true),
(null,'Ivan','Knežević','knezevic@gmail.com',1,'0.16',true),
(null,'Miroslav','Ivanković','miro@gmail.com',3,'0.20',true),
(null,'Krunoslav','Mesić','kruno@gmail.com',3,'0.16',true),
(null,'Denis','Hrovat','denis@gmail.com',3,'0.16',true),
(null,'Mirko','Gašpar','gaspar@gmail.com',3,'0.16',true),
(null,'Matko','Jelavić','jelavic@gmail.com',3,'0.16',true),
(null,'Mato','Čačić','mata23@gmail.com',3,'0.16',true),
(null,'Leon','Jurić','leon@gmail.com',2,'0.20',true),
(null,'Siniša','Plenković','simba@gmail.com',2,'0.20',true),
(null,'Mislav','Đukić','djuro@gmail.com',2,'0.20',true),
(null,'Josip','Horvat','joza@gmail.com',2,'0.20',true),
(null,'Ivan','Kontraš','kontra@gmail.com',2,'0.20',true);





