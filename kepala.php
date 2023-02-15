<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>" >
    <meta name="keyword" content="<?=$keyword?>">

    <title><?=$title?></title>

    <!-- Icon -->
    <link rel="icon" href="<?=$icon?>">
    <link rel="shortcut icon" href="<?=$icon?>" type="image/x-icon">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">



    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />



   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body style="background-color: silver;" >
    
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <strong><h4><?=$organisasi?></h4></strong>
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <?php if ($Level=='admin') { ?>
                            <li class="has-sub">
                                <a href="?page=dashboard">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=user">
                                    <i class="fas fa-users"></i>User
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-hospital"></i>Toko
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="?page=datatoko">Data Toko</a>
                                    </li>
                                    <li>
                                        <a href="?page=databarang"> Data Produk</a>
                                    </li>
                                    <li>
                                        <a href="?page=pesanan">Pesanan</a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>EComers
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="?page=pasar">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="?page=pasar&aksi=keranjang">Keranjang</a>
                                    </li>
                                    <li>
                                        <a href="?page=pasar&aksi=transaksi">Transaksi</a>
                                    </li>
                                    <li>
                                        <a href="?page=pasar&aksi=pesanan">Pesanan</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="gambar/user/<?=$Fhoto?>" alt="<?=$UserName?>" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="gambar/user/<?=$Fhoto?>" alt="<?=$UserName?>" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Level:</a>
                                            </h5>
                                            <span class="email"><?=$Level?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <strong><?=$organisasi?></strong>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <?php if ($Level=='admin') { ?>
                        <li>
                            <a href="?page=dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=user">
                                <i class="fas fa-users"></i>User
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-hospital"></i>Toko
                                <span class="bot-line"></span>
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="?page=datatoko">Data Toko</a>
                                </li>
                                <li>
                                    <a href="?page=databarang"> Data Produk</a>
                                </li>
                                <li>
                                    <a href="?page=pesanan">Pesanan</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-shopping-basket"></i>
                                <span class="bot-line"></span>EComers
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="?page=pasar">Dashboard</a>
                                </li>
                                <li>
                                    <a href="?page=pasar&aksi=keranjang">Keranjang</a>
                                </li>
                                <li>
                                    <a href="?page=pasar&aksi=transaksi">Transaksi</a>
                                </li>
                                <li>
                                    <a href="?page=pasar&aksi=pesanan">Pesanan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="gambar/user/<?=$Fhoto?>" alt="<?=$UserName?>" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="gambar/user/<?=$Fhoto?>" alt="<?=$UserName?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">Level :</a>
                                    </h5>
                                    <span class="email"><?=$Level?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="logout.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->
