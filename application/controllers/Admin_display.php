<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_display extends CI_Controller 
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
         // $this->load->model('calendar_model');

            $this->load->model('car_model');
            $this->load->model('cat_model');
            $this->load->model('engine_model');
            $this->load->model('brand_model');
            $this->load->model('transmission_model');
            $this->load->model('fuel_model');
            $this->load->model('status_model');
            $this->load->model('rating_model');

              
    }



        public function index()  // Dashboard
        {       
            $data = array
            (   
                'car_available_count' => $this->car_model->car_available_count(),
                'car_reserved_count'  => $this->car_model->car_reserved_count(),
                'car_inactive_count'  => $this->car_model->car_inactive_count(),

                'pending'             => $this->reservation_model->reservation_pending_count(),
                'confirmed'           => $this->reservation_model->reservation_confirmed_count(),
                'upcoming'            => $this->reservation_model->reservation_upcoming_count(),
                'ongoing'             => $this->reservation_model->reservation_ongoing_count(),
                'finished'            => $this->reservation_model->reservation_finished_count(),
                'cancelled'           => $this->reservation_model->reservation_cancelled_count(),
                'unfulfilled'         => $this->reservation_model->reservation_unfulfilled_count()
            );
            
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/index', $data);
                $this->load->view('include/footer');    
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }




    /*****************    Reservation   ********************/

        public function reservation()
        {
        //  $config = array();
            $config['base_url'] = base_url() . 'admin_display/reservation';
            $total_row = $this->reservation_model->reservation_count();
            $config['total_rows'] = $this->db->count_all('tbl_reservation');
        //  $config['total_rows'] = 200; 
            $config['per_page'] = 10;  // Limit per page
            $config['use_page_numbers'] = TRUE;
        //  $config['num_links'] = 3;

            echo $this->pagination->create_links();
         
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = "</ul>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tag1_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag1_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag1_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag1_close'] = "</li>";

            $this->pagination->initialize($config);

            $data = array
            (
                'reservation' => $this->reservation_model->reservation_pagination($config['per_page'], $this->uri->segment(3)),
                'links'       => $this->pagination->create_links()
            );                                          

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation_all', $data);
                $this->load->view('include/footer');  
            }
            else
            {
                $this->load->view('errors/error_404');
            }                
        }



        public function reservation_search()
        {  
            $data = array
            (
                'reservation_search' => $this->reservation_model->reservation_search($input_search),
            );

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation_search', $data);
                $this->load->view('include/footer');  
            }
            else
            {
                $this->load->view('errors/error_404');
            }            
        }


        public function reservation_history($id)
        {    
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_history($id)
            );
 
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer');    
            }
            else
            {
                $this->load->view('errors/error_404');
            }   
        }



        public function reservation_pending()
        {    
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_pending()
            );
 
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer');    
            }
            else
            {
                $this->load->view('errors/error_404');
            }   
        }



        public function reservation_confirmed()
        {
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_confirmed()
            );

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer'); 
            }
            else
            {
                $this->load->view('errors/error_404');
            }      
        }


        public function reservation_upcoming()
        {
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_upcoming()
            );

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer');      
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }


        public function reservation_ongoing()
        {
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_ongoing()
            );

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer');   
            }
            else
            {
                $this->load->view('errors/error_404');
            }      
        }


        public function reservation_finished()
        {
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_finished()
            );

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer'); 
            }
            else
            {
                $this->load->view('errors/error_404');
            }  
        }


        public function reservation_cancelled()
        {
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_cancelled()
            );

             if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer');   
            }
            else
            {
                $this->load->view('errors/error_404');
            }  
        }


        public function reservation_unfulfilled()
        {
            $data = array
            (
                'reservation' => $this->reservation_model->reservation_unfulfilled()
            );

             if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/reservation/reservation', $data);
                $this->load->view('include/footer');   
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }    



/*****************    Calendar and Schedule   ********************/
    



        public function schedule()
        {
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/calendar/schedule');
            $this->load->view('include/footer');     
        }



