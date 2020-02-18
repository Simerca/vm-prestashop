<?php

class Theme_model extends CI_Model{

    private $theme = "vm";

    public function get_header(){

        $this->load->view('theme/'.$this->theme.'/header');
        $this->load->view('theme/'.$this->theme.'/menu');

    }

    public function get_footer(){

        $this->load->view('theme/'.$this->theme.'/footer');

    }

}

?>