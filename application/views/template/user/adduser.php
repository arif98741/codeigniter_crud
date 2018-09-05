<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>Add User</h3>
    </div>
    
    <?php echo form_open_multipart('user/saveuser');?>


    

        <div class="row">


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
                    <label for="name">Username</label>
                    <input type="text" name="username"  class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                 <div class="form-group">
                    <label for="name">Mobile</label>
                    <input type="text" name="mobile"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="name">Sex</label>

                    <select  name="sex"  class="form-control">
                        <option value="" disabled="" selected="">Select</option>
                        <option value="male" >Male</option>
                        <option value="female">Female</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password"  class="form-control" >
                </div>

            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">User Photo</label>
                    <input type="file" name="userphoto" class="form-control">
                </div>
            </div>

            

            <div class="col-md-12">
                 <div class="form-group">

                    <input type="checkbox" value="yes">&nbsp;I have read terms and conditions properly
                </div>
                <div class="form-group">

                    <input type="submit" class="form-control btn btn-primary" value="Save User" style="max-width: 400px; margin: 0 auto;">
                </div>
            </div>

            <div class="col-md-6">


                 <?php if(validation_errors() != ""): ?>
                    <div class="alert alert-warning">
                        <?php echo validation_errors(); ?>
                    </div>
                 <?php endif; ?>

                <?php if(isset($message)){ //print error message
                    echo $message;
                } ?>
                
             </div>


        </div>

        


    </form>
	

</div>
<a href="<?php echo site_url("Home"); ?>" class="btn btn-danger">Back</a>