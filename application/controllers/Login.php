<?php 

class Login extends CI_Controller{

    function index(){
        $this->load->view('login/v_index');
    }

    function cek_login(){
        $email = $this->input->post('email');
        var_dump($email);

    }

}


?>