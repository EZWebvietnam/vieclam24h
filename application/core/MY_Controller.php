<?php
class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct() {
        parent::__construct();
        
    }
    public function load_cate_job()
    {
        $this->load->model('home/home_model');
        $this->data['list_cate_job']=$this->home_model->get_cate();
        
    }
    public function load_user()
    {
        $this->load->model('home/home_model');
        $this->data['info_user']=$this->home_model->get_user();
        
    }
    public function load_city()
    {
        $this->load->model('home/home_model');
        $this->data['list_city']=$this->home_model->get_city();
        
    }
    public function load_time()
    {
        $this->load->model('home/home_model');
        $this->data['list_time']=$this->home_model->get_time();   
    }
    public function load_age()
    {
        $this->load->model('home/home_model');
        $this->data['list_age']=$this->home_model->get_age();   
    }
    public function load_bangcap()
    {
        $this->load->model('home/home_model');
        $this->data['list_bangcap']=$this->home_model->get_bangcap();   
    }
    public function load_capbac()
    {
        $this->load->model('home/home_model');
        $this->data['list_capbac']=$this->home_model->get_capbac();   
    }
    public function load_hoso()
    {
        $this->load->model('home/home_model');
        $this->data['list_hoso']=$this->home_model->get_hoso();   
    }
    public function load_luong()
    {
        $this->load->model('home/home_model');
        $this->data['list_luong']=$this->home_model->get_luong();   
    }
    public function load_exp()
    {
        $this->load->model('home/home_model');
        $this->data['list_exp']=$this->home_model->get_exp();   
    }
    public function load_sex()
    {
        $this->load->model('home/home_model');
        $this->data['list_sex']=$this->home_model->get_sex();   
    }
    public function load_ngoaingu()
    {
        $this->load->model('home/home_model');
        $this->data['list_ngoaingu']=$this->home_model->get_ngoaingu();   
    }
    public function load_trinhdonn()
    {
        $this->load->model('home/home_model');
        $this->data['list_trinhdonn']=$this->home_model->get_trinhdonn();   
    }
    public function load_loaitn()
    {
        $this->load->model('home/home_model');
        $this->data['list_loaitn']=$this->home_model->get_loaitn();   
    }
}