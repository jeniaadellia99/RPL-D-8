# Bagian Koriah :broken_heart: 
**BAB 1. PENDAHULUAN** 

**1.1	Gambaran Proyek**


<p align="justify"> Pada umumnya sistem presensi kehadiran menggunakan pemanggilan dosen ke siswa satu per satu dengan menyebutkan nama dari siswa tersebut. Dalam penggunaan sistem tersebut, sangat memakan waktu dan tidak efesien, karena memakan banyak waktu dari jam mata kuliah. Selain itu, sistem presensi manual menggunakan banyak kertas sehingga terjadi pemborosan. Pembuatan kertas menggunakan bahan baku kulit pohon, jadi jika menggunakan banyak kertas tentunya menggunakan kulit pohon secara berlebihan, jika hal ini terjadi kemungkinan besar terjadinya kerusan alam.</p>

<p align="justify">Untuk itu, kelompok 8 mempunyai gagasan yang dapat meminimialisir dari tidak efesiennya sistem presensi sekarang, yaitu dengan membuat aplikas Q-PRES (QR-Code Presensi). Aplikasi menggunakan sistem scan kode QR untuk setiap presensi pada jadwal mata kuliah di setiap Lab atau Kelas. Dari sistemnya sendiri menggunakan 3 user, yaitu mahasiswa, dosen dan admin. </p>

<p align="justify">Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk pendaftaran. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama pendaftaran untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. Pada sistem siswa, terdapat beberapa fungsi utama yaitu : </p>
- Siswa dapat melihat jadwal perkuliahan.
- Sebelum siswa melakukan presensi, dia akan mendapatkan notifikasi untuk memulai scan, jika berhasil melakukan scan siswa akan mendapat notifikasi scan telah berhasil
- Siswa dapat melihat jumlah kompen yang dia dapatkan karena keterlambatan maupun ketidakhadiran. 

<p align="justify">Sedangkan pada sistem Dosen memiliki hak akses untuk membuka presensi. Setelah para mahasiswa telah melakukan presensi, maka dosen akan mendapat data siswa yang masuk pada mata kuliah hari itu. Jika hasilnya tidak sesuai maka untuk validasinya Dosen akan pengecekan ulang untuk memastikan. Pada sistem Dosen memiliki fungsi yaitu :</p>
- Dosen bisa melihat jadwal.
- Dosen memilih jadwal yang akan dilaksanakan.
- Mempunyai hak akses untuk membuka presensi untuk mahasiswa.
- Melihat data kehadiran siswa. 
- Validasi siswa
Pada sistem Admin yaitu :
- Menerima data mahasiswa yang hadir secara otomatis. 
- Menginput data mahasiswa.
- Menginput dosen.
- Menginput jadwal Kuliah.
- Presentase presensi mahasiswa per hari dan per semester.

<p align="justify">Batasan pada Sistem Aplikasi :<br>
Pada sistem ini, satu device milik satu mahasiswa. Jadi mahasiswa tidak bisa menggunakan akun atau device dari mahasiswa lainnya. Kalaupun terdapat beberapa mahasiswa yang tidak mempunyai HP, maka dosen akan melaukukan presensi manual. Melalui pemanggilan nama mahasiswa tersebut. Mahasiswa tidak boleh menitipkan HP-nya ke mahasiswa lain untuk melakukan presensi, karena setiap dosen akan melakukan validasi presensi.</p>

**1.2 Dokumen - dokumen dalam Proyek**
- Proposal Mitra 
	Untuk kerja sama dengan mitra sebagai client. 
- Logbook
Dokumentasi hasil pengerjaan.
- Android Studio
Media pendukung unutk pembuatan aplikasi.
- Sublime
	Media pendukung unutk pembuatan aplikasi.
- Laravel
	Framework yang digunakan untuk mendukung pembuatan aplikasi.

**1.3 Evolusi SPMP**
1.	Referensi
	- https://laravel.com/
	- https://firebase.google.com/?hl=id
	- https://getbootstrap.com/
	- Software Project Management Plan
2.  Definisi, Akronim, dan Singkatan
	 - QR-Code
	- Q-PRES
	- HP

