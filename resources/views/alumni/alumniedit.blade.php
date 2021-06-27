<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Alumni Edit</title>
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
              <a class="nav-link " href="/alumnipage">Alumni</a>
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

    <!-- profile-->
    <div class="container-fluid bg-light">
        <div class="container" style="background-color: #fffafc;">
            <div class="row text-center mt-5">
                <div class="co mt-5">
                    <h1>Edit Profile</h1>
                </div>
                <div class="col mt-4">
                    <img src="{{ asset('storage/'.Auth::user()->alumni->avatar) }}" alt="" class="rounded-circle img-thumbnail mb-5" style="width: 200px;">
                </div>
            </div>
            <!-- validation -->
            <!-- end validation -->
            <form class="form-horizontal" enctype="multipart/form-data" role="form" action="{{ route('alumniupdate', ["alumni" => Auth::user()->id])}}" method="post">
            @csrf
              <div class="container">
                <div class="row justify-content-center mb-3">
                  <div class="col-md-5">
                    <label for="Angkatan" class="form-label">Nama Lengkap</label>
                    <span class="input-group-text">{{ Auth::user()->name }}</span>
                </div>
                </div>
              </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="Angkatan" class="form-label">Angkatan</label>
                  <input type="text" class="form-control" name="angkatan" value="{{ old('angkatan',Auth::user()->alumni->angkatan) }}">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label class="form-label">Spesialisasi</label>
                  <select class="form-select" name="spesialisasi">
                    <option selected disabled>{{ old('spesialisasi',Auth::user()->alumni->spesialisasi) }}</option>
                    <option value="1">CSN</option>
                    <option value="2">CIO</option>
                    <option value="3">SEIS</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="Jabatan" class="form-label">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" value="{{ old('jabatan',Auth::user()->alumni->jabatan) }}">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="Perusahaan" class="form-label">Perusahaan Tempat Bekerja</label>
                  <input type="text" class="form-control" name="perusahaan"  value="{{ old('perusahaan',Auth::user()->alumni->perusahaan) }}">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="D_kerja" class="form-label">Domisili Pekerjaan</label>
                  <input type="text" class="form-control" name="domisili_pekerjaan" value="{{ old('domisili_pekerjaan',Auth::user()->alumni->domisili_pekerjaan) }}">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="D_asal" class="form-label">Domisili Asal</label>
                  <input type="text" class="form-control" name="domisili_asal" value="{{ old('domisili_asal',Auth::user()->alumni->domisili_asal) }}">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <label for="basic-url" class="form-label">Instagram</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Link Instagram</span>
                    <input type="text" class="form-control" id="basic-url" name="instagram" aria-describedby="basic-addon3"  value="{{ old('instagram',Auth::user()->alumni->instagram) }}">
                  </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <label for="basic-url" class="form-label">Linkedin</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Link Linkedin</span>
                    <input type="text" class="form-control" id="basic-url" name="linkedin" aria-describedby="basic-addon3" value="{{ old('linkedin',Auth::user()->alumni->linkedin) }}">
                  </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <label for="basic-url" class="form-label">Github</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Link Github</span>
                    <input type="text" class="form-control" id="basic-url" name="github" aria-describedby="basic-addon3" value="{{ old('github',Auth::user()->alumni->github) }}">
                  </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-5">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload Photo Profile</label>
                  <input class="form-control" type="file" name="avatar" id="formFile">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-3">
              <div class="col-5">
                <div class="d-grid gap-2 my-4">
                  <button class="btn btn-outline-success" type="submit">Simpan Perubahan</button>
                </div>
              </div>
              <div class="col-5">
                <div class="d-grid gap-2 py-2 mb-4">
                    <button class="btn btn-outline-danger" type="button"><a href="{{ url('alumni')}}" style="color:#000000; text-decoration:none" >Kembali</a></button>
                </div>
            </div>
            </div>
            </div>
          </form>
        </div>
    </div>
    <!-- end profile -->

    <!-- Footer -->
    <footer class="text-white py-4" style="background-color: #5472EA;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-5">
            <ul class="list-unstyled text-start">
              <li><i class="bi bi-arrow-right-circle"></i><a href="http://haipb.ipb.ac.id/" style="color:#ffffff;  text-decoration:none;"> Himpunan Alumni IPB</a></li>
              <li><i class="bi bi-arrow-right-circle"></i><a href="https://www.facebook.com/groups/haipb2013/" style="color:#ffffff; text-decoration:none"> Grup Himpunan Alumni IPB</a></li>
              <li><i class="bi bi-arrow-right-circle"></i><a href="https://www.linkedin.com/company/ilmukomputeripb/" style="color:#ffffff; text-decoration:none"> Linkedin Alumni Ilkom IPB </a></li>
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
