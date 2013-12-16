<?php
class Hsdadang extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tindadang_post');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function index(){
        parent::load_cate_job();
        
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
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
        $this->data['hsdangdang_detail']= $this->tindadang_post->hsdadang_detail($u_id);
        
        $this->data['main_content']='view_hsdadang';
        $this->load->view('home/hsdadang_layout',  $this->data);
    }
}
?>

