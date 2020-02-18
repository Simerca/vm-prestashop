
<script src="<?php echo base_url('assets/js/zabuto_calendar.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.min.css'); ?>">

<div class="container">

    <div class="row">

    <div class="col-md-12 text-center text-vm my-5">
    
        <h3>Sélectionner un jour de retrait</h3>
    
    </div>

    <div class="col-md-5 mx-auto col-xs-12">

        <div id="calendar"></div>

        <script type="application/javascript">
            $(document).ready(function () {
                $("#calendar").zabuto_calendar({
                    language:'fr',
                    ajax: { url:'<?php echo base_url('ajax/getDateDispoFete'); ?>'},
                    action: function () {
                        //get the selected date
                        var date = $('#' + this.id).data('date');
                        var hasEvent = $("#" + this.id).data("hasEvent");
                        //alert the date
                        $.ajax({
                            url:'<?php echo base_url('ajax/getTemplate') ?>',
                            data:{date:$('#' + this.id).data('date')},
                            success(response){
                                console.log(response);
                                response = JSON.parse(response);
                                
                                console.log(hasEvent);
                                if(hasEvent){
                                formatForm(response, date);
                                }else{
                                    $('#zoneCrenaux').html('');
                                }

                            }
                        })
                    }
                    });
            });
            window.dayTest = [];
            function formatForm(day, selectdate){

                window.dayTest = Object.keys(day).map(i => day[i]);
                // day = Object.values(day);

                console.log(day);
                selectdate = new Date(selectdate);
                console.log('selectdate');
                console.log(selectdate);
                console.log('selectdate');
                var currentDateNb = selectdate.getDay();
                console.log('currentDateNb');
                console.log(currentDateNb);
                console.log('currentDateNb');
                var selectFormatDateUS = moment(selectdate).format("YYYY-MM-DD");

				console.log('SELECT DATE US');
				console.log(selectFormatDateUS);
				console.log('SELECT DATE US');

                var currentDay = getDayFromNb(currentDateNb);

                var output = '';
                for(let [key, value] of Object.entries(day)){

                        if(currentDay == key || selectFormatDateUS == key){
                            output += '<div class="col-md-12">';
                            output += `<h4>${key}</h4>`;
                            output += '<div class="row">';
                            console.log(value);
                            value.forEach(function(heure){
                                output+= '<div class="col-md-4 my-1">';
                                output+= '<a href="<?php echo base_url('configurateur/cart'); ?>" class="btn btn-info">'+heure+'</a>';
                                output += '</div>';
                            })
                            output += '</div>';
                            output += '</div>';
                        }
                    

                };
                console.log(output);
                $('#zoneCrenaux').html(output);

            }

            function getDayFromNb(nb){

                if(nb==0){
                    return "Dimanche";
                }else if(nb==1){
                    return "Lundi"
                }else if(nb==2){
                    return "Mardi"
                }else if(nb==3){
                    return "Mercredi"
                }else if(nb==4){
                    return "Jeudi"
                }else if(nb==5){
                    return "Vendredi"
                }else if(nb==6){
                    return "Samedi"
                }

            }
        </script>

    </div>

    <div class="col-md-5 mx-auto col-xs-12">
            <div class="row" id="zoneCrenaux"></div>
    </div>

</div>
</div>