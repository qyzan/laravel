<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/fonts/material-icon/css/material-design-iconic-font.css') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/fonts/css_/style.css') }}" />
  </head>
  <body>
    <div class="main">
      <!-- Sing in  Form -->
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
<x-auth-session-status class="mb-4" :status="session('status')" />
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure><img src="{{ Vite::asset('resources/images/signin-image.jpg') }}" alt="sing up image" /></figure>
              <a href="{{ route('register') }}" class="signup-image-link link text-black">Create an account</a>
            </div>

            <div class="signin-form">
              <h2 class="form-title">Sign In</h2>
              <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-email"></i></label>
                  <input type="email" name="email" id="email" placeholder="example@email.com" required autofocus/>
                </div>
                <div class="form-group">
                  <label for="password"><i class="zmdi zmdi-lock"></i></label>
                  <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="********" /> 
                </div>
                <div class="form-group">
                  <input type="checkbox" name="remember" id="remember" class="agree-term" />
                  <label for="remember" value="1" class="label-agree-term"
                    ><span><span></span></span>Remember Me</label>
                </div>      
                <div class="form-group form-button">
                  <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                </div>
                <div class="from-group">
                    @if (Route::has('password.request'))
                        <a class="signup-image-link link text-black" href="{{ route('password.request') }}">Forgot your password?
                        </a>
                    @endif
                </div>  
              </form>
              <div class="social-login">
                <span class="social-label">Or login with</span>
                <ul class="socials">
                  <li>
                    <a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- JS -->
    <script src="{{ Vite::asset('resources/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/main.js')}}"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  </body>
</html>
