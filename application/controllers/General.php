<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index');
		$this->load->view('staff/staff_index');	
	}
	public function gstclient()
	{
		$this->load->view('index');
		$this->load->view('staff/gst_client/gstclient');
	}
	public function gstmonthlyfill(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/GstMonthlyFill');
	}
	public function gmfresult(){ 
		// company's get query from model db and stored to $company that passes to the below view as parameter
	    $this->load->view('index');
		$this->load->view('staff/gst_client/ResultantCompany');
	}
	public function balancesheet(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/BalanceSheet');
		}
		
	public function cashflow(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/cashflow');

	}
	public function documents(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/documents');
	}
	public function purchase(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/documents/purchase');
	}
	public function gstr_1() {
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/gstr-1');
	}
	public function profitloss(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/profitloss');
	}
	public function accountinfo(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/accountinfo');
	}
	public function ledger(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/accoundinfo/ledger');
	}
// LEDGER CREATE
	public function create(){
		$this->load->view('index');
		$this->load->view('staff/gst_client/company/accoundinfo/create');
	}

		
		
		
	


}
