<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class LoginModel extends CI_Model
{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login($id_number, $password){
        // $this->db->where('user_email', $email);
        // $this->db->where('is_verified', 1);
        // $query = $this->db->get('tbl_user_priv');

        $data = array();

        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('employee_id', $id_number);
        $this->db->where('password', $password);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0){
            $user = $query->result_array();

            $data['message'] = 'Successfully login!';
            $data['result'] = $query->row_array();
        } else {
            $data['result'] = array();
            $data['message'] = 'Employee not found!';
        }

        return $data;
    }
}