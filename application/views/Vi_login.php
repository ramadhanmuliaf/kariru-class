<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="description" content="Peminjaman Barang">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/icon.png')?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/scss/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/flag-icon.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-elastic.css')?>">


  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <style>
    body{
      background-color: #7a63ff;
    }
    .buttonlogin{
      background-color: #4CAF50;
        width: 470px;
        border: none;
        color: white;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-bottom: 10px;
        border-radius: 10px;
        cursor: pointer;
    }
    .login-form{
      background-color: black;
    }
  </style>
</head>

  <div class="sufee-login d-flex align-content-center flex-wrap" >

    <div class="container">
      <div class="login-content">
          <div class="login-form">
            <center><img src="<?php echo base_url('assets/images/logo-png2.png') ?>" style="width: 300px; margin-bottom: 25px;"></center>	
            <form action="<?php echo site_url('login/login_validation'); ?>" method="post">

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"></div>
                  <input class="form-control" name="username" type="username" placeholder="Username" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"></div>
                  <input class="form-control" name="password" type="password" placeholder="Password" required>
                </div>
              </div>

              <input type="submit" name="submit" class="buttonlogin" value="Login">
              <div class="form-group">
                <p style="color: white;">Login Sebagai User <a href="<?php echo base_url(); ?>index.php/LoginUser/masuk" style="color:#FB7A67;">disini</a></p>
              </div>
            </form>
          </div>

      </div>
    </div>
  </div>


  <script src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>


</body>

</html>
