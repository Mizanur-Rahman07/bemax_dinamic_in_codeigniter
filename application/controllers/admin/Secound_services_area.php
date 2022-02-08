<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Secound_services_area extends CI_Controller
{


	public function add_secound_srvc_area()
	{

		$this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub heading', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		$this->form_validation->set_rules('icon_link', 'Icon Link', 'required');

		if ($this->form_validation->run() == true){

			$reg['top_heading'] = ($this->input->post('top_heading', true));
			$reg['heading'] = ($this->input->post('heading', true));
			$reg['heading_link'] = ($this->input->post('heading_link', true));
			$reg['sub_heading'] = ($this->input->post('sub_heading', true));
			$reg['icon'] = ($this->input->post('icon', true));
			$reg['icon_link'] = ($this->input->post('icon_link', true));

		//	print("<pre>" . print_r($reg, true) . "</pre>");exit;

			$success = $this->db->insert('secound_service_area', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/secound_services_area/secound_srvc_area_list"); // Redirecting To Other Page
			}
		}


		$this->load->view('admin-view/add_secound_services_area');
	}


    public function secound_srvc_area_list()
    {
        $cta="SELECT * FROM secound_service_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

    $this->load->view('admin-view/secound_services_area_list',$data);
    }

	public function edit_secound_srvcs_area($secound_area_id)
	{

		if ($secound_area_id) {

			$query = $this->db->query("select * from secound_service_area where id = $secound_area_id limit 1 ");
			$scnd_area = $query->row();

			if (!empty($scnd_area)) {
				$data['top_heading_from_db'] = $scnd_area->top_heading;
				$data['heading_from_db'] = $scnd_area->heading;
				$data['heading_link_from_db'] = $scnd_area->heading_link;
				$data['sub_heading_from_db'] = $scnd_area->sub_heading;
				$data['icon_from_db'] = $scnd_area->icon;
				$data['icon_link_from_db'] = $scnd_area->icon_link;
			}
		}

		$this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		$this->form_validation->set_rules('icon_link', 'Icon Link', 'required');

		if ($this->form_validation->run() == true) {
			$scnd['top_heading'] = ($this->input->post('top_heading', true));
			$scnd['heading'] = ($this->input->post('heading', true));
			$scnd['heading_link'] = ($this->input->post('heading_link', true));
			$scnd['sub_heading'] = ($this->input->post('sub_heading', true));
			$scnd['icon'] = ($this->input->post('icon', true));
			$scnd['icon_link'] = ($this->input->post('icon_link', true));
			$success = $this->db->update('secound_service_area', $scnd, array('id' => $secound_area_id));    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Edited successfully");
				redirect("admin/secound_services_area/secound_srvc_area_list"); // Redirecting To Other Page
			}
		}

		$this->load->view('admin-view/edit_secound_services_area', $data);
	}

	public function delete_svc_scnd($dlt_scnd)
	{

		if ($dlt_scnd) {
			$this->db->delete('secound_service_area', array('id' => $dlt_scnd));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Secound_services_area/secound_srvc_area_list"); // Redirecting To Other Page

		}
	}

}
