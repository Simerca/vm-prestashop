
<style>


img.img.img-menu{

max-width: 50px;

}
</style>

    <div class="row col-md-11 col-xs-12 mx-auto">

        <!-- Title -->
        <div class="col-12 text-center">

            <h2><?php echo $this->lang->line('Je compose mon plateau'); ?></h2>

        </div>

        <!-- Product List -->
        <div class="col-md-8 col-xs-12 p-3">

            <div id="error"></div>

            <div class="row my-3">
            
            <div class="col-4 text-center">
                <span id="titreStep1" class="h5 font-weight-bold text-vm">étape 1</span>
                <span id="step1" class="text-vm"><br>ma composition</span>
            </div>
            <div class="col-4 text-center">
                <span id="titreStep2" class="h5 font-weight-bold">étape 2</span>
                <span id="step2" class=""><br>ma présentation</span>
            </div>
            <div class="col-4 text-center">
                <span id="titreStep3" class="h5 font-weight-bold">étape 3</span>
                <span id="step3" class=""><br> j’ajoute au panier</span>
            </div>

            </div>

            <div class="row">

                <div class="col-md-12 my-2">
                    <div class="progress" style="height: 20px;">
                    <div class="progress-bar bg-vm" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
            
                <div class="col-md-4"><button class="btn btn-sm btn-outline-secondary" onclick="nextStep('previous');">Retour</button></div>
                <div class="col-md-4"></div>
                <div class="col-md-4 text-right"><button class="btn btn-sm bg-vm text-white" id="btnNext" onclick="nextStep('next')">Passer a l'etape 2</button></div>

            </div>

            <!-- Menu filtre  -->
            <div id="menu-filtres" class="row">

                <div class="col-12 my-4">
                
                    <h3 class="text-vm">Etape 1</h3>

                    <span>je sélectionne tous les produits qui composent mon plateau de fruits de mer</span>

                </div>


                <div class="col-3 text-center">

                    <a class="filter-menu" id="menu_106" href="javascript:void(0);" onclick="load_products(106);">
                    <img id="img_106" src="<?php echo base_url('assets/img/picto1.png'); ?>" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_106" src="<?php echo base_url('assets/img/picto1neg.svg'); ?>" class="img img-menu" alt="Coquillage"><br>
                    Coquillages</a>

                </div>

                <div class="col-3 text-center">
                    <a class="filter-menu" id="menu_107" href="javascript:void(0);" onclick="load_products(107);">
                    <img id="img_107" src="<?php echo base_url('assets/img/picto2.png'); ?>" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_107" src="<?php echo base_url('assets/img/picto2neg.svg'); ?>" class="img img-menu" alt="Coquillage"><br>
                    Crustacés</a>

                </div>

                <div class="col-3 col-xs-12 text-center">
                    <a class="filter-menu" id="menu_105" href="javascript:void(0);" onclick="load_products(105);">
                    <img id="img_105" src="<?php echo base_url('assets/img/huitresv2.png'); ?>" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_105" src="<?php echo base_url('assets/img/huitresv2neg.svg'); ?>" class="img img-menu" alt="Coquillage"><br>
                    Huîtres</a>

                </div>

                <div class="col-3 col-xs-12 text-center">

                    <a class="filter-menu" id="menu_109" href="javascript:void(0);" onclick="load_products(109);">
                    <img id="img_109" src="<?php echo base_url('assets/img/saucev2.png'); ?>" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_109" src="<?php echo base_url('assets/img/saucev2neg.svg'); ?>" class="img img-menu" alt="Coquillage"><br>
                    Sauces et beurres</a>

                </div>

                <div class="col-md-12">
                
                    <img id="img_acc_106" src="<?php echo base_url('assets/img/Accolade01.png'); ?>" class="img img-accolade" alt="Coquillage">
                    <img id="img_acc_107" src="<?php echo base_url('assets/img/Accolade02.png'); ?>" class="img img-accolade" alt="Coquillage">
                    <img id="img_acc_105" src="<?php echo base_url('assets/img/Accolade03.png'); ?>" class="img img-accolade" alt="Coquillage">
                    <img id="img_acc_109" src="<?php echo base_url('assets/img/Accolade04.png'); ?>" class="img img-accolade" alt="Coquillage">

                </div>

            </div>
            <!-- Menu filtre  -->

            <!-- Liste produit  -->
            <div class="row">

                <div id="product-zone" class="col-12">

                    <div class="row" id="product-list">

                        

                    </div>

                </div>

                

                <!-- Option de présentation -->
                <div id="optionPresentation" style="display:none;" class="row col-12">

                        <div class="col-12 my-4">
                        
                        <h3 class="text-vm">Étape 2</h3>

                        <h6>je sélectionne ma présentation</h6>

                    </div>

                    <!-- Choix de la presentation formulaire -->
                    <div class="col-12">
                        
                            <label><input type="checkbox" id="noOption" checked> 
                            <h6 class="text-vm">Je n’ai pas de consigne spécifique</h6>
                            <span>Vents & Marées sélectionne pour moi le ou les supports en polystyrène adaptés à ma composition.
                            Je n’ai pas besoin d’ajouter de support polystyrène
                            à ma composition, je peux ajouter ma composition telle quelle au panier.</span>
                            </label>
                            
                            <label><input id="selectOption" type="checkbox"> 
                            <h6 class="text-vm">J’ai une consigne spécifique</h6>
                            <span>Je souhaite une présentation particulière pour ma sélection de produits.
                            J’indique la taille et la quantité des supports en polystyrène dont j’ai besoin.
                            Je peux ensuite ajouter ma composition au panier.</span>
                            </label>

                    </div>

                    <div class="row col-12" style="opacity:0.33;" id="zonePresentation">

                    <?php

                        // Option de presentation incluse
                        $html = '<div class="col-md-4 border-bottom p-1 mx-auto">';
                        $html .= '<div class="row col-12 m-0 p-0">';
                            $html .= '<div class="col-12 text-center">';
                                $html .= '<img class="img img-responsive products-img-list" src="https://via.placeholder.com/300"></h6>';
                            $html .= '</div>';

                            $html .= '<div class="col-12 text-center">';
                                $html .= '<h6>Barquette polyester</h6>';
                            $html .= '</div>';

                            $html .= '<div class="col-12 text-center">';
                                $html .= '<div class="row">';
                                    $html .= '<div class="col-4"><button type="button" onclick="add_product_to_cart(2252, -1, \'Barquette polyester\')" class="btn btn-outline-success btn-qty">-</button></div>';
                                    $html .= '<div class="col-4">Inclus</div>';
                                    $html .= '<div class="col-4"><button type="button" data-tva="20" data-price="0" onclick="add_product_to_cart(2252, 1, \'Barquette polyester\', this.dataset.tva, this.dataset.price, true)" class="btn btn-outline-success btn-qty">+</button></div>';
                                $html .= '</div>';
                            $html .= '</div>';

                        $html .= '</div>';
                        $html .= '</div>';

                        // echo $html;
                    
                        foreach($products['presentation'] as $presentation){

                            $imgUrl = $this->prestashop->get_product_image_url($this->prestashop->product_image($presentation->id_product));

                            if($imgUrl != '/.jpg'){

                            $html = '<div class="col-md-4 border-bottom p-1 mx-auto">';
                                $html .= '<div class="row col-12 m-0 p-0">';
                                    $html .= '<div class="col-12 text-center">';
                                        $html .= '<img class="img products-img-list img-responsive" src="https://ventsetmarees.unet.dev/img/p/'.$imgUrl.'"></h6>';
                                    $html .= '</div>';

                                    $html .= '<div class="col-12 text-center">';
                                        $html .= '<h6>'.$presentation->name.'</h6>';
                                    $html .= '</div>';

                                    $html .= '<div class="col-12 text-center">';
                                        $html .= '<div class="row">';
                                            $html .= '<div class="col-md-6 bg-light">'.round($presentation->price,2).' €</div>';
                                            $html .= '<div class="col-md-3 bg-vm-muted"><a class="">-</a></div>';
                                            $html .= '<div class="col-md-3 bg-vm"><a data-price="'.$presentation->price.'" data-tva="'.$presentation->vm_tva.'" onclick="add_product_to_cart('.$presentation->id_product.', 1, \''.$presentation->name.'\', this.dataset.tva, this.dataset.price, true)" class="text-white">+</a></div>';
                                        $html .= '</div>';
                                    $html .= '</div>';

                                $html .= '</div>';
                            $html .= '</div>';

                            echo $html;

                            }

                        }

                    ?>
                    
                </div>
                </div>
                <!-- Option de présentation -->
                
            </div>
            <!-- Liste produit  -->

        </div>

        <!-- Cart viewer -->
        <div id="cart-viewer-window" class="col-md-4 col-xs-12 bg-light p-3 right-0 bottom-0 shadow-sm">

            <div class="row">

                <div class="col-12 text-center">
                    
                    <h5>mon plateau</h5>

                </div>

                <div id="cart-view" class="col-12 cart-view">

                    <div class="row">

                            <div class="col-md-6 text-center bg-white">produits</div>
                            <div class="col-md-6 text-center bg-white">quantités</div>

                        <div class="col-12" id="cart-list">



                        </div>

                        <div id="recapTva" class="col-12">
                        
                        <h5 style="display:none;" id="totalTva5"></h5>
                        <h5 style="display:none;" id="totalTva20"></h5>
                        <h5 id="totalTtc"></h5>

                        </div>

                        <div class="col-12" id="calcul-tva">

                            <!-- <button type="button" onclick="calcul_tva()" class="btn btn-sm btn-block btn-warning">Calculer mon panier</button> -->

                        </div>
                        <div class="col-12 my-2" id="empty-cart">

                            <!-- <button type="button" onclick="empty_cart()" class="btn btn-sm btn-block bg-vm">Passer a l'etape 2</button> -->
                            <button type="button" id="btnNext2" onclick="nextStep('next')" class="btn btn-sm btn-block bg-vm text-white">Passer a l'etape 2</button>

                        </div>
                        <div class="col-12" id="valide-cmd">

                            <form method="get" id="formNext" action="<?php echo base_url('configurateur/retrait') ?>"></form>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>
    
    <script>
    
        //* Ajax Load Product From Category */
        /**
        * param : categorie id 
        * return : array product from prestashop db
        * */
        
        $(document).ready(function(){
            load_products(106);
        });

        window.actualStep = 0;

        function nextStep(val){

            if(val == 'next'){
                if(window.actualStep == 0){

                    totalttc = calcul_tva();

                    if(totalttc != 0){
                        $('#error').hide(300);
                    $('#optionPresentation').show('300');
                    $('#titreStep1').addClass('text-vm');
                    $('#step1').addClass('text-vm');
                    $('#btnNext').html('Passer à l\'étape 3');
                    $('#btnNext2').html('Passer à l\'étape 3');
                    $('.progress-bar').width('50%');
                    $('#titreStep2').addClass('text-vm');
                    $('#step2').addClass('text-vm');
                    $('#product-list, #menu-filtres').hide('300');
                    window.actualStep ++;

                    }else{
                        
                        // $('#error').addClass('alert');
                        // $('#error').addClass('alert-danger');
                        // $('#error').show(300);
                        // $('#error').html('Vous devez au moins sélectionner un produit');
                        $.notify({
                                    // options
                                    message: 'Vous devez sélectionner au moins un produit' 
                                },{
                                    // settings
                                    type: 'danger'
                                });

                    }

                }else if(window.actualStep == 1){

                    $.ajax({
                        url:'./ajax/has_plate',
                        type:'get',
                        success(response){
                            console.log(response);
                            if(response == "true" || $('#noOption').is(':checked')){
                                $('#formNext').submit();
                            }else{
                                // $('#error').addClass('alert');
                                // $('#error').addClass('alert-danger');
                                // $('#error').show(300);
                                // $('#error').html('Vous devez au moins sélectionner un plateau');
                                $.notify({
                                    // options
                                    message: 'Vous devez sélectionner au moins un plateau' 
                                },{
                                    // settings
                                    type: 'danger'
                                });
                            }
                        }
                    })


                }
            }else if(val == 'previous'){

                if(window.actualStep == 1){

                    $('#optionPresentation').hide('300');
                    $('#step1').removeClass('text-vm');
                    $('#titreStep1').removeClass('text-vm');
                    $('#titreStep1').addClass('text-vm');
                    $('#btnNext').html('Passer à l\'étape 2');
                    $('#btnNext2').html('Passer à l\'étape 2');
                    $('#step1').addClass('text-vm');
                    $('.progress-bar').width('25%');
                    $('#titreStep2').removeClass('text-vm');
                    $('#step2').removeClass('text-vm');
                    $('#product-list, #menu-filtres').show('300');
                    window.actualStep -= 1;

                }

            }

            if($('#optionPresentation').is(':visible')){
                
            }else{
                console.log('notVisible');
                
            }

        }
        

        function load_products(categorie){

            var ListCategorie = ['105','106','107','109'];

            ListCategorie.forEach(function(e){
                if(e == categorie){
                    $('#menu_'+e).addClass('text-vm');
                    $('#img_neg_'+e).show();
                    $('#img_acc_'+e).show();
                    $('#img_'+e).hide();
                }else{
                    $('#img_neg_'+e).hide();
                    $('#img_acc_'+e).hide();
                    $('#img_'+e).show();
                    $('#menu_'+e).removeClass('text-vm');
                }
            })

            $.ajax({
                url:'./ajax/load_products',
                type:'post',
                data:{categorie_id:categorie},
                success(response){

                    response = JSON.parse(response);
                    /** Response */
                    var output = '';
                    response.forEach(function(elem){
                        name = escape(elem.product.name);
                        console.log(name);
                        elem.product.price = Math.round(elem.product.price * 100) / 100;
                        // Output pour liste produit 
                        output += '<div class="col-md-4 bg-white p-3 my-1">';
                            output += '<div class="row">';
                                output += '<div class="col-md-12 p-0"><img class="img img-responsive products-img-list" src="https://ventsetmarees.unet.dev/img/p/'+elem.image+'"></div>';
                                output += '<div class="col-md-12 col-xs-12 p-0 my-2">';
                                output += '<h4>'+elem.product.name+'</h4>';
                                output += '</div>';
                                output += '<div class="col-12 p-0 bg-light">';
                                output += '<div class="row col-12 m-0 p-0">';
                                    output += '<div class="col-md-8 col-xs-6">'+elem.product.price+' €</div>';
                                    output += '<div class="col-md-4 col-xs-6 p-0">';
                                        output += '<div class="row col-12 p-0 text-center mx-0">';
                                            output += '<div onclick="add_product_to_cart(\''+elem.product.id_product+'\', -1, \''+name+'\')" class="col-md-6 p-0 bg-vm-muted">';
                                                output += '<a href="javascript:void(0);"  class="text-white">-</a>';
                                            output += '</div>';
                                            output += '<div elemname="'+name+'" data-price="'+elem.product.price+'" data-tva="'+elem.product.vm_tva+'" onclick="add_product_to_cart(\''+elem.product.id_product+'\', 1,\''+name+'\', this.dataset.tva, this.dataset.price)" class="col-md-6 p-0 bg-vm">';
                                                output += '<a href="javascript:void(0);"  class="text-white">+</a>';
                                            output += '</div>';
                                        output += '</div>';
                                    output += '</div>';
                                output += '</div>';
                                output += '</div>';
                                
                                output += '<div class="col-12 text-right my-1 mx-0">';
                                output += '<a data-toggle="tooltip" data-html="true" class="text-decoration-line" title="';
                                
                                if(elem.product.vm_lieu.lenght > 0){
                                output += '<span>Zone de pêche : '+elem.product.vm_lieu+'</span><br>';
                                }
                                if(elem.product.vm_sous_lieu.length > 0){
                                output += '<span>Sous-zone de pêche :'+elem.product.vm_sous_lieu+'</span><br>';
                                }
                                if(elem.product.vm_engin_peche.length > 0){
                                output += '<span>Engin de pêche :'+elem.product.vm_engin_peche+'</span><br>';
                                }
                                if(elem.product.vm_zone_elevage.length > 0){
                                output += '<span>'+elem.product.vm_zone_elevage+'</span><br>';
                                }
                                output += '<span>'+elem.product.vm_scientifique+'</span><br>';
                                output += '';
                                output += '">Plus de details</a>';
                                output += '</div>';
                            output += '</div>';
                        output += '</div>';


                    });
                    $('#product-list').hide();
                    $('#product-list').html(output);
                    $('#product-list').show(300);
                    $('[data-toggle="tooltip"]').tooltip();

                }
            });

        }

        function add_product_to_cart(id, qty, name, tva = null, price = null, isplate=false){

            $.ajax({
                url:'./ajax/add_item',
                type:'post',
                data:{item:id, qty:qty, name:name, tva:tva, price:price,isPlate:isplate},
                success(response){
                    if(response == 'false'){

                        

                        $('#error').addClass('alert');
                        $('#error').addClass('alert-danger');
                        $('#error').show(300);
                        $('#error').html('Vous ne pouvez pas ajouter plus de 5 plateaux');

                    }else{
                        $.notify({
                                    // options
                                    message: ' '+qty+' | '+unescape(name) 
                                },{
                                    // settings
                                    type: 'success'
                                });
                        load_cart();
                    }
                }
            });

        }

        function load_cart(){

            $.ajax({
                url:'./ajax/load_cart',
                type:'post',
                success(response){

                    response = JSON.parse(response);
                    console.log(response);
                    output = '';
                    response.forEach(function(product){

                        
                        
                        // Container
                        output += '<div id="product_'+product.id+'" class="row p-1 my-1 bg-white">'; 

                        // Name
                        output += '<div id="product" data-qty="'+product.qty+'" data-price="'+product.price+'" data-tva="'+product.tva+'" class="col-md-6 col-xs-6">'; 
                        
                            output += unescape(product.name);
                        
                        output += '</div>';
                        // Button
                        output += '<div class="col-md-6 col-xs-12">'; 

                        output += '<div class="row">';
                            output += '<div class="col-12 bg-light text-center">';
                                output += product.qty;
                            output += '</div>';
                        
                        output += '<div class="col-12 my-1">';
                        output += '<div class="row">';

                        if(product.item_id == 2252 || product.item_id == 2202 || product.item_id == 2203 || product.item_id == 2264 || product.item_id == 2265 || product.item_id == 2266){
                            
                            output += '<div class="col-md-4 bg-vm-muted text-center">';
                            output += ' <a href="javascript:void(0);" onclick="add_product_to_cart(\''+product.item_id+'\', -1, \''+product.name+'\')" class="text-white">-</a>';
                            output += '</div>';
                            output += '<div class="bg-vm col-md-4 text-center">';
                            output += ' <a href="javascript:void(0);" data-price="'+product.price+'" data-tva="'+product.tva+'" onclick="add_product_to_cart(\''+product.item_id+'\', 1, \''+product.name+'\', this.dataset.tva, this.dataset.price, true)" class="text-white">+</a>';
                            output += '</div>';
                        }else{

                            output += '<div class="col-md-4 bg-vm-muted text-center">';
                            output += ' <a href="javascript:void(0);" onclick="add_product_to_cart(\''+product.item_id+'\', -1, \''+product.name+'\')" class="text-white">-</a>';
                            output += '</div>';
                            output += '<div class="col-md-4 bg-vm text-center">';
                            output += ' <a href="javascript:void(0);" data-price="'+product.price+'" data-tva="'+product.tva+'" onclick="add_product_to_cart(\''+product.item_id+'\', 1, \''+product.name+'\', this.dataset.tva, this.dataset.price)" class="text-white">+</a>';
                            output += '</div>';
                        }
                        output += '<div class="col-md-4 bg-light text-center">';
                        output += '<a href="javascript:void(0)" class="text-dark" onclick="dellAnItem('+product.item_id+')"><i class="fas fa-trash"></i></a>'
                        output += '</div>';
                      
                        output += '</div>';
                        output += '</div>';
                        output += '</div>';
                        output += '</div>';
                        output += '</div>';

                        // /Container

                    });
                    $('#cart-list').html(output);


                    

                },
                complete(){
                    calcul_tva();
                }
            })

        }

        function empty_cart(){

            $.ajax({
                url:'./ajax/delete_cart',
                success(){
                    $.notify({
                                    // options
                                    message: 'Panier vidé' 
                                },{
                                    // settings
                                    type: 'danger'
                                });
                    nextStep('previous');
                    load_cart();
                }
            })

        }

        function set_date(){
            
            if($('#datezoneSelect').is(':visible')){
                $('#datezoneSelect').hide(200);
                $('#changeDateButton').text('changer d\'horaire');
            }else{
                $('#changeDateButton').text('annuler');
                $('#datezoneSelect').show(200);
            }

        }

        function calcul_tva(){

            products = document.querySelectorAll('#cart-list #product');

            totalTva5 = 0;
            totalTva20 = 0;
            for(i = 0; i < products.length; i++){

                if($(products[i]).data('tva') == 5.5){
                    console.log($(products[i]).data('tva'));
                    totalTva5 += (parseInt($(products[i]).data('price')) * parseInt($(products[i]).data('qty')));
                }
                if($(products[i]).data('tva') == 20.00){
                    console.log($(products[i]).data('tva'));
                    console.log($(products[i]).data('price'));
                    totalTva20 += (parseInt($(products[i]).data('price')) * parseInt($(products[i]).data('qty')));
                    console.log('total TVA EN COURS '+totalTva20);
                }

            }
            totalTva5 = (totalTva5 * 1.055);
            totalTva20 = (totalTva20 * 1.2);
            console.log('Total TVA 5.5 = '+ totalTva5.toFixed(2));
            console.log('Total TVA 20 = '+ totalTva20.toFixed(2));

            $('#totalTva5').html('Total TVA 5.5% : '+totalTva5.toFixed(2)+' €');
            $('#totalTva20').html('Total TVA 20% : '+totalTva20.toFixed(2)+' €');
            totalTva5 = parseFloat(totalTva5.toFixed(2));
            totalTva20 = parseFloat(totalTva20.toFixed(2));
            totalTtc = totalTva20 + totalTva5;
            $('#totalTtc').html('Total TTC : ' + totalTtc.toFixed(2) +'€');

            return totalTtc;

        }

        function dellAnItem(id){

            $.ajax({
                url:'./ajax/dell_all_item',
                tyoe:'GET',
                data:{id:id},
                success(response){
                    load_cart();
                    $.notify({
                                    // options
                                    message: 'Produit supprimé' 
                                },{
                                    // settings
                                    type: 'danger'
                                });
                }
            });

        }

        $(document).ready(function(){
            $('#selectOption').on('click',function(e){

                if($('#selectOption').is(':checked')){
                    console.log('check');
                    $('#zonePresentation').removeClass('disabledDiv');
                    $('#noOption').prop('checked', false);
                    $('#zonePresentation').fadeTo( "slow", 1 );

                }else{
                    $('#zonePresentation').addClass('disabledDiv');
                    $('#noOption').prop('checked', true);
                    $('#zonePresentation').fadeTo( "slow", 0.33 );
                    console.log('uncheck');
                }

            });
            $('#noOption').on('click',function(e){

                if($('#noOption').is(':checked')){
                    console.log('check');
                    $('#selectOption').prop('checked', false);

                    $('#zonePresentation').addClass('disabledDiv');
                    $('#zonePresentation').fadeTo( "slow", 0.33 );
                }else{
                    $('#zonePresentation').removeClass('disabledDiv');
                    $('#zonePresentation').fadeTo( "slow", 1 );
                    $('#selectOption').prop('checked', true);
                    console.log('uncheck');
                }

            });
        })
 



    </script>
