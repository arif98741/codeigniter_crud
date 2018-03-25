<div class="row " style="margin-top: 40px;">

   <div class="jumbotron top-spacing">
       <h3>Welcome to Codeigniter CRUD Homepage</h3>
   </div>

</div>

<div class="row">
        <?php

            //echo "<pre>";
           // print_r($totaluser);
            //echo "</pre>";
         ?>
        <div class="col-md-3">
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title">Total Users</h3>
                    <p class="card-text"><?php echo $totaluser; ?></p>
                    <a href="<?php echo site_url('user/userlist'); ?>" class="btn btn-primary">View All</a>
                </div>
             </div>
        </div>

         <div class="col-md-3">
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title">Total Admistrator</h3>
                    <p class="card-text"><?php echo $totaladmin; ?></p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
             </div>
        </div>

         <div class="col-md-3">
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title">Last User</h3>
                    <p class="card-text"><?php echo $singleuser[0]->name; ?></p>
                    <a href="<?php echo site_url('user/viewuser/').$singleuser[0]->id; ?>" class="btn btn-primary">Go</a>
                </div>
             </div>
        </div>

         <div class="col-md-3">
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title">Users</h3>
                    <p class="card-text">84</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
             </div>
        </div>

</div>