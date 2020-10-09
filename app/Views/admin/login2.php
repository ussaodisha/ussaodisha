<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title>Admin_login</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('admin-assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('admin-assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container p-0">

<!-- Outer Row -->
<div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9 p-0">
    <div class="card o-hidden border-0 shadow-lg mt-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-6">
            <div class="p-5">

            <!-- new registration success msg -->
            <?php if(session()->get('success')):?>
              <div class="alert alert-success" role="alert">
                <?= session()->get('success')	 ?>
              </div>
            <?php endif; ?>

              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
              </div>
              <form class="user" action="<?= base_url('Admin/login'); ?>" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="pass" id="InputPassword" placeholder="Password">
                </div>
                <!-- <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
                </div> -->
                <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                <hr>
                <?php if($validation): ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors(); ?>
                  </div>
                <?php endif; ?>
                <?php if($unsuccess):?>
                  <div class="alert alert-danger" role="alert">
                    <small><?= $unsuccess;	 ?></small>
                  </div>
                  <?php endif; ?>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('Admin/forget2'); ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <!-- <a class="small" href="<?= base_url('Admin/register'); ?>">Create an Account!</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>



    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('admin-assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('admin-assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('admin-assets/js/sb-admin-2.min.js');?>"></script>

</body>