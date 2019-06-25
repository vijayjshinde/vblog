<?php
class Blog_model extends CI_Model
{
   // your model
    function __construct()
    {
        parent::__construct();
    }
   
	public function blogList()
	{
		$condition = array('blog_status' => "P");
		$this->db->select('blog.*,user.firstname');
		$this->db->from('blog');
		$this->db->join('user', 'blog.created_by = user.id');
		$this->db->order_by("blog.id", "desc");
		$this->db->where($condition);
		return $query = $this->db->get();
		//return $query->row_array();
	   
	}
		
	public function blogDetail($id)
	{
		$condition = array('blog.id' => $id,'blog.blog_status' => "P");
		$this->db->select('blog.*,user.firstname,user.lastname');
		$this->db->from('blog');
		$this->db->join('user', 'blog.created_by = user.id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function saveBlog($postData)
	{		
		$query="insert into blog (blog_title,blog_desc,created_by,created_dt,blog_status	) values('".str_replace("'","\'",$postData['blog_title'])."','".trim(str_replace("'","\'",$postData['blog_desc']))."',".$this->session->userdata('userId').",'".date("Y-m-d H:i:s")."','P')";
		return $this->db->query($query);
	}
	
	public function updateBlog($postData)
	{		
		$data = array('blog_title'=>$postData['blog_title'],'blog_desc' => trim($postData['blog_desc']),'updated_dt'=> date("Y-m-d H:i:s"));
		$this->db->where('id', $postData['id']);
		return $this->db->update('blog', $data);
	}
}

?>