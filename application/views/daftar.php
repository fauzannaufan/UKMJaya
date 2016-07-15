<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UKMJaya</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>resources/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container" style="margin-left:50px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll" style="margin-right:50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">UKMJaya</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="width: 1250px;">
                <ul class="nav navbar-nav navbar-left">
                    <li class="page-scroll">
                        <a>Tentang Kami</a>
                    </li>
                    <li class="page-scroll">
                        <a>Buat Proyek</a>
                    </li>
                </ul>
                <div class="col-sm-3 col-md-3">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Proyek" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a>Daftar</a>
                    </li>
                    <li class="page-scroll">
                        <a>Masuk</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Form Daftar -->
    <header>
        <div class="container" style="padding-top: 130px; padding-bottom: ">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="background-color:#2C3E50; padding-left: 35px; width: 430px; padding-right: 35px; padding-top: 15px; padding-bottom: 15px;">
                    <h3 style="text-align: center; margin-bottom: 30px;">Daftar Akun</h3>
                    <form>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" class="form-control" placeholder="Masukkan kembali password">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <select class="form-control">
                                    <option value="" disabled selected>Pilih Provinsi</option>
                                    <option>DKI Jakarta</option>
                                    <option>Jawa Barat</option>
                                </select>
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 10px;">
                            <div class="form-group col-xs-12">
                                <select class="form-control">
                                    <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                                    <option>Jakarta Pusat</option>
                                    <option>Kota Bandung</option>
                                </select>
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 20px;">
                            <div class="col-md-6" style="text-align:left;">
                                Saya mendaftar sebagai
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                   <input name="jenis_user" type="radio"> UKM
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input name="jenis_user" type="radio"> Funder
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="submit" class="form-control" value="Daftar" style="width:106px; margin:0px auto; display:block;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h3>Alamat</h3>
                        <p>Bandung, Indonesia</p>
                    </div>
                    <div class="footer-col col-md-6">
                        <h3>Kunjungi Kami</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; UKMJaya 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>resources/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>resources/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>resources/js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url(); ?>resources/js/freelancer.min.js"></script>

</body>

</html>
