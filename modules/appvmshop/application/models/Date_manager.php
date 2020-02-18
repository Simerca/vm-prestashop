<?php

class Date_manager extends CI_Model {

    public function clickDay($id_shop){

        $today = date('Y-m-d H:i');
        $day = date('Y-m-d');

        $todayHour = date('H', strtotime($today));

        $nbDayMax = 7;

        $date = new DateTime($day);
        // var_dump($todayHour);
        if($todayHour <= 23){

           $day = $date->modify('+2 day');
           $day = date('Y-m-d', strtotime($day->format('Y-m-d')));
           
        }

        $dateArray = array();
        for($i = 0; $i < $nbDayMax; $i ++) {

            // $date = new DateTime($day);
            
            $isWeekDate = $date->format('Y-m-d');

            if(!$this->isWeekend($isWeekDate)){

            $dayNum = date('w');
                
            $crenaux = $this->getCreneaux($id_shop,$dayNum);

            // if(!empty($crenaux)){

            $dateArray[] = array(
                'date'=>$day,
                'badge'=>true,
                'title'=>'',
                'body'=>$this->load->view('configurateur/modal-retrait',null, true),
                'footer'=>'',
                'classname'=>array('badge','badge-success')
            );

            // }
            
            }

            $day = $date->modify('+1 day');
            $day = $day->format('Y-m-d');

        }

        return $dateArray;

    }

    public function clickDayFete($mag){

        $today = date('Y-m-d H:i');
        $todayWithoutHeure = date('Y-m-d');
        $day = date('Y-m-d');

        $todayHour = date('H', strtotime($today));

        $nbDayMax = 7;

        $date = new DateTime($day);
        // var_dump($todayHour);
        if($todayHour <= 23){

           $day = $date->modify('+2 day');
           $day = date('Y-m-d', strtotime($day->format('Y-m-d')));
           
        }

        $allDate = $this->db->where('id_magasin', $mag)
                            ->where('jour', $todayWithoutHeure)
                            ->get('magasin_retrait')
                            ->row();

      

        // var_dump($mag);

        $dateS = json_decode($allDate->heures, true); 
        $dateArray = array();
        foreach($dateS as $key => $dateSS) {

            // var_dump($dateSS);
            // var_dump($key);

            // $date = new DateTime($day);
            
            $isWeekDate = $date->format('Y-m-d');


            $dateArray[] = array(
                'date'=>date('Y-m-d', strtotime($key)),
                'badge'=>true,
                'title'=>'',
                'body'=>$this->load->view('configurateur/modal-retrait',null, true),
                'footer'=>'',
                'classname'=>array('badge','badge-success')
            );
            

        }

        return $dateArray;

    }

    public function isWeekend($date) {
        return (date('N', strtotime($date)) == 1);
    }

    public function addCrenaux($magasin, $jour, $heures){

        $array = array(
            'id_magasin'=>$magasin,
            'jour'=>$jour,
            'heures'=>json_encode($heures)
        );

        $_exist = $this->db->where('id_magasin',$magasin)
                            ->where('jour', $jour)
                            ->get('magasin_retrait')
                            ->row();
        if($_exist){
            $this->db->where('id_magasin',$magasin)
                    ->where('jour',$jour)
                    ->update('magasin_retrait',$array);
        }else{
            $this->db->insert('magasin_retrait', $array);
        }

    }

    public function getCreneaux($magasin,$day){


        $return = $this->db->where('id_magasin',$magasin)
                            ->where('jour', $day)
                            ->get('magasin_retrait')
                            ->row();

        if($return){
            return $return->heures;
        }

    }

    public function getCreneauxFete($magasin,$day){

        $today = date('Y-m-d');

        $return = $this->db->where('id_magasin',$magasin)
                            ->where('jour', $today)
                            ->get('magasin_retrait')
                            ->row();

        // echo "<pre>";
        // var_dump($return);
        // echo "</pre>";

        $return = json_decode($return->heures);
        foreach($return as $key => $ret){

            
            $day = date('d-m-Y', strtotime($day));
            // var_dump($day);
            // var_dump($key);

            if($key == $day){
                $key = date('Y-m-d', strtotime($key));
                $array = array();
                $array[$key] = $ret;
                return json_encode($array);
            }

        }

    }

    public function getCreneauxFeteAdmin($magasin,$day){

        $today = date('Y-m-d');

        $return = $this->db->where('id_magasin',$magasin)
                            ->where('jour', $today)
                            ->get('magasin_retrait')
                            ->row();

        // echo "<pre>";
        // var_dump($return);
        // echo "</pre>";

        $return = json_decode($return->heures);
        $array = array();
        foreach($return as $key => $ret){

            
                $array[$key] = $ret;
                
                
            }
            return json_encode($array);

    }

}