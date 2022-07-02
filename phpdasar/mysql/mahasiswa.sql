/*  Membuat tabel mahasiswa */
create table mahasiswa
	(	
		id int primary key auto_increment not null,
		nama varchar(100) not null,
		nrp char(9) not null,
		email varchar(100) not null,
		jurusan varchar(100)  not null,
		gambar varchar(100) not null
	);


/*  Menambahkan data pada tabel mahasiswa*/
insert into mahasiswa values

		('','Randie Azahli','004609694','randyboled@outlook.com','Teknik Informatika','profile.jpg'),
		('','Sandie Aditya','003242342','sandiAditya@gmail.com','Teknik Listrik','card1.jpg'),
		('','Wahyu Rizki','005435972','wahyuRizki@yahoo.com','Teknik Industri','card2.jpg');