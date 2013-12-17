<?php
class Tuyendungnhanh_up extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function tintuyendung_post($id = null,$number,$offset)
    {   
        $id = intval($id);
        $number = intval($number);
        $offset = intval($offset);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"                 
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.m_id = ".$id." LIMIT $number,$offset";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function tintuyendung_post_count($id = null)
    {   
        $id = intval($id);

        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"                 
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.m_id = ".$id;
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function sanggia_post()
    {        
        
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"                 
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.e_sanggia = 1 ";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function hot_post($id)
    {                
        $id = intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"                 
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.e_hot = 1 AND tbl_job_post.m_id = $id";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function tintimviec_post($id = null)
    {   
        $id = intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_employers_post.u_id,tbl_employers_post.j_id,tbl_employers_post.j_hot,tbl_employers_post.j_sanggia,tbl_employers_post.m_id,tbl_employers_post.j_countryID,tbl_employers_post.j_cityID,tbl_employers_post.j_cityID1,tbl_employers_post.j_cityID2,tbl_employers_post.j_cityID3,tbl_employers_post.j_title,tbl_employers_post.j_copy,tbl_employers_post.j_year,tbl_employers_post.j_muctieunn,tbl_employers_post.j_kynang,tbl_employers_post.j_dalam,tbl_employers_post.j_luongdaco,tbl_employers_post.j_chucmm,tbl_employers_post.j_luongmm,tbl_employers_post.j_timeID,tbl_employers_post.j_goto,tbl_employers_post.j_date,tbl_employers_post.j_date,tbl_employers_post.j_update,tbl_employers_post.j_lastdate,tbl_employers_post.j_visits,tbl_employers_post.j_active,tbl_employers_post.j_activeSearch,tbl_employers_post.j_hienthi,tbl_employers_post.j_trinhdo,tbl_employers_post.j_nganhhoc,tbl_employers_post.j_namtotnghiep,tbl_employers_post.j_loaitotnghiep,tbl_employers_post.j_truongdahoc,tbl_employers_post.j_ngoaingu,tbl_employers_post.j_trinhdonn,tbl_employers_post.j_tinhoc,tbl_employers_post.j_bangcapkhac,tbl_employers_post.j_kinhnghiem,tbl_employers_post.j_infokinhnghiem,tbl_employers_post.j_datestart,tbl_employers_post.j_thamkhao"                 
                . " FROM tbl_employers_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_employers_post.u_id WHERE tbl_employers_post.m_id = ".$id;
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function timviec_sanggia()
    {           
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_employers_post.u_id,tbl_employers_post.j_id,tbl_employers_post.j_hot,tbl_employers_post.j_sanggia,tbl_employers_post.m_id,tbl_employers_post.j_countryID,tbl_employers_post.j_cityID,tbl_employers_post.j_cityID1,tbl_employers_post.j_cityID2,tbl_employers_post.j_cityID3,tbl_employers_post.j_title,tbl_employers_post.j_copy,tbl_employers_post.j_year,tbl_employers_post.j_muctieunn,tbl_employers_post.j_kynang,tbl_employers_post.j_dalam,tbl_employers_post.j_luongdaco,tbl_employers_post.j_chucmm,tbl_employers_post.j_luongmm,tbl_employers_post.j_timeID,tbl_employers_post.j_goto,tbl_employers_post.j_date,tbl_employers_post.j_date,tbl_employers_post.j_update,tbl_employers_post.j_lastdate,tbl_employers_post.j_visits,tbl_employers_post.j_active,tbl_employers_post.j_activeSearch,tbl_employers_post.j_hienthi,tbl_employers_post.j_trinhdo,tbl_employers_post.j_nganhhoc,tbl_employers_post.j_namtotnghiep,tbl_employers_post.j_loaitotnghiep,tbl_employers_post.j_truongdahoc,tbl_employers_post.j_ngoaingu,tbl_employers_post.j_trinhdonn,tbl_employers_post.j_tinhoc,tbl_employers_post.j_bangcapkhac,tbl_employers_post.j_kinhnghiem,tbl_employers_post.j_infokinhnghiem,tbl_employers_post.j_datestart,tbl_employers_post.j_thamkhao"                 
                . " FROM tbl_employers_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_employers_post.u_id WHERE tbl_employers_post.j_sanggia = 1 ";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function timviec_hot($id = null)
    {           
        $id = intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_employers_post.u_id,tbl_employers_post.j_id,tbl_employers_post.j_hot,tbl_employers_post.j_sanggia,tbl_employers_post.m_id,tbl_employers_post.j_countryID,tbl_employers_post.j_cityID,tbl_employers_post.j_cityID1,tbl_employers_post.j_cityID2,tbl_employers_post.j_cityID3,tbl_employers_post.j_title,tbl_employers_post.j_copy,tbl_employers_post.j_year,tbl_employers_post.j_muctieunn,tbl_employers_post.j_kynang,tbl_employers_post.j_dalam,tbl_employers_post.j_luongdaco,tbl_employers_post.j_chucmm,tbl_employers_post.j_luongmm,tbl_employers_post.j_timeID,tbl_employers_post.j_goto,tbl_employers_post.j_date,tbl_employers_post.j_date,tbl_employers_post.j_update,tbl_employers_post.j_lastdate,tbl_employers_post.j_visits,tbl_employers_post.j_active,tbl_employers_post.j_activeSearch,tbl_employers_post.j_hienthi,tbl_employers_post.j_trinhdo,tbl_employers_post.j_nganhhoc,tbl_employers_post.j_namtotnghiep,tbl_employers_post.j_loaitotnghiep,tbl_employers_post.j_truongdahoc,tbl_employers_post.j_ngoaingu,tbl_employers_post.j_trinhdonn,tbl_employers_post.j_tinhoc,tbl_employers_post.j_bangcapkhac,tbl_employers_post.j_kinhnghiem,tbl_employers_post.j_infokinhnghiem,tbl_employers_post.j_datestart,tbl_employers_post.j_thamkhao"                 
                . " FROM tbl_employers_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_employers_post.u_id WHERE tbl_employers_post.j_hot = 1 && tbl_employers_post.m_id = $id";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    
    public function get_cate()
    {
        $this->db->select();
        $query=$this->db->get('tbl_mucvieclam');
        return $query->result_array();
    }
    public function get_city()
    {
        $this->db->select();
        $query=$this->db->get('tbl_city');
        return $query->result_array();
    }
    public function get_time()
    {
        $this->db->select();
        $query=$this->db->get('tbl_thoigian');
        return $query->result_array();
    }
    public function get_user()
    {
        $this->db->select();
        $query=$this->db->get('tbl_job_user');
        return $query->result_array();
    }
    public function get_age()
    {
        $this->db->select();
        $query=$this->db->get('tbl_age');
        return $query->result_array();
    }
    public function get_bangcap()
    {
        $this->db->select();
        $query=$this->db->get('tbl_bangcap');
        return $query->result_array();
    }
    public function get_capbac()
    {
        $this->db->select();
        $query=$this->db->get('tbl_capbac');
        return $query->result_array();
    }
    public function get_hoso()
    {
        $this->db->select();
        $query=$this->db->get('tbl_hoso');
        return $query->result_array();
    }
    public function get_luong()
    {
        $this->db->select();
        $query=$this->db->get('tbl_luong');
        return $query->result_array();
    }
    public function get_exp()
    {
        $this->db->select();
        $query=$this->db->get('tbl_namexp');
        return $query->result_array();
    }
    public function get_sex()
    {
        $this->db->select();
        $query=$this->db->get('tbl_sex');
        return $query->result_array();
    }
    public function get_ngoaingu()
    {
        $this->db->select();
        $query=$this->db->get('tbl_ngoaingu');
        return $query->result_array();
    }
    public function get_trinhdonn()
    {
        $this->db->select();
        $query=$this->db->get('tbl_trinhdonn');
        return $query->result_array();
    }
    public function get_loaitn()
    {
        $this->db->select();
        $query=$this->db->get('tbl_loaitn');
        return $query->result_array();
    }
    public function get_nghanh_nghe_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('m_id',$id);
        $query = $this->db->get('tbl_mucvieclam');
        return $query->result_array();
    }
    public function get_thanh_pho_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('n_id',$id);
        $query = $this->db->get('tbl_city');
        return $query->result_array();
    }
    public function tintuyendung_thanhpho_count($id = null)
    {   
        $id = intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"                 
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.e_cityID = ".$id." OR  tbl_job_post.e_cityID1=".$id."  tbl_job_post.e_cityID2=".$id." OR  tbl_job_post.e_cityID3=".$id;
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function tintuyendung_thanhpho($id = null,$number,$offset)
    {   
        $id = intval($id);
        $number = intval($number);
        $offset = intval($offset);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"                 
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.e_cityID = ".$id." OR tbl_job_post.e_cityID1=".$id." OR tbl_job_post.e_cityID2=".$id." OR  tbl_job_post.e_cityID3=".$id." LIMIT $number,$offset";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
}
?>