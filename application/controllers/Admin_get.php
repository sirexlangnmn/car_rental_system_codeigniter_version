<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_get extends CI_Controller 
{

   public function __construct()
    {
        parent::__construct();

            if (!$this->session->userdata('log_in')) 
            {
                $this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
                redirect(base_url('login'));
            }

            $this->load->model('accounts_model');
            $this->load->model('user_model'); 
            $this->load->model('reservation_model');
            $this->load->model('reservation_status_model');
            $this->load->model('driver_model'); 
            $this->load->model('customer_model'); 
         //   $this->load->model('calendar_model');

            $this->load->model('car_model');
            $this->load->model('cat_model');
            $this->load->model('engine_model');
            $this->load->model('brand_model');
            $this->load->model('transmission_model');
            $this->load->model('fuel_model');
            $this->load->model('status_model');
            $this->load->model('rating_model');

              
    }


        public function reservation_get($id)    //  Fleet
        {
			$reservation = $this->reservation_model->reservation_get($id);  
            
            foreach ($reservation as $row)
            {
            	$customer_ID = $row->customer_ID;
                $car_ID      = $row->car_ID;
                $driver_ID   = $row->driver_ID;
            }

            $car      = $this->car_model->car_get($car_ID);
            $driver   = $this->driver_model->driver_get($driver_ID);
            $customer = $this->customer_model->customer_get($customer_ID);

            $data = array
            (
                'car'                => $car,
                'driver'             => $driver,
                'customer'           => $customer,
                'reservation'        => $reservation,                
                'reservation_status' => $this->reservation_status_model->reservation_status_fetch()
              
            );

            if (isset($data))
            {   
	            $this->load->view('include/header');
	            $this->load->view('include/nav');
	            $this->load->view('include/sidenav');
	            $this->load->view('admin/reservation/reservation_get', $data);
	            $this->load->view('include/footer'); 
        	}
            else
            {
                echo "No data";
            }
        }



        public function reservation_show($id)
        {

            $reservation = $this->reservation_model->reservation_get($id);  
            
            foreach ($reservation as $row)
            {
            	$customer_ID = $row->customer_ID;
                $car_ID = $row->car_ID;
                $driver_ID = $row->driver_ID;
            }

            $customer = $this->customer_model->customer_get($customer_ID);
            $car = $this->car_model->car_get($car_ID);
            $driver = $this->driver_model->driver_get($driver_ID);

            $data['reservation'] =$reservation;
            $data['customer'] =$customer;
            $data['car'] =$car;
            $data['driver'] =$driver;
                   
            if (isset($data))
            {   
                $this->load->view('include/header');
                $this->load->view('admin/reservation/reservation_view', $data);
            }
            else
            {
                echo "No data";
            }
        }



        public function reservation_message($id)
        {
            $reservation = $this->reservation_model->reservation_get($id);  
            
            foreach ($reservation as $row)
            {
                $customer_ID = $row->customer_ID;
            }

            $customer = $this->customer_model->customer_get($customer_ID);
            $reservation_message = $this->message_model->message_fetch();

            $data['reservation'] =$reservation;
            $data['customer'] =$customer;
            $data['reservation_message'] =$reservation_message;
            

            if (isset($data))
            {   
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation_message', $data);
                $this->load->view('include/footer'); 
            }
            else
            {
                echo "No data";
            }
        }

/***************  Fleet *******************/        
        public function car_get($id)    //  Fleet
        {
            $data = array
            (
                'fleet'         => $this->car_model->car_get($id),   // Primary .. the rest are Foreign      
                'category'      => $this->cat_model->cat_fetch(),
                'brand'         => $this->brand_model->brand_fetch(),
                'engine'        => $this->engine_model->engine_fetch(),
                'transmission'  => $this->transmission_model->transmission_fetch(),
                'fuel'          => $this->fuel_model->fuel_fetch(),
                'status'        => $this->status_model->status_fetch(),
            //  'rating_fetch' => $this->rating_model->rating_fetch(),
            );
            
             
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/fleet/fleet/fleet_get', $data);
            $this->load->view('include/footer');  
        }


        public function car_show($id)
        {
            $car_get = $this->car_model->car_get($id);

            foreach ($car_get as $car_model)
            {
                $driver_ID = $car_model->driver_ID;
            }

            $driver = $this->driver_model->driver_get($driver_ID);


            $data['car_show'] =$car_get;
            $data['driver'] =$driver;
            
            if (isset($data))
            {   
                $this->load->view('include/header');
                $this->load->view('admin/fleet/fleet/fleet_view', $data);
            }
            else
            {
                echo "No data";
            }
        }



        public function cat_get($id)   // category
        {
            $data = array
            (
                'cat_get' => $this->cat_model->cat_get($id)
            );
            
                $this->load->view('include/header');
                $this->load->view('admin/fleet/car_category/cat_get', $data);
        }


        public function brand_get($id)
        {
            $data = array
            (
                'brand_get' => $this->brand_model->brand_get($id),
            );
            
                $this->load->view('include/header');
                $this->load->view('admin/fleet/car_brand/brand_get', $data);
        }



        public function transmission_get($id)
        {
            $data = array
            (
                'transmission_get' => $this->transmission_model->transmission_get($id)
            );
            
                $this->load->view('include/header');
                $this->load->view('admin/fleet/car_transmission/transmission_get', $data);
        }


        public function fuel_get($id)
        {
            $data = array
            (
                'fuel_get' => $this->fuel_model->fuel_get($id)
            );
            
                $this->load->view('include/header');
                $this->load->view('admin/fleet/car_fuel/fuel_get', $data);
        }


        public function engine_get($id)
        {
            $data = array
            (
                'engine_get' => $this->engine_model->engine_get($id)
            );
            
                $this->load->view('include/header');
                $this->load->view('admin/fleet/car_engine/engine_get', $data);
        }


        public function status_get($id)
        {
            $data = array
            (
                'status_get' => $this->status_model->status_get($id)
            );
            
                $this->load->view('include/header');
                $this->load->view('admin/fleet/car_status/status_get', $data);
        }


        public function user_get($ID)
        {
             $data = array
            (
                'user_get' => $this->user_model->user_get($ID)
            );
            
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/human_resource/user_get',$data);
            $this->load->view('include/footer');  
        }


        public function user_show($id)
        {
            $data = array
            (
                'user_get' => $this->user_model->user_get($id)
            );
            
            if (isset($data))
            {      
                $this->load->view('include/header');
                $this->load->view('admin/human_resource/user_view', $data);
            }
            else
            {
                echo "No data";
            }
        }



        public function driver_get($id)
        {
            $data = array
            (
                'driver_get' => $this->driver_model->driver_get($id)
            );
            
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/human_resource/driver_get',$data);
            $this->load->view('include/footer');  
        }


        public function driver_show($id)
        {
            $data = array
            (
                'driver_get' => $this->driver_model->driver_get($id)
            );
            
            if (isset($data))
            {      
                $this->load->view('include/header', $data);
                $this->load->view('admin/human_resource/driver_view', $data);
            }
            else
            {
                echo "No data";
            }
        }



        public function customer_show($id)
        {
            $data = array
            (
                'customer_get' => $this->customer_model->customer_get($id)
            );
            
            if (isset($data))
            {      
                $this->load->view('include/header', $data);
                $this->load->view('admin/customer/customer_view', $data);
            }
            else
            {
                echo "No data";
            }
        }


        public function customer_history($id)
        {
            $data = array
            (
                'customer_get' => $this->customer_model->customer_get($id)
            );
            
            if (isset($data))
            {      
                $this->load->view('include/header', $data);
                $this->load->view('admin/customer/customer_history', $data);
            }
            else
            {
                echo "No data";
            }
        }















}

?>