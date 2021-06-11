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
              <a class="nav-link " href="/alumni">Alumni</a>
            </li>
            <li class="nav-item mx-4">   
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li>
               
              
              
              <div class="container mt-1">
                <a class="navbar-brand" href="#"> <img src="asset/22.jpg" alt="" width="25" class="rounded-circle mx-2" />Dian Adriana</a>

                <button type="button" class="btn btn-outline-secondary btn-sm">Log Out</button>
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
                <div class="col mt-4">
                    <img src="asset/22.jpg" alt="" class="rounded-circle img-thumbnail mb-5" style="width: 200px;">
                </div>
            </div>

            <!-- validation -->
            <!-- end validation -->

            <div class="container">
            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="input-group">
                  <span class="input-group-text">Nama Lengkap</span>
                  <input type="text" name="nama" aria-label="First name" class="form-control" value="">
                </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="Angkatan" class="form-label">Angkatan</label>
                  <input type="text" name="angkatan" class="form-control" id="Angkatan" placeholder="KOM - ...">
                </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">

                  <label class="form-label">Spesialisasi</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected disabled>CSN / CIO / SEIS</option>
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
                  <input type="text" name="jabatan" class="form-control" id="Jabatan" placeholder="jabatan">
                </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="Perusahaan" class="form-label">Perusahaan Tempat Bekerja</label>
                  <input type="text" name="perusahaan" class="form-control" id="Perusahaan" placeholder="perusahaan">
                </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="D_kerja" class="form-label">Domisili Pekerjaan</label>
                  <input type="text" name="domisili_pekerjaan" class="form-control" id="D_kerja" placeholder="kota bekerja">
                </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <div class="mb-3">
                  <label for="D_asal" class="form-label">Domisili Asal</label>
                  <input type="text" name="domisili_asal" class="form-control" id="D_asal" placeholder="kota asal">
                </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <label for="basic-url" class="form-label">Instagram</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Link Instagram</span>
                    <input type="text" name="instagram" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                  </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <label for="basic-url" class="form-label">Linkedin</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Link Linkedin</span>
                    <input type="text" name="linkedin" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                  </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-md-5">
                <label for="basic-url" class="form-label">Github</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Link Github</span>
                    <input type="text" name="github" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                  </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-5">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload Photo Profile</label>
                  <input class="form-control" name="avatar" type="file" id="formFile">
                </div>
              </div>
            </div>

            <div class="row justify-content-center mb-3">
              <div class="col-5">
                <div class="d-grid gap-2 my-4">
                  <button class="btn btn-outline-success" type="button">Simpan Perubahan</button>
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
