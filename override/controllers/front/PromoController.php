<?php
class PromoControllerCore extends FrontController
{
public $php_self = 'promo';

    public function initContent(){

        $datas['magasins'] = $this->loadMagasins();
        $datas['items'] = $this->loadItems();
        $datas['options'] = $this->loadOptions();

        $datas['magasins'] = (array) $datas['magasins'];
        $datas['items'] = (array) $datas['items'];
        $datas['options'] = (array) $datas['options'];

        // echo "<pre>";
        // var_dump($datas);
        // echo "</pre>";

        $this->context->smarty->assign(
        array(
        'magasins' => $datas['magasins'],
        'items' => $datas['items'],
        'options' => $datas['options'],
        )
    );

    parent::initContent();
        $this->setTemplate('promo');
    }

    public function loadMagasins(){

        // $magasin = @file_get_contents('https://portail.vents-et-marees.com/wp-json/wp/v2/magasin-vm');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://portail.vents-et-marees.com/wp-json/wp/v2/magasin-vm');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $magasin = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return json_decode($magasin,true);

    }

    public function loadItems(){

        // $items = @file_get_contents('https://portail.vents-et-marees.com/wp-json/wp/v2/promotions-magasins');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://portail.vents-et-marees.com/wp-json/wp/v2/promotions-magasins/?per_page=100');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $items = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $items = json_decode($items, true);

                        return $items;

    }

    public function loadOptions(){

        // $items = @file_get_contents('https://portail.vents-et-marees.com/wp-json/wp/v2/promotions-magasins');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://portail.vents-et-marees.com/wp-json/wp/v2/optionsvm');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $items = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $items = json_decode($items, true);

                        return $items;

    }

}
