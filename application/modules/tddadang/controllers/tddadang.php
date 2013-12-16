<?php
class Tddadang extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tindadang_post');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function index(){
        parent::load_cate_job();
        parent::load_city();
        parent::load_luong();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
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
            $this->data['tddangdang_detail']= $this->tindadang_post->load_post($u_id);
        if(empty($this->data['tddangdang_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['main_content']='view_tddadang';
        $this->load->view('home/tddadang_layout',  $this->data);
    }
}
?>