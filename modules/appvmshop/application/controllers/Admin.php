<?php

class Admin extends CI_Controller {

    public function ouverture(){

        $data = array();

        if($this->input->post('submit')){

            $this->date_manager->addCrenaux($this->input->post('magasin'),$this->input->post('day'),$this->input->post('heures'));

        }


        if($this->input->get('edit')){
            
            $data['datas'] = $this->date_manager->getCreneaux($this->input->get('edit'),$this->input->get('editDay'));
            
        }

        
        $this->theme->get_header();
        $this->load->view('admin/gestion_ouverture',$data);
        $this->theme->get_footer();        

    }

    public function ouverture_fete(){

        $data = array();

        if($this->input->get('edit')){
            
            $data['datas'] = $this->date_manager->getCreneauxFeteAdmin($this->input->get('edit'),$this->input->get('editDay'));
            
        }

        if($this->input->post('submit')){

            $this->date_manager->addCrenaux($this->input->post('magasin'),$this->input->post('date_commande'),$this->input->post('heures'));

        }

        $this->theme->get_header();
        $this->load->view('admin/gestion_ouverture_fete',$data);
        $this->theme->get_footer();        

    }

}

?>