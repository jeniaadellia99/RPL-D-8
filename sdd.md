<html>
<body>
<div align="center"><h1>Software Design Document</h1></div>

<p align="center"><b>Version 1.3 </b><br>
<p align="center">15 April 2018</b>
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

# BAB 1. PENDAHULUAN

### 1.1.  Tujuan

Dokumen SDD (Software Design Document) ini dibuat untuk tujuan sebagai berikut :
1.	Mendefinisikan dan menjelaskan hal-hal yang dilakukan dalam pengembangan aplikasi Q-Press sesuai informasi yang terdapat dalam SRS (Software Requirements Spesification).
2.	Menggambarkan  perancangan sistem yang akan dikembangkan dalam Q-Press, baik perancangan secara global maupun perancangan rinci, berdasarkan spesifikasi yang terdapat pada dokumen SRS  (Software Design Document) yang telah dibuat sebelumnya.
3.	Mendefinisikan dan mendeskripsikan secara terstruktur arsitektur sistem Q-Press yang dikembangkan meliputi perancangan deskrip proses, deskripsi antarmuka, dan lainya.
4.	Mempermudah proses pengembangan perangkat lunak pada tahap-tahap berikutnya.

### 1.2.  Lingkup Masalah

<p align="justify">
Penggunaan aplikasi Q-PRESS atau aplikasi Presensi menggunakan Kode QR merupakan sebuah bentuk inovasi teknologi yang dikembangkan penggunaannya dalam dunia pendidikan. Aplikasi Q-PRESS ini diharapkan dapat memberikan keefektifan dan keefesiesian dalam proses administrasi kehadiran. Pada sistem aplikasi ini mencakup data-data yang dibutuhkan dalam proses kehadiran seperti, data mahasiswa, data jadwal atau mata kuliah, data dosen, rekap presensi, rekap absensi. Kemudian data rekap absensi ini akan dijadikan sebagai data kompensasi bagi mahasiswa.
Proses presensi yang dilakukan dengan cara dosen harus membuka akses scan kode bagi para mahasiswa, dengan men-scan kode Lab yang digunakan sebagai ruangan pembelajaran. Setelah itu, mahasiswa dipersilahkan untuk mulai men-scan sebagai bentuk kehadiran. Jika mahasiswa mendapat kendala, maka dilakukan presensi secara manual melalui device dosen. Data mahasiswa yang telah men-scan kehadiran akan masuk ke dosen dan admin. Data tersebut akan dijadikan sebagai bukti kehadiran.
</p>

### 1.3.  Definisi dan Istilah
**13.1 Definisi**
<h4>1. Presensi</h4>
<p align="justify">Presensi adalah Kehadiran, yang berarti seseorang yang telah hadir atau menghadiri suatu acara atau kegiatan tertentu. Kata Presensi sendiri lebih banyak digunakan didalam dunia pendidikan.</p>

<h4>2. Kode QR</h4>
<p align="justify">Kode QR adalah suatu jenis kode matriks atau kode batang dua dimensi yang dikembangkan oleh Denso Wave, sebuah divisi Denso Corporation yang merupakan sebuah perusahaan Jepang dan dipublikasikan pada tahun 1994 dengan fungsionalitas utama yaitu dapat dengan mudah dibaca oleh pemindai QR merupakan singkatan dari quick response atau respons cepat, yang sesuai dengan tujuannya adalah untuk menyampaikan informasi dengan cepat dan mendapatkan respons yang cepat pula. Berbeda dengan kode batang, yang hanya menyimpan informasi secara horizontal, kode QR mampu menyimpan informasi secara horizontal dan vertikal, oleh karena itu secara otomatis Kode QR dapat menampung informasi yang lebih banyak daripada kode batang.</p>

<h4>3. Absesnsi</h4>
<p>Absensi adalah ketidak hadiran, yang berari seseorang yang tidak hadir dalam sebuah acara atau kegiatan tertentu</p>

**1.3.2 Istilah**

|       Akronim       |      Arti        |
|---------------------|------------------|
|Q-Press              |QR-Kode Presensi	 |
|QR-Kode			  |Quick Response	 |

### 1.4 Aturan Penamaan dan Penomoran

### 1.5 Referensi

IEEE, <i>IEEE Draft Standard for Software Design Descriptions. </i> IEEE P1 01 6/D5.0; 1 2 December 2005

Eka Ismantohadi & Moh. Yani, Software Design Document (SDD). 2018

https://www.visual-paradigm.com/support/documents/vpuserguide/3563/3564/85378_conceptual,l.html

https://www.1keydata.com/datawarehousing/physical-data-model.html

### 1.6 Ikhtisar Dokumen


# BAB II DESKRIPSI PERANCANGAN GLOBAL

### 2.1 Rancangan Lingkungan Implementasi

Pada Proses Pembuatan Aplikasi, hal-hal yang mendukung dalam pemrosesan pembuatan aplikasi seperti :
##### a. Sistem Operasi
Sistem Operasi yang digunakan adalah :
 - Microsoft Windows 7
 - Microsoft Windows 10

##### b. DBMS 
 - DBMS yang digunakan adalah Mysql dan Firebase

##### c. Development Tools
 - Android Studio
 - Sublime text 3

##### d. Bahasa Pemrograman
 - Pada Admin (Web)  menggunakan bahasa pemrograman PHP, HTML, Framework Laravel, Bootstrap dan CSS.
 - Pada Dosen dan Mahasiswa (Mobile) dalam pembuatannya menggunakan bahasa pemrograman android (java).


### 2.2 Deskripsi Data

Deskripsi tabel-tabel yang terdapat pada database pembuatan aplikasi Presensi Menggunakan QR-CODE adalah sebagai berikut :

**Tabel Mahasiswa**

|Nama Field  | Jenis    |  Volume  | Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_mhs| Integer| 10 | Primary Key| Iya |Auto_increment| id mhs auto increment |
| id_kelas| Integer| 10 | Tidak | Foreign Key | id_kelas pada kelas| relasi untuk menampilkan kelas |
| nim| varchar| 7 | Tidak | Tidak | - |nim mahasiswa |
| nama_mhs| varchar| 50 | Tidak | Tidak | -|nama mahasiswa |
| satus| varchar| 25 | Tidak | Tidak | -| status mahasiswa |

**Tabel Dosen**

|Nama Field | Jenis |Volume| Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_dosen| integer| 10 | Primary Key| Iya |Auto_increment| id dosen auto increment |
| nip | varchar| 10 | Tidak | Tidak | - |nip dosen |
| nidn| varchar | 10 | Tidak | Tidak | -| nidn dosen |
| nama_dosen | varchar| 50 | Tidak | Tidak | -| nama dosen |
| gelar | varchar| 20 | Tidak | Tidak | -| gelar dosen |


**Tabel Kelas**

|Nama Field | Jenis |Volume| Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_kelas| Integer| 10 | Primary Key| Iya |Auto_increment| id kelas auto increment |
| id_dosen| Integer| 10 | Foreign Key| Iya |id_dosen pada dosen| relasi untuk menampilkan wali dosen |
| nama_kelas| varchar| 7 | Tidak | tidak | -| nama kelas |

**Tabel Detail Kelas**

|Nama Field | Jenis |Volume| Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_detail_kelas| Integer| 10 | Primary Key| Iya |Auto_increment| id kelas auto increment |
| id_kelas| Integer| 10 | Foreign Key| Iya |id_dosen pada dosen| relasi untuk menampilkan wali dosen |
| id_matkul| Integer| 10 | Foreign Key | Iya |id_matkul pada mata_kuliah | relasi untuk menampilkan mata kuliah |
| id_dosen| Integer| 10 | Foreign Key | Iya |id_dosen pada dosen | relasi untuk menampilkan dosen wali |

**Tabel Mata Kuliah**

|Nama Field | Jenis |Volume| Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_matkul| Integer| 10 | Primary Key| Iya |Auto_increment| id mata kuliah auto increment |
| kode_matkul| Integer| 15 | Foreign Key| Iya |- | kode mata kuliah |
| nama_matkul | Varchar| 25 | Tidak | Tidak | - | untuk menampilkan mata kuliah |
| jumlah_sks | Integer| 3 | Tidak | Tidak | - | jumlah sks |
| sks_teori | Integer| 3 | Tidak | Tidak | - | sks teori |
| sks_praktek | Integer | 3 | Tidak | Tidak | - | sks praktek |
| semester | Integer| 2 | Tidak | Tidak | - | untuk menampilkan semester |

