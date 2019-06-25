<?php
class User_model extends CI_Model
{
   // your model
    function __construct()
    {
        parent::__construct();
    }
   
	public function loginCheck($postData)
	{
		$condition = array('email' =>$postData['email'] ,'password'=>$postData['password'],'user_status'=>'A');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row_array();	   
	}
	
}

?>