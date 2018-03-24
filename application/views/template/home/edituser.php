<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>Edit User</h3>
    </div>


    <form action="<?php echo site_url('user/updateuser'); ?>" method="post" style=" margin:  0 auto;">

        <div class="col-md-6">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="hidden" name="id" value="<?php echo $userdata['0']['id'];?>">
                <input type="text" name="name" class="form-control" value="<?php echo $userdata[0]['name']; ?>">
            </div>


            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email"  class="form-control" value="<?php echo $userdata[0]['email']; ?>">
            </div>

            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="address"  class="form-control" value="<?php echo $userdata[0]['address']; ?>">
            </div>





            <div class="form-group">
                <label for="name">Mobile</label>
                <input type="text" name="mobile"  class="form-control"  value="<?php echo $userdata[0]['mobile']; ?>">
            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label for="name">Sex</label>
                <select  name="sex"  class="form-control">

                    <?php if ($userdata[0]['sex'] == "male"): ?>
                        <option value="<?php echo $userdata[0]['sex']; ?>" selected="">Male</option>
                    <?php else: ?>
                        <option value="<?php echo $userdata[0]['sex']; ?>" selected="">Female</option>
                    <?php endif; ?>



                </select>


            </div>



            <div class="form-group">

                <input type="checkbox" value="yes">&nbsp;I have read terms and conditions properly
            </div>




            <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" value="Update">
            </div>
            
        </div>


    </form>


</div>
<a href="<?php echo site_url("Home"); ?>" class="btn btn-primary">Back</a>