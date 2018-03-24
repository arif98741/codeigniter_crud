<div class="row" style="margin-top: 40px;">
   			 	
	<div class="well" style="max-width:480px; margin: 30px auto;">
		<h3>Login</h3>
	</div>

	
	<form action="<?php echo site_url("Login/login"); ?>" method="post" style="max-width: 500px; margin:  0 auto;">
		
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="username" class="form-control">
		</div>

		<div class="form-group">
			<label for="name">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		
	
		<div class="form-group">
			
			<input type="submit" class="form-control btn btn-primary" value="Login">
		</div>
		<p class="alert alert-warning">
			
			Username and password not matched
		</p>
		

	</form>
	
		
	</div>	

</div>