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
        <a class="navbar-brand" href="/"> <img src="asset/icon.png" alt="" width="30" class="rounded mx-2" /> KOM-Hub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-4">
              <a class="nav-link " aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link active" href="/alumni">Alumni</a>
            </li>
            <li class="nav-item mx-4">   
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li>
<<<<<<< HEAD:Frontend/alumni.html
                <div class="container mt-1">
                <a class="navbar-brand" href="#"> <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />Dian Adriana</a> 

                <!-- 
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="Epic Popover" data-content="Some very epic content">Popover Toggle</button>
                -->

                <button type="button" class="btn btn-outline-secondary btn-sm">Log Out</button>
=======
              <div class="container mt-1">
                @if (Auth::user()->role === 'alumni')
                  <a class="navbar-brand" href="/alumni/1"> <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}</a>
                @else 
                  <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />{{ Auth::user()->name }}
                @endif
              </div>
>>>>>>> 06b18f5d288d92dbf41547a2664279c6ae7d0c06:resources/views/mahasiswa/alumni.blade.php
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
              <div class="card bg-white" style="height: 300px;">
                <div class="card-body overflow-auto">
                  
                    <h4 id="list-item-1">Nama</h4>
                      <div class="mb-3">
                       <!-- <label for="Perusahaan" class="form-label">nama lengkap</label> -->
                        <input type="text" class="form-control bg-light" id="Perusahaan" placeholder="perusahaan">
                      </div>
                    
    
                    <h4 id="list-item-2">Angkatan</h4>
                    <div class="mb-3">
                     <!-- <label for="Perusahaan" class="form-label">angkatan</label> -->
                      <input type="text" class="form-control bg-light" id="Perusahaan" placeholder="nama">
                    </div>
                    
    
                    <h4 id="list-item-3">Spesialisasi</h4>
                    <div class="mb-3">
                     <!-- <label class="form-label">spesialisasi</label> -->
                      <select class="form-select bg-light" aria-label="Default select example">
                        <option selected disabled>CSN / CIO / SEIS</option>
                        <option value="1">CSN</option>
                        <option value="2">CIO</option>
                        <option value="3">SEIS</option>
                      </select>
                    </div>
                    
    
                    <h4 id="list-item-4">Pekerjaan</h4>
                      <div class="mb-3">
                       <!-- <label for="Perusahaan" class="form-label">pekerjaan</label> -->
                        <input type="text" class="form-control bg-light" id="Perusahaan" placeholder="pekerjaan">
                      </div>
                    
                    
                    <h4 id="list-item-5">Tempat Kerja</h4>
                      <div class="mb-3">
                       <!-- <label for="Perusahaan" class="form-label">tempat kerja</label> -->
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
                <button class="btn btn-outline-primary" type="button"><a href="alumniprofile.html" class="text-decoration-none"></a>Cari Alumni</button>
              </div>
            </div>
          </div>

          <!-- Hasil Pencarian -->
          <div class="col-6 offset-4"> 

            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0" >
            <div class="card" style="height: 300px; background-color: #fffafc;">
              <div class="card-body overflow-auto">
                
                    <div class="mb-3">
                      <div class="card mb-3">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="asset/4.jpg" alt="..." class="img-fluid">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Fatimah Azzara</h5>
                              <p class="card-text">
                                Software Engineer
                              </p>
                              <p class="fst-italic">at Shopee</p>
                              <p class="card-text"><small class="text-muted">KOM-49</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
  
                   <div class="mb-3">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="asset/2.jpg" alt="..." class="img-fluid">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Melati Rafi Solichin</h5>
                            <p class="card-text">
                              Data Science
                            </p>
                            <p class="fst-italic">at Instagram</p>
                            <p class="card-text"><small class="text-muted">KOM-55</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
  
                  
                  <div class="mb-3">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="asset/3.jpg" alt="..." class="img-fluid">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Dwi Fitri Ananda</h5>
                            <p class="card-text">
                              UI/UX Designer
                            </p>
                            <p class="fst-italic">at MAXIM</p>
                            <p class="card-text"><small class="text-muted">KOM-51</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
  
                    <div class="mb-3">
                      <div class="card mb-3">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="asset/5.jpg" alt="..." class="img-fluid">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Amanda Melania</h5>
                              <p class="card-text">
                                 Security Engineer
                              </p>
                              <p class="fst-italic">at Nord VPN</p>
                              <p class="card-text"><small class="text-muted">KOM-47</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  
                  
                    <div class="mb-3">
                      <div class="card mb-3">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="asset/6.jpg" alt="..." class="img-fluid">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Kinanti Nurrachman</h5>
                              <p class="card-text">
                                Frontend Developer
                              </p>
                              <p class="fst-italic">at Microsoft</p>
                              <p class="card-text"><small class="text-muted">KOM-39</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
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
     
     <script>
       var popoverTriggerList = [].slice.call(document.querySelectorAll ('[data-toggle="popover"]'));
       var popoverList = popoverTriggerList.map(function(popoverTrigger)
       {
         return new bootstrap.Popover( popoverTrigger);
       });
     </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
  </body>
</html>
