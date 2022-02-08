<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_area extends CI_Controller
{


	public function add_cta()
	{

		$this->form_validation->set_rules('cta_textarea', 'CTA Text Area ', 'required');
		$this->form_validation->set_rules('cta_button', 'Button', 'required');
		$this->form_validation->set_rules('cta_button_link', ' Button Link', 'required');

		if ($this->form_validation->run() == true){

			$reg['cta_textarea'] = ($this->input->post('cta_textarea', true));
			$reg['cta_button'] = ($this->input->post('cta_button', true));
			$reg['cta_button_link'] = ($this->input->post('cta_button_link', true));

		//	print("<pre>" . print_r($reg, true) . "</pre>");exit;

			$success = $this->db->insert('cta_area', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/CTA_area/cta_list"); // Redirecting To Other Page
			}
		}
		$this->load->view('admin-view/add_cta_area');
	}


    public function cta_list()
    {
        $cta="SELECT * FROM cta_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

    $this->load->view('admin-view/cta_area_list',$data);
    }

	public function edit_cta($cta_id)
	{

		if ($cta_id) {

			$query = $this->db->query("select * from cta_area where id = $cta_id limit 1 ");
			$cta_area = $query->row();

			if (!empty($cta_area)) {
				$data['cta_textarea_from_db'] = $cta_area->cta_textarea;
				$data['cta_button_from_db'] = $cta_area->cta_button;
				$data['cta_button_link_from_db'] = $cta_area->cta_button_link;
			}
		}

		$this->form_validation->set_rules('cta_textarea', 'CTA Text Area', 'required');
		$this->form_validation->set_rules('cta_button', 'Button', 'required');
		$this->form_validation->set_rules('cta_button_link', 'Button Link', 'required');

		if ($this->form_validation->run() == true) {
			$cta['cta_textarea'] = ($this->input->post('cta_textarea', true));
			$cta['cta_button'] = ($this->input->post('cta_button', true));
			$cta['cta_button_link'] = ($this->input->post('cta_button_link', true));

			$success = $this->db->update('cta_area', $cta, array('id' => $cta_id));    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Edited successfully");
				redirect("admin/CTA_area/cta_list"); // Redirecting To Other Page
			}
		}

		$this->load->view('admin-view/edit-cta_area', $data);
	}

	public function delete_cta($dlt_cta)
	{

		if ($dlt_cta) {
			$this->db->delete('cta_area', array('id' => $dlt_cta));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/CTA_area/cta_list"); // Redirecting To Other Page

		}
	}


}
