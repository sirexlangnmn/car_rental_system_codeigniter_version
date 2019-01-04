<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Chart extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();

            if (!$this->session->userdata('log_in')) 
            {
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
                redirect(base_url('login'));
            }

            
        $this->load->model('chart_model');
    }
    
	public function index()
	{
		$Data['tahun'] = $this->chart_model->getYear();
		$this->load->view('index', $Data);
	}

	public function showchart()
	{
		$year1 = $this->input->post('yearOne');
		$year2 = $this->input->post('yearTwo');

		$earning1 = $this->chart_model->getEarning($year1);
		$earning2 = $this->chart_model->getEarning($year2);

		$total1= array();
		$total2= array();

		foreach ($earning1 as $tot) {
			$total1[] = $tot->total;
		}

		foreach ($earning2 as $tot) {
			$total2[] = $tot->total;
		}	

		$bulan = $this->chart_model->getMonth();
		$label = array();
		foreach ($bulan as $m) {
			$label[] = $m->month;
		}

		//print_r($label);

		$Data['label'] = json_encode($label);//json_encode($label);
		$Data['tahun'] = $this->chart_model->getYear();
		$Data['result1'] = json_encode($total1);
		$Data['result2'] = json_encode($total2);
		$Data['one'] = $year1;
		$Data['two'] = $year2;

		$this->load->view('include/header');
        $this->load->view('include/nav');
        $this->load->view('include/sidenav');
		$this->load->view('admin/chart/chart', $Data);
		//print_r($this->chart_model->getMonth());
		// print_r($this->chart_model->getEarning($year1));
		// echo " spasi ";
		//print_r($this->chart_model->getEarning($year2));

	}
}
