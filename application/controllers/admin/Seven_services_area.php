<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seven_services_area extends CI_Controller
{


	public function add_seven_svcs_area()
	{

		//$this->form_validation->set_rules('test', 'Test', 'required');
		// if (empty($_FILES['image']['name'])) {
		// 	$this->form_validation->set_rules('image', 'Image', 'required');
		// }
		//$this->form_validation->set_rules('image', 'Image', 'required');

		if (!empty($_FILES['image']['name'])) {
		// if ($this->form_validation->run() == true) {
			$config['upload_path'] = 'backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				$reg['image'] =  $sdata['file_name'];
			}



			$success = $this->db->insert('seven_service_area', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/Seven_services_area/seven_srvc_area_list"); // Redirecting To Other Page
			}
		}
		$this->load->view('admin-view/add_seven_services_area');
	}


	public function seven_srvc_area_list()
	{
		$svn = "SELECT * FROM seven_service_area";
		$query = $this->db->query($svn);
		// $data = $query->row();
		$data['result'] = $query->result_array();

		$this->load->view('admin-view/seven_area_list', $data);
	}

	public function edit_seven_srvcs_area($seven_area_id)
	{

		if ($seven_area_id) {

			$query = $this->db->query("select * from seven_service_area where id = $seven_area_id limit 1 ");
			$seven_area = $query->row();

			if (!empty($seven_area)) {

				$data['image_from_db'] = $seven_area->image;
			}
		}

		// if (empty($_FILES['image']['name'])) {
		// 	$this->form_validation->set_rules('image', 'Image', 'required');
		// }
		// if ($this->form_validation->run() == true) {
			if (!empty($_FILES['image']['name'])) {
			$config['upload_path'] = 'backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$data['img_up_errors']=$this->upload->display_errors();
				echo $data['img_up_errors']; exit;
			} else {
				$sdata = $this->upload->data();
                unlink(FCPATH .'backend-dashboard-master/uploads/'. $data['image_from_db']);
				$seven['image'] = $sdata['file_name'];
			}


			$success = $this->db->update('seven_service_area', $seven, array('id' => $seven_area_id));    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Edited successfully");
				redirect("admin/Seven_services_area/seven_srvc_area_list"); // Redirecting To Other Page
			}
		}

		$this->load->view('admin-view/edit_seven_services_area', $data);
	}

	public function delete_svc_seven($dlt_seven)
	{

		if ($dlt_seven) {
			$this->db->delete('seven_service_area', array('id' => $dlt_seven));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Seven_services_area/seven_srvc_area_list"); // Redirecting To Other Page

		}
	}
}
