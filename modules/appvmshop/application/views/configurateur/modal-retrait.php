<?php 

    $baseHeure = 8;

?>
<div class="col-12">

    <form method="post">

        <div class="form-group">

            <label for="hours">Heures de retrait</label>

            <select name="hours" class="form-control">
                <?php 
                
                    for($i = $baseHeure; $i < 18; $i ++){

                        echo '<option>'.sprintf("%02d", $i).' h</option>';

                    }

                ?>
            </select>

        </div>

    </form>

</div>