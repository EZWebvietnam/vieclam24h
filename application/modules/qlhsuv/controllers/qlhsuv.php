<?php
class Qlhsuv extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qlhsuv_model');
        $this->load->library('tank_auth');
    }
    public function index(){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $data['is_login'] = 1;
            
        } else {
            $data['is_login'] = 0;
            redirect('/');
        }
        if($this->session->userdata('u_role')==2)
        {
            redirect('/');
        }
        if($this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
        $data['qlhsuv_detail']= $this->qlhsuv_model->load_post($u_id);
        if(empty($data['qlhsuv_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_qlhsuv';
        $this->load->view('home/qlhsuv_layout',$data);
    }
}
?>