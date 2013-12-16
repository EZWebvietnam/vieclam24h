<?php
class Cronmail extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->model('cronmailmodel');
        $list_user = $this->cronmailmodel->get_id_nghe();
        $count = count($list_user);
        $link = "";
        
        foreach ($list_user as $user) {

            $list_job = $this->cronmailmodel->get_job();
            foreach ($list_job as $job) {
                $link .= "<a href='http://nhucauvieclam.net/tin-tuyen-dung/" . $job['e_id'] .
                    "-" . mb_strtolower(url_title(removesign($job['e_title']))) . "'>" . $job['e_title'] .
                    "</a><br>";
            }
           
            $this->sendmail($user['u_email'],$user['u_fullname'],$link);
             $link="";
        }
    }
    public function sendmail($to,$name,$link)
    {
        $this->load->library('maillinux');
        $subject = "Danh sách việc làm mới nhất";
        $content = "Xin chào bạn $name ! <br>
        Nhu Cầu Việc Làm xin gửi bạn danh sách việc làm mới nhất của hệ thống<br>
        " . $link;
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from, $to, $subject, $content);
    }
}
?>