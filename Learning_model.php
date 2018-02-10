<?php
class Learning_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function showdata()
	{
		$query = $this->db->get('files');
		return $query->result_array();
	}

	public function insert_data($name, $path_name, $course, $filename, $username)
	{
		$data = array(
								'title' => $name,
								'path'  => $path_name,
								'course' => $course,
								'filename' => $filename,
								'uploader' => $_SESSION ['username']
							 		);

		$this->db->insert('files', $data);

		return $this->db->insert_id();
	}

	public function get_project($id)
	{
    $query = $this->db->get_where('files', array('id' => $id));
    $result = $query->result_array();

		return $result;
	}

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

	public function gettitle(){

		$this->db->where('fname',$user);
		$this->db->delete($this->table);

	}

	public function count_actor(){

		return $this->db->count_all('files');

	}

	public function fetch_actor($limit,$offset){

		$this->db->limit($limit,$offset);
		$query = $this->db->get('files');

			if ($query->num_rows() > 0) {

			return $query -> result();

		} else {
			return $query-> result();
		}
	}

	public function search_title($title){

			$this->db->select("*");
			$this->db->from("files");
			$this->db->like("title", $title);
			$query = $this->db->get();

			if($query->num_rows() > 0 ){
				return $query->result();

			} else {

				return $query->result();

			}


	}




}


























?>
