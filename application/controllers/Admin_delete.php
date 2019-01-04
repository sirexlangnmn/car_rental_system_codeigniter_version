<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_delete extends CI_Controller 
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
     //       $this->load->model('calendar_model');

            $this->load->model('car_model');
            $this->load->model('cat_model');
            $this->load->model('engine_model');
            $this->load->model('brand_model');
            $this->load->model('transmission_model');
            $this->load->model('fuel_model');
            $this->load->model('status_model');
            $this->load->model('rating_model');

              
    }


        public function car_delete($id)
        {   
            $id = $this->car_model->car_delete($id);
            
            redirect('Admin_display/fleet');  
        }

        public function delete_message()
        {
            $data = array
            (
                'car_delete' => $this->car_model->car_delete() , 
                'message' => $message['message'] = 'Data Deleted Successfully'
            );
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/human_resource/car', $data);
                $this->load->view('include/footer');
        }


        public function car_multi_delete($ids)
        {
            $car_IDs = $this->input->post('ids');
            $car_IDs = implode(',',$car_IDs);
            
            $this->load->model('car_model');
            $this->car_model->car_multi_delete($car_IDs);
           
            redirect('Admin_display/fleet');
        }




        public function cat_delete($id)
        {   
            $id = $this->cat_model->cat_delete($id);       
            redirect('Admin_display/car_category');
        }

        
        public function brand_delete($id)
        {   
            $id = $this->brand_model->brand_delete($id);       
            redirect('Admin_display/car_brand');
        }

        
        public function transmission_delete($id)
        {   
            $id = $this->transmission_model->transmission_delete($id);       
            redirect('Admin_display/car_transmission');
        }


        public function fuel_delete($id)
        {   
            $id = $this->fuel_model->fuel_delete($id);       
            redirect('Admin_display/car_fuel');
        }


        public function engine_delete($id)
        {   
            $id = $this->engine_model->engine_delete($id);       
            redirect('Admin_display/car_engine');
        }


        public function status_delete($id)
        {   
            $id = $this->status_model->status_delete($id);       
            redirect('Admin_display/car_status');
        }



        public function driver_delete($id)
        {   
            $id = $this->driver_model->driver_delete($id);
            
            redirect('Admin_display/driver');
        }



        public function driver_multi_delete($ids)
        {
            $driver_IDs = $this->input->post('ids');
            $driver_IDs = implode(',',$driver_IDs);
            
            $this->driver_model->driver_multi_delete($driver_IDs);
           
            redirect('Admin_display/driver');
        }


          public function user_delete($id)
        {   
            $id = $this->user_model->user_delete($id);
            
            redirect('Admin_display/user');
        }



        public function user_multi_delete($ids)
        {
            $user_IDs = $this->input->post('ids');
            $user_IDs = implode(',',$user_IDs);
            
            $this->user_model->user_multi_delete($user_IDs);
           
            redirect('Admin_display/user');
        }









}

?>