<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php 

    if(isset($datas)){

        $datas = json_decode($datas,true);
        // echo "<pre>";
        // var_dump($datas);
        // echo "</pre>";

    }

?>

<div class="container">
    <div class="row">

    <div class="col-12">
            <div class="form-group col-12">
                <form method="get" name="edit">
                <input type="hidden" name="edit" id="edit" value="4" readonly>
                <input type="hidden" name="editDay" id="editDay" value="<?php echo date('Y-m-d') ?>" readonly>
                <input type="submit" value="Edit" class="btn btn-warning">
                </form>
            </div> 
        <script>
        $(document).ready(function(){
            $('#magasin').on('change',function(e){
                $('#edit').val(e.target.value); 
            });
            $('#day').on('change',function(e){
                $('#editDay').val(e.target.value); 
            });
        });
        </script>

        </div>

        <div class="col-12">
            <form method="post" action="<?php echo base_url('admin/ouverture_fete'); ?>">
                <div class="row">
                    <div class="form-group col-12">
                        <h4>Au magasin de</h4>
                        <select name="magasin" id="magasin" class="form-control">
                        <option value="4" <?php if($this->input->get('edit') == 4){echo "selected";} ?>>Begles Fetes</option>
                            <option value="5" <?php if($this->input->get('edit') == 5){echo "selected";} ?>>Saint Medart Fête</option>
                            <option value="6" <?php if($this->input->get('edit') == 6){echo "selected";} ?>>Canejan Fête</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <h4>Si je commande le</h4> 
                        <input type="date" class="form-control" id="day" value="<?php if($this->input->get('editDay')){ echo $this->input->get('editDay');} ?>" name="date_commande">
                    </div>
                    <div class="form-group col-12">
                        <h4>Je peux retirer le</h4>    
                    </div>
                    <?php

                        $begin = new DateTime( '2019-12-18' );
                        $end = new DateTime( '2020-01-01' );

                        $heures = array(
                            '06:00',
                            '06:30',
                            '07:00',
                            '07:30',
                            '08:00',
                            '08:30',
                            '09:00',
                            '09:30',
                            '10:00',
                            '10:30',
                            '11:00',
                            '11:30',
                            '12:00',
                            '12:30',
                            '13:00',
                            '13:30',
                            '14:00',
                            '14:30',
                            '15:00',
                            '15:30',
                            '16:00',
                            '16:30',
                            '17:00',
                            '17:30',
                            '18:00',
                            '18:30',
                            '19:00',
                            '19:30',
                            '20:00',
                            '20:30',
                        );

                        $interval = new DateInterval('P1D');
                        $daterange = new DatePeriod($begin, $interval ,$end);

                        $html = '';
                    
                        foreach($daterange as $day){

                            $day = $day->format("d-m-Y");

                            $html .= '<div class="form-group col-12">';
                                $html .= '<h4>'.$day.'</h4>';
                                $html .= '<div class="row">';
                                    foreach($heures as $heure){

                                        $html .= '<div class="col-md-3">';

                                        

                                        $dayUS = date('Y-m-d',strtotime($day));
                                        if(isset($datas[$day])){
                                            if(in_array($heure, $datas[$day])){
                                                $html .= '<label><input type="checkbox" name="heures['.$day.'][]" value="'.$heure.'" checked/>'.$heure.'</label>';
                                            }else{
                                                $html .= '<label><input type="checkbox" name="heures['.$day.'][]" value="'.$heure.'"/>'.$heure.'</label>';
                                            }
                                        }else{
                                            $html .= '<label><input type="checkbox" name="heures['.$day.'][]" value="'.$heure.'"/>'.$heure.'</label>';
                                        }
                                        $html .= '</div>';

                                    }
                                $html .= '</div>';
                            $html .= '</div>';

                        }

                    echo $html;
                    ?>
                    <div class="form-group">
                        <button name="submit" value="submit" type="submit" class="btn btn-success">Soumettre</button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>