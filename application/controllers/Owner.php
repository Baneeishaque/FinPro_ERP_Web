<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

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

	public function gst_client(){
		$this->load->view('index');
		$this->load->view('owner/GstClient');
	}
	public function gstmonthlyfill(){
		$this->load->view('index');
		$this->load->view('owner/gst_client/GstMonthlyFilling');
	}
	public function monthlyfillreport(){
		$this->load->view('index');
		$this->load->view('owner/gst_client/GstMonthlyReport');
	}
	public function gstregistration(){
		$this->load->view('index');
		$this->load->view('owner/gst_client/GstRegistration');
	}
	public function attendance(){
		$this->load->view('index');
		$this->load->view('owner/FinproAttendance');
	}
	public function upload_attendance(){
		$this->load->view('index');
		$this->load->view('owner/Attendance/UploadAttendance');
	}
}
