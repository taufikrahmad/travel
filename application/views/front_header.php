<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>img/favicon-16x16.png">
    <link media="all" rel="stylesheet" href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/fonts/icomoon/icomoon.css">
    <link media="all" rel="stylesheet" href="<?php echo base_url()?>assets/vendors/animate/animate.css">
    <link media="all" rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link media="all" rel="stylesheet" href="<?php echo base_url()?>assets/vendors/owl-carousel/owl.carousel.css">
    <link media="all" rel="stylesheet" href="<?php echo base_url()?>assets/vendors/owl-carousel/owl.theme.css">
    <link media="all" rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
</head>
<body>
<?php
    $this->load->model('md_paket', 'paket');
?>
	<div id="wrapper">
		<header id="header" class="default-white-header header-v2">
			<div class="container-fluid">
				<div class="logo">
					<a href="index.html">
						<img class="normal" src="" alt="">
						<img class="gray-logo" src="" alt="">
					</a>
				</div>
				<nav class="navbar navbar-default">
		            <div class="navbar-header">
                        <button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="nav">
                        <ul class="nav navbar-nav nav-center">
                            <li>
                                <a href="<?=base_url()?>">Home</a>
                            </li>
                            <li class="dropdown has-mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Indonesia <b class="icon-angle-down"></b></a>
                                <div class="dropdown-menu">
                                    <div class="drop-wrap">
                                        <div class="five-col">
                                        <?php 
                                            $provinsi = $this->paket->get_provinsi(TRUE);
                                            foreach ($provinsi as $i => $prov) {
                                            
                                        ?>
                                            <div class="column">
                                                <strong class="title sub-link-opener"><?=$prov->nama?></strong>
                                                <ul class="header-link">
                                                    <?php
                                                        $kota = $this->paket->get_kota($prov->id, TRUE);
                                                        foreach ($kota as $j => $kot) {
                                                    ?>
                                                    <li><a href="<?=base_url()?>front_catalog/index/IDN/<?=$kot->id?>"><?=$kot->nama?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">International<b class="icon-angle-down"></b></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <?php
                                            $international = $this->paket->get_international(TRUE);
                                            foreach ($international as $k => $itr) {
                                        ?>
                                        <li><a href="<?=base_url()?>front_catalog/index/INT/<?=$itr->id?>"><?=$itr->nama?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Umroh & Haji<b class="icon-angle-down"></b></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <?php
                                            $umrohaji = $this->paket->get_umroh_haji();
                                            foreach ($umrohaji as $l => $umh) {
                                        ?>
                                        <li><a href="<?=base_url()?>front_catalog/index/UMH/<?=$umh->id?>"><?=$umh->nama?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Special Trip<b class="icon-angle-down"></b></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <?php
                                            $special_trip = $this->paket->get_special_trip();
                                            foreach ($special_trip as $m => $spt) {
                                        ?>
                                        <li><a href="<?=base_url()?>front_catalog/index/SPT/<?=$spt->id?>"><?=$spt->nama?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="visible-xs visible-sm">
                                <a href="login.html">
                                <span class="icon icon-user"></span>
                                <span class="text">Login</span>
                                </a>
                            </li>
                            <li class="hidden-xs hidden-sm">
                                <a href="login.html">
                                <span class="icon icon-user"></span>
                                </a>
                            </li>
                            <li class="visible-xs visible-sm nav-visible dropdown last-dropdown">
                                <a href="my-cart.html" data-toggle="dropdown">
                                    <span class="icon icon-cart"></span>
                                    <span class="text hidden-md hidden-lg">Cart</span>
                                    <span class="text hidden-xs hidden-sm">0</span>
                                </a>
                                <div class="dropdown-menu dropdown-md">
                                    <div class="drop-wrap cart-wrap">
                                        <strong class="title">Shopping Cart</strong>
                                        <ul class="cart-list">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>			
				</nav>
			</div>
		</header>