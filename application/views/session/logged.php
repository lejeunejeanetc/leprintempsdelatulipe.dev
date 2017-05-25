<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
 <a href="<?php echo base_url("adminlogin/logout")?>">Logout</a>
    <?php if  ($this->session->userdata['login']="Esther")
        {
            ?>
        <div class="row text-center">
            <div class="col-xs-12">
               <h2>Interface Admin , Bienvenue <?php echo  $this->session->userdata['login']; ?> ! </h2>
            </div>
        </div>

        
        <?php
    foreach($adminDashboard->result() as $row){       
    ?>
        <div class="row text-center admin-eventitems">
            <div class="col-xs-5 col-xs-push-3">  
                <p><?php echo $row->nom?></p>
                  <p><?php echo $row->description?></p>
            </div>
        <div class="col-xs-3 col-xs-push-3">  
     <a href="<?php echo base_url("Events/modify/$row->id")?>" class="btn btn-primary">Modifier</a>
     <a href="<?php echo base_url("Events/delete/$row->id")?>" class="btn btn-danger">Supprimer</a></div>
            <div class="col-xs-3">

            </div>
            </div> <?php 
} ?>
<div class="row ">
            <div class="col-xs-3 col-xs-push-9">
            <a href="<?php echo base_url("Events/create ")?>" class="btn btn-primary">Crée un Evenement</a>
            </div>
        </div>
        <?php }?>