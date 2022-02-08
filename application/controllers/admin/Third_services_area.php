<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Third_services_area extends CI_Controller
{


	public function add_third_srvc_area()
	{

		$this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub heading', 'required');
		$this->form_validation->set_rules('sub_heading_link', 'Sub heading Link', 'required');

		if (empty($_FILES['image']['name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}
		//	$this->form_validation->set_rules('image', 'Image', 'required');

		if ($this->form_validation->run() == true) {

			$reg['top_heading'] = ($this->input->post('top_heading', true));
			$reg['heading'] = ($this->input->post('heading', true));
			$reg['sub_heading'] = ($this->input->post('sub_heading', true));

			$config['upload_path'] = 'backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				$reg['image'] = $sdata['file_name'];
			}
			//$reg['image'] = ($this->input->post('image', true));

			//print("<pre>" . print_r($reg, true) . "</pre>");exit;

			$success = $this->db->insert('third_service_area', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/Third_services_area/third_srvc_area_list"); // Redirecting To Other Page
			}
		}
		$this->load->view('admin-view/add_third_services_area');
	}


	public function third_srvc_area_list()
	{
		$cta = "SELECT * FROM third_service_area";
		$query = $this->db->query($cta);
		// $data = $query->row();
		$data['result'] = $query->result_array();

		$this->load->view('admin-view/third_services_area_list', $data);
	}

	public function edit_third_srvcs_area($third_area_id)
	{

		if ($third_area_id) {

			$query = $this->db->query("select * from third_service_area where id = $third_area_id limit 1 ");
			$third_area = $query->row();

			if (!empty($third_area)) {
				$data['top_heading_from_db'] = $third_area->top_heading;
				$data['heading_from_db'] = $third_area->heading;
				$data['heading_link_from_db'] = $third_area->heading_link;
				$data['sub_heading_from_db'] = $third_area->sub_heading;
				$data['sub_heading_link_from_db'] = $third_area->sub_heading_link;
				$data['image_from_db'] = $third_area->image;
			}


			$this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
			$this->form_validation->set_rules('heading', 'Heading', 'required');
			$this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
			$this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
			$this->form_validation->set_rules('sub_heading_link', 'Sub heading Link', 'required');

			// if (empty($_FILES['image']['name'])) {
			// 	$this->form_validation->set_rules('image', 'Image', 'required');
			// }
			//$this->form_validation->set_rules('image', 'Image', 'required');

			if ($this->form_validation->run() == true) {
				$third['top_heading'] = ($this->input->post('top_heading', true));
				$third['heading'] = ($this->input->post('heading', true));
				$third['heading_link'] = ($this->input->post('heading_link', true));
				$third['sub_heading'] = ($this->input->post('sub_heading', true));
				$third['sub_heading_link'] = ($this->input->post('sub_heading_link', true));

				$config['upload_path'] = 'backend-dashboard-master/uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$data['img_up_errors'] = $this->upload->display_errors();
					echo $data['img_up_errors'];
					exit;
				} else {
					$sdata = $this->upload->data();
					unlink(FCPATH . 'backend-dashboard-master/uploads/' . $data['image_from_db']);
					$third['image'] =  $sdata['file_name'];
				}
				//$third['image'] = ($this->input->post('image', true));
				$success = $this->db->update('third_service_area', $third, array('id' => $third_area_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Third_services_area/third_srvc_area_list"); // Redirecting To Other Page
				}
			}

			$this->load->view('admin-view/edit_third_services_area', $data);
		}
	}

	public function delete_svc_trd($dlt_trd)
	{

		if ($dlt_trd) {
			$this->db->delete('third_service_area', array('id' => $dlt_trd));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Third_services_area/third_srvc_area_list"); // Redirecting To Other Page

		}
	}
}
