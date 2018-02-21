---


---

<h1 id="bagian-koriah-broken_heart">Bagian Koriah 💔</h1>
<p><strong>BAB 1. PENDAHULUAN</strong></p>
<p><strong>1.1	Gambaran Proyek</strong></p>
<p>Pada umumnya sistem presensi kehadiran menggunakan pemanggilan dosen ke siswa satu per satu dengan menyebutkan nama dari siswa tersebut. Dalam penggunaan sistem tersebut, sangat memakan waktu dan tidak efesien, karena memakan banyak waktu dari jam mata kuliah. Selain itu, sistem presensi manual menggunakan banyak kertas sehingga terjadi pemborosan. Pembuatan kertas menggunakan bahan baku kulit pohon, jadi jika menggunakan banyak kertas tentunya menggunakan kulit pohon secara berlebihan, jika hal ini terjadi kemungkinan besar terjadinya kerusan alam.</p>
<p>Untuk itu, kelompok 8 mempunyai gagasan yang dapat meminimialisir dari tidak efesiennya sistem presensi sekarang, yaitu dengan membuat aplikas Q-PRES (QR-Code Presensi). Aplikasi menggunakan sistem scan kode QR untuk setiap presensi pada jadwal mata kuliah di setiap Lab atau Kelas. Dari sistemnya sendiri menggunakan 3 user, yaitu mahasiswa, dosen dan admin.<br>
Dari sistem mahasiswa menggunakan MAC address device (HP) dan Nim untuk pendaftaran. Hak akses dari mahasiswa menggunakan NIM, yang kemudian NIM tersebut akan mencari MAC device pada saat pertama pendaftaran untuk mencocokkannya. Jika NIM dan MAC addressnya sudah sinkron maka mahasiswa tersebut dapat login. Kemudian mahasiswa dapat melakukan Scan QR-Code presensi yang menyatakan bahwa dia hadir. Mahasiswa tidak akan bisa melakukan scan Kode QR jikalau dosen belum mengaktivasi atau membuka sistemnya. Pada sistem siswa, terdapat beberapa fungsi utama yaitu :</p>
<ul>
<li>Siswa dapat melihat jadwal perkuliahan.</li>
<li>Sebelum siswa melakukan presensi, dia akan mendapatkan notifikasi untuk memulai scan, jika berhasil melakukan scan siswa akan mendapat notifikasi scan telah berhasil</li>
<li>Siswa dapat melihat jumlah kompen yang dia dapatkan karena keterlambatan maupun ketidakhadiran.<br>
Sedangkan pada sistem Dosen memiliki hak akses untuk membuka presensi. Setelah para mahasiswa telah melakukan presensi, maka dosen akan mendapat data siswa yang masuk pada mata kuliah hari itu. Jika hasilnya tidak sesuai maka untuk validasinya Dosen akan pengecekan ulang untuk memastikan. Pada sistem Dosen memiliki fungsi yaitu :</li>
<li>Dosen bisa melihat jadwal.</li>
<li>Dosen memilih jadwal yang akan dilaksanakan.</li>
<li>Mempunyai hak akses untuk membuka presensi untuk mahasiswa.</li>
<li>Melihat data kehadiran siswa.</li>
<li>Validasi siswa<br>
Pada sistem Admin yaitu :</li>
<li>Menerima data mahasiswa yang hadir secara otomatis.</li>
<li>Menginput data mahasiswa.</li>
<li>Menginput dosen.</li>
<li>Menginput jadwal Kuliah.</li>
<li>Presentase presensi mahasiswa per hari dan per semester.</li>
</ul>
<p>Batasan pada Sistem Aplikasi :<br>
Pada sistem ini, satu device milik satu mahasiswa. Jadi mahasiswa tidak bisa menggunakan akun atau device dari mahasiswa lainnya. Kalaupun terdapat beberapa mahasiswa yang tidak mempunyai HP, maka dosen akan melaukukan presensi manual. Melalui pemanggilan nama mahasiswa tersebut. Mahasiswa tidak boleh menitipkan HP-nya ke mahasiswa lain untuk melakukan presensi, karena setiap dosen akan melakukan validasi presensi.</p>
<p><strong>1.2 Dokumen - dokumen dalam Proyek</strong></p>
<ul>
<li>Proposal Mitra<br>
Untuk kerja sama dengan mitra sebagai client.</li>
<li>Logbook<br>
Dokumentasi hasil pengerjaan.</li>
<li>Android Studio<br>
Media pendukung unutk pembuatan aplikasi.</li>
<li>Sublime<br>
Media pendukung unutk pembuatan aplikasi.</li>
<li>Laravel<br>
Framework yang digunakan untuk mendukung pembuatan aplikasi.</li>
</ul>
<p><strong>1.3 Evolusi SPMP</strong></p>
<ol>
<li>
<p>Referensi</p>
<ul>
<li><a href="https://laravel.com/">https://laravel.com/</a></li>
<li><a href="https://firebase.google.com/?hl=id">https://firebase.google.com/?hl=id</a></li>
<li><a href="https://getbootstrap.com/">https://getbootstrap.com/</a></li>
<li>Software Project Management Plan</li>
</ul>
</li>
<li>
<p>Definisi, Akronim, dan Singkatan</p>
<ul>
<li>QR-Code</li>
<li>Q-PRES</li>
<li>HP</li>
</ul>
</li>
<li>
<p>Jadwal Pengerjaan</p>
<ol>
<li>Penentuan Judul (Tema)</li>
<li>Analisis Kebutuhan
<ul>
<li>Flowchart</li>
<li>Use Case</li>
<li>Mockup</li>
<li>DFD</li>
</ul>
</li>
<li>Perancangan Perangkat Lunak
<ul>
<li>Mengenai perangkat/aplikasi yang dibutuhkan untuk membantu pengerjaan.</li>
</ul>
</li>
<li>Construction</li>
<li>Testing</li>
</ol>
</li>
</ol>
<p><strong>1.4 Material Acuan</strong></p>
<ul>
<li><a href="https://developer.android.com/studio/index.html?hl=id">https://developer.android.com/studio/index.html?hl=id</a></li>
<li><a href="https://developer.android.com/studio/index.html?hl=id">https://developer.android.com/studio/index.html?hl=id</a></li>
<li><a href="https://developer.android.com/index.html">https://developer.android.com/index.html</a></li>
<li><a href="https://laravel.com/">https://laravel.com/</a></li>
<li><a href="https://firebase.google.com/?hl=id">https://firebase.google.com/?hl=id</a></li>
<li><a href="https://getbootstrap.com/">https://getbootstrap.com/</a></li>
</ul>
<p><strong>1.5 Definisi dan Akronim (Singkatan)</strong></p>
<ul>
<li>QR-Code	: Quick Response Code</li>
<li>Q-PRES	: QR Presensi</li>
<li>HP 		: Handphone</li>
<li>presensi  : Kehadiran</li>
</ul>
<p><strong>1.5 Definisi dan Akronim (Singkatan)</strong></p>
<ul>
<li>QR-Code	: Quick Response Code</li>
<li>Q-PRES	: QR Presensi</li>
<li>HP 		: Handphone</li>
<li>Presensi  : Kehadiran</li>
</ul>
<p><strong>BAB 2 ORGANISASI PROYEK</strong></p>
<p><strong>2.1 Model Proses</strong></p>
<p>Model Proses yang digunakan pada aplikasi menggunakan V-Model. Dikarenakan v-model sangat fleksibel, yang mendukung pengurangan maupun penambahan project dalam prosesnya. Meminimalisasikan kesalahan pada hasil akhir karena  ada test pada setiap prosesnya. Model Proses yang digunakan pada aplikasi menggunakan V-Model. Dikarenakan v-model sangat fleksibel, yang mendukung pengurangan maupun penambahan project dalam prosesnya. Meminimalisasikan kesalahan pada hasil akhir karena  ada test pada setiap prosesnya.</p>
<p>Proses yang digunakan pada proyek ini menggunakan Kode QR (Quick Respon). Dimana user mahasiswa harus mendaftar terlebih dahulu menggunakan MAC Address dari perangkat HP dan menggunakan NIM dari mahasiswa tersebut. Kemudian, jika mahasiswa tersebut ingin masuk atau melakukan presensi, ia harus memasukkan NIM-nya. NIM tersebut akan mencocokkan atau mencari MAC Address yang sudah didaftarakan pada awal pendaftaran untuk bisa masuk ke akun mahasiswa tersebut. Dosen akan didaftarkan pada Admin. Admin mempunyai kewenanangan yang lebih pada aplikasi ini.</p>
<p><strong>2.2 truktur Organisasi</strong></p>

