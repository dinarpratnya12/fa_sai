<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="icon"type="image/png" href="<?php echo base_url('assets/logoaja.png');?>" />
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f4d081;
            -moz-box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 40%;
            height: 40%;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 00%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
        .rounded{
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f4d081;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 100px 0px rgba(0,0,0,0.56);
            -moz-box-shadow: 0px 0px 100px 0px rgba(0,0,0,0.56);
            box-shadow: 0px 0px 100px 0px rgba(0,0,0,0.56);
        }
    </style>
  </head>
    <!-- <title>Sign In</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head> -->
  <body>
  <br>
  <img src="<?php echo base_url('assets/bg2.jpeg');?>" id="bg" alt="" style="position:fixed; top:0; left:0; min-width:100%; min-height:100%;">

    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="rounded">
            <img class="profile-img" src="<?php echo base_url('assets/yasaki.png');?>" alt="">
              <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
                <br>
                <h3 class="form-signin-heading">Please Sign In</h3>
                <?php echo $this->session->flashdata('msg');?>
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="btn btn-lg btn-default btn-block" type="submit">Sign in</button>
              </form>
          </div>
        </div>
      </div> <!-- /container -->
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
