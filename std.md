<html>
<body>
<div align="center"><h1> Software Testing Document </h1></div>

<p align="center"><b>Version 1.0 </b><br>
<p align="center">09 Mei 2018</b>
<p align="center">
<img src="https://2.bp.blogspot.com/-dxdRgMQGbLk/WpA-Tp2rNGI/AAAAAAAAAh8/3_jBWFb7Cf48033QvB34D2WCwoN2sxZLgCLcBGAs/s1000/index.png"/>
</p>

<br><p align="center"><b> Q-PRESS (QR-Kode Presensi)</b><br>
<p align="center"><b>Aplikasi Menggunakan Kode QR
</b>
<p align="center">Kelompok 8 <br>
 Koriah 				(1603103)<br>
 Bayu Rasukma Raga		(1603093)<br>
 Syamsul Fahri Hadi			(1603115)<br><br><br>

<p align="center"><b>Jurusan Teknik Informatika</b><br>
<p align="center"><b>Politeknik Negeri Indramayu</b>
</p>
</body>
</html>

## 1. Pendahuluan

### 1.1 Tujuan Pembuatan Dokumen

<p align="justify">
	Dokumen ini digunakan sebagai pandusan melakukan pengujian terhadap perangkat lunak pad asistem Aplikasi Q-Press yaitu Sistem Presensi Menggunakan QR - Code. Dokumen ini dipakai untuk melihat kemampuan dari program yang telah dirancang agar sesuai dengan perancangan sistem yang telah dibuat dan sesuai dengan keinginan pengguna. Sehingga, menghasilkan suatu sistem yang dapat mempermudah proses Presensi yang umumnya dilakukan secara manual. Pembuatan Dokumen ini ditujukan untuk menguji pernagkat lunak Sistem Presnsi Menggunakan QR - Code yang merupakan bagian dar tugas mata kuliah Rekayasa Perangkat Lunak.
</p>

### 1.2 Deskripsi Umum Sistem

<p align="justify"> 
	Pada umumnya sistem presensi kehadiran menggunakan pemanggilan dosen ke siswa satu per satu dengan menyebutkan nama dari siswa tersebut. Dalam penggunaan sistem tersebut, sangat memakan waktu dan tidak efesien, karena memakan banyak waktu dari jam mata kuliah. Selain itu, sistem presensi manual menggunakan banyak kertas sehingga terjadi pemborosan. Pembuatan kertas menggunakan bahan baku kulit pohon, jadi jika menggunakan banyak kertas tentunya menggunakan kulit pohon secara berlebihan, jika hal ini terjadi kemungkinan besar terjadinya kerusan alam.
	</p>

<p align="justify">
	Untuk itu, kelompok 8 mempunyai gagasan yang dapat meminimialisir dari tidak efesiennya sistem presensi sekarang, yaitu dengan membuat aplikas Q-PRES (QR-Code Presensi). Aplikasi menggunakan sistem scan kode QR untuk setiap presensi pada jadwal mata kuliah di setiap Lab atau Kelas. Dari sistemnya sendiri menggunakan 3 user, yaitu mahasiswa, dosen dan admin. 
</p>

<p align="justify">
	Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk pendaftaran. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama pendaftaran untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. 
</p>

Pada sistem siswa, terdapat beberapa fungsi utama yaitu : <br>

- Siswa dapat melihat jadwal perkuliahan.<br>
- Sebelum siswa melakukan presensi, dia akan mendapatkan notifikasi untuk memulai scan, jika berhasil melakukan scan siswa akan mendapat notifikasi scan telah berhasil.<br>
- Siswa dapat melihat jumlah kompen yang dia dapatkan karena keterlambatan maupun ketidakhadiran. <br>

<p align="justify">	
	Sedangkan pada sistem Dosen memiliki hak akses untuk membuka presensi. Setelah para mahasiswa telah melakukan presensi, maka dosen akan mendapat data siswa yang masuk pada mata kuliah hari itu. Jika hasilnya tidak sesuai maka untuk validasinya Dosen akan pengecekan ulang untuk memastikan. 
</p>

Pada sistem Dosen memiliki fungsi yaitu :<br>

- Dosen bisa melihat jadwal. <br>
- Dosen memilih jadwal yang akan dilaksanakan. <br>
- Mempunyai hak akses untuk membuka presensi untuk mahasiswa. <br>
- Melihat data kehadiran siswa. <br>
- Validasi siswa <br>

Pada sistem Admin yaitu : <br>

- Menerima data mahasiswa yang hadir secara otomatis. <br>
- Menginput data mahasiswa. <br>
- Menginput dosen. <br>
- Menginput jadwal Kuliah. <br>
- Presentase presensi mahasiswa per hari dan per semester. <br>


### 1.3 Deskripsi DOkumen (Ikhtisar)

<p align="justify">
	Pada Dokumen Software Testing Docoment (STD) terdapat 3 bagian utama yaitu Pendahuluan, Lingkungan Pengujian Perangkat Lunak, Identifikasi dan Rencana Pengujian.
	
</p>

### 1.4 Definisi dan Singkatan

#### 1.4.1 Definisi

<p align="justify"> 
	- SRS atau Software Requirements Spesification adalah dokumen yang mendeskrpisikan spesifikasi kebutuhan dari aplikasi yang akan dibuat. Pada dokumen ini dijelaskan bagaimana dan seperti apa rancangan aplikasi tersebut. 
 </p>
 <p align="justify">
    - SRS-xxx adalah kode yang digunakan unutk mempresentasikan kebutuhan (requirement) pada SRS, dengan SRS merupakan dokumen referensi yang menjadi acuan bagian tersebut, dan xxx adalah nomor/digit kebutuhan (requrement) pada bagian tersebut.
