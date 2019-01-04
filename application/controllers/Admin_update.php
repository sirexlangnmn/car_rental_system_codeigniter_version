<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_update extends CI_Controller 
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



        public function car_update()
        {
            $this->load->helper('form');
            if($_POST)
            {
                $this->form_validation->set_rules('car_Image1', 'car_Image1', 'required');
                $this->form_validation->set_rules('car_Image2', 'car_Image2', 'required');
                $this->form_validation->set_rules('car_Image3', 'car_Image3', 'required');
                $this->form_validation->set_rules('category_Name', 'category_Name', 'required');
                $this->form_validation->set_rules('brand_Name', 'brand_Name', 'required');
                $this->form_validation->set_rules('car_Model', 'car_Model', 'required');
                $this->form_validation->set_rules('car_Plateno', 'car_Plateno', 'required');
                $this->form_validation->set_rules('car_Capacity', 'car_Capacity', 'required');
                $this->form_validation->set_rules('transmission_Name', 'transmission_Name', 'required');
                $this->form_validation->set_rules('fuel_Name', 'fuel_Name', 'required');
                $this->form_validation->set_rules('engine_Name', 'engine_Name', 'required');
                $this->form_validation->set_rules('car_Price', 'car_Price', 'required');
                $this->form_validation->set_rules('car_Status', 'car_Status', 'required');
            //  $this->form_validation->set_rules('rating', 'rating', '');


                if ($this->form_validation->run() == FALSE)
                {
                    $this->Admin_get->car_get();
                }
                else
                {
         
                    $car_ID = $this->input->post('car_ID');
                    $new_data = array
                    (
                        "car_Image1"        =>$this->input->post('car_Image1'),
                        "car_Image2"        =>$this->input->post('car_Image2'),
                        "car_Image3"        =>$this->input->post('car_Image3'),
                        "category_Name"     =>$this->input->post('category_Name'),
                        "brand_Name"        =>$this->input->post('brand_Name'),
                        "car_Model"         =>$this->input->post('car_Model'),
                        "car_Plateno"       =>$this->input->post('car_Plateno'),
                        "car_Capacity"      =>$this->input->post('car_Capacity'),
                        "transmission_Name" =>$this->input->post('transmission_Name'),
                        "fuel_Name"         =>$this->input->post('fuel_Name'),
                        "engine_Name"       =>$this->input->post('engine_Name'),
                        "car_Price"         =>$this->input->post('car_Price'),
                        "car_Status"        =>$this->input->post('car_Status'),
                    //  "rating"  =>$this->input->post('rating')
                    );
     
                    $this->car_model->car_update($car_ID, $new_data);
                    redirect('admin_display/fleet');
                }
            }
        }



 


        public function cat_update()
        {
            $this->form_validation->set_rules('category_Name', 'category_Name', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                $this->Admin_get->cat_get();
            }
                else  
                {       
                    $category_ID = $this->input->post('category_ID'); 

                    $new_data = array
                    (
                        "category_Name" => $this->input->post('category_Name')
                    );

                    $this->cat_model->cat_update($category_ID, $new_data);
                    redirect('Admin_display/car_category');
                }
        }    


        public function brand_update()
        {
            $this->form_validation->set_rules('brand_Name', 'brand_Name', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                $this->Admin_get->brand_get();
            }
                else 
                {       
                    $brand_ID = $this->input->post('brand_ID'); 

                    $new_data = array
                    (
                        "brand_Name" => $this->input->post('brand_Name')
                    );

                    $this->brand_model->brand_update($brand_ID, $new_data);
                    redirect('Admin_display/car_brand');
                }
        }  


        public function transmission_update()
        {
            $this->form_validation->set_rules('transmission_Name', 'transmission_Name', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                $this->Admin_get->transmission_get();
            }
                else 
                {       
                    $transmission_ID = $this->input->post('transmission_ID'); 

                    $new_data = array
                    (
                        "transmission_Name" => $this->input->post('transmission_Name')
                    );

                    $this->transmission_model->transmission_update($transmission_ID, $new_data);
                    redirect('Admin_display/car_transmission');
                }
        }    


        public function fuel_update()
        {
            $this->form_validation->set_rules('fuel_Name', 'fuel_Name', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                $this->Admin_get->fuel_get();
            }
                else
                {       
                    $fuel_ID = $this->input->post('fuel_ID'); 

                    $new_data = array
                    (
                        "fuel_Name" => $this->input->post('fuel_Name')
                    );

                    $this->fuel_model->fuel_update($fuel_ID, $new_data);
                    redirect('Admin_display/car_fuel');
                }

        }    


        public function engine_update()
        {
            $this->form_validation->set_rules('engine_Name', 'engine_Name', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                $this->Admin_get->engine_get();
            }
                else
                {       
                    $engine_ID = $this->input->post('engine_ID'); 

                    $new_data = array
                    (
                        "engine_Name" => $this->input->post('engine_Name')
                    );

                    $this->engine_model->engine_update($engine_ID, $new_data);
                    redirect('Admin_display/car_engine');
                }
        }    


        public function status_update()
        {
            $this->form_validation->set_rules('car_Status', 'car_Status', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                $this->Admin_get->status_get();
            }
                else  
                {       
                    $status_ID = $this->input->post('status_ID'); 

                    $new_data = array
                    (
                        "car_Status" => $this->input->post('car_Status')
                    );

                    $this->status_model->status_update($status_ID, $new_data);
                    redirect('Admin_display/car_status');
                }
        }    


         public function user_update()
        {
            $this->load->helper('form');
            
            $this->form_validation->set_rules('Lastname', 'Lastname', 'required');
            $this->form_validation->set_rules('Firstname', 'Firstname', 'required');
            $this->form_validation->set_rules('Middlename', 'Middlename', 'required');
            $this->form_validation->set_rules('Address', 'Address', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required');
            $this->form_validation->set_rules('Contact', 'Contact', 'required');
            $this->form_validation->set_rules('Password', 'License', 'required');
            $this->form_validation->set_rules('Username', 'Username', 'required');
            $this->form_validation->set_rules('Position', 'Position', 'required');
       //   $this->form_validation->set_rules('Status', 'Status', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                //   $this->admin_get->user_get();  // Required sana ito, kaso nag e-error kaya comment mode muna.
                }
                    else
                    {
                    $this->do_upload();
                    }
                    
                        $Lastname   = $this->input->post('Lastname');
                        $Firstname  = $this->input->post('Firstname');
                        $Middlename = $this->input->post('Middlename');
                        $Address    = $this->input->post('Address');
                        $Email      = $this->input->post('Email');
                        $Contact    = $this->input->post('Contact');
                        $Password   = $this->input->post('Password');
                        $Username   = $this->input->post('Username');
                        $Position   = $this->input->post('Position');
                    //  $Status => $this->input->post('Status'),

                        $ID = $this->input->post('ID');
                     
                
                    $new_data = array
                    (  
                        'Lastname'   => $Lastname,
                        'Firstname'  => $Firstname,
                        'Middlename' => $Middlename,
                        'Address'    => $Address,
                        'Email'      => $Email,
                        'Contact'    => $Contact,
                        'Password'   => $Password,
                        'Username'   => $Username,
                        'Position'   => $Position
                    //  'Status' => $Status
                    );

                    $this->user_model->user_update($ID, $new_data);
                    redirect('Admin_display/user');
        }




        public function driver_update()
        {
            $this->form_validation->set_rules('driver_Lastname', 'driver_Lastname', 'required');
            $this->form_validation->set_rules('driver_Firstname', 'driver_Firstname', 'required');
            $this->form_validation->set_rules('driver_Middlename', 'driver_Middlename', 'required');
            $this->form_validation->set_rules('driver_Address', 'driver_Address', 'required');
            $this->form_validation->set_rules('driver_Email', 'driver_Email', 'required');
            $this->form_validation->set_rules('driver_Contact', 'driver_Contact', 'required');
            $this->form_validation->set_rules('driver_License', 'driver_License', 'required');
            $this->form_validation->set_rules('driver_Expired', 'driver_Expired', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->Admin_get->driver_get();
                }
                    else
                    {   
                        $driver_Lastname    = $this->input->post('driver_Lastname');
                        $driver_Firstname   = $this->input->post('driver_Firstname');
                        $driver_Middlename  = $this->input->post('driver_Middlename');
                        $driver_Address     = $this->input->post('driver_Address');
                        $driver_Email       = $this->input->post('driver_Email');
                        $driver_Contact     = $this->input->post('driver_Contact');
                        $driver_License     = $this->input->post('driver_License');
                        $driver_Expired     = $this->input->post('driver_Expired');
               
                        $driver_ID = $this->input->post('driver_ID');
                         
                    
                        $new_data = array
                        (  
                            'driver_Lastname'   => $driver_Lastname,
                            'driver_Firstname'  => $driver_Firstname,
                            'driver_Middlename' => $driver_Middlename,
                            'driver_Address'    => $driver_Address,
                            'driver_Email'      => $driver_Email,
                            'driver_Contact'    => $driver_Contact,
                            'driver_License'    => $driver_License,
                            'driver_Expired'    => $driver_Expired
                        );

                        $this->driver_model->driver_update($driver_ID, $new_data);
                        redirect('Admin_display/driver');
                    }
        }


        public function reservation_update()
        {
            $this->form_validation->set_rules('dropoff_Location', 'dropoff_Location', 'required');
            $this->form_validation->set_rules('dropoff_Date', 'dropoff_Date', 'required');
            $this->form_validation->set_rules('dropoff_Time', 'dropoff_Time', 'required');
            $this->form_validation->set_rules('pickup_Location', 'pickup_Location', 'required');
            $this->form_validation->set_rules('pickup_Date', 'pickup_Date', 'required');
            $this->form_validation->set_rules('pickup_Time', 'pickup_Time', 'required');
            $this->form_validation->set_rules('reservation_Time', 'reservation_Time', 'required');
            $this->form_validation->set_rules('total_payment', 'total_payment', 'required');
            $this->form_validation->set_rules('balance', 'balance', 'required');
            $this->form_validation->set_rules('reservation_status', 'reservation_status', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                   $this->Admin_get->reservation_get();
                }
                    else
                    {
                        $reservation_ID = $this->input->post('reservation_ID');
                         
                        $new_data = array
                        (  
                            "dropoff_Location"   => $this->input->post('dropoff_Location'),
                            "dropoff_Date"       => $this->input->post('dropoff_Date'),
                            "dropoff_Time"       => $this->input->post('dropoff_Time'),
                            "pickup_Location"    => $this->input->post('pickup_Location'),
                            "pickup_Date"        => $this->input->post('pickup_Date'),
                            "pickup_Time"        => $this->input->post('pickup_Time'),
                            "reservation_Time"   => $this->input->post('reservation_Time'),
                            "total_payment"      => $this->input->post('total_payment'),
                            "balance"            => $this->input->post('balance'),
                            "reservation_status" => $this->input->post('reservation_status')
                        );

                        $this->reservation_model->reservation_update($reservation_ID, $new_data);
                        redirect('Admin_display/reservation');
                    }
        }








}

?>