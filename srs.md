<html>
<body>
<div align="center"><h1> Software Requirements Spesification</h1></div>

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


----------


----------


# I. Pendahuluan

## 1.1. Tujuan
<!DOCTYPE html>
<html>
<head></head>
<body>
<p align="justify">
Tujuan dari dokumen SRS ini adalah untuk mendeskripsikan dari aplikasi yang dibuat yaitu Aplikasi Presensi Menggunakan kode QR yang bisa disingkat juga menjadi Q-PRESS. 
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

<p align="justify">Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk pendaftaran. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama pendaftaran untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. Pada sistem siswa, terdapat beberapa fungsi utama yaitu : 
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

<p align="justify">Pada sistem Kode QR, menggunakan data dari setiap Lab. Data tersebut akan di enkripsi menjadi sebuah kode QR. Kode tersebut akan ditempel pada setiap meja dalam lab, tujuannya untuk memudahkan dalam melakukan scan karena satu siswa men-scan satu kode yang sama sehingga tidak terjadi antrian scan. Sebelum menggunakan sistem ini, user diharuskan untuk mendaftar terlebih dahulu menggunakan Nim, Nik, dan MAC address dari device yang digunakan. Kemudian Nim dan Nik tersebut akan dijadikan sebagai user untuk dapat mengakses aplikasi ini. </p>

<p align="justify">Pada sistem siswa, dapat melakukan scan Kode QR apabila dosen telah membuka akses scan QR. Setelah akses terbuka, siswa dapat melakukan scan kode yang kemudian datanya akan masuk ke dosen dan admin. Jika siswa tidak bisa men-scan kode, siswa dapat melakukan validasi kehadiran yang dilakukan oleh dosen. Selain itu, pada sistem siswa terdapat beberapa menu atau fungsi yang dapat digunakan, seperti melihat jadwal, jumlah kompen atau keterlambatan.</p>

<p align="justify">Sedangkan pada sistem dosen dapat membuka akses Scan bagi para siswa, dengan men-scan kode QR terkebih dahulu. Setelah itu dosen dapat mengetahui jumlah siswa yang hadir, jika jumlah kurang maka dosen akan melakukan validasi. Dosen dapat melihat jadwal, melihat keterlambatan siswa, kehadiran siswa, rubah jadwal.</p>

<p align="justify">Pada sistem admin yaitu memiliki hak untuk mengelola data. melihat data dosen, data mahasiswa, mengupload jadwal, rekapitulasi presensi, grafik dari presensi.</p>

<p align="justify">Kelebihan dari sistem aplikasi yang digunakan yaitu meminimalisir kecurangan dalam presensi karena menggunakan MAC address dari device siswa yang dicocokkan dengan nim siswa tersebut. </p> 

<p align="justify">Berbeda dengan sistem presensi yang digunakan oleh Universitas Teknologi Petronas, Malaysia. Mahasiswa harus mengunduh aplikasi pemindai Kode QR, kemudian memindai kode yang ditampilkan oleh dosen dikelas. Setelah memindai, mahasiswa akan diarahkan ke sebuah link, dari link tersebut mahasiswa memasukkan nomor induk mahasiswa. </p>


**2.1.1 Antarmuka Sistem**

