<div class="row" style="margin-top: 40px;">


    <div class="card">
		<h3 >View User</h3>
	</div>
	<div class="well">
		
		<h4>Name : <?php echo $userdata[0]['name']; ?></h4>
		<h4>Sex : <?php echo $userdata[0]['sex']; ?></h4>
		<h4>Address : <?php echo $userdata[0]['address']; ?></h4>
		<h4>Email : <?php echo $userdata[0]['email']; ?></h4>
		<h4>Mobile : <?php echo $userdata[0]['mobile']; ?></h4>
					
	</div>
        
	<a href="<?php echo site_url("Home"); ?>" class="btn btn-primary">Back</a>

</div>