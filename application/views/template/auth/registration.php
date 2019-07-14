
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>HomePage</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/">

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Codeigniter CRUD</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-users"></i>&nbsp;User List</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://github.com/arif98741/codeigniter_crud" target="blank"><i class="fa fa-github"></i>&nbsp;Github</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>login" target="blank"><i class="fa fa-lock"></i>&nbsp;Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">ABCD</a>
        </li>
      </ul>
      
    </div>
  </nav>

  <div class="container">
    <div class="row" >

      <div class="col-md-12 bg-primary"  style="margin-top: 80px !important;">
        <h3>Login</h3>
      </div>
      <div class="col-md-6 mt-1">
        <div class="card" style="">
          <div class="card-body">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Gender</label>
              <select name="sex" id="" class="form-control">
                <option value="" disabled="" selected="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

              </select>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-6 mt-1">
        <div class="card" >

          <div class="card-body">
            <div class="form-group">
              <label for="">Mobile</label>
              <input type="text" name="mobile" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Address</label>
              <input type="text" name="address" class="form-control">
            </div>

            <div class="form-group">

              <label for="">Designation</label>
              <select name="designation" id="" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Project Manager">Project Manager</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function() {
          $('#dataTable').DataTable();
        } );
      </script>
    </body>
    </html>
