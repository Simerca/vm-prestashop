{extends file='checkout/_partials/steps/checkout-step.tpl'} {block name='step_content'}
<div class="col-12">

    <script src="/assets/js/zabuto_calendar.js"></script>
    <script src="/assets/js/bootstrap-notify.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js" integrity="sha256-AdQN98MVZs44Eq2yTwtoKufhnU+uZ7v2kXnD5vqzZVo=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/03b1b5513b.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

    <link href="/assets/css/custom.css" rel="Stylesheet" type="text/css" />
    <script src="/assets/js/bootstrap-notify.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="/assets/css/zabuto_calendar.min.css">

    <div class="container">

        <div class="row">

            <div class="col-md-12 text-center text-vm my-5">

                <h3>Sélectionner un jour de retrait</h3>

            </div>

            <div class="col-md-12 mx-auto col-xs-12">

                <div id="calendar"></div>

                <script type="application/javascript">
                    {
                        literal
                    }

                    $(document).ready(function() {

                        $("#calendar").zabuto_calendar({
                            language: 'fr',
                            ajax: {
                                url: 'https://vmnoel.unet.dev/modules/appvmshop/ajax/getDateDispo'
                            },
                            action: function() {
                                //get the selected date
                                var date = $('#' + this.id).data('date');
                                var hasEvent = $("#" + this.id).data("hasEvent");
                                //alert the date
                                $.ajax({
                                    url: 'https://vmnoel.unet.dev/modules/appvmshop/ajax/getTemplate',
                                    type: 'get',
                                    data: {
                                        date: $('#' + this.id).data('date')
                                    },
                                    success(response) {
                                        console.log(response);
                                        response = JSON.parse(response);

                                        console.log(hasEvent);
                                        if (hasEvent) {
                                            formatForm(response, date);
                                        } else {
                                            $('#zoneCrenaux').html('');
                                        }

                                    }
                                })
                            }
                        });
                    });
                    window.dayTest = [];

                    function formatForm(day, selectdate) {

                        window.dayTest = Object.keys(day).map(i => day[i]);
                        // day = Object.values(day);

                        console.log(day);
                        selectdate = new Date(selectdate);
                        var currentDateNb = selectdate.getDay();
                        console.log('currentDateNb');
                        console.log(currentDateNb);
                        console.log('currentDateNb');

                        var currentDay = getDayFromNb(currentDateNb);

                        console.log('SELECT DATE');
                        console.log(selectdate.toLocaleDateString('fr-FR'))
                        console.log('SELECT DATE');

                        $('#date_retrait').val(selectdate.toLocaleDateString('fr-FR'))

                        var output = '';
                        for (let [key, value] of Object.entries(day)) {

                            if (currentDay == key) {
                                output += '<div class="col-md-12">';
                                output += `<h4>${key}</h4>`;
                                output += '<div class="row">';
                                console.log(value);
                                value.forEach(function(heure) {
                                    output += '<div class="col-md-4 my-1">';
                                    output += '<a href="javascript:void(0)" onclick="$(\'#heure_retrait\').val(\'' + heure + '\')" class="btn btn-info">' + heure + '</a>';
                                    output += '</div>';
                                })
                                output += '</div>';
                                output += '</div>';
                            }

                        };
                        console.log(output);
                        $('#zoneCrenaux').html(output);

                    }

                    function getDayFromNb(nb) {

                        if (nb == 0) {
                            return "Dimanche";
                        } else if (nb == 1) {
                            return "Lundi"
                        } else if (nb == 2) {
                            return "Mardi"
                        } else if (nb == 3) {
                            return "Mercredi"
                        } else if (nb == 4) {
                            return "Jeudi"
                        } else if (nb == 5) {
                            return "Vendredi"
                        } else if (nb == 6) {
                            return "Samedi"
                        }

                    }

                    {
                        /literal}
                </script>

            </div>

        </div>

        <div class="col-md-12 mx-auto col-xs-12">
            <div class="row" id="zoneCrenaux"></div>
        </div>

    </div>

</div>

<div class="form-group row">
    <div class="col-md-9 col-md-offset-3">
        <label for="date_retrait">{l s='Date retrait' d='Shop.Theme.Checkout'}</label>
        <input type="text" id="date_retrait" name="date_retrait" value="" class="form-control" readonly required>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-9 col-md-offset-3">
        <label for="use_same_address">{l s='Heure de retrait' d='Shop.Theme.Checkout'}</label>
        <input type="text" id="heure_retrait" name="heure_retrait" value="" class="form-control" readonly required>
    </div>
</div>

{/block}