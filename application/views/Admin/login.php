<div class="logo-block">
	<center>
      	<a class="logo" href="<?php echo base_url(); ?>">
        	<img style="margin-top: -7px; margin-left:580px;" class="f-logo" src="<?php echo base_url().'assets/admin/images/logo.png'; ?>" alt="logo">
    	</a>
    </center>
</div>

<div class="log-w3">
	<div class="w3layouts-main" style="    margin-top: 139px;">
		<h2>Sign In Now</h2>
			<form method="post" action="<?php echo base_url().'login/'; ?>">
				<input type="email" class="ggg" autocomplete="off" name="email" placeholder="Email" required="">
				<input type="password" class="ggg" autocomplete="off" name="password" placeholder="Password" required="">
				<div class="clearfix"></div>
				<input type="submit" name="login" value="submit">
			</form>	
	</div>
</div>