/*****************    Vehicle Management   ********************/

        public function vehicle()  // vehicle.php -- Static pa (Not includede in system)
        {
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/fleet/vehicle');
            $this->load->view('include/footer');  
        }


        public function fleet()
        {
            $data = array
            (   
                'fleet'         => $this->car_model->car_fetch(),   // Primary .. the rest are Foreign
                'category'      => $this->cat_model->cat_fetch(),
                'brand'         => $this->brand_model->brand_fetch(),
                'engine'        => $this->engine_model->engine_fetch(),
                'transmission'  => $this->transmission_model->transmission_fetch(),
                'fuel'          => $this->fuel_model->fuel_fetch(),
                'status'        => $this->status_model->status_fetch(),
             // 'rating'        => $this->rating_model->rating_fetch(),
                'driver'        => $this->driver_model->driver_fetch()
            );

             if(isset($data))
            {          
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/fleet/fleet', $data);
                $this->load->view('include/footer');
            }
            else
            {
                $this->load->view('errors/error_404');
            }  
        }


        public function fleet_search()
        {
            $input_search = $this->input->post('search');
            if(isset($input_search) and !empty($input_search))
            {
                $data = array
                (
                    'fleet'         => $this->car_model->car_search($input_search),
                    'category'      => $this->cat_model->cat_fetch(),
                    'brand'         => $this->brand_model->brand_fetch(),
                    'engine'        => $this->engine_model->engine_fetch(),
                    'transmission'  => $this->transmission_model->transmission_fetch(),
                    'fuel'          => $this->fuel_model->fuel_fetch(),
                    'status'        => $this->status_model->status_fetch()
                );

                if(isset($data))
                {
                    $this->load->view('include/header');
                    $this->load->view('include/nav');
                    $this->load->view('include/sidenav');
                    $this->load->view('admin/fleet/fleet/fleet', $data);
                    $this->load->view('include/footer'); 
                }    
                else
                {
                    redirect($this->fleet());
                }

            }
            else
            {
                $this->load->view('errors/error_404');
            }               
        }
  


        public function car_available()
        {
            $data = array
            (
                'fleet'         => $this->car_model->car_available(),
                'category'      => $this->cat_model->cat_fetch(),
                'brand'         => $this->brand_model->brand_fetch(),
                'engine'        => $this->engine_model->engine_fetch(),
                'transmission'  => $this->transmission_model->transmission_fetch(),
                'fuel'          => $this->fuel_model->fuel_fetch(),
                'status'        => $this->status_model->status_fetch()
            );
            
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/fleet/fleet', $data);
                $this->load->view('include/footer');  
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }



        public function car_reserved()
        { 
            $data = array
            (
                'fleet'         => $this->car_model->car_reserved(),
                'category'      => $this->cat_model->cat_fetch(),
                'brand'         => $this->brand_model->brand_fetch(),
                'engine'        => $this->engine_model->engine_fetch(),
                'transmission'  => $this->transmission_model->transmission_fetch(),
                'fuel'          => $this->fuel_model->fuel_fetch(),
                'status'        => $this->status_model->status_fetch()
            );
            
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/fleet/fleet', $data);
                $this->load->view('include/footer');   
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }


        public function car_inactive()
        { 
            $data = array
            (
                'fleet'         => $this->car_model->car_inactive(),
                'category'      => $this->cat_model->cat_fetch(),
                'brand'         => $this->brand_model->brand_fetch(),
                'engine'        => $this->engine_model->engine_fetch(),
                'transmission'  => $this->transmission_model->transmission_fetch(),
                'fuel'          => $this->fuel_model->fuel_fetch(),
                'status'        => $this->status_model->status_fetch()
            );
            
            if(isset($data))
            {     
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/fleet/fleet', $data);
                $this->load->view('include/footer'); 
            }
            else
            {
                $this->load->view('errors/error_404');
            }

        }


       
        public function car_category()
        {
         //   $config = array();
            $config['base_url'] = 'http://localhost/ci/admin_display/car_category';
            $total_row = $this->cat_model->cat_count();
            $config['total_rows'] = $this->cat_model->cat_count();
            $config['per_page'] = 5;  // Limit per page
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 3;
         
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = "</ul>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tag1_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag1_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag1_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag1_close'] = "</li>";

            $this->pagination->initialize($config);

            $data = array
            (
                'category' => $this->cat_model->cat_pagination($config['per_page'], $this->uri->segment(3)),
                'links'    => $this->pagination->create_links()
            );                                                               
            
            if(isset($data))
            {    
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/car_category/car_category', $data);
                $this->load->view('include/footer');   
            }
            else
            {
                $this->load->view('errors/error_404');
            }   
        }


        public function car_brand()
        {
            $config = array();
            $config['base_url'] = base_url() . 'admin_display/car_brand';
            $total_row = $this->brand_model->brand_count();
            $config['total_rows'] = $this->brand_model->brand_count();
            $config['per_page'] = 5;  // Limit per page
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 3;
         
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = "</ul>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tag1_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag1_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag1_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag1_close'] = "</li>";

            $this->pagination->initialize($config);

            $data = array
            (
                'brand' => $this->brand_model->brand_pagination($config['per_page'], $this->uri->segment(3)),
                'links' => $this->pagination->create_links()
            );                                                               
              
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/car_brand/car_brand', $data);
                $this->load->view('include/footer');  
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }
       


        public function car_transmission()
        {         
            $config = array();
            $config['base_url'] = base_url() . 'admin_display/car_transmission';
            $total_row = $this->transmission_model->transmission_count();
            $config['total_rows'] = $this->transmission_model->transmission_count();
            $config['per_page'] = 5;  // Limit per page
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 3;
         
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = "</ul>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tag1_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag1_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag1_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag1_close'] = "</li>";

            $this->pagination->initialize($config);

            $data = array
            (
                'transmission' => $this->transmission_model->transmission_pagination($config['per_page'], $this->uri->segment(3)),
                'links'        => $this->pagination->create_links()
            );                                                               
              
             if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/car_transmission/car_transmission', $data);
                $this->load->view('include/footer');      
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }


        
        public function car_engine()
        {
            $config = array();
            $config['base_url'] = base_url() . 'admin_display/car_engine';
            $total_row = $this->engine_model->engine_count();
            $config['total_rows'] = $this->engine_model->engine_count();
            $config['per_page'] = 5;  // Limit per page
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 3;
         
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = "</ul>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tag1_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag1_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag1_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag1_close'] = "</li>";

            $this->pagination->initialize($config);

            $data = array
            (
                'engine' => $this->engine_model->engine_pagination($config['per_page'], $this->uri->segment(3)),
                'links'  => $this->pagination->create_links()
            );                                                               
            
             if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/car_engine/car_engine', $data);
                $this->load->view('include/footer');     
            }
            else
            {
                $this->load->view('errors/error_404');
            }           
        }


        public function car_fuel()
        {
            $config = array();
            $config['base_url'] = base_url() . 'admin_display/car_fuel';
            $total_row = $this->fuel_model->fuel_count();
            $config['total_rows'] = $this->fuel_model->fuel_count();
            $config['per_page'] = 5;  // Limit per page
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 3;
         
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = "</ul>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tag1_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag1_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag1_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag1_close'] = "</li>";

            $this->pagination->initialize($config);

            $data = array
            (
                'fuel'  => $this->fuel_model->fuel_pagination($config['per_page'], $this->uri->segment(3)),
                'links' => $this->pagination->create_links()
            );                                                               
                
            if(isset($data))
            {    
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/car_fuel/car_fuel', $data);
                $this->load->view('include/footer');   
            }
            else
            {
                $this->load->view('errors/error_404');
            }   
        }


        public function car_status()
        {
            $data = array
            (
                'status' => $this->status_model->status_fetch()
            );

            if(isset($data))
            {    
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/car_status/car_status', $data);
                $this->load->view('include/footer');   
            }
            else
            {
                $this->load->view('errors/error_404');
            }    
        }



        public function car_rating()  // Under process.. To be follow
        {
            $data = array
            (
                'rating_fetch' => $this->rating_model->rating_fetch()
            );
            
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/fleet/car_rating/car_rating', $data);
                $this->load->view('include/footer');  
            }
            else
            {
                $this->load->view('errors/error_404');
            }     
        }


