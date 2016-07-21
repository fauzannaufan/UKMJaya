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
                <a class="navbar-brand" href="<?php echo base_url(); ?>">UKMJaya</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="width: 1250px;">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a>Tentang Kami</a>
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
                        <a><?php echo $user; ?></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="profile-header dropdown-toggle clear"><img src="<?php echo base_url('/resources/img/settings.png');?>"></a>
                        <ul class="dropdown-menu animated fadeIn" style="top: 63px;">
                            <li>
                                <a style="color:#18BC9C;">Pengaturan</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url('keluar');?>" style="color:#18BC9C;">Keluar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>