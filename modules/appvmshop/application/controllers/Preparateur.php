<?php 

class Preparateur extends CI_Controller {

    public function index(){

        $this->theme->get_header();
        
        $this->load->view('preparateur/menu');
        
        $this->theme->get_footer();
        
        
    }

    public function searchachat(){

        if($this->input->post('login')){

            if($this->db->where('shop',$this->input->post('login'))->where('password',$this->input->post('password'))->get('users_admin')->row()){
                $this->session->set_userdata('login',$this->input->post('login'));
            }

        }

        if($this->session->userdata('login')){

        $this->theme->get_header();
        
        $this->load->view('preparateur/search');
        
        $this->theme->get_footer();

        }else{
                
            $this->theme->get_header();
            
            $this->load->view('preparateur/login');
            
            $this->theme->get_footer();
            
        }
        
    }
    
    public function achat(){

       
            
            $data['items'] = $this->prestashop->productsOrder($this->input->get('date'), $this->input->get('id_shop'));
            
            $this->theme->get_header();
            
            $this->load->view('preparateur/interface',$data);
            
            $this->theme->get_footer();
            
        

    }

    public function searchlist(){

        $this->theme->get_header();
        
        $this->load->view('preparateur/searchlist');
        
        $this->theme->get_footer();
        

    }
    public function list(){
        
        $data['items'] = $this->prestashop->productsOrderGroupByRef($this->input->get('date'), $this->input->get('id_shop'));
    
        $this->theme->get_header();
        
        $this->load->view('preparateur/list',$data);
        
        $this->theme->get_footer();
        
    }
    
    public function order($id){
        
        if($this->input->post('id_order')){

            if($this->input->post('valider')){
                $this->prestashop->updateOrder($id, 16);
            }
            redirect(base_url('preparateur/searchlist'));

        }

        $data['items'] = $this->prestashop->productsOrderRef($id);
        $data['orderID'] = $id;
    
        $this->theme->get_header();
        
        $this->load->view('preparateur/order',$data);
        
        $this->theme->get_footer();

    }

    public function orderlabo($id){
        
        if($this->input->post('id_order')){

            if($this->input->post('valider')){
                $this->prestashop->updateOrder($id, 16);
            }
            redirect(base_url('preparateur/searchlist'));

        }

        $data['items'] = $this->prestashop->productsOrderRefLabo($id);
        $data['orderID'] = $id;
    
        $this->theme->get_header();
        
        $this->load->view('preparateur/orderlabo',$data);
        
        $this->theme->get_footer();

    }

    public function pdf(){

        $this->load->library('pdf');


  	$this->pdf->load_view('pdf');
  	$this->pdf->render();


  	$this->pdf->stream("welcome.pdf");

    }

    public function labosearchlist(){

        $this->theme->get_header();
        
        $this->load->view('preparateur/labosearchlist');
        
        $this->theme->get_footer();
        

    }

    public function labo(){

        $data['items'] = $this->prestashop->productsOrderGroupByRefLabo($this->input->get('date'), $this->input->get('id_shop'));

        $this->theme->get_header();

        $this->load->view('preparateur/labo',$data);

        $this->theme->get_footer();

    }

}

?>