<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Google chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", { packages: ["corechart"] });
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Task", "Hours per Day"],
          ["Software Engineer", 2],
          ["Data Analyst", 3],
          ["UI/UX Designer", 6],
          ["Data Scientist", 9],
          ["IoT Engineer", 11],
        ]);

        var options = {
          title: "Career Percentage",
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById("donutchart"));
        chart.draw(data, options);
      }
    </script>

<title>Home</title>
</head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
      <div class="container">
        <a class="navbar-brand" href="/"> <img src="asset/icon.png" alt="" width="30" class="rounded mx-2" /> KOM-Hub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-4">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="/alumnipage">Alumni</a>
              </li>
              <li class="nav-item mx-4">   
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li>
                <div class="container mt-1">
                  @if (Auth::user()->role === 'alumni' && Auth::user()->alumni === null)
                  <a class="navbar-brand" href="/alumni"> <img src="asset/user.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}</a>
                @elseif (Auth::user()->role === 'alumni')
                  <a class="navbar-brand" href="/alumni"> <img src="{{ asset('storage/'.Auth::user()->alumni->avatar) }}" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}</a>
                @else 
                  <img src="asset/user.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}
                @endif
                  <button type="button" class="btn btn-outline-secondary btn-sm">
                    <a href="{{ route('logout') }}" style="color:#000000; text-decoration:none" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                      Log Out
                    </a>
                  </button>
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <div class="container-fluid bg-warning" style="height: 600px; background-image: url(asset/02.jpg); background-size: cover; background-position: 20%"></div>

    <!-- info grafis -->
    <section id="info">
      <div class="container-fluid py-5" style="background-color: #fffafc">
        <div class="container">
          <div class="row text-center">
            <div class="col my-4">
              <h2>Info Grafis Alumni Ilmu Komputer IPB</h2>
            </div>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body text-center my-4">
                  <h1 class="card-text">Computer Science</h1>
                  <h6 class="card-text text-muted mb-5">TOP-5 CAREER</h6>
                  <hr />
                </div>
                <div id="donutchart" style="width: 350px; height: 200px"></div>
                <div class="card-body">
                  <p class="card-text text-center mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quia quis odio. Tenetur cumque unde ad, soluta rerum, atque nesciunt ab sapiente velit sunt enim, autem magnam minus facilis perferendis eum maiores facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title mt-4">PROGRAM SARJANA ILMU KOMPUTER DALAM ANGKA</h5>
                  <h6 class="card-subtitle mb-2 text-muted">(Tahun 2020)</h6>
                  <hr class="my-5" />
                  <h1 class="card-text text-primary">{{ $grads->tepat_waktu}} %</h1>
                  <p class="card-text mb-4">Mahasiswa lulus tepat waktu (48 bulan)</p>
                  <h1 class="card-text text-primary">{{ $grads->dapat_kerja}} %</h1>
                  <p class="card-text mb-4">Lulusan mendapatkan pekerjaan dalam waktu kurang dari tiga bulan</p>
                  <h1 class="card-text text-primary">{{ $grads->kerja_sesuai}} %</h1>
                  <p class="card-text mb-5">Mahasiswa mendapatkan pekerjaan sesuai bidang keahlian</p>
                  <!-- <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end info grafis-->

    <!-- profil alumni-->
    <section id="profilalumni">
      <div class="container-fluid py-5 bg-light">
        <div class="container">
          <div class="row text-center align-text-center mb-4">
            <div class="col">
              <h1>Profil Alumni Sukses</h1>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-6">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  @foreach ($sliders as $index => $item)
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="{{ $index == 0 ? 'active' : '' }}"></button>
                  @endforeach
                </div>
                <div class="carousel-inner">
                  @foreach ( $sliders as $index => $slider )
                  <div class="carousel-item {{$index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/'.$slider->alumni->avatar) }}" class="d-block w-100" alt="..." style="width:400px; height:400px;"/>
                    <div class="carousel-caption d-none d-md-block">
                      <h5><a style="color:white; text-decoration:none" href="{{url('alumni/'.$slider->alumni->id) }}">{{ $slider->user->name }}</a></h5>
                      <p>{{ $slider->alumni->jabatan}} at {{ $slider->alumni->perusahaan }} | KOM {{ $slider->alumni->angkatan }}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end profil alumni -->

    <!-- Footer -->
    <footer class="text-white py-4" style="background-color: #5472ea">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-5">
            <ul class="list-unstyled text-start">
              <li><i class="bi bi-arrow-right-circle"></i> Himpunan Alumni IPB</li>
              <li><i class="bi bi-arrow-right-circle"></i> Grup Himpunan Alumni IPB</li>
              <li><i class="bi bi-arrow-right-circle"></i> Linkedin Alumni Ilkom IPB</li>
            </ul>
          </div>
        </div>

        <hr />
        <p class="text-center pt-3">Copyright Alumni Ilkom Hub. Computer Science. IPB University</p>
      </div>
    </footer>
    <!-- akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
  </body>
</html>
