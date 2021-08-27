<?php
Class m_mahasiswa extends CI_Model
{
  function TampilMahasiswa() 
    {
        return $this->db->from('mahasiswa')
          ->get()
          ->result();
    }  
}
?>