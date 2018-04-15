<html>
<body>
<div align="center"><h1> Software Requirements Spesification</h1></div>

<p align="center"><b>Version 1.1 </b><br>
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



# I. Pendahuluan

## 1.1. Tujuan
<!DOCTYPE html>
<html>
<head></head>
<body>
<p align="justify">
Tujuan dari dokumen SRS ini adalah untuk mendeskripsikan spesifikasi kebutuhan dari aplikasi yang dibuat yaitu Aplikasi Presensi Menggunakan kode QR yang bisa disingkat juga menjadi Q-PRESS. 
Pada dokumen ini akan dijelaskan bagaimana sistem dari aplikasi Q-PRESS, seperti Sistem Interface, Mockup, dan lain-lain.

Diharapkan dokumen ini dapat menjadi acuan dalam proses maupun penggunaan aplikasi yang dibuat. </p>

## 1.2 Lingkup

<p align="justify"> Pada Sistem aplikasi ini akan menjadi sistem presensi kehadiran yang digunakan dalam dunia pendidikan. Dengan tujuan dapat mengefesiensi dan mengefektifkan dari sistem sebelumnya yang dilakukan secara manual. Dengan memaksimalkan efesiensi waktu dan penyimpanan data dengan menggunakan databse online, pada sistem aplikasi ini akan lebih mudah dipahami oleh user. 

<p align="justify"> Pada aplikasi ini menggunakan sebuah kode yang berisikan data, yang nantinya akan dijadikan sebagai acuan kehadiran. Selain itu, perihal administrasi presensi akan lebih aman dan efisien dengan menggunakan aplikasi ini. </p>

<p align="justify">Terdapat fungsi-fungsi yang dapat memudahkan user mahasiswa, dosen dan admin. Seperti melihat jadwal, kehadiran, keterlambatan, data dosen, data mahasiswa, dan rekapitulasi presensi. </p>

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

IEEE. <i>IEEE Std 830-1998 IEEE Recommended Practice for Software Requirements 
Specifications.</i>IEEE Computer Society, 1998.

*Fathansyah.2015.BASIS DATA Revisi Kedua.Bandung:Informatika Bandung*

*SRSExample-webapp.pdf*

*https://www.slideshare.net/ErwanNurArief/srs-erwan*

## 1.5 Overview

<p align="justify"> Pada bab selanjutnya yaitu mendeskripsikan sistem yang terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, Sistem Interface aplikasi dan alur sistemnya.  
Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. 
Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.</p>


# **II. Gambaran Umum**
<p align="justify"> Pada umumnya sistem presensi kehadiran menggunakan pemanggilan dosen ke siswa satu per satu dengan menyebutkan nama dari siswa tersebut. Dalam penggunaan sistem tersebut, sangat memakan waktu dan tidak efesien, karena memakan banyak waktu dari jam mata kuliah. Selain itu, sistem presensi manual menggunakan banyak kertas sehingga terjadi pemborosan. Pembuatan kertas menggunakan bahan baku kulit pohon, jadi jika menggunakan banyak kertas tentunya menggunakan kulit pohon secara berlebihan, jika hal ini terjadi kemungkinan besar terjadinya kerusakan alam.</p>

<p align="justify"> Untuk itu, kelompok 8 mempunyai gagasan yang dapat meminimialisir dari tidak efesiennya sistem presensi sekarang, yaitu dengan membuat aplikas Q-PRES (QR-Code Presensi). Aplikasi menggunakan sistem scan kode QR untuk setiap presensi pada jadwal mata kuliah di setiap Lab atau Kelas. Dari sistemnya sendiri menggunakan 3 user, yaitu mahasiswa, dosen dan admin. </p>

<p align="justify">Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk penRegistrasian. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama penRegistrasian untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. Pada sistem siswa, terdapat beberapa fungsi utama yaitu : 
<ul><li>Siswa dapat melihat jadwal perkuliahan.</li>
<li>Sebelum siswa melakukan presensi, dia akan mendapatkan notifikasi untuk memulai scan, jika berhasil melakukan scan siswa akan mendapat notifikasi scan telah berhasil.</li>
<li>Siswa dapat melihat jumlah kompen yang dia dapatkan karena keterlambatan maupun ketidakhadiran. </li></ul></p>

<p align="justify">Sedangkan pada sistem Dosen memiliki hak akses untuk membuka presensi. Setelah para mahasiswa telah melakukan presensi, maka dosen akan mendapat data siswa yang masuk pada mata kuliah hari itu. Jika hasilnya tidak sesuai maka untuk validasinya Dosen akan pengecekan ulang untuk memastikan. 
Pada sistem Dosen memiliki fungsi yaitu :
<ul><li>Dosen bisa melihat jadwal.</li>
<li>Dosen memilih jadwal yang akan dilaksanakan.</li>
<li>Mempunyai hak akses untuk membuka presensi untuk mahasiswa.</li>
<li>Melihat data kehadiran siswa. </li>
<li>Validasi siswa</ul></li>

Admin adalah user yang mengelola setiap data pada sistem ini. 
Pada sistem Admin memiliki beberapa fungsi yaitu :
<ul><li>Menerima data mahasiswa yang hadir secara otomatis. </li>
<li>Menginput data mahasiswa.</li>
<li>Menginput dosen.</li>
<li>Menginput jadwal Kuliah.</li>
<li>Presentase presensi mahasiswa per hari dan per semester.</ul></li></p>

## 2.1 Perspektif Produk

<p align="justify">Aplikasi Q-PRESS atau Aplikasi Presensi menggunakan Kode QR adalah sebuah sistem kehadiran yang diaplikasikan pada android. Dimana user dari aplikasi ini adalah siswa dan dosen, sedangkan untuk pengelolaan datanya dikelola oleh admin yang menggunakan sistem web. </p>

<p align="justify">Pada sistem Kode QR, menggunakan data dari setiap Lab. Data tersebut akan di enkripsi menjadi sebuah kode QR. Kode tersebut akan ditempel pada setiap meja dalam lab, tujuannya untuk memudahkan dalam melakukan scan karena satu siswa men-scan satu kode yang sama sehingga tidak terjadi antrian scan. Sebelum menggunakan sistem ini, user diharuskan untuk menRegistrasi terlebih dahulu menggunakan Nim, Nik, dan MAC address dari device yang digunakan. Kemudian Nim dan Nik tersebut akan dijadikan sebagai user untuk dapat mengakses aplikasi ini. </p>