**Tabel Jadwal**

|Nama Field | Jenis |Volume| Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_jadwal| Integer| 10 | Primary Key| Iya |Auto_increment| id mata kuliah auto increment |
| thn_ajaran| varchar| 10 | Foreign Key| Iya |- | Tahun Ajaran |
| id_detail_kelas | Integer| 10 |  | Foreign Key | - | untuk menampilkan kelas |
| id_ruangan | Integer| 10 | Iya | Foreign Key | id_ruangan pada ruangan | relasi menampilkan ruangan |
| waktu_mulai | Varchar| 10 | Tidak | Tidak | - | waktu mulai mata kuliah |
| waktu_selesai | Varchar | 10 | Tidak | Tidak | - | waktu berakhir mata kuliah |
| hari | varchar| 7 | Tidak | Tidak | - | untuk menampilkan hari |

**Tabel Ruangan**

|Nama Field | Jenis |Volume| Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_ruangan| Integer| 10 | Primary Key| Iya |Auto_increment| id ruangan auto increment |
| ruangan| Varchar| 20 | Tidak | Tidak |- | Keterangan Ruangan |

**Tabel Rekap**

|Nama Field | Jenis |Volume| Laju| Primary Key| contraint integrity| Deskripsi|
|------------|----------|----------|-------------|-----------|-----------|---------------------|
| id_rekap| Integer| 10 | Primary Key| Iya |Auto_increment| id rekap |
| semester | Integer| 2 | tidak| tidak | - | semester |
| thn_ajaran | varchar | 10 | tidak | tidak |- | semester |
| id_kelas| Integer| 10 | foreign key| tidak | id_kelas pada kelas | relasi id_kelas pada kelas |
| id_mhs| Integer| 10 | foreign key | tidak | id_mhs pda mahasiswa| menampilkan nama mahasiswa  |
| id_matkul| Integer| 10 | foreign key| tidak | id_matkul pada mata kuliah| id_matkul pada mata kuliah |
| id_dosen | Integer| 10 | foreign key | tidak | id_dosen pada dosen | menampilkan dosen |
| absen | varchar | 10 | tidak | tidak | - | - |
| keterlambatan | varchar | 10 | tidak | tidak | - | - |


#### 2.2.1 Definisi Domain/Type

##### Admin

| Domain Name| Keterangan|
|--|--|
|id_admin|Primary Key|
|username|String|
|password|String|

##### Data Mahasiswa

| Domain Name| Keterangan|
|--|--|
|id_mhs|Primary Key|
| nim| String |
| nama_mhs |String|
|id_kelas|Integer|
|status|String |

##### Data Dosen

| Domain Name | Keterangan |
|--|--|
|id_dosen  | Primary Key|
|id_kelas  | Integer |
| nip | Integer|
| nidn | Integer|
| nama_dosen | String|

##### Data Matkul 

|Domain Name  | Keterangan |
|--|--|
| id_matkul | Primary Key|
| kd_matkul | forigen key|
| nama_matkul | String|
| sks_teori | strimg |
| sks_praktik |String|
| jumlah_sks| String |

##### Data Kelas

| Domain Name| Keterangan|
|--|--|
| id_kelas |Primary Key|
| nama_kelas|String|
| id_dosen  | Integer|

##### Data Detail Kelas

| Domain Name| Keterangan|
|--|--|
| id_detail_kelas |Primary Key|
| id_kelas |Integer|
| id_matkul  | Integer|

##### Jadwal Kuliah

| Domain Name| Keterangan |
|--|--|
| id_jadwal | Primary Key |
| id_detail_kelas| Integer|
| id_ruangan | Integer|
| waktu_mulai| String|
| waktu_selesai| String|
| String|hari|

##### Data Ruangan 

|Domain Name  | Keterangan |
|--|--|
| id_ruangan | Primary Key|
|nama_ruangan|String|

#####  Absen 

| Domain Name |Keterangan  |
|--|--|
|id_absen|Primary Key|
|id_matkul  |  forigen key|
|id_kelas|forigen key|
|id_dosen|forigen key|
|id_ruangan|forigen key|
|waktu|waktu disaat matkul dimulai|
|keterlambatan|waktu yang di berikan untuk toleransi keterlambatan|

#####  Detail Absen

| Domain Name | Keterangan |
|--|--|
| id_absen | forigen key|
|id_mhs|forigen key|
|status|status kehadiran mahasiswa|
|waktu_scan| waktu scan yang dilakukan mahasiswa|

#####  Rekap 

|Domain Name|Keterangan  |
|--|--|
| id_rekap| Primary Key|
|kd_matkul|forigen key|
|id_kelas|forigen key|
|id_dosen|forigen key|
|semester|semester ganjil/genap|
|tahun_ajaran|tahun ajaran|

##### Detail Rekap

| Domain Name | Keterangan  |
|--|--|
|id_rekap | forigen key|
|id_mhs|forigen key|
|hadir|jumlah kehadiran mahasiswa|
|absen|jumlah absen mahasiswa|
|keterlambatan|jumlah menit keterlambatan mahasiswa|
|kompensasi|jumlah menit kompensasi yang didapatkan oleh mahasiswa|

#### 2.2.2 Conceptual Data Model

