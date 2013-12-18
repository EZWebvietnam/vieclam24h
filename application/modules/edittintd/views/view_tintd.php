<?php
if ($is_login == 1) {
    ?>
    <div id="user-menu">

        <div class="GridInfo">
            <div class="Content">

                <ul class="UserMenu">
                    <li>
                        <a href="<?php echo base_url(); ?>quanly-timviec/<?php echo $this->session->userdata['u_id']; ?>">Quản lý tìm việc</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>hsda-dang/<?php echo $this->session->userdata['u_id']; ?>">Hồ Sơ đã đăng</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>tao-hsungvien/<?php echo $this->session->userdata['u_id']; ?>">Tạo HS tìm việc</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>daluu/<?php echo $this->session->userdata['u_id']; ?>">Việc làm đã Lưu</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>da-ung-tuyen/<?php echo $this->session->userdata['u_id']; ?>">Việc làm đã ứng tuyển</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>cv/<?php echo $this->session->userdata['u_id']; ?>">Hồ sơ cá nhân(CV)</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>thongtin-canhan/<?php echo $this->session->userdata['u_id']; ?>">Thông tin cá nhân</a>
                    </li>

                </ul>
                <div class="Clear"></div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="content-qlhs">
    <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
    <div>
        <marquee bgcolor="#FFCC99" scrolldelay="180" style="padding:5px;">
            <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Việc làm 24h thông báo: Từ 6/10 KHÔNG GIỚI HẠN SỐ LẦN LÀM MỚI </span>
        </marquee>
    </div>
    <div class="navBar">
        <div class="navBarLeft">
            <h2><a href="#" title=""><span class="navBarTxt24-1_ntd">Đăng tin tuyển dụng</span></a></h2>
        </div>
        <div class="navBarRight">
            <a href="/dang-viec-lam-tinh-phi.html" title="Click để tới trang đăng tin tuyển dụng hot" class="dangTinVip">Tuyển dụng hiệu quả</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="lineHeight10 padBot10" id="huong_dan"></div>
    <div name="div_ntd_quan_tri_cap_nhat_tin_tuyen_dung" id="div_ntd_quan_tri_cap_nhat_tin_tuyen_dung">
        <br>
        <div class="colLeft-QT">
            <form name="form_cap_nhat_tin_td" id="form_cap_nhat_tin_td" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_cap_nhat_tin_td" width="0" height="0" style="visibility:hidden"></iframe>
                <input type="hidden" name="id_tin_td" id="id_tin_td" value="-1">
                <input type="hidden" name="id_tin_goc" id="id_tin_goc" value="-1">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2">Thông tin tuyển dụng</td>
                        </tr>
                        <tr>
                            <td valign="top" class="padTop10" colspan="2">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Vị trí tuyển dụng: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row" width="300"><a name="href-tieu_de"></a>
                                                <input type="text" class="textbox" name="tieu_de" id="tieu_de" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                            return(false);
                                                        }">
                                                <div id="err_tieu_de" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Cấp bậc: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-chuc_vu"></a>
                                                <select class="dropbox" name="select_box_chuc_vu" id="select_box_chuc_vu">
                                                    <option value="-1">-- Chọn cấp bậc --</option>
                                                    <option value="3">Quản trị cấp cao</option><option value="4">Trưởng/Phó phòng</option><option value="5">Tư vấn/Trợ lý</option><option value="6">Chuyên gia</option><option value="7">Nhân viên</option><option value="9">Trưởng nhóm/Giám sát</option><option value="10">Kỹ thuật viên/kỹ sư</option><option value="11">Chuyên viên</option><option value="8">Khác</option>
                                                </select><div id="err_chuc_vu" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Chọn ngành nghề: <span class="textRed">*</span></b>                                           
                                            <td class="tbUser-row">        
                                                <select name="nganh_nghe" class="dropbox" id="nganh_nghe">
                                                    <option value="">Chọn ngành nghề</option>
                                                    <option value="10">Bán hàng</option>
                                                    <option value="11">Tư vấn bảo hiểm</option>
                                                    <option value="12">Báo chí/Biên tập viên</option>
                                                    <option value="13">Bất động sản</option>
                                                    <option value="14">Biên dịch/Phiên dịch</option>
                                                    <option value="15">Bưu chính viễn thông</option>
                                                    <option value="16">Cơ khí/Kĩ thuật ứng dụng</option>
                                                    <option value="17">Công nghệ thông tin</option>
                                                    <option value="18">Dầu khí/Địa chất</option>
                                                    <option value="19">Dệt may</option>
                                                    <option value="20">Bảo vệ/Vệ sĩ/An ninh</option>
                                                    <option value="21">Chăm sóc khách hàng</option>
                                                    <option value="22">Điện/Điện tử/Điện lạnh</option>
                                                    <option value="23">Du lịch/Nhà hàng/Khách sạn</option>
                                                    <option value="24">Dược/Hóa chất/Sinh hóa</option>
                                                    <option value="25">Giải trí/Vui chơi</option>
                                                    <option value="26">Giáo dục/Đào tạo/Thư viện</option>
                                                    <option value="27">Giao thông/Vận tải/Thủy lợi/Cầu đường</option>
                                                    <option value="28">Giày da/Thuộc da</option>
                                                    <option value="29">Hành chính/Thư ký</option>
                                                    <option value="30">Kho vận/Vật tư</option>
                                                    <option value="31">Kiến trúc/Nội thất</option>
                                                    <option value="32">Kinh doanh</option>
                                                    <option value="33">Lao động phổ thông</option>
                                                    <option value="34">Luật/Pháp lý</option>
                                                    <option value="35">Sinh viên/Mới tốt nghiệp/Thực tập</option>
                                                    <option value="36">Môi trường/Xử lý chất thải</option>
                                                    <option value="37">Mỹ phẩm</option>
                                                    <option value="38">Ngân hàng/Chứng khoán/Đầu tư</option>
                                                    <option value="39">Nghệ thuật/Điện ảnh</option>
                                                    <option value="40">Nhân sự</option>
                                                    <option value="41">Nông/Lâm/Ngư nghiệp</option>
                                                    <option value="42">Quan hệ đối ngoại</option>
                                                    <option value="43">Thẩm định/Giám định/Quản lý chất lượng</option>
                                                    <option value="44">Quản lý điều hành</option>
                                                    <option value="45">Quảng cáo/Marketing/PR</option>
                                                    <option value="46">Sản xuất/Vận hành sản xuất</option>
                                                    <option value="47">Tài chính/Kế toán/Kiểm toán</option>
                                                    <option value="48">Thể dục/Thể thao</option>
                                                    <option value="49">Thiết kế/Mỹ thuật</option>
                                                    <option value="50">Thời vụ/Bán thời gian</option>
                                                    <option value="51">Thực phẩm/DV ăn uống</option>
                                                    <option value="52">Xây dựng</option>
                                                    <option value="53">Xuất-Nhập khẩu/Ngoại thương</option>
                                                    <option value="54">Y tế</option>
                                                    <option value="55">Khác</option>
                                                    <option value="56">Ngoại ngữ</option>
                                                    <option value="58">Khu chế xuất/Khu công nghiệp</option>
                                                    <option value="59">Làm đẹp/Thể lực/Spa</option>
                                                    <option value="60">Tài xế/Lái xe/Giao nhận</option>
                                                    <option value="61">Trang thiết bị công nghiệp</option>
                                                    <option value="62">Trang thiết bị gia dụng</option>
                                                    <option value="63">Trang thiết bị văn phòng</option>
                                                    <option value="64">PG/PB/Lễ tân</option>
                                                    <option value="65">Bán hàng/Kinh doanh mạng lưới</option>
                                                    <option value="66">Phục vụ/Tạp vụ/Giúp việc</option>
                                                </select>
                                            </td>
                                            <td width="30"></td>
                                            <td class="tbUser-row"></td>
                                        </tr>                                        
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Địa điểm làm việc: <span class="textRed">*</span></b>
                                            <td class="tbUser-row"><a name="href-tinh"></a>
                                                <select name="dia_diem" class="dropbox" id="dia_diem">
                                                    <option value="">Chọn địa điểm</option>
                                                    <option value="1">TP.Hồ Chí Minh</option>
                                                    <option value="2">Hà Nội</option>
                                                    <option value="3">An Giang</option>
                                                    <option value="4">Bạc Liêu</option>
                                                    <option value="5">Bà Rịa-Vũng Tàu</option>
                                                    <option value="6">Bắc Cạn</option>
                                                    <option value="7">Bắc Giang</option>
                                                    <option value="8">Bắc Ninh</option>
                                                    <option value="9">Bến Tre</option>
                                                    <option value="10">Bình Dương</option>
                                                    <option value="11">Bình Định</option>
                                                    <option value="12">Bình Phước</option>
                                                    <option value="13">Bình Thuận</option>
                                                    <option value="14">Cao Bằng</option>
                                                    <option value="15">Cà Mau</option>
                                                    <option value="16">Cần Thơ</option>
                                                    <option value="17">Đà Nẵng</option>
                                                    <option value="18">Đắk Lắk</option>
                                                    <option value="19">Đắk Nông</option>
                                                    <option value="20">Điện Biên</option>
                                                    <option value="21">Đồng Nai</option>
                                                    <option value="22">Đồng Tháp</option>
                                                    <option value="23">Gia Lai</option>
                                                    <option value="24">Hà Giang</option>
                                                    <option value="25">Hà Nam</option>
                                                    <option value="26">Hà Tây</option>
                                                    <option value="27">Hà Tĩnh</option>
                                                    <option value="28">Hải Dương</option>
                                                    <option value="29">Hải Phòng</option>
                                                    <option value="30">Hậu Giang</option>
                                                    <option value="31">Hòa Bình</option>
                                                    <option value="32">Hưng Yên</option>
                                                    <option value="33">Khánh Hòa</option>
                                                    <option value="34">Kiên Giang</option>
                                                    <option value="35">Kon Tum</option>
                                                    <option value="36">Lai Châu</option>
                                                    <option value="37">Lạng Sơn</option>
                                                    <option value="38">Lào Cai</option>
                                                    <option value="39">Lâm Đồng</option>
                                                    <option value="40">Long An</option>
                                                    <option value="41">Nam Định</option>
                                                    <option value="42">Nghệ An</option>
                                                    <option value="43">Ninh Bình</option>
                                                    <option value="44">Ninh Thuận</option>
                                                    <option value="45">Phú Thọ</option>
                                                    <option value="46">Phú Yên</option>
                                                    <option value="47">Quảng Bình</option>
                                                    <option value="48">Quảng Nam</option>
                                                    <option value="49">Quảng Ngãi</option>
                                                    <option value="50">Quảng Ninh</option>
                                                    <option value="51">Quảng Trị</option>
                                                    <option value="52">Sóc Trăng</option>
                                                    <option value="53">Sơn La</option>
                                                    <option value="54">Tây Ninh</option>
                                                    <option value="55">Thái Bình</option>
                                                    <option value="56">Thái Nguyên</option>
                                                    <option value="57">Thanh Hóa</option>
                                                    <option value="58">Thừa Thiên-Huế</option>
                                                    <option value="59">Tiền Giang</option>
                                                    <option value="60">Trà Vinh</option>
                                                    <option value="61">Tuyên Quang</option>
                                                    <option value="62">Vĩnh Long</option>
                                                    <option value="63">Vĩnh Phúc</option>
                                                    <option value="64">Yên Bái</option>
                                                    <option value="65">Toàn quốc</option>
                                                    <option value="66">Nước ngoài</option>
                                                </select>
                                            </td>
                                            <td width="30"></td>
                                            <td class="tbUser-row"></td>
                                        </tr>    
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Hình thức làm việc: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-thoi_gian"></a>
                                                <select class="dropbox" name="thoi_gian_lam_viec" id="thoi_gian_lam_viec">
                                                    <option value="-1">-- Chọn hình thức làm việc --</option>
                                                    <option value="1">Toàn thời gian cố định</option><option value="2">Toàn thời gian tạm thời</option><option value="3">Bán thời gian cố định</option><option value="4">Bán thời gian tạm thời</option><option value="5">Theo hợp đồng tư vấn</option><option value="6">Thực tập</option><option value="7">Khác</option>
                                                </select><div id="err_thoi_gian" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Mức lương: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-muc_luong"></a>
                                                <select class="dropbox" name="muc_luong" id="muc_luong">
                                                    <option value="-1">-- Chọn mức lương --</option>
                                                    <option value="1">Thỏa thuận</option><option value="2">1 - 3 triệu</option><option value="3">3 - 5 triệu</option><option value="4">5 - 7 triệu</option><option value="5">7 – 10 triệu</option><option value="6">10 – 15 triệu</option><option value="7">15 – 20 triệu</option><option value="8">20 – 30 triệu</option><option value="9">Trên 30 triệu</option>
                                                </select><div id="err_muc_luong" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Số lượng tuyển: <span class="textRed">*</span></b>
                                                <br>
                                                <i class="text11 textRed">(Nhập ký tự số)</i></td>
                                            <td class="tbUser-row"><a name="href-so_luong"></a>
                                                <input type="text" class="textbox" name="so_luong" id="so_luong" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                            return(false);
                                                        }">
                                                <div id="err_so_luong" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Quyền lợi được hưởng: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-quyen_loi"></a>																<textarea class="textArea" style="width:560px;height:80px" name="quyen_loi" id="quyen_loi"></textarea><div id="err_quyen_loi" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Mô tả công việc: <span class="textRed">*</span></b>
                                                <br>
                                                <i class="text11 textRed">(Tối thiểu 100 ký tự)</i></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-mo_ta_cong_viec"></a>																<textarea class="textArea" style="width:560px;height:80px" name="mo_ta_cong_viec" id="mo_ta_cong_viec"></textarea><div id="err_mo_ta_cong_viec" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="130" valign="top" class="tbUser-row"><b>Yêu cầu số năm kinh nghiệm: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-so_nam_kinh_nghiem"></a>
                                                <select class="dropbox" name="so_nam_kinh_nghiem" id="so_nam_kinh_nghiem">
                                                    <option value="-1">-- Chọn số năm kinh nghiệm --</option>
                                                    <option value="8">Chưa có kinh nghiệm</option><option value="1">Dưới 1 năm</option><option value="2">1 năm</option><option value="3">2 năm</option><option value="4">3 năm</option><option value="5">4 năm</option><option value="6">5 năm</option><option value="7">Hơn 5 năm</option>
                                                </select><div id="err_so_nam_kinh_nghiem" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu bằng cấp: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-trinh_do"></a>
                                                <select class="dropbox" name="trinh_do" id="trinh_do">
                                                    <option value="-1">-- Chọn yêu cầu bằng cấp --</option>
                                                    <option value="1">Trên đại học</option><option value="2">Đại học</option><option value="3">Cao đẳng</option><option value="4">Trung cấp</option><option value="5">Trung học</option><option value="6">Không yêu cầu</option>
                                                </select><div id="err_trinh_do" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu giới tính:</b></td>
                                            <td class="tbUser-row"><a name="href-c_gioi_tinh"></a>
                                                <select class="dropbox" name="c_gioi_tinh" id="c_gioi_tinh">
                                                    <option value="-1">-- Chọn yêu cầu giới tính --</option>
                                                    <option value="1">Nam</option>
                                                    <option value="0">Nữ</option>
                                                    <option value="2">Khác</option>
                                                </select><div id="err_c_gioi_tinh" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu độ tuổi:</b></td>
                                            <td class="tbUser-row"><a name="href-c_do_tuoi"></a>
                                                <select class="dropbox" name="c_do_tuoi" id="c_do_tuoi">
                                                    <option value="-1">-- Chọn yêu cầu độ tuổi --</option>
                                                    <option value="1">Dưới 18 tuổi</option><option value="2">18 - 24 tuổi</option><option value="3">25 - 29 tuổi</option><option value="4">30 - 34 tuổi</option><option value="5">35 - 39 tuổi</option><option value="6">40 - 44 tuổi</option><option value="7">Trên 45 tuổi</option>
                                                </select><div id="err_c_do_tuoi" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Yêu cầu khác :</b></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-yeu_cau"></a>																<textarea class="textArea" style="width:560px;height:80px" name="yeu_cau" id="yeu_cau"></textarea><div id="err_yeu_cau" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Hồ sơ bao gồm: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-ho_so"></a>																<textarea class="textArea" style="width:560px;height:80px" name="ho_so" id="ho_so"></textarea><div id="err_ho_so" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Hạn nộp hồ sơ: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-den_ngay"></a>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td width="130">
                                                                    <input class="dateline" type="text" style="width:110px" name="c_ngay_co_the_bat_dau_lam">
                                                                </td>
                                                                <td width="30">
                                                                    <input type="image" src="<?php echo base_url(); ?>template/home/img/iconCalendar.gif" >
                                                                </td>
                                                                <td>(dd/mm/yyyy)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table><div id="err_den_ngay" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Hình thức nộp hồ sơ: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row">
                                                <select class="dropbox" name="cach_lien_he" id="cach_lien_he">
                                                    <option value="1">Trực tiếp</option><option value="2">Trực tuyến</option><option value="3">Qua Email</option>
                                                </select><div id="err_cach_lien_he" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" height="20"></td>
                                        </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2"><h3>Thông tin Nhà tuyển dụng</h3></td>
                        </tr>
                        <tr>
                            <td width="170" align="center" valign="top" class="padTop10"><img src="<?php echo base_url(); ?>template/home/img/user-img.jpg" alt="" width="104" height="79"></td>
                            <td valign="top" class="padTop10">
                                <div id="thong_tin_cong_ty" style="display: inline;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Tên công ty:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyName'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Quy mô công ty:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyMem'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Sơ lược về công ty:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyIntro'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyadress'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã số thuế:</b></td>
                                                <td class="tbUser-info"></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Website:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_home'] ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Sửa" onclick="javascript:document.getElementById('thong_tin_cong_ty').style.display = 'none';
                                                            document.getElementById('sua_thong_tin_cong_ty').style.display = '';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_chinh_thong_tin');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="sua_thong_tin_cong_ty" style="display: none;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Tên công ty:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ten_cty" id="ten_cty" value="<?php echo $taotintd_detail[0]['u_companyName'] ?>">
                                                    <div id="err_ten_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Quy mô công ty:</b></td>
                                                <td class="tbUser-info"><a name="href-c_quy_mo_cty"></a>
                                                    <select class="dropbox" name="c_quy_mo_cty" id="c_quy_mo_cty">
                                                        <option value="-1">-- Chọn quy mô công ty --</option>
                                                        <option value="1">Ít hơn 10 nhân viên</option><option value="6">Từ 10 - 24 nhân viên</option><option value="2">Từ 25 - 99 nhân viên</option><option value="3" selected="">Từ 100 - 499 nhân viên</option><option value="4">Từ 500 - 999 nhân viên</option><option value="5">Trên 1000 nhân viên</option>
                                                    </select><div id="err_c_quy_mo_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Sơ lược về công ty:</b></td>
                                                <td class="tbUser-info">
                                                    <textarea class="textArea" style="width:450px;height:80px" name="mo_ta_cty" id="mo_ta_cty"><?php echo $taotintd_detail[0]['u_companyIntro'] ?></textarea>
                                                    <div id="err_mo_ta_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dia_chi_lien_he" id="dia_chi_lien_he" value="<?php echo $taotintd_detail[0]['u_companyadress'] ?>">
                                                    <div id="err_dia_chi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã số thuế:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ma_so_thue" id="ma_so_thue" value="">
                                                    <div id="err_ma_so_thue" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Website:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="website" id="website" value="<?php echo $taotintd_detail[0]['u_home'] ?>">
                                                    <div id="err_website" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Logo công ty:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="file" name="logo_cty" id="logo_cty" value="">
                                                    <div id="err_logo_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <div id="div_ma_chinh_thong_tin"><img src="/security_image.php?time=1385195608" id="security_image" name="security_image" alt="" width="65" height="31">
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Nhập mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ma_chinh_thong_tin" id="ma_chinh_thong_tin">
                                                    <div id="err_ma_chinh_thong_tin" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                                ntd_quan_tri_thay_doi_thong_tin_ntd();
                                                            }">
                                                    <input type="button" class="button" value="Hủy" onclick="javascript:document.getElementById('thong_tin_cong_ty').style.display = '';
                                                            document.getElementById('sua_thong_tin_cong_ty').style.display = 'none';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_xac_minh');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></td>
                        </tr>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2"><h3>Thông tin liên hệ</h3></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td valign="top" class="padTop10">
                                <div id="thong_tin_lien_he" style="display: inline;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Người liên hệ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_contactName'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ liên hệ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_contactAdress'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Email liên hệ:</b></td>
                                                <td class="tbUser-info"><a href="mailto:quangthang12891@gmail.com" title=""><?php echo $taotintd_detail[0]['u_contactEmail'] ?></a></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Điện thoại liên hệ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_contactMobi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Sửa" onclick="javascript:document.getElementById('thong_tin_lien_he').style.display = 'none';
                                                            document.getElementById('sua_thong_tin_lien_he').style.display = '';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_chinh_lien_he');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="sua_thong_tin_lien_he" style="display: none;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Người liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="nguoi_lien_he" id="nguoi_lien_he" value="<?php echo $taotintd_detail[0]['u_contactName'] ?>">
                                                    <div id="err_nguoi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dia_chi_nguoi_lien_he" id="dia_chi_nguoi_lien_he" value="<?php echo $taotintd_detail[0]['u_contactAdress'] ?>">
                                                    <div id="err_dia_chi_nguoi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Email liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="email_lien_he" id="email_lien_he" value="<?php echo $taotintd_detail[0]['u_contactEmail'] ?>">
                                                    <div id="err_email_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Điện thoại liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dien_thoai_lien_he" id="dien_thoai_lien_he" value="<?php echo $taotintd_detail[0]['u_contactMobi'] ?>">
                                                    <div id="err_dien_thoai_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <div id="div_ma_chinh_lien_he"><img src="/security_image.php?time=1385195608" id="security_image" name="security_image" alt="" width="65" height="31">
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Nhập mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ma_chinh_lien_he" id="ma_chinh_lien_he">
                                                    <div id="err_ma_chinh_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                                ntd_quan_tri_thay_doi_lien_he_ntd();
                                                                return(false);
                                                            }">
                                                    <input type="button" class="button" value="Hủy" onclick="javascript:document.getElementById('thong_tin_lien_he').style.display = '';
                                                            document.getElementById('sua_thong_tin_lien_he').style.display = 'none';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_xac_minh');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="borderBot" height="10"></td>
                        </tr>                       
                        <tr>
                            <td colspan="2" height="10"></td>
                        </tr>
                        <tr>
                            <td class="tbUser-row" valign="top" colspan="2" align="center">
                                <input type="submit" class="button" value="Đăng tuyển" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntd_quan_tri_ghi_lai_tin_td('dang_tin');
                                        }">
                                &nbsp;&nbsp;
                                <input type="submit" class="button" value="Quay lại" onclick="javascript: window.location.href = '/ntd-trang-quan-tri-tin-tuyen-dung.html';" title="Về trang quản lý tin tuyển dụng">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <script src="<?php echo base_url(); ?>template/home/js/demo.js"></script>
        <script src="<?php echo base_url(); ?>template/home/js/HeaderScriptHandler.js"></script>
        <!--</div> -->
    </div>
    <div name="div_mau_tin_tuyen_dung" id="div_mau_tin_tuyen_dung">
        <div class="colRight-QT1">
            <div>
                <b class="text15">MẪU TIN TUYỂN DỤNG</b>
            </div>
            <div class="borderBot"></div>
            <div id="div_hien_thi_nganh_thu_1" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Báo chí-Truyền hình</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_1_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=75&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_75" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_75').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=75';
                                            }">
                                    Tuyển Trưởng ban Biên tập và Phóng viên </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_1_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=76&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_76" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_76').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=76';
                                            }">
                                    Nhân viên phát triển nội dung Website </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_2" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">IT phần cứng/mạng</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_2_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=71&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_71" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_71').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=71';
                                            }">
                                    Chuyên viên quản trị Cơ sở dữ liệu </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_2_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=72&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_72" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_72').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=72';
                                            }">
                                    Tuyển gấp 02 Leader Quản trị hệ thống Server có kinh nghiệm (lương hấp dẫn) </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_3" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">IT phần mềm</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_3_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=73&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_73" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_73').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=73';
                                            }">
                                    Tuyển Senior Android Developer </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_3_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=74&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_74" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_74').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=74';
                                            }">
                                    Nhân viên quản trị WebSite </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_4" style="display:none;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Kế toán-Kiểm toán</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_4_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=1&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_1" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_1').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=1';
                                            }">
                                    Phó phòng Tài chính và chuyên viên Tài chính </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_4_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=22&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_22" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_22').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=22';
                                            }">
                                    Kế toán tổng hợp 2 năm kinh nghiệm </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_4_tin_mau_3" style="display:none;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=63&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_63" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_63').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=63';
                                            }">
                                    Nhân viên Kế toán Thuế lương 7-8 triệu </a>
                            </li>
                        </div>
                    </ul>
                    <div class="ntd_chiTiet mar-T-B-10" id="nut_bam_div_hien_thi_nganh_thu_4_tin_mau_">
                        <a href="javascript: hien_thi_cac_div_an_trong_list_div('div_hien_thi_nganh_thu_4_tin_mau_', 3, 2, -1, 'Xem thêm', 'Thu gọn')" title="Xem tất cả các mẫu tin tuyển dụng ngành này">Xem thêm</a>
                    </div>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_5" style="display:none;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Nhân viên kinh doanh</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_5_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=69&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_69" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_69').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=69';
                                            }">
                                    Nhân viên kinh doanh tại Hà Nội </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_5_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=70&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_70" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_70').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=70';
                                            }">
                                    Nhân viên kinh doanh quảng cáo online tại HN - lương (5-&gt;10 triệu đồng) </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div class="ntd_chiTiet mar-T-B-10" id="nut_bam_div_hien_thi_nganh_thu_">
                <a href="javascript: hien_thi_cac_div_an_trong_list_div('div_hien_thi_nganh_thu_',5, 3, -1, 'Xem tất cả các ngành', 'Thu gọn danh sách các ngành')" title="Xem tất cả các ngành có tin tuyển dụng mẫu">Xem tất cả các ngành</a>
            </div>
            <script language="javascript" type="text/javascript"></script>
        </div>
        <!--</div> -->
    </div><div class="clear"></div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_90") != null) {
            document.getElementById("a_menu_lv2_90").style.color = "#518c04";
        }
    </script>
</div>