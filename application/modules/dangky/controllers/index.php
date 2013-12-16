<?php
class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
    }
    public function index()
    {
        parent::load_cate_job();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        $this->data['main_content'] = 'dangky_index';
        $this->load->view('home/dangky_layout', $this->data);
    }
}
?>