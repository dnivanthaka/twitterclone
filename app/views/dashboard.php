<nav class="navbar navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Twitter Clone</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->config->site_url(); ?>/home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="<?php echo $this->config->site_url(); ?>/login/logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
<div id="posting">
<form class="form-inline" method="post" action="<?php echo $this->config->site_url(); ?>/home/post">
    <textarea class="form-control" name="post" rows="3"></textarea>
    <button type="submit" class="btn btn-primary">Post</button>
</form>
</div>
</div> <!-- container -->
<div class="container">
<div id="postedContent">
        <?php
        foreach($posts as $post){
        ?>
        <div class="post">
            <div class="avatar"></div>
            <div class="postContent">
                <h3>Handle</h3>
                <p class="message"><?php echo $post['post']; ?></p>
            </div>
            <div class="clear"></div>
        </div>        
        <?php
        }
        ?>
        
</div>
</div> <!-- container -->