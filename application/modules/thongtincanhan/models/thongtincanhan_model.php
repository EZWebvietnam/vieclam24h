<?php
class Thongtincanhan_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function save_info($id,array $data)
    {
        $id = intval($id);
   
        $this->db->where('u_id',$id);
        $this->db->update('tbl_job_user',$data);
    }
    public function info_detail($id){
        $id = intval($id);
        $this->db->select();
        $this->db->where('u_id',$id);
        $query_array = $this->db->get('tbl_job_user');
        return $query_array->result_array();
    }
}
?>
