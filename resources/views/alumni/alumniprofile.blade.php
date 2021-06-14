<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- MDB 
    <link rel="stylesheet" href="css/css/mdb.min.css" />
     MDB -->

    <title>Alumni Profile</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="asset/icon.png" alt="" width="30" class="rounded mx-2" /> KOM-Hub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-4">
              <a class="nav-link " aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link " href="/alumni">Alumni</a>
            </li>
            <li class="nav-item mx-4">   
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li>
              <div class="container mt-1">
                @if (Auth::user()->role === 'alumni')
                <a class="navbar-brand" href="/profile"> <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}</a>
              @else 
                <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}
              @endif
                <button type="button" class="btn btn-outline-secondary btn-sm">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Log Out
                  </a>
                </button>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            -->
          </ul>

          <!-- 

              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          -->
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- profile-->
    <div class="container-fluid bg-light">
        <div class="container" style="background-color: #fffafc;">
            <div class="row text-center mt-5">
                <div class="co mt-5">
                    <h1>Profile</h1>
                </div>
                <div class="col mt-4 mb-5">
                    <img src="asset/22.jpg" alt="" class="rounded-circle img-thumbnail" style="width: 200px;">
                </div>
            </div>

            <!-- satu -->

          

            <div class="row d-flex justify-content-center">
              <div class="col-md-5 mb-3">
                <div class="card">
                  <div class="card-body">
                    <table style="width: 100%;">
                      <tr style="height: 2.5rem;">
                        <td>
                          Nama         :
                        </td>
                        <td style="text-align:right ;">
                          {{ Auth::user()->name }}
                        </td>
                      </tr>
                      <tr style="height: 2.5rem;">
                        <td>
                          Angkatan     :
                        </td>
                        <td style="text-align: right;">
                          {{ Auth::user()->alumni->angkatan }}
                        </td>
                      </tr>
                      <tr style="height: 2.5rem;">
                        <td>
                          Spesialisasi  :
                        </td>
                        <td style="text-align: right;">
                          {{ Auth::user()->alumni->spesialisasi }}
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Dua -->   
            <div class="row d-flex justify-content-center">
              <div class="col-md-5 mb-3">
                <div class="card">
                  <div class="card-body">

                    <table style="width: 100%;">
                      <tr style="height: 2.5rem;">
                        <td>
                          Jabatan         :
                        </td>
                        <td style="text-align:right ;">
                          {{ Auth::user()->alumni->jabatan }}
                        </td>
                      </tr>
                      <tr style="height: 2.5rem;">
                        <td>
                          Perusahaan     :
                        </td>
                        <td style="text-align: right;">
                          {{ Auth::user()->alumni->perusahaan }}
                        </td>
                      </tr>
                      <tr style="height: 2.5rem;">
                        <td>
                          Domisili Pekerjaan  :
                        </td>
                        <td style="text-align: right;">
                          {{ Auth::user()->alumni->domisili_pekerjaan }}
                        </td>
                      </tr>
                      <tr style="height: 2.5rem;">
                        <td>
                          Domisili Asal  :
                        </td>
                        <td style="text-align: right;">
                          {{ Auth::user()->alumni->domisili_asal }}
                        </td>
                      </tr>
                    </table>

                  </div>
                </div>
              </div>
            </div>

            <!-- tiga -->

            <div class="row d-flex justify-content-center">
              <div class="col-md-5 mb-3">
                <div class="card">
                  <div class="card-body">

                    <table style="width: 100%;">
                      <tr style="height: 2.5rem;">
                        <td>
                          Instagram         :
                        </td>
                        <td style="text-align:right ;">
                          {{ Auth::user()->alumni->instagram }}
                        </td>
                      </tr>
                      <tr style="height: 2.5rem;">
                        <td>
                          Linkedin     :
                        </td>
                        <td style="text-align: right;">
                          {{ Auth::user()->alumni->linkedin }}
                        </td>
                      </tr>
                      <tr style="height: 2.5rem;">
                        <td>
                          Github  :
                        </td>
                        <td style="text-align: right;">
                          {{ Auth::user()->alumni->github }}
                        </td>
                      </tr>
                    </table>

                  </div>
                </div>
              </div>
            </div>

            <!-- empat -->
            <div class="row d-flex justify-content-center d-grid gap-2">
                <div class="col-5">
                    <div class="d-grid gap-2 my-2">
                        <button class="btn btn-outline-success" type="button"><a href="password.html" class="text-decoration-none"></a>Ubah Password</button>
                      </div>
                </div>
            </div>

            <!-- lima -->
            <div class="row d-flex justify-content-center d-grid gap-2">
                <div class="col-5">
                    <div class="d-grid gap-2 py-2 mb-4">
                        <button class="btn btn-outline-danger" type="button"><a href="{{ url('alumni/'.Auth::user()->alumni->id.'/edit')}}" class="text-decoration-none">Edit Profile</a></button>
                      </div>
                </div>
            </div>
</div>
</div>
    </div>
    <!-- end profile -->

    <!-- Footer -->
    <footer class="text-white py-4" style="background-color: #5472EA;">
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

    <!-- MDB 
    <script type="text/javascript" src="js/js/mdb.min.js"></script>
     MDB -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
  </body>
</html>
