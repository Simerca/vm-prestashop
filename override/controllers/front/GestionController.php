<?php
use PrestaShop\PrestaShop\Adapter\Presenter\Cart\CartPresenter;
class GestionControllerCore extends FrontController
{
public $php_self = 'gestion';

    public function initContent(){

        $presenter = new CartPresenter();
        $presented_cart = $presenter->present($this->context->cart, $shouldSeparateGifts = true);

        $sql = "SELECT `product`.`id_product`, `product`.`id_category_default`, `product`.`price`, `product_lang`.`name` 
        FROM `"._DB_PREFIX_."product_shop` as `product` 
        JOIN `"._DB_PREFIX_."product_lang` as `product_lang` ON `product_lang`.`id_product` = `product`.`id_product` 
        JOIN `"._DB_PREFIX_."category_product` as `category` ON `category`.`id_product` = `product`.`id_product` 
        WHERE `category`.`id_category` = 10 AND `id_lang` = '1' GROUP BY `product`.`id_product`";

        $result = Db::getInstance()->executeS($sql);

        if($this->context->cart->id_customer != 0){
            $userId = $this->context->cart->id_customer;
        }else{
            $userId = $this->context->cookie->id_guest;
        }
        // $result = 
        // var_dump($result);
        $this->context->smarty->assign(
        array(
        'userId'=>$userId,
        'products' => $result
        )
    );
    
    parent::initContent();

    $alreadyPlateau = false;

    foreach($presented_cart['products'] as $product){

        if($product['id_product'] == 184){

            if($this->context->cart->id_customer != 0){
                $userId = $this->context->cart->id_customer;
            }else{
                $userId = $this->context->cookie->id_guest;
            }

            $alreadyPlateau = true;
            
            $this->context->smarty->assign([
                'alreadyPlateau' => $alreadyPlateau
            ]);

        }

    }

        if($alreadyPlateau && !isset($_GET['edit'])){

            $this->setTemplate('already-plateau');

        }else{

            $this->setTemplate('plateau');

        }
    
    }

}
