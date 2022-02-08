<?php
defined('BASEPATH') or exit('No direct script access allowed');

class First_services_area extends CI_Controller
{


	public function add_first_srvc_area()
	{

		$this->form_validation->set_rules('icon', 'Icon', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('sub_heading', ' Sub Heading', 'required');
		  
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }
		//$this->form_validation->set_rules('image', ' Image', 'required');

		if ($this->form_validation->run() == true){

			$reg['icon'] = ($this->input->post('icon', true));
			$reg['heading'] = ($this->input->post('heading', true));
			$reg['sub_heading'] = ($this->input->post('sub_heading', true));

			$config['upload_path'] ='backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				$reg['image'] = $sdata['file_name'];
			}
			//$reg['image'] = ($this->input->post('image', true));

		//	print("<pre>" . print_r($reg, true) . "</pre>");exit;

			$success = $this->db->insert('first_services_area', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/first_services_area/first_srvc_area_list"); // Redirecting To Other Page
			}
		}
		$this->load->view('admin-view/add_first_services_area');
	}


    public function first_srvc_area_list()
    {
        $cta="SELECT * FROM first_services_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

    $this->load->view('admin-view/First_services_area_list',$data);
    }

	public function edit_first_svcs_area($first_area_id)
	{

		if ($first_area_id) {

			$query = $this->db->query("select * from first_services_area where id = $first_area_id limit 1 ");
			$fst_area = $query->row();

			if (!empty($fst_area)) {
				$data['icon_from_db'] = $fst_area->icon;
				$data['heading_from_db'] = $fst_area->heading;
				$data['sub_heading_from_db'] = $fst_area->sub_heading;
				$data['image_from_db'] = $fst_area->image;
			}
		}

		$this->form_validation->set_rules('icon', 'Icon', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
		// if (empty($_FILES['image']['name'])) {
        //     $this->form_validation->set_rules('image', 'Image', 'required');
        // }
	//	$this->form_validation->set_rules('image', 'Image', 'required');

		if ($this->form_validation->run() == true) {
			$fst['icon'] = ($this->input->post('icon', true));
			$fst['heading'] = ($this->input->post('heading', true));
			$fst['sub_heading'] = ($this->input->post('sub_heading', true));

			
			$config['upload_path'] ='backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				unlink(FCPATH . 'backend-dashboard-master/uploads/'. $data['image_from_db']);
				$fst['image'] =  $sdata['file_name'];
			}
			//$fst['image'] = ($this->input->post('image', true));

			$success = $this->db->update('first_services_area', $fst, array('id' => $first_area_id));    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Edited successfully");
				redirect("admin/first_services_area/first_srvc_area_list"); // Redirecting To Other Page
			}
		}

		$this->load->view('admin-view/edit_first_services_area', $data);
	}

	public function delete_svc_one($dlt_one)
	{

		if ($dlt_one) {
			$this->db->delete('first_services_area', array('id' => $dlt_one));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/First_services_area/first_srvc_area_list"); // Redirecting To Other Page

		}
	}
}
