<?php
class Qltimviec extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qltimviec_model');
//        $this->load->library('tank_auth');
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
//        $active = true;
//        $location = 'home';
//        if ($this->tank_auth->is_logged_in($active, $location)) {
//            
//            $this->data['is_login'] = 1;
//            
//        } else {
//            $this->data['is_login'] = 0;
//            redirect('/');
//        }
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
        $this->data['qltimviec_detail']= $this->qltimviec_model->load_employers($u_id);
        $this->data['qlungtuyen_detail']= $this->qltimviec_model->load_employers_ungtuyen($u_id);
        $this->data['qlhoso_detail']= $this->qltimviec_model->load_post($u_id);
        if(empty($this->data['qltimviec_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['main_content']='view_qltimviec';
        $this->load->view('home/qltimviec_layout',  $this->data);
    }
}
?>