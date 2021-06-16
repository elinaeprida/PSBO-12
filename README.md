<p align="center"><b> Kom-Hub by Kelompok 12 P1 </b></p>
<p align="center"><a href="" target="_blank"><img src="https://i.ibb.co/1T4xSGp/icon-komhub.png" alt="icon-komhub" border="0" width="150"></a></p>

# KOM-HUB
KOM - Hub hadir sebagai sumber informasi tentang data-data alumni yang berisikan informasi karir, kontak yang bisa dihubungi, dan link GitHub yang bisa diakses. Dengan KOM-HUB diharapkan mahasiswa dapat terhubung dengan alumni dan mempermudah akses data alumni sesuai dengan kebutuhan.

# Deskripsi Sistem
KOM-hub merupakan sebuah platform berbasis website yang berisi database alumni Ilkom IPB. Saat pertama kali dibuka, Website KOM-hub menampilkan video loop berisi pesan selamat datang dan penjelasan apa itu KOM-hub. Lalu, terdapat chart mengenai informasi lulusan Ilkom IPB, sebaran spesialisasi alumni Ilkom IPB, dan peta sebaran tempat kerja alumni Ilkom IPB serta beberapa alumni sukses.
Untuk mencari alumni pilih menu “Alumni” pada navigasi. Untuk masuk ke halaman ini harus login menggunakan akun IPB terlebih dahulu. Setelah login, halaman Alumni akan muncul dan menampilkan search bar serta informasi kerja atau magang dari alumni Ilkom IPB. Pada search bar, bisa search dengan nama, profesi, atau angkatan. Pada halaman User, khusus user Ilmu Komputer IPB dapat mengupdate profil terkini.

# User analysis
### User Story
> "Sebagai mahasiswa Ilmu Komputer IPB, saya ingin mengetahui profil alumni Ilmu Komputer IPB meliputi nama, spesialisasi, penempatan, kontak pribadi, linkedin, dan github sehingga memudahkan saya untuk terhubung dengan alumni.”


# Spesifikasi teknis lingkungan pengembangan
### Software
![Image of software](https://i.ibb.co/KGnMWgv/software.jpg)
### Hardware
- Processors    : Intel(R) Core(TM) i5-2450M CPU @ 2.50GHz
- RAM           : 12.0 GB
### Tech Stack
![Image of software](https://i.ibb.co/VqgP6QR/laravel-2.png)
<p> Laravel dipilih karena template layoutnya ringan, mempunyai banyak library Object Oriented, pembagian modul secara independen, dan pengecekan menggunakan unit testing. </p>

## Konsep OOP yang digunakan
..........

# Tipe desain pengembangan yang digunakan
<p align="left"><a href="" target="_blank"><img src="https://i.ibb.co/dDf3c7Q/agile2.jpg" alt="agile" border="0" width="500"></a></p>
<p> Tipe desain pengembangan yang digunakan yaitu V-Model. Agile merupakan model development jangka pendek yang memerlukan adaptasi cepat dan pengembangan terhadap perubahan dalam bentuk apapun. Kami menggunakan agile karena memungkinkan tim untuk memberikan penilai lebih cepat dan merespon perubahan dengan cepat.
</p>

# Hasil dan pembahasan
### Use case diagram
![Image of usecase diagram](https://i.ibb.co/znvD7Qq/usecase.jpg)
### Activity diagram
- Activity : Registrasi Akun User

![Image of activity diagram](https://i.ibb.co/zJrvtPm/act-regis.jpg)
- Activity : Search Alumni

![Image of activity diagram](https://i.ibb.co/mN4CMjJ/act-search.jpg)
- Activity : Edit Profile

![Image of activity diagram](https://i.ibb.co/DYWmPGT/act-edit-profile.jpg)
### Class diagram
![Image of class diagram](https://i.ibb.co/gR32Xfp/classdiagram.jpg)
### Entity Relationship Diagram
![Image of erd](https://i.ibb.co/NTmCHVt/erddiagram.jpg)
### Arsitektur sistem
![Image of system architecture](https://i.ibb.co/3FxRpjd/arsitektur.jpg)
### Fungsi utama yang dikembangkan
- Cari Alumni
    - Mahasiswa yang sudah login dapat mencari alumni ilmu komputer berdasarkan nama, angkatan, spesialisasi, atau pekerjaan.
- Detail Alumni
    - Mahasiswa yang sudah login dapat melihat profil detail alumni ilmu komputer.
- Edit Profil Alumni
    - Alumni yang sudah login dapat mengupdate profil terbarunya.
### Fungsi CRUD
- user
    - page profile : create, read, update
    - page alumni : read
    - page home : read
    - page about us : read
    - page edit password : update
 - admin
    - page profile : update, delete
    - page alumni : create, read, update, delete
    - page home : create, read, update, delete
    - page about us : create, read, update, delete
    - page edit password : update

# Hasil implementasi
### Screenshot sistem
![Image of login](https://i.ibb.co/HCVngmc/login.jpg)
![Image of about us](https://i.ibb.co/9cpYWJk/aboutus1.jpg)
![Image of home](https://i.ibb.co/QFFTz5z/home1.jpg)
![Image of search alumni](https://i.ibb.co/xjffQ1K/alumni1.jpg)
![Image of detail alumni](https://i.ibb.co/8zVjJJm/profile.jpg)
![Image of profile](https://i.ibb.co/8zVjJJm/profile.jpg)
![Image of edit profile](https://i.ibb.co/HPRWk6X/createprofile1.jpg)

# Saran untuk pengembangan selanjutnya
Saran untuk pengembangan selanjutnya diharapkan lebih meningkatkan koordinasi antar anggota kelompok dan mengupdate timeline secara berkala.


# Developer dan job desc

| Nama                  | NIM        | Role             |
| -------------         | -----------| -------------    |
| Fachirah Hestiana R   | G64180021  | Product Manager  |
| Elina Eprida          | G64180038  | UI/UX Designer   |
| Ihsan Fadhila         | G64180071  | Front End        |
| Emilia Syafitri       | G64189001  | Back End         |
