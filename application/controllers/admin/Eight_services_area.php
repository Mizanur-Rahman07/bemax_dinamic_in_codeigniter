<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eight_services_area extends CI_Controller
{

    //=============== Step One Start=========================

    public function add_step_one_area()
    {

        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }

        $this->form_validation->set_rules('image_link', 'Image Link', 'required');
        $this->form_validation->set_rules('textarea', 'Text Area', 'required');
        $this->form_validation->set_rules('f_icon', 'Facebook Icon', 'required');
        $this->form_validation->set_rules('f_icon_link', 'Facebook icon Link', 'required');
        $this->form_validation->set_rules('twiter_icon', 'Twiter Icon', 'required');
        $this->form_validation->set_rules('twiter_icon_link', 'Twiter Icon link', 'required');
        $this->form_validation->set_rules('google_icon', 'Google Icon', 'required');
        $this->form_validation->set_rules('google_icon_link', 'Google Icon Link', 'required');
        $this->form_validation->set_rules('in_icon', 'In Icon Link', 'required');
        $this->form_validation->set_rules('in_icon_link', 'In Icon Link', 'required');

        if ($this->form_validation->run() == true) {


            $config['upload_path'] = 'backend-dashboard-master/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                $reg['image'] = $sdata['file_name'];
            }
            $reg['image_link'] = ($this->input->post('image_link', true));
            $reg['textarea'] = ($this->input->post('textarea', true));
            $reg['f_icon'] = ($this->input->post('f_icon', true));
            $reg['f_icon_link'] = ($this->input->post('f_icon_link', true));
            $reg['twiter_icon'] = ($this->input->post('twiter_icon', true));
            $reg['twiter_icon_link'] = ($this->input->post('twiter_icon_link', true));
            $reg['google_icon'] = ($this->input->post('google_icon', true));
            $reg['google_icon_link'] = ($this->input->post('google_icon_link', true));
            $reg['in_icon'] = ($this->input->post('in_icon', true));
            $reg['in_icon_link'] = ($this->input->post('in_icon_link', true));




            $success = $this->db->insert('eight_step_one_area', $reg);    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Added successfully");
                redirect("admin/Eight_services_area/step_one_list"); // Redirecting To Other Page
            }
        }
        $this->load->view('admin-view/add_eight_step_one_area');
    }


    public function step_one_list()
    {
        $cta = "SELECT * FROM eight_step_one_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

        $this->load->view('admin-view/eight_step_one_list', $data);
    }

    public function edit_step_one_area($step_one_id)
    {

        if ($step_one_id) {

            $query = $this->db->query("select * from eight_step_one_area where id = $step_one_id limit 1 ");
            $step_one = $query->row();

            if (!empty($step_one)) {

                $data['image_from_db'] = $step_one->image;
                $data['image_link_from_db'] = $step_one->image_link;
                $data['textarea_from_db'] = $step_one->textarea;
                $data['f_icon_from_db'] = $step_one->f_icon;
                $data['f_icon_link_from_db'] = $step_one->f_icon_link;
                $data['twiter_icon_from_db'] = $step_one->twiter_icon;
                $data['twiter_icon_link_from_db'] = $step_one->twiter_icon_link;
                $data['google_icon_from_db'] = $step_one->google_icon;
                $data['google_icon_link_from_db'] = $step_one->google_icon_link;
                $data['in_icon_from_db'] = $step_one->in_icon;
                $data['in_icon_link_from_db'] = $step_one->in_icon_link;
            }
        }


        // if (empty($_FILES['image']['name'])) {
        //     $this->form_validation->set_rules('image', 'Image', 'required');
        // }
        $this->form_validation->set_rules('image_link', 'Image Link', 'required');
        $this->form_validation->set_rules('textarea', 'Textarea', 'required');
        $this->form_validation->set_rules('f_icon', 'Facebook Icon', 'required');
        $this->form_validation->set_rules('f_icon_link', 'Facebook Icon Link', 'required');
        $this->form_validation->set_rules('twiter_icon', 'Twiter Icon', 'required');
        $this->form_validation->set_rules('twiter_icon_link', 'Twiter Icon Link', 'required');
        $this->form_validation->set_rules('google_icon', 'Google Icon', 'required');
        $this->form_validation->set_rules('google_icon_link', 'Google Icon Link', 'required');
        $this->form_validation->set_rules('in_icon', 'In Icon', 'required');
        $this->form_validation->set_rules('in_icon_link', 'In Icon Link', 'required');

        if ($this->form_validation->run() == true) {


            $config['upload_path'] = 'backend-dashboard-master/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $data['errors'] = $this->upload->display_errors();
                echo $data['errors'];
                exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend-dashboard-master/uploads/'. $data['image_from_db']);
                $eight['image'] = $sdata['file_name'];
            }
            $eight['image_link'] = ($this->input->post('image_link', true));
            $eight['textarea'] = ($this->input->post('textarea', true));
            $eight['f_icon'] = ($this->input->post('f_icon', true));
            $eight['f_icon_link'] = ($this->input->post('f_icon_link', true));
            $eight['twiter_icon'] = ($this->input->post('twiter_icon', true));
            $eight['twiter_icon_link'] = ($this->input->post('twiter_icon_link', true));
            $eight['google_icon'] = ($this->input->post('google_icon', true));
            $eight['google_icon_link'] = ($this->input->post('google_icon_link', true));
            $eight['in_icon'] = ($this->input->post('in_icon', true));
            $eight['in_icon_link'] = ($this->input->post('in_icon_link', true));

            $success = $this->db->update('eight_step_one_area', $eight, array('id' => $step_one_id));    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Edited successfully");
                redirect("admin/Eight_services_area/step_one_list"); // Redirecting To Other Page
            }
        }

        $this->load->view('admin-view/edit_eight_step_one_area', $data);
    }

    public function delete_svc_step_one($dlt_step_one)
    {

        if ($dlt_step_one) {
            $this->db->delete('eight_step_one_area', array('id' => $dlt_step_one));
            $suc = $this->db->affected_rows();

            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }

            redirect("admin/Eight_services_area/step_one_list"); // Redirecting To Other Page

        }
    }
    //=====Step 1 close====

    //=====Step 2 Start=====

    public function add_step_two_area()
    {
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('step_one', 'Step 1', 'required');
        $this->form_validation->set_rules('step_one_link', 'Step1 Link', 'required');
        $this->form_validation->set_rules('step_two', 'Step 2', 'required');
        $this->form_validation->set_rules('step_two_link', 'Step2 Link', 'required');
        $this->form_validation->set_rules('step_three', 'Step 3', 'required');
        $this->form_validation->set_rules('step_three_link', 'Step3 Link', 'required');
        $this->form_validation->set_rules('step_four', 'Step 4', 'required');
        $this->form_validation->set_rules('step_four_link', 'Step4 Link', 'required');
        $this->form_validation->set_rules('step_five', 'Step 5', 'required');
        $this->form_validation->set_rules('step_five_link', 'Step5 Link', 'required');


        if ($this->form_validation->run() == true) {

            $reg['heading'] = ($this->input->post('heading', true));
            $reg['step_one'] = ($this->input->post('step_one', true));
            $reg['step_one_link'] = ($this->input->post('step_one_link', true));
            $reg['step_two'] = ($this->input->post('step_two', true));
            $reg['step_two_link'] = ($this->input->post('step_two_link', true));
            $reg['step_three'] = ($this->input->post('step_three', true));
            $reg['step_three_link'] = ($this->input->post('step_three_link', true));
            $reg['step_four'] = ($this->input->post('step_four', true));
            $reg['step_four_link'] = ($this->input->post('step_four_link', true));
            $reg['step_five'] = ($this->input->post('step_five', true));
            $reg['step_five_link'] = ($this->input->post('step_five_link', true));




            $success = $this->db->insert('eight_step_two_area', $reg);    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Added successfully");
                redirect("admin/Eight_services_area/step_two_list"); // Redirecting To Other Page
            }
        }
        $this->load->view('admin-view/add_eight_step_two_area');
    }

    public function step_two_list()
    {
        $cta = "SELECT * FROM eight_step_two_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

        $this->load->view('admin-view/eight_step_two_list', $data);
    }

    public function edit_step_two_area($step_two_id)
    {
        if ($step_two_id) {

            $query = $this->db->query("select * from eight_step_two_area where id = $step_two_id limit 1 ");
            $step_two = $query->row();

            if (!empty($step_two)) {

                $data['heading_from_db'] = $step_two->heading;
                $data['step_one_from_db'] = $step_two->step_one;
                $data['step_one_link_from_db'] = $step_two->step_one_link;
                $data['step_two_from_db'] = $step_two->step_two;
                $data['step_two_link_from_db'] = $step_two->step_two_link;
                $data['step_three_from_db'] = $step_two->step_three;
                $data['step_three_link_from_db'] = $step_two->step_three_link;
                $data['step_four_from_db'] = $step_two->step_four;
                $data['step_four_link_from_db'] = $step_two->step_four_link;
                $data['step_five_from_db'] = $step_two->step_five;
                $data['step_five_link_from_db'] = $step_two->step_five_link;
            }
        }

        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('step_one', 'Step 1', 'required');
        $this->form_validation->set_rules('step_one_link', 'Step1 Link', 'required');
        $this->form_validation->set_rules('step_two', 'Step 2', 'required');
        $this->form_validation->set_rules('step_two_link', 'Step2 Link', 'required');
        $this->form_validation->set_rules('step_three', 'Step 3', 'required');
        $this->form_validation->set_rules('step_three_link', 'Step3 Link', 'required');
        $this->form_validation->set_rules('step_four', 'Step 4', 'required');
        $this->form_validation->set_rules('step_four_link', 'Step4 Link', 'required');
        $this->form_validation->set_rules('step_five', 'Step 5', 'required');
        $this->form_validation->set_rules('step_five_link', 'Step5 Link', 'required');


        if ($this->form_validation->run() == true) {

            $reg['heading'] = ($this->input->post('heading', true));
            $reg['step_one'] = ($this->input->post('step_one', true));
            $reg['step_one_link'] = ($this->input->post('step_one_link', true));
            $reg['step_two'] = ($this->input->post('step_two', true));
            $reg['step_two_link'] = ($this->input->post('step_two_link', true));
            $reg['step_three'] = ($this->input->post('step_three', true));
            $reg['step_three_link'] = ($this->input->post('step_three_link', true));
            $reg['step_four'] = ($this->input->post('step_four', true));
            $reg['step_four_link'] = ($this->input->post('step_four_link', true));
            $reg['step_five'] = ($this->input->post('step_five', true));
            $reg['step_five_link'] = ($this->input->post('step_five_link', true));

            $success = $this->db->update('eight_step_two_area', $reg, array('id' => $step_two_id));    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Edited successfully");
                redirect("admin/Eight_services_area/step_two_list"); // Redirecting To Other Page
            }
        }

        $this->load->view('admin-view/edit_eight_step_two_area', $data);
    }

    public function delete_svc_step_two($dlt_step_two)
    {

        if ($dlt_step_two) {
            $this->db->delete('eight_step_two_area', array('id' => $dlt_step_two));
            $suc = $this->db->affected_rows();

            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }

            redirect("admin/Eight_services_area/step_two_list"); // Redirecting To Other Page

        }
    }
    //======Step Two End=========

    //==========Step Three Start==========

    public function add_step_three_area()
    {
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('fax', 'Fax', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');


        if ($this->form_validation->run() == true) {

            $reg['heading'] = ($this->input->post('heading', true));
            $reg['address'] = ($this->input->post('address', true));
            $reg['phone'] = ($this->input->post('phone', true));
            $reg['fax'] = ($this->input->post('fax', true));
            $reg['email'] = ($this->input->post('email', true));



            $success = $this->db->insert('eight_step_three_area', $reg);    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Added successfully");
                redirect("admin/Eight_services_area/step_three_list"); // Redirecting To Other Page
            }
        }
        $this->load->view('admin-view/add_eight_step_three_area');
    }

    public function step_three_list()
    {
        $cta = "SELECT * FROM eight_step_three_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

        $this->load->view('admin-view/eight_step_three_list', $data);
    }

    public function edit_step_three_area($step_three_id)
    {
        if ($step_three_id) {

            $query = $this->db->query("select * from eight_step_three_area where id = $step_three_id limit 1 ");
            $step_three = $query->row();

            if (!empty($step_three)) {

                $data['heading_from_db'] = $step_three->heading;
                $data['address_from_db'] = $step_three->address;
                $data['phone_from_db'] = $step_three->phone;
                $data['fax_from_db'] = $step_three->fax;
                $data['email_from_db'] = $step_three->email;
            }
        }
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('fax', 'Fax', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');


        if ($this->form_validation->run() == true) {

            $reg['heading'] = ($this->input->post('heading', true));
            $reg['address'] = ($this->input->post('address', true));
            $reg['phone'] = ($this->input->post('phone', true));
            $reg['fax'] = ($this->input->post('fax', true));
            $reg['email'] = ($this->input->post('email', true));

            $success = $this->db->update('eight_step_three_area', $reg, array('id' => $step_three_id));    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Edited successfully");
                redirect("admin/Eight_services_area/step_three_list"); // Redirecting To Other Page
            }
        }

        $this->load->view('admin-view/edit_eight_step_three_area', $data);
    }

    public function delete_svc_step_three($dlt_step_three)
    {

        if ($dlt_step_three) {
            $this->db->delete('eight_step_three_area', array('id' => $dlt_step_three));
            $suc = $this->db->affected_rows();

            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }

            redirect("admin/Eight_services_area/step_three_list"); // Redirecting To Other Page

        }
    }
    //===== Step Three End=======

    //======= Start Step Four====

    public function add_step_four_area()
    {
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('textarea', 'Textarea', 'required');
        $this->form_validation->set_rules('youremail', 'Your Email', 'required');
        $this->form_validation->set_rules('button', 'Button', 'required');
        $this->form_validation->set_rules('button_link', 'Button Link', 'required');


        if ($this->form_validation->run() == true) {

            $reg['heading'] = ($this->input->post('heading', true));
            $reg['textarea'] = ($this->input->post('textarea', true));
            $reg['youremail'] = ($this->input->post('youremail', true));
            $reg['button'] = ($this->input->post('button', true));
            $reg['button_link'] = ($this->input->post('button_link', true));



            $success = $this->db->insert('eight_step_four_area', $reg);    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Added successfully");
                redirect("admin/Eight_services_area/step_four_list"); // Redirecting To Other Page
            }
        }
        $this->load->view('admin-view/add_eight_step_four_area');
    }

    public function step_four_list()
    {
        $cta = "SELECT * FROM eight_step_four_area";
        $query = $this->db->query($cta);
        // $data = $query->row();
        $data['result'] = $query->result_array();

        $this->load->view('admin-view/eight_step_four_list', $data);
    }

    public function edit_step_four_area($step_four_id)
    {
        if ($step_four_id) {

            $query = $this->db->query("select * from eight_step_four_area where id = $step_four_id limit 1 ");
            $step_four = $query->row();

            if (!empty($step_four)) {

                $data['heading_from_db'] = $step_four->heading;
                $data['textarea_from_db'] = $step_four->textarea;
                $data['youremail_from_db'] = $step_four->youremail;
                $data['button_from_db'] = $step_four->button;
                $data['button_link_from_db'] = $step_four->button_link;
            }
        }
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('textarea', 'Textarea', 'required');
        $this->form_validation->set_rules('youremail', 'Your Email', 'required');
        $this->form_validation->set_rules('button', 'Button', 'required');
        $this->form_validation->set_rules('button_link', 'Button Link', 'required');

        if ($this->form_validation->run() == true) {

            $reg['heading'] = ($this->input->post('heading', true));
            $reg['textarea'] = ($this->input->post('textarea', true));
            $reg['youremail'] = ($this->input->post('youremail', true));
            $reg['button'] = ($this->input->post('button', true));
            $reg['button_link'] = ($this->input->post('button_link', true));

            $success = $this->db->update('eight_step_four_area', $reg, array('id' => $step_four_id));    //**** (query Builders class)***

            if ($success) {
                $this->session->set_flashdata('success', " Edited successfully");
                redirect("admin/Eight_services_area/step_four_list"); // Redirecting To Other Page
            }
        }

        $this->load->view('admin-view/edit_eight_step_four_area', $data);
    }

    public function delete_svc_step_four($dlt_step_four)
    {

        if ($dlt_step_four) {
            $this->db->delete('eight_step_four_area', array('id' => $dlt_step_four));
            $suc = $this->db->affected_rows();

            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }

            redirect("admin/Eight_services_area/step_four_list"); // Redirecting To Other Page

        }
    }
}