![cdm](https://2.bp.blogspot.com/-Du45OdYDQJ4/WtM1pQu-ylI/AAAAAAAAAzk/WOOTN_LxE1U69sAbqKU2I5cNVaFY-ojPACLcBGAs/s900/cdm.JPG)

#### 2.2.3 Physical Data Model

![pdm](https://4.bp.blogspot.com/-jkK6R63vmjY/WtM3HhPlOiI/AAAAAAAAAzw/pqrNF1zFNlYLYPNx5MCFnkdCl0TrGMblQCLcBGAs/s900/pdm.JPG)

#### 2.2.4 Daftar Tabel Aplikasi

##### Tabel Mahasiswa

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_mhs| Primary key | D5 | Auto increment | Nomer auto increment Id_mahasiswa|
| Id_kelas| Foreign key | D5 | - | referensi key pada tabel kelas, id_kelas|
| nim| unique | D5 | - | nim mahasiswa nomer harus unik |
| nama_mhs| - | D5 | - | Nama Mahasiswa|
| status| -| D5 | - | menyatakan status keaktifan mahasiswa|

##### Tabel Dosen

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_dosen| Primary key | D6 | Auto increment | Nomer auto increment Id_dosen|
| nik| - | D6 | - | nomor induk karyawan|
| nidn | - | D6 | - | nomor dosen|
| nama_dosen| - | D6 | - | Nama Dosen|

##### Tabel Kelas

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_kelas| Primary key | D4 | Auto increment | Nomer auto increment Id_kelas|
| nama_kelas| - | D5 | - | keterangan setiap kelas|
| id_dosen | Foreign key| D4 | - | relasi dengan id_dosen pada tabel dosen untuk menampilkan wali kelas|

##### Tabel Detail Kelas

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_detail_kelas| Primary key | D4 | Auto increment | Nomer auto increment Id_kelas|
| Id_kelas| Foreign key | D4 | - | Nomer auto increment Id_kelas|
| id_matkul| - | D4 | - | keterangan mata kuliah|

##### Tabel Mata Kuliah

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_detail_kelas| Primary key | D7 | Auto increment | Nomer auto increment Id_kelas|
| Id_kelas| Foreign key | D7 | - | Nomer auto increment Id_kelas|
| id_matkul| - | D7 | - | keterangan mata kuliah|

##### Tabel Jadwal

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_jadwal| Primary key | D2 | Auto increment | Nomer auto increment Id_jadwal|
| Id_detail_kelas| Foreign key | D2 | - | berelasi dengan tabel detail_kelas, Id_detail_kelas|
| id_ruangan| Foreign Key | D2 | - | berelasi dengan tabel ruangan, id_ruangan|
| thn_ajaran| - | D2 | - | tahun ajaran jadwal kuliah|
| waktu_mulai| - | D2 | - | waktu muliai jam jadwal|
| waktu_selesai| - | D2 | - | waktu berakhirnya jam jadwal|
| hari| - | D2 | - | hari jadwal|

##### Tabel Ruangan

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_ruangan| Primary key | D8 | Auto increment | Nomer auto increment Id_ruangan|
| ruangan| - | D8 | - | Nama ruangan pembelajaran|

##### Tabel User

| Nama Tabel  | Primary Key | Data Store | E/R | Deskripsi isi |
| ------ | ------ | ------ | ------ | ------ | 
| Id_user| Primary key | D1 | Auto increment | Nomer auto increment Id_user|
| mac| - | D1 | - | digunakan untuk username pengguna|
| nip| - | D1 | - | digunakan sebagai username dosen|
| nim| - | D1 | - | digunakan sebagai username mahasiswa|

### 2.3 Deskripsi Modul

| No | Nama Modul  | Keterangan |
|----|-------------|------------|
| 1  | Mahasiswa   | Modul yang mencakup input, edit, delete dan update  semua data mahasiswa  |
| 2  | Dosen       | Modul yang mencakup input, edit, delete, dan update semua data dosen  |
| 3  | Mata Kuliah | Modul yang mencakup input, edit, dekete, dan update semua data Mata Kuliah |
| 4  | Jadwal      | Modul yang digunakan untuk membuat jadwal, mendownload jadwal, dan menampilkan jadwal |
| 5  | Ruangan     | Modul yang mencakup input, edit, dekete, dan update semua data Mata Kuliah           |
| 6  | Rekap       | Modul yang digunakan untuk mendata semua hasil presensi, absensi, dan kompensasi            |
| 7  | Otentikasi  | Modul yang di gunakan untuk vailidasi akses masuk ke sistem Q-Press baik di web maupun di android |
| 8  | Kelas       | Modul yang mencakup input, edit, dekete, dan update semua data kelas           |
| 9  | Scan        | Modul yang digunakan untuk mendata presensi yang di ambil pada saat mata kuliah di mulai   |


# 3. Deskripsi Perancangan Rinci

### 3.1 Diagram Konteks

<p align="justify">Diagram konteks adalah diagram yang terdiri dari suatu proses dan menggambarkan ruang lingkup suatu sistem. Diagram konteks merupakan level tertinggi dari DFD yang menggambarkan seluruh input ke dalam sistem atau output dari sistem yang memberi gambaran tentang keseluruhan sistem. Sistem dibatasi oleh boundary (Digambarkan dengan garis putus - putus). Dalam diagram konteks hanya ada satu proses, tidak boleh ada store dalam diagram konteks. Berikut ini adalah gambar diagram konteks dari sistem Aplikasi Q-Press.</p>

![diagram-konteks](https://3.bp.blogspot.com/-ENgHjQKp8IE/WtHJM6mzcYI/AAAAAAAAAx0/2sP3lzvUyCgOZlfgJ7nxGOokuGfGEd9hQCLcBGAs/s600/1-konteks.JPG)

#### 3.1.1 DFD Level 0 

<p align="justify">Data Flow Diagram atau biasa disingkat dengan DFD adalah salah satu cara untuk memodelkan proses dalam analisis dan perancangan perangkat lunak, khususnya dengan pendekatan terstruktur.  Berikut DFD Level 0 Aplikasi Q-Press.</p>

![level 0](https://1.bp.blogspot.com/-vcaDv1shpM4/WtHMIL0-zdI/AAAAAAAAAyI/bXa2eP9orWAvL-FPYW68tLhFZ1i5S_lOwCLcBGAs/s1600/2-level+0.JPG)

#### 3.1.2 DFD Level 1 : Proses 1 - Otentikasi

DFD Level 1 ini penjelasan dari DFD Level 0 yang sebelumnya, berikut DFD level 1 yang menjelaskan Proses 1 Daftar akun. Data yang dikirim oleh mahasiswa dan dosen akan di vailidasi terlebih darhulu

![level 1 proses1](https://1.bp.blogspot.com/-sBpCjLbLDro/WtHLOwHeYKI/AAAAAAAAAyA/1j0un0s7eR4xkDl2Z-Q76rYUSuMgxjVOACLcBGAs/s600/3-Level+1-proses+1.JPG)

#### 3.1.3 DFD Level 1 : Proses 2 - Data Jadwal

Pada DFD Level 1 ini menjelaskan proses 2 dari DFD Level 0. Admin sebelumnya mengolah jadwal lalu akan di tampilkan ke dosen dan mahasiswa, dosen bisa mengubah jadwal dan melihat jadwal, dan mahasiswa  hanya bisa melihat jadwal.

![enter image description here](https://3.bp.blogspot.com/-knvvADDrpnA/WqO9dDdiaKI/AAAAAAAAA64/3fUCnuOp15AZiaOpkSbs5Jvo_lq72sXmACLcBGAs/s600/dfd+level+1+proses+2.jpg)

#### 3.1.4 DFD Level 1 : Proses 3 - Data Scan

Pada DFD Level 1 ini menjelaskan Proses 3 yang ada di DFD Level 0. Mahasiswa baru bisa scan setelah dosen mengaktifkan sistem scan kemudian mahasiswa yang berhasil scan akan terlihat di list scan yang ada di dosen

![enter image description here](https://2.bp.blogspot.com/-5zEGPb69OvE/WqO9eHQwwhI/AAAAAAAAA7A/MXoRub7UMmM1y20-53VhTTRD_CM6C52qwCLcBGAs/s600/dfd+level+1+proses+3.jpg)

#### 3.1.5 DFD Level 1 : Proses 4 - Data Kelas

DFD Level 1 menjelaskan proses 4 yang tersapat pada DFD level 0. Dimana Admin dapat memanagement Data Kelas seperti Mengerdit, Menghapus dan Menambahkan Kelas.

![dfd4datakelas](https://2.bp.blogspot.com/-3gg_8m71oug/WqUxAyMeuiI/AAAAAAAAAuE/4cz07FG6NaIkYwLIV0coPfNZvsQlsTc5ACLcBGAs/s600/dfd+data+kelas.JPG)

#### 3.1.6 DFD Level 1 : Proses 5 - Data Mahasiswa

DFD Level 1 menjelaskan proses 5 yang terdapat pada DFD level 0. Admin dapat mengelola atau memanagement Data Mahasiswa seperti menghapus, mengedit dan menambahkan Data Mahasiswa. 

![dfdmhs](https://1.bp.blogspot.com/-vxcmFP-msAQ/WqUywuuFZOI/AAAAAAAAAuQ/V_PkOcC95toual3f7rIxm-jAj0xb3S7xwCLcBGAs/s600/dfd+data+mhs.JPG)

#### 3.1.7 DFD Level 1 : Proses 6 - Data Dosen

DFD Level 1 menjelaskan proses 6 yang terdapat pada DFD level 0. Admin dapat mengelola atau memanagement Data Dosen seperti menghapus, mengedit dan menambahkan Data Dosen.

![dfddatadosen](https://3.bp.blogspot.com/-wYcbP3bMLCI/WqUz3qAhsbI/AAAAAAAAAuY/TLjr8zLgsJAd_FacmGzjkYVHACiBlsHeQCLcBGAs/s600/dfd+data+dosen.JPG)

#### 3.1.8 DFD Level 1 : Proses 7 - Rekap

DFD Level 1 menjelaskan proses 7 yang terdapat pada DFD level 0. Dimana admin dan dosen dapat mendownload data Rekap Kehadiran Mahasiswa.

![enter image description here](https://2.bp.blogspot.com/-wI-1Wwn2Apo/WqU6kLZIgqI/AAAAAAAAAuo/4cqL1f3YvcEL_0O1Jvr0NhTKSSVvbu97ACLcBGAs/s600/dfd+rekap.JPG)

#### 3.1.9 DFD Level 1 : Proses 8 - Data Mata Kuliah

DFD Level 1 Proses 9 menjelaskan tentang mata kuliah

![enter image description here](https://2.bp.blogspot.com/-fhVEsMZ2vvA/Wrf2T2duVcI/AAAAAAAAAvs/5w6e27EL9dQR9bstOabvFbVVxwbKgt5xACLcBGAs/s600/9-Level+1-proses+8.JPG)

#### 3.1.10 DFD Level 1 : Proses 9 - Data Ruangan

DFD Level 1 Proses 8 menjelaskan tentang alur data ruangan

![enter image description here](https://2.bp.blogspot.com/-8jYs6vOu_JY/Wrf150s97II/AAAAAAAAAvo/X7-eqRiYDQ0OrhCLM3FMMu4vTHjcp28cwCLcBGAs/s600/10-Level+1-proses+9.JPG)

### 3.2 Deskripsi Rinci Tabel

#### 3.2.1 Mata Kuliah

Identifikasi/Nama 	: mata_kuliah
Deskripsi Isi 		: data mata kuliah 
Jenis 				: tabel data induk
Volume 				: 7 field
Laju 				: -
Primary Key 		: id_matkul

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_matkul | id mata kuliah | int (10) | No | AUto Increment |
|kode_matkul | kode mata kuliah | int (15) | No | Untuk kode mata kuliah|
|nama_matkul| nama mata kuliah | varchar (25)| No | Nama mata kuliah|
|jumlah_sks| jumlah sks | int (3)| No | Jumlah SKS|
|sks_teori| sks praktek | int (3)| No | sks praktek|
|semester| semester | int (2)| No | semester|

#### 3.2.2 Mahasiswa

Identifikasi/Nama 	: mahasiswa
Deskripsi Isi 		: data mahasiswa
Jenis 				: tabel data induk
Volume 				: 5 field
Laju 				: -
Primary Key 		: id_mhs

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_mhs | id mahasiswa | int (10) | No | AUto Increment |
|id_kelas | id_kelas| int (10) | No | relasi untuk menampilkan kelas|
|nim | nim mahasiswa| varchar (7)| No | nim mahasiswa|
|nama_mhs| nama mahasiswa | varchar (50)| No | nama mahasiswa|
|status| status | varchar (25)| No | status aktif atau tidak aktif|

#### 3.2.3 Dosen

Identifikasi/Nama 	: dosen
Deskripsi Isi 		: data dosen
Jenis 				: tabel data induk
Volume 				: 5 field
Laju 				: -
Primary Key 		: id_dosen

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_dosen| id dosen | int (10) | No | Auto Increment |
|nip | nip dosen| varchar  (10) | No | nip dosen|
|nidn | nim mahasiswa| varchar (7)| No | nidn dosen|
|nama_dosen| nama mahasiswa | varchar (50)| No | nama dosen|
|gelar| status | varchar (20)| No | status gelar dosen|


#### 3.2.4 Kelas

Identifikasi/Nama 	: kelas
Deskripsi Isi 		: data kelas
Jenis 				: tabel data induk
Volume 				: 3 field
Laju 				: -
Primary Key 		: id_kelas

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_kelas| id dosen | int (10) | No | Auto Increment |
|id_dosen | id dosen | int (10)  | No | nama dosen relasi dengan tabel dosen|
|nama_kelas| nama kelas | varchar (7)| No | nama kelas|

#### 3.2.4 Detail Kelas

Identifikasi/Nama 	: detail kelas
Deskripsi Isi 		: data detail kelas
Jenis 				: tabel data induk
Volume 				: 4 field
Laju 				: -
Primary Key 		: id_detail_kelas

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_detail_kelas| id dosen | int (10) | No | Auto Increment |
|id_kelas | id kelas| int (10)  | No | nama kelas relasi dengan tabel kelas|
|id_matkul| id matkul | int (10)| No | nama matkul relasi dengan tabel matkul|
|id_dosen| id dosen | int (10)| No | nama dosen |

#### 3.2.5 Jadwal

Identifikasi/Nama 	: jadwal
Deskripsi Isi 		: data jadwal
Jenis 				: tabel data induk
Volume 				: 7 field
Laju 				: -
Primary Key 		: id_jadwal

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_jadwal| id jadwal | int (10) | No | Auto Increment |
|thn_ajaran | tahun ajaran| varchar (10)  | No | foreign key|
|id_detail_kelas| id detail kelas | int (10)| No | foreign key|
|id_ruangan| id ruangan | int (10)| No | foreign key|
|hari| hari | varchar (7)| No | hari |
|waktu_mulai| waktu mulai | varchar (10)| No | waktu mulai |
|waktu_selesai| waktu_selesai | int (10)| No | waktu selesai |

#### 3.2.6 Ruangan

Identifikasi/Nama 	: ruangan
Deskripsi Isi 		: data ruangan
Jenis 				: tabel data induk
Volume 				: 2 field
Laju 				: -
Primary Key 		: id_ruangan

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_ruangan| id ruangan | int (10) | No | Auto Increment |
|ruangan| ruangan | varchar (20)  | No | keterangan ruangan|

#### 3.2.7 Rekap

Identifikasi/Nama 	: rekap
Deskripsi Isi 		: data rekap
Jenis 				: tabel data induk
Volume 				: 9 field
Laju 				: -
Primary Key 		: id_rekap

|Id Field | Deskripsi | Tipe & Length | Boleh Null | Keterangan |
|--------------|----------------|--------------------|------------------------|---------------------------|
|id_rekap| id rekap | int (10) | No | Auto Increment |
|semester| semester | int (2)  | No | keterangan semester|
|thn_ajaran| tahun ajaran | varchar (10)  | No | keterangan tahun ajaran|
|id_kelas| id kelas | int (20)  | No | keterangan nama kelas|
|id_mhs| id mahasiswa | int (20)  | No | keterangan nama mahasiswa|
|id_matkul| id mata kuliah | int (20)  | No | keterangan nama mata kuliah|
|id_dosen| id dosen | int (20)  | No | keterangan nama dosen|
|absen| absensi | varchar (10)  | No | keterangan tidak hadir|
|presensi| presensi | varchar (10)  | No | keterangan kehadiran|
|keterlambatan| keterlambatan | varchar (10)  | No | keterangan terlambat|

### 3.3 Deskripsi Rinci Modul

#### 3.3.1 Modul Mahasiswa

##### 3.3.1.1 Fungsi Modul

| No | Fungsi                     | Jenis                       | Tabel Terkait | Kategori |
|----|----------------------------|-----------------------------|---------------|----------|
| 1  | Input Data Mahasiswa       | Import File                 | mahasiswa     | WEB      |
| 2  | Update Data Mahasiswa      | Import File atau Form Modal | mahasiswa     | WEB      |
| 3  | Delete Data Mahasiswa      | Button Warning              | mahasiswa     | WEB      |
| 4  | Menampilkan Data Mahasiswa | Tabel                       | mahasiswa     | WEB      |
| 5  | Scan                       | ButtonView                  | rekap         | Android  |
| 6  | Lihat Jadwal               | ButtonView                  | jadwal        | Android  |


##### 3.3.1.2 Spesifikasi Layar Utama

| WEB                                                                                                                                       |
|:-------------------------------------------------------------------------------------------------------------------------------------------:|
| ![modul-mhs](https://1.bp.blogspot.com/-EpXHD527vTA/WtHQrwMk1tI/AAAAAAAAAyU/8R0t9aq9_Jcf8xoQRKhtur7W6cZPP9cGgCLcBGAs/s1000/modul-mhs.JPG) |
| Android                                                                                                                                   |
| <img src="https://4.bp.blogspot.com/-DyFF8Nq7184/WtL7quRjZYI/AAAAAAAAA-E/D3ZRk-kRx4UbTrjiqApAP4yY3e-bb1hPgCLcBGAs/s1600/Screenshot_2018-04-15-11-26-46-300_ga.reang.www.materialdesign.png" width="50%" height="50%" />                                                                                                                                          |

##### 3.3.1.3 Spesifikasi Query

| ID Query | Deskripsi             | Ekspresi Query                                                        |
|----------|-----------------------|-----------------------------------------------------------------------|
| QRY-01   | Input Data Mahasiswa  | INSERT INTO mahasiswa SET nama_mahasiswa="$nm_mahasiswa", nim="$nim"; |
| QRY-02   | Delete Data Mahasiswa | DELETE FROM mahasiswa WHERE id_mahasiswa="$id";                       |
| QRY-03   | Update Data Mahasiswa | UPDATE mahasiswa SET nama_mahasiswa="$nm_mahasiswa", nim="$nim";      |
| QRY-04   | Lihat Data Mahasiswa  | SELECT * FROM mahasiswa;      										   |

##### 3.3.1.4 Spesifikasi Field Data Layar

| Label    | Field          | Tabel/Query | Validasi                                     | Keterangan                                                                                                                     |
|----------|----------------|-------------|----------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------|
| id_mhs   | id_mhs         | mahasiswa   | -                                            | primary key dan diinputkan otomatis oleh sistem                                                                                |
| nama_mhs | nama_mahasiswa | mahasiswa   | required, regex:/^[a-zA-Z]+$/u, string, max:255 | nama mahasiswa diinputkan manual oleh admin                                                                                    |
| nim      | nim            | mahasiswa   | required, string, max:7, min:7, number                  | nim mahasiswa diinputkan manual oleh admin, inputkan harus angka namun disimpan dalam string maksimal 7 dan minimal 7 karakter |
| kelas    | id_kelas       | kelas       | -                                            | forigen key yang di ambil dari kelas menandakan mahasiswa ini memiliki kelas tersebut dan ini dipilih oleh admin               |

##### 3.3.1.5 Spesifikasi Objek-objek pada Layar

| id_objek     | Jenis           | keterangan                                            | Kategori |
|--------------|-----------------|-------------------------------------------------------|----------|
| nm_mahasiswa | Input type Text | Nama Mahasiswa                                        | WEB      |
| nim          | Input type number | NIM Mahasiswa                                         | WEB      |
| kelas        | Select          | Kelas yang di ikuti                                   | WEB      |
| btnSimpan    | Button Submit   | Tombol untuk menyimpan data mahasiswa yang di masukan | WEB      |
| btnEdit      | Button Primary  | Tombol untuk memunculkan Modal edit mahasiswa         | WEB      |
| btnUpload    | Input type File | Untuk mengupload file .csv atau .xlsx                 | WEB      |
| btnDownload  | Button Info     | Untuk mendownload tamplate file excel mahasiswa       | WEB      |
| btnBatal     | Button          | Tombol untuk membatalkan input                        | WEB      |
| tvNmMhs      | TextView        | Nama Mahasiswa                                        | Android  |
| tvAbsen      | TextView        | Absen yang diperoleh                                  | Android  |
| tvKompensasi | TextView        | Kompensasi yang diperoleh                             | Android  |
| tvPresensi   | TextView        | Presensi yang diperoleh                               | Android  |
| btnScan      | ButtonView      | Tombol untuk menscan ruangan                          | Android  |
| btnLihatJdwl | ButtonView      | Tobol untuk melihat jadwal                            | Android  |

##### 3.3.1.6 Spesifikasi Proses/Algoritma

OP04 : Tambah Mahasiswa <br>
Objek Terkait : nm_mahasiswa, nim, kelas <br>
Event : Tambah mahasiswa

| Inisial State (IS)    |
|-----------------------|
| Form mahasiswa kosong |


| Final State (FS)    |
|-----------------------|
| Tabel mahasiswa di update dengan data yang baru |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF data mahasiswa sudah ada|
| THEN data tidak di masukan dan ulang input|
| ELSE masukan data ke database dan update data mahasiswa yang lama|

#### 3.3.2 Modul Dosen

##### 3.3.2.1 Fungsi Modul

| No | Fungsi            | Jenis          | Tabel Terkait | Kategori |
|----|-------------------|----------------|---------------|----------|
| 1  | Input Data Dosen  | Form Modal     | dosen         | WEB      |
| 2  | Delete Data Dosen | Button Warning | dosen         | WEB      |
| 3  | Update Data Dosen | Form Modal     | dosen         | WEB      |
| 4  | Lihat Data Dosen  | Tabel          | dosen         | WEB      |
| 5  | Mulai Scan        | ButtonView     | rekap         | Android  |
| 6  | Lihat detail SKS  | RecyclerView   | mata_kuliah   | Android  |
| 7  | Lihat Jadwal      | ButtonView     | jadwal        | Android  |
| 8  | Lihat Rekap       | ButtonView     | rekap         | Android  |

##### 3.3.2.2 Spesifikasi Layar Utama

| WEB                                                                                                                                       |
|:-------------------------------------------------------------------------------------------------------------------------------------------:|
| ![moduldosen](https://2.bp.blogspot.com/-5rg2Mufruw8/WtHR3Slj_bI/AAAAAAAAAyg/CkEuJfaLaWcgzkB4wEkOamnkO364zl_4QCLcBGAs/s1000/modul-dosen.JPG) |
| Android                                                                                                                                   |
| <img src="https://2.bp.blogspot.com/-QBLa7tZDHzk/WtMGIhxkkLI/AAAAAAAAA-U/UOQLH6PxCoAn3oBl54TZYvkMnyFpfTkGwCLcBGAs/s1600/Screenshot_2018-04-15-11-18-44-199_ga.reang.www.materialdesign.png" width="50%" height="50%" />   


##### 3.3.2.3 Spesifikasi Query

| ID Query | Deskripsi         | Ekspresi Query                                                                          |
|----------|-------------------|-----------------------------------------------------------------------------------------|
| QRY-01   | Input Data Dosen  | INSERT INTO dosen SET nama_dosen="$nm_dosen", nip="$nip", nidn="$nidn", gelar="$gelar"; |
| QRY-06   | Delete Data Dosen | DELETE FROM dosen WHERE id_dosen="$id";                                                 |
| QRY-07   | Update Data Dosen | UPDATE dosen SET SET nama_dosen="$nm_dosen", nip="$nip", nidn="$nidn", gelar="$gelar";  |
| QRY-08   | Lihat Data Dosen  | SELECT * FROM dosen                                                                     |


##### 3.3.2.4 Spesifikasi Field Data Layar

| Label    | Tabel/Query | Validasi                                           | Keterangan                                                                          |
|----------|-------------|----------------------------------------------------|-------------------------------------------------------------------------------------|
| id_dosen | dosen       | -                                                  | Primary key diinputkan otomatis oleh sistem                                         |
| nm_dosen | dosen       | required, regex:/^[A-Za-z\s-_]+$/, string, max:255 | nama dosen diinputkan manual oleh admin                                             |
| nidn     | dosen       | required, string, max:8, min:8, number             | nidn diinputkan manual oleh admin, inputan berupa angka namun disimpan dalam string |
| nip      | dosen       | required, string, min:10, max:10, number           | nip diinputkan manual oleh admin, inputan berupa angka namun disimpan dalam string  |
| gelar    | dosen       | required, string, regex:/^[A-Za-z\s-_]+$/          | gelar diinputkan manual oleh admin                                                  |
|          |             |                                                    |                                                                                     |

##### 3.3.2.5 Spesifikasi Objek-objek pada Layar

| id_objek     | Jenis           | keterangan                                                                       | Kategori |
|--------------|-----------------|----------------------------------------------------------------------------------|----------|
| nm_mahasiswa | Input type Text | Nama Mahasiswa                                                                   | WEB      |
| nidn          | Input type number | NIDN dosen                                                                  | WEB      |
| nip          | Input type number | nip dosen                                                                  | WEB      |
| kelas        | Select          | Wali Kelas                                                                       | WEB      |
| btnSimpan    | Button Primary  | Timbol untuk menyimpan data mahasiswa yang sudah di inputkan                     | WEB      |
| btnBatal     | Button Default  | Tombol untuk membatalkan input                                                   | WEB      |
| btnEdit      | Button Success  | Tombol untuk menampilakn modal edit dosen                                        | WEB      |
| btnMulai     | ButtonView      | Tombol untuk memulai scan                                                        | Android  |
| btnDetail    | ButtonView      | Tombol untuk melihat detail SKS                                                  | Android  |
| tvMatKul     | TextView        | Nama matkul                                                                      | Android  |
| tvJam        | TextView        | Menampilkan jam mulai dan berakhir mata kuliah                                   | Android  |
| tvRuangan    | TextView        | Menampilkan Ruangan yang digunakan                                               | Android  |
| cardMatkul   | CardView        | ViewGroup untuk mata kuliah (tvMatkul, tvJam, tvRuangan, btnMulai, dan btnDetail | Android  |
| btnRekap     | ButtonView      | Tombol untuk mendownload Rekap                                                   | Android  |
| btnJadwal    | ButtonView      | Tombol untuk mendownload Jadwal                                                  | Android  |

##### 3.3.2.6 Spesifikasi Proses/Algoritma

OP05 :Tambah Dosen <br>
Objek Terkait : nm_dosen, nidn, nip, gelar <br>
Event : Tambah Dosen

| Inisial State (IS)    |
|-----------------------|
| Form dosen kosong |


| Final State (FS)    |
|-----------------------|
| Form dosen diupdate dengan data yang baru |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF data dosen sudah ada|
| THEN data tidak di masukan dan ulang input|
| ELSE masukan data ke database dan update data dosen yang lama|


#### 3.3.3 Modul Data Kelas

##### 3.3.3.1 Fungsi Modul

| No | Fungsi            | Jenis          | Tabel Terkait | Kategori |
|----|-------------------|----------------|---------------|----------|
| 1  | Input Data Kelas  | Form Modal     | kelas         | WEB      |
| 2  | Update Data Kelas | Form Modal     | kelas         | WEB      |
| 3  | Delete Data Kelas | Button Warning | kelas         | WEB      |
| 4  | Lihat Data Kelas  | Tabel          | kelas         | WEB      |

##### 3.3.3.2 Spesifikasi Layar Utama

![modul-kelas](https://2.bp.blogspot.com/-bMQFn6qQd9c/WtLz_7gR2PI/AAAAAAAAA90/cZICjrn9CCISExBxqMhtD9jInwaVUrkugCLcBGAs/s1600/kelas.PNG)

##### 3.3.3.3 Spesifikasi Query

| ID Query | Deskripsi         | Ekspresi Query                                                    |
|----------|-------------------|-------------------------------------------------------------------|
| QRY-09   | Input Data Kelas  | INSERT INTO kelas SET nama_kelas="$nm_kelas", jenjang="$jenjang"; |
| QRY-10   | Delete Data Kelas | DELETE FROM kelasWHERE id_kelas="$id";                            |
| QRY-11   | Update Data Kelas | UPDATE kelas SET nama_kelas="$nm_kelas", jenjang="$jenjang";      |
| QRY-12   | Lihat Data Kelas  | SELECT * FROM kelas;                                              |

##### 3.3.3.4 Spesifikasi Field Data Layar

| Label      | Field    | Tabel/Query | Validasi         | Keterangan                                                     |
|------------|----------|-------------|------------------|----------------------------------------------------------------|
| id_kelas   | id_kelas | kelas       | -                | Primary key dan diinputkan otomatis oleh sistem                |
| nm_kelas   | nm_kelas | kelas       | required, string | nama kelas dimasukan manual oleh admin                         |
| jenjang    | jenjang  | kelas       | -                | jenjang dipilih oleh admin dan sudah ada pilihanya pada sistem |
| dosen_wali | id_dosen | dosen       | -                | forigen key yang di ambil dari tabel dosen                     |

##### 3.3.3.5 Spesifikasi Objek-objek pada Layar

| id_objek   | Jenis           | keterangan    | kategori |
|------------|-----------------|---------------|----------|
| nm_kelas   | Input type Text | Nama Kelas    | WEB      |
| jenjang    | Select          | Jenjang kelas | WEB      |
| dosen_wali | Select          | Dosen wali    | WEB      |

##### 3.3.3.6 Spesifikasi Proses/Algoritma

OP06 :Tambah Kelas <br>
Objek Terkait : nm_kelas, jenjang, dosen_wali <br>
Event : Tambah Kelas

| Inisial State (IS)    |
|-----------------------|
| Form kelas kosong |


| Final State (FS)    |
|-----------------------|
| Form kelas diupdate dengan data yang baru |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF data kelas sudah ada|
| THEN data tidak di masukan dan ulang input|
| ELSE masukan data ke database dan update data kelas yang lama|


#### 3.3.4 Modul Ruangan

##### 3.3.4.1 Fungsi Modul

| No | Fungsi              | Jenis          | Tabel Terkait | Kategori |
|----|---------------------|----------------|---------------|----------|
| 1  | Input Data Ruangan  | Form Modal     | ruangan       | WEB      |
| 2  | Update Data Ruangan | Form Modal     | ruangan       | WEB      |
| 3  | Delete Ruangan      | Button Warning | ruangan       | WEB      |
| 4  | Lihat Data Ruangan  | Tabel          | ruangan       | WEB      |
| 6  | Generate QR-Code    | Button Success | ruangan       | WEB      |

##### 3.3.4.2 Spesifikasi Layar Utama

![modul-ruangan](https://2.bp.blogspot.com/-Yn_cWmRCfs0/WtMcC2NVr5I/AAAAAAAAA-k/sUmlBDBSr00YsWsb5CiIHBPsyysOngxqwCLcBGAs/s1600/ruangan.PNG)

##### 3.3.4.3 Spesifikasi Query

| ID Query | Deskripsi           | Ekspresi Query                                                                                    |
|----------|---------------------|---------------------------------------------------------------------------------------------------|
| QRY-13   | Input Data Ruangan  | INSERT INTO ruangan SET nama_ruangan="$nm_ruangan"; |
| QRY-14   | Delete Data Ruangan | DELETE FROM ruangan WHERE id_ruangan="$id";                                                       |
| QRY-15   | Update Data Ruangan | UPDATE ruanganSET nama_ruangan="$nm_ruangan";       |
| QRY-16   | Lihat Data Ruangan  | SELECT * FROM ruangan;                                                                            |

##### 3.3.4.4 Spesifikasi Field Data Layar

| Label      | Field          | Tabel/Query | Validasi         | Keterangan                                                                    |
|------------|----------------|-------------|------------------|-------------------------------------------------------------------------------|
| id_ruangan | id_ruangan     | ruangan     | -                | Primary key yang otomatis diinputkan oleh sistem dan sebagai isi dari QR Code |
| nm_ruangan | nama_mahasiswa | raangan     | required, string | Nama ruangan diinputkan manual oleh admin                                     |

##### 3.3.4.5 Spesifikasi Objek-objek pada Layar

| id_objek         | Jenis           | keterangan                                                   | Kategori |
|------------------|-----------------|--------------------------------------------------------------|----------|
| nm_ruangan       | Input type Text | nama ruangan                                                 | WEB      |
| btnQRCode        | Button Info     | Tombol untuk mengenerate QR Code                             | WEB      |
| btnTmbhRuangan   | Button Primary  | Tombol yang digunakan untuk memunculkan modal tambah ruangan | WEB      |
| btnEditRuangan   | Button Success  | Tombol yang digunakan untuk memunculkan modal edit ruangan   | WEB      |
| btnDeleteRuangan | Button Warning  | Tombol yang digunakan untuk menghapus ruangan                | WEB      |
| btnClose         | Button Default  | Tombol untuk membatalkan input ruangan                       | WEB      |

##### 3.3.4.6 Spesifikasi Proses/Algoritma

OP20 :Tambah Ruangan <br>
Objek Terkait : nm_ruangan, btnTmbhRuangan<br>
Event : Tambah Ruangan

| Inisial State (IS)    |
|-----------------------|
| Form ruangan kosong |


| Final State (FS)    |
|-----------------------|
| Form riamgam diupdate dengan data yang baru |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF data ruangan sudah ada|
| THEN data tidak di masukan dan ulang input|
| ELSE masukan data ke database dan update data ruangan yang lama|


#### 3.3.5 Modul Jadwal

##### 3.3.5.1 Fungsi Modul

| No | Fungsi        | Jenis           | Tabel Terkait | Kategori |
|----|---------------|-----------------|---------------|----------|
| 1  | Input Jadwal  | Input type file | jadwal        | WEB      |
| 2  | Update Jadwal | Input type file | jadwal        | WEB      |
| 3  | Lihat Jadwal  | Button Info     | jadwal        | WEB      |

##### 3.3.5.2 Spesifikasi Layar Utama

![modul-jadwal](https://3.bp.blogspot.com/-74_-R4AGrTQ/WtHSS3foC-I/AAAAAAAAAyk/dkRmwlLXQzAL-19AO2Sm9aeeofKCU4rzgCLcBGAs/s1000/modul-jadwal.JPG)

##### 3.3.5.3 Spesifikasi Query

| ID Query | Deskripsi             | Ekspresi Query                                                                                                                                                                                                                                                                                                                                                                                                                                         |
|----------|-----------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| QRY-17   | Input Jadwal          | INSERT INTO jadwal SET thn_ajaran      = "$thn_ajrn",                                                id_kelas          =" $id_kelas",                                               id_ruangan     ="$id_ruangan",                                              waktu_mulai  ="$wkt_mulai",                                               waktu_selesai = "$wkt_selesai",                                              hari                 = "$hari"; |
| QRY-18   | Update Data Mahasiswa | UPDATE jadwal SET thn_ajaran      = "$thn_ajrn",                                     id_kelas          = " $id_kelas",                                     id_ruangan     ="$id_ruangan",                                     waktu_mulai  ="$wkt_mulai",                                     waktu_selesai = "$wkt_selesai",                                     hari                 = "$hari";                                                      |

##### 3.3.5.4 Spesifikasi Field Data Layar

| Label         | Field       | Tabel/Query | Validasi               | Keterangan                                      |
|---------------|-------------|-------------|------------------------|-------------------------------------------------|
| id_jadwal     | id_jadwal   | jadwal      | -                      | Primary key dan diinputkan otomatis oleh sistem |
| thn_ajrn      | thn_ajaran  | jadwal      | required, string, year | nama ruangan diinputkan manual oleh admin       |
| id_kelas      | id_kelas    | kelas       | -                      | forigen key dari kelas                          |
| id_ruangan    | id_ruangan  | ruangan     | -                      | forigen key dari ruangan                        |
| waktu_mulai   | wkt_mulai   | jadwal      | required, string, time | waktu mulai pelajaran                           |
| waktu_selesai | wkt_selesai | jadwal      | required, string, time | waktu selesai pelajaran                         |
| hari          | hari        | jadwal      | required, string       | hari ketika pelajaran dimulai                   |

##### 3.3.5.5 Spesifikasi Objek-objek pada Layar

| id_objek  | Jenis           | keterangan                                                 | Kategori |
|-----------|-----------------|------------------------------------------------------------|----------|
| btnUbah   | Button Default  | nama ruangan                                               | WEB      |
| btnLihat  | Button Success  | tombol yang digunakan untuk memasukan input nama mahasiswa | WEB      |
| btnUpload | Input type File | tombol untuk membatalkan inputan                           | WEB      |
| btnImport | Input type File | tombol untuk membuka modal edit ruangan                    | WEB      |

##### 3.3.5.6 Spesifikasi Proses/Algoritma

OP15, OP16 : Import Jadwal, Ubah Jadwal <br>
Objek Terkait : btnUbah, btnImport, btnUpload <br>
Event : Import Jadwal, Ubah Jadwal

| Inisial State (IS)    |
|-----------------------|
| Form jadwal kosong |


| Final State (FS)    |
|-----------------------|
| Data jadwal tersimpan dalam database |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF format yang diinputkan pada excel salah |
| THEN ulangi input data dan munculkan peringatan |
| ELSE masukan data dalam database |

#### 3.3.6 Modul MataKuliah

##### 3.3.6.1 Fungsi Modul

| No | Fungsi              | Jenis           | Tabel Terkait |
|----|---------------------|-----------------|---------------|
| 1  | Input mata kuliah   | Form modal      | mata_kuliah   |
| 2  | Update mata kuliaah | Form modal      | mata_kuliah   |
| 3  | Delete Mata kuliah  |  Button warning | mata_kuliah   |
| 4  | Lihat mata kuliah   | Tabel           | mata_kuliah   |

##### 3.3.5.2 Spesifikasi Layar Utama

![modul-matkul](https://2.bp.blogspot.com/-3xgj2PkT2sU/WtHSzk_eHQI/AAAAAAAAAyw/XDANIU60xWs65t67832XgvGzeLDOaec9gCLcBGAs/s1000/modul-matkul.JPG)

##### 3.3.6.3 Spesifikasi Query

| ID Query | Deskripsi          | Ekspresi Query                                                                                                                                                                                       |
|----------|--------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| QRY-21   | Input Mata Kuliah  | INSERT INTO mata_kuliah SET kode_matkul="$kd_matkul", nama_matkul="$nm_matkul", jumlah_sks="$jml_sks", sks_teori="$sks_teori", sks_praktek="$sks_praktek", jenjang="$jenjang", semester="$semester"; |
| QRY-22   | Delete Mata Kuliah | DELETE FROM matkulWHERE id_mahasiswa="$id";                                                                                                                                                          |
| QRY-23   | Update Mata Kuliah | UPDATE mahasiswa SET kode_matkul="$kd_matkul", nama_matkul="$nm_matkul", jumlah_sks="$jml_sks", sks_teori="$sks_teori", sks_praktek="$sks_praktek", jenjang="$jenjang", semester="$semester";        |
| QRT-24   | Lihat Mata Kuliah  | SELECT * FROM mata_kuliah                                                                                                                                                                            |

##### 3.3.6.4 Spesifikasi Field Data Layar

| Label       | Field       | Tabel/Query | Validasi         | Keterangan                                           |
|-------------|-------------|-------------|------------------|------------------------------------------------------|
| id_matkul   | id_matkul   | mata_kuliah | -                | Primary key otomatis diinputkan oleh sistem          |
| kd_matkul   | kode_matkul | mata_kuliah | required, string | kode matkul di inputkan manual oleh admin            |
| nm_matakul  | nama_matkul | mata_kuliah | required, string | nama matkul diinputkan manual oleh admin             |
| sks_teori   | sks_teori   | mata_kuliah | required, number | diinpuktan manual oleh admin                         |
| sks_praktek | sks_praktek | mata_kuliah | required, number | diinpuktan manual oleh admin                         |
| jenjang     | jenjang     | mata_kuliah | -                | admin memilih jenjang yang sudah ada didalam sistem  |
| semseter    | semester    | mata_kuliah | -                | admin memilih semester yang sudah ada didalam sistem |

##### 3.3.6.5 Spesifikasi Objek-objek pada Layar

| id_objek    | Jenis             | keterangan           | kategori |
|-------------|-------------------|----------------------|----------|
| kd_matkul   | Input type Text   | kode mata kuliah     | WEB      |
| nm_matkul   | Input type Text   | nama mata kuliah     | WEB      |
| sks_teori   | Input type number | sks teori            | WEB      |
| sks_praktek | Input type number | sks praktek          | WEB      |
| jenjang     | Select            | jenjang mata kuliah  | WEB      |
| semester    | Select            | semester mata kuliah | WEB      |

##### 3.3.6.6 Spesifikasi Proses/Algoritma

OP21 : Tambah Mata Kuliah <br>
Objek Terkait : kd_matkul, nm_matkul, sks_teori, sks_praktek, jenjang, semester <br>
Event : Tambah Mata Kuliah

| Inisial State (IS)    |
|-----------------------|
| Form mata kuliah kosong |


| Final State (FS)    |
|-----------------------|
| Data mata kuliah tersimpan dalam database |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF data yang salah dan atau sudah ada |
| THEN ulangi input data dan munculkan peringatan |
| ELSE masukan data dalam database |



#### 3.3.7 Modul Rekap

##### 3.3.7.1 Fungsi Modul

| No | Fungsi            | Jenis | Tabel Terkait | Kategori |
|----|-------------------|-------|---------------|----------|
| 1  | Hitung Presensi   | -     | Rekap         | WEB      |
| 2  | Hitung Kompensasi | -     | Rekap         | WEB      |
| 3  | Hitung Absensi    | -     | Rekap         | WEB      |
| 4  | Tampil Rekap      | Tabel | Rekap         | WEB      |


##### 3.3.7.2 Spesifikasi Layar Utama

<img src="https://1.bp.blogspot.com/-UpvYoRIguPA/WtLv0J20nzI/AAAAAAAAA9o/L35d_5rINUQdIATHWTIhCSLhIp6ZczwSQCLcBGAs/s1600/rekap.PNG">


##### 3.3.7.3 Spesifikasi Query

| ID Query | Deskripsi   | Ekspresi Query      |
|----------|-------------|---------------------|
| QRY-01   | Lihat Rekap | SELECT * FROM Rekap |

##### 3.3.7.4 Spesifikasi Field Data Layar

| Label         | Field    | Tabel/Query | Validasi | Keterangan                            | Kategori |
|---------------|----------|-------------|----------|---------------------------------------|----------|
| btnDownload   | -        | -           | -        | tombol untuk mendownload rekap        | WEB      |
| semester      | semester | rekap       | -        | untuk memilih semster                 | WEB      |
| btnRekapDosen | -        | -           | -        | tombol untuk download rekap dosen     | Android  |
| btnRekapMhs   | -        | -           | -        | tombol untuk download rekap mahasiswa | Android  |

##### 3.3.7.5 Spesifikasi Objek-objek pada Layar

| id_objek      | Jenis       | keterangan                       | kategori |
|---------------|-------------|----------------------------------|----------|
| btnDownload   | Button Info | tombol download rekap pada admin | WEB      |
| tahun_ajaran  | List        | untuk menampilkan tahun ajaran   | WEB      |
| semester      | Text        | melihat semester                 | WEB      |
| btnRekapDosen | ButtonView  | tombol download rekap dosen      | Android  |
| btnRekapMhs   | ButtonView  | tombol download rekap mahasiswa  | Android  |

##### 3.3.7.6 Spesifikasi Proses/Algoritma

OP22 :Download Rekap <br>
Objek Terkait : tahun_ajaran, semeester, btnDownload <br>
Event :

| Inisial State (IS)    |
|-----------------------|
| Tabel Rekap Kosong |


| Final State (FS)    |
|-----------------------|
| Sistem Mendownload Rekap |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF rekap ada pada database |
| THEN tampilkan rekap yang ingin di download |
| ELSE tabel kosong |


#### 3.3.8 Modul Otentikasi

##### 3.3.8.1 Fungsi Modul

| No | Fungsi             | Jenis             | Tabel Terkait |
|----|--------------------|-------------------|---------------|
| 1  | Login Admin        | Form Login        | user          |
| 2  | Register Dosen     | Register Activity | user          |
| 3  | Register Mahasiswa | Register Activity | user          |

##### 3.3.8.2 Spesifikasi Layar Utama

<img src="https://1.bp.blogspot.com/-l2UGqvzc3Io/WtLP1K8iNjI/AAAAAAAAA9A/s7FoCPDuE-8-Ek98TmV1AOwjg-uhzebTgCLcBGAs/s1600/login.PNG">

##### 3.3.8.3 Spesifikasi Query

| ID Query | Deskripsi          | Ekspresi Query                                                          |
|----------|--------------------|-------------------------------------------------------------------------|
| QRY-25   | Login Admin        | SELECT * FROM user WHERE username="$username" AND password="$password"; |
| QRY-26   | Register Dosen     | INSERT INTO user SET username="$nip", mac="$mac", level="dosen";        |
| QRY-27   | Register Mahasiswa | INSERT INTO user SET username="$nim", mac="$mac", level="mahasiswa";    |

##### 3.3.8.4 Spesifikasi Field Data Layar

| Label    | Field    | Tabel/Query | Validasi         | Keterangan                         | keterangan |
|----------|----------|-------------|------------------|------------------------------------|------------|
| username | username | user        | required, string | username untuk admin               | WEB        |
| password | password | user        | required, string | password untuk admin               | WEB        |
| nip      | username | dosen       | required, string | username untuk dosen               | Android    |
| nim      | username | mahasiswa   | required, string | username untuk mahasiswa           | Android    |
| mac      | password | user        | required, string | password untuk dosen dan mahasiswa | Android    |

##### 3.3.8.5 Spesifikasi Objek-objek pada Layar

| id_objek | Jenis               | keterangan                               |
|----------|---------------------|------------------------------------------|
| username | Input type Text     | username admin                           |
| password | Input type password | password admin                           |
| nim      | EditText            | nim mahasiswa sebagai username           |
| nip      | EditText            | nip dosen sebagai username               |
| mac      | EditText            | mac sebagai password dosen dan mahasiswa |

##### 3.3.8.6 Spesifikasi Proses/Algoritma

OP01, OP02 : Register Dosen, Register Mahasiswa <br>
Objek Terkait : nim, nip, mac <br>
Event : Register Dosen, Register Mahasiswa

| Inisial State (IS)    |
|-----------------------|
| Device Belum Terdaftar |


| Final State (FS)    |
|-----------------------|
| Device sudah terdaftar |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF informasi device belum terdaftar di database |
| THEN munculkan activity register |
| ELSE masuk ke halaman utama |


#### 3.3.9 Modul Scan

##### 3.3.9.1 Fungsi Modul

| No | Fungsi            | Jenis        | Tabel Terkait | Kategori |
|----|-------------------|--------------|---------------|----------|
| 1  | Scan Presensi     | ScnannerView | rekap         | Android  |
| 2  | Scan mulai Sistem | ScnannerView | rekap         | Android  |

##### 3.3.9.2 Spesifikasi Layar Utama

<img src="https://4.bp.blogspot.com/-liHMlfLP7xc/WtLV1Qd2qMI/AAAAAAAAA9Q/HoEzqNOb-pYoAiqbN579AsihEgTF2BiVQCLcBGAs/s1600/Screenshot_2018-04-15-11-19-44-557_ga.reang.www.materialdesign.png" width="50%" height="50%">

##### 3.3.9.3 Spesifikasi Query

Tidak Menggunakan Query

##### 3.3.9.4 Spesifikasi Field Data Layar

| Label       | Field | Tabel/Query | Validasi | Keterangan                                 | Kategori |
|-------------|-------|-------------|----------|--------------------------------------------|----------|
| scDosen     | -     | -           | -        | Scanner untuk mengaktifkan sistem presensi | Android  |
| scMahasiswa | -     | -           | -        | Scanner untuk presensi mahasiswa           | Android  |

##### 3.3.9.5 Spesifikasi Objek-objek pada Layar

| id_objek    | Jenis       | keterangan                                                      | kategori |
|-------------|-------------|-----------------------------------------------------------------|----------|
| scDosen     | ScannerView | Scanner dosen yang digunakan untuk mengaktifkan sistem presensi | Android  |
| scMahasiswa | ScannerView | Scanner mahasiswa yang digunakan untuk presensi                 | Android  |

##### 3.3.9.6 Spesifikasi Proses/Algoritma

OP19 : Mulai Scan <br>
Objek Terkait : scDosen <br>
Event :

| Inisial State (IS)    |
|-----------------------|
| Tampil Activity Scan Dosen |


| Final State (FS)    |
|-----------------------|
| Scan sukses dan pindah activty |

| Spesifikasi Proses/Algoritma |
|-----------------------|
| IF Scan Sukses |
| THEN Tampil activity sukses dan pindah ke presensi |
| ELSE Ulangi Scan |



### 3.4 Matriks Kerunutan

| ID Kebutuhan    | Modul          | Keterangan |
|-----------------|----------------|--------------------------|
| mac address	  | Otentikasi	   | untuk validasi agar bisa mengakses untuk melakukan presensi menggunakan mac address dari masing-masing device|
| id_mata_kuliah  | mata_kuliah    | menampilkan data mata kuliah yang akan dilakukan oleh dosen dan mahasiswa|
| id_ruangan 	  | ruangan 	   | menampilkan ruangan mana yang akan ditempati untuk proses pembelajaran|
| id_kelas 		  | kelas 		   | menmapilkan data kelas yang akan diajar oleh dosen|
| id_dosen 		  | dosen  		   | dosen yang mengajar dan membuka presensi|
| id_jadwal 	  | jadwal  	   | menampilkan jadwal kuliah untuk mahasiswa dan dosen|
| scan 			  | Scan 	  	   | melakukan scan presensi |
| id_mahasiswa    | mahasiswa  	   | mahasiswa melakukan scan dan mengirim data kehadiran ke dosen dan admin|
| id_rekap        | rekap          | menmapilkan hasil rekap absen, presensi dan keterlambatan|