/*****************    Customer   ********************/


        public function customer() 
        {
            $data = array
            (
                'customer_fetch' => $this->customer_model->customer_fetch()
            );
             
            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/customer/customer', $data);
                $this->load->view('include/footer'); 
            }
            else
            {
                $this->load->view('errors/error_404');
            }    
        }
        


/*****************  Human Resource   ********************/
        public function user() 
        {
            $data = array
            (
                'user_fetch' => $this->user_model->user_fetch()
            );

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/human_resource/user', $data);
                $this->load->view('include/footer');  
            }
            else
            {
                $this->load->view('errors/error_404');
            }    
        }


        public function user_search()
        {
            $input_search = $this->input->post('search');
            if(isset($input_search) and !empty($input_search))
            {
                $data = array
                (
                    'user_search' => $this->user_model->user_search($input_search)
                );
                    
                if(isset($data))
                {
                        $this->load->view('include/header');
                    $this->load->view('include/nav');
                    $this->load->view('include/sidenav');
                    $this->load->view('admin/human_resource/user_search', $data);
                    $this->load->view('include/footer'); 
                }    
                else
                {
                    redirect($this->user());
                }  
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }


        public function driver()
        {
            $data = array
            (
                'driver_fetch' => $this->driver_model->driver_fetch()
            );

            if(isset($data))
            {
                $this->load->view('include/header');
                $this->load->view('include/nav');
                $this->load->view('include/sidenav');
                $this->load->view('admin/human_resource/driver', $data);
                $this->load->view('include/footer'); 
            }
            else
            {
                $this->load->view('errors/error_404');
            }            
        }



        public function driver_search()
        {
            $input_search = $this->input->post('search');
            if(isset($input_search) and !empty($input_search))
            {
                $data = array
                (
                    'driver_search' => $this->driver_model->driver_search($input_search)
                );
                    
                if(isset($data))
                {
                  $this->load->view('include/header');
                    $this->load->view('include/nav');
                    $this->load->view('include/sidenav');
                    $this->load->view('admin/human_resource/driver_search', $data);
                    $this->load->view('include/footer'); 
                }    
                else
                {
                    redirect($this->driver());
                }  
            }
            else
            {
                $this->load->view('errors/error_404');
            }
        }




/*****************  Mail and Messages   ********************/
        public function mailbox()  // mailbox.php
        {    
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/messages/mailbox');
            $this->load->view('include/footer');   
        }


        public function compose()
        {  
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/messages/compose');
            $this->load->view('include/footer');    
        }
        

        public function read_mail()
        {
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/messages/read_mail');
            $this->load->view('include/footer');    
        }


        public function mailbox_sent()
        {           
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/messages/mailbox_sent');
            $this->load->view('include/footer');   
        }
        

        public function messages()
        {   
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/messages/messages');
            $this->load->view('include/footer');    
        }

public function gps()
        {   
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $this->load->view('include/sidenav');
            $this->load->view('admin/gps');
            $this->load->view('include/footer');    
        }

       



   
}  
?>
