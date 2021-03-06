<?php
class Thongtincanhan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('thongtincanhan_model');
        $this->load->library('tank_auth');
    }
    public function index()
    {   
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
            
        } else {
            $data['is_login'] = 0;
        }
        if($this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $list_sex = $this->tuyendungnhanh_up->get_sex();
        $data['sex']=$list_sex;
        $data['info_list']=  $this->thongtincanhan_model->info_detail($u_id);
        
        if(empty($data['info_list']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']= 'view_thongtincanhan';
        if($this->input->post())
        {
            $hoten = $this->input->post('txt_ho_ten');
            $ngaysinh = $this->input->post('c_ngay_co_the_bat_dau_lam');
            $gioitinh = $this->input->post('gioi_tinh');
            $marry = $this->input->post('tinh_trang_hon_nhan');
            $diachi = $this->input->post('txt_dia_chi');
            $city = $this->input->post('select_tinh');
            $mobi = $this->input->post('txt_dien_thoai_lien_he');
            $email = $this->input->post('txt_email_lien_he');
            $ngaysinh = strtotime(''.$ngaysinh);
            
            $data = array('u_fullname'=>$hoten,
                'u_birthday'=>$ngaysinh,
                'u_sex'=>$gioitinh,
                'u_marry'=>$marry,
                'u_adress'=>$diachi,
                'u_cityID'=>$city,
                'u_mobi'=>$mobi,
                'u_email'=>$email
                );
            $this->thongtincanhan_model->save_info($u_id,$data);
            /*
            Doi voi ham update thi giong insert nhung truyen them id la id cua user muon update
            $this->thongtincanhan_model->save_update($id,$data);
            */
           
               
                 redirect($_SERVER['HTTP_REFERER']);
           
        }
        else
        {
            $data['main_content']='view_thongtincanhan';
            $this->load->view('home/thongtincanhan_layout',$data);
        }     
    }
}
?>
