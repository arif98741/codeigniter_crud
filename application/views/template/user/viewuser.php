<?php echo validation_errors(); ?>
<?php if ($this->session->userdata('error')) { ?>
    <br>

    <p id="error" class="message alert alert-warning"><?php echo $this->session->flashdata('error'); ?></p>

<?php } ?>


<?php if (isset($_SESSION['success'])): ?>
    <p id="success" class="message alert alert-success">
        <?php echo $_SESSION['success']; ?>
    </p>
<?php endif; ?>

<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>Users List</h3>
    </div>

    <table class="table table-bordered text-center" id="datatable">

        <thead>
        <tr class="bg-primary">
            <th>Serial</th>
            <th>UserID</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Email</th>
            <th>Username</th>
            <th>Mobile</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php $i = 0;
        foreach ($userdata as $value): ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['sex']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['username']; ?></td>
                <td><?php echo $value['mobile']; ?></td>
                <td><?php echo $value['designation']; ?></td>
                <td>
                    <a href="<?php echo site_url('user/viewuser') . '/'; ?><?php echo $value['id']; ?>"><i
                                class="fa fa-eye btn btn-primary"></i></a>&nbsp;&nbsp;

                    <?php if ($this->session->has_userdata('login') && $this->session->designation == 'admin'): ?>

                        <a href="<?php echo site_url("user/edituser") . "/"; ?><?php echo $value['id']; ?>"><i
                                    class="fa fa-pencil btn btn-success"></i></a>&nbsp;&nbsp;


                        <a href="<?php echo site_url('user/deleteuser') . '/'; ?><?php echo $value['id']; ?>"><i
                                    class="fa fa-trash-o btn btn-danger"
                                    onclick="return confirm('are you sure to delete?')"></i></a>

                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>


</div>