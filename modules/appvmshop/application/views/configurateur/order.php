<form method="POST" action="https://preprod-tpeweb.paybox.com/cgi/MYchoix_pagepaiement.cgi">
    <div class="row">

        <div class="col-md-8 col-xs-12 mx-auto">

            <a href="<?php echo base_url('configurateur/cart'); ?>" class="btn btn-sm btn-outline-dark">Retour</a>

            <div class="form-row">
            
                <div class="form-group col-md-6 col-xs-12">

                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control" required>

                </div>
            
                <div class="form-group col-md-6 col-xs-12">

                    <label>Prénom</label>
                    <input type="text" name="prenom" class="form-control" required>

                </div>

            </div>

            <div class="form-group">

                <label>Adresse</label>
                <input type="text" name="adresse" class="form-control" required>

            </div>

            <div class="form-group">

                <label>Adresse complémentaire</label>
                <input type="text" name="adresse_comp" class="form-control" required>

            </div>

            <div class="form-row">

                <div class="form-group col-md-4 col-xs-6">

                    <label>Code postal</label>
                    <input type="text" class="form-control" name="code_postale" required>

                </div>

                <div class="form-group col-md-8 col-xs-6">

                    <label>Ville</label>
                    <input type="text" class="form-control" name="ville" required>

                </div>

            </div>

        </div>
        
        <div class="col-md-8 col-xs-12 mx-auto">

            <div class="row">

                <div class="form-group col-12">

                    <button type="submit" class="btn btn-outline-dark btn-block">

                        <input type="hidden" name="PBX_SITE" value="1999888">
                        <input type="hidden" name="PBX_RANG" value="32">
                        <input type="hidden" name="PBX_IDENTIFIANT" value="2">
                        <input type="hidden" name="PBX_TOTAL" value="1000">
                        <input type="hidden" name="PBX_DEVISE" value="978">
                        <input type="hidden" name="PBX_CMD" value="TEST Paybox">
                        <input type="hidden" name="PBX_PORTEUR" value="test@paybox.com">
                        <input type="hidden" name="PBX_RETOUR" value="Mt:M;Ref:R;Auto:A;Erreur:E">
                        <input type="hidden" name="PBX_HASH" value="SHA512">
                        <input type="hidden" name="PBX_TIME" value="2011-02-28T11:01:50+01:00">
                        <input type="hidden" name="PBX_HMAC" value="E42F990CDFD19513D4EE040DA37BC46264EDF62C5FD84D396BDFEFEC1FFA5999B8186B40E26F881785720D74864A343E6E20903495F5F1BD3B95492C39595C0D">

                        <h5><i class="fab fa-cc-mastercard"></i> <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-amex"></i> Payez par carte bancaire</h5>

                    </button>

                </div>

            </div>

        </div>
      
    </div>

</form>