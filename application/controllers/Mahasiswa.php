<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }
	
	public function index()
	{
        $data['title'] = 'hello ricky';
        $data['hasil']=$this->m_mahasiswa->TampilMahasiswa();
		$this->load->view('mahasiswa/v_index', $data);
	}
}
