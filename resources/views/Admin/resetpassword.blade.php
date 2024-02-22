<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dunzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Dunzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="dunzo/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="dunzo/images/favicon.png" type="image/x-icon">
    <title>Admin</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dunzo/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="dunzo/css/style.css">
    <link id="color" rel="stylesheet" href="dunzo/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="dunzo/css/responsive.css">
  </head>
  <body>
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card login-dark">
              <div>
                <div><a class="logo" href="{{ route('adminindex') }}"><img class="img-fluid for-light" src="dunzo/images/logo/logo-1.png" alt="looginpage"><img class="img-fluid for-dark" src="dunzo/images/logo/logo.png" alt="looginpage"></a></div>
                <div class="login-main">
                  <form class="theme-form">
                    <h4>Create Your Password</h4>
                    <div class="form-group">
                      <label class="col-form-label">New Password</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                        <div class="show-hide"><span class="show"></span></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Retype Password</label>
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    </div>
                    <div class="form-group mb-0">
                      <div class="checkbox p-0">
                        <input id="checkbox1" type="checkbox">
                        <label class="text-muted" for="checkbox1">Remember password</label>
                      </div>
                      <button class="btn btn-primary btn-block w-100" type="submit">Done                          </button>
                    </div>
                    <p class="mt-4 mb-0">Don't have account?<a class="ms-2" href="{{ route('signup') }}">Create Account</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- page-wrapper Ends-->
    <!-- latest jquery-->
    <script src="dunzo/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="dunzo/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="dunzo/js/icons/feather-icon/feather.min.js"></script>
    <script src="dunzo/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="dunzo/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="dunzo/js/script.js"></script>
    <!-- Plugin used-->
  </body>
</html>
