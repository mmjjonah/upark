<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="fr"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Upark - acceuil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/icon" href="icon.ico">
      
    <link rel="stylesheet" href="<?=$res ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=$res ?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$res?>css/main.css">
    <link rel="stylesheet" href="<?=$res ?>css/fontAwesome.css">
    <link rel="stylesheet" href="<?=$res ?>css/templatemo-style.css">  
  </head>
    <body class="bd">
      <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="<?= $res ?>videos/video.mp4" type="video/mp4">
            <source src="<?= $res ?>videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        </section>
        
        <section class="cd-hero">
          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="<?= site_url() ?>"><div class="image-icon"><img src="<?=$res ?>img/home-icon.png"></div><h6>Acceuil</h6></a></li>
                <li><div class="image-icon" id="ico_entree"><img src="<?=$res ?>img/in.png"></div><h6>Entrée</h6></li>
                <li><a href="<?= site_url('sorti') ?>"><div class="image-icon"><img src="<?=$res ?>img/out.png"></div><h6>Sortie</h6></a></li>
                <li><a href="<?= site_url('client') ?>"><div class="image-icon"><img src="<?=$res ?>img/client.png"></div><h6>Clients</h6></a></li>
                <li><a href="<?= site_url('ticket') ?>"><div class="image-icon"><img src="<?=$res ?>img/ticket.png"></div><h6>Tickets</h6></a></li>
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->
          <ul class="cd-hero-slider">
            <li class="selected">
              <div class="heading">
                <h1><?= $title ?></h1>
                <span><?= $coms ?></span>
              </div>
              <div class="cd-half-width <?= $num ?>-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content <?= $num ?>-content">