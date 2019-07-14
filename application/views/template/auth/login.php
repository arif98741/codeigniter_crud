
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
          <a class="nav-link" href="https://github.com/arif98741/codeigniter_crud" target="blank"><i class="fa fa-github"></i>&nbsp;Github</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>login" target="blank"><i class="fa fa-lock"></i>&nbsp;Login</a>
        </li>
        
      </ul>
      
    </div>
  </nav>

  <div class="container">
    <div class="row" >

      <div class="offset-md-3 col-md-6 mt-1" style="margin-top: 80px !important;">
        <div class="card" >
          <div class="card-header">
            <h3><i class="fa fa-lock"></i>&nbsp;Login</h3>
          </div>

          <div class="card-body">

            <?php echo form_open_multipart('login/login'); ?>

            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">

              <input type="submit"  name="submit" class="btn  btn-primary">
            </div>

          </form>

          <?php if($this->session->error): ?>
          <div class="alert alert-danger">
            <?php echo $this->session->error; ?>
          </div>
          <?php endif; ?>

           <?php if($this->session->error): ?>
          <div class="alert alert-success">
            <?php echo $this->session->error; ?>
          </div>
          <?php endif; ?>

          

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
