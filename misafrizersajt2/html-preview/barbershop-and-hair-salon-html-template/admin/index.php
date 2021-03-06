<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="dist/img/kreativeLab/favicon.ico">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOPE | Zadavanje termina</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap-datetimepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="dist/bootstrap/fonts/glyphicons-halflings-regular.woff2">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Sweetalert style -->
  <link rel="stylesheet" href="plugins/swall/sweetalert.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- DateTimePicker style -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/main.css">
  <link rel="stylesheet" href="dist/css/loginArea.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <!-- DataTable responsive style -->
  <link rel="stylesheet" href="plugins/dataTable/css/responsive.dataTables.min.css">
  <link href="plugins/datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini sidebar-collapse user-select-none">

<div class="wrapper">

  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="index"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="article" class="nav-link">Po??etna</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a  class="nav-link paymnet_notification_object" data-toggle="dropdown" href="">
          <i class="fa fa-bell-o" style="margin-left: -25%;"></i>
          <span class="badge badge-warning navbar-badge count_notify"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><span class="count_notify"></span> Notifications</span>
          <div class="dropdown-divider"></div>
          <div class="notify_div">

          </div>

        </div>
      </li>

    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow: hidden">

    <a href="" class="brand-link">
      <img src="../images/logo.png"
           alt="Dope Barber"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dope Barber Shop</span>
    </a>


    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <img id="userSrc"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" id="userName" class="d-block"></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <span class="nav-icon set-term-picture"></span>
              <p>
                Zadavanje termina
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="scheduler.html" class="nav-link">
              <span class="nav-icon appointment-picture"></span>
              <p>
                Pregled termina
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cancelTerms.html" class="nav-link">
              <span class="nav-icon cancel-appointment-picture"></span>
              <p>
                Pregled pregled otkazanih
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="app/ajax/logout.php" id="logout" class="nav-link">
              <i class="nav-icon logout-picture"></i>
              <p>
                Odjava
              </p>
            </a>
          </li>



        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Zadavanje termina</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Zadavanje termina</h3>
            </div>

            <div class="col-lg-12 bills_buttons_div">

            </div>
            <!-- /.card-header -->
            <div class="card-body row">
              <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 row">
                  <div class="terms-by-dates col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <table id="terms_dates" class="table table_gradient_hover  table-striped responsive" width="100%" cellspacing="0">
                      <thead class="thead_background_gradient_blue">
                      <tr>
                        <th style="5%;">Datum</th>
                        <th style="width: 55%;">Po??etak</th>
                        <th>Kraj</th>
                      </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 row">
                  <form id="setTermsByDateForm">
                    <h5>Zadavanje termina </h5>
                    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 row">
                      <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                        <label for="term_date">Datum</label>
                        <div class='input-group date' id='datetimepicker1'>
                          <input type='text' readonly  onchange="$(this).valid()" class="form-control term_date" id="term_date" name="term_date" autocomplete="OFF" required  />
                          <span class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                          </span>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <label for="term_date">Po??etak</label>
                        <div class='input-group date' id='datetimepicker2'>
                          <input type='text' readonly  onchange="$(this).valid()" class="form-control start_time" id="start_time" name="term_date" autocomplete="OFF" required  />
                          <span class="input-group-addon">
                              <span class="fa fa-clock-o"></span>
                          </span>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <label for="term_date">Kraj </label>
                        <div class='input-group date' id='datetimepicker3'>
                          <input type='text' readonly  onchange="$(this).valid()" class="form-control end_time" id="end_time" name="term_date" autocomplete="OFF" required />
                          <span class="input-group-addon">
                              <span class="fa fa-clock-o"></span>
                          </span>
                        </div>
                      </div>

                      <div class="terms-by-date-button">
                        <button type="submit" id="confirm_term_by_date" name="confirm_term_by_date" class="btn btn-primary blue_gradient_button">Sa??uvaj</button>
                      </div>
                    </div>
                  </form>

                </div>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="footer-div">
      <strong>Copyright &copy;2021 <a href="http://dopebarber.rs">Dope barber shop</a>.</strong> Sva prava su zadr??ana.
    </div>



    <div class="float-right d-none d-sm-inline-block">
      Developed by <a href="https://resivoje.com/">Re??ivoje</a>
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- ./loading area -->
<div class="loading-area">
  <div class="loading-box"></div>
  <div class="loading-pic">
    <div class="cssload-container">
      <ul class="cssload-flex-container">
        <li>
          <img src="dist/img/kreativeLab/loader.gif" class="cssload-loading" />
        </li>
      </ul>
    </div>
  </div>
</div>


<script src="plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="../vendor/form-validation/jquery.form.js"></script>
<script src="../vendor/form-validation/jquery.validate.min.js"></script>
<script src="app/main.js"></script>
<script src="app/global.js"></script>
<script src="plugins/datatables/jquery.dataTables.js"></script>

<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="plugins/datepicker/locales/bootstrap-datepicker.rs-latin.js" charset="UTF-8"></script>
<!-- page script -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Sweetalert js -->
<script src="plugins/swall/sweetalert.js"></script>
<!-- DataTable responsive js -->

<script src="plugins/dataTable/js/dataTables.responsive.min.js"></script>



<script type="text/javascript">

    $(function () {
        $("#datetimepicker1").datepicker({
            language: 'rs-latin',
            format: 'dd-mm-yyyy',
            autoclose: true,
            pickTime: false,
            startDate: new Date()
        });

        $('#datetimepicker2').datetimepicker({
            language: 'rs-latin',
            format: 'hh',
            setDate: new Date(),
            autoclose: true,
            minView: 1,
            maxView: 0,
            startView: 1,
            startDate: "08",
            endDate: "17"
        });
        $('#datetimepicker2').data('datetimepicker').picker.addClass('timepicker');
        $('#datetimepicker3').datetimepicker({
            language: 'rs-latin',
            format: 'hh',
            autoclose: true,
            minView: 1,
            maxView: 0,
            startView: 1,
            startDate: "08",
            endDate: "17"
        });
        $('#datetimepicker3').data('datetimepicker').picker.addClass('timepicker');
    })
</script>

</body>
</html>