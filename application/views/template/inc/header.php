<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CI CRUD by - Ariful Islam</title>

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
        <?php if($this->session->has_userdata('login')): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>user"><i class="fa fa-users"></i>&nbsp;User List</a>
          </li>

        <?php endif; ?>


        <?php if(!$this->session->has_userdata('login')): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>login" target="blank"><i class="fa fa-lock"></i>&nbsp;Login</a>
          </li>
        <?php endif; ?>



        <li class="nav-item">
          <a class="nav-link" href="https://github.com/arif98741/codeigniter_crud" target="blank"><i class="fa fa-github"></i>&nbsp;Github</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">ABCD</a>
        </li>

        <?php if($this->session->has_userdata('login')): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>login/logout" target="blank"><i class="fa fa-arrow-right"></i>&nbsp;Logout</a>
          </li>
        <?php endif; ?>

      </ul>
      
    </div>
  </nav>
