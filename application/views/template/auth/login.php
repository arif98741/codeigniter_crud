<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>Login</h3>
    </div>
    
    <?php echo form_open_multipart('login/login'); ?>

        <div class="row">

            <div class="col-md-offset-3 col-md-5">
                <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password"  class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="Login"  class="btn btn-success">
                </div>
            </div>
            <div class="col-md-offset-3 col-md-6">

                 <?php if($this->session->error): ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->error; ?>
                    </div>
                 <?php endif; ?>

              
             </div>
        </div>
    </form>
	

</div>
<a href="<?php echo site_url("Home"); ?>" class="btn btn-danger">Back</a>