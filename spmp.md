
# Bagian Koriah :broken_heart: 
**BAB 1. PENDAHULUAN** 

**1.1	Gambaran Proyek**

Pada umumnya sistem presensi kehadiran menggunakan pemanggilan dosen ke siswa satu per satu dengan menyebutkan nama dari siswa tersebut. Dalam penggunaan sistem tersebut, sangat memakan waktu dan tidak efesien, karena memakan banyak waktu dari jam mata kuliah. Selain itu, sistem presensi manual menggunakan banyak kertas sehingga terjadi pemborosan. Pembuatan kertas menggunakan bahan baku kulit pohon, jadi jika menggunakan banyak kertas tentunya menggunakan kulit pohon secara berlebihan, jika hal ini terjadi kemungkinan besar terjadinya kerusan alam.

Untuk itu, kelompok 8 mempunyai gagasan yang dapat meminimialisir dari tidak efesiennya sistem presensi sekarang, yaitu dengan membuat aplikas Q-PRES (QR-Code Presensi). Aplikasi menggunakan sistem scan kode QR untuk setiap presensi pada jadwal mata kuliah di setiap Lab atau Kelas. Dari sistemnya sendiri menggunakan 3 user, yaitu mahasiswa, dosen dan admin. 
Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk pendaftaran. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama pendaftaran untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. Pada sistem siswa, terdapat beberapa fungsi utama yaitu : 
- Siswa dapat melihat jadwal perkuliahan.
- Sebelum siswa melakukan presensi, dia akan mendapatkan notifikasi untuk memulai scan, jika berhasil melakukan scan siswa akan mendapat notifikasi scan telah berhasil
- Siswa dapat melihat jumlah kompen yang dia dapatkan karena keterlambatan maupun ketidakhadiran. 
Sedangkan pada sistem Dosen memiliki hak akses untuk membuka presensi. Setelah para mahasiswa telah melakukan presensi, maka dosen akan mendapat data siswa yang masuk pada mata kuliah hari itu. Jika hasilnya tidak sesuai maka untuk validasinya Dosen akan pengecekan ulang untuk memastikan. Pada sistem Dosen memiliki fungsi yaitu :
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

Batasan pada Sistem Aplikasi :
Pada sistem ini, satu device milik satu mahasiswa. Jadi mahasiswa tidak bisa menggunakan akun atau device dari mahasiswa lainnya. Kalaupun terdapat beberapa mahasiswa yang tidak mempunyai HP, maka dosen akan melaukukan presensi manual. Melalui pemanggilan nama mahasiswa tersebut. Mahasiswa tidak boleh menitipkan HP-nya ke mahasiswa lain untuk melakukan presensi, karena setiap dosen akan melakukan validasi presensi.

**1.2 Dokumen - dokumen dalam Proyek**
	  
- Proposal Proyek 
- Logbook
- Dokumentasi pengerjaan.
- Modul penggunaan Android
- Modul atau tutorial mengunakan laravel
- Modul atau tutorial menggunakan firebase
- Laporan

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
- https://developer.android.com/index.html
- https://laravel.com/
- https://firebase.google.com/?hl=id
- https://getbootstrap.com/
		
**1.5 Definisi dan Akronim (Singkatan)**
	
- QR-Code	: Quick Response Code
- Q-PRES	: QR Presensi
- HP 		: Handphone
- Presensi  : Kehadiran

**BAB 2 ORGANISASI PROYEK**

**2.1 Model Proses**
	  Model Proses yang digunakan pada aplikasi menggunakan V-Model. Dikarenakan v-model sangat fleksibel, yang mendukung pengurangan maupun penambahan project dalam prosesnya. 
	  Meminimalisasikan kesalahan pada hasil akhir karena  ada test pada setiap prosesnya.
		
**2.2 Struktur Organisasi**

| No. | Jabatan           | Nama               | Nim     |
|-----|-------------------|--------------------|---------|
| 1   | Ketua Tim         | Koriah             | 1603103 |
| 2   | Android Developer | Bayu Rasukma Raga  | 1603093 |
| 3   | Web Developer     | Syamsul Fahri hadi | 1603115 |
	
	
**2.3 Batasan dan Antarmuka Organisasi**
	  |No. | Nama 				| Nim 		| Penanggung Jawab 	  |
	  |-----------------------------------------------------------|
	  |1.  | Koriah			    | 1603103	| Konsep Sistem       |
	  |	   |					|			| Use Case		      |
	  |    | 					|			| Design 			  |
	  |-----------------------------------------------------------|
	  |	   | Bayu Rasukma	    | 1603093	| Lead Android Develop|
	  |-----------------------------------------------------------|
	  |	   | Syamsul Fahri H    | 1603115	| Lead Web Develop    |

	  --> Silahkan tambah lagi bagian-bagiannya :)

