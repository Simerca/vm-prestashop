
<div class="full-container row">

    <!-- Logo  -->
    <div class="col-12 text-center">
        <img src="<?php echo base_url('assets/img/vents-et-marees-logo.svg'); ?>" alt="logo">
    </div>

    <!-- Nav -->
    <div class="col-md-6 back-button-div col-xs-12 mx-auto my-3">
        <a href=""><img src="<?php echo base_url('assets/img/pictoaccueil.jpg') ?>"> Retour à l'accueil</a>
    </div>

    <!-- Banner  -->
    <div class="col-12 bg-primary text-center p-5 background-header-promo">
        <h1 class="text-uppercase">Offres du jour en magasin</h1>
        <h2 id="todayDate" class="text-white">

        </h2>
        <script>
            $(document).ready(function(){
                $('#todayDate').html(moment().locale('fr').format('LL'));
            });
        </script>
    </div>

</div>

<!-- Loop content  -->
<div class="full-container">
    <div class="row">
        <?php 
        
        // Simul loop 
        
            $i = 0;
            foreach($items as $item){

                // echo "<pre>";
                // var_dump($item);
                // echo "</pre>";
                if($i % 2 == 0){ 
                    $class = "bg-striped";
                }else{
                    $class = "";
                }
                $i++;

                $html = '<div class="col-12 '.$class.' ">';
                    $html .= '<div class="row col-md-10 mx-auto">';
                    $html .= '<div class="row col-md-8 mx-auto">';
                        if(isset($item->better_featured_image->source_url)){
                            $html .= '<div class="col-md-4 col-xs-12 p-2"><img style="width: 150px!important;max-width: 100%; height:150px; max-height:150px;object-fit: cover;" src="'.$item->better_featured_image->source_url.'" alt="product"></div>';
                        }else{
                            $html .= '<div class="col-md-4 col-xs-12 p-2"><img style="width: 150px!important;max-width: 100%; height:150px; max-height:150px;object-fit: cover;" src="https://via.placeholder.com/150" alt="product"></div>';
                        }
                        $html .= '<div class="col-md-8 py-2 col-xs-12">';
                            $html .= '<h3>'.$item->title->rendered.'</h3>';
                                $html .= '<p>'.$item->content->rendered.'</p>';
                                $html .= '<h3 class="text-vm">'.$item->acf->prix_promotions.'</h3>';
                            $html .= '<p></p>';
                        $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';

                echo $html;

            }

        ?>
    </div>

    <div class="row my-5">
        <div class="col-12 bg-vm text-center p-3">
            <h5 class="text-uppercase text-white">offres valables exclusivement en magasin Dans la limite des stocks disponibles</h5>
        </div>
    </div>

</div>

<div class="full-container bg-light py-5">

<div class="row col-md-8 mx-auto">
        <?php 

            foreach($magasins as $magasin){

                $html = '<div class="col-md-6 mx-auto my-4 col-xs-12">';
                $html .= '<h3 class="text-vm">'.$magasin->title->rendered.'</h3>';
                $html .= '<p>'.$magasin->acf->adresse_magasin.'<br>
                                '.$magasin->acf->code_postal.' '.$magasin->acf->ville.'<br>
                                Tel '.$magasin->acf->telephone.'
                            </p>';
                $html .= '<div class="col-12 bg-grey p-2">';
                $html .= '<h3 class="text-upercase my-2">Horaires</h3>';

                $html .= $magasin->acf->horaires;
                
                $html .= '</div>';
                $html .= '</div>';

                echo $html;

            }

        ?>
    </div>

</div>