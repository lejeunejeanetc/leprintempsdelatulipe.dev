<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LePrintempsDeLaTulipe</title>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('node_modules/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_nav.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <script src='https://www.google.com/recaptcha/api.js'></script>
   
</head>
<body>
    
<div id="home">
    <div id="welcome">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item">
                    <img alt="First slide" src="<?php echo base_url('assets/img/home/slider1.jpg'); ?>">
                    <div class="carousel-caption">
                        <img src="<?php echo base_url('assets/img/logo_blanc_ailes.png'); ?>" alt="">
                    </div>
                </div>
                <div class="item">
                    <img alt="Second slide" src="<?php echo base_url('assets/img/home/slider2.jpg'); ?>">
                    <div class="carousel-caption">
                        <img src="<?php echo base_url('assets/img/logo_blanc_ailes.png'); ?>" alt="">
                    </div>
                </div>
                <div class="item active">
                    <img alt="Third slide" src="<?php echo base_url('assets/img/home/slider3.jpg'); ?>">
                    <div class="carousel-caption">
                        <img src="<?php echo base_url('assets/img/logo_blanc_ailes.png'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <nav id="navbar">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>"><div id= "logoNav" class="logo_nav_couleurs"></div></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url("MainTulipe");?>">Accueil</a></li>
                        <li><a href="<?php echo base_url("AboutUs");?>">Qui sommes-nous ?</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="link-activites">Nos activités <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="divider"></li>
                                <li class="dropdown-header">Activités pour jeunes</li>
                                <li class="divider"></li>
                                <li><a class="dropdown-link" href="<?php echo base_url("Jeunes/SoutienScolaire");?>">Soutien scolaire</a></li>
                                <li><a class="dropdown-link" href="<?php echo base_url("Jeunes/AteliersCEB");?>">Ateliers CEB (prochainement)</a></li>
                                <li><a class="dropdown-link" href="<?php echo base_url("Jeunes/SummerClasses");?>">Summer classes (prochainement)</a></li>
                                <li><a class="dropdown-link" href="<?php echo base_url("Jeunes/ActivitesEte");?>">Activités été (prochainement)</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Activités pour adultes</li>
                                <li class="divider"></li>
                                <li><a class="dropdown-link" href="<?php echo base_url("Adultes/AteliersSante");?>">Ateliers santé</a></li>
                                <li><a class="dropdown-link" href="<?php echo base_url("Adultes/SoutienParents");?>">Soutien à la parentalité</a></li>
                                <li><a class="dropdown-link" href="<?php echo base_url("Adultes/Alphabetisation");?>">Alphabétisation / FLE (prochainement)</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url("Events");?>">Evénements</a></li>
                        <li><a href="<?php echo base_url("maintulipe/contact");?>">Contact</a></li>
                        <li><a href="<?php echo base_url("don");?>">Nous aider ?</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            
        </div>

    </nav>


</div>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<div class= "container ctn-color">

<?= $view_content ?>

</div>

<?php $this->load->view('template/base/footer'); ?>

<script src=" <?= base_url('node_modules/jquery/dist/jquery.js') ?>"></script>
<script src=" <?= base_url('node_modules/bootstrap/dist/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/js/home.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>