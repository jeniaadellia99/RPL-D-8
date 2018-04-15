<html>
<body>
<div align="center"><h1> Software Project Management Plan</h1></div>

<p align="center"><b>Version 1.2 </b><br>
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
 
### BAB 1. PENDAHULUAN

**1.1	Gambaran Proyek**

<p align="justify"> Pada umumnya sistem presensi kehadiran menggunakan pemanggilan dosen ke siswa satu per satu dengan menyebutkan nama dari siswa tersebut. Dalam penggunaan sistem tersebut, sangat memakan waktu dan tidak efesien, karena memakan banyak waktu dari jam mata kuliah. Selain itu, sistem presensi manual menggunakan banyak kertas sehingga terjadi pemborosan. Pembuatan kertas menggunakan bahan baku kulit pohon, jadi jika menggunakan banyak kertas tentunya menggunakan kulit pohon secara berlebihan, jika hal ini terjadi kemungkinan besar terjadinya kerusan alam.</p>

<p align="justify">Untuk itu, kelompok 8 mempunyai gagasan yang dapat meminimialisir dari tidak efesiennya sistem presensi sekarang, yaitu dengan membuat aplikas Q-PRES (QR-Code Presensi). Aplikasi menggunakan sistem scan kode QR untuk setiap presensi pada jadwal mata kuliah di setiap Lab atau Kelas. Dari sistemnya sendiri menggunakan 3 user, yaitu mahasiswa, dosen dan admin. </p>

<p align="justify">Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk pendaftaran. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama pendaftaran untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. </p>

Pada sistem siswa, terdapat beberapa fungsi utama yaitu : <br>

- Siswa dapat melihat jadwal perkuliahan.<br>
- Sebelum siswa melakukan presensi, dia akan mendapatkan notifikasi untuk memulai scan, jika berhasil melakukan scan siswa akan mendapat notifikasi scan telah berhasil.<br>
- Siswa dapat melihat jumlah kompen yang dia dapatkan karena keterlambatan maupun ketidakhadiran. <br>

<p align="justify">Sedangkan pada sistem Dosen memiliki hak akses untuk membuka presensi. Setelah para mahasiswa telah melakukan presensi, maka dosen akan mendapat data siswa yang masuk pada mata kuliah hari itu. Jika hasilnya tidak sesuai maka untuk validasinya Dosen akan pengecekan ulang untuk memastikan. </p>

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

<p align="justify">Batasan pada Sistem Aplikasi :<br>
Pada sistem ini, satu device milik satu mahasiswa. Jadi mahasiswa tidak bisa menggunakan akun atau device dari mahasiswa lainnya. Kalaupun terdapat beberapa mahasiswa yang tidak mempunyai HP, maka dosen akan melaukukan presensi manual. Melalui pemanggilan nama mahasiswa tersebut. Mahasiswa tidak boleh menitipkan HP-nya ke mahasiswa lain untuk melakukan presensi, karena setiap dosen akan melakukan validasi presensi.</p>

**1.2 Dokumen - dokumen dalam Proyek**

- SPMP (Software Project Management Plan)
- SRS (Software Design Document)
- SDD (Software Design Document)


**1.3 Evolusi SPMP**

Selama proyek, dokumen ini akan diperbarui karena menggunakan model konsep V Model.
Setiap Anggota mempunyai tanggung jawab dan tugas sesuai jobdesk masing-masing.
Personal yang bertanggung jawab unutk merawat aplikasi ini adalah Admin, Mahasiswa dan Dosen yang ditunjuk sebagai pengguna dari aplikasi ini.

**1.4 Material Acuan**

- IEEE
- Unimap IEEE SPMP
- Spmp sample
	
**1.5 Definisi dan Akronim (Singkatan)**

- QR-Code	: Quick Response Code
- Q-PRES	: QR Presensi
- HP 		: Handphone
- presensi  : Kehadiran
		

### BAB 2 ORGANISASI PROYEK

**2.1 Model Proses**
	  
<p align="justify">Model Proses yang digunakan pada aplikasi menggunakan V-Model. Dikarenakan v-model sangat fleksibel, yang mendukung pengurangan maupun penambahan project dalam prosesnya. Meminimalisasikan kesalahan pada hasil akhir karena  ada test pada setiap prosesnya. Model Proses yang digunakan pada aplikasi menggunakan V-Model. Dikarenakan v-model sangat fleksibel, yang mendukung pengurangan maupun penambahan project dalam prosesnya. Meminimalisasikan kesalahan pada hasil akhir karena  ada test pada setiap prosesnya.</p>

