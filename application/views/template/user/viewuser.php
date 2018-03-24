<div class="row" style="margin-top: 40px;">

    <div class="card">
        <h3>Users List</h3>
    </div>

    <table class="table table-bordered text-center">

        <thead>
        <tr class="bg-primary">
            <th>Serial</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Address</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            <?php foreach ($userdata as $value): ?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['sex']; ?></td>
					<td><?php echo $value['address']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['mobile']; ?></td>
					<td><a href="<?php echo site_url("user/edituser")."/"; ?><?php echo $value['id']; ?>"><i class="fa fa-pencil btn btn-success"></i></a>&nbsp;<a href="<?php echo site_url('user/deleteuser').'/'; ?><?php echo $value['id']; ?>" ><i class="fa fa-trash-o btn btn-danger" onclick="return confirm('are you sure to delete?')" ></i></a>&nbsp;<a href="<?php echo site_url('user/viewuser').'/'; ?><?php echo $value['id']; ?>" ><i class="fa fa-eye btn btn-primary" ></i></a></td>
				</tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</div>