<?php 

// echo "<pre>";
// var_dump($items);
// echo "</pre>";


?>


<div class="full-container">
    <div class="row">
        <div class="col-12 table table-responsive">
            <a href="<?php echo base_url('preparateur/searchlist') ?>">Retour</a>
            <table class="table table-hover">
                <thead>
                    <th>Client</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Statut</th>
                    <th>Detail de la commande</th>
                    <th>Bon de livraison</th>
                    <th>Etiquette colis</th>

                </thead>
                <tbody>
                    <?php 

                        $ref = "";
                        foreach($items as $value){

                                if($ref != $value->reference){
                                    
                                    if($value->product_id == 184){
                                        $html = '<tr style="background-color:rgba(255, 0, 0, 0.27);">';
                                    }else{
                                        $html = '<tr>';
                                    }
                                    $html .= '<td>'.$value->nom_client.' '.$value->prenom_client.'</td>';
                                    $html .= '<td>'.date('d-m-Y', strtotime($value->date_retrait)).'</td>';
                                    $html .= '<td>'.$value->heure_retrait.'</td>';
                                    $html .= '<td><span class="badge badge-primary p-1" style="background-color:'.$value->color.'">'.$value->status_name.'</span></td>';
                                    $html .= '<td><a href="'.base_url('preparateur/orderlabo/').$value->reference.'">'.$value->reference.'</a></td>';
                                    $html .= '<td><a href="https://vents-et-marees.com/begles/frontpdf?delivry='.$value->id_order.'" class="btn btn-outline-secondary"><i class="far fa-file-alt"></i></a></td>';
                                    $html .= '<td><a href="" class="btn btn-outline-secondary"><i class="fas fa-tag"></i></a></td>';
                                    
                                    $html .= '</tr>';
                                    echo $html;

                                }
                                $ref = $value->reference;
                            }

                    ?> 
                </tbody>
            </div>
        </div>
    </div>
</div>