<p align="justify">Proses yang digunakan pada proyek ini menggunakan Kode QR (Quick Respon). Dimana user mahasiswa harus mendaftar terlebih dahulu menggunakan MAC Address dari perangkat HP dan menggunakan NIM dari mahasiswa tersebut. Kemudian, jika mahasiswa tersebut ingin masuk atau melakukan presensi, ia harus memasukkan NIM-nya. NIM tersebut akan mencocokkan atau mencari MAC Address yang sudah didaftarakan pada awal pendaftaran untuk bisa masuk ke akun mahasiswa tersebut. Dosen akan didaftarkan pada Admin. Admin mempunyai kewenanangan yang lebih pada aplikasi ini.</p>
		
**2.2 Struktur Organisasi**

| No. | Jabatan           | Nama               | Nim     |
|-----|-------------------|--------------------|---------|
| 1   | Ketua Tim         | Koriah             | 1603103 |
| 2   | Android Developer | Bayu Rasukma Raga  | 1603093 |
| 3   | Web Developer     | Syamsul Fahri hadi | 1603115 |
	
	
**2.3 Batasan dan Antarmuka Organisasi**

<p align="justify">Pada sistem ini, satu device milik satu mahasiswa. Jadi mahasiswa tidak bisa menggunakan akun atau device dari mahasiswa lainnya. Kalaupun terdapat beberapa mahasiswa yang tidak mempunyai HP, maka dosen akan melaukukan presensi manual. Melalui pemanggilan nama mahasiswa tersebut. Mahasiswa tidak boleh menitipkan HP-nya ke mahasiswa lain untuk melakukan presensi, karena setiap dosen akan melakukan validasi presensi.</p>


|No. | Nama 			| Nim 		| Penanggung Jawab 	  |
|----|------------------|-----------|---------------------|
| 1  | Koriah			| 1603103	| Dokumen 			  |
|	 |					|			| Database		      |
|    | 					|			| Design 			  |
| 2	 | Bayu Rasukma	    | 1603093	| Lead Android Develop|
| 3	 | Syamsul Fahri H  | 1603115	| Lead Web Develop    |


**2.4 Lingkup Tanggung Jawab**

Setiap anggota mempunyai tanggung jawab terhadap tugasnya. Anggota mempunyai jobdesk-nya masing-masing sesuai dengan poin 2.2.


### BAB 3 Proses Manajerial
	
**3.1	Tujuan dan prioritas manajemen**

<p align="justify">Tujuan dari proyek ini adalah mengembangkan sistem Aplikasi Absensi dengan menggunakan kode QR Agar bisa dijalankan dan diimplementasikan dengan baik oleh mitra. Proyek ini sangat diprioritaskan karena bermanfaat untuk menambah kinerja admin dalam mengelola data absensi dan meminimalisir penggunaan kertas sehingga biaya yang dikeluarkan oleh mitra dapat dikurangi.</p>

**3.2	Asumsi-asumsi, ketergantungan/keterkaitan dan batasan-batasan**
	
Asumsi proyek ini adalah sebagai berikut :
- Tim terdiri dari 3 orang
- Ketersediaan peralatan dan perangkat lunak
- Persetujuan dan Perizinan dari mitra
	
Proyek ini berketergantungan pada :
- Biaya
- Ketersediaan software dan hardware
- Keahlian anggota dalam penggunaan software dan bahasa pemrogramman
- Data-data yang diberikan oleh mitra

Batasan Masalah dalam proyek ini adalah sebagai berikut :
- Tidak adanya vailidasi ketika HandPhone mahasiswa dititipkan ke temanya sehingga dapat menitipkan absen
- Software yang digunakan adalah Android Studio, Sublmie Text 3 dan Firebase
-	Manajemen risiko

**3.3 Resiko Pada Proyek**

- Risiko Finansial
- Risiko Waktu
- Risiko Teknologi
- Risiko Sumberdaya Manusia
- Risiko Alat dan Bahan
			
**3.4	Makanismme monitoring dan kontroling**

- Rapat dan Pengerjaan mingguan
- Pembuatan Dokumentasi Proyek
- Testing dan evaluasi kinerja Aplikasi

### BAB 4 Prosess Teknis

**4.1	Metoda, tool dan teknik**

