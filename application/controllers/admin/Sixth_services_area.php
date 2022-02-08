<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sixth_services_area extends CI_Controller
{


    public function add_sixth_left_area()
    {

        $this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
        $this->form_validation->set_rules('textarea', 'Textarea', 'required');

        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }
       // $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
        $this->form_validation->set_rules('sub_heading_link', 'Sub Heading Link', 'required');
        $this->form_validation->set_rules('plus', 'Plus', 'required');
        $this->form_validation->set_rules('plus_link', 'Plus Link', 'required');

        if ($this->form_validation->run() == true) {


            $reg['top_heading'] = ($this->input->post('top_heading', true));
            $reg['heading'] = ($this->input->post('heading', true));
            $reg['heading_link'] = ($this->input->post('heading_link', true));
            $reg['textarea'] = ($this->input->post('textarea', true));


            $config['upload_path'] = 'backend-dashboard-master/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                $reg['image'] = $sdata['file_name'];
            }
            //$reg['image'] =($this->input->post('image',true));
            $reg['date'] = ($this->input->post('date', true));
            $reg['sub_heading'] = ($this->input->post('sub_heading', true));
            $reg['sub_heading_link'] = ($this->input->post('sub_heading_link', true));
            $reg['plus'] = ($this->input->post('plus', true));
            $reg['plus_link'] = ($this->input->post('plus_link', true));




            $success = $this->db->insert('sixth_left_area', $reg);    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Added successfully");
                //redirect("teacher/tcr_list"); // Redirecting To Other Page
            }
        }
        $this->load->view('admin-view/add_sixth_left_area');
    }


    public function sixth_left_area_list()
    {
        $cta = "SELECT * FROM sixth_left_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

        $this->load->view('admin-view/sixth_left_area_list', $data);
    }

    public function edit_sixth_left_area($sixth_area_id)
    {

        if ($sixth_area_id) {

            $query = $this->db->query("select * from sixth_left_area where id = $sixth_area_id limit 1 ");
            $sixth_area = $query->row();

            if (!empty($sixth_area)) {

                $data['top_heading_from_db'] = $sixth_area->top_heading;
                $data['heading_from_db'] = $sixth_area->heading;
                $data['heading_link_from_db'] = $sixth_area->heading_link;
                $data['textarea_from_db'] = $sixth_area->textarea;
                $data['image_from_db'] = $sixth_area->image;
                $data['date_from_db'] = $sixth_area->date;
                $data['sub_heading_from_db'] = $sixth_area->sub_heading;
                $data['sub_heading_link_from_db'] = $sixth_area->sub_heading_link;
                $data['plus_from_db'] = $sixth_area->plus;
                $data['plus_link_from_db'] = $sixth_area->plus_link;
            }
        }

        $this->form_validation->set_rules('top_heading', 'Heading', 'required');
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
        $this->form_validation->set_rules('textarea', 'Textarea', 'required');
        
        // if (empty($_FILES['image']['name'])) {
        //     $this->form_validation->set_rules('image', 'Image', 'required');
        // }
    //$this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
        $this->form_validation->set_rules('sub_heading_link', 'Sub Heading Link', 'required');
        $this->form_validation->set_rules('plus', 'Plus', 'required');
        $this->form_validation->set_rules('plus_link', 'Plus Link', 'required');

        if ($this->form_validation->run() == true) {
            $sixth['top_heading'] = ($this->input->post('top_heading', true));
            $sixth['heading'] = ($this->input->post('heading', true));
            $sixth['heading_link'] = ($this->input->post('heading_link', true));
            $sixth['textarea'] = ($this->input->post('textarea', true));

            
            $config['upload_path'] = 'backend-dashboard-master/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $data['img_up_errors']= $this->upload->display_errors();
				echo $data['img_up_errors']; exit;
                
            } else {
                $sdata = $this->upload->data();
				unlink(FCPATH .'backend-dashboard-master/uploads/'. $data['image_from_db']);
                $sixth['image'] = $sdata['file_name'];
            }
            //$sixth['image'] = ($this->input->post('image', true));
            $sixth['date'] = ($this->input->post('date', true));
            $sixth['sub_heading'] = ($this->input->post('sub_heading', true));
            $sixth['sub_heading_link'] = ($this->input->post('sub_heading_link', true));
            $sixth['plus'] = ($this->input->post('plus', true));
            $sixth['plus_link'] = ($this->input->post('plus_link', true));

            $success = $this->db->update('sixth_left_area', $sixth, array('id' => $sixth_area_id));    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Edited successfully");
                redirect("admin/Sixth_services_area/sixth_left_area_list"); // Redirecting To Other Page
            }
        }

        $this->load->view('admin-view/edit_sixth_left_area', $data);
    }

    public function delete_svc_six_left($dlt_six_left)
	{

		if ($dlt_six_left) {
			$this->db->delete('sixth_left_area', array('id' => $dlt_six_left));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Sixth_services_area/sixth_left_area_list"); // Redirecting To Other Page

		}
	}


