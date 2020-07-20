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
	public function pancard(){
		$this->load->view('index');
		$this->load->view('owner/pancard');
		
	}
	public function pancreate(){
		$this->load->view('index');
		$this->load->view('owner/pancard/pancreate');
		
	}
	public function budget(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount');
		
	}
	public function trademark(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/trademark');
		
	}
	public function tradecreate(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/trademark/tradecreate');
		
	}
	public function partnership(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/partnership');
		
	}
	public function partnercreate(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/partnership/partnercreate');
		
	}
	public function projectreport(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/projectreport');
		
	}
	public function reportcreate(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/projectreport/reportcreate');
		
	}
	public function others(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/others');
		
	}
	public function othercreate(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/others/othercreate');
		
	}
	public function incomestatement(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/IncomeStatement');
		
	}

	public function balancesheet(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/BalanceSheet');
		
	}
	public function profitandloss(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/ProfitAndLoss');
		
	}
	public function cashflow(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/CashFlow');
		
	}
	public function incometax(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/IncomeTax');
		
	}
	public function incometaxcreate(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/incometax/incomecreate');
		
	}

	public function auditing(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/auditing');
		
	}

	public function auditingcreate(){
		$this->load->view('index');
		$this->load->view('owner/BudgetAndAccount/auditing/AuditingCreate');
		
	}
}
