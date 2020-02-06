{extends file='page.tpl'}



{block name='page_title'}
<span class="sitemap-title">{l s='Plateau à composer' d='Shop.Theme'}</span>
{/block}
{block name='page_content_container'}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/03b1b5513b.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="Stylesheet" type="text/css" />


<style>


img.img.img-menu{

max-width: 50px;

}
</style>

    <div class="row col-md-12 col-xs-12 mx-auto">

        <!-- Title -->
        <div class="col-12 text-center">

            <h2></h2>

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

                    <a class="filter-menu" id="menu_55" href="javascript:void(0);" onclick="load_products(55);">
                    <img id="img_55" src="assets/img/picto1.png" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_55" src="assets/img/picto1neg.svg" class="img img-menu" alt="Coquillage"><br>
                    Coquillages</a>

                </div>

                <div class="col-3 text-center">
                    <a class="filter-menu" id="menu_56" href="javascript:void(0);" onclick="load_products(56);">
                    <img id="img_56" src= "assets/img/picto2.png" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_56" src= "assets/img/picto2neg.svg" class="img img-menu" alt="Coquillage"><br>
                    Crustacés</a>

                </div>

                <div class="col-3 col-xs-12 text-center">
                    <a class="filter-menu" id="menu_57" href="javascript:void(0);" onclick="load_products(57);">
                    <img id="img_57" src= "assets/img/huitresv2.png" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_57" src= "assets/img/huitresv2neg.svg" class="img img-menu" alt="Coquillage"><br>
                    Huîtres</a>

                </div>

                <div class="col-3 col-xs-12 text-center">

                    <a class="filter-menu" id="menu_109" href="javascript:void(0);" onclick="load_products(58);">
                    <img id="img_58" src= "assets/img/saucev2.png" class="img img-menu" alt="Coquillage">
                    <img id="img_neg_58" src= "assets/img/saucev2neg.svg" class="img img-menu" alt="Coquillage"><br>
                    Sauces et beurres</a>

                </div>

                <div class="col-md-12">
                
                    <img id="img_acc_55" src= "assets/img/Accolade01.png" class="img img-accolade" alt="Coquillage">
                    <img id="img_acc_56" src= "assets/img/Accolade02.png" class="img img-accolade" alt="Coquillage">
                    <img id="img_acc_57" src= "assets/img/Accolade03.png" class="img img-accolade" alt="Coquillage">
                    <img id="img_acc_58" src= "assets/img/Accolade04.png" class="img img-accolade" alt="Coquillage">

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
                    

                        <div class="col-md-4 border-bottom p-1 mx-auto">
                        <div class="row col-12 m-0 p-0">
                            <div class="col-12 text-center">
                                <img class="img img-responsive products-img-list" src="https://via.placeholder.com/300"></h6>
                            </div>

                            <div class="col-12 text-center">
                                <h6>Plateau polystyrène 2 personnes</h6>
                            </div>

                            <div class="col-12 text-center">
                                <div class="row">
                                    <div class="col-4"><button type="button" onclick="add_product_to_cart(351, -1, 'Plateau polystyrène 2 personnes')" class="btn btn-outline-success btn-qty">-</button></div>
                                    <div class="col-4">Inclus</div>
                                    <div class="col-4"><button type="button" data-tva="20" data-price="0" onclick="add_product_to_cart(351, 1, 'Plateau polystyrène 2 personnes', this.dataset.tva, this.dataset.price, true)" class="btn btn-outline-success btn-qty">+</button></div>
                                </div>
                            </div>

                        </div>
                        </div>


                        {foreach from=$products  item=$presentation}


                            <div class="col-md-4 border-bottom p-1 mx-auto">
                                <div class="row col-12 m-0 p-0">
                                    <div class="col-12 text-center">
                                        <img class="img products-img-list img-responsive" src="https://ventsetmarees.unet.dev/img/"></h6>
                                    </div>

                                    <div class="col-12 text-center">
                                        <h6>{$presentation.name}</h6>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="row">
                                            <div class="col-md-6 bg-light">{$presentation.price} €</div>
                                            <div class="col-md-3 bg-vm-muted"><a class="">-</a></div>
                                            <div class="col-md-3 bg-vm"><a data-price="{$presentation.price}" data-tva="5.5" onclick="add_product_to_cart({$presentation.id_product}, 1, '{$presentation.name}', this.dataset.tva, this.dataset.price, true)" class="text-white">+</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                    {/foreach}

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

                            <form method="post" id="formNext" action="recapitulatif">
                                <input type="hidden" name="packPrice" id="packPrice">
                                </form>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>
