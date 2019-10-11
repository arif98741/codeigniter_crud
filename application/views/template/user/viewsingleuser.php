
<div class="container-fluid">

    <div class="row" style="margin-top: 80px !important;">
        <?php if($this->session->success): ?>
            <div class="col-md-12">
                <p class="alert alert-success ">
                    <?php echo $this->session->success; ?>
                </p>
            </div>
        <?php endif; ?>

        <div class="col-md-10 mt-1" >
            <div class="card" >
                <div class="card-header">
                    <h3><i class="fa fa-user"></i>&nbsp;User Profile</h3>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item active">User details</li>
                      <li class="list-group-item">Username: <?php  echo $userdata->username?></li>
                      <li class="list-group-item">Gender: <?php  echo $userdata->sex?></li>
                      <li class="list-group-item">Email: <?php  echo $userdata->email?></li>
                      <li class="list-group-item">Address: <?php  echo $userdata->address?></li>
                      <li class="list-group-item">Designation: <?php  echo $userdata->designation?></li>
                  </ul>

              </div>
          </div>
      </div>
      <div class="col-md-2 mt-1" >
        <div class="card mt-1" >
            <div class="card-header">
                <h3><?php  echo $userdata->name?></h3>
            </div>

            <div class="card-body">

                <h2 class="text-center"><img src="<?php echo base_url(); ?>uploads/userphoto/<?php echo $userdata->image;?>" class="img-fluid" alt=""></h2>
            </div>
        </div>

    </div>
</div>
</div>

