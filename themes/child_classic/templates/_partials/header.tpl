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
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          
          <div style="padding:5px;" class="col-md-4 col-xs-12">
            <div class="dropdown">
              <a class="btn btn-sm btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Changer de magasin
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="https://accueil.vents-et-marees.com">Retourner à l'accueil</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/begles">Bordeaux Bègles</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/smj">Saint-Médard-En-Jalles</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/canejansp">Fêtes Canéjan</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/beglesp">Fêtes Bordeaux Bègles</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/smjsp">Fêtes Saint-Médard-En-Jalles</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
           <ul style="margin-bottom:0px;">
              <li><b>Prochain retrait :</b> <span id="firstTimeRetrait"></span></li>
              <li><b>Dernier retrait :</b> <span id="lastTimeRetrait"></span></li>
            </ul>
          </div>
          <div class="col-md-4 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile" style="background-color:#fff;">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline" style="color:#000000">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="h1">Bienvenue au Magasin de {$shop.name}</h3>
        </div>
        <div class=" text-center col-12 hidden-md-up">
        <ul style="margin-bottom:0px;">
              <li><b>Prochain retrait :</b><br> <span id="firstTimeRetraitM"></span></li>
              <li><b>Dernier retrait :</b><br> <span id="lastTimeRetraitM"></span></li>
            </ul>
        </div>
        <div class="col-md-12 text-center hidden-sm-down" id="_desktop_logo">
            {if $page.page_name == 'index'}
              <h1>
                <a href="{$urls.base_url}">
                  <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
                </a>
              </h1>
            {else}
                <a href="{$urls.base_url}">
                  <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
                </a>
            {/if}
        </div>
       
        <div class="col-md-12 col-sm-12 position-static">
          {hook h='displayTop'}
          <div class="clearfix"></div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
      
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="dropdown">
              <a class="btn btn-sm btn-block btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Changer de magasin
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="https://accueil.vents-et-marees.com">Retourner à l'accueil</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/begles">Bordeaux Bègles</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/smj">Saint-Médard-En-Jalles</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/canejansp">Fêtes Canéjan</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/beglesp">Fêtes Bordeaux Bègles</a>
                <a style="color:#000000!important;" class="dropdown-item text-dark" href="{$urls.shop_domain_url}/smjsp">Fêtes Saint-Médard-En-Jalles</a>
              </div>
            </div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}

<script>




{literal}

  $(document).ready(function(){


      console.log('hello World');
      $.ajax({
        url:'/modules/appvmshop/ajax/getDateDispo?id_shop={/literal}{$id_shop}{literal} ',
        success(response){
          response = JSON.parse(response);
          console.log(response);

          var firstDate = response[0];
          var lastDate = response[response.length - 1];

          console.log('Premiere Date');
          console.log(firstDate);

          firstDate = moment(firstDate.date, 'YYYY-MM-DD').lang("fr").format('ll');
          lastDate = moment(lastDate.date, 'YYYY-MM-DD').lang("fr").format('ll');

          $('#firstTimeRetrait').html(firstDate);
          $('#lastTimeRetrait').html(lastDate);
          $('#firstTimeRetraitM').html(firstDate);
          $('#lastTimeRetraitM').html(lastDate);
        }
      })

  })

{/literal}
</script>