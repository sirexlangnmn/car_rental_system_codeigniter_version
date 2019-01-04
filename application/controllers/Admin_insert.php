<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_insert extends CI_Controller 
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
       //     $this->load->model('calendar_model');

            $this->load->model('car_model');
            $this->load->model('cat_model');
            $this->load->model('engine_model');
            $this->load->model('brand_model');
            $this->load->model('transmission_model');
            $this->load->model('fuel_model');
            $this->load->model('status_model');
            $this->load->model('rating_model');

              
    }



        public function index()
        {
            redirect ('uploaddisplay', array('error' => ' ' ));
        }


        public function car_insert()
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
      //    $this->form_validation->set_rules('rating', 'rating', 'required');
            
            if ($this->form_validation->run() == FALSE) 
            {
                $this->index();
            }
            else
            {
                $data = array
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
                //  "rating"            =>$this->input->post('rating')
                    "date_created"      => $this->getDateTime(),
                    "created_by"        => 'Admin'
                );

                    $config['upload_path']   = './cars/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
                    $config['max_size']      = 1000;
                    $config['max_width']     = 1300;
                    $config['max_height']    = 1024;

                    $this->load->library('upload', $config);
                    $this->upload->do_upload('car_Images1');
                    $this->upload->do_upload('car_Images2');

                $this->car_model->car_insert($data);     

                if ( ! $this->upload->do_upload('car_Images3'))
                {     
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    $error = array('error' => $this->upload->display_errors());
                    redirect('uploaddisplay', $error);
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $this->load->view('success', $data);
                }
            }
        }

        

        public function cat_insert()
        {
            $this->form_validation->set_rules('category_Name', 'category_Name', 'required');
          
            if ($this->form_validation->run() == FALSE)  
            {
                $this->admin_display->car_category();
            }
            else   
            {
                $data = array
                (
                    "category_Name" => $this->input->post('category_Name')
                );


                $result = $this->cat_model->cat_insert($data);

                if(isset($result))
                {
                    redirect('admin_display/car_category');
                }
                else
                {
                    $this->load->view('errors/error_404');  // Flashdata dapat.. Error indicator.
                }          
            }   
        }        



      


        public function brand_insert()
        {
            $this->form_validation->set_rules('brand_Name', 'brand_Name', 'required');
          
            if ($this->form_validation->run() == FALSE)  
            {
                $this->admin_display->car_brand();
            }
            else
            {
                 $data = array
                (
                    "brand_Name" => $this->input->post('brand_Name')
                );
                    
                    $result = $this->brand_model->brand_insert($data);

                if(isset($result))
                {
                    redirect('Admin_display/car_brand');   
                }
                else
                {
                    $this->load->view('errors/error_404');  // Flashdata dapat.. Error indicator.
                }          
            }   
        }     


        public function transmission_insert()
        {
            $this->form_validation->set_rules('transmission_Name', 'transmission_Name', 'required');
          
            if ($this->form_validation->run() == FALSE)  
            {
                $this->admin_display->car_transmission();
            }
            else 
            {
                $data = array
                (
                    "transmission_Name" => $this->input->post('transmission_Name')
                );
                
                $result = $this->transmission_model->transmission_insert($data);  
                
                if(isset($result))
                {
                    redirect('admin_display/car_transmission');      
                }
                else
                {
                    $this->load->view('errors/error_404');  // Flashdata dapat.. Error indicator.
                }         
            }   
        }    



        public function fuel_insert()
        {
            $this->form_validation->set_rules('fuel_Name', 'fuel_Name', 'required');
          
            if ($this->form_validation->run() == FALSE)  
            {
                $this->Admin_display->car_fuel();
            }
            else   
            {
                $data = array
                (
                    "fuel_Name" => $this->input->post('fuel_Name')
                );
             
                $result = $this->fuel_model->fuel_insert($data);

                if(isset($result))
                {
                    redirect('Admin_display/car_fuel'); 
                }
                else
                {
                    $this->load->view('errors/error_404');  // Flashdata dapat.. Error indicator.
                }             
            }   
        }              

    


        public function engine_insert()
        {
            $this->form_validation->set_rules('engine_Name', 'engine_Name', 'required');
          
            if ($this->form_validation->run() == FALSE)  
            {
                $this->admin_display->car_engine();
            }
            else   
            {   
                $data = array
                (
                    "engine_Name" => $this->input->post('engine_Name')
                );
                
                $result = $this->engine_model->engine_insert($data);   

                if(isset($result))
                {
                    redirect('admin_display/car_engine');  
                }
                else
                {
                    $this->load->view('errors/error_404');  // Flashdata dapat.. Error indicator.
                }           
            }   
        }  


     


        public function status_insert()
        {
            $this->form_validation->set_rules('car_Status', 'car_Status', 'required');
          
            if ($this->form_validation->run() == FALSE)  
            {
                $this->Admin_display->car_status();
            }
            else   
            {
                $data = array
                (
                    "car_Status" => $this->input->post('car_Status')
                );
                
                $result = $this->status_model->status_insert($data);

                if (isset($result))
                {
                    redirect('Admin_display/car_status');    # code...
                }
                else
                {
                    $this->load->view('errors/error_404');  // Flashdata dapat.. Error indicator.
                }
                           
            }   
        }          




