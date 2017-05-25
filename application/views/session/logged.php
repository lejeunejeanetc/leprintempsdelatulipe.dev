<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

    <?php if  ($this->session->userdata['login']="Esther")
        {
            ?>
                <div class="row">
                    <div class="col-xs-12">
                    <h1>Interface Admin</h1>
                    <h5 class="text-center">Bienvenue <?php echo  $this->session->userdata['login']; ?> !</h5>
                    <p class="text-center"><a href="<?php echo base_url("adminlogin/logout")?>">Se déconnecter</a></p>
                    </div>
                </div>

        <div class="col-md-6">
                <div class="row">
                    <h4>Gérer les événements</h4>
                    <div class="col-xs-3"><a href="<?php echo base_url("Events/create ")?>" class="btn btn-primary">Cree un Evenement</a></div>


                
                </div>
                <?php
            foreach($adminDashboard->result() as $row){       
            ?>
                <div class="row">
                    
                <div class="col-xs-3">   <a href="<?php echo base_url("Events/more/$row->id")?>" class="btn btn-primary">En savoir plus</a>
            <a href="<?php echo base_url("Events/modify/$row->id")?>" class="btn btn-primary">Modifier</a>
            <a href="<?php echo base_url("Events/delete/$row->id")?>" class="btn btn-danger">Supprimer</a></div>
                    <div class="col-xs-3"></div>
                    </div> <?php 
        } ?>
                <?php }?>
        </div>

        <div class="col-md-6">

                <div class="row">
                    <h4>Gestion newsletter</h4>

                    <a href="<?php echo base_url('maintulipe/create_csv'); ?>">Télécharger les emails au format CSV</a>
                </div>
        
        </div>