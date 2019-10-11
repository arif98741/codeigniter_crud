

<?php echo form_open_multipart('user/saveuser');?>


<div class="container-fluid">

    <div class="row" style="margin-top: 80px !important;">
        <?php if($this->session->success): ?>
            <div class="col-md-12">
                <p class="alert alert-success ">
                    <?php echo $this->session->success; ?>
                </p>
            </div>
        <?php endif; ?>

        <div class="offset-md-1 col-md-10 mt-1" >
            <div class="card" >
                <div class="card-header">
                    <h3><i class="fa fa-user-plus"></i>&nbsp;Add User</h3>
                </div>

                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                                <small>Error in insrting</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control">
                                <small>Error in insrting</small>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                                <small>Error in insrting</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control">
                                <small>Error in insrting</small>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                                <small>Error in insrting</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control">
                                <small>Error in insrting</small>
                            </div>
                        </div>
                    </div>

                    

              </div>
          </div>
      </div>

</div>
</div>

