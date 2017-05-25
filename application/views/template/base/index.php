<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LePrintempsDeLaTulipe</title>
    <script src=" <?= base_url('node_modules/jquery/dist/jquery.js') ?>"></script>//JQUERY NE FONCTIONNE PAS POUR LA MAP SI PAS DANS LE HEAD NE SAIS PAS PQ??
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('node_modules/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_nav.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/contact.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/map.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/aboutus_style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/events.css') ?>">
     <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
     

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
    
<?php $this->load->view('template/base/nav'); ?>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<div class= "container contenu">

<?= $view_content ?>

</div>

<?php $this->load->view('template/base/footer'); ?>

<script src=" <?= base_url('node_modules/jquery/dist/jquery.js') ?>"></script>
<script src=" <?= base_url('node_modules/bootstrap/dist/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>
