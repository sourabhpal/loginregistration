<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function logging_in()
	{
		$this->load->model('User');
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->User->get_user($email, $password);
        if($user){
        	$this->load->view('welcome', $user);
        }
        else{
        	$this->session->set_userdata("error", 'No matching record found!');
        	$this->index();
        }
		
	}
	public function register()
	{
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        $this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|alpha");
		$this->form_validation->set_rules("password", "Password", "min_length[8]");
		$this->form_validation->set_rules("email", "Email", "is_unique[users.email]");

        if($this->form_validation->run() === FALSE){
        	$this->session->set_userdata('error', validation_errors());
        	$this->index();
        }
        else{
        	$this->load->model("User");
	        $user_details = array(
	            "first_name" => $first_name,
				"last_name" => $last_name,
				"email" => $email,	         
	            "password" => $password
	        ); 
	        $add_user = $this->User->add_user($user_details);
	        if($add_user === TRUE)
	        {
	            redirect('/');
	        }	
        }
    	
	}
	public function logoff(){
		$this->session->sess_destroy();
		redirect('/');
	}
}