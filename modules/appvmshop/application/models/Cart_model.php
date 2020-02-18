<?php


class Cart_model extends CI_Model{

    public function __construct(){

        parent::__construct();
        // $this->session->set_userdata('ip', $this->input->ip_address());

    }

    /**
     * Simple return du panier par l'ip
     * param : null
     * return row
     */
    public function get_cart(){

        $sql = 'SELECT `cart`.*, `plate`.`id` as `order_id` FROM `prstshp_app_users_cart` as `cart`
        JOIN `prstshp_users_plate` as `plate` ON `cart`.`plate_id` = `plate`.`id`
        WHERE `plate`.`user_id` = '.$this->session->userdata('ip');
        
        $_get = $this->db->query($sql);

        return $_get->result();

    }

    /**
     * Ajout d'un item au panier, si existe Update ou Create
     * param item : array
     * param qty : int
     * return true / false
     */
    public function add_cart($item, $qty,$name, $tva = null, $price = null, $user = null){

        $user = $this->session->userdata('ip');

        $plateExist = $this->db->where('user_id', $user)
                                    ->get('users_plate')
                                    ->row();
        if($plateExist) {

            $itemExist = $this->db->where('plate_id',$plateExist->id)
                                    ->where('item_id',$item)
                                    ->get('app_users_cart')
                                    ->row();
            
            if($itemExist){

                $qtyAfter = $itemExist->qty + $qty;
                $updateItem = array(
                    'qty'=>$qtyAfter
                );
                $this->db->where('id',$itemExist->id)
                            ->update('app_users_cart',$updateItem);

            }else{
                $insert = array(
                    'plate_id'=>$plateExist->id,
                    'item_id'=>$item,
                    'name'=>$name,
                    'tva'=>$tva,
                    'price'=>$price,
                    'qty'=>$qty
                );
                $this->db->insert('app_users_cart',$insert);
            }

        }else{

            $insertPlate = array(
                'user_id'=>$user
            );
            $this->db->insert('users_plate', $insertPlate);

            $plateId = $this->db->insert_id();

            $insert = array(
                'plate_id'=>$plateId,
                'item_id'=>$item,
                'name'=>$name,
                'tva'=>$tva,
                'price'=>$price,
                'qty'=>$qty
            );
            $this->db->insert('app_users_cart',$insert);

        }

    }

    public function empty(){

        $this->db->where('user', $this->session->userdata('ip'))
            ->delete('app_users_cart');

    }

    public function delAllItem($id){

        $plateId = $this->db->where('user_id',$this->session->userdata('ip'))
                                ->get('users_plate')
                                ->row();

        $this->db->where('plate_id', $plateId->id)
                    ->where('item_id', $id)
                    ->delete('app_users_cart');

    }

}


?>