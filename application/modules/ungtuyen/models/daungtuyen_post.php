<?php
class Daungtuyen_post extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function view_daungtuyen_detail($id = null){
        $id = intval($id);
        $this->db->select();
        $this->db->where('e_id',$id);
        $query_array = $this->db->get('tbl_job_post');
        return $query_array->result_array();
    }
    public function load_post($id)
    {
        $id = intval($id);
        $sql_join =" SELECT tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_title,tbl_job_post.e_status,tbl_job_post.m_id,tbl_job_post.e_daluu1,tbl_job_post.e_nghe,tbl_job_post.e_nghe1,tbl_job_post.e_daluu1,tbl_job_post.e_daungtuyen1,tbl_job_post.e_nghe2,tbl_job_post.e_nghe3,tbl_job_post.e_mem,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_luong,tbl_job_post.e_luonga,tbl_job_post.e_luongb,tbl_job_post.e_date,tbl_job_post.e_dateActive,tbl_job_post.e_lastDate,tbl_job_post.e_visits,tbl_job_post.e_datesave"
                . ",tbl_job_user.u_companyName "
                . " FROM tbl_job_post"
                . " INNER JOIN tbl_nop_don ON tbl_job_post.e_id = tbl_nop_don.id_job "
                . " INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id"
                . " WHERE tbl_nop_don.id_user = $id ";
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function delete($id,$id_user)
    {
        $id = intval($id);
        $id_user = intval($id_user);
        $where = array('e_id'=>$id,'u_id'=>$id_user);
        $this->db->delete('tbl_job_post',$where);
    }
}
?>