**2.4 Lingkup Tanggung Jawab**
	  
Setiap anggota mempunyai tanggung jawab terhadap tugasnya. Anggota mempunyai jobdesk-nya masing-masing sesuai dengan poin 2.2.

# Bagian Bayu :smirk_cat:

**BAB 3 Proses Manajerial**
	
**3.1	Tujuan dan prioritas manajemen**

Tujuan dari proyek ini adalah mengembangkan sistem Aplikasi Absensi dengan menggunakan kode QR Agar bisa dijalankan dan diimplementasikan dengan baik oleh mitra. Proyek ini sangat diprioritaskan karena bermanfaat untuk menambah kinerja admin dalam mengelola data absensi dan meminimalisir penggunaan kertas sehingga biaya yang dikeluarkan oleh mitra dapat dikurangi.

**3.2	Asumsi-asumsi, ketergantungan/keterkaitan dan batasan-batasan**
	
Asumsi proyek ini adalah sebagai berikut :
-  	Tim terdiri dari 3 orang
-  	Ketersediaan peralatan dan perangkat lunak
- 	Persetujuan dan Perizinan dari mitra
	
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

Proyek ini akan diimplementasikan dengan memanfaatkan metodologi V Model, dan alat seperti Android Studio, Sublime Text 3  dan Firebase sebagai alat pembuatan Aplikasi ini. Juga Menggunakan Framework laravel dan bootstrap sebagai penunjang Aplikasi bagian WEB nya serta menggunakan teknik Object Oriented dalam pengerjaan proyek ini. --> Bagian yang dirubah

**4.2	Dokumentasi perangkat lunak**
		
SQAP

**4.3	Fungsi-fungsi pendukung proyek**
		
Tim Pendukung proyek ini terdiri dari :

1. Teknisi Jaringan
2. Teknisi Hardware
3. Spesialis Web
4. Spesialis Android



# Bagian Syamsul :rage:
**BAB 5 Paket Pekerjaan, jadwal, dan anggaran**
	
**5.1 Paket Pekerjaan**
		
Paket pekerjaan yang akan di lakukan :
1. Minggu ke 1-2        : Penentuan ide dan rumusan masalah yang dibutuhkan
2. Minggu ke 3-4		: Pembuatan rancangan sistem aplikasi yang akan di buat
3. Minggu ke 5-10		: Pembuatan sistem aplikasi
4. Minggu ke 11-12		: Uji coba dan revisi bila di perlukan

**5.2 Ketergantungan dan ketrtarikan**

Semua sumber daya saling ketergantungan satu sama lain dalam hal pembuatan aplikasi.

**5.3 Kebutuhan-kebutuhan sumber daya**

Sumber daya yang di perlukan untuk pembuatan aplikasi ini terdiri dari 3 orang dengan divisi yang sudah di tentukan di atas. dan adanya kebutuhan-kebutuhan yang diperlukan sebagai berikut :

| No. | Kebutuhan             |
|-----|-----------------------|
| 1   | 3 Unit Laptop         |
| 2   | Koneksi Internet      |
| 3   | Pangan                |


**5.4 Alokasi Anggaran dan sumber daya**
		Alokasi Anggaran dalam pembuatan aplkasi ini sebagai berikut :
	
| No. | Keperluan           | Angaran            |
|-----|---------------------|--------------------|
| 1   | Laptop              | Rp. 3.500.000      |
| 2   | Koneksi Internet    | Rp. 200.000        |
| 2   | Pangan              | Rp. 600.000        |

**5.5 Jadwal**

Jadwal dalam pengerjaan aplikasi adalaha 12 minggu atau 3 bulan, adapun rincianya sebagai berikut :
1. Minggu ke 1-2        : Penentuan ide dan rumusan masalah yang dibutuhkan
2. Minggu ke 3-4		: Pembuatan rancangan sistem aplikasi yang akan di buat
3. Minggu ke 5-10		: Pembuatan sistem aplikasi
4. Minggu ke 11-12		: Uji coba dan revisi bila di perlukan