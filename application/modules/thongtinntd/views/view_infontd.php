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
<div class="content-info" style="background: none repeat scroll 0 0 #FFFFFF;">
    <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
    <div name="div_thong_tin_ntd" id="div_thong_tin_ntd">

        <div class="colLeft">
            <div class="navBar">
                <div class="navBarLeft">
                    <span class="navBarTxt24-1_ntd">Thông tin Nhà tuyển dụng</span>
                </div>
                <div class="navBarRight">
                    <a href="/dang-viec-lam-tinh-phi.html" title="" class="dangTinVip">Tuyển dụng hiệu quả</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="padBot10" id="thong_bao" style="color:blue;font-size:14px;">
                Thông tin đang chờ duyệt:
            </div>
            <form name="form_cap_nhat_thong_tin_ntd" id="form_cap_nhat_thong_tin_ntd" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_cap_nhat_thong_tin_ntd" width="0" height="0" style="visibility:hidden"></iframe>
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ntd_tbInfo-header br-L br-R" colspan="2"><h2>Thông tin đăng nhập</h2></td>
                        </tr>
                        <tr>
                            <td valign="top" class="padTop10 br-L br-R" colspan="2">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="180" valign="top" class="tbUser-info" align="right"><b>Email đăng nhập:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_username']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info" align="right"></td>
                                            <td class="tbUser-info"><a href="/trang-doi-mat-khau.html" title="">Đổi mật khẩu</a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" height="10"></td>
                                        </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                        <tr>
                            <td class="ntd_tbInfo-header br-L br-R" colspan="2"><h2>Thông tin công ty</h2></td>
                        </tr>
                        <tr>
                            <td valign="top" class="padTop10 br-L br-R" colspan="2">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Tên công ty (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-ten_cty"></a>
                                                <input type="text" class="textbox" name="txt_ten_cty" id="txt_ten_cty" value="<?php echo $info_list[0]['u_companyName']; ?>">
                                                <div id="err_ten_cty" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Quy mô công ty (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-c_quy_mo_cty"></a>
                                                <select class="dropbox" name="c_quy_mo_cty" id="c_quy_mo_cty">
                                                    <option value="-1">-- Chọn quy mô công ty --</option>
                                                    <option value="1">Ít hơn 10 nhân viên</option><option value="6">Từ 10 - 24 nhân viên</option><option value="2">Từ 25 - 99 nhân viên</option><option value="3" selected="">Từ 100 - 499 nhân viên</option><option value="4">Từ 500 - 999 nhân viên</option><option value="5">Trên 1000 nhân viên</option>
                                                </select><div id="err_c_quy_mo_cty" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Sơ lược về công ty (<span class="textRed">*</span>):</b>
                                                <br>
                                                <i class="text11 textRed">(Tối đa 1000 ký tự)</i></td>
                                            <td class="tbUser-row"><a name="href-mo_ta_cty"></a>																
                                                <textarea class="textArea" style="height:160px;width:410px;" name="txt_mo_ta_cty" id="txt_mo_ta_cty"><?php echo $info_list[0]['u_companyIntro']; ?></textarea>
                                                <div id="err_mo_ta_cty" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row">
                                                <div id="div_xoa_logo">
                                                    <b>Logo công ty:</b>
                                                    <br>
                                                    <?php 
                                                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/'.$info_list[0]['u_img']))
                                                    {
                                                    ?>
                                                        <img src="<?php echo base_url(); ?>file/<?php echo $info_list[0]['u_img']; ?>" width="50" alt="<?php echo $info_list[0]['u_companyName']; ?>">
                                                    <?php } else {?> 
                                                        <img src="<?php echo base_url(); ?>template/home/img/default.gif" width="50" alt="<?php echo $info_list[0]['u_companyName']; ?>">
                                                        <?php }?>
                                                    <br>
                                                    <a href="javascript: ntd_quan_tri_xoa_logo_cty()" title="Xóa hẳn file logo công ty" class="textRed">Xóa ảnh</a>
                                                </div></td>
                                            <td class="tbUser-row"><a name="href-logo_cty"></a>
                                                <input type="file" name="file_logo_cong_ty" id="file_logo_cong_ty">
                                                <br>
                                                <span class="text11">(Dạng file ảnh .jpg .gif .png, dung lượng &lt;=300Kb)</span><div id="err_logo_cty" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Giấy phép ĐK kinh doanh:</b><i class="text11 textRed">(GPKD phải có dấu đỏ hoặc công chứng)</i></td>
                                            <td class="tbUser-row"><a name="href-giay_phep_kd"></a>
                                                <input type="file" name="file_giay_phep_kd" id="file_giay_phep_kd">
                                                <br>
                                                <span class="text11">(Dạng file .doc .docx .xls .xlsx .jpg .gif .png .pdf, dung lượng &lt;=500Kb)
                                                    <br>
                                                    Nếu giấy phép kinh doanh của bạn có nhiều file hãy ghép lại thành 1 file Word để up lên.</span><div id="err_giay_phep_kd" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Mã số thuế:</b></td>
                                            <td class="tbUser-row">
                                                <input type="text" class="textbox" name="txt_ma_so_thue" id="txt_ma_so_thue" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Địa chỉ công ty (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-dia_chi_lien_he"></a>
                                                <input type="text" class="textbox" name="txt_dia_chi_lien_he" id="txt_dia_chi_lien_he" value="<?php echo $info_list[0]['u_companyadress']; ?>">
                                                <div id="err_dia_chi_lien_he" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Tỉnh/ Thành phố (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-tinh"></a>
                                                <select class="dropbox" name="select_tinh" id="select_tinh">
                                                    <option value="-1">-- Chọn tỉnh --</option>
                                                    <option value="2">Hà Nội</option><option value="1" selected="">TP. HCM</option><option value="23">Đà Nẵng</option><option value="9">Bình Dương</option><option value="21">Cần Thơ</option><option value="22">Hải Phòng</option><option value="53">Bà Rịa - Vũng Tàu</option><option value="91">Bắc Giang</option><option value="92">Bắc Kạn</option><option value="94">Thừa Thiên Huế</option><option value="32">Bắc Ninh</option><option value="90">Bến Tre</option><option value="93">Bạc Liêu</option><option value="89">Bình Định</option><option value="88">Bình Phước</option><option value="87">Bình Thuận</option><option value="86">Cà Mau</option><option value="85">Cao Bằng</option><option value="84">Cửu Long</option><option value="83">Đắc Lắc</option><option value="52">An Giang</option><option value="82">Đắc Nông</option><option value="81">Điện Biên</option><option value="19">Đồng Nai</option><option value="80">Đồng Tháp</option><option value="79">Gia Lai</option><option value="78">Hà Giang</option><option value="77">Hà Nam</option><option value="76">Hà Tĩnh</option><option value="27">Hải Dương</option><option value="75">Hậu Giang</option><option value="74">Hòa Bình</option><option value="26">Hưng Yên</option><option value="73">Khánh Hòa</option><option value="72">Kiên Giang</option><option value="71">Kon Tum</option><option value="70">Lai Châu</option><option value="69">Lạng Sơn</option><option value="68">Lào Cai</option><option value="67">Lâm Đồng</option><option value="66">Long An</option><option value="65">Nam Định</option><option value="64">Nghệ An</option><option value="63">Ninh Bình</option><option value="62">Ninh Thuận</option><option value="61">Phú Thọ</option><option value="60">Phú Yên</option><option value="59">Quảng Bình</option><option value="58">Quảng Nam</option><option value="30">Quảng Ngãi</option><option value="57">Quảng Ninh</option><option value="56">Quảng Trị</option><option value="55">Sóc Trăng</option><option value="54">Sơn La</option><option value="51">Tây Ninh</option><option value="50">Thái Bình</option><option value="49">Thái Nguyên</option><option value="48">Thanh Hóa</option><option value="47">Tiền Giang</option><option value="46">Trà Vinh</option><option value="45">Tuyên Quang</option><option value="44">Vĩnh Long</option><option value="43">Vĩnh Phúc</option><option value="42">Yên Bái</option><option value="95">Toàn quốc</option><option value="96">Miền Bắc</option><option value="98">Miền Nam</option><option value="97">Miền Trung</option>
                                                </select><div id="err_tinh" class="textRed11" style="vertical-align: middle;"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Website:</b></td>
                                            <td class="tbUser-row">
                                                <input type="text" class="textbox" name="txt_website" id="txt_website" value="<?php echo $info_list[0]['u_home']; ?>">
                                                <div id="err_website" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" height="10"></td>
                                        </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                        <tr>
                            <td class="ntd_tbInfo-header br-L br-R" colspan="2"><h2>Thông tin liên hệ</h2></td>
                        </tr>
                        <tr>
                            <td valign="top" class="padTop10 br-L br-R" colspan="2">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Tên người liên hệ (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-ten_day_du"></a>
                                                <input type="text" class="textbox" name="txt_ten_day_du" id="txt_ten_day_du" value="<?php echo $info_list[0]['u_contactName']; ?>">
                                                <div id="err_ten_day_du" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Địa chỉ liên hệ (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-dia_chi_nguoi_lien_he"></a>
                                                <input type="text" class="textbox" name="txt_dia_chi_nguoi_lien_he" id="txt_dia_chi_nguoi_lien_he" value="<?php echo $info_list[0]['u_contactAdress']; ?>">
                                                <div id="err_dia_chi_nguoi_lien_he" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Số điện thoại liên hệ (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-dien_thoai_lien_he"></a>
                                                <input type="text" class="textbox" name="txt_dien_thoai_lien_he" id="txt_dien_thoai_lien_he" value="<?php echo $info_list[0]['u_contactMobi']; ?>">
                                                <div id="err_dien_thoai_lien_he" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="150" class="tbUser-row"><b>Email liên hệ (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-email_lien_he"></a>
                                                <input type="text" class="textbox" name="txt_email_lien_he" id="txt_email_lien_he" value="<?php echo $info_list[0]['u_contactEmail']; ?>">
                                                <div id="err_email_lien_he" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" height="10"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="borderBot" height="10"></td>
                                        </tr>

                                    </tbody>
                                </table></td>
                        </tr>
                        <tr>
                            <td class="borderBot" colspan="2" height="1"></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td class="tbUser-row" valign="top" width="150"></td>
                            <td class="tbUser-row" valign="top">
                                <input type="button" class="button" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntd_quan_tri_cap_nhat_thong_tin_tai_khoan();
                                        }">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <br>
            <br>
            <!--Phần thông tin cũ, chi hiển thị khi người dùng có thông tin chỉnh sửa đang chờ duyệt-->
            <script language="javascript" type="text/javascript">
                if (top.document.getElementById("thong_bao") != null) {
                    top.document.getElementById("thong_bao").innerHTML = "Thông tin đang chờ duyệt:";
                }
            </script>
            <div id="thong_tin_cu" style="display:none">
                <hr style="height:1px; color:#1D4F50; background:#1D4F50;">
                <br>
                <span style="color:blue;font-size:14px;">Thông tin đã được duyệt:</span>
                <br>
                <br>
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2"><h3>Thông tin Nhà tuyển dụng</h3></td>
                        </tr>
                        <tr>
                            <td valign="top" class="padTop10">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="145" valign="top" class="tbUser-info"><b>Tên công ty:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_companyName']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Quy mô công ty:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_companyMem']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Sơ lược về công ty:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_companyIntro']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Địa chỉ:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_companyadress']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Logo:</b></td>
                                            <td class="tbUser-info"><img src="/upload/files_cua_nguoi_dung/logo/2013/11/23/1385194604_78577167.jpg" width="104" height="79" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Giấy phép Đk kinh doanh:</b></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Mã số thuế:</b></td>
                                            <td class="tbUser-info"></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Website:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_home']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Tỉnh/Thành phố</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_companyadress']; ?></td>
                                        </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2"><h3>Thông tin liên hệ</h3></td>
                        </tr>
                        <tr>
                            <td valign="top" class="padTop10">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="145" valign="top" class="tbUser-info"><b>Người liên hệ:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_contactName']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Địa chỉ liên hệ:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_contactAdress']; ?></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Email liên hệ:</b></td>
                                            <td class="tbUser-info"><a href="mailto:quangthang12891@gmail.com" title=""><?php echo $info_list[0]['u_contactEmail']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Điện thoại liên hệ:</b></td>
                                            <td class="tbUser-info"><?php echo $info_list[0]['u_contactMobi']; ?></td>
                                        </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>