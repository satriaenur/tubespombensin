<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class _user extends CI_Model {
		public $tabel="user";
		function getall(){
			return $this->db->get($this->tabel);
		}
		function getby($query){
			return $this->db->get_where($this->tabel,$query);
		}
		function insertnew($query){
			return $this->db->insert($this->tabel,$query);
		}
		function saveUpdate($id,$query){
			$this->db->where('bat_id',$id);
			return $this->db->update($this->tabel,$query);
		}
		function deletetmp($id){
			$this->db->where('bat_id',$id);
			return $this->db->update($this->tabel,array('is_delete'=>true));
		}
		function deleteall(){
			$this->db->where('is_delete',true);
			return $this->db->delete($this->tabel);
		}
}

/* End of file _user.php */
/* Location: ./application/models/_user.php */