<?php 

// echo "<pre>";
// var_dump($items);
// echo "</pre>";


?>


<div class="container">
    <div class="row">
        <div class="col-12 table table-responsive">
            <a href="<?php echo base_url('preparateur') ?>">Retour</a>
            <table class="table table-hover">
                <thead>
                    <th>#</th>
                    <th>Valide</th>
                    <th>Remboursé</th>
                    <th>Designation</th>
                    <th>Quantité</th>
                    <th>Poid</th>
                    <th>Unité/Lot</th>
                    <th>Poid Total</th>
                    <th>Unité Total</th>
                </thead>
                <tbody>
                    <?php 

                        $poidTotal = 0;
                        $totalUnite = 0;

                        foreach($items as $value){

                                $poidTotal = $value->product_quantity * $value->product_weight;
                                $totalUnite = $value->product_quantity * $value->value;
                                
                                
                                if($value->product_id == 184){
                                    $html = '<tr style="background-color:rgba(255, 0, 0, 0.27);">';
                                }else{
                                    $html = '<tr>';
                                }
                                $html .= '<td>'.$value->product_id.'</td>';
                                if($value->is_check == 1){
                                    $html .= '<td><input type="checkbox" class="inputDetail" value="'.$value->id_order_detail.'" checked></td>';
                                }else{
                                    $html .= '<td><input type="checkbox" class="inputDetail" value="'.$value->id_order_detail.'"></td>';
                                }
                                if($value->is_refund == 1){
                                    $html .= '<td><input type="checkbox" class="inputRefundDetail" value="'.$value->id_order_detail.'" checked></td>';
                                }else{
                                    $html .= '<td><input type="checkbox" class="inputRefundDetail" value="'.$value->id_order_detail.'"></td>';
                                }
                                $html .= '<td>'.$value->product_name.'</td>';
                                $html .= '<td>'.$value->product_quantity.'</td>';
                                $html .= '<td>'.round($value->product_weight,2).'</td>';
                                $html .= '<td>'.$value->value.'</td>';
                                $html .= '<td>'.$poidTotal.'</td>';
                                $html .= '<td>'.$totalUnite.'</td>';
                                
                                $html .= '</tr>';

                            echo $html;


                        }

                    ?> 
                </tbody>
                </table>
            </div>

            <div class="col-12">
                <form method="post">
                        <input type="hidden" name="id_order" value="<?php echo $orderID; ?>">
                        <input type="submit" class="btn btn-success" value="Valider"/>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){

        $('.inputDetail').change(function(e){
            var value = e.target.value;
            console.log(e);
            $.ajax({
                url:'/modules/appvmshop/ajax/updateorderdetail',
                data:{id:value},
                success(response){
                    console.log('OK!');
                    console.log(response);
                }
            })
        });

        $('.inputRefundDetail').change(function(e){
            var value = e.target.value;
            console.log(e);
            $.ajax({
                url:'/modules/appvmshop/ajax/refundorderdetail',
                data:{id:value},
                success(response){
                    console.log('OK!');
                    console.log(response);
                }
            })
        });

    })

</script>