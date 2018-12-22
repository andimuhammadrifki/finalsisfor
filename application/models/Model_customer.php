<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('db_customer')
				 ->order_by('id', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("db_customer", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($id)
	{
		
		$query = $this->db->where("id", $id)
				->get("db_customer");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("db_customer", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("db_customer", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}