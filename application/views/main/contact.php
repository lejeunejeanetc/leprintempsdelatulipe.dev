<?php
        $nom = isset($input_nom)?$input_nom:"";
        $prenom = isset($input_prenom)?$input_prenom:"";
        $email = isset($input_email)?$input_email:"";
        $message = isset($input_message)?$input_message:"";
        ?>
    <h1 class="text-center titre-contact">Contact</h1>
    <div class="row">
        <div class="col-md-12 center-map" id="map"></div>
        <div class="col-md-6 form-contact contenu">
            <h4 class="titre-contact text-center">Questions ou suggestions? Contactez-nous!</h4>
            <?php echo validation_errors("<p class='alert alert-dissmissable alert-danger'>"); ?>
            <form action="<?php echo base_url('MainTulipe/contact_form'); ?>" method="POST" class="form-horizontal contenu-contact" role="form">
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="text" name="nom" value="<?php echo $nom ?>" id="contact-nom" placeholder="Votre nom" class="form-control input-contact"
                            style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" value="<?php echo $email ?>" id="contact-email" placeholder="Votre email" class="form-control input-contact"
                            style="width: 100%;">
                    </div>
                    <div class="col-md-12 contenu-contact">
                        <textarea name="message" value="<?php echo $message ?>" rows="10" type="text" class="form-control" placeholder="Votre message"></textarea>
                    </div>
                    <div class="col-md-6">
                        <div class="g-recaptcha Captcha" data-sitekey="6Lc-ciIUAAAAABvG3Am8WEGWiB6RtcadyBXiYOPv"></div>
                    </div>
                    <div class="col-md-5 col-ms-offset-1 pull-right envoyer">
                        <div class="Sub-Btn">
                            <input type="submit" class="btn btn-large btn-block btn-danger btnContact" value="Envoyer">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    
        <div class="row ContactRef">
            <div class="col-md-5 col-md-offset-1 pull-right contenu">
                <div>
                    <div class="footertext">
                        <h4>Informations</h4>
                        <div class="phonenumber hoverinfo contenu-contact">
                            <i class="col-md-1 fa fa-phone-square" aria-hidden="true"></i>
                            <p class="col-md-11">0484/02.22.17</p>
                        </div>
                        <div class="adressmail hoverinfo infoborder">
                            <i class="col-md-1 fa fa-envelope" aria-hidden="true"></i>
                            <p class="col-md-11">adressmail@mail.com</p>
                        </div>
                        <div class="adresserue hoverinfo">
                            <i class="col-md-1 fa fa-map-marker" aria-hidden="true"></i>
                            <p class="col-md-11">Rue Jules Bouillon 25, 1050 ixelles</p>
                        </div>
                        <div class="heurescontact">
                            <br>
                            <h4 class="espace">Heures d'ouverture</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Le lundi de 13h à 17h</li>
                            <li class="list-group-item">Le mardi de 13h à 17h</li>
                            <li class="list-group-item">Le mercredi de 12h à 16h</li>
                            <li class="list-group-item">le jeudi de 09h à 17h</li>
                            <li class="list-group-item">le vendredi de 13h à 17h</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/map.js'); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8SSrauy-GNUtcYNZRKro0LsiqHKC1Bcg&callback=launchMap" async
        defer>
        </script>