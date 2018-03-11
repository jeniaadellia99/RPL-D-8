<html>
<body>
<div align="center"><h1>Software Design Document</h1></div>

<p align="center"><b>Version X.X </b><br>
<p align="center">22 Februari 2018</b>
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



# 1. Pendahuluan

### 1.1.  Tujuan


Dokumen SDD (Software Design Document) ini dibuat untuk tujuan sebagai berikut :
1.	Mendefinisikan dan menjelaskan hal-hal yang dilakukan dalam pengembangan aplikasi Q-Press sesuai informasi yang terdapat dalam SRS (Software Requirements Spesification).
2.	Menggambarkan  perancangan sistem yang akan dikembangkan dalam Q-Press, baik perancangan secara global maupun perancangan rinci, berdasarkan spesifikasi yang terdapat pada dokumen SRS  (Software Design Document) yang telah dibuat sebelumnya.
3.	Mendefinisikan dan mendeskripsikan secara terstruktur arsitektur sistem Q-Press yang dikembangkan meliputi perancangan deskrip proses, deskripsi antarmuka, dan lainya.
4.	Mempermudah proses pengembangan perangkat lunak pada tahap-tahap berikutnya.

### 1.2.  Lingkup

<p align="justify">
Penggunaan aplikasi Q-PRESS atau aplikasi Presensi menggunakan Kode QR merupakan sebuah bentuk inovasi teknologi yang dikembangkan penggunaannya dalam dunia pendidikan. Aplikasi Q-PRESS ini diharapkan dapat memberikan keefektifan dan keefesiesian dalam proses administrasi kehadiran. Pada sistem aplikasi ini mencakup data-data yang dibutuhkan dalam proses kehadiran seperti, data mahasiswa, data jadwal atau mata kuliah, data dosen, rekap presensi, rekap absensi. Kemudian data rekap absensi ini akan dijadikan sebagai data kompensasi bagi mahasiswa.
Proses presensi yang dilakukan dengan cara dosen harus membuka akses scan kode bagi para mahasiswa, dengan men-scan kode Lab yang digunakan sebagai ruangan pembelajaran. Setelah itu, mahasiswa dipersilahkan untuk mulai men-scan sebagai bentuk kehadiran. Jika mahasiswa mendapat kendala, maka dilakukan presensi secara manual melalui device dosen. Data mahasiswa yang telah men-scan kehadiran akan masuk ke dosen dan admin. Data tersebut akan dijadikan sebagai bukti kehadiran.
</p>

### 1.3.  Definisi, akronim, dan singkatan
**13.1 Definisi**
<h4>1. Presensi</h4>
<p align="justify">Presensi adalah Kehadiran, yang berarti seseorang yang telah hadir atau menghadiri suatu acara atau kegiatan tertentu. Kata Presensi sendiri lebih banyak digunakan didalam dunia pendidikan.</p>

<h4>2. Kode QR</h4>
<p align="justify">Kode QR adalah suatu jenis kode matriks atau kode batang dua dimensi yang dikembangkan oleh Denso Wave, sebuah divisi Denso Corporation yang merupakan sebuah perusahaan Jepang dan dipublikasikan pada tahun 1994 dengan fungsionalitas utama yaitu dapat dengan mudah dibaca oleh pemindai QR merupakan singkatan dari quick response atau respons cepat, yang sesuai dengan tujuannya adalah untuk menyampaikan informasi dengan cepat dan mendapatkan respons yang cepat pula. Berbeda dengan kode batang, yang hanya menyimpan informasi secara horizontal, kode QR mampu menyimpan informasi secara horizontal dan vertikal, oleh karena itu secara otomatis Kode QR dapat menampung informasi yang lebih banyak daripada kode batang.</p>

<h4>3. Absesnsi</h4>
<p>Absensi adalah ketidak hadiran, yang berari seseorang yang tidak hadir dalam sebuah acara atau kegiatan tertentu</p>

**1.3.2 Akronim**

|       Akronim       |      Arti        |
|---------------------|------------------|
|Q-Press              |QR-Kode Presensi	 |
|QR-Kode			  |Quick Response	 |



# 2. Referensi

IEEE, IEEE Draft Standard for Software Design Descriptions. IEEE P1 01 6/D5.0; 1 2 December 2005

Eka Ismantohadi & Moh. Yani, Software Design Document (SDD). 2018

# 3. Penjelasan Dekomposisi

### 3.1 Dekomposisi Modul

#### 3.1.1 Diagram Konteks
![enter image description here](https://3.bp.blogspot.com/-1IZvxZysJ80/WqO9ehZ_cQI/AAAAAAAAA7E/KgngDu2HioAdZ03l-VC68Hvw74b0jM5cgCLcBGAs/s1600/diagram+konteks.jpg)

#### 3.1.2 DFD Level 0
![enter image description here](https://1.bp.blogspot.com/-XLJ_uW2zNKs/WqO9dCJjdtI/AAAAAAAAA68/aSRtQsPRkS4pWh7KE5dz38w7d-tMwKBDwCLcBGAs/s1600/dfd+level+0.jpg)

### 3.2 Dekomposisi Proses Konkuren

#### 3.2.1 DFD Level 1 : Proses 1
![enter image description here](https://4.bp.blogspot.com/-YygLIn-0SCM/WqO9dHZ0VUI/AAAAAAAAA60/V8wdqykbIV0R57rqzNY2eES-E5hPFbGogCLcBGAs/s1600/dfd+level+1++Proses+1.jpg)

#### 3.2.2 DFD Level 1 : Proses 2![enter image description here](https://3.bp.blogspot.com/-knvvADDrpnA/WqO9dDdiaKI/AAAAAAAAA64/3fUCnuOp15AZiaOpkSbs5Jvo_lq72sXmACLcBGAs/s1600/dfd+level+1+proses+2.jpg)

#### 3.2.3 DFD Level 1 : Proses 3
![enter image description here](https://2.bp.blogspot.com/-5zEGPb69OvE/WqO9eHQwwhI/AAAAAAAAA7A/MXoRub7UMmM1y20-53VhTTRD_CM6C52qwCLcBGAs/s1600/dfd+level+1+proses+3.jpg)

### 3.3 Dekomposisi Data
# 4. Deskripsi Ketergantungan dan Keterkaitan

### 4.1 Keterkaitan Interen Modul
###  4.2 Keterkaintan Interen Proses
###  4.3 Keterkaitan Data

# 5. Deskripsi Antarmuka

### 5.1 Keterkaitan interen Modul
#### 5.1.1 Deskripsi Modul 1
#### 5.1.2 Deskripsi Modul 2
### 5.2 Antarmuka Proses
#### 5.2.1 Deskripsi Proses 1
#### 5.2.2 Deskripsi Proses 2

# 6. Desain Detil/Rinci

### 6.1 Rinci Modul
#### 6.1.1 Rinci Modul 1
#### 6.1.2 Rinci Modul 2
### 6.2 Desain Data secara rinci 
#### 6.1.1 Rinci Entiti Data 1
#### 6.2.2 Rinci Entiti Data 2