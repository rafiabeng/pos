<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bie Coffee</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loginpage.css"> <!--  direktorinya public/css  //-->
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="images/logo.svg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Buat akun baru</p>
              
              <form action="controller/register.php" method="post">
                  <div class="form-group">
                    <label for="nama" class="sr-only">Nama</label>
                    <input type="nama" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>

                  <div class="form-group">
                    <select name="jabatan" class="w-100" >
                      <option selected><label for="jabatan" class="sr-only">Pilih Jabatan</label></option>
                      <option value="Waiter"><label for="jabatan" class="sr-only">Waiter</label></option>
                      <option value="Barista"><label for="jabatan" class="sr-only">Barista</label></option>
                      <option value="Manager"><label for="jabatan" class="sr-only">Manager</label></option>
                    </select>
                    </div>
      
                  <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="username" name="username" id="username" class="form-control" placeholder="Username">
                  </div>

                  <div class="form-group mb-6">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Kata sandi baru">
                  </div>

                  <div class="form-group mb-6">
                    <label for="password2" class="sr-only">Password</label>
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Ketik ulang kata sandi">
                  </div>

                  <input name="submit" id="submit" class="btn btn-block login-btn mb-4" type="submit" value="Daftar">
                  
                </form>

                <script>
                document.querySelector('.btn btn-block login-btn mb-4').onclick = function(){
                  var password = document.querySelector('.password').value,
                  var password2 = document.querySelector('.password2').value;

                  if(password != password2){
                    <?php header('location:/?error=1'); ?>
                  }
                }
                </script>
                
                <p class="login-card-footer-text">Sudah punya akun? <a href="/" class="text-reset">Login disini</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
