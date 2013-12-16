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
<div name="div_ntv_quan_tri_cap_nhat_tin_tim_viec" id="div_ntv_quan_tri_cap_nhat_tin_tim_viec">
    <div class="colLeft-QT">
        <form name="form_cap_nhat_tin_tv" id="form_cap_nhat_tin_tv" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_cap_nhat_tin_tv" width="0" height="0" style="visibility:hidden"></iframe>
            <input type="hidden" name="id_tin_tv" id="id_tin_tv" value="-1">
            <input type="hidden" name="id_tin_goc" id="id_tin_goc" value="-1">
            <div class="tbInfo-header">
                Công việc mong muốn
            </div>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                    <tr>
                        <td rowspan="50" width="10" class="br-L"></td>
                        <td valign="top" width="160" class="tbUser-row"><b>Vị trí mong muốn: (<span class="textRed">*</span>)</b></td>
                        <td class="tbUser-row"><a name="href-tieu_de"></a>
                            <input type="text" class="textbox" name="tieu_de" id="tieu_de" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                        return(false);
                                    }">
                            <div id="err_tieu_de" class="textRed11"></div></td>
                        <td rowspan="10" width="10" class="br-R"></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Cấp bậc mong muốn (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-chuc_vu"></a>
                            <select class="dropbox" name="select_box_chuc_vu" id="select_box_chuc_vu">
                                <option value="-1">-- Chọn cấp bậc --</option>
                                <option value="3">Quản trị cấp cao</option><option value="4">Trưởng/Phó phòng</option><option value="5">Tư vấn/Trợ lý</option><option value="6">Chuyên gia</option><option value="7">Nhân viên</option><option value="9">Trưởng nhóm/Giám sát</option><option value="10">Kỹ thuật viên/kỹ sư</option><option value="11">Chuyên viên</option><option value="8">Khác</option>
                            </select><div id="err_chuc_vu" class="textRed11"></div></td>

                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Chọn ngành nghề: <span class="textRed">*</span></b>
                            <br>
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
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Địa điểm làm việc (<span class="textRed">*</span>):</b>
                            <br>
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
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Hình thức làm việc (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-thoi_gian"></a>
                            <select class="dropbox" name="thoi_gian_lam_viec" id="thoi_gian_lam_viec">
                                <option value="-1">-- Chọn hình thức làm việc --</option>
                                <option value="1">Toàn thời gian cố định</option><option value="2">Toàn thời gian tạm thời</option><option value="3">Bán thời gian cố định</option><option value="4">Bán thời gian tạm thời</option><option value="5">Theo hợp đồng tư vấn</option><option value="6">Thực tập</option><option value="7">Khác</option>
                            </select><div id="err_thoi_gian" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Mức lương mong muốn (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-muc_luong"></a>
                            <select class="dropbox" name="muc_luong" id="muc_luong">
                                <option value="-1">-- Chọn mức lương --</option>
                                <option value="1">Thỏa thuận</option><option value="2">1 - 3 triệu</option><option value="3">3 - 5 triệu</option><option value="4">5 - 7 triệu</option><option value="5">7 – 10 triệu</option><option value="6">10 – 15 triệu</option><option value="7">15 – 20 triệu</option><option value="8">20 – 30 triệu</option><option value="9">Trên 30 triệu</option>
                            </select><div id="err_muc_luong" class="textRed11"></div></td>
                    </tr>

                    <tr>
                    <td valign="top" class="tbUser-row"><b>Mục tiêu nghề nghiệp:</b><!-- <br/><i class="text11 textRed">(tối đa 1000 ký tự)</i> --></td>
                        <td class="tbUser-row" colspan="3"><a name="href-muc_tieu_nghe_nghiep"></a>												<textarea class="textArea" style="width:500px;height:100px" name="muc_tieu_nghe_nghiep" id="muc_tieu_nghe_nghiep"></textarea><div id="err_muc_tieu_nghe_nghiep" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Hồ sơ hiển thị đến ngày (<span class="textRed">*</span>):</b></td>
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
                        <td colspan="4" height="10" class="br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Thông tin cá nhân
            </div>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td rowspan="10" width="10" class="br-L"></td>
                        <td width="160" class="tbUser-row" valign="top" style="padding-top:20px"><div id="div_anh_dai_dien_da_duyet" style="display: inline;"></div>
                            <div id="div_anh_dai_dien_cho_duyet" style="display: none;">
                                <div id="div_anh_dai_dien"></div>
                                <div class="padTop10">
                                    <a name="href-anh_dai_dien"></a>
                                    <input type="image" src="images/btnUpAnh.gif" onclick="ntv_quan_tri_show_box_popup_doi_anh_dai_dien();
                                            return false;">
                                </div>
                            </div></td>
                        <td valign="top" class="padTop10">
                            <div id="thong_tin_ntv_da_duyet" style="display: inline;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Họ và tên:</b></td>
                                            <td class="tbUser-row"> Đoàn Quang Thắng </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Ngày sinh:</b></td>
                                            <td class="tbUser-row"> 12-08-1981 </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                            <td class="tbUser-row"> Nam </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Tình trạng hôn nhân:</b></td>
                                            <td class="tbUser-row"> Độc thân </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="right">
                                                <input type="button" class="buttonGreen" value="Sửa" onclick="ntv_quan_tri_hien_thi_sua_thong_tin_tai_khoan();
                                                        return(false);">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            <div id="thong_tin_ntv_cho_duyet" style="display: none;">
                                <div class="textRed11"></div>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Họ và tên (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-ho_ten"></a>
                                                <input type="text" class="textbox" name="txt_ho_ten" id="txt_ho_ten" style="width:210px" value="Đoàn Quang Thắng">
                                                <div id="err_ho_ten" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Ngày sinh (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-ngay_sinh"></a>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="130">
                                                                <input type="text" class="textbox" name="ngay_sinh" id="ngay_sinh" style="width:110px" readonly="" value="12-08-1981" onclick="show_box_popup_calendar(12, 08, 1981, 'ngay_sinh', '', '', '', '', '#7214AE');
                                                                        return false;">
                                                            </td>
                                                            <td width="30">
                                                                <input type="image" src="images/iconCalendar.gif" onclick="show_box_popup_calendar(12, 08, 1981, 'ngay_sinh', '', '', '', '', '#7214AE');
                                                                        return false;">
                                                            </td>
                                                            <td>(dd-mm-yyyy)</td>
                                                        </tr>
                                                    </tbody>
                                                </table><div id="err_ngay_sinh" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                            <td class="tbUser-row"><a name="href-gioi_tinh"></a>
                                                <input type="radio" name="gioi_tinh" id="gioi_tinh_nam" value="1" checked="">
                                                &nbsp; Nam&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gioi_tinh" id="gioi_tinh_nu" value="0">
                                                &nbsp; Nữ&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gioi_tinh" id="gioi_tinh_khac" value="2">
                                                &nbsp; Khác <div id="err_gioi_tinh" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Tình trạng hôn nhân:</b></td>
                                            <td class="tbUser-row"><a name="href-tinh_trang_hon_nhan"></a>
                                                <select class="dropbox" style="width:220px" name="tinh_trang_hon_nhan" id="tinh_trang_hon_nhan">
                                                    <option value="0">Độc thân</option>
                                                    <option value="1">Đã có gia đình</option>
                                                </select><div id="err_tinh_trang_hon_nhan" class="textRed11"></div></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" align="right">
                                                <input type="button" class="buttonGreen" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                            ntv_quan_tri_thay_doi_thong_tin_ntv();
                                                        }">
                                                <input type="button" class="buttonGreen" value="Hủy" onclick="ntv_quan_tri_khong_hien_thi_sua_thong_tin_tai_khoan();
                                                        return(false);">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div></td>
                        <td rowspan="10" width="10" class="br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Trình độ học vấn
            </div>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                    <tr>
                        <td rowspan="10" width="10" class="br-L"></td>
                        <td width="160" valign="top" class="tbUser-row"><b>Trình độ học vấn (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-trinh_do"></a>
                            <select class="dropbox" name="trinh_do" id="trinh_do">
                                <option value="-1">-- Chọn trình độ học vấn --</option>
                                <option value="1">Trên đại học</option><option value="2">Đại học</option><option value="3">Cao đẳng</option><option value="4">Trung cấp</option><option value="5">Trung học</option><option value="6">Không yêu cầu</option>
                            </select><div id="err_trinh_do" class="textRed11"></div></td>
                        <td rowspan="10" width="50" class="br-R"></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Ngành học (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-nganh_hoc"></a>
                            <input type="text" class="textbox" name="nganh_hoc" id="nganh_hoc" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                        return(false);
                                    }">
                            <div id="err_nganh_hoc" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Tốt nghiệp năm:</b></td>
                        <td class="tbUser-row">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="110"><a name="href-nam_tot_nghiep"></a>
                                            <select class="dropbox" style="width:80px" name="select_box_nam_tot_nghiep" id="select_box_nam_tot_nghiep">
                                                <option value="-1">-- Chọn năm tốt nghiệp --</option>
                                                <option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option>
                                            </select><div id="err_nam_tot_nghiep" class="textRed11"></div></td>
                                        <td width="100"><b>Loại tốt nghiệp:</b></td>
                                        <td><a name="href-loai_tot_nghiep"></a>
                                            <select class="dropbox" style="width:120px" name="select_box_loai_tot_nghiep" id="select_box_loai_tot_nghiep">
                                                <option value="-1">-- Chọn loại tốt nghiệp --</option>
                                                <option value="1">Xuất sắc</option><option value="2">Giỏi</option><option value="3">Khá</option><option value="4">Trung bình khá</option><option value="5">Trung bình</option>
                                            </select><div id="err_loai_tot_nghiep" class="textRed11"></div></td>
                                    </tr>
                                </tbody>
                            </table></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Tốt nghiệp tại trường:</b>
                        </td>
                        <td class="tbUser-row" width ="510"><a name="href-c_truong"></a>
                            <textarea class="textArea" style="width:500px" name="c_truong_da_hoc" id="c_truong_da_hoc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Trình độ ngoại ngữ:</b></td>
                        <td class="tbUser-row">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="267"><a name="href-ngoai_ngu"></a>
                                            <select class="dropbox" style="width:255px" name="select_box_ngoai_ngu" id="select_box_ngoai_ngu">
                                                <option value="-1">-- Chọn ngoại ngữ --</option>
                                                <option value="1">Tiếng Anh – Tiếng Đức</option><option value="2">Tiếng Anh - Tiếng Nga</option><option value="3">Tiếng Anh – Tiếng Ý</option><option value="4">Tiếng Anh – Tiếng Tây Ban Nha</option><option value="5">English - Tiếng Anh</option><option value="6">French - Tiếng Pháp</option><option value="7">United States - Tiếng Anh Mỹ</option><option value="8">Russian - Tiếng Nga</option><option value="9">Chinese - Tiếng Trung</option><option value="10">Korean - Tiếng Hàn</option><option value="11">Japanese - Tiếng Nhật</option><option value="12">German - Tiếng Đức</option><option value="13">Arabic - Tiếng Ả Rập</option><option value="14">Bengalic - Tiếng Bengal</option><option value="15">Bulgarian - Tiếng Bungary</option><option value="16">Burmese - Tiếng Miến điện</option><option value="17">Cambodian - Tiếng Campuchia</option><option value="18">Czech  - Tiếng Séc</option><option value="19">Danmark - Tiếng Đan mạch</option><option value="20">Dutch - Tiếng Hà Lan</option><option value="21">Finnish - Tiếng phần Lan</option><option value="22">Greek - Tiếng Hy Lạp</option><option value="23">Hindi - Tiếng Hinđi</option><option value="24">Hungarian - Tiếng Hungary</option><option value="25">Indonesian - Tiếng Inđônesia</option><option value="26">Italian - Tiếng Ý</option><option value="27">Laotian - Tiếng Lào</option><option value="28">Malay - Tiếng Mã Lai</option><option value="29">Norwegian - Tiếng Nauy</option><option value="30">Polish - Tiếng Ba Lan</option><option value="31">Portuguese - Tiếng Bồ Đào Nha</option><option value="32">Romanian  - Tiếng Ru ma ni</option><option value="33">Spanish - Tiếng Tây Ban Nha</option><option value="34">Taiwanese - Tiếng Đài Loan</option><option value="35">Turkish - Tiếng Thổ Nhĩ Kỳ</option><option value="36">Thai - Tiếng Thái</option><option value="37">Ukrainian - Tiếng Ucraina</option><option value="38">Khác</option>
                                            </select><div id="err_ngoai_ngu" class="textRed11"></div></td>
                                        <td><a name="href-trinh_do_ngoai_ngu"></a>
                                            <select class="dropbox" style="width:255px" name="select_box_trinh_do_ngoai_ngu" id="select_box_trinh_do_ngoai_ngu">
                                                <option value="-1">-- Chọn trình độ ngoại ngữ --</option>
                                                <option value="1">Sơ cấp</option><option value="2">Trung cấp</option><option value="3">Cao cấp</option>
                                            </select><div id="err_trinh_do_ngoai_ngu" class="textRed11"></div></td>
                                    </tr>
                                </tbody>
                            </table></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Trình độ tin học:</b></td>
                        <td class="tbUser-row"><a name="href-trinh_do_tin_hoc"></a>												<textarea class="textArea" style="width:500px" name="trinh_do_tin_hoc" id="trinh_do_tin_hoc"></textarea><div id="err_trinh_do_tin_hoc" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Các bằng cấp
                                <br>
                                / chứng chỉ khác:</b></td>
                        <td class="tbUser-row"><a name="href-bang_cap_khac"></a>												<textarea class="textArea" style="width:500px" name="bang_cap_khac" id="bang_cap_khac"></textarea><div id="err_bang_cap_khac" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Kinh nghiệm làm việc
            </div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                    <tr>
                        <td rowspan="17" width="10" class="br-L"></td>
                        <td width="160" valign="top" class="tbUser-row"><b>Số năm kinh nghiệm (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-so_nam_kinh_nghiem"></a>
                            <select class="dropbox" name="so_nam_kinh_nghiem" id="so_nam_kinh_nghiem">
                                <option value="-1">-- Chọn số năm kinh nghiệm --</option>
                                <option value="8">Chưa có kinh nghiệm</option><option value="1">Dưới 1 năm</option><option value="2">1 năm</option><option value="3">2 năm</option><option value="4">3 năm</option><option value="5">4 năm</option><option value="6">5 năm</option><option value="7">Hơn 5 năm</option>
                            </select><div id="err_so_nam_kinh_nghiem" class="textRed11"></div></td>
                        <td width="50" rowspan="17" class="br-R"></td>
                    </tr>

                    <tr>
                        <td valign="top" class="tbUser-row"><b>Quá trình làm việc:</b>
                            <br>
                            <span class="text11" style="line-height:14px"> Nếu bạn chưa có kinh nghiệm làm việc, hãy đưa ra các công việc/ hoạt động bạn đã từng tham gia hoặc đảm trách và các thành tích kỹ năng đạt được </span></td>
                        <td class="tbUser-row"><a name="href-kinh_nghiem"></a>												<textarea class="textArea" style="width:500px;height:200px;line-height:20px" name="c_kinh_nghiem" id="c_kinh_nghiem">Tên công ty:
Vị trí công việc:
Ngành nghề:
Thời gian bắt đầu:
Thời gian kết thúc:
Mô tả công việc:
Lý do thôi việc:
Thành tích đạt được:
Mức lương:
                            </textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" height="10"></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Kỹ năng nổi bật:</b></td>
                        <td class="tbUser-row"><a name="href-ky_nang"></a>												<textarea class="textArea" style="width:500px" name="ky_nang" id="ky_nang"></textarea><div id="err_ky_nang" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                </tbody>
            </table>
            <div class="tbInfo-header">
                Nguồn tham khảo
            </div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td valign="top" width="350" class="tbUser-row br-L"><b>Nguồn tham khảo:</b>
                            <br>
                            <span class="text11" style="line-height:14px">Hãy nêu tên những người không phải là người thân, không phải là người đã thuê bạn làm việc? (Họ tên, địa chỉ, số điện thoại, nghề nghiệp, quan hệ, đã biết bạn mấy năm?)</span></td>
                        <td class="tbUser-row"><a name="href-nguon_tham_khao"></a>												<textarea class="textArea" style="width:500px;height:100px" name="c_nguon_tham_khao" id="c_nguon_tham_khao">Họ và tên:
Địa chỉ:
Điện thoại:
Nghề nghiệp:
Quan hệ:
Thời gian quen biết:
                            </textarea></td>
                        <td rowspan="15" width="100" class="br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Thông tin liên hệ
            </div>
            <div id="div_thong_tin_lien_he_da_duyet" style="display: inline;">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td colspan="4" height="10"></td>
                        </tr>
                        <tr>
                            <td rowspan="20" width="10" class="br-L"></td>
                            <td valign="top" width="115" class="tbUser-row"><b>Người liên hệ:</b></td>
                            <td class="tbUser-row"> Đoàn Quang Thắng </td>
                            <td rowspan="10" width="25" class="br-R"></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Địa chỉ liên hệ:</b></td>
                            <td class="tbUser-row"> Phúc Đồng - Sài Đồng - Long Biên </td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Email liên hệ:</b></td>
                            <td class="tbUser-row"> quangthang12891@gmail.com </td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Điện thoại liên hệ:</b></td>
                            <td class="tbUser-row"> 0962925599 </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="button" class="buttonGreen" value="Sửa" onclick="ntv_quan_tri_hien_thi_sua_thong_tin_lien_he();">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="borderBot" height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="10"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="div_thong_tin_lien_he_cho_duyet" style="display: none;">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td colspan="4" height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="4" height="10"><div class="textRed11"></div></td>
                        </tr>
                        <tr>
                            <td colspan="4" height="10"></td>
                        </tr>
                        <tr>
                            <td rowspan="20" width="45" class="br-L"></td>
                            <td valign="top" width="115" class="tbUser-row"><b>Người liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="nguoi_lien_he" id="nguoi_lien_he" value="Đoàn Quang Thắng">
                                <div id="err_nguoi_lien_he" class="textRed11"></div></td>
                            <td rowspan="10" width="25" class="br-R"></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Địa chỉ liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="dia_chi_nguoi_lien_he" id="dia_chi_nguoi_lien_he" value="Phúc Đồng - Sài Đồng - Long Biên ">
                                <div id="err_dia_chi_nguoi_lien_he" class="textRed11"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Email liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="email_lien_he" id="email_lien_he" value="quangthang12891@gmail.com">
                                <div id="err_email_lien_he" class="textRed11"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Điện thoại liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="dien_thoai_lien_he" id="dien_thoai_lien_he" value="0962925599">
                                <div id="err_dien_thoai_lien_he" class="textRed11"></div></td>
                        </tr>

                        <tr>
                            <td colspan="2" align="right">
                                <input type="button" class="buttonGreen" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntv_quan_tri_thay_doi_lien_he_ntv();
                                            return(false);
                                        }">
                                <input type="button" class="buttonGreen" value="Hủy" onclick="ntv_quan_tri_khong_hien_thi_sua_thong_tin_lien_he();">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="borderBot" height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="10"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="2" height="10"></td>
                    </tr>
                    <tr>
                        <td class="tbUser-row" valign="top" colspan="2" align="center">
                            <input type="submit" class="button" value="Đăng hồ sơ tìm việc" style="width:150px;" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                        ntv_quan_tri_ghi_lai_tin_tv('dang_tin');
                                    }">
                            &nbsp;&nbsp;
                            <input type="submit" class="button" value="Quay lại" onclick="javascript: window.location.href = '/ntv-trang-quan-tri-tin-tim-viec.html';" title="Về trang quản lý hồ sơ tìm việc">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="br-B mar-B-20"></div>
            <div class="pad10">

            </div>
        </form>
        <script src="/js/HeaderScriptHandler.js"></script>
        <script src="/temp/ds_truong_dhcd.js"></script>
        <script src="/temp/ds_tinh.js"></script>
        <script src="/temp/ds_nganh_cap1.js"></script>
        <script>
                                set_focus(document.forms['form_cap_nhat_tin_tv']);
                                SetAutoComplete(ds_truong_dhcd, 'txt_truong', 'chon_truong_tu_suggestion', 'chon_truong_tu_suggestion', 150, 'ntv_quan_tri_them_truong_tu_suggestion(",~,")');
                                SetAutoComplete(ds_tinh, 'txt_tinh', 'them_tinh_tu_suggestion', 'them_tinh_tu_suggestion', 150, 'ntd_ntv_quan_tri_them_tinh_tu_suggestion(",~,",10)');
                                SetAutoComplete(ds_nganh_cap1, 'txt_nganh_nghe', 'txt_nganh_nghe', 'them_nganh_cap1_tu_suggestion', 150, 'ntd_ntv_quan_tri_them_nganh_cap_1_tu_suggestion()');</script>
        <!--</div> -->
    </div>
    <div name="div_mau_tin_tim_viec" id="div_mau_tin_tim_viec">
        <!--<div name='div_mau_tin_tuyen_dung' id='div_mau_tin_tuyen_dung'> -->
        <div class="colRight-QT">
            <div class="borderBot"></div>
            <div>
                <b class="text15">MẪU HỒ SƠ TÌM VIỆC</b>
            </div>
            <div class="borderBot"></div>
            <div id="div_hien_thi_nganh_thu_1" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Báo chí-Truyền hình</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_1_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=82&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_82" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_82').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=82';
                                            }">
                                    Phóng viên, biên tập viên, cộng tác viên </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_1_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=83&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_83" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_83').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=83';
                                            }">
                                    Nhân viên dựng phim, quay phim, biên tập nhiều năm kinh nghiệm </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_2" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Chứng khoán- Vàng</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_2_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=81&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_81" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_81').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=81';
                                            }">
                                    Chuyên viên tư vấn đầu tư tài chính </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_3" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">IT phần cứng/mạng</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_3_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=79&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_79" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_79').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=79';
                                            }">
                                    Quản trị mạng, Nhân viên IT, Quản trị Website </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_3_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=80&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_80" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_80').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=80';
                                            }">
                                    Nhân viên IT phần cứng/mạng 3 năm kinh nghiệm </a>
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
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=7&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_7" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_7').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=7';
                                            }">
                                    Kế toán tổng hợp </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_4_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=11&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_11" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_11').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=11';
                                            }">
                                    Nhân viên kế toán 3 năm kinh nghiệm </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_5" style="display:none;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Nhân viên kinh doanh</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_5_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=77&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_77" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_77').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=77';
                                            }">
                                    Trưởng nhóm kinh doanh/ Nhân viên kinh doanh </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_5_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=78&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_78" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_78').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=78';
                                            }">
                                    Trưởng/ phó phòng kinh doanh </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_5_tin_mau_3" style="display:none;">
                            <li>
                                <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=64&amp;id_tin_tv=-1" title="">
                                    <input type="checkbox" id="mau_tin_tim_viec_64" onclick="javascript: if (document.getElementById('mau_tin_tim_viec_64').checked) {
                                                window.location.href = '/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html?id_mau_tin_tv=64';
                                            }">
                                    Nhân viên kinh doanh, chăm sóc khách hàng </a>
                            </li>
                        </div>
                    </ul>
                    <div class="chiTiet mar-T-B-10" id="nut_bam_div_hien_thi_nganh_thu_5_tin_mau_">
                        <a href="javascript: hien_thi_cac_div_an_trong_list_div('div_hien_thi_nganh_thu_5_tin_mau_', 3, 2, -1, 'Xem thêm', 'Thu gọn')" title="Xem tất cả các mẫu tin tuyển dụng ngành này">Xem thêm</a>
                    </div>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div class="chiTiet mar-T-B-10" id="nut_bam_div_hien_thi_nganh_thu_">
                <a href="javascript: hien_thi_cac_div_an_trong_list_div('div_hien_thi_nganh_thu_', 5, 3, -1, 'Xem tất cả các ngành', 'Thu gọn danh sách các ngành')" title="Xem tất cả các ngành có tin tuyển dụng mẫu">Xem tất cả các ngành</a>
            </div>
            <script language="javascript" type="text/javascript"></script>
        </div>
        <!--</div> -->
    </div><div class="clear"></div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_68") != null) {
            document.getElementById("a_menu_lv2_68").style.color = "#518c04";
        }
    </script>
</div>