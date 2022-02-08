<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fontend extends CI_Controller
{



	public function index()
	{

		//---------------------Start----------------------------
		$mizan = "SELECT * FROM first_slider";
		$query = $this->db->query($mizan);
		//  $rata= $query->row();
		$rata['result'] = $query->result_array();
		//---------------------End-----------------------------
		// $data['sub_heading'] = $rata->sub_heading;
		// $data['heading'] = $rata->heading;
		// $data['image'] = $rata->image;
		// $data['button'] = $rata->button;
		// $data['button_link'] = $rata->button_link;

		//print("<pre>" . print_r($rata['result'], true) . "</pre>"); exit;
		//--------------------------------Start------------------------
		$miz = "SELECT * FROM cta_area";
		$query2 = $this->db->query($miz);
		$rata['cta'] = $query2->result_array();
		//------------------------------End----------------------------

		//-----------------------------Start-------------------------
		$svc_one = "SELECT * FROM first_services_area ";
		$query3 = $this->db->query($svc_one);
		$rata['service_one'] = $query3->result_array();
		//--------------------------End-----------------------------

		//-------------------------Start--------------------------------
		$svc_two_top = "SELECT * FROM secound_service_area ORDER BY id DESC LIMIT 1";
		$query_top4 = $this->db->query($svc_two_top);
		$four_data = $query_top4->row();
		$rata['top_heading2'] = $four_data->top_heading;

		$svc_two = "SELECT * FROM secound_service_area";
		$query4 = $this->db->query($svc_two);
		$rata['service_two'] = $query4->result_array();
		//--------------------------End----------------------------------

		//------------------------Start----------------------------------
		$svc_three_top = "SELECT * FROM third_service_area ORDER BY id DESC LIMIT 1";
		$query_top5 = $this->db->query($svc_three_top);
		$five_data = $query_top5->row();
		$rata['top_heading3'] = $five_data->top_heading;

		$svc_three = "SELECT * FROM third_service_area";
		$query5 = $this->db->query($svc_three);
		$rata['service_three'] = $query5->result_array();
		//--------------------------End----------------------------------------

		//---------------------------Start-------------------------------------
		$svc_fourth_top = "SELECT * FROM fourth_service_area ORDER BY id DESC LIMIT 1";
		$query_top6 = $this->db->query($svc_fourth_top);
		$six_data = $query_top6->row();
		$rata['top_heading4'] = $six_data->top_heading;
		$rata['image4'] = $six_data->image;
		$rata['image_link4'] = $six_data->image_link;

		$svc_fourth = "SELECT * FROM fourth_service_area";
		$query6 = $this->db->query($svc_fourth);
		$rata['service_fourth'] = $query6->result_array();
		//---------------------------End------------------------------------------------

		//-----------------------------Start-----------------------------------
		$svc_fifth = "SELECT * FROM fifth_service_area ORDER BY id DESC LIMIT 1";
		$query7 = $this->db->query($svc_fifth);
		$rata['service_fifth'] = $query7->result_array();
		//--------------------------------End----------------------------------

		//----------------------------------Start--------------------------------
		$svc_six_left = "SELECT * FROM sixth_left_area";
		$query8 = $this->db->query($svc_six_left);
		$rata['service_sixth_left'] = $query8->result_array();

		$svc_six_left_top = "SELECT * FROM sixth_left_area ORDER BY id DESC LIMIT 1";
		$query_top8 = $this->db->query($svc_six_left_top);
		$six_left_data = $query_top8->row();
		$rata['top_heading5'] = $six_left_data->top_heading;
		//----------------------------------End--------------------------------------

		//----------------------------------------Start----------------------------
		$svc_six_right = "SELECT * FROM sixth_right_area";
		$query9 = $this->db->query($svc_six_right);
		$rata['service_sixth_right'] = $query9->result_array();

		$svc_six_right_top = "SELECT * FROM sixth_right_area ORDER BY id DESC LIMIT 1";
		$query_top9 = $this->db->query($svc_six_right_top);
		$six_right_data = $query_top9->row();
		$rata['top_heading6'] = $six_right_data->top_heading;
		//-----------------------End-------------------------------------------------

		//----------------------Start------------------------------------------------
		$svc_seven = "SELECT * FROM seven_service_area";
		$query10 = $this->db->query($svc_seven);
		$rata['service_seven'] = $query10->result_array();
		//-------------------------------End--------------------------------------------

		//---------------------------------------Start---------------------------------
		$svc_eight_step1 = "SELECT * FROM eight_step_one_area ORDER BY id DESC LIMIT 1";
		$query11 = $this->db->query($svc_eight_step1);
		$rata['service_eight_step1'] = $query11->result_array();
		//---------------------------------------End-------------------------------------

		//----------------------------------Start-------------------------------------
		$svc_eight_step2 = "SELECT * FROM eight_step_two_area ORDER BY id DESC LIMIT 1";
		$query12 = $this->db->query($svc_eight_step2);
		$rata['service_eight_step2'] = $query12->result_array();
		//-------------------------------------End---------------------------------------

		//--------------------------Start---------------------------------------------
		$svc_eight_step3 = "SELECT * FROM eight_step_three_area ORDER BY id DESC LIMIT 1";
		$query13 = $this->db->query($svc_eight_step3);
		$rata['service_eight_step3'] = $query13->result_array();
		//--------------------------End--------------------------------------------------

		//----------------------------Start----------------------------------------------
		$svc_eight_step4 = "SELECT * FROM eight_step_four_area ORDER BY id DESC LIMIT 1";
		$query14 = $this->db->query($svc_eight_step4);
		$rata['service_eight_step4'] = $query14->result_array();
		//-------------------------------End----------------------------------------------

		$this->load->view('public-view/fontend-view', $rata);
	}
}