<p align="justify">Pada sistem siswa, dapat melakukan scan Kode QR apabila dosen telah membuka akses scan QR. Setelah akses terbuka, siswa dapat melakukan scan kode yang kemudian datanya akan masuk ke dosen dan admin. Jika siswa tidak bisa men-scan kode, siswa dapat melakukan validasi kehadiran yang dilakukan oleh dosen. Selain itu, pada sistem siswa terdapat beberapa menu atau fungsi yang dapat digunakan, seperti melihat jadwal, jumlah kompen atau keterlambatan.</p>

<p align="justify">Sedangkan pada sistem dosen dapat membuka akses Scan bagi para siswa, dengan men-scan kode QR terkebih dahulu. Setelah itu dosen dapat mengetahui jumlah siswa yang hadir, jika jumlah kurang maka dosen akan melakukan validasi. Dosen dapat melihat jadwal, melihat keterlambatan siswa, kehadiran siswa, rubah jadwal.</p>

<p align="justify">Pada sistem admin yaitu memiliki hak untuk mengelola data. melihat data dosen, data mahasiswa, mengupload jadwal, rekapitulasi presensi, grafik dari presensi.</p>

<p align="justify">Kelebihan dari sistem aplikasi yang digunakan yaitu meminimalisir kecurangan dalam presensi karena menggunakan MAC address dari device siswa yang dicocokkan dengan nim siswa tersebut. </p> 

<p align="justify">Berbeda dengan sistem presensi yang digunakan oleh Universitas Teknologi Petronas, Malaysia. Mahasiswa harus mengunduh aplikasi pemindai Kode QR, kemudian memindai kode yang ditampilkan oleh dosen dikelas. Setelah memindai, mahasiswa akan diarahkan ke sebuah link, dari link tersebut mahasiswa memasukkan nomor induk mahasiswa. </p>


**2.1.1 Antarmuka Sistem**

