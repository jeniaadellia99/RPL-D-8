# **Software Requirements Spesification**

Version X.X
22 Februari 2018

![enter image description here](https://2.bp.blogspot.com/-dxdRgMQGbLk/WpA-Tp2rNGI/AAAAAAAAAh8/3_jBWFb7Cf48033QvB34D2WCwoN2sxZLgCLcBGAs/s1000/index.png)


**Q-PRESS (QR-Kode Presensi)
Aplikasi Menggunakan Kode QR**

Kelompok 8 
 - Koriah 								(1603103)
 - Bayu Rasukma Raga		(1603093)
 - Syamsul Fahri Hadi			(1603115)


**Jurusan Teknik Informatika**
**Politeknik Negeri Indramayu**


----------


Bagian Koriah :curry:


----------


# I. Pendahuluan

## 1.1. Tujuan

Tujuan dari dokumen SRS ini adalah untuk mendeskripsikan dari aplikasi yang dibuat yaitu Aplikasi Presensi Menggunakan kode QR yang bisa disingkat juga menjadi Q-PRESS. 
Pada dokumen ini akan dijelaskan bagaimana sistem dari aplikasi Q-PRESS, seperti Sistem Interface, Mockup, dan lain-lain.

Diharapkan dokumen ini dapat menjadi acuan dalam proses maupun penggunaan aplikasi yang dibuat. 

## 1.2 Lingkup

Pada Sistem aplikasi ini akan menjadi sistem presensi kehadiran yang digunakan dalam dunia pendidikan. Dengan tujuan dapat mengefesiensi dan mengefektifkan dari sistem sebelumnya yang dilakukan secara manual. Dengan memaksimalkan efesiensi waktu dan penyimpanan data dengan menggunakan databse online, pada sistem aplikasi ini akan lebih mudah dipahami oleh user. 

Pada aplikasi ini menggunakan sebuah kode yang berisikan data, yang nantinya akan dijadikan sebagai acuan kehadiran. Selain itu, perihal administrasi presensi akan lebih aman dan efisien dengan menggunakan aplikasi ini. 

Terdapat fungsi-fungsi yang dapat memudahkan user mahasiswa, dosen dan admin. Seperti melihat jadwal, kehadiran, keterlambatan, data dosen, data mahasiswa, dan rekapitulasi presensi. 

## 1.3 Definisi, Akronim, Singkatan

|Istilah  |Definisi  |
|--|--|
|SRS|Software Requirements Spesification|
| Q-Press |Presensi Kode QR  |
|  Presensi|Kehadiran  |
Mockup|Perancangan design aplikasi yang akan di implementasikan pada aplikasi yang akan dibuat |
|  User|Pengguna aplikasi. Seperti Mahasiswa, Dosen dan Admin |
|Sistem Interface|Menjelaskan bagaimana sistem dari aplikasi digunakan|
|Database|Kumpulan data dan informasi yang saling berhubungan dan disimpan sebagai administrasi dan admin akan mengelola data tersebut|
			    

## 1.4 Referensi

*Fathansyah.2015.BASIS DATA Revisi Kedua.Bandung:Informatika Bandung*

*SRSExample-webapp.pdf*

*https://www.slideshare.net/ErwanNurArief/srs-erwan*

## 1.5 Overview

Pada bab selanjutnya yaitu mendeskripsikan sistem yang terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, Sistem Interface aplikasi dan alur sistemnya.  
Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. 
Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.
				


----------


Bagian Bayu :cat:


----------


# **II. Gambaran Umum**
Pada umumnya sistem presensi kehadiran menggunakan pemanggilan dosen ke siswa satu per satu dengan menyebutkan nama dari siswa tersebut. Dalam penggunaan sistem tersebut, sangat memakan waktu dan tidak efesien, karena memakan banyak waktu dari jam mata kuliah. Selain itu, sistem presensi manual menggunakan banyak kertas sehingga terjadi pemborosan. Pembuatan kertas menggunakan bahan baku kulit pohon, jadi jika menggunakan banyak kertas tentunya menggunakan kulit pohon secara berlebihan, jika hal ini terjadi kemungkinan besar terjadinya kerusakan alam.

Untuk itu, kelompok 8 mempunyai gagasan yang dapat meminimialisir dari tidak efesiennya sistem presensi sekarang, yaitu dengan membuat aplikas Q-PRES (QR-Code Presensi). Aplikasi menggunakan sistem scan kode QR untuk setiap presensi pada jadwal mata kuliah di setiap Lab atau Kelas. Dari sistemnya sendiri menggunakan 3 user, yaitu mahasiswa, dosen dan admin. 

Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk pendaftaran. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama pendaftaran untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. Pada sistem siswa, terdapat beberapa fungsi utama yaitu : 
- Siswa dapat melihat jadwal perkuliahan.
- Sebelum siswa melakukan presensi, dia akan mendapatkan notifikasi untuk memulai scan, jika berhasil melakukan scan siswa akan mendapat notifikasi scan telah berhasil
- Siswa dapat melihat jumlah kompen yang dia dapatkan karena keterlambatan maupun ketidakhadiran. 

Sedangkan pada sistem Dosen memiliki hak akses untuk membuka presensi. Setelah para mahasiswa telah melakukan presensi, maka dosen akan mendapat data siswa yang masuk pada mata kuliah hari itu. Jika hasilnya tidak sesuai maka untuk validasinya Dosen akan pengecekan ulang untuk memastikan. 
Pada sistem Dosen memiliki fungsi yaitu :
- Dosen bisa melihat jadwal.
- Dosen memilih jadwal yang akan dilaksanakan.
- Mempunyai hak akses untuk membuka presensi untuk mahasiswa.
- Melihat data kehadiran siswa. 
- Validasi siswa

Admin adalah user yang mengelola setiap data pada sistem ini. 
Pada sistem Admin memiliki beberapa fungsi yaitu :
- Menerima data mahasiswa yang hadir secara otomatis. 
- Menginput data mahasiswa.
- Menginput dosen.
- Menginput jadwal Kuliah.
- Presentase presensi mahasiswa per hari dan per semester.

## 2.1 Perspektif Produk

Aplikasi Q-PRESS atau Aplikasi Presensi menggunakan Kode QR adalah sebuah sistem kehadiran yang diaplikasikan pada android. Dimana user dari aplikasi ini adalah siswa dan dosen, sedangkan untuk pengelolaan datanya dikelola oleh admin yang menggunakan sistem web. 

Pada sistem Kode QR, menggunakan data dari setiap Lab. Data tersebut akan di enkripsi menjadi sebuah kode QR. Kode tersebut akan ditempel pada setiap meja dalam lab, tujuannya untuk memudahkan dalam melakukan scan karena satu siswa men-scan satu kode yang sama sehingga tidak terjadi antrian scan. Sebelum menggunakan sistem ini, user diharuskan untuk mendaftar terlebih dahulu menggunakan Nim, Nik, dan MAC address dari device yang digunakan. Kemudian Nim dan Nik tersebut akan dijadikan sebagai user untuk dapat mengakses aplikasi ini. 

Pada sistem siswa, dapat melakukan scan Kode QR apabila dosen telah membuka akses scan QR. Setelah akses terbuka, siswa dapat melakukan scan kode yang kemudian datanya akan masuk ke dosen dan admin. Jika siswa tidak bisa men-scan kode, siswa dapat melakukan validasi kehadiran yang dilakukan oleh dosen. Selain itu, pada sistem siswa terdapat beberapa menu atau fungsi yang dapat digunakan, seperti melihat jadwal, jumlah kompen atau keterlambatan.

Sedangkan pada sistem dosen dapat membuka akses Scan bagi para siswa, dengan men-scan kode QR terkebih dahulu. Setelah itu dosen dapat mengetahui jumlah siswa yang hadir, jika jumlah kurang maka dosen akan melakukan validasi. Dosen dapat melihat jadwal, melihat keterlambatan siswa, kehadiran siswa, rubah jadwal.

Pada sistem admin yaitu memiliki hak untuk mengelola data. melihat data dosen, data mahasiswa, mengupload jadwal, rekapitulasi presensi, grafik dari presensi.

Kelebihan dari sistem aplikasi yang digunakan yaitu meminimalisir kecurangan dalam presensi karena menggunakan MAC address dari device siswa yang dicocokkan dengan nim siswa tersebut.  

Berbeda dengan sistem presensi yang digunakan oleh Universitas Teknologi Petronas, Malaysia. Mahasiswa harus mengunduh aplikasi pemindai Kode QR, kemudian memindai kode yang ditampilkan oleh dosen dikelas. Setelah memindai, mahasiswa akan diarahkan ke sebuah link, dari link tersebut mahasiswa memasukkan nomor induk mahasiswa. 


**2.1.1 Antarmuka Sistem**

![enter image description here](https://1.bp.blogspot.com/-4qwX73sJGi0/WpEot5do5SI/AAAAAAAAAiM/1Gj8UmA_1OUnUfaXZ8QI4T09Lk_m0_NPwCLcBGAs/s10000/Drawing64.png)

![enter image description here](https://1.bp.blogspot.com/-4qwX73sJGi0/WpEot5do5SI/AAAAAAAAAiM/1Gj8UmA_1OUnUfaXZ8QI4T09Lk_m0_NPwCLcBGAs/s10000/Drawing64.png)

<html>
<head>
</head>
<body>

<li> Siswa </li>

<p align="justify">Sebelum menggunakan aplikasi ini siswa diharuskan mendaftar terlebih dahulu, pendaftaran menggunakan Mac address dan Nim siswa tersebut. Setelah mendaftar, siswa dapat login dan melakukan presensi dengan men-scan kode qr, kemudian data scan tersebut akan disimpan pada sistem. Siswa dapat melihat jadwal dari sistem dan sistem akan menampilkan jadwal. 

<li>Dosen</li>

<p align="justify">Sebelum menggunakan aplikasi ini, dosen diharuskan untuk mendaftar terlebih dahulu menggunakan Mac Address dan Nik dari dosen tersebut. Setelah berhasil login, dosen dapat meminta lihat jadwal pada sistem dan sistem akan menampilkannya. Dosen dapat memilih jadwal mengajar di kelas dan ruang Lab apa. Dosen dapat Merubah jadwal. Dosen dapat melakukan scan presensi untuk membuka akses presensi bagi mahasiswa kemudian data presensi tersebut akan disimpan pada sistem, dan sistem akan menampilkan data siswa yang masuk. </p>

<li>Admin</li>

<p align="justify"> Sebelum melakukan pengelolaan data, admin diharuskan untuk login terlebih dahulu. Pada sistem admin dapat menambahkan data siswa, data dosen, data kelas, pada sistem. Setelah data ditambahkan, sistem dapat menampilkan data tersebut. Admin dapat melakukan edit data siswa, edit data siswa perkelas, edit data dosen, kemudian data tersebut akan di simpan pada sistem. Dan sistem dapat menampilkan data yang tadi edit. Untuk pengelolaan jadwal, admin dapat mendownload template jadwal yang sudah tersedia, kemudian admin dapat mengimport jadwal. Admin dapat mendownload rekapitulasi presensi dan mengubah jadwal. </p>

</body>
</html>

**2.1.2	Antarmuka Pengguna**

sfsfs

**2.1.3	Antarmuka Perangkat Keras**

dgddgdg

**2.1.4	Antarmuka Perangkat Lunak**

sfsf


**2.1.5	Antarmuka Komunikasi**

sfsfs

**2.1.6	Batasan Memori**

sffsf

**2.1.7	Operasi - Operasi**

sfsf

**2.1.8	Kebutuhan Adaptasi**


----------


Bagian Syamsul :scream:


----------

## 2.2 Spesifikasi Kebutuhan Fungsional
asfsff

## 2.3 Spesifikasi Kebutuhan Non-Fungsional

sfsff

## 2.4 Karakteristik Pengguna

dadad

## 2.5 Batasan - batasan

add

## 2.6 Asumsi - asumsi ketertarikan

add

## 2.7 Kebutuhan Penyeimbang

adadadaad


----------


Bagian Koriah :curry:


----------



# III. Requirement Spesification






*Note : Lihat Modul Bapa, Browsing nambah referensi*
      
	


