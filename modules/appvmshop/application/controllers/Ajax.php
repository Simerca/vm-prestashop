<?php

class Ajax extends CI_Controller {

    public function load_products($json = true){

        $datas = $this->prestashop->products($this->input->post('categorie_id'));
        $arrayJson = array();
        foreach($datas as $data) {

            $arrayJson[] = array(
                'product'=>$data,
                'image'=> $this->prestashop->get_product_image_url($this->prestashop->product_image($data->id_product))
            );

        }

        if(!$json){

            return $arrayJson;

        }else{
            echo json_encode($arrayJson);
        }

    }

    public function in_array_any($needles, $haystack) {
        return !empty(array_intersect($needles, $haystack));
     }

    public function has_plate(){

        $hasPlate = false;
        $products = $this->load_cart(false);
       
        $plates = $this->prestashop->products(54);
        $plateId = array();
        foreach($plates as $plate){
            $plateId[] = $plate->id_product;
        }
        // var_dump($plateId);
        // var_dump($products);
        foreach($products as $product){

            if(in_array($product->item_id, $plateId)){
                $hasPlate = true;
                break;
            }else{
                $hasPlate = false;
            }

        }

        echo json_encode($hasPlate);

    }

    public function how_many_plate($limit = 5){

        $products = $this->load_cart(false);
        $plates = $this->prestashop->products(54);
        $plateId = array();
        foreach($plates as $plate){
            $plateId[] = $plate->id_product;
        }

        $nbPlate = 0;
        foreach($products as $product){

            if(in_array($product->item_id, $plateId)){
                $nbPlate += $product->qty;
            }
        }
        // var_dump($nbPlate);
        if($nbPlate >= $limit){
            return false;
        }else{
            return true;
        }

    }

    public function add_item(){

        $this->session->set_userdata('ip', $this->input->post('user'));
        $isPlate = $this->input->post('isPlate');
        if($isPlate == "true"){
            // var_dump($this->how_many_plate());

            if($this->how_many_plate()){
                $this->cart->add_cart($this->input->post('item'), $this->input->post('qty'),$this->input->post('name'), $this->input->post('tva'), $this->input->post('price'),$this->input->post('user'));
            }else{
                echo 'false';
            }
        }else{
            $this->cart->add_cart($this->input->post('item'), $this->input->post('qty'),$this->input->post('name'), $this->input->post('tva'), $this->input->post('price'));
        }

    }

    public function load_cart($json = true){

        // $this->session->set_userdata('ip',$this->input->post('user'));

        $cart = $this->cart->get_cart();

        if($json){
            echo json_encode($cart);
        }else{
            return $cart;
        }

    }

    public function delete_cart(){

        $this->cart->empty();

    }

    public function dell_all_item(){

        $id = $this->input->get('id');
        $this->cart->delAllItem($id);

    }

    public function getDateDispo(){
        $dates = false;

        $id_shop = $this->input->get('id_shop');

        if($id_shop == 4 ||$id_shop == 6 || $id_shop == 5){
            $dates = $this->date_manager->clickDayFete($id_shop);
        }else{
            $dates = $this->date_manager->clickDay($id_shop);
        }

        
        echo json_encode($dates);

    }

    public function getDateDispoFete(){

        $dates = $this->date_manager->clickDayFete(6);
        
        echo json_encode($dates);

    }

    public function getTemplate(){

        if($this->input->get('date')){

            $id_shop = $this->input->get('id_shop');

            if($id_shop == 4 || $id_shop == 6 || $id_shop == 5){
                $day = $this->input->get('date');
                $result = $this->date_manager->getCreneauxFete($this->input->get('id_shop'),$day);
            }else{
                $day = date('w', strtotime($this->input->get('date')));
                $result = $this->date_manager->getCreneaux($this->input->get('id_shop'),$day);
            }



            echo $result;

        }

    }

    public function updateorderdetail(){

        $this->prestashop->updateOrderDetail($this->input->get('id'));

    }

    public function refundorderdetail(){

        $this->prestashop->refundOrderDetail($this->input->get('id'));

    }

}

?>