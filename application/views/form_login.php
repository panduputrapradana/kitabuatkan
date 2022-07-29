<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url('assets/logo/logo.jpeg'); ?>" type="image/x-icon" />
	<title>Login</title>
</head>
<body class="hold-transition login-page">
	<!-- navbar -->
    <div class="data-flush" data-flash="<?= $this->session->flashdata('pesan'); ?>"></div>
    <div class="login-box">
        <div class="login-logo">
            <!-- <img style="width: 150px; height: 150px;" src="<?= base_url('assets/'); ?>logo/favicon.png"> -->
            <h3>SELAMAT DATANG</h3>
            <h5>Kita Buatkan</h5>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silakan Login terlebih Dahulu</p>

                <form action="<?= base_url(); ?>login/ceklogin" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="username" placeholder="Username" value="<?= set_value('email'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="inputEmail4" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block" style="margin-top: 0 !important ;">Login</button>
                        </div>

                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<!-- jQuery -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url(); ?>assets/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(document).ready(function() {
                var data = $('.data-flush').data('flash');
                console.log(data);
                if (data) {
                    var a = data.split(',');
                    if (a[1].replace(/\s/g, '') == 'success') {
                        swal("Information!", a[0], "success");
                    } else {
                        swal("Information!", a[0], "error");
                    }
                }
            })
        })
    </script>
</body>
</html>