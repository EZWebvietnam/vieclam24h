<?php
class Hosouv extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('hsuv_post');
        $this->load->library('tank_auth');
        $this->load->library('session');
        
    }
    public function hosouv_post($id)
    {
        preg_match('/(\d+)/', $id, $b);
        parent::load_cate_job();
        parent::load_age();
        parent::load_bangcap();
        parent::load_capbac();
        parent::load_city();
        parent::load_exp();
        parent::load_luong();
        parent::load_sex();
        parent::load_sex();
        parent::load_time();
        parent::load_ngoaingu();
        parent::load_trinhdonn();
        parent::load_loaitn();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
           
        }
       
        $this->data['user_post_list']=  $this->hsuv_post->timviec_hot();
        $this->data['job_post_list']=  $this->hsuv_post->hot_post();
        $this->data['hsuv_detail']= $this->hsuv_post->load_post($b[0]);
        if(empty($this->data['hsuv_detail']))
        {
            show_404();
            exit;
        }
        $this->data['main_content']='view_hsuv';
        $this->load->view('home/hosouv_layout',  $this->data);
    }
    public function hs_uv_pending($id)
    {
        preg_match('/(\d+)/', $id, $b);
        parent::load_cate_job();
        parent::load_age();
        parent::load_bangcap();
        parent::load_capbac();
        parent::load_city();
        parent::load_exp();
        parent::load_luong();
        parent::load_sex();
        parent::load_sex();
        parent::load_time();
        parent::load_ngoaingu();
        parent::load_trinhdonn();
        parent::load_loaitn();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
           
        }
       
        $this->data['user_post_list']=  $this->hsuv_post->timviec_hot();
        $this->data['job_post_list']=  $this->hsuv_post->hot_post();
        $this->data['hsuv_detail']= $this->hsuv_post->load_post_($b[0]);
        if(empty($this->data['hsuv_detail']))
        {
            show_404();
            exit;
        }
        $this->data['main_content']='view_hsuv';
        $this->load->view('home/hosouv_layout',  $this->data);
    }
}
?>