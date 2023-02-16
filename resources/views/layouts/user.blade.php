<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ config('app.name', 'Astungkara Website') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>
          @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
          .font-family-karla { font-family: karla; }
          .bg-sidebar { background: #3d68ff; }
          .cta-btn { color: #3d68ff; }
          .upgrade-btn { background: #1947ee; }
          .upgrade-btn:hover { background: #0038fd; }
          .active-nav-link { background: #1947ee; }
          .nav-item:hover { background: #1947ee; }
          .account-link:hover { background: #3d68ff; }
      </style>
        @vite(['resources/css/app.css','resources/js/app.js','resources/assets/app/css/bootstrap.min.css','resources/assets/icons/css/font-awesome.min.css', 'resources/dist/css/index.css','resources/js/app.js','resources/dist/js/jquery.js','resources/dist/js/index.js'])
    </head>
    <body>
        <div class="wrapper">
          <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
              <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
              </button>
              <a class="navbar-brand me-auto text-danger" href="{{ route('home') }}">Dash<span class="text-warning">Board</span></a>
              <ul class="nav ms-auto">
                <li class="nav-item dropstart">
                  <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                    <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                    <span class="badge bg-danger">10</span>
                  </a>
                  <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                    <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                      <i class="fa fa-bell me-3" aria-hidden="true"></i>
                      <span class="fw-bold lh-1">Notifikasi</span>
                    </div>
                    <a class="dropdown-item py-2" href="#">
                      <div class="d-flex overflow-hidden">
                        <i
                          class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2"
                          aria-hidden="true"
                        ></i>
                        <div class="d-block content">
                          <p class="lh-1 mb-0">{{ Auth::user()->name }}</p>
                          <span class="content-text">Notification From Your Friend!</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item py-2" href="#">
                      <div class="d-flex overflow-hidden">
                        <i class="fa fa-file fa-lg dropdown-icons bg-warning text-white p-2 me-2" aria-hidden="true"></i>
                        <div class="d-block content">
                          <p class="lh-1 mb-0">file informations</p>
                          <span class="content-text">your file has exceeded the limit.</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item py-2" href="#">
                      <div class="d-flex overflow-hidden">
                        <i class="fa fa-hdd-o fa-lg dropdown-icons bg-danger text-white p-2 me-2" aria-hidden="true"></i>
                        <div class="d-block content">
                          <p class="lh-1 mb-0">Storage</p>
                          <span class="content-text">Your storage is full, delete some files.</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="nav-item dropstart">
                  <a
                    class="nav-link text-dark ps-3 pe-1"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                  >
                    <img src="{{ Vite::asset('resources/images/user/user.png') }}" alt="user" class="img-user" />
                  </a>
                  <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                    <div class="d-flex p-3 border-bottom mb-2">
                      <img src="{{ Vite::asset('resources/images/user/user.png') }}" alt="user" class="img-user me-2" />
                      <div class="d-block">
                        <p class="fw-bold m-0 lh-1">{{ Auth::user()->name }}</p>
                        <small>{{ Auth::user()->email }}</small>
                      </div>
                    </div>
                    <a class="dropdown-item" href="#"> <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile </a>
                    <a class="dropdown-item" href="#"> <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting </a>
                    <hr class="dropdown-divider" />
                    <a class="dropdown-item" href="{{ route('login') }}">
                      <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
    
          <div class="slider" id="sliders">
            <div class="slider-head">
              <div class="d-block pt-4 pb-3 px-3">
                <img src="{{ Vite::asset('resources/images/user/user.png') }}" alt="user" class="slider-img-user mb-2" />
                <p class="fw-bold mb-0 lh-1 text-white">{{ Auth::user()->name }}</p>
                <small class="text-white">{{ Auth::user()->email }}</small>
              </div>
            </div>
            <div class="slider-body px-1">
              <nav class="nav flex-column">
                <a class="nav-link px-3 active" href="{{ route('home') }}">
                  <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                </a>
                <a class="nav-link px-3" href="{{ route('profile.edit') }}"> <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile </a>
                <hr class="soft my-1 bg-white" />
                <a class="nav-link px-3" href="{{ route('upload.index') }}">
                  <i class="fa fa-bell fa-lg box-icon" aria-hidden="true"></i>Upload
                </a>
                <a class="nav-link px-3" href="#">
                  <i class="fa fa-envelope fa-lg box-icon" aria-hidden="true"></i>Message
                </a>
                <hr class="soft my-1 bg-white" />
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="nav-link px-3" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();"> 
                  <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>
                  LogOut</a>
              </form>
              </nav>
            </div>
          </div>
        </div>
        <main>      
            {{ $slot }}
        </main>
    
      <div class="slider-background" id="sliders-background"></div>
      </body>
</html>
