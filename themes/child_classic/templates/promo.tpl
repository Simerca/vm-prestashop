
{block name='page_content_container'}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/modules/appvmshop/assets/css/custom.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <title>Offre du jour en Magasin</title>
  </head>
  <body>

<div class="full-container row">

    <!-- Logo  -->
    <div class="col-12 text-center">
        <img src="/modules/appvmshop/assets/img/vents-et-marees-logo.svg" alt="logo">
    </div>

    <!-- Nav -->
    <div class="col-md-6 back-button-div col-xs-12 mx-auto my-3">
        <a target="_top" href="https://vents-et-marees.com"><img src="/modules/appvmshop/assets/img/pictoaccueil.jpg"> Retour à l'accueil</a>
    </div>

    <!-- Banner  -->
    <div class="col-12 bg-primary text-center p-5 background-header-promo">
        <h1 class="text-uppercase">Offres du jour en magasin</h1>
        <h2 id="todayDate" class="text-white">
                {$options[0].acf.options_value}
        </h2>
    </div>

</div>

<!-- Loop content  -->
<div class="full-container">
    <div class="row">

            {foreach $items  item="item"}

                <div class="col-12 ">
                    <div class="row col-md-10 mx-auto">
                    <div class="row col-md-8 mx-auto">
                        {if isset($item.better_featured_image.source_url)}
                            <div class="col-md-4 col-xs-12 p-2"><img style="width: 150px!important;max-width: 100%; height:150px; max-height:150px;object-fit: cover;" src="{$item.better_featured_image.source_url}" alt="product"></div>
                        {else}
                            <div class="col-md-4 col-xs-12 p-2"><img style="width: 150px!important;max-width: 100%; height:150px; max-height:150px;object-fit: cover;" src="https://via.placeholder.com/150" alt="product"></div>
                        {/if}
                        <div class="col-md-8 py-2 col-xs-12">
                            <h3>{$item.title.rendered}</h3>
                                <p>{$item.content.rendered nofilter}</p>
                                
                                <p>{$item.acf.zone_de_peche}</p>

                                <h3 class="text-vm">{$item.acf.prix_promotions}</h3>
                            <p></p>
                        </div>
                    </div>
                    </div>
                </div>

            {/foreach}

    </div>

    <div class="row my-5">
        <div class="col-12 bg-vm text-center p-3">
            <h5 class="text-uppercase text-white">offres valables exclusivement en magasin Dans la limite des stocks disponibles</h5>
        </div>
    </div>

</div>

<div class="full-container bg-light py-5">

<div class="row col-md-8 mx-auto">

            {foreach $magasins item="magasin"}

                <div class="col-md-6 mx-auto my-4 col-xs-12">
                <h3 class="text-vm">{$magasin.title.rendered}</h3>
                <p>{$magasin.acf.adresse_magasin}<br>
                                {$magasin.acf.code_postal} {$magasin.acf.ville}<br>
                                Tel {$magasin.acf.telephone}
                            </p>
                <div class="col-12 bg-grey p-2">
                <h3 class="text-upercase my-2">Horaires</h3>

                {$magasin.acf.horaires nofilter}
                
                </div>
                </div>

                {/foreach}

    </div>

</div>

<div class="footer-container my-5">
   <footer id="footer" class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <section class="footer-block block_various_links_footer">
                     <ul class="nav flex-column">
                        <li class="nav-item">
                           <a target="_blank" href="https://accueil.vents-et-marees.com/qui-sommes-nous/" class="nav-link" title="Qui sommes nous ?">
                           Qui sommes-nous?
                           </a>
                        </li>
                        <li class="nav-item">
                           <a target="_blank" href="https://accueil.vents-et-marees.com/adresses-et-horaires/" class="nav-link" title="Nos Magasins">
                           Adresses et Horraires
                           </a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" href="https://accueil.vents-et-marees.com/negoce/"  class="nav-link" title="Négoce">
                           Négoce
                           </a>
                        </li>
                     </ul>
                  </section>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <section class="footer-block block_various_links_footer">
                     <ul class="nav flex-column">
                        <li class="nav-item">
                           <a target="_blank" href="https://accueil.vents-et-marees.com/faq/" class="nav-link" title="Négoce">
                           FAQ
                           </a>
                        </li>
                        <li class="nav-item">
                           <a target="_blank" href="mailto:ecommerce@ventsetmarees-bordeaux.com" class="nav-link" title="Contactez-nous">
                           Contactez-nous
                           </a>
                        </li>
                        <li class="nav-item">
                           <a target="_blank" href="https://accueil.vents-et-marees.com/actualites/" class="nav-link" title="Actualités">
                           Actualités
                           </a>
                        </li>
                     </ul>
                  </section>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <section class="footer-block block_various_links_footer">
                     <ul class="nav flex-column">
                        <li class="nav-item">
                           <a target="_blank" href="https://accueil.vents-et-marees.com/cgv/" class="nav-link" title="CGV">
                           CGV / CGU
                           </a>
                        </li>
                        <li class="nav-item">
                           <a target="_blank" href="https://accueil.vents-et-marees.com/mentions-legales/" class="nav-link" title="Nos Magasins">
                           Mentions légales
                           </a>
                        </li>
                     </ul>
                  </section>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3">
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3">
            <section id="social_block" class="">
               <p>Nous suivre</p>
               <ul class="nav">
                  <li class="facebook">
                     <a class="_blank" href="https://www.facebook.com/poissonnerieventsetmarees/" target="_blank">
                     <span>Facebook</span>
                     </a>
                  </li>
                  <li class="youtube">
                     <a class="_blank" href="https://www.youtube.com/channel/UCJo8UV4QI2QnnFTspVjRCBQ" target="_blank">
                     <span>YouTube</span>
                     </a>
                  </li>
               </ul>
            </section>
            <div class="clearfix"></div>
         </div>
      </div>
</div>
   </footer>
   <div class="col-md-6 footer-number">
          <div class="row">
          
            <div class="col-md-2"><img src="https://accueil.vents-et-marees.com/wp-content/themes/Total-child/img/phone.png" /></div>
            <div class="col-md-5">
              <a href="tel:+33556332953"><span style="font-size: 16px;color: #000000">05 56 33 29 53</span></a>
              <br>
              <span style="font-size: 12px;color: #000000;">Tapez 3</span>
            </div>
            <div class="col-md-5">
              <p><span style="font-size: 16px;color: #000000"><span style="font-family:">du lundi au vendredi de <span style="font-family: FuturaMedium">9h</span> à <span style="">17h</span></span><strong><br>
              </strong><span style="font-size: 12px">Hors jours feriés</span></span></p>
            </div>
          
          </div>
      </div>
</div>
        <!-- jQuery  -->

        {literal}
        <script src="/modules/appvmshop/assets/js/moment.js"></script>
        {/literal}

    </body>

</html>
{/block}