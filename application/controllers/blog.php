<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model("Blog_model","blog_model");
    }	
	public function index()
	{
		$this->data['blogList']=$this->blog_model->blogList();
		$this->load->view('header',$this->data);
		$this->load->view('blog/index',$this->data);
		$this->load->view('footer',$this->data);
	}
	
	public function detail()
	{
		$id=$this->input->get("id");
		if(is_numeric($id))
		{
			$this->data['blogDetail']=$this->blog_model->blogDetail($id);
			if(!empty($this->data['blogDetail']))
			{
				$this->load->view('header',$this->data);
				$this->load->view('blog/single-blog',$this->data);
				$this->load->view('footer',$this->data);
			}
			else
			{				
				redirect("blog");
			}
		}
		else
		{
			redirect("blog");
		}
	}
	
	public function blogListAdmin()
	{
		if($this->session->userdata('user_roal'))
		{
			$this->data['blogList']=$this->blog_model->blogList();
			$this->load->view('header',$this->data);
			$this->load->view('blog/admin-blog-list',$this->data);
			$this->load->view('footer',$this->data);
		}
		else
		{			
			redirect("blog");
		}
	}
	
	public function addBlog()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$this->data['postData']=$this->input->post();
			if(!empty($this->data['postData']))
			{
				$this->form_validation->set_rules('blog_title', 'Blog Title', 'required');
				$this->form_validation->set_rules('blog_desc', 'Blog Description', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$this->data=array();
					$this->load->view('header',$this->data);
					$this->load->view('blog/add-new-blog',$this->data);
					$this->load->view('footer',$this->data);
				}
				else
				{
					if($this->blog_model->saveBlog($this->data['postData']))
					{					
						$this->session->set_flashdata('msgBlogAddSuccess', 'Blog Added successfully');
						redirect("blog/addBlog");
					}	
					else
					{					
						$this->session->set_flashdata('msgBlogAddError', 'Sorry! Please something went wrong, Please try after some time');
						redirect("blog/addBlog");
					}		
				}						
			}
			else
			{
				redirect("blog/addBlog");
			}
		}
		else
		{	
			$this->data=array();
			$this->load->view('header',$this->data);
			$this->load->view('blog/add-new-blog',$this->data);
			$this->load->view('footer',$this->data);
		}
	}
	
	public function editBlog()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$this->data['postData']=$this->input->post();
			if(!empty($this->data['postData']))
			{
				if($this->blog_model->updateBlog($this->data['postData']))
				{					
					$this->session->set_flashdata('msgBlogAddSuccess', 'Blog Updated successfully');
				}	
				else
				{					
					$this->session->set_flashdata('msgBlogAddError', 'Sorry! Please something went wrong, Please try after some time');					
				}
				if($this->session->userdata('user_roal'))
				{
					redirect("blog/blogListAdmin");
				}
				else
				{
					redirect("blog/detail?id=".$this->data['postData']['id']);
				}		
			}
			else
			{
				redirect("blog/blogListAdmin");
			}
		}
		else
		{	
			$id=$this->input->get("id");
			if(is_numeric($id))
			{
				$this->data['blogDetail']=$this->blog_model->blogDetail($id);
				if(!empty($this->data['blogDetail']))
				{
					$this->load->view('header',$this->data);
					$this->load->view('blog/edit-blog',$this->data);
					$this->load->view('footer',$this->data);
				}
				else
				{
					redirect("blog/blogListAdmin");
				}
			}
			else
			{
				redirect("blog/blogListAdmin");
			}
			
			
		}
	}
	
	
}
?>