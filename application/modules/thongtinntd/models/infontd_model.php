<?php
class Infontd_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function save_info(array $data)
    {
        $this->db->update('tbl_job_user',$data);
        $this->db->where('u_id',$data);
        return $this->db->update_id();
    }
    public function info_detail($id = null){
        $id = intval($id);
        $this->db->select();
        $this->db->where('u_id',$id);
        $query_array = $this->db->get('tbl_job_user');
        return $query_array->result_array();
    }
}
?>
