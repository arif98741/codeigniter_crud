
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
					<h3><i class="fa fa-users"></i>&nbsp;User List</h3>
				</div>

				<div class="card-body">
					<table class="table table-striped table-bordered" id="dataTable">
						<thead>
							<tr>
								<th>Serial</th>
								<th>Name</th>
								<th>Username</th>
								<th>Email</th>
								<th>Sex</th>
								<th>Designation</th>
								<th>-</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0;
							foreach ($users as $user): ?>
								<tr>
									<td><?php echo ++$i; ?></td>
									<td><?php echo $user['name']; ?></td>
									<td><?php echo $user['username']; ?></td>
									<td><?php echo $user['email']; ?></td>
									<td><?php echo $user['sex']; ?></td>
									<td><?php echo $user['designation']; ?></td>
									<td>
										<a href="<?php echo site_url('user/viewuser') . '/'; ?><?php echo $user['id']; ?>"><i
											class="fa fa-eye btn btn-primary"></i></a>&nbsp;&nbsp;

											<?php if ($this->session->has_userdata('login') && $this->session->designation == 'admin'): ?>

												<a href="<?php echo site_url("user/edituser") . "/"; ?><?php echo $user['id']; ?>"><i
													class="fa fa-pencil btn btn-success"></i></a>&nbsp;&nbsp;


													<a href="<?php echo site_url('user/deleteuser') . '/'; ?><?php echo $user['id']; ?>"><i
														class="fa fa-trash-o btn btn-danger"
														onclick="return confirm('are you sure to delete?')"></i></a>

													<?php endif; ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>

								</table>

							</div>
						</div>
					</div>
					<div class="col-md-2 mt-1" >
						<div class="card mt-1" >
							<div class="card-header">
								<h3><i class="fa fa-user-secret"></i>&nbsp;Admin</h3>
							</div>

							<div class="card-body">

								<h2 class="text-center"><?php echo $totaladmin; ?></h2>
							</div>
						</div>

						
						<div class="card mt-2" >
							<div class="card-header">
								<h3><i class="fa fa-users"></i>&nbsp;User</h3>
							</div>

							<div class="card-body">

								<h2 class="text-center"><?php echo $totaluser; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>