3. Jadwal Pengerjaan
	1. Penentuan Judul (Tema)
	2. Analisis Kebutuhan
		- Flowchart
		 - Use Case
		 - Mockup
		 - DFD
	3. Perancangan Perangkat Lunak
		 - Mengenai perangkat/aplikasi yang dibutuhkan untuk membantu pengerjaan.
	4. Construction 
	5. Testing

**1.4 Material Acuan**

- https://developer.android.com/studio/index.html?hl=id
- https://developer.android.com/studio/index.html?hl=id
- https://developer.android.com/index.html
- https://laravel.com/
- https://firebase.google.com/?hl=id
- https://getbootstrap.com/
	
**1.5 Definisi dan Akronim (Singkatan)**

- QR-Code	: Quick Response Code
- Q-PRES	: QR Presensi
- HP 		: Handphone
- presensi  : Kehadiran
		
**1.5 Definisi dan Akronim (Singkatan)**
	
- QR-Code	: Quick Response Code
- Q-PRES	: QR Presensi
- HP 		: Handphone
- Presensi  : Kehadiran

**BAB 2 ORGANISASI PROYEK**

**2.1 Model Proses**
	  
<p align="justify">Model Proses yang digunakan pada aplikasi menggunakan V-Model. Dikarenakan v-model sangat fleksibel, yang mendukung pengurangan maupun penambahan project dalam prosesnya. Meminimalisasikan kesalahan pada hasil akhir karena  ada test pada setiap prosesnya. Model Proses yang digunakan pada aplikasi menggunakan V-Model. Dikarenakan v-model sangat fleksibel, yang mendukung pengurangan maupun penambahan project dalam prosesnya. Meminimalisasikan kesalahan pada hasil akhir karena  ada test pada setiap prosesnya.</p>

<p align="justify">Proses yang digunakan pada proyek ini menggunakan Kode QR (Quick Respon). Dimana user mahasiswa harus mendaftar terlebih dahulu menggunakan MAC Address dari perangkat HP dan menggunakan NIM dari mahasiswa tersebut. Kemudian, jika mahasiswa tersebut ingin masuk atau melakukan presensi, ia harus memasukkan NIM-nya. NIM tersebut akan mencocokkan atau mencari MAC Address yang sudah didaftarakan pada awal pendaftaran untuk bisa masuk ke akun mahasiswa tersebut. Dosen akan didaftarkan pada Admin. Admin mempunyai kewenanangan yang lebih pada aplikasi ini.</p>
		
**2.2 truktur Organisasi**

| No. | Jabatan           | Nama               | Nim     |
|-----|-------------------|--------------------|---------|
| 1   | Ketua Tim         | Koriah             | 1603103 |
| 2   | Android Developer | Bayu Rasukma Raga  | 1603093 |
| 3   | Web Developer     | Syamsul Fahri hadi | 1603115 |
	
	
**2.3 Batasan dan Antarmuka Organisasi**

<p align="justify">Pada sistem ini, satu device milik satu mahasiswa. Jadi mahasiswa tidak bisa menggunakan akun atau device dari mahasiswa lainnya. Kalaupun terdapat beberapa mahasiswa yang tidak mempunyai HP, maka dosen akan melaukukan presensi manual. Melalui pemanggilan nama mahasiswa tersebut. Mahasiswa tidak boleh menitipkan HP-nya ke mahasiswa lain untuk melakukan presensi, karena setiap dosen akan melakukan validasi presensi.</p>


|No. | Nama 			| Nim 		| Penanggung Jawab 	  |
|----|------------------|-----------|---------------------|
| 1  | Koriah			| 1603103	| Konsep Sistem       |
|	 |					|			| Use Case		      |
|    | 					|			| Design 			  |
| 2	 | Bayu Rasukma	    | 1603093	| Lead Android Develop|
| 3	 | Syamsul Fahri H  | 1603115	| Lead Web Develop    |


**2.4 Lingkup Tanggung Jawab**

Setiap anggota mempunyai tanggung jawab terhadap tugasnya. Anggota mempunyai jobdesk-nya masing-masing sesuai dengan poin 2.2.

# Bagian Bayu :smirk_cat:

