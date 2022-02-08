<?php
defined('BASEPATH') or exit('No direct script access allowed');

class First_slider extends CI_Controller
{

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
	public function add_slider()
	{

		$this->form_validation->set_rules('sub_heading', 'Sub Heading ', 'required');
		$this->form_validation->set_rules('heading', 'Heading', 'required');

		if (empty($_FILES['slider_image']['name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}
		//$this->form_validation->set_rules('image', 'Input Image', 'required');
		$this->form_validation->set_rules('button', 'Input button', 'required');
		$this->form_validation->set_rules('button_link', 'Button Link', 'required');

		if ($this->form_validation->run() == true) {

			$reg['sub_heading'] = ($this->input->post('sub_heading', true));

			$reg['heading'] = ($this->input->post('heading', true));

			$config['upload_path'] = 'backend-dashboard-master/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('slider_image')) {
				echo $this->upload->display_errors(); // exit;
			} else {
				$sdata = $this->upload->data();
				$reg['image'] = $sdata['file_name'];
			}

			//$reg['image'] = ($this->input->post('image', true));
			$reg['button'] = ($this->input->post('button', true));
			$reg['button_link'] = ($this->input->post('button_link', true));

			//	print("<pre>" . print_r($reg, true) . "</pre>");exit;

			$success = $this->db->insert('first_slider', $reg);    //**** (query Builders class)***

			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
				redirect("admin/first_slider/slider_list"); // Redirecting To Other Page
			}
		}
		$this->load->view('admin-view/add_slider_view');
	}

	public function slider_list()
	{

		$mizan = "SELECT * FROM first_slider";
		$query = $this->db->query($mizan);
		$rata['result'] = $query->result_array();

		$this->load->view('admin-view/first-slider-list', $rata);
	}


	public function edit_slider($first_slider_id)
	{

		// if(!empty($_FILES)){print_r($_FILES); //exit;
		// }

		// echo FCPATH . 'backend-dashboard-master/uploads/blog_02.jpg' ; exit;
		//unlink(FCPATH . 'backend-dashboard-master/uploads/blog_02.jpg') ; 
		// unlink(FCPATH . 'backend-dashboard-master/uploads/' . $data['image_from_db']);

		if ($first_slider_id) {

			$query = $this->db->query("select * from first_slider where id = $first_slider_id limit 1 ");
			$slider = $query->row();

			if (!empty($slider)) {
				$data['sub_heading_from_db'] = $slider->sub_heading;
				$data['heading_from_db'] = $slider->heading;
				$data['image_from_db'] = $slider->image;
				$data['button_from_db'] = $slider->button;
				$data['button_link_from_db'] = $slider->button_link;

			}
		}

			$this->form_validation->set_rules('sub_heading', 'Sub Heading ', 'required');
			$this->form_validation->set_rules('heading', 'Heading', 'required');
			// if (empty($_FILES['image']['name'])) {
			// 	$this->form_validation->set_rules('image', 'Image', 'required');
			// }
			//$this->form_validation->set_rules('image', 'Input Image', 'required');
			$this->form_validation->set_rules('button', 'Input button', 'required');
			$this->form_validation->set_rules('button_link', 'Button Link', 'required');
			if ($this->form_validation->run() == true) {
				$reg['sub_heading'] = ($this->input->post('sub_heading', true));
				$reg['heading'] = ($this->input->post('heading', true));

				$config['upload_path'] = 'backend-dashboard-master/uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('slider_image')) {
					$data['img_up_errors'] = $this->upload->display_errors(); 
					echo $data['img_up_errors']; exit;

				} else {
					// echo 'salam'; exit;

					$sdata = $this->upload->data();
					
					unlink(FCPATH . 'backend-dashboard-master/uploads/' . $data['image_from_db']);
				
					//	print("<pre>" . print_r($reg, true) . "</pre>");exit;

					$reg['image'] = $sdata['file_name'];
				}
				//$reg['image'] = ($this->input->post('image', true));
				$reg['button'] = ($this->input->post('button', true));
				$reg['button_link'] = ($this->input->post('button_link', true));


				$success = $this->db->update('first_slider', $reg, array('id' => $first_slider_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/first_slider/slider_list"); // Redirecting To Other Page
				}
			}

		
			$this->load->view('admin-view/edit-slider-view', $data);
		
	}

	public function delete_slide($dlt_slide)
	{

		if ($dlt_slide) {
			$this->db->delete('first_slider', array('id' => $dlt_slide));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/First_slider/slider_list"); // Redirecting To Other Page

		}
	}
}
