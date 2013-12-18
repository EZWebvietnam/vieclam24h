<?php
class Taotintd_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function save_tintd(array $data)
    {
        $this->db->insert('tbl_job_post',$data);
        return $this->db->insert_id();
    }
    public function tintd_detail($id = null){
       $id = intval($id);
        $this->db->select();
        $this->db->where('u_id',$id);
        $query_array = $this->db->get('tbl_job_user');
        return $query_array->result_array();
    }
}
