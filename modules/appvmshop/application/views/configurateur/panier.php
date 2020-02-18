<div class="row">

    <div class="col-md-8 col-xs-12 mx-auto border bg-light p-3">

        <h5>3/ J’ajoute mon plateau au panier</h5>
        <h6>Récapitulatif de mon plateau</h6>

        <h6>Étape 3 : Vérifiez le contenu de votre composition avant de l’ajouter à votre panier</h6>
        
        <table class="table">

            <thead class="thead-dark">
                <th>Quantité</th>
                <th>Designation</th>
                <th>Prix /u</th>
                <th>Total</th>
            </thead>

            <tbody>

                <?php 
                
                    $tva55 = 0;
                    $tva20 = 0;
                    
                    foreach($items as $item){

                        if($item->tva == 5.5){
                            $tva55 += $item->price * $item->qty;
                        }
                        if($item->tva == 20){
                            $tva20 += $item->price * $item->qty;
                        }

                        $html = '<tr>';
                        $html .= '<td>'.$item->qty.'</td>';
                        $html .= '<td>'.htmlspecialchars(urldecode($item->name)).'</td>';
                        $html .= '<td>'.$item->price.' €</td>';
                        $html .= '<td>'.$item->price * $item->qty.' €</td>';
                        $html .= '</tr>';

                        echo $html;

                    }

                ?>

                <tr>
                    <td></td>
                    <td class="font-weight-bold text-right">Total TVA 5.5%</td>
                    <td><?php echo $tva55; ?> €</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="font-weight-bold text-right">Total TVA 20%</td>
                    <td><?php echo $tva20; ?> €</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="font-weight-bold text-right">Total TTC</td>
                    <td><?php echo $tva20 + $tva55; ?> €</td>
                </tr>

            </tbody>

        </table>

        <div clas="row">

            <div class="col-12 text-right">
                <a href="<?php echo base_url('configurateur'); ?>" class="btn btn-warning btn-sm">Modifier mon plateau</a>
                <form method="post" action="<?php echo base_url('configurateur/before_add_cart'); ?>">
                <button type="submit" value="ok" name="submit" class="btn btn-success btn-sm">Ajouter mon plateau au panier</button>
                </form>
            </div>

        </div>

    </div>

</div>