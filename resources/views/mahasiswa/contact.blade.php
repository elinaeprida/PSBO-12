<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Contact</title>
  </head>
  <body style="height: 800px;">
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
              <a class="nav-link" href="/alumnipage">Alumni</a>
            </li>
            <li class="nav-item mx-4">   
              <a class="nav-link active" href="/about">About Us</a>
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
    
    <!-- Contact -->
    <div class="container-fluid bg-light" style="height: 800px;">
        <div class="container py-5" style="height: 800px; background-color: #fffafc;">
            <div class="row d-flex justify-content-center align-middle text-center" style="margin-top: 150px;">
                <div class="col-md-6">
                    <div class="card py-5 px-5">
                      @foreach ($abouts as $about)
                        <div class="card-body">
                          <h1 class="card-title">{{ $about->title }}</h1>                      
                          <h6 class="card-subtitle mb-2 text-muted">{{ $about->sub_title }}</h6>
                          <hr>
                          </hr>
                          <p class="card-text ms-1 my-4 me-1 text-middle">
                            {{ $about->description }}
                          </p>
                        </div>
                      @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
   <!-- end Contact -->

    <!-- Footer -->
    <footer class=" text-white py-4" style="background-color: #5472EA;">
      <div class="container">
        <div class="row">
          @foreach ($contacts as $contact)
          <div class="col-md-3">
            <ul class="list-unstyled text-start">
              <li> <h4>Location</h4></li>
              <li><i class=" "></i>{{$contact->location}}</li>
            </ul>
          </div>
          <div class="col-md-3 offset-2">
            <ul class="list-unstyled text-start">
              <li><h4>Contact Us</h4></li>
              <li><i class=" "></i> Phone : {{$contact->phone}}</li>
              <li><i class=" "></i> Email   : {{$contact->email}}</li>
            </ul>
          </div>
          <div class="col-md-1 offset-3">
            <ul class="list-unstyled text-start">
              <li><h4>More at</h4></li>
              <li><i class=" "></i><a id="url">{{$contact->link_more}}</a></li>
            </ul>
          </div>
          @endforeach
        </div>
        <hr />
        <p class="text-center pt-3">Copyright Alumni Ilkom Hub. Computer Science. IPB University</p>
      </div>
    </footer>
    <!--  akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
  </body>
</html>
