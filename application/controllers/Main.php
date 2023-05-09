<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
        parent::__construct();

        $this->load->library('form_validation');

        $this->load->model('loginmodel');

        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('security');
        $this->load->library('session');  
        $this->load->library('form_validation');
        $this->load->library("pagination"); 
        $this->load->library('zip');
        $this->load->helper('file');
    }

	public function index(){
        date_default_timezone_set('Asia/Manila');

        // session_destroy();
		if (isset($_SESSION['user']['employee_id'])) {
            $data['db_id'] = $_SESSION['user']['db_id'];
            $data['employee_id'] = $_SESSION['user']['employee_id'];
			$data['first_name'] = $_SESSION['user']['f_name'];
            $data['last_name'] = $_SESSION['user']['s_name'];
            $data['category'] = $_SESSION['user']['category'];

            // $data['page'] = "main";
            
            // $data['header'] = $this->load->view('header', $data, true);
            // $data['footer'] = $this->load->view('footer', $data, true);

            // $data['count'] = 0;

            $data['year'] = date("Y");
            $data['month'] = date("m"); 
            $data['days'] = cal_days_in_month(CAL_GREGORIAN, $data['month'], $data['year']);

            $this->load->view('dashboard', $data);
        } else {
            $data = array();

            // $data['page'] = "main";

            // $data['header'] = $this->load->view('header', $data, true);
            // $data['footer'] = $this->load->view('footer', $data, true);

            $this->load->view('login', $data);
        }
	}

	public function login(){
        /*Data that we receive from ajax*/
        $id_number = $this->input->post('id_number');
        $password = $this->input->post('password');

        $output = array('error' => false);

        // $this->form_validation->set_rules('email', 'Username:', 'required|trim|xss_clean|callback_validation');  
        // $this->form_validation->set_rules('password', 'Password:', 'required|trim');  

        $data = $this->loginmodel->login($id_number, $password);
 
		if($data['result']){
			$this->session->set_userdata('user', $data['result']);
            $output['error'] = false;
            $output['message'] = $data['message']; 
        } else {
			$output['error'] = true;
			$output['message'] = $data['message']; 
		}
 
		echo json_encode($output);
    }

    public function logout(){  
        $this->session->sess_destroy();  
        redirect('main/index');  
    }
}
