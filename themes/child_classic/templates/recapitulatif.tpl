{extends file='page.tpl'}

{block name='page_title'}
<span class="sitemap-title">{l s='Recap de votre plateau' d='Shop.Theme'}</span>
{/block}
{block name='page_content_container'}

<div class="container">

    <div class="row">
        <div class="col-12 my-2">
        <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
  <!-- hidden -->
  <input type="hidden" name="token" value="{$static_token}">
  <input type="hidden" name="id_product" value="184" id="product_page_product_id">
  <!-- variants, only use if you plan to have variants -->
  <!-- qty -->
  <input
    type="hidden"
    name="qty"
    id="quantity_wanted"
    value="1"
    class="input-group"
    min="1"
    max="9"
    aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"
  >
  <!-- submit -->
  <button
    class="btn btn-main btn-block add-to-cart btn-success"
    data-button-action="add-to-cart"
    type="submit"
  >
    Ajouter au panier
  </button>
</form>
        </div>
        <div class="col-12 my-2">
            <a href="plateau" class="btn btn-block btn-info">Modifier votre plateau</a>
        </div>
    </div>

</div>

{/block}