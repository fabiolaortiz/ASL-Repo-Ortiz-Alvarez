<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
        $this->load->helper('url');
    	$this->load->view('header');
	}

	public function signupform()
    {
        $this->load->helper('url');
	    $this->load->view('sign_up');
    }

    public function signUpSubmit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname','First Name','trim|required');
        $this->form_validation->set_rules('lName','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email]');
        $this->form_validation->set_rules('password','Password',array('required' => 'You must provide a %s.'));

        if($this->form_validation->run == false)
        {
            $this->load->view('sign_up');
        }else
        {
            echo 'Success';
        }
    }

    public function create_user()
    {
        $data = array(
            'firstname' => $this->input->post('fName'),
            'lastname' => $this->input->post('lName'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );

        $this->inser_data->insert_record($data);
        $this->index();
    }

}
