<?php
class Qltimviec_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }    
    public function hsdadang_detail($id)
    {   
        intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_employers_post.u_id,tbl_employers_post.j_id,tbl_employers_post.j_hot,tbl_employers_post.j_sanggia,tbl_employers_post.m_id,tbl_employers_post.j_countryID,tbl_employers_post.j_cityID,tbl_employers_post.j_cityID1,tbl_employers_post.j_cityID2,tbl_employers_post.j_cityID3,tbl_employers_post.j_title,tbl_employers_post.j_copy,tbl_employers_post.j_year,tbl_employers_post.j_muctieunn,tbl_employers_post.j_kynang,tbl_employers_post.j_dalam,tbl_employers_post.j_luongdaco,tbl_employers_post.j_chucmm,tbl_employers_post.j_luongmm,tbl_employers_post.j_timeID,tbl_employers_post.j_goto,tbl_employers_post.j_update,tbl_employers_post.j_date,tbl_employers_post.j_lastdate,tbl_employers_post.j_update,tbl_employers_post.j_lastdate,tbl_employers_post.j_visits,tbl_employers_post.j_active,tbl_employers_post.j_activeSearch,tbl_employers_post.j_hienthi,tbl_employers_post.j_trinhdo,tbl_employers_post.j_nganhhoc,tbl_employers_post.j_namtotnghiep,tbl_employers_post.j_loaitotnghiep,tbl_employers_post.j_truongdahoc,tbl_employers_post.j_ngoaingu,tbl_employers_post.j_trinhdonn,tbl_employers_post.j_tinhoc,tbl_employers_post.j_bangcapkhac,tbl_employers_post.j_kinhnghiem,tbl_employers_post.j_infokinhnghiem,tbl_employers_post.j_datestart,tbl_employers_post.j_thamkhao,tbl_employers_post.j_status"                 
                . " FROM tbl_employers_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_employers_post.u_id WHERE tbl_employers_post.u_id = $id";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function delete($id,$id_user)
    {
        $id = intval($id);
        $id_user = intval($id_user);
        $where = array('j_id'=>$id,'u_id'=>$id_user);
        $this->db->delete('tbl_employers_post',$where);
    }
    public function daluu_post($id)
    {
        $id = intval($id);
        $sql_join =" SELECT tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_title,tbl_job_post.e_status,tbl_job_post.m_id,tbl_job_post.e_daluu1,tbl_job_post.e_nghe,tbl_job_post.e_nghe1,tbl_job_post.e_daluu1,tbl_job_post.e_daungtuyen1,tbl_job_post.e_nghe2,tbl_job_post.e_nghe3,tbl_job_post.e_mem,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_luong,tbl_job_post.e_luonga,tbl_job_post.e_luongb,tbl_job_post.e_date,tbl_job_post.e_dateActive,tbl_job_post.e_lastDate,tbl_job_post.e_visits,tbl_job_post.e_datesave"
                . ",tbl_job_user.u_companyName "
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_save_tin ON tbl_job_post.e_id = tbl_save_tin.id_job "
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id"
                . " WHERE tbl_save_tin.id_user = $id ";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function ungtuyen_post($id)
    {
        $id = intval($id);
        $sql_join =" SELECT tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_title,tbl_job_post.e_createdate,tbl_job_post.e_status,tbl_job_post.m_id,tbl_job_post.e_daluu1,tbl_job_post.e_nghe,tbl_job_post.e_nghe1,tbl_job_post.e_daluu1,tbl_job_post.e_daungtuyen1,tbl_job_post.e_nghe2,tbl_job_post.e_nghe3,tbl_job_post.e_mem,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_luong,tbl_job_post.e_luonga,tbl_job_post.e_luongb,tbl_job_post.e_date,tbl_job_post.e_dateActive,tbl_job_post.e_lastDate,tbl_job_post.e_visits,tbl_job_post.e_datesave"
                . ",tbl_job_user.u_companyName "
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_save_tin ON tbl_job_post.e_id = tbl_save_tin.id_job "
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id"
                . " WHERE tbl_save_tin.id_send = $id ";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
}
?>