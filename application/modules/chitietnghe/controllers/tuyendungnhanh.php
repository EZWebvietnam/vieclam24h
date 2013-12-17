<?php
class Tuyendungnhanh extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tuyendungnhanh_up');
        $this->load->library('tank_auth');
    }
    public function tuyendungnhanh_post($id)
    {   
        parent::load_city();
        parent::load_luong();
        parent::load_exp();
        parent::load_bangcap();
        parent::load_capbac();
        $this->load->library('pagination1');
        $this->load->helper('url');
        
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
        }
       
        if($this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
        if(empty($id))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $nghe_detail = $this->tuyendungnhanh_up->get_nghanh_nghe_detail($id);
        $config['base_url'] = base_url('nganh-nghe/'.$nghe_detail[0]['m_id'].'-'.mb_strtolower(url_title(removesign($nghe_detail[0]['m_name']))));
        $config['total_rows'] =count($this->tuyendungnhanh_up->tintuyendung_post_count($id));
        $config['per_page'] = 10;
        $config['uri_segment'] = 5;
       
        $page  = $this->uri->segment(4);
        $page = preg_replace('/[^0-9]/','',$page);
        
        if ($page == '') {
            $page = 1;
        }
        
        $page = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            return;
        }
        $this->pagination1->initialize($config);
        $this->data['tuyendung_detail']= $this->tuyendungnhanh_up->hot_post($id);
        
        $this->data['sanggia_detail']= $this->tuyendungnhanh_up->sanggia_post();
        
        $this->data['tuyendungnhanh_detail']= $this->tuyendungnhanh_up->tintuyendung_post($id,$page,$config['per_page']);
          
        $this->data['main_content']='view_tuyendungnhanh';
        $this->load->view('home/chitietnghe_layout',$this->data);
    }
    public function timviecnhanh_post($id)
    {  
         parent::load_city();
        parent::load_luong();
        parent::load_exp();
        parent::load_bangcap();
        parent::load_capbac();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        if(empty($id))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['uvsanggia_detail']= $this->tuyendungnhanh_up->timviec_sanggia();
        
        $this->data['uvhot_detail']= $this->tuyendungnhanh_up->timviec_hot($id);
        
        $this->data['main_content']='view_timviecnhanh';
        $this->load->view('home/chitietnghe_layout',$this->data);
    }
    public function tuyendungnhanh_thanhpho($id)
    {   
        $this->load->library('pagination1');
        $this->load->helper('url');
         parent::load_city();
        parent::load_luong();
        parent::load_exp();
        parent::load_bangcap();
        parent::load_capbac();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
             $this->data['is_login'] = 0;
        }
       
        if($this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
        if(empty($id))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $nghe_detail = $this->tuyendungnhanh_up->get_thanh_pho_detail($id);
        $config['base_url'] = base_url('nganh-nghe/'.$nghe_detail[0]['n_id'].'-'.mb_strtolower(url_title(removesign($nghe_detail[0]['n_name']))));
        $config['total_rows'] =count($this->tuyendungnhanh_up->tintuyendung_post_count($id));
        $config['per_page'] = 10;
        $config['uri_segment'] = 5;
       
        $page  = $this->uri->segment(4);
        $page = preg_replace('/[^0-9]/','',$page);
        
        if ($page == '') {
            $page = 1;
        }
        
        $page = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            return;
        }
        $this->pagination1->initialize($config);
         $this->data['tuyendung_detail']= $this->tuyendungnhanh_up->hot_post($id);
         $this->data['sanggia_detail']= $this->tuyendungnhanh_up->sanggia_post();
         $this->data['tuyendungnhanh_detail']= $this->tuyendungnhanh_up->tintuyendung_thanhpho($id,$page,$config['per_page']);
         $this->data['main_content']='view_tuyendungnhanh';
        $this->load->view('home/chitietnghe_layout',$this->data);
    }
}
?>