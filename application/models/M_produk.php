<?php
Class M_produk extends CI_Model
{

    function getProduk() 
    {
        $result = $this->db->get('produk')->result();
        return $result;
    }
    function save($nama_produk, $harga_produk){
        $data = array(
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
        );
        $result =  $this->db->insert('produk',$data);
        return $result;
    }
    function getDetail($id){
        $data = array(
            'id' => $id
        );
        $result = $this->db->get_where('produk',$data);
        return $result;
    }

    function update_data($where,$data,$table)
    {
        $this->db->where($where);
		$this->db->update($table,$data);
    }

    function deleteData($id){
        $data = array(
            'id' => $id
        );
        $result = $this->db->delete('produk', $data);
        return $result;

    }
}
?>