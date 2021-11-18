<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketua extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['tittle'] ="Ketua";
        $this->load->view('home_ketua', $data);
    }
}