<h1>Envie de nous aider ?</h1>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam molestiae illo, quibusdam, porro amet eaque. Neque vel a, temporibus quae eaque. Fugit excepturi, maiores nulla incidunt temporibus explicabo cupiditate laudantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nobis est, neque quod aut repellat ad rem quisquam fugiat beatae aliquid laborum accusamus, quos praesentium corporis eaque. Illum, cupiditate, nihil.</p>
<!--formulaire de paiement paypal-->
<div class="row">
    <div class="col-md-6">
        <h4>Aide financière</h4>
        <p id='dontext'>Discours sur le don par paypal</p>
        <div class="don">
            <form id='paypal' action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="lc" value="FR">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="">
                <input type="hidden" name="item_name" value="Donation">
                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="no_note" value="1">
                <input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="ah" value="0">
                <input type="hidden" name="tax" value="0">
                <input type="radio" name="amount" value="5.00" id="don5" checked=""><label for="don5"> 5 EUR </label>
                <input type="radio" name="amount" value="25.00" id="don25"><label for="don25"> 25 EUR </label>
                <input type="radio" name="amount" value="40.00" id="don40"><label for="don40"> 40 EUR </label>
                <input type="radio" name="amount" value="100.00" id="don100"><label for="don100"> 100 EUR </label>
                <br><br>
                <input type="image" src="http://screposvitrolles.free.fr/images/bouton_faire_un_don_rouge1.png" border="0" name="submit"
                    alt="VALIDER">
            </form>
        </div>
        <!--fin formulaire de paiement paypal-->
        <p id='donvirement'>petit texte sur le don par virement</p>
        <p id='donremerciement'>nous vous remercions pour votre don etc...</p>
    </div>
    <div class="col-md-6">
        <h4>Aide bénévole</h4>
        <p>En tant qu'ASBL, nous avons toujours besoin de l'aide de bénévoles motivés. Si vous êtes intéressés, n'hésitez pas
            à nous envoyer un message par</p>
        <button type="button" class="btn btn-default btn-center" id="ContactLink" href="<?php echo base_url(" MainTulipe/contact
            ");?>">ICI</button>
    </div>


</div>