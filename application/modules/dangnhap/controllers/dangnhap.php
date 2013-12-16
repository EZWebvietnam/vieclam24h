<?php class Dangnhap extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
  }
  public function index(){
      $active = true;
      $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
      $this->data['main_content']='view_index';
      $this->load->view('home/dangnhap',$this->data);
  } 
  public function login_uv()
  {
      $active = true;
      $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
      $this->data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
					$this->config->item('use_username', 'tank_auth'));
			$this->data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');
			$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('remember', 'Remember me', 'integer');
			$this->data['errors'] = array();
            
			if ($this->form_validation->run()) {
			 // validation ok
				if ($this->tank_auth->login(
						$this->form_validation->set_value('login'),
						$this->form_validation->set_value('password'),
						$this->form_validation->set_value('remember'),
						$this->data['login_by_username'],
						$this->data['login_by_email'])) {								// success
                                                redirect('/trang-chu');

				} else {
					$errors = $this->tank_auth->get_error_message();
					if (isset($errors['banned'])) {								// banned user
						$this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);

					} 
                                        else
                                        {												// fail
                                            foreach ($errors as $k => $v)	$this->data['errors'][$k] = $this->lang->line($v);
                                        }
				}
			}
            $this->data['main_content']='view_dangnhapuv';
            $this->load->view('home/dangnhap',$this->data);
  }  
  public function logout()
  {
        $this->tank_auth->logout();
		$this->session->sess_create();
		$this->_show_message($this->lang->line('auth_message_logged_out'));
  }
  function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('/trang-chu');
	}
}
?>