<?php

class Configurateur extends CI_Controller{

    public function index(){

        $datas['products']['presentation'] = $this->prestashop->products(115);

        // echo "<pre>";
        // var_dump($datas);
        // echo "</pre>";

        $this->theme->get_header();

            $this->load->view('configurateur/configurateur', $datas);

        $this->theme->get_footer();

    }

    public function before_add_cart(){

        $this->theme->get_header();

        if($this->session->userdata('id_customer')){

            $this->prestashop->create_cart();

            $this->load->view('configurateur/addcartsuccess');

        }else{

            if($this->input->post('submitLogin')){

                $return = $this->prestashop->login($this->input->post('email'),$this->input->post('password'));
                if($return){
                    $this->session->set_userdata('id_customer', $return->id_customer);
                    $this->prestashop->create_cart();
                    $this->load->view('configurateur/addcartsuccess');
                }else{

                    $data['error'] = 'Mauvais Login / Mot de passe';
                    $this->load->view('users/login',$data);

                }


            }else{
                $this->load->view('users/login');
            }


        }

        
        $this->theme->get_footer();


    }

    public function cart(){

        $datas['items'] = $this->cart->get_cart();

        if($this->input->post()){
            
        }
        
        $this->theme->get_header();

            $this->load->view('configurateur/panier',$datas);

        $this->theme->get_footer();

    }

    public function order(){
        
        $this->theme->get_header();

            $this->load->view('configurateur/order');

        $this->theme->get_footer();

    }

    public function retrait(){

        $this->theme->get_header();

            $this->load->view('configurateur/crenaux-retrait');

        $this->theme->get_footer();

    }

}

?>