<p align="justify">Proyek ini akan diimplementasikan dengan memanfaatkan metodologi V Model, dan alat seperti Android Studio, Sublime Text 3 dan Firebase sebagai alat pembuatan Aplikasi ini. Menggunakan Framework laravel dan Bootstrap sebagai penunjang Aplikasi bagian WEB nya serta menggunakan teknik Object Oriented dalam pengerjaan proyek ini.</p>

![enter image description here](https://3.bp.blogspot.com/-wl4S75otnbE/Wo5nZJ_SMfI/AAAAAAAAA14/WRo38HM26Us53suuB4msSZbvLT6Z92g1QCLcBGAs/s1600/68747470733a2f2f322e62702e626c6f6773706f742e636f6d2f2d4e3144494e776a435138552f576f305943653045326a492f414141414141414141316f2f756554336831486c63324d54474d72664432584e6869484d7332794d7371444a41434c63424741732f73313630302f76.jpg)

**4.2	Dokumentasi perangkat lunak**
		
SQAP

**4.3	Fungsi-fungsi pendukung proyek**
		
Fungsi Pendukung dalam proyek ini adalah :
- Teknisi Jaringan
- Teknisi Hardware

### BAB 5 Paket Pekerjaan, Jadwal dan Anggaran

**5.1 Paket Pekerjaan**

Paket pekerjaan yang akan di lakukan :

|No|Nama  			    |Modul yang dikerjakan  |
|---|---------------------|-----------------------|
|1| Koriah 		   		|Modul Data Dosen  	    |
||		 		   		|Modul Mata Kuliah      |
||		 		   		|Modul Data Kelas	    |
|2|Bayu Rasukma Raga 	|Modul Rekap		    |
||		 		   		|Modul Scan Presensi    |
||		 		   		|Modul Jadwal    	    |
||		 		   		|Authentikasi           |
||		 		   		|Data Mahasiswa         |
|3|Syamsul Fahri Hadi 	|Modul Ruangan		    |


**5.2 Ketergantungan dan keterkaitan**

![spmp-modul](https://4.bp.blogspot.com/-e5ncz6QBMx0/Ws8Sv398rqI/AAAAAAAAAxU/q7IW96sSBx0jfCKCMkx8sAkUYwG_SjiqACLcBGAs/s500/modul-spmp.png)


**5.3 Kebutuhan-kebutuhan sumber daya**

<p align="justify">Sumber daya yang di perlukan untuk pembuatan aplikasi ini terdiri dari 3 orang dengan divisi yang sudah di tentukan di atas. dan adanya kebutuhan-kebutuhan yang diperlukan sebagai berikut :</p>

| No. | Perangkat Keras   | Perangkat Lunak | Other            |  
|-----|-------------------|-----------------|------------------|
| 1   | 3 Unit Laptop     | Sublime Text    | Koneksi Internet |
| 2   | 4 Unit Mouse      | Android Studio  | Konsumsi		   |
| 3   | 4 Unit Keyboard   | Photo Shop      | Hosting          |
| 4   | 1 Unit Komputer   | 
| 5   | 1 Unit Monitor    |


**5.4 Alokasi Anggaran dan sumber daya**

<br>
		Alokasi Anggaran dalam pembuatan aplkasi ini sebagai berikut :
	
| No. | Keperluan           | Angaran            |
|-----|---------------------|--------------------|
| 1   | 3 Unit  Laptop      | Rp. 30.500.000     |
| 2   | 4 Unit Mouse        | Rp. 400.000        |
| 3   | 4 Unit Keyboard     | Rp. 5.000.000      |
| 4   | Koneksi Internet    | Rp. 2.000.000      |
| 5   | Konsumsi            | Rp. 10.000.000     |

**5.5 Jadwal**

Jadwal dalam pengerjaan aplikasi adalaha 16 minggu atau 4 bulan, adapun rincianya sebagai berikut :

![enter image description here](https://4.bp.blogspot.com/-htw3zAK3fjU/Wo5ozfSy5jI/AAAAAAAAA2E/_tI0byI65nAuteYWROpaeYWy_x4oSAg7QCLcBGAs/s1600/68747470733a2f2f322e62702e626c6f6773706f742e636f6d2f2d38614264307230636877772f576f305331755044464f492f41414141414141414131552f4f41376b72795048537a34655f514f6b356b34304241637a61343341626f633451434c63424741732f73313630302f6a.jpg)