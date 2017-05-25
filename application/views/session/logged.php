<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

    <?php if  ($this->session->userdata['login']="Esther")
        {
            ?>
    <div class="row text-center">
        <div class="col-xs-12">
            <h2>Interface Admin , Bienvenue
                <?php echo  $this->session->userdata['login']; ?> ! </h2>
        </div>
    </div>


    <?php
    foreach($adminDashboard->result() as $row){       
    ?>
        <div class="row text-center admin-eventitems">
            <div class="col-xs-5 col-xs-push-3">
                <p>
                    <?php echo $row->nom?>
                </p>
                <p>
                    <?php echo $row->description?>
                </p>
            </div>
            <div class="col-xs-3 col-xs-push-3">
                <a href="<?php echo base_url(" Events/modify/$row->id")?>" class="btn btn-primary">Modifier</a>
                <!--<a href="<?php echo base_url(" Events/delete/$row->id")?>" class="btn btn-danger">Supprimer</a>-->


                <button data-toggle="modal" data-target="#ModalDelete" class="btn btn-danger">Supprimer</button>


                <div id="ModalDelete" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Attention </h4>
                            </div>
                            <div class="modal-body">
                                <p>Etes-vous sûr de vouloir supprimer l'évènement ? .</p>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo base_url(" Events/delete/$row->id")?>" class="btn btn-danger">Supprimer</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-3">

            </div>
        </div>
        <?php 
} ?>
        <div class="row ">
            <div class="col-xs-3 col-xs-push-9">
                <a href="<?php echo base_url(" Events/create ")?>" class="btn btn-primary">Crée un Evenement</a>
            </div>
        </div>
        <div class="row ">
            <div class="col-xs-3 col-xs-push-9">
                <a href="<?php echo base_url(" adminlogin/logout ")?>">Logout</a>
            </div>
        </div>
        <?php }?>

