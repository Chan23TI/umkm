![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/coverLaporan.jpg?raw=true)



## <a name="_1b19dgjpxzub"></a>**BAB I Pendahuluan**

-----

## <a name="_zgzfrb6n3mdw"></a><a name="_feovkg4fnrws"></a>**1.1 Tujuan** 
Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Sistem Website UMKM”. Dokumen ini dibangun untuk memudahkan UMKM tersebut untuk memperkenalkan produk mereka di lingkup yang lebih luas. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak dari “Sistem Website UMKM”.
## <a name="_86vp2o94t960"></a>**1.2Lingkup**
---
Sistem Website UMKM merupakan website yang kami bangun untuk mempermudah UMKM tersebut untuk memperkenalkan produk mereka di lingkup yang lebih luas dan juga memberikan informasi mengenai promo dari produk yang ada UMKM tersebut.

-----

|**Istilah**|**Definisi**|
| - | - |
|SRS|Software Requirement Specification|
|Login|Digunakan untuk mengakses aplikasi|
|Software Requirement Specification|perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna|
|||
## <a name="_jn9tanpga0ft"></a>**1.4 Referensi**
-----
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah :

- https://gitlab.com/nindya22si/sistem-informasi-parenting
##
## <a name="_zgzfrb6n3mdw"></a><a name="_feovkg4fnrws"></a>**1.5 Overview** 
-----
Bab selanjutnya yaitu menjelaskan sistem yang telah diterapkan pada website ini. Menjelaskan bagaimana gambaran umum dari website, seluruh fitur yang ada dan alur dari sistem ini. Di bab terakhir menjelaskan tentang bagaimana setiap fungsi digunakan secara teknis. Kemudian pada bab 2 dan 3 merupakan deskripsi dari website yang telah dibuat.
## <a name="_21631dabvdhu"></a>**BAB II GAMBARAN UMUM**
-----
Usaha Mikro, Kecil, dan Menengah (UMKM) adalah bagian penting dari perekonomian di Indonesia. UMKM menyediakan banyak lapangan kerja dan membantu meningkatkan pendapatan negara. Tetapi, semakin banyaknya UMKM di masyarakat membuat persaingan menjadi sangat ketat. Untuk bisa bertahan dan berkembang, UMKM harus terus berinovasi dan beradaptasi. Salah satu cara yang efektif adalah dengan menggunakan teknologi digital. Pemasaran lewat media sosial seperti Instagram, Facebook, dan TikTok bisa membantu UMKM menarik perhatian lebih banyak pelanggan, meningkatkan popularitas, dan memperluas pasar. Dalam studi kasus project ini kami menganalisis kebutuhan UMKM Nasi Ekonomi Makmur yang berada di Jl. Umban sari atas. Kami merancang sebuah sistem Company Profile yang dapat digunakan untuk pemasaran khusus UMKM ini. Berikut penjelasan sistem software kami,  Fitur yang dapat di akses admin : 

- Login
- Create, update, delete Menu
- Create, update, delete Review
- Create, update, delete Promo
- Create, update, delete About Us
- Create, update, delete Slider
- Create, update, delete Kontak
- Create, update, delete Logo
- Create, update, delete Sampul



Berikut ini fitur yang dapat diakses oleh user : 

- View Homepage
- View Top Menu
- View Menu
- View Promo
- View Review
- View Slider
- View About Us
- View Kontak
- CTA Contack 

## <a name="_utuby18eozqd"></a>**2.1 Perspektif Produk**
-----Sistem Informasi UMKM adalah sebuah sistem informasi yang diaplikasikan pada sebuah website. Terdapat 2 jenis aktor yaitu admin dan user. Pengolahan data dilakukan oleh admin dan user hanya melihat informasi pada halaman homepage website.
## <a name="_7ofyp3quv19i"></a>**2.1.1 Antarmuka Sistem**

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/11.jpg?raw=true)

**Admin**

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/flowchart1.jpg?raw=true)






**User**

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/flowchart2.jpg?raw=true)



## <a name="_h0yo5dpv39ls"></a>**2.1.2 Antarmuka Pengguna**

Halaman Admin
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/halaman_login.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/promo_index.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/create.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/update.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/slider_index.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/menu_index.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/review_index.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/about_index.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/kontak_index.jpg?raw=true)
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/gambar_index.jpg?raw=true)

