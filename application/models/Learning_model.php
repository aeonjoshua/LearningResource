<?php
class Learning_model extends CI_Model {
	

	private $table = "users";
	public function add($data){

		$this->db->insert('users',$data);



	}
	public function read($condition=null) {
	
	if(isset($condition))
		{
		$this->db->like('fname',$condition);
		}

		$query = $this->db->get($this->table);

		 	
		return $query->result_array();
}
	public function deleteuser($user){
		$this->db->where('fname',$user);
		$this->db->delete($this->table);
		
	}
}
?>