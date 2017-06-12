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
        var_dump($_REQUEST);

        $this->load->model('insert_data');

        $fname = $this->input->post('fName');
        $lname = $this->input->post('lName');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $data = array(
            'firstname'=>$fname,
            'lastname'=>$lname,
            'email'=>$email,
            'password'=>$password
        );

        $this->inser_data->insert($data);
    }

}
