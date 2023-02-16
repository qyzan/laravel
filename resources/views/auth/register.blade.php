<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/fonts/material-icon/css/material-design-iconic-font.css') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/fonts/css_/style.css') }}" />
  </head>
  <body>
    <div class="main">
      <!-- Sign up form -->
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
      @endif
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title">Sign up</h2>
            <form method="POST" class="register-form" id="register-form" onSubmit="return check_agree(this);" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="name" id="name" placeholder="Your Name" required autofocus/>
              </div>
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email"></i></label>
                <input type="email" name="email" id="email" placeholder="Your Email" :value="old('email')" required/>
              </div>
              <div class="form-group">
                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="password" id="pass" placeholder="Password" required autocomplete="new-password" />
              </div>
              <div class="form-group">
                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" name="password_confirmation" required />
              </div>
              <div class="form-group">
                <input type="checkbox" name="agree" id="agree-term" class="agree-term" />
                <label for="agree-term" class="label-agree-term"
                  ><span><span></span></span>I agree all statements in
                  <a href="#" class="term-service link text-success">Terms of service</a></label
                >
              </div>
              <div class="form-group form-button">
                <input
                  type="submit"
                  class="form-submit fw-bold text-light link"
                  onClick="check_agree(this.form)"
                  value="Register"
                />
              </div>
            </form>
          </div>
          <div>
            <div class="signup-image">
              <figure><img src="{{ Vite::asset('resources/images/signup-image.jpg') }}" alt="sing up image" /></figure>
              <a href="{{ route('login') }}" class="signup-image-link link text-black">I am already member</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ Vite::asset('resources/js/main.js') }}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="{{ Vite::asset('resources/dist/js/checkbox.js') }}"></script>
</body>
</html>