// left area close
//==========================================================================

//right area start



    public function add_sixth_svcs_right_area()
    {

        $this->form_validation->set_rules('top_heading', 'Top Heading', 'required');
        $this->form_validation->set_rules('textarea', 'Textarea', 'required');
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('heading_link', 'Heading Link', 'required');

        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }
       // $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');
        if ($this->form_validation->run() == true) {


            $reg['top_heading'] = ($this->input->post('top_heading', true));
            $reg['textarea'] = ($this->input->post('textarea', true));
            $reg['heading'] = ($this->input->post('heading', true));
            $reg['heading_link'] = ($this->input->post('heading_link', true));


            $config['upload_path'] = 'backend-dashboard-master/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                $reg['image'] =  $sdata['file_name'];
            }
            //$reg['image'] =($this->input->post('image',true));
            $reg['sub_heading'] = ($this->input->post('sub_heading', true));


            $success = $this->db->insert('sixth_right_area', $reg);    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Added successfully");
                redirect("/admin/Sixth_services_area/sixth_right_svcs_area_list"); // Redirecting To Other Page
            }
        }
        $this->load->view('admin-view/add_sixth_right_area');
    }


    public function sixth_right_svcs_area_list()
    {
        $cta = "SELECT * FROM sixth_right_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

        $this->load->view('admin-view/sixth_right_area_list', $data);
    }

    public function edit_sixth_right_svcs_area($sixth_area_id)
    {

        if ($sixth_area_id) {

            $query = $this->db->query("select * from sixth_right_area where id = $sixth_area_id limit 1 ");
            $sixth_area = $query->row();

            if (!empty($sixth_area)) {

                $data['top_heading_from_db'] = $sixth_area->top_heading;
                $data['textarea_from_db'] = $sixth_area->textarea;
                $data['heading_from_db'] = $sixth_area->heading;
                $data['heading_link_from_db'] = $sixth_area->heading_link;
                $data['image_from_db'] = $sixth_area->image;
                $data['sub_heading_from_db'] = $sixth_area->sub_heading;
            }
        }

        $this->form_validation->set_rules('top_heading', 'Heading', 'required');
        $this->form_validation->set_rules('textarea', 'Textarea', 'required');
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('heading_link', 'Heading Link', 'required');
        
        // if (empty($_FILES['image']['name'])) {
        //     $this->form_validation->set_rules('image', 'Image', 'required');
        // }
    //$this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('sub_heading', 'Sub Heading', 'required');

        if ($this->form_validation->run() == true) {
            $sixth['top_heading'] = ($this->input->post('top_heading', true));
            $sixth['textarea'] = ($this->input->post('textarea', true));
            $sixth['heading'] = ($this->input->post('heading', true));
            $sixth['heading_link'] = ($this->input->post('heading_link', true));

            
            $config['upload_path'] = 'backend-dashboard-master/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $data['img_up_errors']= $this->upload->display_errors();
				echo $data['img_up_errors']; exit;

            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH .'backend-dashboard-master/uploads/'. $data['image_from_db']);
                $sixth['image'] =  $sdata['file_name'];
            }
            //$sixth['image'] = ($this->input->post('image', true));
            $sixth['sub_heading'] = ($this->input->post('sub_heading', true));

            $success = $this->db->update('sixth_right_area', $sixth, array('id' => $sixth_area_id));    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Edited successfully");
                redirect("admin/Sixth_services_area/sixth_right_svcs_area_list"); // Redirecting To Other Page
            }
        }

        $this->load->view('admin-view/edit_sixth_right_area', $data);
    }

    public function delete_svc_six_right($dlt_six_right)
	{

		if ($dlt_six_right) {
			$this->db->delete('sixth_right_area', array('id' => $dlt_six_right));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Sixth_services_area/sixth_right_svcs_area_list"); // Redirecting To Other Page

		}
	}
}



