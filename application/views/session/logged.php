<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
 <a href="<?php echo base_url("adminlogin/logout")?>">Logout</a>
    <?php if  ($this->session->userdata['login']="Esther")
        {
            ?>
        <div class="row">
            <div class="col-xs-12">
               <h1>Interface Admin , Bienvenue <?php echo  $this->session->userdata['login']; ?> ! </h1>
            </div>
        </div>

        <div class="row">
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