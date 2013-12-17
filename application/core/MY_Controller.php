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
        $list_cate = $this->home_model->get_cate();
        $array =array();
        foreach($list_cate as $data)
        {
            $array[$data['m_id']] = $data['m_name'];
        }
        $this->data['list_cate_job']=$array;
        
    }
    public function load_user()
    {
        $this->load->model('home/home_model');
        $this->data['info_user']=$this->home_model->get_user();
        
    }
    public function load_city()
    {
        $this->load->model('home/home_model');
        $list_city = $this->home_model->get_city();
        $array =array();
        foreach($list_city as $city)
        {
            $array[$city['n_id']] = $city['n_name'];
        }
        $this->data['list_city']=$array;
        
    }
    public function load_time()
    {
        $this->load->model('home/home_model');
        $list_time = $this->home_model->get_time();
        $array =array();
        foreach($list_time as $data)
        {
            $array[$data['t_id']] = $data['t_name'];
        }
        $this->data['list_time']=$array;   
    }
    public function load_age()
    {
        $this->load->model('home/home_model');
        $array = array();
        $list_age = $this->home_model->get_age();
        foreach($list_age as $age)
        {
            $array[$age['age_id']]=$age['age_name'];
        }
        $this->data['list_age']=$array;   
    }
    public function load_bangcap()
    {
        $this->load->model('home/home_model');
        $list_bang_cap = $this->home_model->get_bangcap();
        $array =array();
        foreach($list_bang_cap as $data)
        {
            $array[$data['bang_id']] = $data['bang_name'];
        }
        $this->data['list_bangcap']=$array;   
    }
    public function load_capbac()
    {
        $this->load->model('home/home_model');
        $list_cb = $this->home_model->get_capbac(); 
        $array =array();
        foreach($list_cb as $cb)
        {
            $array[$cb['cb_id']] = $cb['cb_name'];
        }
        $this->data['list_capbac']=$array;   
    }
    public function load_hoso()
    {
        $this->load->model('home/home_model');
        $this->data['list_hoso']=$this->home_model->get_hoso();   
    }
    public function load_luong()
    {
        $this->load->model('home/home_model');
        $list_luong = $this->home_model->get_luong();
        $array =array();
        foreach($list_luong as $luong)
        {
            $array[$luong['luong_id']] = $luong['luong_name'];
        }
        $this->data['list_luong']=$array;   
       
    }
    public function load_exp()
    {
        $this->load->model('home/home_model');
        $list_kn = $this->home_model->get_exp();
        $array =array();
        foreach($list_kn as $kn)
        {
            $array[$kn['exp_id']] = $kn['exp_name'];
        }
        $this->data['list_exp']=$array;   
    }
    public function load_sex()
    {
        $this->load->model('home/home_model');
        $array = array();
        $list_sex = $this->home_model->get_sex();
        foreach($list_sex as $sex)
        {
            $array[$sex['sex_id']]=$sex['sex_name'];
        }
       
        $this->data['list_sex']=$array;   
    }
    public function load_ngoaingu()
    {
        $this->load->model('home/home_model');
        $list_nn = $this->home_model->get_ngoaingu();
        $array = array();
        foreach($list_nn as $data)
        {
            $array[$data['nn_id']]=$data['nn_name'];
        }
        $this->data['list_ngoaingu']=$array;   
    }
    public function load_trinhdonn()
    {
        $this->load->model('home/home_model');
        $array = array();
        $trinh_do = $this->home_model->get_trinhdonn();
        foreach($trinh_do as $data)
        {
            $array[$data['td_id']]=$data['td_name'];
        }
        $this->data['list_trinhdonn']=$array;   
    }
    public function load_loaitn()
    {
        $this->load->model('home/home_model');
        $list_tn = $this->home_model->get_loaitn();
        $array = array();
        foreach($list_tn as $data)
        {
            $array[$data['tn_id']]=$data['tn_name'];
        }
        $this->data['list_loaitn']=$array;   
    }
     public function load_city_1()
    {
        $this->load->model('home/home_model');
        $list_city = $this->home_model->get_city();
        
        $this->data['list_city_1']=$list_city;
        
    }
}