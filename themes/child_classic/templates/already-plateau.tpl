{extends file='page.tpl'}



{block name='page_title'}
<span class="sitemap-title">{l s='Plateau à composer' d='Shop.Theme'}</span>
{/block}
{block name='page_content_container'}

<div class="container">

    <div class="row">
    
        <div class="col-12 p-5 text-center">
            <h1 class="text-primary">Oups ! Vous avez déjà une composition dans votre panier</h1>

            <a href="" class="btn btn-block btn-lg btn-success">Nouvelle composition</a>
            <a
              class                       = "remove-from-cart btn btn-block btn-lg btn-info"
              rel                         = "nofollow"
              href                        = "https://vmnoel.unet.dev/panier?delete=1&id_product=184&id_product_attribute=0&token=da81b847b089f71794762cf197b0c423"
              data-link-action            = "delete-from-cart"
              data-id-product             = "184"
              onclick = "window.location.href = '?edit=true'"
          >
            Modifier la composition
          </a>
        </div>

    </div>

</div>

{/block}