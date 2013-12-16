<?php
$login = array(
    'name' => 'login',
    'id' => 'login',
    'value' => set_value('login'),
    'maxlength' => 80,
    'size' => 30,
    'class' => 'span12',
    'placeholder' => 'Username'
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or login';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'class' => 'span12',
    'placeholder' => 'Password',
    'type' => 'password'
);
?>
<div id="content-detail">
    <div class="GridInfo">
        <div class="Content">

            <h2>Đăng nhập</h2>

            <div id="login-image">
                <img src="<?php echo base_url(); ?>template/home/img/login_small.png" alt="Đăng nhập">        </div>

            <div id="login-panel">
                <form  enctype="multipart/form-data" id="SeekerNguoitimviecDangnhapForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>            <table class="TableForm">
                        <tbody><tr>
                                <th>Email</th>
                                <td>
                                    <?php echo form_input($login); ?>                    </td>
                                <td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors[$login['name']] : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Mật khẩu</th>
                                <td>
                                    <?php echo form_input($password); ?>                    </td>
                                <td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <button type="submit">
                                        <span>Đăng nhập</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <a href="/thanhvien/nguoitimviec_quenmatkhau">Quên mật khẩu</a>
                                    &nbsp;|&nbsp;
                                    <a href="/thanhvien/nguoitimviec_dangky">Đăng ký</a>
                                </td>
                            </tr>
                        </tbody></table>
                </form>        </div>
            <div class="Clear"></div>
        </div>
    </div>                        
</div>