<?php
class CalendrierControllerCore extends FrontController
{
public $php_self = 'calendrier';

    public function initContent(){
        $this->context->smarty->assign(
        array(
        'variableSmarty1' => 'Prueba 1',
        'variableSmarty2' => 'Prueba 2',
        )
    );

    parent::initContent();
    
    if(isset($_POST['packPrice'])){
        var_dump($_POST['packPrice']);
        $update = Db::getInstance()->update('product_shop', array('price'=>$_POST['packPrice']), 'id_product = 184');
    }

        $this->setTemplate('calendrier');
    }

}