<?php
class Dangky extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function save_dangky(array $data)
    {
        $this->db->insert('tbl_job_user',$data);
        return $this->db->insert_id();
    }
}
?>