<table>
<thead>
<tr>
<th>No.</th>
<th>Jabatan</th>
<th>Nama</th>
<th>Nim</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Ketua Tim</td>
<td>Koriah</td>
<td>1603103</td>
</tr>
<tr>
<td>2</td>
<td>Android Developer</td>
<td>Bayu Rasukma Raga</td>
<td>1603093</td>
</tr>
<tr>
<td>3</td>
<td>Web Developer</td>
<td>Syamsul Fahri hadi</td>
<td>1603115</td>
</tr>
</tbody>
</table><p><strong>2.3 Batasan dan Antarmuka Organisasi</strong></p>
<p>Pada sistem ini, satu device milik satu mahasiswa. Jadi mahasiswa tidak bisa menggunakan akun atau device dari mahasiswa lainnya. Kalaupun terdapat beberapa mahasiswa yang tidak mempunyai HP, maka dosen akan melaukukan presensi manual. Melalui pemanggilan nama mahasiswa tersebut. Mahasiswa tidak boleh menitipkan HP-nya ke mahasiswa lain untuk melakukan presensi, karena setiap dosen akan melakukan validasi presensi.</p>

<table>
<thead>
<tr>
<th>No.</th>
<th>Nama</th>
<th>Nim</th>
<th>Penanggung Jawab</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Koriah</td>
<td>1603103</td>
<td>Konsep Sistem</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>Use Case</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>Design</td>
</tr>
<tr>
<td>2</td>
<td>Bayu Rasukma</td>
<td>1603093</td>
<td>Lead Android Develop</td>
</tr>
<tr>
<td>3</td>
<td>Syamsul Fahri H</td>
<td>1603115</td>
<td>Lead Web Develop</td>
</tr>
</tbody>
</table><p><strong>2.4 Lingkup Tanggung Jawab</strong></p>
<p>Setiap anggota mempunyai tanggung jawab terhadap tugasnya. Anggota mempunyai jobdesk-nya masing-masing sesuai dengan poin 2.2.</p>
<h1 id="bagian-bayu-smirk_cat">Bagian Bayu 😼</h1>
<p><strong>BAB 3 Proses Manajerial</strong></p>
<p><strong>3.1	Tujuan dan prioritas manajemen</strong></p>
<p>Tujuan dari proyek ini adalah mengembangkan sistem Aplikasi Absensi dengan menggunakan kode QR Agar bisa dijalankan dan diimplementasikan dengan baik oleh mitra. Proyek ini sangat diprioritaskan karena bermanfaat untuk menambah kinerja admin dalam mengelola data absensi dan meminimalisir penggunaan kertas sehingga biaya yang dikeluarkan oleh mitra dapat dikurangi.</p>
<p><strong>3.2	Asumsi-asumsi, ketergantungan/keterkaitan dan batasan-batasan</strong></p>
<p>Asumsi proyek ini adalah sebagai berikut :</p>
<ul>
<li>Tim terdiri dari 3 orang</li>
<li>Ketersediaan peralatan dan perangkat lunak</li>
<li>Persetujuan dan Perizinan dari mitra</li>
</ul>
<p>Proyek ini berketergantungan pada :</p>
<ol>
<li>Biaya</li>
<li>Ketersediaan software dan hardware</li>
<li>Keahlian anggota dalam penggunaan software dan bahasa pemrogramman</li>
<li>Data-data yang diberikan oleh mitra</li>
</ol>
<p>Batasan Masalah dalam proyek ini adalah sebagai berikut :</p>
<ol>
<li>Tidak adanya vailidasi ketika HandPhone mahasiswa dititipkan ke temanya sehingga dapat menitipkan absen</li>
<li>Software yang digunakan adalah Android Studio, Sublmie Text 3 dan Firebase</li>
<li>Manajemen risiko</li>
</ol>
<p>Resiko yang ada pada proyek ini adalah :</p>
<ol>
<li>Risiko Finansial</li>
<li>Risiko Waktu</li>
<li>Risiko Teknologi</li>
<li>Risiko Sumberdaya Manusia</li>
<li>Risiko Alat dan Bahan</li>
</ol>
<p>3.4	Makanismme monitoring dan kontroling</p>
<ul>
<li>Rapat dan Pengerjaan mingguan</li>
<li>Pembuatan Dokumentasi Proyek</li>
<li>Testing dan evaluasi kinerja Aplikasi</li>
</ul>
<p><strong>BAB 4 Prosess Teknis</strong></p>
<p><strong>4.1	Metoda, tool dan teknik</strong></p>
<p>Proyek ini akan diimplementasikan dengan memanfaatkan metodologi V Model, dan alat seperti Android Studio, Sublime Text 3 dan Firebase sebagai alat pembuatan Aplikasi ini. Menggunakan Framework laravel dan Bootstrap sebagai penunjang Aplikasi bagian WEB nya serta menggunakan teknik Object Oriented dalam pengerjaan proyek ini.</p>
<p><img src="https://2.bp.blogspot.com/-N1DINwjCQ8U/Wo0YCe0E2jI/AAAAAAAAA1o/ueT3h1Hlc2MTGMrfD2XNhiHMs2yMsqDJACLcBGAs/s1600/v+model.jpg" alt="enter image description here"></p>
<p><strong>4.2	Dokumentasi perangkat lunak</strong></p>
<p>SQAP</p>
<p><strong>4.3	Fungsi-fungsi pendukung proyek</strong></p>
<p>Fungsi Pendukung dalam protek ini adalah :</p>
<ul>
<li>Teknisi Jaringan</li>
<li>Teknisi Hardware</li>
<li>Spesialis WEB</li>
<li>Spesialis Androud</li>
</ul>
<h1 id="bagian-syamsul-rage">Bagian Syamsul 😡</h1>
<p><strong>BAB 5 Paket Pekerjaan, jadwal, dan anggaran</strong><br>
<strong>5.1 Paket Pekerjaan</strong></p>
<p>Paket pekerjaan yang akan di lakukan :</p>
<ol>
<li>Minggu ke 1-2         : Penentuan ide dan rumusan masalah yang dibutuhkan</li>
<li>Minggu ke 3-4		 : Pembuatan rancangan sistem aplikasi yang akan di buat</li>
<li>Minggu ke 5-10		 : Pembuatan sistem aplikasi</li>
<li>Minggu ke 11-12	     : Uji coba dan revisi bila di perlukan</li>
</ol>
<p><strong>5.2 Ketergantungan dan ketrtarikan</strong></p>
<p>kebutuhan ketertarikan :</p>
<ol>
<li>Penentuan ide dan rumusan masalah yang dibutuhkan</li>
<li>Pembuatan rancangan sistem aplikasi yang akan di buat</li>
<li>Pembuatan sistem aplikasi Website</li>
<li>Pembuatan sistem aplikasi Android</li>
<li>Uji coba dan simulasi</li>
<li>revisi atau perbaikan</li>
</ol>
<p><strong>5.3 Kebutuhan-kebutuhan sumber daya</strong></p>
<p>Sumber daya yang di perlukan untuk pembuatan aplikasi ini terdiri dari 3 orang dengan divisi yang sudah di tentukan di atas. dan adanya kebutuhan-kebutuhan yang diperlukan sebagai berikut :</p>