**BAB 3 Proses Manajerial**
	
**3.1	Tujuan dan prioritas manajemen**

<p align="justify">Tujuan dari proyek ini adalah mengembangkan sistem Aplikasi Absensi dengan menggunakan kode QR Agar bisa dijalankan dan diimplementasikan dengan baik oleh mitra. Proyek ini sangat diprioritaskan karena bermanfaat untuk menambah kinerja admin dalam mengelola data absensi dan meminimalisir penggunaan kertas sehingga biaya yang dikeluarkan oleh mitra dapat dikurangi.</p>

**3.2	Asumsi-asumsi, ketergantungan/keterkaitan dan batasan-batasan**
	
Asumsi proyek ini adalah sebagai berikut :
- Tim terdiri dari 3 orang
- Ketersediaan peralatan dan perangkat lunak
- Persetujuan dan Perizinan dari mitra
	
Proyek ini berketergantungan pada :
1. Biaya
2. Ketersediaan software dan hardware
3. Keahlian anggota dalam penggunaan software dan bahasa pemrogramman
4. Data-data yang diberikan oleh mitra

Batasan Masalah dalam proyek ini adalah sebagai berikut :
1. Tidak adanya vailidasi ketika HandPhone mahasiswa dititipkan ke temanya sehingga dapat menitipkan absen
2. Software yang digunakan adalah Android Studio, Sublmie Text 3 dan Firebase
3.	Manajemen risiko

Resiko yang ada pada proyek ini adalah :
1. Risiko Finansial
2. Risiko Waktu
3. Risiko Teknologi
4. Risiko Sumberdaya Manusia
5. Risiko Alat dan Bahan
			
3.4	Makanismme monitoring dan kontroling
- Rapat dan Pengerjaan mingguan
- Pembuatan Dokumentasi Proyek
-  Testing dan evaluasi kinerja Aplikasi

**BAB 4 Prosess Teknis**

**4.1	Metoda, tool dan teknik**

<p align="justify">Proyek ini akan diimplementasikan dengan memanfaatkan metodologi V Model, dan alat seperti Android Studio, Sublime Text 3 dan Firebase sebagai alat pembuatan Aplikasi ini. Menggunakan Framework laravel dan Bootstrap sebagai penunjang Aplikasi bagian WEB nya serta menggunakan teknik Object Oriented dalam pengerjaan proyek ini.</p>

![enter image description here](https://3.bp.blogspot.com/-wl4S75otnbE/Wo5nZJ_SMfI/AAAAAAAAA14/WRo38HM26Us53suuB4msSZbvLT6Z92g1QCLcBGAs/s1600/68747470733a2f2f322e62702e626c6f6773706f742e636f6d2f2d4e3144494e776a435138552f576f305943653045326a492f414141414141414141316f2f756554336831486c63324d54474d72664432584e6869484d7332794d7371444a41434c63424741732f73313630302f76.jpg)

**4.2	Dokumentasi perangkat lunak**
		
SQAP

**4.3	Fungsi-fungsi pendukung proyek**
		
Fungsi Pendukung dalam protek ini adalah :
- Teknisi Jaringan
- Teknisi Hardware
- Spesialis WEB
- Spesialis Androud



# Bagian Syamsul :rage:

**BAB 5 Paket Pekerjaan, jadwal, dan anggaran**
**5.1 Paket Pekerjaan**

Paket pekerjaan yang akan di lakukan :
1. Minggu ke 1-2         : Penentuan ide dan rumusan masalah yang dibutuhkan
2. Minggu ke 3-4		 : Pembuatan rancangan sistem aplikasi yang akan di buat
3. Minggu ke 5-10		 : Pembuatan sistem aplikasi
4. Minggu ke 11-12	     : Uji coba dan revisi bila di perlukan

**5.2 Ketergantungan dan ketrtarikan**

kebutuhan ketertarikan :
1. Penentuan ide dan rumusan masalah yang dibutuhkan
2. Pembuatan rancangan sistem aplikasi yang akan di buat
3. Pembuatan sistem aplikasi Website
4. Pembuatan sistem aplikasi Android
5. Uji coba dan simulasi
6. revisi atau perbaikan


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