<?php

class Promo_model extends CI_Model {

    public function loadMagasins(){

        $magasin = file_get_contents('https://portail.vents-et-marees.com/wp-json/wp/v2/magasin-vm');

        return json_decode($magasin);

    }

    public function loadItems(){

        $items = file_get_contents('https://portail.vents-et-marees.com/wp-json/wp/v2/promotions-magasins');

        $items = json_decode($items);

                        return $items;

    }

}

?>