![system environment 2.1.1](https://3.bp.blogspot.com/-V27QtTh-8ko/WpiBTVhXy9I/AAAAAAAAAq4/7vhCHXreEDkLPBIPkztsoA1bX6tl1l_aACLcBGAs/s500/systen+environment.JPG)

<p align="justify">Sistem Aplikasi Presensi Menggunakan Kode QR terdapat 3 User atau Aktor yaitu Dosen dan Mahasiswa yang mempunyai kewenangan untuk melakukan presensi. Tetapi memiliki fungsi yang berbeda, Mahasiswa  men-scan presensi untuk mengirimkan data enkripsi yang menyatakan bahwa siswa tersebut hadir. Dosen melakukan presensi untuk menyatakan bahwa jadwal mata kuliah dimulai dan membuka hak akses bagi siswa yang ingin melakukan presensi. Admin adalah aktor yang mengelola data, seperti data dosen, data siswa, data kelas, jadwal. Pada admin menggunakan Web Administrator sedangkan pada dosen dan siswa menggunakan Android App.</p>

</body>
</html>

**2.1.2	Antarmuka Pengguna**

 - **Mockup Android**
	<table>
		<tr align="center">
			<td><b>Welcome</b></td>
			<td><b>Daftar Dosen</b></td>
			<td width="300"><b>Daftar Mahasaiswa</b></td>
		</tr>
		<tr  valign="top" align="center">
				<td><img src="https://4.bp.blogspot.com/-zzgWaZB2bB0/WpJgmjU089I/AAAAAAAAA2U/0KETw2usos0gSGdT0AAbNttPZQAc6cQjACLcBGAs/s1600/1.png" width="180" height="350" /><br><p align="justify">Tampilan Welcome akan muncul ketika device belum terdaftar pada sistem. pada tampilan ini terdapat keterangan bahwa harus mendaftarkan device terlebih dahulu. kemudian ada 2 tombol yakni daftar sebagai dosen atau mahasiswa.</p></td>
				<td><img src="https://2.bp.blogspot.com/-fj4ii9zpBsw/WpJgoZF7XyI/AAAAAAAAA2o/9RdQTPaJv5womKARBrt1OQU4Xj0RjZqdwCLcBGAs/s1600/2.png" width="180" height="350" /><br><p align="justify">Pada tampilan daftar dosen, terdapat 2 inputan yakni masukan NIP dan lalamat MAC device dan 2 tombol yakni tombol daftar dan tombol batal</p></td>
				<td><img src="https://3.bp.blogspot.com/-DmSeKlhuck4/WpJgo8IIQhI/AAAAAAAAA2s/K8PxNOj12yQYs0EOA8KRvHOcMm3W74cbwCLcBGAs/s1600/3.png" width="180" height="350" /><br><p align="justify">Pada daftar mahasiswa sama seperti daftar dosen, hanya saja inputanya berupa NIM</p></td>		
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
			<td><b>Menu Absen</td>
			<td><b>Rubah Jadwal</td>
			<td><b>List Scan Mahasiswa</td>
		</tr>
		<tr valign="top" align="center">
				<td><img src="https://2.bp.blogspot.com/-I76d037JJTA/WpJgmncc8kI/AAAAAAAAA2c/i6ko1qfOPNcX8EcQ5xQKXxjYmNw6kMGMACLcBGAs/s1600/10.png" width="180" height="350" /><br><p align="justify">Di menu rekap absen pada dosen juga sama seperti pada menu jadwal, yakni akan mendownload sebuah file yang berupa .pdf</p></td>
				<td><img src="https://2.bp.blogspot.com/-JoE6kve1QdY/WpJgmlckFHI/AAAAAAAAA2Y/xUM3uYnVlW0_GjEQOOSR2WPaehX1LGvngCLcBGAs/s1600/11.png" width="180" height="350" /><br><p align="justify">Pada menu ubah jadwal terdapat keterangan default jadwal yang sudah ditentukan, dan ada beberapa inputan yang bisa di pilih yakni masukan tanggal baru, jam baru, dan ruangan yang baru kemudian juga ada 2 tombol untuk simpan dan batal</p></td>
				<td><img src="https://3.bp.blogspot.com/-UlctF2mEaCY/WpJgn5MD00I/AAAAAAAAA2g/qvDOy_y8DTccsT65K01Ic5tzk9QSyLiuQCLcBGAs/s1600/12.png" width="180" height="350" /><br><p align="justify">List scan Mahasiswa terdapat list yang akan menampilkan daftar mahasiswa yang berhasil scan absen.</p></td>		
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


|Operasi|Fungsi  |
|--|--|
|Daftar Dosen|Digunakan untuk mendaftar bagi dosen|
|Daftar Mahasiswa|Digunakan untuk mendaftar bagi mahasiswa|
|Login|Digunakan untuk masuk akses aplikasi|
|Tambah Mahasiswa |Digunakan untuk menambhakan mahasiswa  |
|Tambah Dosen|Digunakan untuk menambahkan dosen|
|Tambah Kelas| Digunakan untuk menambahkan kelas|
|Cari Dosen| Digunakan untuk mencari Dosen|
|Cari Mahasiswa| Digunakan untuk mencari mahasiswa |
|Detail|Digunakan untuk memberikan informasi Detail tentang data kelas|
|Kembali|Digunakan untuk kemabli ke halaman sebelumnya|
|Hapus|digunakan untuk menghapus data yang ingin dihapus|
|Edit| Digunakan untuk mengedit data yang ingin di edit|
|Simpan| Digunakan untuk menyimpan data yang sudah diedit |
|Download|Digunakan untuk mendownload file|
|Import Jadwal|Digunakan untuk memasukkan Jadwal yang berupa .xls atau .xlsx|
|Ubah Jadwal|Digunakan untuk mengubah jadwal|
|Lihat Jadwal|Digunakan untuk melihat jadwal|
|Tutup|Digunakan untuk menutup aktivitas|
|Mulai|Digunakan untuk memulai presensi|

**2.1.8	Kebutuhan Adaptasi**
<br>
<b>Skip</b>

## 2.2 Spesifikasi Kebutuhan Fungsional
![use case 2.2](https://1.bp.blogspot.com/-itqdFOCPl04/Wpfi1V7hmpI/AAAAAAAAAqg/CjCbwoClmzUNxOvo_omnrcFf126xVQNjQCLcBGAs/s500/Use+case+srs-+fix.png)


## 2.3 Spesifikasi Kebutuhan Non-Fungsional

<li>Usability</li>
kebutuhan yang digunakan dalam aplikasi agar mudah dipakai oleh user. Seperti penggunaan Bootsrap yang digunakan untuk mebuat tampilan aplikasi yang lebih menarik, Material Design seperti warna dan  moockup.
<li>Security</li>
untuk keamanan user dosen dan mahasiswa harus mendaftar terlebih dahulu dengan menggunakan NIK,NIP,Mac Address. Sedangkan user admin harus login dengan akun.
<li>reability</li>
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
	Pada aplikasi Q-PRESS atau presensi menggunakan kode QR harus menggunakan Hp atau Smartphone masing-masing user. Satu user hanya boleh menggunakan sat device. Karena pendaftaran menggunakan Mac Address dari device yang sedang digunakan oleh user. Kalau user tersebut ganti device maka harus mendaftar lagi. 
	Pada saat presensi user tidak boleh menitipkan device untuk login dan melakukan presensi. Dan untuk mengatasi hasl yang tidak diinginkan atau kecurangan pada saat presensi, Dosen akan melakukan presensi kelvalidan kehadiran. 
</p>

## 2.6 Asumsi - asumsi ketertarikan

<b>Skip</b>

## 2.7 Kebutuhan Penyeimbang

<p style="color:red"><b>Skip</b></p>


# III. Persyaratan Kebutuhan

 ## 3.1 Persyaratan Antarmuka Eksterna <br>
 <p align="justify"> Salah satu syarat untuk dapat mengakses aplikasi ini adalah dengan mendaftar, pendaftaran secara online melalui jaringan lokal. Login menggunakan Mac Address dari masing - masing device. Kemudian Sistem akan mencocokkan Mac Address dengan Nim atau Nik dari user untuk sinkronisasi data pada database. Setelah berhasil login masing-masing user dapat melakukan presensi.</p>

 ## 3.2 Functional Requirement <br> 
 <p align="justify">
 	Logika Struktur terdapat pada bagian 3.3.1
 </p>

 **3.2.1 Daftar Dosen**

 
|  |  |
|--|--|
| Nama fungsi  |Daftar Dosen  |
|Ref|Bag 2.1.2, Daftar Dosen | 
|Trigger|Membuka aplikasi Q-PRESS|
|Precondition|Halaman utama Aplikasi untuk Pendaftaran|
|Basic Path|1. Dosen mengklik fungsi Daftar Dosen <br>2. Dosen Memasukkan NIP dan Mac Address|
|Alternative|Tidak Ada|
|Post Condition|User dapat Daftar dan dapat mengakses aplikasi presensi|
|Exception Push	|Tidak ada Koneksi|

**3.2.2	Daftar Mahasiswa**

|  |  |
|--|--|
| Nama fungsi  |Daftar Mahasiswa  |
|Ref|Bag 2.1.2, Daftar Mahasiswa | 
|Trigger|Membuka aplikasi Q-PRESS|
|Precondition|Halaman utama Aplikasi untuk Pendaftaran|
|Basic Path|1. Mahasiswa mengklik fungsi Daftar Mahasiswa <br>2. Mahasiswa Memasukkan NIP dan Mac Address|
|Alternative|Tidak Ada|
|Post Condition|Mahasiswa dapat Daftar dan dapat mengakses aplikasi presensi|
|Exception Push	|Tidak ada Koneksi|


**3.2.3 Halaman Mahasiswa**

|  |  |
|--|--|
| Nama fungsi  |Halaman utama Mahasiswa  |
|Ref|Bag 2.1.2, Halaman Mahasiswa | 
|Trigger|Membuka aplikasi Q-PRESS, sudah mendaftarkan NIM dan Mac|
|Precondition|Pendaftaran untuk Mahasiswa|
|Basic Path|1. Mahasiswa sudah terdaftar dan jika sudah terdaftar maka bisa langsung menggunakan aplikasi yang menampilkan Halaman mahasiswa sebagai halaman utamanya|
|Alternative|Tidak Ada|
|Post Condition|Mahasiswa dapat melihat Halaman utama mahasiswa dan dapat mengakses fungsi lainnya |
|Exception Push	|1. Tidak ada Koneksi <br> 2. Mahasiswa belum mendaftar|

**3.2.4	SCAN**

|  |  |
|--|--|
| Nama fungsi  |SCAN  |
|Ref|Bag 2.1.2, SCAN | 
|Trigger|Membuka aplikasi Q-PRESS, sudah mendaftarkan NIM dan Mac|
|Precondition|Halaman Utama|
|Basic Path|1. User menekan tombol SCAN. <br> 2. Sistem mulai mode scan|
|Alternative|Tidak Ada|
|Post Condition|User dapat men-scan kode yang telah disediakan |
|Exception Push	|1. Tidak ada Koneksi <br> 2. Mahasiswa belum mendaftar <br> 3. Smartphone tidak mendukung scan kode|

**3.2.5	Halaman dosen**

|  |  |
|--|--|
| Nama fungsi  |Halaman utama Dosen  |
|Ref|Bag 2.1.2, Halaman Dosen | 
|Trigger|Membuka aplikasi Q-PRESS, sudah mendaftarkan NIK dan Mac|
|Precondition|Pendaftaran untuk Dosen|
|Basic Path|1. Dosen sudah terdaftar dan jika sudah terdaftar maka bisa langsung menggunakan aplikasi yang menampilkan Halaman Dosen sebagai halaman utamanya|
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat melihat Halaman utama mahasiswa dan dapat mengakses fungsi lainnya |
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum mendaftar|

**3.2.6	Halaman Menu Jadwal**

|  |  |
|--|--|
| Nama fungsi  |Menu Jadwal  |
|Ref|Bag 2.1.2, Menu Jadwal | 
|Trigger|Membuka Aplikasi QR-Kode|
|Precondition|Halaman Menu Dosen|
|Basic Path|1. Dosen sudah berada di halaman utama. <br> 2. Dosen mengklik halaman menu dosen. <br> 3. Dosen mengklik Menu Lihat Jadwal.|
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat mendownload jadwal dan menampilkan jadwal|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum mendaftar|

**3.2.7	Menu Rekap Absensi**

|  |  |
|--|--|
| Nama fungsi  |Menu Rekap Absensi |
|Ref|Bag 2.1.2, Menu Rekap Absensi | 
|Trigger|Membuka Aplikasi QR-Kode|
|Precondition|Halaman Menu Dosen|
|Basic Path|1. Dosen sudah berada di halaman utama. <br> 2. Dosen mengklik halaman menu dosen. <br> 3. Dosen mengklik Menu Lihat Rekap Absensi.|
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat mendownload Rekap Absensi dan melihat rekap absen|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum mendaftar|

**3.2.8	Menu Rubah Jadwa**

|  |  |
|--|--|
| Nama fungsi  |Menu Rubah Jadwal|
|Ref|Bag 2.1.2, Menu Rekap Absensi | 
|Trigger|Membuka Aplikasi QR-Kode|
|Precondition|Halaman Menu Dosen|
|Basic Path|1. Dosen sudah berada di halaman utama. <br> 2. Dosen mengklik Ubah Jadwal. <br> 3. Dosen mengedit jadwal yang ingin di rubah|
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat mengubah jadwal mata kuliah dan meyimpannya|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum mendaftar|

**3.2.9	List Scan Mahasiswa**

|  |  |
|--|--|
| Nama fungsi  |List Scan Mahasiswa|
|Ref|Bag 2.1.2, List Scan Mahasiswa | 
|Trigger|Membuka Aplikasi QR-Kode|
|Precondition|Halaman Menu Dosen|
|Basic Path|1. Dosen sudah membuka akses presensi bagi mahasiswa.|
|Alternative|Tidak Ada|
|Post Condition|Dosen dapat melihat dan mengedit mahasiswa yang telah men-scan kode sebagai bukti kehadiran|
|Exception Push	|1. Tidak ada Koneksi <br> 2. Dosen belum mendaftar|

**3.2.10	Data Kelas pada Admin**

|  |  |
|--|--|
| Nama fungsi  |Data Kelas|
|Ref|Bag 2.1.2, Data Kelas | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin masuk ke dashboard admin. <br> 2. Admin Mengklik menu Data Kelas|
|Alternative|Admin mengklik Data Kelas pada Dashboard|
|Post Condition|Admin dapat melihat dan mengedit data kelas|
|Exception Push	|1. Tidak ada Koneksi|

**3.2.11	Data Mahasiswa pada Admin**

|  |  |
|--|--|
| Nama fungsi  |Data Mahasiswa|
|Ref|Bag 2.1.2, Data Mahasiswa | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin masuk ke dashboard admin. <br> 2. Admin Mengklik menu Data Mahasiswa|
|Alternative|Admin mengklik Data Mahasiswa pada Dashboard|
|Post Condition|Admin dapat melihat dan mengedit data Mahasiswa|
|Exception Push	|1. Tidak ada Koneksi|

**3.2.12	Data Dosen pada Admin**

|  |  |
|--|--|
| Nama fungsi  |Data Dosen|
|Ref|Bag 2.1.2, Data Dosen | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin masuk ke dashboard admin. <br> 2. Admin Mengklik menu Data Dosen|
|Alternative|Admin mengklik Data Dosen pada Dashboard|
|Post Condition|Admin dapat melihat dan mengedit data Dosen|
|Exception Push	|1. Tidak ada Koneksi|

**3.2.13	Jadwal pada Admin**

|  |  |
|--|--|
| Nama fungsi  |Menu Jadwal|
|Ref|Bag 2.1.2, Jadwal | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin masuk ke dashboard admin. <br> 2. Admin Mengklik menu Jadwal|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat melihat dan mengubah Jadwal |
|Exception Push	|1. Tidak ada Koneksi|

**3.2.14	Rekap Presensi pada Admin**

|  |  |
|--|--|
| Nama fungsi  |Rekap Presensi|
|Ref|Bag 2.1.2, Rekap Presensi | 
|Trigger|Login sebagai admin|
|Precondition|Halaman Dashboard|
|Basic Path|1. Admin masuk ke dashboard admin. <br> 2. Admin Mengklik menu Rekap Presensi|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat melihat dan mengedit data Presensi Tiap angkatan dan tiap kelas|
|Exception Push	|1. Tidak ada Koneksi|

 ## 3.3 Struktur Detail Kebutuhan Non-Fungsional <br>

**3.3.1	Logika Struktur Data**

<p align="justify">
	Struktur data logika pada sistem Aplikasi presensi menggunakan kehadiran terdapat struktur Database yang dijelaskan menggunakan ERD.
</p>

![bag 3.3.1 ERD](https://2.bp.blogspot.com/-yX2txfpbPRE/WppnhL43FFI/AAAAAAAAArI/oc8bqp4jO-EiKw1prMIN5sOEYI6a2T8ZgCLcBGAs/s1000/erd.png)

<b>Mahasiswa</b>


|Data Item| Type | Deskripsi|
|--|--|--|
|Nama |Text  |Nama mahasiswa|
|Id_mhs|Integer|nomor auto increment mahasiswa |
|Nim|Integer|Nomor Absen Mahasiswa|
|Id_kelas|Integer|Nomor auto increment kelas|

<br>
<b>Dosen</b>

|Data Item| Type | Deskripsi|
|------|-----|-------|-----------|
|Nama |Text  |Nama Dosen|
|Id_dosen|Integer|nomor auto increment Dosen |
|Nip|Integer|Nomor pengenal dosen|
|Id_kelas|Integer|Nomor auto increment kelas|

<br>
<b>Mata Kuliah</b>
<br>

|Data Item| Type | Deskripsi|
|--|--|--|
|Nama_matkul |Text  |Nama Mata kuliah|
|id_matkul|Integer|nomor urut mata kuliah|
|kode_matkul|Integer|Kode Mata kuliah|

<br>
<b>Kelas</b>
<br>

|Data Item| Type | Deskripsi|
|--|--|--|
|Id_kelas|Integer|nomor urut Kelas |
|Nama_kelas|Text|Nama Kelas|

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
|nama_admin |Text|Nama admin |
  
	