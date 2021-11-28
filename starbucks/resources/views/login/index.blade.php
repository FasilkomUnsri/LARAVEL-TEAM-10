<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/fontawesome5/css/all.css') }}" rel="stylesheet" />
    <title>Kelompok 10</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    
    <!-- Custom styles for this template -->
    <link href="/bootstrap/bootstrap/css/login.css" rel="stylesheet">
  </head>

  <body class="img js-fullheight" style="background-image: url(images/resto.webp);">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Kelompok 10</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h3 class="mb-4 text-center">Have an account?</h3>
               <form action="/login" method="POST" class="signin-form">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control" @error('email')@enderror is-invalid id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <input type="password"  name ="password"class="form-control" id="password" placeholder="Password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                      
                  @enderror
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary">Remember Me
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                   <small>Belum mendaftar?<a href="/register" style="color: #fff">Silahkan mendaftar</a></small>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <script src="jquery/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="bootsrap/bootsrap/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    
  </body>
</html>


