<table>
<thead>
<tr>
<th>No.</th>
<th>Perangkat Keras</th>
<th>Perangkat Lunak</th>
<th>Other</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>3 Unit Laptop</td>
<td>Sublime Text</td>
<td>Koneksi Internet</td>
</tr>
<tr>
<td>2</td>
<td>4 Unit Mouse</td>
<td>Android Studio</td>
<td>Konsumsi</td>
</tr>
<tr>
<td>3</td>
<td>4 Unit Keyboard</td>
<td>Photo Shop</td>
<td>Hosting</td>
</tr>
<tr>
<td>4</td>
<td>1 Unit Komputer</td>
<td></td>
<td></td>
</tr>
<tr>
<td>5</td>
<td>1 Unit Monitor</td>
<td></td>
<td></td>
</tr>
</tbody>
</table><p><strong>5.4 Alokasi Anggaran dan sumber daya</strong><br>
Alokasi Anggaran dalam pembuatan aplkasi ini sebagai berikut :</p>

<table>
<thead>
<tr>
<th>No.</th>
<th>Keperluan</th>
<th>Angaran</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>3 Unit  Laptop</td>
<td>Rp. 30.500.000</td>
</tr>
<tr>
<td>2</td>
<td>4 Unit Mouse</td>
<td>Rp. 400.000</td>
</tr>
<tr>
<td>3</td>
<td>4 Unit Keyboard</td>
<td>Rp. 5.000.000</td>
</tr>
<tr>
<td>4</td>
<td>Koneksi Internet</td>
<td>Rp. 2.000.000</td>
</tr>
<tr>
<td>5</td>
<td>Konsumsi</td>
<td>Rp. 10.000.000</td>
</tr>
</tbody>
</table><p><strong>5.5 Jadwal</strong></p>
<p>Jadwal dalam pengerjaan aplikasi adalaha 16 minggu atau 4 bulan, adapun rincianya sebagai berikut :</p>
<p><img src="https://2.bp.blogspot.com/-8aBd0r0chww/Wo0S1uPDFOI/AAAAAAAAA1U/OA7kryPHSz4e_QOk5k40BAcza43Aboc4QCLcBGAs/s1600/jadwal.PNG" alt="enter image description here"></p>

