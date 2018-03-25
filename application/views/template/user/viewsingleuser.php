<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>View User</h3>
    </div>
    <div class="well spacing-top col-md-6">
        <h4>ID : <?php echo $userdata[0]['id']; ?></h4>
        <h4>Name : <?php echo $userdata[0]['name']; ?></h4>
        <h4>Sex : <?php echo $userdata[0]['sex']; ?></h4>
        <h4>Mobile : <?php echo $userdata[0]['mobile']; ?></h4>
        <h4>Address : <?php echo $userdata[0]['address']; ?></h4>   
    </div>
    

    
    <div class="well spacing-top col-md-offset-1 col-md-5">
        <a href="<?php echo site_url("user/edituser")."/"; ?><?php echo $userdata[0]['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit User</a> <a href="<?php echo site_url("user/userlist"); ?>" class="btn btn-success"><i class="fa fa-refresh"></i>&nbsp;Back</a>
          
    </div>





</div>