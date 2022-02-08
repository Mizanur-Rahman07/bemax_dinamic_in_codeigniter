<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fifth_services_area extends CI_Controller
{


	public function add_fifth_srvc_area()
	{
        
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub heading', 'required');
		$this->form_validation->set_rules('button', 'Button', 'required');
		$this->form_validation->set_rules('button_link', 'Button Link', 'required');

        
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }
		//$this->form_validation->set_rules('image', 'Image', 'required');

		 if ($this->form_validation->run() == true){

			$reg['heading'] =($this->input->post('heading',true));
			$reg['sub_heading'] =($this->input->post('sub_heading',true));
			$reg['button'] = ($this->input->post('button',true));
			$reg['button_link'] = ($this->input->post('button_link',true));

			$config['upload_path'] ='backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				//$reg['image'] = $config['upload_path'] . $sdata['file_name'];
				$reg['image'] = $sdata['file_name'];
			}

			//print("<pre>" . print_r($reg, true) . "</pre>");exit;

			$success = $this->db->insert('fifth_service_area', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/Fifth_services_area/fifth_srvc_area_list"); // Redirecting To Other Page
			}
		}
		$this->load->view('admin-view/add_fifth_services_area');
	}


    public function fifth_srvc_area_list()
    {
        $cta="SELECT * FROM fifth_service_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

    $this->load->view('admin-view/fifth_services_area_list',$data);
    }

	public function edit_fifth_srvcs_area($fifth_area_id)
	{

		if ($fifth_area_id) {

			$query = $this->db->query("select * from fifth_service_area where id = $fifth_area_id limit 1 ");
			$fifth_area = $query->row();

			if (!empty($fifth_area)) {

				$data['heading_from_db'] = $fifth_area->heading;
				$data['sub_heading_from_db'] = $fifth_area->sub_heading;
				$data['button_from_db'] = $fifth_area->button;
				$data['button_link_from_db'] = $fifth_area->button_link;
				$data['image_from_db'] = $fifth_area->image;
			}
		}

		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
		$this->form_validation->set_rules('button', 'Button', 'required');
		$this->form_validation->set_rules('button_link', 'Button Link', 'required');
		 
        // if (empty($_FILES['image']['name'])) {
        //     $this->form_validation->set_rules('image', 'Image', 'required');
        // }
		//$this->form_validation->set_rules('image', 'Image', 'required');

		if ($this->form_validation->run() == true) {
			$fifth['heading'] = ($this->input->post('heading', true));
			$fifth['sub_heading'] = ($this->input->post('sub_heading', true));
			$fifth['button'] = ($this->input->post('button', true));
			$fifth['button_link'] = ($this->input->post('button_link', true));

			
			$config['upload_path'] ='backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$data['img_up_errors']= $this->upload->display_errors();
				echo $data['img_up_errors']; exit;

			} else {
				$sdata = $this->upload->data();
				unlink(FCPATH .'backend-dashboard-master/uploads/'. $data['image_from_db']);
				$fifth['image'] = $sdata['file_name'];
			}
			//$fifth['image'] = ($this->input->post('image', true));
			$success = $this->db->update('fifth_service_area', $fifth, array('id' => $fifth_area_id));    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Edited successfully");
				redirect("admin/Fifth_services_area/fifth_srvc_area_list"); // Redirecting To Other Page
			}
		}

		$this->load->view('admin-view/edit_fifth_services_area', $data);
	}

	public function delete_svc_fifth($dlt_fifth)
	{

		if ($dlt_fifth) {
			$this->db->delete('fifth_service_area', array('id' => $dlt_fifth));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Fifth_services_area/fifth_srvc_area_list"); // Redirecting To Other Page

		}
	}

}
