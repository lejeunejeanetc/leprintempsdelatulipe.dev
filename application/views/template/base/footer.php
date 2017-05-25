<footer>
    <div class="newsletter">
        <div class="container">
            <h3 class="text-center">Inscrivez-vous à notre newsletter</h3>
                <form action="<?php echo base_url('maintulipe/newsletter'); ?>" method="POST" class="form-horizontal text-center">
                        <input type="text" name="newsletter_prenom" class="form-control newsletter_input" placeholder="Prénom">
                        <input type="email" name="newsletter_email" class="form-control newsletter_input" required="required" placeholder="Adresse mail">
                        <input type="submit" id="btn-newsletter" class="btn btn-danger newsletter_btn" value="S'inscrire">
                </form>
        </div>
    </div>
    <div class="sub_footer">
        <div class="container">
            <div class="col-md-6">
                <span>Le Printemps de la Tulipe ASBL © 2017 - Tous droits réservés</span>
            </div>
            <div class="col-md-6 text-right">
                <span><a href="https://www.facebook.com/Le-Printemps-de-la-Tulipe-ASBL-186610658504457/?fref=ts" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></span>
                <span><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span>
            </div>
        </div>
    </div>
</footer>