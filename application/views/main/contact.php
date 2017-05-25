<?php
        $nom = isset($input_nom)?$input_nom:"";
        $prenom = isset($input_prenom)?$input_prenom:"";
        $email = isset($input_email)?$input_email:"";
        $message = isset($input_message)?$input_message:"";
        ?>
    <h1 class="text-center titre-contact">Contact</h1>
    <h4 class="text-center titre-contact">Si vous avez une question ou une suggestion, n'hésitez pas à nous contacter.</h4>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-contact">
            <form action="<?php echo base_url('MainTulipe/contact_form'); ?>" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="text" name="nom" value="<?php echo $nom ?>" id="contact-nom" placeholder="Votre nom" class="form-control input-contact"
                            style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" value="<?php echo $email ?>" id="contact-email" placeholder="Votre email" class="form-control input-contact"
                            style="width: 100%;">
                    </div>
                    <div class="col-md-12 InputMessage">
                        <textarea name="message" value="<?php echo $message ?>" rows="5" type="text" class="form-control" placeholder="Votre message"></textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="g-recaptcha Captcha center-it" data-sitekey="6Lc-ciIUAAAAABvG3Am8WEGWiB6RtcadyBXiYOPv"></div>
                    </div>
                    <div class="col-md-12 Sub-Btn">
                        <input type="submit" class="btn btn-large btn-block btn-danger btnContact" value="Envoyer">
                    </div>
                </div>
            </form>
            <?php echo validation_errors("<p class='alert alert-dissmissable alert-danger'>"); ?>
        </div>
    </div>
    <div class="row ContactRef">
        <div class="col-md-5">
            <div>
                <div class="footertext">
                    <div class="phonenumber hoverinfo">
                        <i class="pull-left fa fa-phone-square" aria-hidden="true"></i>
                        <p>0484/02.22.17</p>
                    </div>
                    <div class="adressmail hoverinfo infoborder">
                        <i class="pull-left fa fa-envelope" aria-hidden="true"></i>
                        <p>info@printempsdelatulipe.be</p>
                    </div>
                    <div class="adresserue hoverinfo">
                        <i class="pull-left fa fa-map-marker" aria-hidden="true"></i>
                        <p>Rue Jules Bouillon 25, 1050 ixelles</p>
                    </div>
                    <div class="heurescontact">
                        <br>
                        <h4>Heures d'ouverture</h4>
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
        <div class="col-md-7">
            <div class="center-map" id="map">
               
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/map.js'); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8SSrauy-GNUtcYNZRKro0LsiqHKC1Bcg&callback=launchMap" async
        defer>

        </script>