<script type="text/javascript">
{literal}
    
        //* Ajax Load Product From Category */
        /**
        * param : categorie id 
        * return : array product from prestashop db
        * */
        
        $(document).ready(function(){
            load_products(55);
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
                        
                        $('#error').addClass('alert');
                        $('#error').addClass('alert-danger');
                        $('#error').show(300);
                        $('#error').html('Vous devez au moins sélectionner un produit');
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
                        url:'modules/appvmshop/ajax/has_plate',
                        type:'get',
                        success(response){
                            console.log(response);
                            if(response == "true" || $('#noOption').is(':checked')){
                                $('#formNext').submit();
                            }else{
                                $('#error').addClass('alert');
                                $('#error').addClass('alert-danger');
                                $('#error').show(300);
                                $('#error').html('Vous devez au moins sélectionner un plateau');
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

            var ListCategorie = ['55','56','57','58'];

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
                url:'modules/appvmshop/ajax/load_products',
                type:'post',
                data:{categorie_id:categorie},
                success(response){

                    

                    response = JSON.parse(response);

                    console.log(response);
                    /** Response */
                    var output = '';
                    response.forEach(function(elem){

                        console.log('ID TAXE GROUPE')
                        console.log(elem.product.id_tax_rules_group);
                        console.log('ID TAXE GROUPE')
                        if(elem.product.id_tax_rules_group == 1){
                        elem.product.vm_tva = 20;
                        }
                        if(elem.product.id_tax_rules_group == 2){
                        elem.product.vm_tva = 10;
                        }
                        if(elem.product.id_tax_rules_group == 3){
                        elem.product.vm_tva = 5.5;
                        }

                        var displayPrice = elem.product.price * 1.055;

                        name = escape(elem.product.name);
                        console.log(name);
                        elem.product.price = Math.round(elem.product.price * 100) / 100;
                        // Output pour liste produit 
                        output += '<div class="col-md-4 bg-white p-3 my-1">';
                            output += '<div class="row">';
                                output += '<div class="col-md-12 p-0"><img class="img img-responsive products-img-list" src="https://vmnoel.unet.dev/img/p/'+elem.image+'"></div>';
                                output += '<div class="col-md-12 col-xs-12 p-0 my-2">';
                                output += '<h4>'+elem.product.name+'</h4>';
                                output += '</div>';
                                output += '<div class="col-12 p-0 bg-light">';
                                output += '<div class="row col-12 m-0 p-0">';
                                    output += '<div class="col-md-8 col-xs-6">'+displayPrice+' €</div>';
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

            var user = {/literal}{$userId}{literal}

            $.ajax({
                url:'modules/appvmshop/ajax/add_item',
                type:'post',
                data:{item:id, qty:qty, name:name, tva:tva, price:price,isPlate:isplate,user:user},
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

            var user = {/literal}{$userId}{literal}

            $.ajax({
                url:'modules/appvmshop/ajax/load_cart',
                type:'post',
                data:{user:user},
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
                url:'modules/appvmshop/ajax/delete_cart',
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
            totalHt = totalTtc / (1 + (20 / 100));
            $('#packPrice').val(totalHt.toFixed(2));


            return totalTtc;

        }

        function dellAnItem(id){

            $.ajax({
                url:'modules/appvmshop/ajax/dell_all_item',
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

var url = "https://vmnoel.unet.dev/plateau";

$(document).ready(function(){
    load_cart();
})

var pid = $('#product_id').val();
$.ajax({
    url : url+'&action=savecustomdataAction',
    type : "POST",
    data : { customdata : customdata, qty : 1, pid : pid },

    success : function(response) {
      if(response.message == true) {
        $('#addtocart_form').submit();
      }
    }
  });

  {/literal}



</script>

{/block}