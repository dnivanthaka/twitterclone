<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $this->config->item('system_name'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo $this->config->base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Theme -->
    <link href="<?php echo $this->config->base_url(); ?>/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->base_url(); ?>/bootstrap/css/theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- Page Content -->
    <div class="container">
    <form class="form-signin" method="post" action="<?php echo $this->config->site_url(); ?>/login/submit">
        <h2 class="form-signin-heading">Please log in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <input type="hidden" name="is_posted" value="true"/>
        <!--<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

    </div>
    <!-- /.container -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $this->config->base_url(); ?>/bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->config->base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
