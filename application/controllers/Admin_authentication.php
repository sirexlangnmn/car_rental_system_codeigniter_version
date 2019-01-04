<?php


Class Admin_authentication extends CI_Controller 
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
        //    $this->load->model('calendar_model');

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
            $this->load->view('include/header');
            $this->load->view('admin/login/index');  
        }



    public function user_login_process() 
    {
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) 
        {
            if (isset($this->session->userdata['logged_in']))
            {   
                $this->admin_display->index();
            }
            else
            {        
                $this->index();  
            }
        }

        else
        {
            $result = $this->login_model->login_user();

            switch($result)
            {
                case 'logged_in':
                $data = array
                (   
                    'car_available_count' => $this->car_model->car_available_count(),
                    'car_reserved_count' => $this->car_model->car_reserved_count(),
                    'car_inactive_count' => $this->car_model->car_inactive_count(),
                    'pending' => $this->reservation_model->reservation_pending_count(),
                    'confirmed' => $this->reservation_model->reservation_confirmed_count(),
                    'upcoming' => $this->reservation_model->reservation_upcoming_count(),
                    'ongoing' => $this->reservation_model->reservation_ongoing_count(),
                    'finished' => $this->reservation_model->reservation_finished_count(),
                    'cancelled' => $this->reservation_model->reservation_cancelled_count(),
                    'unfulfilled' => $this->reservation_model->reservation_unfulfilled_count()
                );
                
                $this->load->view('include/header');
                $this->load->view('include/nav', array('logged_in' => $this->logged_in));
                $this->load->view('include/sidenav');
                $this->load->view('admin/index', $data);
                $this->load->view('include/footer');   
            
                break;
                case 'incorect_password':
                    $this->load->view('include/header', array('logged_in' => $this->logged_in));
                    $this->load->view('admin/login/index'); 
                    break;
                case 'not_activated':
                    $this->load->view('include/header',  array('logged_in' => $this->logged_in));
                    $this->load->view('admin/login/index'); 
                    break;
                case 'email_not_found':
                    $this->load->view('include/header',  array('logged_in' => $this->logged_in));
                    $this->load->view('admin/login/index'); 
                    break;
            }
              
        }
    }


    public function logout() 
    {

        $sess_array = array
        (
            'email' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->load->view('include/header');
        $this->load->view('admin/login/index'); 
    }






}
