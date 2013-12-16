<?php
class Daungtuyen extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('daungtuyen_post');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function index(){
        parent:: load_cate_job();
        parent:: load_city();
        parent:: load_exp();
        parent:: load_bangcap();
        parent:: load_capbac();
        parent:: load_luong();
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
            $this->data['ungtuyen_detail']= $this->daungtuyen_post->load_post($u_id);
        if(empty($this->data['ungtuyen_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['main_content']='view_daungtuyen';
        $this->load->view('home/daungtuyen_layout',  $this->data);
    }
}
?>