<!DOCTYPE html>

<?php
include 'konek.php';
?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="paper-dashboard-master/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="paper-dashboard-master/assets/img/1.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
       IBADAH MAPS
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Helevatica:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="paper-dashboard-master/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="paper-dashboard-master/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="paper-dashboard-master/assets/demo/demo.css" rel="stylesheet" />
    <!-- LeafletJS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="paper-dashboard-master/assets/img/logomaps.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="https://www.google.com/maps/place/Raha,+Raha+II,+Kec.+Katobu,+Kabupaten+Muna,+Sulawesi+Tenggara/@-4.8323538,122.7005003,14z/data=!3m1!4b1!4m6!3m5!1s0x2da3caa8f8dce8bb:0x4d05c7772a6661df!8m2!3d-4.832397!4d122.7211!16s%2Fg%2F12b02kghr?entry=ttu" class="simple-text logo-normal">
                IBADAH MAPS
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="index.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Lokasi</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="tabel.php">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Data Lokasi</p>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="nc-icon nc-circle-10"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">