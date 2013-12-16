<?php
class Daluu_post extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function view_tddaluu_detail($id = null){
        $id = intval($id);
        $this->db->select();
        $this->db->where('e_id',$id);
        $query_array = $this->db->get('tbl_job_post');
        return $query_array->result_array();
    }
    public function load_post($id)
    {
        $id = intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_daluu1,tbl_job_user.u_daluu2,tbl_job_user.u_daluu3,tbl_job_user.u_daungtuyen1,tbl_job_user.u_daungtuyen2,tbl_job_user.u_daungtuyen3"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_title,tbl_job_post.m_id,tbl_job_post.e_daluu1,tbl_job_post.e_nghe,tbl_job_post.e_nghe1,tbl_job_post.e_daluu1,tbl_job_post.e_daungtuyen1,tbl_job_post.e_nghe2,tbl_job_post.e_nghe3,tbl_job_post.e_mem,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_luong,tbl_job_post.e_luonga,tbl_job_post.e_luongb,tbl_job_post.e_date,tbl_job_post.e_dateActive,tbl_job_post.e_lastDate,tbl_job_post.e_visits,tbl_job_post.e_datesave"
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.e_daluu1 = $id ";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
}
?>