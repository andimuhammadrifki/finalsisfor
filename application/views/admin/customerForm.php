<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $judul ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">FINAL SISTEM INFORMASI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url() ?>assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo site_url() ?>/admin/index">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/customer">
                            <i class="material-icons">layers</i>
                            <span>Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/company">
                            <i class="material-icons">layers</i>
                            <span>Company</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/library">
                            <i class="material-icons">layers</i>
                            <span>Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/product">
                            <i class="material-icons">layers</i>
                            <span>Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/post">
                            <i class="material-icons">layers</i>
                            <span>Post</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>FORM TAMBAH DATA</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $judul ?>
                            </h2>
                        </div>
                        <div class="col-md-12">
                        <form action="<?php echo site_url('admin/customerSimpanData') ?>" method="POST">
                            <div class="form-group">
                            <label for="text">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                            <label for="text">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                            <label for="text">Nomor Telepon</label>
                            <input type="text" name="no_telepon" class="form-control" placeholder="Masukkan Nomor Telepon">
                            </div>
                            <div class="form-group">
                            <label for="text">Akun Instagram</label>
                            <input type="text" name="instagram" class="form-control" placeholder="Masukkan Akun Instagram">
                            </div>
                            <div class="form-group">
                            <label for="text">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" >
                            </div>
                            <div class="form-group">
                            <label for="text">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan">
                            </div>
                            <div class="form-group">
                            <label for="text">Instansi</label>
                            <input type="text" name="instansi" class="form-control" placeholder="Masukkan Instansi">
                            </div>
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/assets/js/admin.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/assets/js/demo.js"></script>
    <script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>
