<div class="row" style="margin-top: 40px;">
   			 	
	<div class="well">
		<h3>Registration</h3>
	</div>

	
	<form action="" method="post" style=" margin:  0 auto;">
		
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">
			</div>

			
			<div class="form-group">
				<label for="name">Email</label>
				<input type="text" name="email"  class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Address</label>
				<input type="text"  name="address"  class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Mobile</label>
				<input type="text"  name="mobile"  class="form-control">
			</div>

		</div>
		
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="name">Sex</label>
				<select name="sex" id="" class="form-control">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>

			<div class="form-group">
				<label for="name">Username</label>
				<input type="text"  name="username"  class="form-control">
			</div>


			<div class="form-group">
				<label for="name">Password</label>
				<input type="password"  name="password"  class="form-control">
			</div>
			
			<div class="form-group">
				
				<input type="submit" class="form-control btn btn-primary" value="Register">
			</div>
			
			<?php echo $this->session->userdata('message'); ?>
		
			
		</div>


	</form>
				
   			 		
</div>	