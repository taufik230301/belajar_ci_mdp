<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bendahara extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['tittle'] ="Bendahara";
        $this->load->view('home_bendahara', $data);
    }
}