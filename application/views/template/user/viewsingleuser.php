<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>View User</h3>
    </div>

    
    <div class="well spacing-top col-md-6">
        <img src="<?php echo base_url();?>/uploads/userphoto/<?php echo $userdata[0]['image']; ?>" class="img-thumbnail" alt="" width="150px" height="150px">
        <h4><strong>ID :</strong> <?php echo $userdata[0]['id']; ?></h4>
        <h4><strong>Name :</strong> <?php echo $userdata[0]['name']; ?></h4>
        <h4><strong>Sex :</strong> <?php echo $userdata[0]['sex']; ?></h4>
        <h4><strong>Mobile :</strong> <?php echo $userdata[0]['mobile']; ?></h4>
        <h4><strong>Email :</strong> <?php echo $userdata[0]['email']; ?></h4>
        <h4><strong>Username :</strong> <?php echo $userdata[0]['username']; ?></h4>
        <h4><strong>Designation :</strong> <?php echo $userdata[0]['designation']; ?></h4>
        <h4><strong>Address :</strong> <?php echo $userdata[0]['address']; ?></h4>   
    </div>
    
    <div class="well spacing-top col-md-offset-1 col-md-5">

        <a href="<?php echo site_url("user/edituser")."/"; ?><?php echo $userdata[0]['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit User</a> <a href="<?php echo site_url("user/userlist"); ?>" class="btn btn-success"><i class="fa fa-refresh"></i>&nbsp;Back</a>
          
    </div>
</div>