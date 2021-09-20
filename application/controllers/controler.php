<?php

class controler extends CI_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('model');
    }
    
    public function valky($naStranku,$stranka)
    {
        $this->load->library('pagination');
        $this->config->load('strankovani',TRUE);
    
        $settings=$this->config->item('strankovani');  
        $settings['per_page'] = $naStranku;  
        $settings['base_url'] = 'http://localhost/projekt2/valky/'.$naStranku.'/';
    
        $settings['total_rows'] = $this->model->totalRows(); 
        $settings['first_url'] = $settings['base_url'] . '1';
        $this->pagination->initialize($settings);
    
        $data["data"] = $this->model->getValky($stranka -1, $settings['per_page']);
        $data["main"] = "valky";
        $data["pocetNaStranku"] = $naStranku;
        $data["cisloStranky"] = $stranka;
        $this->layout->generate($data);
        //var_dump($data);
    }

    public function bitvy($id)
    {
        $data['data'] = $this->model->getBitvy($id);
        $data['main'] = 'bitvy';
        $this->layout->generate($data);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        redirect('valky/7/1');
    }

    public function zbrane()
    {
        $data['data'] = $this->model->getZbrane();
        $data['main'] = 'zbrane';
        $this->layout->generate($data);
    }

    public function vojevudce($naStranku,$stranka)
    {
   

        $this->load->library('pagination');
        $this->config->load('strankovani2',TRUE);
    
        $settings=$this->config->item('strankovani2');  
        $settings['per_page'] = $naStranku;  
        $settings['base_url'] = 'http://localhost/projekt2/vojevudce/'.$naStranku.'/';
    
        $settings['total_rows'] = $this->model->totalRows2(); 
        $settings['first_url'] = $settings['base_url'] . '1';
        $this->pagination->initialize($settings);
    
        $data["data"] = $this->model->getVojevudce($stranka -1, $settings['per_page']);
        $data["main"] = "vojevudce";
        $data["pocetNaStranku"] = $naStranku;
        $data["cisloStranky"] = $stranka;
        $this->layout->generate($data);
        
    }

    public function pridej()
    {
        $data['title'] = 'přidej';
        $data['main'] = 'pridej';
        $this->layout->generate($data);
    }

    public function pridejsend()
    {
        $this->model->pridej($this->input->post('name'));
        redirect('zeme');
    }

    public function zeme()
    {
        $data['data'] = $this->model->getZeme();
        $data['title'] = 'Země';
        $data['main'] = 'zeme';
        $this->layout->generate($data);
    }
}

