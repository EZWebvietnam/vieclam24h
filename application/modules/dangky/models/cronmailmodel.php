<?php 
class Cronmailmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_id_nghe()
    {
        $sql="SELECT DISTINCT tbl_job_user.u_id,tbl_job_user.u_fullname,tbl_job_user.u_email FROM tbl_job_user WHERE tbl_job_user.is_mail = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_job()
    {
        $sql = "SELECT DISTINCT tbl_job_post.e_id,tbl_job_post.e_title FROM tbl_job_post ORDER BY e_id DESC LIMIT 10";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}  
?>
