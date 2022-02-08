<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

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

	
	public function reg_form()
    {
		

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('user_name', 'User Name', 'required');
        $this->form_validation->set_rules('gmail', 'Gmail', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');

        if ($this->form_validation->run() == true) {
            $reg['first_name'] = ($this->input->post('first_name', true));
            $reg['last_name'] = ($this->input->post('last_name', true));
            $reg['user_name'] = ($this->input->post('user_name', true));
            $reg['gmail'] = ($this->input->post('gmail', true));
            $reg['password'] = trim($this->input->post('password', true));
            $reg['confirm_password'] = trim($this->input->post('confirm_password', true));
			// print("<pre>" . print_r($reg, true) . "</pre>");exit;

            $success = $this->db->insert('registration', $reg);    //**** (query Builders class)***
            // $insstu_id = $this->db->insert_id();
            if ($success) {
                $this->session->set_flashdata('success', " registration successfully");
               // redirect("CI_login/login_system_from_ci"); // Redirecting To Other Page
            }
        }
		$this->load->view('admin-view/registration-form');
	}
}
