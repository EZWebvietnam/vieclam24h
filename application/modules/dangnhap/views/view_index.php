<div id="content-detail">
    <div class="GridInfo">
        <div class="Content">
            <div id="login-1">
                <h2>Đăng nhập Người tìm việc</h2>
                <img src="<?php echo base_url(); ?>template/home/img/login.jpg" alt="Đăng nhập">
                <div class="HighBlank"></div>
                <button type="button" id="button-seeker-login" >
                    <a href="<?php echo base_url(); ?>dangnhap"><span>Đăng nhập Người tìm việc</span> </a>
                </button>
                <div class="HighBlank"></div>
            </div>
            <div id="login-2">
                <h2>Đăng nhập Nhà tuyển dụng</h2>
                <img src="<?php echo base_url(); ?>template/home/img/register.jpg" alt="Đăng nhập">
                <div class="HighBlank"></div>
                <button type="button" id="button-employer-login" >
                    <a href="<?php echo base_url(); ?>dangnhap"><span>Đăng nhập Nhà tuyển dụng</span></a>
                </button>
                <div class="HighBlank"></div>
            </div>
            <div class="Clear"></div>
        </div>
    </div>
    <div class="Blank"></div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#button-seeker-login').click(function() {
                var config = {
                    cookie: 'seekerPopup',
                    width: 600,
                    height: 400,
                    left: 600,
                    top: 100
                };

                jsPopunder('http://webhoctienganh.com/17-tinh-huong-tieng-anh-phong-van-xin-viec-lam-710.html', config);
                window.location.href = '/thanhvien/nguoitimviec_dangnhap';
            });

            $('#button-employer-login').click(function() {
                var config = {
                    cookie: 'employerPopup',
                    width: 600,
                    height: 400,
                    left: 600,
                    top: 100
                };

                jsPopunder('http://webhoctienganh.com/100-tinh-huong-giao-tiep-tieng-anh-cong-so-679.html', config);
                window.location.href = '/thanhvien/nhatuyendung_dangnhap';
            });
        });
    </script>                        
</div>