![2.1.1 antarmukasistem](https://4.bp.blogspot.com/-LdcVnkg4OJQ/Ws8XDK3l52I/AAAAAAAAAxg/VDJmAcalzAg-QibEtMrLqyblqHZzHHnJgCLcBGAs/s500/systen+environment.JPG)

<p align="justify">Sistem Aplikasi Presensi Menggunakan Kode QR terdapat 3 User atau Aktor yaitu Dosen dan Mahasiswa yang mempunyai kewenangan untuk melakukan presensi. Tetapi memiliki fungsi yang berbeda, Mahasiswa  men-scan presensi untuk mengirimkan data enkripsi yang menyatakan bahwa siswa tersebut hadir. Dosen melakukan presensi untuk menyatakan bahwa jadwal mata kuliah dimulai dan membuka hak akses bagi siswa yang ingin melakukan presensi. Admin adalah aktor yang mengelola data, seperti data dosen, data siswa, data kelas, jadwal. Pada admin menggunakan Web Administrator sedangkan pada dosen dan siswa menggunakan Android App.</p>

</body>
</html>

**2.1.2	Antarmuka Pengguna**

 - **Mockup Android**
	<table>
		<tr align="center">
			<td><b>Welcome</b></td>
			<td><b>Registrasi Dosen</b></td>
			<td width="300"><b>Registrasi Mahasaiswa</b></td>
		</tr>
		<tr  valign="top" align="center">
				<td><img src="https://4.bp.blogspot.com/-zzgWaZB2bB0/WpJgmjU089I/AAAAAAAAA2U/0KETw2usos0gSGdT0AAbNttPZQAc6cQjACLcBGAs/s1600/1.png" width="180" height="350" /><br><p align="justify">Tampilan Welcome akan muncul ketika device belum terRegistrasi pada sistem. pada tampilan ini terdapat keterangan bahwa harus menRegistrasikan device terlebih dahulu. kemudian ada 2 tombol yakni Registrasi sebagai dosen atau mahasiswa.</p></td>
				<td><img src="https://2.bp.blogspot.com/-fj4ii9zpBsw/WpJgoZF7XyI/AAAAAAAAA2o/9RdQTPaJv5womKARBrt1OQU4Xj0RjZqdwCLcBGAs/s1600/2.png" width="180" height="350" /><br><p align="justify">Pada tampilan Registrasi dosen, terdapat 2 inputan yakni masukan NIP dan lalamat MAC device dan 2 tombol yakni tombol Registrasi dan tombol batal</p></td>
				<td><img src="https://3.bp.blogspot.com/-DmSeKlhuck4/WpJgo8IIQhI/AAAAAAAAA2s/K8PxNOj12yQYs0EOA8KRvHOcMm3W74cbwCLcBGAs/s1600/3.png" width="180" height="350" /><br><p align="justify">Pada Registrasi mahasiswa sama seperti Registrasi dosen, hanya saja inputanya berupa NIM</p></td>		
		</tr>
		<tr align="center">
			<td><b>Halaman Mahasiswa </td>
			<td><b>Scan QR Code</td>
			<td><b>Scan Sukses</td>
		</tr>
		<tr valign="top" align="center">
				<td><img src="https://4.bp.blogspot.com/-E6WsXFSeBKY/WpJgpJCujnI/AAAAAAAAA2w/oZaaTQgnRxM2RVHAlpjjXbMA9jy5Qa5XACLcBGAs/s1600/4.png" width="180" height="350" /><br><p align="justify">Pada tampilan halaman mahasiswa terdapat beberapa informasi yang bisa dilihat yakni, absensi, presensi, dan kompensasi. Ada juga 2 tombol yakni tombol jadwal dan tombol scan</p></td>
				<td><img src="https://4.bp.blogspot.com/-p5vpVwLNvXk/WpJgppoj0-I/AAAAAAAAA20/2mWWNUOtSBc-6vQVD31ILMDekuer3EHrQCLcBGAs/s1600/5.png" width="180" height="350" /><br><p align="justify">Pada tampilan scan menggunakan kamera pada device untuk memindai kode QR</p></td>
				<td><img src="https://2.bp.blogspot.com/-S32nItnw8Ag/WpJgqG6bWUI/AAAAAAAAA24/o68LXWmrJE8T5Lg6I6pH-LmrcwSLzFozQCLcBGAs/s1600/6.png" width="180" height="350" /><br><p align="justify">Pada Tampilan sukses akan ada keterangan bahwa sudah berhasil menscan dan ada tombol tutup untuk kembali ke halaman utama</p></td>		
		</tr>
			</tr>
		<tr align="center">
			<td><b>Halaman Dosen</td>
			<td><b>Menu Dosen</td>
			<td><b>Menu Jadwal</td>
		</tr>
		<tr valign="top" align="center">
				<td><img src="https://1.bp.blogspot.com/-DT8fw2_Plrc/WpJgqW-5-EI/AAAAAAAAA28/osoRhzBibB4z_ubzo2seoOq1adRheklHwCLcBGAs/s1600/7.png" width="180" height="350" /><br><p align="justify">Di tampilan halaman dosen, mengunakan cardview yang ditunjang dengan 2 tombol pada tiap kontentnya yakni tombl mulai pada tiap mata kuliah dan tombol ubah jadwal mata kuliah tersebut. Ada juga tombol menu yang akan bisa digunakan untuk membuka menu</p></td>
				<td><img src="https://2.bp.blogspot.com/-OrMsOpvIgqE/WpJgq_4vPdI/AAAAAAAAA3A/TdNm8CwFNJ0OKIIYxAynTsEIiTphO9mjgCLcBGAs/s1600/8.png" width="180" height="350" /><br><p align="justify">Di menu terdapat keterangan nama dan NIP dosen dan ada 2 pilihan menu yakni lihat jadwal dan lihat rekap absensi</p></td>
				<td><img src="https://2.bp.blogspot.com/-Cv5Yd_VGEU0/WpJgrelIltI/AAAAAAAAA3E/KPzi6wLLVYMJB0WP7kjAdLoUZhK7ZOtuACLcBGAs/s1600/9.png" width="180" height="350" /><br><p align="justify">Menu jadwal akan menampilan tombol download yang akan mengunduh file jadwal yang berupa .pdf</p></td>		
		</tr>
		</tr>
			</tr>
		<tr align="center">
			<td colspan="3"> <b>Splash Screen</td>
		</tr>
		<tr align="center">
			<td colspan="3"><img src="https://4.bp.blogspot.com/-RxyKPxYZ9H0/WpJgoF3xbcI/AAAAAAAAA2k/5WN4HeFuFmI1IXMcJEyXmB9S9VBghTeQQCLcBGAs/s1600/13.png" width="180" height="350" /><br><p align="justify">Tampilan splash screen terdapat keterangan aplikasi dan logo aplikasi</p></td>
		</tr>
	</table>
</div>

 - **Mockup Website**
	
<table align="center">
		<tr>
			<td><b>Dashboard Admin</td>
		</tr>
		<tr>
			<td><img src="https://4.bp.blogspot.com/-1bDyR-xSVp4/WpJhS6HlaSI/AAAAAAAAA3g/xHucj0eSHewp2QM5E_jQu0VvHIuEHVOXgCLcBGAs/s1600/dashboard.jpg"> <br><p align="justify">Pada Dashboard admin terdapat panel-panel yang berisi beberapa informasi seperti jumlah mahasiswa, jumlah dosen, jumlah kelas, kalender dan ucapan selamat datang.</p></td>
		</tr>
				<tr>
			<td><b>Data Dosen</td>
		</tr>
		<tr>
			<td><img src="https://4.bp.blogspot.com/-oTpZC5yDDHk/WpJhS11I9YI/AAAAAAAAA3Y/RWioKmHUFooXGmOEVfnGw0bycLNehL_cACLcBGAs/s1600/data%2Bdosen.jpg"><br><p align="justify">Menu Dosen terdapat tabel list nama-nama dosen dan tombol untuk edit dosen</p></td>
		</tr>
				<tr>
			<td><b>Data Kelas</td>
		</tr>
		<tr>
			<td><img src="https://1.bp.blogspot.com/-MzMv4SlEHy8/WpJhS6EDfpI/AAAAAAAAA3c/PnDpxT8VrvgGoclq7qhKIm_s7WPnQqK0QCLcBGAs/s1600/data%2Bkelas.jpg"><br><p align="justify">Di dalam menu kelas terdapat data kelas berupa table. Di dalam table tersebut juga ada tombol untuk melihat detail kelasnya</p></td>
		</tr>
				<tr>
			<td><b>Data Mahasiswa</td>
		</tr>
		<tr>
			<td><img src="https://3.bp.blogspot.com/-cimuoYqCJ-4/WpJhUMFTVUI/AAAAAAAAA3k/Ap9VlNdPOMcIqCMIGl68GLy2zydP6BeKgCLcBGAs/s1600/data%2Bmhs.jpg"><br><p align="justify">Di menu mahasiswa terdapat Data mahasiswa perkelas berupa tabel</p></td>
		</tr>
				<tr>
			<td><b>Edit Data Dosen</td>
		</tr>
		<tr>
			<td><img src="https://3.bp.blogspot.com/-WEmRHs3XnjQ/WpJhUUdmV1I/AAAAAAAAA3o/jWVkN9LXP6oKvwc3ujwbUqTSWTdWheK2wCLcBGAs/s1600/edit%2Bdosen.jpg"><br><p align="justify">Pada edit menu data dosen terdapat tombol download tamplate dan upload file berupa .xls</p></td>
		</tr>
				<tr>
			<td><b>Edit Data Mahasiswa</td>
		</tr>
		<tr>
			<td><img src="https://4.bp.blogspot.com/-tBb_4EXiMeU/WpJhUhDY_CI/AAAAAAAAA3s/S3WODC0i_ygfANN2Zmor3-KL0PSWNZV6QCLcBGAs/s1600/edit%2Bmsahasiswa.jpg"><br><p align="justify">Pada Edit Data Mahasiswa sama seperti Edit Data Dosen yakni terdapat tombol untuk upload dan download untuk mengedit data mahasiswa</p></td>
		</tr>
				<tr>
			<td><b>Jadwal</td>
		</tr>
		<tr>
			<td><img src="https://4.bp.blogspot.com/-PAD0N1WgFUo/WpJhVPhaAzI/AAAAAAAAA3w/U1FCYgLTuC0BMPXVFO9jH96Pdl0I6uyOgCLcBGAs/s1600/jadwal.jpg"><br><p align="justify">Di dalam halaman jadwal terdapat dua tombol yaitu Lihat jadwal dan ubah jadwal.</p></td>
		</tr>
				<tr>
			<td><b>Login Admin</td>
		</tr>
		<tr>
			<td><img src="https://4.bp.blogspot.com/-S7XMnGnLohQ/WpJhVY0pGrI/AAAAAAAAA30/D2kuP-a58X03M0PZjeH8SJfAKJ8OTeDeACLcBGAs/s1600/login.jpg"><br><p align="justify">Pada halaman Login terdapat beberapa input yang harus di masukan oleh admin yakni username, password dan captcha. Dan ada juga tombol untuk login</p></td>
		</tr>
				<tr>
			<td><b>Rekap Absensi</td>
		</tr>
		<tr>
			<td><img src="https://3.bp.blogspot.com/-7lixgM4oNEY/WpenRt_q7xI/AAAAAAAAA4g/CZlq-Q39w9wxeXfRHZKBdUHHqsBgT7aGgCLcBGAs/s1600/rekap.jpg"><br><p align="justify">DI halamman rekap abesnsi admin bisa langsung mendownload hasilnya dengan menekan tombol Download</p></td>
		</tr>
				<tr>
			<td><b>Tambah Data Kelas</td>
		</tr>
		<tr>
			<td><img src="https://2.bp.blogspot.com/-GQ3V8XLRJ_g/WpJhWTWWHzI/AAAAAAAAA38/pvQl-DbHKLc-AKPV23X06ncA50fhma6PQCLcBGAs/s1600/tambah%2Bkelas.jpg"><br><p align="justify">Pada tambah kelas Admin  harus memasukan nama kelas terlebih dahulu</p></td>
		</tr>
				<tr>
			<td><b>Edit Jadwal</td>
		</tr>
		<tr>
			<td><img src="https://1.bp.blogspot.com/-6GUTyCOFLns/WpJhWvUHVsI/AAAAAAAAA4A/qQnHU3tJ0soWjCHxv4PJkCxRWQwXxZKiwCLcBGAs/s1600/ubah%2Bjadwal.jpg"><br><p align="justify">Pada Edit jadwal sama seperti pada Edit mahasiswa dan dosen yakni terdapat 2 tombol untuk download tamplate dan upload untuk mengunggah data yang sudah di edit</p></td>
		</tr>
	</table>



**2.1.3	Antarmuka Perangkat Keras**

Antarmuka Perangkat Keras yang di butuhkan pada  aplikasi ini meliputi :

 1. SmartPhone Android
	 
Untuk menggunakan Aplikasi ini smartphone harus minimal memiliki OS Android versi Jelly Beans dan memiliki Camera.

 2. Personal Computer

Untuk menjalankan Aplikasi ini admin membutuhkan sebuah PC yang menggunakan OS Windows, Linux, atau MAC dan sudah terinstall browser yang support laravel 

![enter image description here](https://3.bp.blogspot.com/-OYtTom8jkTw/Wpq-9UjA0vI/AAAAAAAAA4w/-UDCsVuAqnAxRGPagRoq4Skzv4FQpvmpgCLcBGAs/s1600/antarmuka+sistem.png)

**2.1.4	Antarmuka Perangkat Lunak**

Tidak ada antarmuka perangkat lain yang dibutuhkan dalam pengembangan Aplikasi Q-Press ini.


**2.1.5	Antarmuka Komunikasi**


Antarmuka komunikasi yang dibutuhkan dalam perangkat lunak ini merupakan antarmuka untuk melakukan koneksi dalam jaringan internet meliputi:

1. Antarmuka komunikasi pada sisi Server

Aplikasi pada sisi server merupakan aplikasi yang melayani semua request yang dikirimkan oleh client yang meminta layanan dengan protocol http. Oleh karena itu pada sisi server dibutuhkan adanya sebuah web server yang terhubung dalam jaringan internet.  Web server tersebut harus mempunyai alamat IP dan domain yang dapat dikenali dalam jaringan internet.

2. Antarmuka komunikasi pada sisi Client

Pada sisi client proses yang dilakukan adalah melakukan request kepada server untuk meminta layanan http.  Oleh karena itu antarmuka yang dibutuhkan pada sisi client adalah perangkat komunikasi yang memungkinkan komputer client terhubung dengan jaringan internet.

**2.1.6	Batasan Memori**

Penggunaan Memori untuk Aplikasi pada Smartphone Android diusahakan tidak melebihi dari 100MB

**2.1.7	Operasi - Operasi**


| ID_Operasi | Operasi              | Fungsi                                                         |
|------------|----------------------|----------------------------------------------------------------|
| OP01       | Registrasi Dosen     | Digunakan untuk menRegistrasi bagi dosen                       |
| OP02       | Registrasi Mahasiswa | Digunakan untuk menRegistrasi bagi mahasiswa                   |
| OP03       | Login                | Digunakan untuk masuk akses aplikasi                           |
| OP04       | Tambah Mahasiswa     | Digunakan untuk menambhakan mahasiswa                          |
| OP05       | Tambah Dosen         | Digunakan untuk menambahkan dosen                              |
| OP06       | Tambah Kelas         | Digunakan untuk menambahkan kelas                              |
| OP07       | Cari Dosen           | Digunakan untuk mencari Dosen                                  |
| OP08       | Cari Mahasiswa       | Digunakan untuk mencari mahasiswa                              |
| OP09       | Detail               | Digunakan untuk memberikan informasi Detail tentang data kelas |
| OP010      | Kembali              | Digunakan untuk kemabli ke halaman sebelumnya                  |
| OP011      | Hapus                | digunakan untuk menghapus data yang ingin dihapus              |
| OP012      | Edit                 | Digunakan untuk mengedit data yang ingin di edit               |
| OP013      | Simpan               | Digunakan untuk menyimpan data yang sudah diedit               |
| OP014      | Download             | Digunakan untuk mendownload file                               |
| OP015      | Import Jadwal        | Digunakan untuk memasukkan Jadwal yang berupa .xls atau .xlsx  |
| OP016      | Ubah Jadwal          | Digunakan untuk mengubah jadwal                                |
| OP017      | Lihat Jadwal         | Digunakan untuk melihat jadwal                                 |
| OP018      | Tutup                | Digunakan untuk menutup aktivitas                              |
| OP019      | Mulai                | Digunakan untuk memulai presensi                               |

**2.1.8	Kebutuhan Adaptasi**
<br>

## 2.2 Spesifikasi Kebutuhan Fungsional

![usecaserevisi](https://2.bp.blogspot.com/-GGIlVuLUMKk/Wssc_IK3L5I/AAAAAAAAAwU/Oi8bsiUcSgoNOPcmGrfwIRG0r-7UuJrWQCLcBGAs/s500/usecaserevisi.jpg)

<b>2.2.1	Data Kelas</b>

<b> <li>Tabel Kebutuhan Fungsional </b>
	<br>

|  No| Deskripsi  |
|------------------|------------------------------|
|1|Sistem dapat menampilkan halaman penRegistrasian bagi user dosen maupun mahasiswa melalui perangkat android |
|2|Sistem dapat menampilkan halaman web login pada user admin|
|3|Sistem dapat menampilkan jadwal mata kuliah mahasiswa dan dosen pada perangkat android|
|4|Sistem dapat men-scan kode QR untuk melakukan presensi bagi mahasiswa dan dosen melalui perangkat android|
|5|Sistem dapat melakukan operasi-operasi seperti edit dan simpan untk melakukan perubahan data jadwal yang dilakukan oleh dosen pada perangkat android|
|6|Sistem dapat merubah status mahasiswa setelah presensi, ketika dosen melakukan validasi presensi bagi mahasiswa pada perangkat android|
|7|Sistem dapat menampilkan rekap presensi mahasiswa yang diminta oleh dosen dan admin melalui perangkat android dan web |
|8|Sistem dapat melakukan permintaan admin untuk mengupload jadwal dan melakukan validasi dokumen melalui website|
|9|Sistem dapat menampilkan dan melakukan operasi - operasi pada Data kelas melalui web admin|
|10|Sistem dapat menampilkan dan melakukan operasi - operasi pada Data mahasiswa melalui web admin|
|11|Sistem dapat menampilkan dan melakukan operasi - operasi pada Data Dosen melalui web admin|


<b>2.2.1 Data Kelas</b>

![enter image description here](https://1.bp.blogspot.com/-sJm5euw-tUc/Wp_cP0rFzOI/AAAAAAAAA5U/rPftPNVQdwoDIScYcSeolV38AHr3zCWHgCEwYBhgL/s1600/Data+kelas.png)

Admin bisa Memilih menu data kelas untuk melihat dan mengolah data kelas dengan cara :
1. Admin masuk ke dashboard admin
2. Sistem menampilkan menu dashboard
3. Admin mengklik tombol menu Data Kelas
4. Sistem menampilkan menu  Data Kelas
Xref : bagian 3.2.8

<b>2.2.2 Registrasi Mahasiswa</b>

![enter image description here](https://1.bp.blogspot.com/-Sf8a8e1iANY/Wp_cerC8DJI/AAAAAAAAA5s/o7XA9YgGjwIkaPVuqZamNffkMEFj4yYwACLcBGAs/s1600/Registrasi+Mahasiswa.png)

Mahasiswa harus menRegistrasi untuk bisa mengakses ke dalam aplikasi dengan cara :
1. Mahasiswa mengklik tombol Registrasi Mahasiswa.  
2. Sistem menampilkan halaman penRegistrasian yang terdiri dari kolom Nim dan Mac.  
3. Mahasiswa Memasukkan Nim dan Mac Address.  
4. Sistem menyimpan Nim dan Mac dari mahasiswa.
Xref : bagian 3.2.2

<b>2.2.3 Registrasi Dosen</b>

![enter image description here](https://2.bp.blogspot.com/-vuzil8qTePo/Wp_ceVsRiWI/AAAAAAAAA5k/FbSEiPqPZc0JBbmXgJvPBywrJF-O_um1wCLcBGAs/s1600/Registrasi+Dosen.png)

Dosen harus menRegistrasi untuk bisa mengakses ke dalam aplikasi dengan cara :
1. Dosen mengklik tombol Registrasi Dosen.  
2. Sistem menampilkan halaman penRegistrasian yang terdiri dari kolom Nip dan Mac.  
3. Dosen Memasukkan NIP dan Mac Address.  
4. Sistem menyimpan Nip dan Mac Address dari Dosen.
Xref : bagian 3.2.1

<b>2.2.4 Rekap Presensi Admin</b>

![enter image description here](https://3.bp.blogspot.com/-Nt8seRDIjGU/Wp_cQOUoG4I/AAAAAAAAA5Y/JtgsGsHGFQoI5ijcB70Sp8THagl2m58HwCEwYBhgL/s1600/Download+Rekap+Admin.png)


Admin bisa mendownload rekap hasil presensi dengan cara :
  
1. Admin masuk ke dashboard admin.
2. Sistem menampilkan menu dashboard  
3. Admin Mengklik tombol menu Rekap Presensi
4. Sistem menampilkan menu halaman Rekap
Xref : bagian 3.2.12

<b>2.2.5 Rekap Presensi Dosen</b>

![enter image description here](https://4.bp.blogspot.com/-QKxF7qEMO1s/Wp_cQYmlMiI/AAAAAAAAA5c/4XNAb6ZC70Ei4CaNqZ4gPpUHK9LkpwFfwCEwYBhgL/s1600/Download+Rekap+dosen.png)

Dosen bisa mendownload rekap hasil presensi dengan cara :
  
1. Dosen sudah berada di halaman utama  
2. Dosen mengklik menu dosen  
3. Dosen mengklik Menu Lihat Rekap Absensi  
4. Dosen mendownload file rekap Absen
5. Sistem memberikan akses kepada dosen untuk dapat mendownload file
Xref : bagian 3.2.5

<b>2.2.6 Lihat Jadwal pada Dosen</b>

![enter image description here](https://1.bp.blogspot.com/-vqZBRG6KJIU/Wp_cRJNFX_I/AAAAAAAAA5g/uK_qgIOKw_cTvqXTr5FSqIKcv-ISc9zDQCEwYBhgL/s1600/Lihat+jadwal+dosen.png)

Dosen bisa Melihat jadwal mata kuliah yang dia ajar  dengan cara :
1. Sistem menampilkan halaman menu admin  
2. Dosen mengklik tombol menu dosen
3. Sistem menampilkan halaman menu dosen
4. Dosen mengklik Menu Lihat Jadwal  
5. Sistem menampilkan Jadwal sesuai permintaan Dosen
Xref : bagian 3.2.4

<b>2.2.7 Data Dosen pada Admin</b>

![enter image description here](https://4.bp.blogspot.com/-ay2CiVbgCLQ/Wp_ceco_LJI/AAAAAAAAA5o/XJFjT4FSbsYx8ziyn3eytudg6OyQ0utwQCLcBGAs/s1600/Data+dosen.png)

Admin bisa Mengolah data dosen  dengan cara :
1. Admin masuk berada di dashboard admin 
2. Admin Mengklik tombol menu Data Dosen
3. Sistem Menampilkan Data Dosen
Xref : bagian 3.2.10

<b>2.2.8 Lihat Jadwal Mahasiswa</b>

![lihatjadwalmatkulmahasiswa](https://4.bp.blogspot.com/-xKNILhWjjvw/Wp_mChs8ikI/AAAAAAAAAss/dBn8eYsjmjE0l1HN65zPbrOMLmjvyBKQgCLcBGAs/s1600/Lihat+jadwal+mahasiswa.png)

Mahasiswa dapat melihat jadwal mata kuliah dengan cara :
1. Mahasiswa masuk ke halaman beranda mahasiswa
2. Mahasiswa mengklik menu lihat jadwal
3. Sistem menampilkan menu lihat jadwal
4. Mahasiswa mendownload jadwal mata kuliah
5. Mahasiswa dapat melihat jadwal yang sudah didownload.
Xref : 3.2.11

<b>2.2.9 Login Admin</b>

![login admin](https://1.bp.blogspot.com/-c9dzV1VjTXc/Wp_nFAmqCCI/AAAAAAAAAs0/XhPliNl4qq4eVLpdql0FQVDjWMo3MGtGwCLcBGAs/s1600/Login.png)

Admin melakukan Login pada web dengan cara :
1. Admin Masuk ke Web QPRESS
2. Admin memasukkan User name, Password dan Captcha
3. Sistem akan melakukan validasi
4. Jika tidak sesuai, maka login akan gagal
5. Jika berhasil login, admin akan masuk ke dashboard admin
6. Sistem menampilkan menu dashboard
Xref : 3.2.13

<b>2.2.10 Scan Presensi pada Dosen</b>

![scanpresensidosen](https://3.bp.blogspot.com/-vGKGxoDTXIY/Wp_oVFVxqTI/AAAAAAAAAtA/M3lKKx5GUaIbm9nDJX9eD3r48Meiuk2IQCLcBGAs/s1600/Scan+dosen.png)

Dosen melakukan presensi untuk membuka hak akses presensi pada dosen :
1. Dosen berada di dashboard dosen pada QPRESS android app
2. Dosen memilih mata kuliah dan jadwal
3. Sistem menampilkan rincian data jadwal
4. Dosen mengklik button scan
5. Sistem melakukan scan
Xref : 3.2.14

<b>2.2.11 Scan presensi pada Mahasiswa </b>

![scanpresensipadamhs](https://2.bp.blogspot.com/-y_msYCBxAp4/Wp_qxQFmJNI/AAAAAAAAAtM/YyisdhF7BrYHtPplYK_GtygN1jLh1ntFwCLcBGAs/s1600/Scan+Mahasiswa.png)

Mahasiswa dapat melakukan scan preseni dengan cara :
1. Mahasiswa berada di dashboard Mahasiswa
2. Mahasiswa dapat melakukan scan presensi
3. Sistem melakukan scan
4. Sistem mengirim data hasil scan ke admin dan dosen
Xref : 3.2.3

<b>2.2.12 Upload Jadwal pada Admin </b>

![uploadjadwaladmin](https://1.bp.blogspot.com/-UhzTnPC4POY/Wp_s6_6eXqI/AAAAAAAAAtg/LWapsn3divs0qw0kl678gntv0n0PNyGMwCLcBGAs/s1600/Upload+Jadwal.png)

Admin dapat melakukan Upload Jadwal dengan cara :
1. Admin berada pada dashboard admin
2. Admin mengklik menu jadwal
3. Sistem menampilkan menu jadwal
4. Admin mengupload jadwal
5. Sistem memvalidasi format dokumen yang diupload oleh admin
6. Sistem menyimpan hasil data yang diupload oleh admin
Xref : 3.2.11


## 2.3 Spesifikasi Kebutuhan Non-Fungsional

<li>Usability</li>
kebutuhan yang digunakan dalam aplikasi agar mudah dipakai oleh user. Seperti penggunaan Bootsrap yang digunakan untuk mebuat tampilan aplikasi yang lebih menarik, Material Design seperti warna dan  moockup.
<li>Security</li>
untuk keamanan user dosen dan mahasiswa harus menRegistrasi terlebih dahulu dengan menggunakan NIK,NIP,Mac Address. Sedangkan user admin harus login dengan akun.
<li>Reability</li>
Sistem scan hanya berlaku selama jam mata kuliah berlangsung.

## 2.4 Karakteristik Pengguna

|Katagori Pengguna| Tugas|Hak Akses ke Aplikasi
|------|------|------|
|Administrator|Rekapitulasi Presensi|Administrator
|			  |Menginput data mahasiswa|
|			  |Menginput data dosen|
|			  |Menginput Jadwal Kuliah|
|			  |Presentase presensi mahasiswa per hari dan per 			 semester|
|			  |Menerima data kehadiran mahasiswa|
|Dosen		  |Melihat dan memilih jadwal kuliah yang akan di laksanakan|Aplikasi Qpress sebagai user dosen
|			  |Validasi mahasiswa|
|			  |Melihat presensi mahasiswa|
|Mahasiswa	  |Melihat Jadwal Perkuliahan|Aplikasi Qpress sebagai user mahasiswa
|			  |Melihat jumlah kompensasi |

## 2.5 Batasan - batasan

<p align="justify">
	Pada aplikasi Q-PRESS atau presensi menggunakan kode QR harus menggunakan Hp atau Smartphone masing-masing user. Satu user hanya boleh menggunakan sat device. Karena penRegistrasian menggunakan Mac Address dari device yang sedang digunakan oleh user. Kalau user tersebut ganti device maka harus menRegistrasi lagi. 
	Pada saat presensi user tidak boleh menitipkan device untuk login dan melakukan presensi. Dan untuk mengatasi hasl yang tidak diinginkan atau kecurangan pada saat presensi, Dosen akan melakukan presensi kelvalidan kehadiran. 
</p>

## 2.6 Asumsi - asumsi keterkaitan


## 2.7 Kebutuhan Penyeimbang


# III. Persyaratan Kebutuhan

 ## 3.1 Persyaratan Antarmuka Eksternal <br>
 <p align="justify"> Salah satu syarat untuk dapat mengakses aplikasi ini adalah dengan menRegistrasi, penRegistrasian secara online melalui jaringan lokal. Login menggunakan Mac Address dari masing - masing device. Kemudian Sistem akan mencocokkan Mac Address dengan Nim atau Nik dari user untuk sinkronisasi data pada database. Setelah berhasil login masing-masing user dapat melakukan presensi.</p>

 ## 3.2 Functional Requirement <br> 
 <p align="justify">
 	Logika Struktur terdapat pada bagian 3.3.1
 </p>

 **3.2.1 Registrasi Dosen**

| Nama fungsi  |Registrasi Dosen  |
|--|--|
|Ref|Bag 2.1.2, Registrasi Dosen | 
|Trigger|Membuka aplikasi Q-PRESS|
|Precondition|Halaman utama Aplikasi untuk PenRegistrasian|
|Basic Path|1. Dosen mengklik tombol Registrasi Dosen <br>2. Sistem menampilkan halaman penRegistrasian yang terdiri dari kolom Nip dan Mac <br>3. Dosen Memasukkan NIP dan Mac Address <br> 4. Sistem menyimpan Nip dan Mac Address dari Dosen|
|Alternative|Tidak Ada|
|Post Condition|User dapat Registrasi dan dapat mengakses aplikasi presensi|
|Exception Push	|Tidak ada Koneksi|

**3.2.2	Registrasi Mahasiswa**

| Nama fungsi  |Registrasi Mahasiswa  |
|--|--|
|Ref|Bag 2.1.2, Registrasi Mahasiswa | 
|Trigger|Membuka aplikasi Q-PRESS|
|Precondition|Halaman utama Aplikasi untuk PenRegistrasian|
|Basic Path|1. Mahasiswa mengklik tombol Registrasi Mahasiswa <br>2. Sistem menampilkan halaman penRegistrasian yang terdiri dari kolom Nim dan Mac <br>3. Mahasiswa Memasukkan Nim dan Mac Address <br> 4. Sistem menyimpan Nim dan Mac dari mahasiswa|
|Alternative|Tidak Ada|
|Post Condition|Mahasiswa dapat Registrasi dan dapat mengakses aplikasi presensi|
|Exception Push	|Tidak ada Koneksi|

**3.2.3	Scan Presensi bagi Mahasiswa**

| Nama fungsi  |Scan Presensi bagi Mahasiswa  |
|--|--|
|Ref|Bag 2.1.2, Scan | 
|Trigger|Membuka aplikasi Q-PRESS, sudah menRegistrasikan NIM dan Mac|
|Precondition|Halaman Utama Mahasiswa|
|Basic Path|1. Mahasiswa menekan tombol SCAN. <br> 2. Sistem mulai mode scan. <br> 3. Sistem menyimpan data Nim dan Mac address dari mahasiswa tersebut yang sudah menscan kode <br> 4. Sistem menyimpan data hasil scan untuk dikirim ke dosen dan admin|
|Alternative|Tidak Ada|
|Post Condition|Mahasiswa dapat men-scan kode yang telah disediakan |
|Exception Push	|1. Tidak ada Koneksi <br> 2. Mahasiswa belum menRegistrasi <br> 3. Smartphone tidak mendukung scan kode|

**3.2.4	Halaman Menu Lihat Jadwal pada Dosen**

| Nama fungsi  |Menu Lihat Jadwal  |
|--|--|
|Ref|Bag 2.1.2, Menu Lihat Jadwal | 
|Trigger|Membuka Aplikasi QR-Kode|
|Precondition|Halaman Menu Dosen|
|Basic Path|1. Dosen mengklik menu dosen <br> 2. Sistem menampilkan menu Dosen <br>3. Dosen mengklik Menu Lihat Jadwal <br> 4. Sistem menampilkan Jadwal sesuai permintaan Dosen|
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat mendownload jadwal dan menampilkan jadwal|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum menRegistrasi|

**3.2.5	Menu Rekap Absensi pada Dosen**

| Nama fungsi  |Menu Rekap Absensi |
|--|--|
|Ref|Bag 2.1.2, Menu Rekap Absensi | 
|Trigger|Membuka Aplikasi QR-Kode|
|Precondition|Halaman Menu Dosen|
|Basic Path|1. Sistem menampilkan menu Dosen <br> 2. Dosen mengklik Menu Lihat Rekap Absensi <br> 3. Sistem menampilkan menu Lihat Rekap Absensi <br> 4. Dosen mendownload file rekap Absen. <br> 5. Sistem memberikan akses kepada dosen untuk dapat mendownload file. <br> 6. Dosen dapat melihat data rekap yang sudah didownload|
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat melihat rekap absen yang sudah di download|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum menRegistrasi|

**3.2.6	List Scan Mahasiswa**

| Nama fungsi  |List Scan Mahasiswa|
|--|--|
|Ref|Bag 2.1.2, List Scan Mahasiswa | 
|Trigger|Membuka Aplikasi QR-Kode|
|Precondition|Halaman Menu Dosen|
|Basic Path|1. Dosen sudah membuka akses presensi bagi mahasiswa <br> 2. Sistem mulai mode SCAN <br> 3. Sistem mengirimkan data hasil scan presensi |
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat melihat dan mengedit mahasiswa yang telah men-scan kode sebagai bukti kehadiran|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum menRegistrasi|

**3.2.7	Data Kelas pada Admin**

| Nama fungsi  |Data Kelas|
|--|--|
|Ref|Bag 2.1.2, Data Kelas | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin Mengklik menu Data Kelas <br> 2. Sistem menampilkan menu Data Kelas |
|Alternative|1. Admin mengklik Data Kelas pada Dashboard <br> 2. Sistem menampilkan menu Data Kelas|
|Post Condition|Admin dapat melihat dan mengelola data kelas|
|Exception Push	|1. Tidak ada Koneksi|

**3.2.8	Data Mahasiswa pada Admin**

| Nama fungsi  |Data Mahasiswa|
|--|--|
|Ref|Bag 2.1.2, Data Mahasiswa | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin Mengklik menu Data Mahasiswa <br> 2. Sistem menampilkan menu Data Mahasiswa|
|Alternative|1. Admin mengklik menu Data Mahasiswa pada Dashboard <br> 2. Sistem menampilkan menu Data Mahasiswa|
|Post Condition|Admin dapat melihat dan mengelola data Mahasiswa|
|Exception Push	|1. Tidak ada Koneksi|

**3.2.9	Data Dosen pada Admin**

| Nama fungsi  |Data Dosen|
|--|--|
|Ref|Bag 2.1.2, Data Dosen | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin Mengklik menu Data Dosen <br> 2. Sistem menampilkan menu data dosen|
|Alternative|1. Admin mengklik menu Data Dosen pada Dashboard <br> 2. Sistem menampilkan menu data dosen|
|Post Condition|Admin dapat melihat dan mengelola data Dosen|
|Exception Push	|1. Tidak ada Koneksi|

**3.2.10	Jadwal pada Admin**

| Nama fungsi  |Menu Jadwal|
|--|--|
|Ref|Bag 2.1.2, Jadwal | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin Mengklik menu Jadwal <br> 2. Sistem menampilkan menu jadwal|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat mengupload dan mendownload Jadwal |
|Exception Push	|1. Tidak ada Koneksi|

**3.2.11	Rekap Presensi pada Admin**

| Nama fungsi  |Rekap Presensi|
|--|--|
|Ref|Bag 2.1.2, Rekap Presensi | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin Mengklik menu Rekap Presensi <br> 2. Sistem menampilkan menu Rekap Presensi|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat melihat dan mengelola data Presensi Tiap angkatan dan tiap kelas|
|Exception Push	|1. Tidak ada Koneksi|

**3.2.12	Login Admin**

| Nama fungsi  |Login Admin|
|--|--|
|Ref|Bag 2.1.2, Rekap Presensi | 
|Trigger|Admin Mengakses URL|
|Precondition|Halaman Utama Login|
|Basic Path|1. Admin Mengisi username, password dan captcha <br> 2. Sistem Memvailadsi username dan password. <br> 3. Admin masuk ke halaman dashboard jika berhasil login dan jika gagal, kembali mengisi username dan password|
|Alternative|Tidak Ada|
|Post Condition|Admin berhasil login dan masuk ke menu dashboard admin|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Session admin telah habis|

**3.2.13 Scan Dosen**

| Nama fungsi  |Scan Dosen|
|--|--|
|Ref|Bag 2.1.2, Rekap Presensi | 
|Trigger|Dosen Membuka Aplikasi|
|Precondition|Halaman Dosen|
|Basic Path|1. Dosen Memilih mata kuliah dengan mengklik tombol mulai  <br> 2.Dosen Mengklik  scan t <br> 3. Sistem menampilkan mode scan. <br>5. Sistem memvailidasi hasil scan|
|Alternative|Tidak Ada|
|Post Condition|1. Scan berhasil <br> 2. Masuk ke hasil list scan mahasiswa|
|Exception Push	|1. Tidak ada Koneksi|

 ## 3.3 Struktur Detail Kebutuhan Non-Fungsional <br>

**3.3.1	Logika Struktur Data**

<p align="justify">
	Struktur data logika pada sistem Aplikasi presensi menggunakan kehadiran terdapat struktur Database yang dijelaskan menggunakan ERD.
</p>

![enter image description here](https://1.bp.blogspot.com/-RGwaDVBy2CE/WqoZemkw_FI/AAAAAAAAAu4/8Qdy4v7wvk8UN7RCgYT7IxwpBlAaAXcyQCLcBGAs/s1600/erd.JPG)

<b>Mahasiswa</b>


|Data Item| Type | Deskripsi|
|--|--|--|
|Nama |Varchar  |Nama mahasiswa|
|Id_mhs|Integer|nomor auto increment mahasiswa |
|Nim|Integer|Nomor Absen Mahasiswa|
|Id_kelas|Integer|Nomor auto increment kelas|


<b>Dosen</b>

| Data Item  | Type   |Deskripsi |
|------------|--------|----------|
| Id_dosen   |Integer |primary key|
| Nama       |Varchar |Nama Dosen|
| NIP 		 |Integer |Nomor pengenal dosen|
|Id_kelas	 |Integer |forigen key|

<br>
<b>Mata Kuliah</b>
<br>

|Data Item| Type | Deskripsi|
|--|--|--|
|Nama_matkul |Varchar  |Nama Mata kuliah|
|id_matkul|Integer|nomor urut mata kuliah|
|kode_matkul|Integer|Kode Mata kuliah|

<br>
<b>Kelas</b>
<br>

|Data Item| Type | Deskripsi|
|--|--|--|
|Id_kelas|Integer|nomor urut Kelas |
|Nama_kelas|Varchar|Nama Kelas|

<br>
<b>Detail Kelas</b>
<br>

|Data Item| Type | Deskripsi|
|--|--|--|
|Id_detail_kelas|Integer|nomor urut Detail Kelas |
|Id_kelas|Integer|nomor urut Kelas |
|id_matkul|Integer|nomor urut mata kuliah|
|Nip|Integer|Nomor pengenal dosen|

<br>
<b>Jadwal</b>
<br>

|Data Item| Type | Deskripsi|
|--|--|--|
|Thn_angkatan|Integer|Tahun ajaran |
|Id_jadwal|Integer|nomor urut jadwal |
|Id_kelas|Integer|nomor urut Kelas |
|id_matkul|Integer|nomor urut mata kuliah|

<br>
<b>Admin</b>
<br>

|Data Item| Type | Deskripsi|
|-------------------|---------------------|---------------------|
|Id_admin	|Integer|Nomor urut admin|
|nama_admin |Varchar|Nama admin |
  