<p align="center"><b> Kom-Hub by Kelompok 12 P1 </b></p>
<p align="center"><a href="https://alumni-ilkom-hub.herokuapp.com/" target="_blank"><img src="https://i.ibb.co/1T4xSGp/icon-komhub.png" alt="icon-komhub" border="0" width="150"></a></p>

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
### Class
Class merupakan suatu blueprint atau cetakan untuk menciptakan suatu instant dari object. Class juga merupakan grup suatu object dengan kemiripan attributes/properties, behaviour dan relasi ke object lain.

Contoh Penerapan: Class User, Contact, About, Grads, Slider
```
class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'alumni_id',
        'user_id',
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
```

### Objek
Object adalah instance dari class. Jika class secara umum merepresentasikan (template) sebuah object, sebuah instance adalah representasi nyata dari class itu sendiri.

Contoh Penerapan: Dari class User kita dapat membuat object alumni, mahasiswa, dan admin.
```
// Admin
class HomeController extends Controller
{
    ....
    
    public function index(Grad $grad)
    {
        $sliders = Slider::orderBy('id', 'desc')->take(3)->get();
        $users = User::all();
        $alumnis = Alumni::all();
        $grads = Grad::all();
        return view('admin.slider.index', compact('sliders', 'alumnis', 'users', 'grads'));
    }

    ....
    
    public function edit(Grad $grad)
    {
        return view('admin.editgrad', compact('grad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grad $grad) {
        $request->validate([
            'tepat_waktu' => 'required',
            'dapat_kerja' => 'required',
            'kerja_sesuai' => 'required',
        ]);

        $grad->update([
            'tepat_waktu' => $request->tepat_waktu,
            'dapat_kerja' => $request->dapat_kerja,
            'kerja_sesuai' => $request->kerja_sesuai,
        ]);

        return redirect()->route('dashboard');
        // dd('$grad->id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Slider::destroy($slider->id);
        return redirect('/admin/dashboard');
    }
}
```

### Method
Method merupakan suatu operasi berupa fungsi-fungsi yang dapat dikerjakan oleh suatu object. Method didefinisikan pada class akan tetapi dipanggil melalui object. 

Contoh Penerapan: 
- Pada object alumni, terdapat method createProfileAlumni, readProfileAlumni, updateProfileAlumni. 
- Pada object mahasiswa, terdapat method readProfileAlumni. 
```
public function alumni(Request $request, Alumni $alumni, User $user){
     $alumnis = Alumni::orderBy('angkatan', 'asc')->get()->all();;
     $users = User::all();
        
     return view('mahasiswa.alumniuser', compact('alumnis', 'users'));
}

public function show (Alumni $alumni){
     return view('alumni.show', compact('alumni'));
}
```

### Enkapsulasi (Encapsulation)
Dengan enkapsulasi, kita bisa memilih property dan method apa saja yang boleh diakses, dan mana yang tidak boleh diakses. Programmer yang merancang class bisa menyediakan property dan method khusus yang memang ditujukan untuk diakses dari luar.

Contoh Penerapan:
Pembatasan akses user yang tidak terdaftar terhadap halaman alumni. User tersebut hanya bisa mengakses halaman utama dan halaman About Kom-Hub.
```
// middleware/checkRole
public function handle(Request $request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);

        $user = \Auth::user();
        // dd($user->role, $roles);
        if($user != null){
            foreach ($roles as $role) { 
                $userRole = $user->role;
                if( $userRole == $role){
                    return $next($request);
                }
            }
            return redirect('/');
        } else{
            return $next($request);
            
        }
    }
    
// views
@if (Auth::user()->role === 'alumni')
    <a class="navbar-brand" href="/alumni"> <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}</a>
@else 
    <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}
@endif

// routes
Route::get('alumni/{alumni}/edit', [App\Http\Controllers\AlumniController::class, 'edit'])->name('alumniedit')->middleware('checkRole:admin,alumni');              
                
```

### Inheritance (Pewarisan) 
Inheritance adalah konsep OOP dimana sebuah class dapat menurunkan property dan method yang dimilikinya kepada class lain. Konsep inheritance dipakai untuk memanfaatkan fitur code reuse, yakni menghindari terjadinya duplikasi kode program.

Contoh Penerapan:
Eloquent relationship pada class user dengan alumni, user dengan mahasiswa, serta user dengan admin.
```
 Schema::create('alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('angkatan');
            $table->string('spesialisasi');
            $table->string('jabatan');
            $table->string('perusahaan');
            $table->string('domisili_pekerjaan');
            $table->string('domisili_asal');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('github');
            $table->string('avatar');
            $table->timestamps();
        });
 Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('NIM');
            $table->timestamps();
        });
 Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'alumni', 'mahasiswa'])->default('mahasiswa');
            $table->rememberToken();
            $table->timestamps();
        });
```

# Tipe desain pengembangan yang digunakan
<p align="left"><a href="" target="_blank"><img src="https://i.ibb.co/dDf3c7Q/agile2.jpg" alt="agile" border="0" width="500"></a></p>
<p> Tipe desain pengembangan yang digunakan yaitu V-Model. Agile merupakan model development jangka pendek yang memerlukan adaptasi cepat dan pengembangan terhadap perubahan dalam bentuk apapun. Kami menggunakan agile karena memungkinkan tim untuk memberikan penilai lebih cepat dan merespon perubahan dengan cepat.
</p>

# Hasil dan pembahasan
### Use case diagram
![Image of usecase diagram](https://i.ibb.co/znvD7Qq/usecase.jpg)
### Activity diagram
![Image of activity diagram](https://i.ibb.co/mN4CMjJ/act-search.jpg)
![Image of activity diagram](https://i.ibb.co/DYWmPGT/act-edit-profile.jpg)
![Image of activity diagram](https://i.ibb.co/zJrvtPm/act-regis.jpg)
### Class diagram
![Image of class diagram](https://i.ibb.co/gR32Xfp/classdiagram.jpg)
### Entity Relationship Diagram
![Image of erd diagram](https://i.ibb.co/NTmCHVt/erddiagram.jpg)
### Arsitektur sistem
![Image of system architecture](https://i.ibb.co/8Yx3bYc/arsitektur.jpg)
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
### Link Website: <p align="left"><a href="https://alumni-ilkom-hub.herokuapp.com/" target="_blank">Kom-Hub</a></p>
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
| Fachirah Hestiana R   | G64180021  | UI Designer, Product Manager  |
| Elina Eprida          | G64180038  | UI/UX Designer   |
| Ihsan Fadhila         | G64180071  | Front End        |
| Emilia Syafitri       | G64189001  | Back End         |
