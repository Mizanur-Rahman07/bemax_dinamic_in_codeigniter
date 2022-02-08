<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fourth_services_area extends CI_Controller
{


	public function add_fourth_srvc_area()
	{
        
		$this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub heading', 'required');
          
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }
		//$this->form_validation->set_rules('image', 'Image', 'required');
		$this->form_validation->set_rules('image_link', 'Image Link', 'required');

		 if ($this->form_validation->run() == true){

			$reg['top_heading'] =($this->input->post('top_heading',true));
			$reg['icon'] =($this->input->post('icon',true));
			$reg['heading'] =($this->input->post('heading',true));
			$reg['heading_link'] =($this->input->post('heading_link',true));
			$reg['sub_heading'] = ($this->input->post('sub_heading',true));

			$config['upload_path'] ='backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				$reg['image'] = $sdata['file_name'];
			}
			$reg['image_link'] = ($this->input->post('image_link', true));

			//print("<pre>" . print_r($reg, true) . "</pre>");exit;

			$success = $this->db->insert('fourth_service_area', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/Fourth_services_area/fourth_srvc_area_list"); // Redirecting To Other Page
			}
		}
		$this->load->view('admin-view/add_fourth_services_area');
	}


    public function fourth_srvc_area_list()
    {
        $cta="SELECT * FROM fourth_service_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

    $this->load->view('admin-view/fourth_services_area_list',$data);
    }

	public function edit_fourth_srvcs_area($fourth_area_id)
	{

		if ($fourth_area_id) {

			$query = $this->db->query("select * from fourth_service_area where id = $fourth_area_id limit 1 ");
			$fourth_area = $query->row();

			if (!empty($fourth_area)) {
				$data['top_heading_from_db'] = $fourth_area->top_heading;
				$data['icon_from_db'] = $fourth_area->icon;
				$data['heading_from_db'] = $fourth_area->heading;
				$data['heading_link_from_db'] = $fourth_area->heading_link;
				$data['sub_heading_from_db'] = $fourth_area->sub_heading;
				$data['image_from_db'] = $fourth_area->image;
				$data['image_link_from_db'] = $fourth_area->image_link;
			}
		}

		$this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
		$this->form_validation->set_rules('icon', 'Top Heading', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		$this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
		   
        // if (empty($_FILES['image']['name'])) {
        //     $this->form_validation->set_rules('image', 'Image', 'required');
        // }
		//$this->form_validation->set_rules('image', 'Image', 'required');

		if ($this->form_validation->run() == true) {
			$fourth['top_heading'] = ($this->input->post('top_heading', true));
			$fourth['icon'] = ($this->input->post('icon', true));
			$fourth['heading'] = ($this->input->post('heading', true));
			$fourth['heading_link'] = ($this->input->post('heading_link', true));
			$fourth['sub_heading'] = ($this->input->post('sub_heading', true));

			$config['upload_path'] ='backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$data['img_up_errors']=$this->upload->display_errors();
				echo $data['img_up_errors']; exit;

			} else {
				$sdata = $this->upload->data();
				unlink(FCPATH . 'backend-dashboard-master/uploads/'. $data['image_from_db']);
				$fourth['image'] =  $sdata['file_name'];
			}
			//$fourth['image'] = ($this->input->post('image', true));
			$fourth['image_link'] = ($this->input->post('image_link', true));
			$success = $this->db->update('fourth_service_area', $fourth, array('id' => $fourth_area_id));    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Edited successfully");
				redirect("admin/Fourth_services_area/fourth_srvc_area_list"); // Redirecting To Other Page
			}
		}

		$this->load->view('admin-view/edit_fourth_services_area', $data);
	}

	public function delete_svc_frt($dlt_frt)
	{

		if ($dlt_frt) {
			$this->db->delete('fourth_service_area', array('id' => $dlt_frt));
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
