<?php
/**
 *
 */
class Db_crud extends CI_ModeL
{

function cari($key){
  $this->db->like('judul', $key);
  $this->db->or_like('kondisi', $key);
  $this->db->or_like('letak', $key);
  $this->db->or_like('genre', $key);
  $this->db->or_like('kode', $key);
  $this->db->or_like('tahun', $key);
		$query = $this->db->get('kaset');
		return $query->result();
	}



}


 ?>
