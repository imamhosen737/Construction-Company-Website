<?php
// $page = "Dashboard";
// require_once("header.php");
// require_once("sidebar.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if (isset($page)) {
            echo $page . " | agency ";
          } else {
            echo "agency";
          } ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css2/adminlte.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css2/style.css">

</head>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="assets/images/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a href="./logout.php " class="btn btn-sm text-white btn-warning">Logout</a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->




    <!-- Main Sidebar Container -->
    <aside class="main-sidebar bg-success  elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?php echo base_url() ?>assets/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Agency</span>
      </a>

      <div class="bb-2"></div>
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

          <div class="info text-white">
            ADMIN
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="<?php echo base_url('Dashboard/admin_panel') ?>" class="nav-link text-white">
                <i class="fas fa-tachometer-alt"> </i>
                <p> Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('Dashboard/general') ?>" class="nav-link text-white">
                <i class="fas fa-tachometer-alt"> </i>
                <p> General Info
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('Dashboard/clients') ?>" class="nav-link text-white">
                <i class="fad fa-users"></i>
                <p>Clients
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('Dashboard/get_contact_msg') ?>" class="nav-link text-white">
                <i class="fas fa-envelope"></i>
                <p>Contact Message
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('Dashboard/slider') ?>" class="nav-link text-white">
                <i class="fal fa-sliders-h"></i>
                <p>Slider
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('Dashboard/team') ?>" class="nav-link text-white">
                <i class="fal fa-users"></i>
                <p>Team
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('Dashboard/about') ?>" class="nav-link text-white">
              <i class="fas fa-info-circle"></i>
                <p>About
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- End sidebar code here -->





    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Website's General Informations</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <!-- <h1>Welcome to dashboard</h1> -->
                  <!-- <h2 class="card-title text-center">code goes here</h2> -->
                  <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                      <tr>
                        <th>Sl</th>
                        <th>Logo</th>
                        <th>Opening Hour</th>
                        <th>Call us</th>
                        <th>Email us</th>
                        <th>Description One</th>
                        <th>Description Two</th>
                        <th>Description Three</th>
                        <th>Office Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Designed by</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $sl = 0;
                      foreach ($general_info as $g) { ?>
                        <tr>
                          <td><?php echo ++$sl; ?></td>
                          <td><?php echo $g->logo ?></td>
                          <td><?php echo $g->opening_hour ?></td>
                          <td><?php echo $g->call_us ?></td>
                          <td><?php echo $g->email_us ?></td>
                          <td><?php echo $g->top_description_one ?></td>
                          <td><?php echo $g->top_description_tow ?></td>
                          <td><?php echo $g->top_description_three ?></td>
                          <td><?php echo $g->office_address ?></td>
                          <td><?php echo $g->phone ?></td>
                          <td><?php echo $g->email ?></td>
                          <td><?php echo $g->designed_by ?></td>
                          <td>
                            <a href="<?php echo base_url('Dashboard/edit_general_info/' . $g->id) ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-header -->
                <div class="card-body">



                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- <?php //require("footer.php"); 
            ?> -->



      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="#">IDB-BISEW, BITL WDPF ROUND-46</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script> -->

    <script>
      $(document).ready(function() {
        $("#bankinf").hide();
        $("#pMethod").click(function() {

          var pm = $("#pMethod").val();
          if (pm == 'bank') {
            $("#bankinf").show();
          } else {
            $("#bankinf").hide();
          }
        })
      });
      $(document).ready(function() {
        $("#bank_name").hide();
        $("#method").click(function() {
          var m = $("#method").val();
          if (m == 'bank') {
            $("#bank_name").show();
          } else {
            $("#bank_name").hide();
          }
        })
      })
    </script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="assets/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="assets/js/dashboard.js"></script> -->
</body>

</html>