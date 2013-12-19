<?php
class Taotintd_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function save_tintd($id,array $data)
    {
        $id = intval($id);
        $this->db->where('e_id',$id);
        $this->db->update('tbl_job_post',$data);
    }
    public function tintd_detail($id = null){
       $id = intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_mst,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_capbacID,tbl_job_post.e_request,tbl_job_post.e_lienhe,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"                
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.e_id = $id";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
}
