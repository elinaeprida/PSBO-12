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

    <title>Alumni</title>
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
              <a class="nav-link active" href="/alumnipage">Alumni</a>
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

    <!-- Pencarian -->
    <div class="container-fluid bg-light">
      <div class="container py-5" style="background-color:#fffafc;"> 
        <div class="row mt-5 text-center">
          <div class="col mt-5 mb-5">
            <h1>Pencarian Alumni</h1>
          </div>
        </div>
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-2">
              <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Cari Nama</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Cari Angkatan</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Cari Spesialisasi</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Cari Pekerjaan</a>
                <a class="list-group-item list-group-item-action" href="#list-item-5">Cari Tempat Kerja</a>
              </div>
            </div>
            <div class="col-6"> 
              <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0" >
              <div class="card bg-white" style="height: 200px;">
                <div class="card-body overflow-auto">
                    <h4 id="list-item-1">Nama</h4>
                      <div class="mb-3">
                        <input type="text" class="form-control bg-light" id="Perusahaan" placeholder="perusahaan">
                      </div>
                    <h4 id="list-item-2">Angkatan</h4>
                    <div class="mb-3">
                      <input type="text" class="form-control bg-light" id="Perusahaan" placeholder="nama">
                    </div>
                    <h4 id="list-item-3">Spesialisasi</h4>
                    <div class="mb-3">
                      <select class="form-select bg-light" aria-label="Default select example">
                        <option selected disabled>CSN / CIO / SEIS</option>
                        <option value="1">CSN</option>
                        <option value="2">CIO</option>
                        <option value="3">SEIS</option>
                      </select>
                    </div>
                    <h4 id="list-item-4">Pekerjaan</h4>
                      <div class="mb-3">
                        <input type="text" class="form-control bg-light" id="Perusahaan" placeholder="pekerjaan">
                      </div>
                    <h4 id="list-item-5">Tempat Kerja</h4>
                      <div class="mb-3">
                        <input type="text" class="form-control bg-light" id="Perusahaan" placeholder="kota tempat bekerja">
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-6 offset-2">
              <div class="d-grid gap-2 my-4">
                <button class="btn btn-outline-primary" type="button"><a href="/alumnipage" class="text-decoration-none"></a>Cari Alumni</button>
              </div>
            </div>
          </div>

          <!-- Hasil Pencarian -->
          <div class="col-6 offset-4"> 
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0" >
            <div class="card" style="height: 300px; background-color: #fffafc;">
              <div class="card-body overflow-auto">
                @foreach ($alumnis as $alumni)
                    <div class="mb-3">
                      <div class="card mb-3">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('storage/'.$alumni->avatar) }}" alt="..." class="img-fluid">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5><a class="card-title" style="color:#000000; text-decoration:none" href="{{ url('alumni/'.$alumni->id) }}">{{ $alumni->user->name}}</a></h5>
                              <p class="card-text">
                                {{ $alumni->jabatan}}
                              </p>
                              <p class="fst-italic">{{ $alumni->perusahaan}}</p>
                              <p class="card-text"><small class="text-muted">KOM-{{ $alumni->angkatan}}</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- end Hasil pencarian -->
        </div>
      </div>
    </div>
    <!-- end pendcarian-->

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
     
     <script>
       var popoverTriggerList = [].slice.call(document.querySelectorAll ('[data-toggle="popover"]'));
       var popoverList = popoverTriggerList.map(function(popoverTrigger)
       {
         return new bootstrap.Popover( popoverTrigger);
       });
     </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>

    {{-- <script type="text/javascript">
      var path = "{{ route('alumni') }}";
      $('input.typeahead').typeahead({
          source:  function (query, process) {
          return $.get(path, { query: query }, function (data) {
                  return process(data);
              });
          }
      });
  </script> --}}
  </body>
</html>