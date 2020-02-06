{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='checkout/_partials/steps/checkout-step.tpl'}

{block name='step_content'}
{extends file='calendrier.tpl'}



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
                    {literal}

                    $(document).ready(function() {

                        $("#calendar").zabuto_calendar({
                            language: 'fr',
                            ajax: {
                                url: 'https://vents-et-marees.com/modules/appvmshop/ajax/getDateDispo?id_shop={/literal}{$id_shop}{literal}'
                            },
                            action: function() {
                                //get the selected date
                                var date = $('#' + this.id).data('date');
                                var hasEvent = $("#" + this.id).data("hasEvent");
                                //alert the date
                                $.ajax({
                                    url: 'https://vents-et-marees.com/modules/appvmshop/ajax/getTemplate?id_shop={/literal}{$id_shop}{literal}',
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

                        $('#date_retrait').val(selectdate.toLocaleDateString('fr-FR'));
                        
                        $('#span_date_retrait').html(selectdate.toLocaleDateString('fr-FR'));
                        var selectFormatDateUS = moment(selectdate).format("YYYY-MM-DD");

                        var output = '';
                        for (let [key, value] of Object.entries(day)) {

                        if(currentDay == key || selectFormatDateUS == key){
                                output += '<div class="col-md-12">';
                                output += `<h4>${key}</h4>`;
                                output += '<div class="row">';
                                console.log(value);
                                value.forEach(function(heure) {
                                    output += '<div class="col-md-4 my-1">';
                                    output += '<a href="javascript:void(0)" onclick="$(\'#heure_retrait\').val(\'' + heure + '\');$(\'#span_heure_retrait\').html(\'' + heure + '\');$(\'#confirmDate\').show(100);" class="btn btn-info">' + heure + '</a>';
                                    output += '</div>';
                                })
                                output += '</div>';
                                output += '</div>';
                            }

                        };
                        console.log(output);
                        $('#zoneCrenaux').html(output);

                    }

                    $('#confirmDate').on('submit', function(e){
                      e.preventDefault();
                      console.log('onSubmit');
                    })

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

                    $(".readonly").on('keydown paste', function(e){
                        e.preventDefault();
                    });

                    {/literal}
                </script>

            </div>

        </div>

        <div class="col-md-12 mx-auto col-xs-12">
            <div class="row" id="zoneCrenaux"></div>
        </div>

    </div>

</div>

<form name="confirmDate" id="confirmDate" style="display:none;" method="get">

<div class="form-group row">
    <div class="col-md-9 col-md-offset-3">
        <label>Vous avez sélectionné le</label>
        <span id="span_date_retrait"></span>
        <input type="hidden" id="date_retrait" name="date_retrait" value="" class="form-control readonly" autocomplete="off" onkeypress="return false;" required>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-9 col-md-offset-3">
        <label>à</label>
        <span id="span_heure_retrait"></span>
        <input type="hidden" id="heure_retrait" name="heure_retrait" value="" class="form-control readonly" autocomplete="off" onkeypress="return false;" required>
    </div>
</div>

  <div id="hook-display-before-carrier">
    {$hookDisplayBeforeCarrier nofilter}
  </div>

  <div class="delivery-options-list">
    {if $delivery_options|count}
      <form
        class="clearfix"
        id="js-delivery"
        data-url-update="{url entity='order' params=['ajax' => 1, 'action' => 'selectDeliveryOption']}"
        method="post"
      >
        <div class="form-fields">
          {block name='delivery_options'}
            <div class="delivery-options">
              {foreach from=$delivery_options item=carrier key=carrier_id}
                  <div class="row delivery-option">
                    <div class="col-sm-1">
                      <span class="custom-radio float-xs-left">
                        <input type="radio" name="delivery_option[{$id_address}]" id="delivery_option_{$carrier.id}" value="{$carrier_id}"{if $delivery_option == $carrier_id} checked{/if}>
                        <span></span>
                      </span>
                    </div>
                    <label for="delivery_option_{$carrier.id}" class="col-sm-11 delivery-option-2">
                      <div class="row">
                        <div class="col-sm-5 col-xs-12">
                          <div class="row">
                            {if $carrier.logo}
                            <div class="col-xs-3">
                                <img src="{$carrier.logo}" alt="{$carrier.name}" />
                            </div>
                            {/if}
                            <div class="{if $carrier.logo}col-xs-9{else}col-xs-12{/if}">
                              <span class="h6 carrier-name">{$carrier.name}</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <span class="carrier-delay">{$carrier.delay}</span>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                          <span class="carrier-price">{$carrier.price}</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="row carrier-extra-content"{if $delivery_option != $carrier_id} style="display:none;"{/if}>
                    {$carrier.extraContent nofilter}
                  </div>
                  <div class="clearfix"></div>
              {/foreach}
            </div>
          {/block}
          <div class="order-options">
            <div id="delivery">
              <label for="delivery_message">{l s='If you would like to add a comment about your order, please write it in the field below.' d='Shop.Theme.Checkout'}</label>
              <textarea rows="2" cols="120" id="delivery_message" name="delivery_message">{$delivery_message}</textarea>
            </div>

            {if $recyclablePackAllowed}
              <span class="custom-checkbox">
                <input type="checkbox" id="input_recyclable" name="recyclable" value="1" {if $recyclable} checked {/if}>
                <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                <label for="input_recyclable">{l s='I would like to receive my order in recycled packaging.' d='Shop.Theme.Checkout'}</label>
              </span>
            {/if}

            {if $gift.allowed}
              <span class="custom-checkbox">
                <input class="js-gift-checkbox" id="input_gift" name="gift" type="checkbox" value="1" {if $gift.isGift}checked="checked"{/if}>
                <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                <label for="input_gift">{$gift.label}</label >
              </span>

              <div id="gift" class="collapse{if $gift.isGift} in{/if}">
                <label for="gift_message">{l s='If you\'d like, you can add a note to the gift:' d='Shop.Theme.Checkout'}</label>
                <textarea rows="2" cols="120" id="gift_message" name="gift_message">{$gift.message}</textarea>
              </div>
            {/if}

          </div>
        </div>
        <button type="submit" class="continue btn btn-primary float-xs-right" name="confirmDeliveryOption" value="1">
          {l s='Continue' d='Shop.Theme.Actions'}
        </button>
      </form>
    {else}
      <p class="alert alert-danger">{l s='Unfortunately, there are no carriers available for your delivery address.' d='Shop.Theme.Checkout'}</p>
    {/if}
  </div>

  <div id="hook-display-after-carrier">
    {$hookDisplayAfterCarrier nofilter}
  </div>

  <div id="extra_carrier"></div>



{/block}
