<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Anggota extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('model_anggota');
    }

    public function index()
	{
        $data['anggota'] = $this->model_anggota->get_anggota();
		$this->load->view('home_anggota', $data);
    }

    public function tambah(){
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $tempat_lahir = $this->input->post('tempat_lahir');  
      $tanggal_lahir = $this->input->post('tanggal_lahir');
      $jenis_kelamin = $this->input->post('jenis_kelamin'); 
      $pekerjaan = $this->input->post('pekerjaan'); 
      $status = $this->input->post('status');  
      $tanggal_masuk = $this->input->post('tanggal_masuk'); 
      $username = $this->input->post('username'); 
      $password = $this->input->post('password'); 
      $hak_akses = $this->input->post('hak_akses'); 

    //   echo $nama;
    //   echo "</br>";
    //   echo $alamat;
    //   echo "</br>";
    //   echo $tempat_lahir;
    //   echo "</br>";
    //   echo $tanggal_lahir;
    //   echo "</br>";
    //   echo $jenis_kelamin;
    //   echo "</br>";
    //   echo $pekerjaan;
    //   echo "</br>";
    //   echo $status;
    //   echo "</br>";
    //   echo $tanggal_masuk;
    //   echo "</br>";
    //   echo $username;
    //   echo "</br>";
    //   echo $password;
    //   echo "</br>";
    //   echo $hak_akses;
    //   die();
    $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'tempat_lahir' => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'jenis_kelamin' => $jenis_kelamin,
        'pekerjaan' => $pekerjaan,
        'status' => $status,
        'tanggal_masuk' => $tanggal_masuk,
        'username' => $username,
        'password' => $password,
        'hak_akses' => $hak_akses
    );

    $this->model_anggota->tambah_anggota($data);
    redirect('anggota/index');

    }

    public function edit($id){
    $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $tempat_lahir = $this->input->post('tempat_lahir');  
      $tanggal_lahir = $this->input->post('tanggal_lahir');
      $jenis_kelamin = $this->input->post('jenis_kelamin'); 
      $pekerjaan = $this->input->post('pekerjaan'); 
      $status = $this->input->post('status');  
      $tanggal_masuk = $this->input->post('tanggal_masuk'); 
      $username = $this->input->post('username'); 
      $password = $this->input->post('password'); 
      $hak_akses = $this->input->post('hak_akses');
    //     echo $nama;
    //   echo "</br>";
    //   echo $alamat;
    //   echo "</br>";
    //   echo $tempat_lahir;
    //   echo "</br>";
    //   echo $tanggal_lahir;
    //   echo "</br>";
    //   echo $jenis_kelamin;
    //   echo "</br>";
    //   echo $pekerjaan;
    //   echo "</br>";
    //   echo $status;
    //   echo "</br>";
    //   echo $tanggal_masuk;
    //   echo "</br>";
    //   echo $username;
    //   echo "</br>";
    //   echo $password;
    //   echo "</br>";
    //   echo $hak_akses;
    //   die(); 
    $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'tempat_lahir' => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'jenis_kelamin' => $jenis_kelamin,
        'pekerjaan' => $pekerjaan,
        'status' => $status,
        'tanggal_masuk' => $tanggal_masuk,
        'username' => $username,
        'password' => $password,
        'hak_akses' => $hak_akses
    );

    $this->model_anggota->edit_anggota($data, $id);
    redirect('anggota/index');

    }
    
}