Halaman User 
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/halaman_website.png?raw=true)





**2.1.3 Antarmuka Perangkat Keras**

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/perangkat_keras.jpg?raw=true)
**2.1.4 Antarmuka Perangkat Lunak**

Tidak ada

**2.1.5 Antarmuka Komunikasi**


Antarmuka komunikasi yang digunakan untuk mengoperasikan perangkat lunak Sistem ini, antara lain : 

- PC
- Internet


**2.1.6 Batasan Memori**

Tidak ada





**2.1.7 Operasi-Operasi**

|**Operasi**|**Fungsi**|
| - | - |
|Login|Digunakan untuk mengakses sistem|
|Input Data|Digunakan untuk memasukan data|
|Kembali|Digunakan untuk kembali ke halaman sebelumnya|
|Edit Data|Digunakan untuk mengedit data|
|Hapus Data|Digunakan untuk menghapus data|
|View Data|Digunakan untuk menampilkan data|
|Simpan Data|Digunakan untuk menyimpan data|


**2.1.8 Kebutuhan Adaptasi** 

Tidak ada
















**2.2 Spesifikasi Kebutuhan Fungsional**

-----
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/6.jpg?raw=true)

**



**2.2.1 Admin Login**

Use Case : Login
Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/login.jpg?raw=true)



Deskripsi singkat admin melakukan login terlebih dahulu sebelum masuk ke dalam tampilan home admin, apabila gagal login akan muncul pesan alert error login.

Deskripsi Langkah-Langkah : 

1. Admin melakukan login dengan username dan password 
1. Sistem memvalidasi login.
1. Bila sukses maka sistem akan mengarahkan ke home admin
1. Bila gagal maka sistem akan menampilkan kesalahan login

**2.2.2 Admin Input Menu**

Use Case : Input Menu
Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/5.jpg?raw=true)



Deskripsi singkat admin menginput data menu lalu menambahkan deskripsi tentang menu, harga serta gambar dari menu tersebut. 

Deskripsi langkah-langkah:

1. Sistem akan menampilkan dan meminta inputan pada form input menu
1. Sistem akan menyimpan ke database
1. Admin dapat melihat data yang sudah diinputkan tadi lalu dapat mengedit atau pun menghapus data tersebut.

**2.2.3 Admin Input Review**

Use Case : Input data review

Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/10.jpg?raw=true)



Deskripsi singkat sistem dapat menampilkan halaman untuk menginputkan data review. Deskripsi : 

1. Sistem akan menampilkan tampilan review
1. Admin dapat melihat, menambahkan, mengupdate, dan menghapus data review.
1. Sistem akan menyimpan kedalam database.
1. Jika sudah disimpan akan menampilkan pemberitahuan bahwa review telah berhasil diinputkan.

**2.2.4 Admin Input Promo**

Use case : Input data promo

Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/4.jpg?raw=true)



Deskripsi singkat admin melakukan pengisian data promo. Deskripsi langkah- langkah : 

1. Sistem akan menampilkan dan meminta inputan data promo
1. Sistem akan menyimpan ke database
1. Admin dapat melihat, mengedit dan menghapus data yang sudah diinputkan 

**2.2.5 Admin Input About Us**

Use Case : Input data About Us

Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/3.jpg?raw=true)


Deskripsi singkat admin melakukan penginputan data about us dan juga gambar mengenai deskripsi tersebut. Deskripsi langkah- langkah : 

1. Sistem akan menampilkan dan meminta inputan pada form input about us
1. Sistem akan menyimpan data tersebut ke data
1. Admin dapat melihat, mengedit dan menghapus data yang sudah di input.


**2.2.6 Admin Input Kontak**

Use Case : Input kontak 

Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/9.jpg?raw=true)

Deskripsi singkat sistem dapat menampilkan kontak berupa instagram, whatsApp, dan juga email. Deskripsi langkah-langkah : 

1. Sistem akan menampilkan kontak berupa instagram, whatsapp, dan email.
1. Admin dapat melihat, menambahkan, mengupdate, dan menghapus data kontak yang telah diinputkan.
1. Sistem akan menyimpan kedalam database
1. Akan muncul pemberitahuan bahwa inputan berhasil.

**2.2.7 Admin Input Slider**

