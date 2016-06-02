<form id="staff_login" method="post" action="<?php echo $this->config->site_url(); ?>/login/submit"> 
<div class="row-fluid login-wrapper">
    <div class="box">
        <div class="content-wrap">
            <h6>Login</h6>
            <input class="span12" name="username" id="username" type="text" placeholder="User Name" />
            <input class="span12" name="password" id="password" type="password" placeholder="Password" />
            <input type="hidden" name="is_posted" value="true"/>
            <button type="submit" class="btn-glow primary signup">Login</button>
        </div>
    </div>
</div>
</form>