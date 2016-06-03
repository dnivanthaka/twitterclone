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

    <h4>Login</h4>
    <div class="input-group">
        <form id="staff_login" method="post" action="<?php echo $this->config->site_url(); ?>/login/submit">
        <div class="row-fluid login-wrapper">
        <div class="box">
        <div class="content-wrap">
        <h6>Login</h6>
        <input class="form-control" name="username" id="username" type="text" placeholder="User Name" />
        <input class="form-control" name="password" id="password" type="password" placeholder="Password" />
        <input type="hidden" name="is_posted" value="true"/>
        <button type="submit" class="btn-glow primary signup">Login</button>
        </div>
        </div>
        </div>
        </form>
   </div>
    <!-- /.input-group -->


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $this->config->base_url(); ?>/bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->config->base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
