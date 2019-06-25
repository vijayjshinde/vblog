<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model("User_model","user_model");
    }
	
	public function login()
	{
		$this->data['postData']=$this->input->post();
		if(!empty($this->data['postData']) and isset($this->data['postData']['email']) and !empty($this->data['postData']['email']) and isset($this->data['postData']['password']) and !empty($this->data['postData']['password']))
		{
			$result=$this->user_model->loginCheck($this->data['postData']);
			if(!empty($result))
			{
				$this->session->set_userdata('userId', $result['id']);
				$this->session->set_userdata('email', $result['email']);
				$this->session->set_userdata('name', $result['firstname']." ".$result['lastname']);
				$this->session->set_userdata('user_roal', $result['user_roal']);
				redirect("blog");
			}
			else
			{
				$this->session->set_flashdata('msgError', 'Incorrect username or password');
				redirect("blog");
			}
			
		}
		else
		{
			
			$this->session->set_flashdata('msgError', 'Please enter valid username and password');
			redirect("blog");
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('blog');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */