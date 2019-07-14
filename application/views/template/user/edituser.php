<div class="row" >
    <p><a href="<?php echo base_url(); ?>" class="btn btn-sm btn-info"><i class="fa fa-home"></i>&nbsp;Home</a> > <a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i>&nbsp; Edit User</a> </p>

    <div class="card">
        <h3>Edit User</h3>
    </div>

    <?php echo form_open('user/updateuser'); ?>
    <div class="row">
        <div class="col-md-6">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="hidden" name="id" value="<?php echo $userdata[0]['id']; ?>">
                <input type="text" name="name" class="form-control" value="<?php echo $userdata[0]['name']; ?>">
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $userdata[0]['email']; ?>">
            </div>

            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $userdata[0]['address']; ?>">
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Mobile</label>
                <input type="text" name="mobile" class="form-control" value="<?php echo $userdata[0]['mobile']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Sex</label>
                <select name="sex" class="form-control">


                    <?php if ($userdata[0]['sex'] == "male"): ?>

                        <option value="<?php echo $userdata[0]['sex']; ?>" selected="">Male</option>
                        <?php else: ?>
                            <option value="<?php echo $userdata[0]['sex']; ?>" selected="">Female</option>
                        <?php endif; ?>
                    </select>


                </div>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="username" class="form-control" readonly
                    value="<?php echo $userdata[0]['username']; ?>">
                </div>

            </div>

            <div class="col-md-12">
                <div class="form-group">

                    <input type="checkbox" value="yes">&nbsp;I have read terms and conditions properly
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">

                    <input type="submit" class="form-control btn btn-primary" value="Update"
                    style="max-width: 400px; margin: 0 auto;">
                </div>
            </div>
            <div class="col-md-6">


                <?php if (validation_errors() != ""): ?>
                    <div class="alert alert-warning">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <?php echo form_close() ?>
</div>