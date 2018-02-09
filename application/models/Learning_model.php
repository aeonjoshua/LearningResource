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

	public function get_projects()
	{
		//$pdfs = array();
		//$this->db->select("title,course,filename,path,dateuploaded");
		//$this->db->from('files');
		//$query = $this->db->get();

		/*if ($query->num_rows())
		{
			foreach ($query->result_array() as $row)
			{
				// Your data is coming from multiple rows, so need to loop on it.
				$siteData[$row['name']] = $row['value'];
			}
		}*/

		return $query->result();
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




}


























?>
