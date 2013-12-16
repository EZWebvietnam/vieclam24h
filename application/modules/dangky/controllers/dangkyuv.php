<?php
class Dangkyuv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dangky');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
    }
    
    public function dangky_uv()
    {   
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
        } else {
            $data['is_login'] = 0;
        }
        $this->form_validation->set_rules('email', 'Email',
            'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('c_fullname', 'Fullname',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('c_birthday', 'Birthday',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('c_address', 'Address',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password',
            'trim|required|xss_clean|min_length[' . $this->config->item('password_min_length',
            'tank_auth') . ']|max_length[' . $this->config->item('password_max_length',
            'tank_auth') . ']|alpha_dash');
        $this->form_validation->set_rules('password2', 'Confirm Password',
            'trim|required|xss_clean|matches[password]');
        $data['errors'] = array();
         
        if ($this->form_validation->run() == true) {
                $data_uv = array(
                'u_username' => $this->form_validation->set_value('email'),
                'u_password' => $this->form_validation->set_value('password'),
                'u_email' => $this->form_validation->set_value('email'),
                'u_birthday' => $this->form_validation->set_value('c_birthday'),
                'u_sex' => $this->input->post('c_sex'),
                'u_adress' => $this->form_validation->set_value('c_address'),
                'u_cityID' => $this->input->post('c_city'),
                'u_mobi' => $this->input->post('c_mobi'),
                'u_role' => 2,
                'u_fullname' => $this->form_validation->set_value('c_fullname'),
                'u_redate'=>strtotime('now')
                );

            if (!is_null($data = $this->tank_auth->create_user_normal($data_uv))) 
                {
                $this->sendmail($data['u_email'], $data['u_fullname']);
                $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                unset($data['password']); // Clear password (just for any case)
                $this->_show_message($this->lang->line('auth_message_registration_completed_2') .
                    ' ' . anchor('/auth/login/', 'Login'));
                redirect('admin/user/listuser');
            } else {
                
                $errors = $this->tank_auth->get_error_message();
                foreach ($errors as $k => $v)
                    $data['errors'][$k] = $this->lang->line($v);
            }
            
        }
         $data['main_content'] = 'view_dangkyuv';
         $this->load->view('home/dangky_layout', $data);
    }
    function _show_message($message)
    {
	$this->session->set_flashdata('message', $message);
	redirect('/');
    }
    public function sendmail($to, $name)
    {
        $this->load->library('maillinux');
        $subject = "Đăng ký tài khoản thành công !";
        $body = "Xin chào " . $name . "!<br>
        Nhu Cầu Việc Làm xin thông báo:<br>
        Thông tin tài khoản của bạn đã được duyệt, vui lòng vào nhucauvieclam.net để xem chi tiết<br>
        Để tìm được công việc phù hợp bạn có thể:<br>
        - Cập nhật Hồ sơ tìm việc mới<br>
        - Tìm việc làm trong 1.000 vị trí tuyển dụng của các ngành nghề khác nhau<br>
        - Tạo CV để ứng tuyển vào vị trí mong muốn<br>
        Mọi thắc mắc vui lòng liên hệ:<br>
        - Email: nhucauvieclam@baoveantam.com<br>
        - Tổng đài hỗ trợ: 08.372.723.48-0906.703.499<br>
        Nhu Cầu Việc Làm luôn nỗ lực đem lợi ích thiết thực tới cộng đồng!<br>
        ";
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from,$to, $subject, $body);
    }
}
?>