# PRAKTIKUM 7 PEMROGRAMAN WEB

## PHP

**Nama :** Aidi Syahdan Firdaus
**Nim :** 312510089
**Kelas :** I251A

Pertama buat folder directory web disini saya menggunkkan xampp jadi di htdocs dengan nama lab7_php dan buat file index.php di dalamnya :

![Pertama buat folder directory web disini saya menggunkkan xampp jadi di htdocs dengan nama lab7_php dan buat file index.php di dalamnya](screenshots/01-folder-htdocs-index-php.png)

Isi index.php dengan code di bawah ini menggunakkan vscode :

![Isi index.php dengan code di bawah ini menggunakkan vscode](screenshots/02-kode-index-php-vscode.png)

Lanjut akses dengan alamat local di browser dan jangan lupa nyalakan apache di xampp nya :

![Lanjut akses dengan alamat local di browser dan jangan lupa nyalakan apache di xampp nya](screenshots/03-xampp-apache-start.png)

![Hasil akses alamat local di browser](screenshots/04-hasil-phpinfo-browser.png)

Buat variable, operator, dan percabangan di index.php

![Buat variable, operator, dan percabangan di index.php](screenshots/05-variabel-operator-percabangan.png)

Hasil di local

![Hasil di local](screenshots/06-hasil-variabel-operator.png)

Coba beberapa perubahan disini saya ubah nilai dari variable nama, uts, dan juga uas sementara operator dan percabangan tidak di ubah :

![Coba beberapa perubahan disini saya ubah nilai dari variable nama, uts, dan juga uas sementara operator dan percabangan tidak di ubah](screenshots/07-ubah-nilai-variabel.png)

Hasil di local :

![Hasil di local](screenshots/08-hasil-setelah-ubah-nilai.png)

Lanjut buat daftar mahasiswa pakai array dan juga perulangan :

![Lanjut buat daftar mahasiswa pakai array dan juga perulangan](screenshots/09-array-perulangan.png)

Hasilnya ;

![Hasilnya daftar mahasiswa](screenshots/10-hasil-daftar-mahasiswa.png)

Tambahkan 3 nama lagi dafatar mahasiswa cukup tambahkan di array nya aja :

![Tambahkan 3 nama lagi dafatar mahasiswa cukup tambahkan di array nya aja](screenshots/11-tambah-3-nama-array.png)

Hasilnya :

![Hasilnya setelah menambahkan 3 nama](screenshots/12-hasil-tambah-3-nama.png)

Lalu buat function, disini saya menambahkan function untuk menghitung luas persegi Panjang seperti yang di perintahkan di modul praktikum, sekalian tambahin \<br\> di echo pertama supaya luas persegi panjang turun ke baris bawah :

![Lalu buat function, disini saya menambahkan function untuk menghitung luas persegi Panjang seperti yang di perintahkan di modul praktikum](screenshots/13-function-luas-persegi-panjang.png)

Hasilnya :

![Hasilnya luas persegi panjang](screenshots/14-hasil-luas-persegi-panjang.png)

Memproses from dengan get

![Memproses from dengan get](screenshots/15-form-get.png)

Hasil setelah mengisi formnya :

![Hasil setelah mengisi formnya](screenshots/16-hasil-form-get.png)

Memproses form dengan post :

![Memproses form dengan post](screenshots/17-form-post.png)

Pengolahan data sederhana :

![Pengolahan data sederhana](screenshots/18-kode-pengolahan-data-sederhana.png)

Hasil setelah mengisi formnya (harga integer, jumlah integer) :

![Hasil setelah mengisi formnya (harga integer, jumlah integer)](screenshots/19-hasil-harga-dan-jumlah-integer.png)

Ketika harga minus :

![Ketika harga minus](screenshots/20-validasi-harga-minus.png)

Ketika jumlah minus :

![Ketika jumlah minus](screenshots/21-validasi-jumlah-minus.png)

Ketika jumlah yang di masukkan desimal :

![Ketika jumlah yang di masukkan desimal](screenshots/22-validasi-jumlah-desimal.png)

Ketika harga yang di masukkan desimal(otomatis di bulatkan ke angka terdekat misalkan 1.8 maka di bulatkan ke 2) :

![Ketika harga yang di masukkan desimal(otomatis di bulatkan ke angka terdekat misalkan 1.8 maka di bulatkan ke 2)](screenshots/23-validasi-harga-desimal.png)

## MINI PROJECT

Php variable dan validasi :

![Php variable dan validasi](screenshots/24-miniproject-variabel-dan-validasi.png)

Bagian form html dan code sisanya :

![Bagian form html dan code sisanya](screenshots/25-miniproject-form-html-dan-code.png)

Hasilnya
saya akan coba isi dengan data diri saya sendiri :

![Hasilnya saya akan coba isi dengan data diri saya sendiri](screenshots/26-miniproject-form-terisi.png)

Ketika di kirim :

![Ketika di kirim](screenshots/27-miniproject-hasil-form.png)

## PERTANYAAN EVALUASI

### Perbedaan Pemrosesan Client-Side dan Server-Side

**Client-side:** Proses dijalankan di sisi browser pengguna (seperti HTML, CSS, dan JavaScript).

**Server-side:** Proses dijalankan di komputer server (menerima permintaan, memproses data/logika aplikasi, lalu mengirimkan respons akhir berupa HTML ke browser).

### Alasan File PHP Harus Dijalankan Melalui Web Server

File PHP bersifat server-side, sehingga kodenya harus dieksekusi terlebih dahulu oleh mesin PHP pada web server (seperti Apache/Laragon/XAMPP). Jika dibuka langsung dengan klik ganda tanpa web server, browser hanya akan memuat kode PHP sebagai teks mentah tanpa menjalankan logikanya.

### Fungsi Tanda $ pada Variabel PHP

Tanda $ berfungsi sebagai penanda atau awalan wajib untuk mendeklarasikan dan memanggil nama variabel di dalam PHP.

### Perbedaan Metode GET dan POST

**GET:** Mengirim data melalui parameter URL, nilainya terlihat jelas pada alamat browser, dan digunakan untuk permintaan yang tidak mengubah data (misalnya formulir pencarian).

**POST:** Mengirim data melalui request body, nilainya tidak tampil di URL, dan lazim digunakan untuk pengiriman data formulir atau data sensitif.

### Alasan Input Pengguna Perlu Divalidasi di Sisi Server

Validasi di sisi client (seperti atribut HTML required) hanya membantu kenyamanan pengguna dan mudah dilewati atau dimanipulasi. Validasi server-side adalah pemeriksaan utama yang wajib dilakukan untuk menjamin integritas data serta keamanan aplikasi.

### Fungsi htmlspecialchars()

Fungsi ini digunakan untuk mengonversi karakter khusus menjadi entitas HTML saat menampilkan kembali data dari formulir. Tujuannya adalah mencegah dan mengurangi risiko serangan injeksi HTML/script (XSS).

### Manfaat Penggunaan Function

Function memungkinkan pembungkusan blok logika agar kode dapat dipanggil kembali (reusable) tanpa perlu menulis ulang. Hal ini membuat struktur program menjadi lebih rapi, terorganisir, dan mudah dikelola.
