<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php 

    if(isset($datas)){

        $datas = json_decode($datas,true);
    }

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form-group col-12">
                <form method="get" name="edit">
                <input type="hidden" name="edit" id="edit" value="<?php if($this->input->get('edit')){echo $this->input->get('edit');}else{echo "2";} ?>" readonly>
                <input type="hidden" name="editDay" id="editDay" value="<?php if($this->input->get('editDay')){echo $this->input->get('editDay');}else{echo "1";} ?>" readonly>
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
            <form method="post">
                <div class="row">
                    <div class="form-group col-12">
                        <h4>Au magasin de</h4>
                        <select name="magasin" id="magasin" class="form-control">
                            <option value="2" <?php if($this->input->get('edit') == 2){echo "selected";} ?>>Bègles</option>
                            <option value="3" <?php if($this->input->get('edit') == 3){echo "selected";} ?>>Saint Médard En Jalles</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <h4>Si je commande le</h4>
                        <select name="day" id="day" class="form-control">
                            <option value="1" <?php if($this->input->get('editDay') == 1){echo "selected";} ?>>Lundi</option>
                            <option value="2" <?php if($this->input->get('editDay') == 2){echo "selected";} ?>>Mardi</option>
                            <option value="3" <?php if($this->input->get('editDay') == 3){echo "selected";} ?>>Mercredi</option>
                            <option value="4" <?php if($this->input->get('editDay') == 4){echo "selected";} ?>>Jeudi</option>
                            <option value="5" <?php if($this->input->get('editDay') == 5){echo "selected";} ?>>Vendredi</option>
                            <option value="6" <?php if($this->input->get('editDay') == 6){echo "selected";} ?>>Samedi</option>
                            <option value="0" <?php if($this->input->get('editDay') == 0){echo "selected";} ?>>Dimanche</option>
                        </select>
                    </div>
                    
                   
                    <div class="form-group col-12">
                        <h4>Je peux retirer le</h4>    
                    </div>
                    <?php 
                        $days = array(
                            'Lundi',
                            'Mardi',
                            'Mercredi',
                            'Jeudi',
                            'Vendredi',
                            'Samedi',
                            'Dimanche',
                        );

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

                        $html = '';
                    
                        foreach($days as $day){

                            $html .= '<div class="form-group col-12">';
                                $html .= '<h4>'.$day.'</h4>';
                                $html .= '<div class="row">';
                                    foreach($heures as $heure){

                                        $html .= '<div class="col-md-3">';
                                        
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