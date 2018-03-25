<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>Add User</h3>
    </div>


    <form action="<?php echo site_url("user/saveuser"); ?>" method="post" style=" margin:  0 auto;">

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
                <input type="text" name="address"  class="form-control">
            </div>



            <div class="form-group">
                <label for="name">Mobile</label>
                <input type="text" name="mobile"  class="form-control" >
            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label for="name">Sex</label>
                <select  name="sex"  class="form-control">

					<option value="male" >Male</option>
			  
					<option value="female">Female</option>
                    
                </select>


            </div>



            <div class="form-group">

                <input type="checkbox" value="yes">&nbsp;I have read terms and conditions properly
            </div>




            <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" value="Login">
            </div>
           
					
			<?php if(isset($message)){ //print error message
				echo $message;
			} ?>
				
        </div>


    </form>
	

</div>
<a href="<?php echo site_url("Home"); ?>" class="btn btn-primary">Back</a>