Use Case : Input Slider 

Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/2.jpg?raw=true)

Deskripsi singkat Sistem dapat menampilkan halaman input slider yang akan ditampilkan di homepage. Deskripsi langkah-langkah : 

1. Sistem akan menampilkan data slider
1. Admin dapat melakukan penambahan, pengeditan, dan penghapusan data
1. Sistem akan menyimpan data tersebut ke database

**2.2.8 Admin input Logo dan Foto Sampul**

Use Case : Input logo dan foto sampul

Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/1.jpg?raw=true)

Deskripsi singkat sistem akan menampilkan halaman input data logo dan juga foto sampul pada website. Deskripsi langkah-langkah : 

1. Sistem akan menampilkan tampilan data untuk logo dan juga sampul dari website
1. Admin dapat melihat, mengupdate, dan juga menghapus data logo dan juga sampul pada website.
1. Sistem akan menyimpan data tersebut ke database.

**2.2.9 User mengunjungi website**

Use Case : Mengunjungi website

Diagram : 

![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/8.jpg?raw=true)

Deskripsi singkat, user dapat mengunjungi website dan melihat semua menu, promo, review, about us, dan slider yang ada pada website.

Deskripsi langka-langkah : 

1. Sistem akan menampilkan halaman homepage yang berisi beberapa data yang sudah diinputkan oleh admin
1. User dapat melihat semua data yang ada pada website.
1. User dapat melakukan Interaksi dengan informasi kontak yang ada pada website



**2.3 Spesifikasi Kebutuhan Non-Fungsional**

-----
- Tabel kebutuhan non-fungsional

  |No|Deskripsi|
  | - | - |
  |1|Semua perangkat dan fungsi menggunakan Bahasa Indonesia|
  |2|Perangkat dapat dipakai disemua platform OS (Admin, pengunjung)|

**2.4 karakteristik pengguna**



Karakteristik pengguna dari perangkat lunak ini adalah pengguna langsung berinteraksi dengan sistem dan dihubungkan dengan hak akses atau level autentikasi

**2.5 Batasan-batasan**

Tidak ada

**2.6 Asumsi-asumsi**

Tidak ada

**2.7 Kebutuhan Penyeimbang**

Tidak ada

**BAB III Requirement specification**

-----
**3.1 Persyaratan Antarmuka Eksternal**

-----
Perbedaan admin dan user dalam mengakses ini terdapat di sisi login, dimana homepage adalah halaman pertama yang akan ditampilkan.



**3.2 Struktur Detail Kebutuhan Non-Fungsional**

-----
![alt text](https://github.com/Chan23TI/umkm/blob/main/public/img/erd_umkm_makmur.drawio.png?raw=true)

**3.3.1 Logika Struktur Data** 

Struktur data logika pada sistem UMKM Makmur terdapat struktur Database yang dijelaskan menggunakan ERD.

Tabel Admin

|Data Item|Tipe data|
| - | - |
|Id|int|
|Username|varchar|
|Password|varchar|

Tabel Menu

|Data Item|Tipe Data|
| - | - |
|id|int|
|Nama\_menu|varchar|
|deskripsi|varchar|
|harga|int|
|gambar|text|

Tabel Review

|Data Item|Tipe Data|
| - | - |
|id|int|
|review|varchar|

Tabel Promo

|Data Item|Tipe Data|
| - | - |
|id|int|
|judul|varchar|
|isi|varchar|
|gambar|text|

Tabel about us

|Data Item|Tipe Data|
| - | - |
|id|int|
|deskripsi|varchar|
|gambar |text|

Tabel GAmbar

|Data Item|Tipe Data|
| - | - |
|id|int|
|logo|text|
|sampul|text|

Tabel Kontak

|Data Item|Tipe Data|
| - | - |
|id|int|
|ig|varchar|
|wa|varchar|
|email|varchar|

Pembagian Tugas

-----
BAB 1 → Yola

BAB 2 → Yola

2\.1.1 → Novi

2\.1.2 → Novi

2\.1.3 → Steven

2\.1.4 → Steven

2\.1.5 → Yola

2\.1.6 → Yola

2\.1.7 → Novi

2\.1.8 → Novi

2\.2 semua poin (bertiga)

BAB 3

3\.1 → Novi

3\.2 → Steven


