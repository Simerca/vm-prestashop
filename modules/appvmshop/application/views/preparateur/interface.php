<?php 

// echo "<pre>";
// var_dump($items);
// echo "</pre>";


?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<div class="container">
    <div class="row">
        <div class="col-12 table table-responsive">
            Commande du <?php echo date('Y-m-d', strtotime($this->input->get('date'))); ?>
            <a href="<?php echo base_url('preparateur/searchachat') ?>">Retour</a>
            <table id="table_id" class="table table-hover">
                <thead>
                    <th>Cat</th>
                    <th>ID</th>
                    <th>ID Cat</th>
                    <th>Designation</th>
                    <th>Quantité</th>
                    <th>Poids</th>
                    <th>Unité/Lot</th>
                    <th>Poids Total</th>
                    <th>Unité Total</th>
                </thead>
                <tbody>
                    <?php 

                        // Les categorie 111 a 143 sont des groupes de produit
                        $additionCat = array();
                        for($i = 111; $i < 143; $i ++){
                            if($i != 116){
                                $additionCat[] = $i;
                            }
                        }

                        $poidTotal = 0;
                        $totalUnite = 0;
                        $totalUnite = (float) $totalUnite;
                        $html = '';
                        
                        // echo "<pre>";
                        // var_dump($items);
                        // echo "</pre>";
                        $currentCat = 0;
                        $htmlGrp = '';
                        foreach($items as $value){

                            if($value->value == ''){
                                $value->value = 1;
                            }
                            if(isset($value->id_category_default)){
                            if(in_array($value->id_category_default, $additionCat)  ){

                                
                                // var_dump($currentCat);
                                if($currentCat == (int) $value->id_category_default){
                                    $poidTotal += (float) $value->product_quantity * (float) $value->product_weight;
                                    $totalUnite += (float) $value->value * (float) $value->product_quantity;
                                    
                                    $htmlGrp = '<tr onclick="greylist(this);">
                                    <td>'.$value->cat_name.'</td>
                                    <td>'.$value->product_id.'</td>
                                    <td>'.$value->id_category_default.'</td>
                                    <td>'.$value->cat_name.'</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>'.$poidTotal.'</td>
                                    <td>'.$totalUnite.' /pcs</td>
                                    </tr>';


                                    }else{

                                        echo $htmlGrp;

                                        $htmlGrp = '';

                                        $poidTotal = (float) $value->product_quantity * (float) $value->product_weight;
                                        $totalUnite = (float) $value->value * (float) $value->product_quantity;

                                        $currentCat = (int) $value->id_category_default;

                                        $htmlGrp .= '<tr onclick="greylist(this);">
                                        <td>'.$value->cat_name.'</td>
                                        <td>'.$value->product_id.'</td>
                                        <td>'.$value->id_category_default.'</td>
                                        <td>-- '.$value->cat_name.'</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>'.$poidTotal.'</td>
                                        <td>'.$totalUnite.' /pcs</td>
                                        </tr>';

                                        

                                    

                                    }


                            }
                            
                        }
                        }
                        echo $htmlGrp;

                        $currentProductID = '';
                        foreach($items as $value){

                            if($value->value == ''){
                                $value->value = 1;
                            }
                            if(isset($value->id_category_default)){
                            if(!in_array($value->id_category_default, $additionCat) ){

                                if($currentProductID == $value->product_id){
                                    $poidTotal += (float) $value->product_quantity * (float) $value->product_weight;
                                    $totalUnite += (float) $value->product_quantity * (float) $value->value;

                                    $html = '<tr  onclick="greylist(this);">
                                    <td>'.$value->cat_name.'</td>
                                    <td>'.$value->product_id.'</td>
                                    <td>'.$value->id_category_default.'</td>
                                    <td>'.$value->product_name.'
                                    <br>'.$value->description_short.'</td>
                                    <td></td>
                                    <td>'.round($value->product_weight,2).'</td>
                                    <td>'.$value->value.'</td>
                                    <td>'.$poidTotal.'</td>
                                    <td>'.$totalUnite.'</td>
                                    </tr>';
    

                                }else{

                                    echo $html;

                                    $html = '';

                                    $poidTotal = (float) $value->product_quantity * (float) $value->product_weight;
                                    $totalUnite = (float) $value->product_quantity * (float) $value->value;

                                    $html .= '<tr  onclick="greylist(this);">
                                    <td>'.$value->cat_name.'</td>
                                    <td>'.$value->product_id.'</td>
                                    <td>'.$value->id_category_default.'</td>
                                    <td>'.$value->product_name.'
                                    <br>'.$value->description_short.'</td>
                                    <td>'.$value->product_quantity.'</td>
                                    <td>'.round($value->product_weight,2).'</td>
                                    <td>'.$value->value.'</td>
                                    <td>'.$poidTotal.'</td>
                                    <td>'.$totalUnite.' </td>
                                    </tr>';

                                    $currentProductID = $value->product_id;

                                }
                           
                                
                                
                               
                            }

                            
                            }
                        }
                        echo $html;
                        

                    ?> 
                </tbody>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );

    function greylist(item){
        if($(item).hasClass('selected')){
            $(item).removeClass('selected')
            $(item).css('background-color','white')
        }else{
            $(item).addClass('selected')
            $(item).css('background-color','rgba(0, 0, 0, 0.075)')
        }
    }

</script>