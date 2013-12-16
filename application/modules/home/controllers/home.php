<?php
class Home extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
//        $this->load->library('tank_auth');
    }
    public function index(){
        parent::load_cate_job();
        parent::load_time();
//        $active = true;
//        $location = 'home';
//        if ($this->tank_auth->is_logged_in($active, $location)) {
//            $this->data['is_login'] = 1;
//        } else {
//            $this->data['is_login'] = 0;
//        }
        $this->data['tuyendung_detail']= $this->home_model->hot_post();        
        $this->data['job_list'] = $this->home_model->user_post();        
        $this->data['main_content'] = 'view_home';
        $this->load->view('home/home_layout',$this->data);
    }  
}
?>