/*
        public function rating_insert()
        {
            $this->form_validation->set_rules('rating', 'rating', 'required');
            $this->form_validation->set_rules('rating_date', 'rating_date', 'required');
          
            if ($this->form_validation->run() == FALSE)  
            {
                $this->Admin_display->car_rating();
            }
            else   
            {
                $data = array
                (
                    "rating" => $this->input->post('rating'),
                    "rating_date" => $this->input->post('rating_date')
                );

                $this->rating_model->rating_insert($data);

                redirect('Admin_display/car_trans');           
            }   
        }             
*/
      


        public function user_insert()
        {   
            $this->form_validation->set_rules('Picture', 'Picture', 'required');
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
                $this->Admin_display->user();
            }
                else
                {       
                    $data = array
                    (
                        "Picture"      => $this->input->post('Picture'),
                        "Lastname"     => $this->input->post('Lastname'),
                        "Firstname"    => $this->input->post('Firstname'),
                        "Middlename"   => $this->input->post('Middlename'),
                        "Address"      => $this->input->post('Address'),
                        "Email"        => $this->input->post('Email'),
                        "Contact"      => $this->input->post('Contact'),
                        "Password"     => $this->input->post('Password'),
                        "Username"     => $this->input->post('Username'),
                        "Position"     => $this->input->post('Position'),
                   //   "Status"       => $this->input->post('Status'),
                        "date_created" => $this->getDateTime(),
                        "created_by"   => 'Admin'
                    );      

                    $config['upload_path']    = './user/';
                    $config['allowed_types']  = 'gif|jpg|jpeg|png|pdf|doc';
                    $config['max_size']       = 1000;
                    $config['max_width']      = 1300;
                    $config['max_height']     = 1024;    
            
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('Picture');
                    $this->user_model->user_insert($data);

                    if ( ! $this->upload->do_upload())
                    {       
                        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                        $error = array('error' => $this->upload->display_errors());
                        redirect('admin_display/user', $error);
                    }
                    else
                    {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('success', $data);
                    }
                    
                }
        }


    


        public function getDateTime() 
        {
            date_default_timezone_set('Asia/Manila');
            $datestring = '%Y-%m-%d %h:%i:%s %a';
            $time = time();
         
            return mdate($datestring, $time);
        }
    


        public function driver_insert()
        {
            $this->form_validation->set_rules('driver_Image', 'driver_Image', 'required');
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
                $this->Admin_display->driver();
            }
                else
                {
                    $data = array
                    (
                        "driver_Lastname"   => $this->input->post('driver_Lastname'),
                        "driver_Firstname"  => $this->input->post('driver_Firstname'),
                        "driver_Middlename" => $this->input->post('driver_Middlename'),
                        "driver_Address"    => $this->input->post('driver_Address'),
                        "driver_Email"      => $this->input->post('driver_Email'),
                        "driver_Contact"    => $this->input->post('driver_Contact'),
                        "driver_License"    => $this->input->post('driver_License'),
                        "driver_Expired"    => $this->input->post('driver_Expired'),
                        "date_created"      => $this->getDateTime(),
                        "created_by"        => 'Admin'
                    );     

                    $config['upload_path']    = './drivers/';
                    $config['allowed_types']  = 'gif|jpg|jpeg|png|pdf|doc';
                    $config['max_size']       = 1000;
                    $config['max_width']      = 1300;
                    $config['max_height']     = 1024;    
            
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('driver_Image');
                    $this->user_model->user_insert($data);

                    if ( ! $this->upload->do_upload())
                    {       
                        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                        $error = array('error' => $this->upload->display_errors());
                        redirect('admin_display/driver', $error);
                    }
                    else
                    {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('success', $data);
                    }
                        $this->driver_model->driver_insert($data);
                        redirect('admin_display/driver');
            }
        }









































}

?>