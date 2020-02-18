<?php

class Promo extends CI_Controller {

    public function index(){

        $this->load->model(array('promo_model'=>'promo'));

        $datas['magasins'] = $this->promo->loadMagasins();
        $datas['items'] = $this->promo->loadItems();

        // echo "<pre>";
        // var_dump($datas['items']);
        // echo "</pre>";

        $this->load->view('promo/header');
            $this->load->view('promo/content',$datas);
        $this->load->view('promo/footer');

    }

}

?>