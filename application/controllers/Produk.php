<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
    }

	function index()
	{
        $data['title'] = 'List Produk';
        $data['produk'] = $this->m_produk->getProduk();
		$this->load->view('produk/v_index', $data);
	}

    function tambah_produk(){
        $data['title'] = 'Tambah Produk';
		$this->load->view('produk/v_insert', $data);
    }

    function save(){
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');

        $result = $this->m_produk->save($nama_produk,$harga_produk);
        
        if($result){
            redirect('produk');
        }
    }

    function edit($id){
       
        $getData = $this->m_produk->getDetail($id);
        if($getData->num_rows() > 0){
            $i = $getData->row_array();
            $data = array(
                'title' => 'Edit Data',
                'id'    => $i['id'],
                'nama_produk'  => $i['nama_produk'],
                'harga_produk'     => $i['harga_produk']
            );
            $this->load->view('produk/v_edit',$data);
        }else{
            echo "Data Was Not Found";
        }
    }

    function update(){
	    $id = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
    
        $data = array(
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk
        );
    
        $where = array(
            'id' => $id
        );
    
        $this->m_produk->update_data($where,$data,'produk');
        redirect('produk');
    }

    function delete($id){
        $result = $this->m_produk->deleteData($id);
        if($result){
            redirect('produk');
        }
    }


}
