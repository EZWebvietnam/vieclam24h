<?php
class Tintd extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('taotintd_model');
        $this->load->library('session');
        $this->load->library('tank_auth');
    }
    public function index($id)
    {   
        parent::load_capbac();
        parent::load_city();
        parent::load_cate_job();
        parent::load_time();       
        parent::load_luong();
        parent::load_exp();
        parent::load_bangcap();
        parent::load_sex();
        parent::load_age();
        parent::load_hoso();
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
        $this->data['taotintd_detail']= $this->taotintd_model->tintd_detail($id);
        if($this->input->post())
        {
            $title = $this->input->post('tieu_de');
            $capbac = $this->input->post('select_box_chuc_vu');
            $nganhnghe = $this->input->post('nganh_nghe');
            $city = $this->input->post('dia_diem');
            $thoigian = $this->input->post('thoi_gian_lam_viec');
            $mucluong = $this->input->post('muc_luong');
            $soluong = $this->input->post('so_luong');
            $quyenloi = $this->input->post('quyen_loi');
            $mota = $this->input->post('mo_ta_cong_viec');
            $namkinhnghiem = $this->input->post('so_nam_kinh_nghiem');
            $trinhdo = $this->input->post('trinh_do');
            $gioitinh = $this->input->post('c_gioi_tinh');
            $dotuoi = $this->input->post('c_do_tuoi');
            $yeucau = $this->input->post('yeu_cau');
            $hoso = $this->input->post('ho_so');
            $denngay = strtotime($this->input->post('c_ngay_co_the_bat_dau_lam'));
            $lienhe = $this->input->post('cach_lien_he');
            
            $data = array('e_title'=>$title,
                'e_capbacID'=>$capbac,
                'm_id'=>$nganhnghe,
                'u_id'=>$u_id,
                'e_cityID'=>$city,
                'e_timeID'=>$thoigian,
                'e_luong'=>$mucluong,
                'e_mem'=>$soluong,
                'e_phucLoi'=>$quyenloi,
                'e_descript'=>$mota,
                'e_kinhnghiem'=>$namkinhnghiem,
                'e_trinhdo'=>$trinhdo,
                'e_sex'=>$gioitinh,
                'e_dotuoi'=>$dotuoi,
                'e_request'=>$yeucau,
                'e_hoso'=>$hoso,
                'e_lastDate'=>$denngay,
                'e_lienhe'=>$lienhe,
                'e_dateActive'=>strtotime('now'),
                'e_date'=>strtotime('now')
                );
               
            // Khi gán vào mảng xong, lưu xuống DB, hàm sẽ trả về một số là id được insert xuống
            $id = $this->taotintd_model->save_tintd($u_id,$data);
            if($id > 0)
            {
                //Insert thành công
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                // Insert không thành công
                 redirect($_SERVER['HTTP_REFERER']);
            }
        }
        else
        {
            $this->data['main_content']='view_tintd';
            $this->load->view('home/taotintd_layout',$this->data);
        }     
    }
}
?>