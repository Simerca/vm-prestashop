<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker({
  dateFormat: "dd-mm-yy",
  
}).datepicker("setDate", new Date());;
  } );
  </script>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Preparateur de commande</h1>
            <form method="get" action="<?php echo base_url(); ?>preparateur/labo">
                <div class="form-group">
                    <!-- <input id="datepicker" type="text" name="date" class="form-control" autocomplete='off' placeholder="Selectionner une date"> -->
                </div>
                <div class="form-group">
                    <select name="id_shop" class="form-control">
                        <option value="2">Begles</option>
                        <option value="3">Saint-Médard-en-Jalles</option>
                        <option value="6">Canejan</option>
                        <option value="4">Begles Fete</option>
                        <option value="5">Saint-Médard-en-Jalles Fetes</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Recherche">
                </div>
            </form>
        </div>
    </div>
</div>