</p>
<p align="justify">
- DPPL-xxx adalah kode yang digunakan untuk mengimplementasikan perancangan. dengan xxx adalah nomor/digit perancangan.
</p>

#### 1.4.2 Singkatan

|       Akronim       |      Arti            	  |
|---------------------|---------------------------|
|STD				  | Software Testing Document |
|Q-Press              | QR-Kode Presensi	 	  |
|QR-Kode			  | Quick Response	  		  |


### 1.5 Dokumen Referensi

- Ernita H. GL03. Dokumen Uji Perangkat Lunak (DUPL) SDS. Bogor.
- Sistem Pentiketan Elektronik Konser.2013. Spesifikasi Kebutuhan Perangkat Lunak (SKPL)SPEK. Bogor.
- Sistem Pentiketan Elektronik Konser.2013. Dokumen Perancangan Perangkat Lunak (DPPL)SPEK. Bogor.


## 2. Lingkungan Pengujian Perangkat Lunak

### 2.1 Perangkat Lunak Pengujian

Aplikasi ini diujikan dengan beberapa perangkat lunak lain, seperti :

- Sistem Operasi 		: Windows 10
- Framework 			: Laravel
- Database				: Mysql dan Firebase

### 2.2 Perangkat Keras Pengujian

Perangkat keras yang digunakan untuk menguji aplikasi Q-Press ini adalah satu set PC atau Laptop dengan spesifikasi :

- Processor	: Intel Core i3
- Memory	: 6GB
- Harddisk	: 500GB

### 2.3 Material Pengujian

<p align="justify">
	Pada program Aplikasi Presensi Menggunakan QR - Code ini Mahasiswa dan Dosen dapat melakukan presensi menggunakan Device (Hp) yang digunakan. Dengan melakukan pendaftaran menggunakan MAC Address dari perangkat tersebut, satu akun hanya mempunyai MAC Address. Dari user mahasiswa menggunakan NIM dan MAC Address sebagai pendaftaran dan menggunakan akun ini sedangkan user dosen menggunakan NIP. 
</p>
<p align="justify">
	Mahasiswa dapat melakukan scan presensi apabila dosen telah membuka hak akses untuk presensi. Jika mahasiswa terlambat melakukan presensi maka terdapat keterangan dan akan masuk ke sistem data database untuk kompensasi keterlambatan. Dosen dapat melakukan validasi presensi dengan melakukan presensi secara manual dengan menyebutkan nama atau menghitung jumlah dari mahasiswa. Setelah mahasiswa melakukan presensi data presensi, data keterlambatan dan data absen akan masuk ke sistem Admin dan Sistem DOsen.
</p>
<p align="justify">
	Dari s=user Admin dapat mengelola data berupa Data Mahasiswa, Data Dosen, Data Mata Kuliah, Data Jadwal, dan Data Rekap.
</p>

### 2.4 Sumber Daya Manusia

Persyaratan sumber daya manusia yang akan terlibat dalam proses pengujian Aplikasi ini adalah :

- Memmahami konsep pemrograman berorientasi Objek 
- Memahami proses pengujian perangkat lunak berorientasi objek
- Memahami konsep pemrograman Framework dan Database

### 2.5 Prosedur Umum Pengujian

#### 2.5.1 Pengenalan dan Latihan 

#### 2.5.2 Persiapan Awal
##### 2.5.2.1 Persiapan Prosedural
Pengujian ini dilakukan di luar lingkungan kampus. Dimana pengujian ini dilakukan oleh Dosen mata kuliah Rekayasa Perangkat Lunak (RPL). Alat yang digunakan 1 buah laptop dengan software yang telah di instalasi.
##### 2.5.2.2 Persiapan Perangkat Keras
Perangkat keras yang perlu dipesiapkan adalah : 
Sebuah perangkat Laptop yang dilengkapi dengan : 
- Processor		: Intel® Core i3
- Memory		: 2 GB DDR3 
- Harddisk		: 100 GB
##### 2.5.2.3 Persiapan Perangkat Lunak
Persiapan yang harus dilakukan untuk menyiapkan perangkat lunak untuk diuji di lingkungan sistem operasi Microsoft Windows 10 adalah sebagai berikut :
1. Persiapkan sistem operasi Microsoft Windows. 
2. Perangkat lunak yang akan di uji di copy ke sebuah direktori, misalnya C:\XAMPP\htdocs. 
3. Browser Google Chrome. 
4. Database di import ke phpMyAdmin. 
5. Sublime Text 3 untuk melihat source code.

#### 2.5.3 Pelaksanaan
Pada bagian pelaksanaan ini. Aplikasi yang yang akan di Uji, dijalankan pada perangkat keras yang telah di sediaka yang berupa laptop. Pengujian akan dilaksanakan berdasarkan sekenario yang telah tersedia oleh penguji.
#### 2.5.4 Pelaporan Hasil
Setelah aplikasi diuji oleh penguji, kemudian laporan hasil dari pengujian tersebut akan diberikan kepada dosen pengampu Rekayasa Perangkat Lunak (RPL) yang akan di evaluasi. Sehingga dapat memberikan umpan balik antara penguji dan pembuat dalam pengembangan aplikasi tersebut.
