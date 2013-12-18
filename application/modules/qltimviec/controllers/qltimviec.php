<?php
class Qltimviec extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qltimviec_model');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function index(){
        parent::load_cate_job();
        parent::load_bangcap();
        parent::load_capbac();
        parent::load_cate_job();
        parent::load_exp();
        parent::load_luong();
        parent::load_city();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
            redirect('/');
        }
        if($this->session->userdata('u_role')==3)
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
        $this->data['dadang_detail']= $this->qltimviec_model->hsdadang_detail($u_id);
        $this->data['daluu_detail']= $this->qltimviec_model->daluu_post($u_id);
        $this->data['ungtuyen_detail']= $this->qltimviec_model->ungtuyen_post($u_id);
        
        $this->data['main_content']='view_qltimviec';
        $this->load->view('home/qltimviec_layout',  $this->data);
    }
}
?>