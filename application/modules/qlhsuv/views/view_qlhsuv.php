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
    <div name="div_ntd_quan_tri_ho_so_ung_vien" id="div_ntd_quan_tri_ho_so_ung_vien">
        <form name="form_ds_ho_so_ung_vien" id="form_ds_ho_so_ung_vien" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_ds_ho_so_ung_vien" width="000" height="00" style="visibility:hidden"></iframe>
            <input type="hidden" name="decode_ttd" value="">
            <div id="box_tim_kiem_hs_ung_vien">
                <div class="navBar">
                    <div class="navBarLeft">
                        <span class="navBarTxt24-1" style="color: #1D4F50;">Ứng viên nộp hồ sơ
                            vào vị trí: </span>
                    </div>
                    <div class="navBarRight">
                        <a href="/dang-viec-lam-tinh-phi.html" title="Click để tới trang đăng tin tuyển dụng hot" class="dangTinVip">Tuyển dụng hiệu quả</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="marBot7">
                    <div class="marBot7">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>

                                    <td class="padTop10" align="center" valign="top" width="220"><img src="<?php echo base_url(); ?>template/home/img/user-img.jpg" alt="<?php echo $qlhsuv_detail[0]['u_companyName'] ?>" height="140" width="187">
                                        <input type="hidden" name="hid_c_ten_cty" id="hid_c_ten_cty" value="<?php echo $qlhsuv_detail[0]['u_companyName'] ?>">
                                    </td>
                                    <td class="tbUser-info" valign="top" width="260"><b>Vị trí tuyển	dụng:</b>
                                        <br>
                                        <input style="width:250px;" type="text" name="txt_vi_tri_tuyen_dung" id="txt_vi_tri_tuyen_dung" class="textbox txt-360" value="" onfocus="if (this.value == 'Nhập tiêu đề tin tuyển dụng')
                                                    this.value = '';" onblur="if (this.value == '')
                                                                this.value = 'Nhập tiêu đề tin tuyển dụng';">
                                        <br>
                                        <select style="width:260px;" title="Chọn tin tuyển dụng" id="sel_vi_tri_tuyen_dung" name="sel_vi_tri_tuyen_dung" class="textbox txt-360" size="5" onchange="ntd_quan_tri_ds_ho_so_ung_vien(-1)">

                                        </select></td>
                                    <td class="padTop10" valign="top" style="width:150px;">
                                        <br>
                                        <a href="javascript:void(null)" class="button" onclick="xem_danh_sach_ttd_cua_ntd();">Xem
                                            danh sách</a></td>
                                    <td class="lineHeight25" valign="top"><b>Vị trí tuyển dụng: </b>
                                        <br>
                                        <b>Hạn nộp hồ sơ: </b>
                                        <br>
                                        <b>Yêu cầu: </b> ...
                                        <br>
                                        <b>Số lượng tuyển: </b>
                                        <br>
                                        <b>Địa điểm làm việc:</b>
                                        <input type="hidden" name="id_tin_td" id="id_tin_td" value="">
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td colspan="2" style="padding:10px;"> Thống kê: Danh sách hiện có <span style="color:red;font-size:14px;font-weight:bold">0 </span> Hồ sơ ứng viên </td>
                                </tr>
                                <tr>
                                    <td class="tb-row-G"><span class="text12">Tìm kiếm hồ sơ ứng viên
                                            trong danh sách ứng viên đã nộp hồ sơ theo tiêu chí:</span></td>
                                    <td class="tb-row-G" width="100">
                                        <input src="<?php echo base_url(); ?>template/home/img/btnHuyTimkiem.gif" type="image" onclick="ntd_quan_tri_huy_tim_kiem_ho_so_ung_vien()">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="box-DK-search-header" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-bottom:0px;">
                            <tbody>
                                <tr>
                                    <td height="20" valign="top" width="280">
                                        <div class="borderBot">
                                            <b>Trạng thái hồ sơ:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="200">
                                        <div class="borderBot">
                                            <b>Mức lương mong muốn:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="200">
                                        <div class="borderBot">
                                            <b>Trình độ học vấn:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="180">
                                        <div class="borderBot">
                                            <b>Giới tính:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="200">
                                        <div class="borderBot">
                                            <b>Tình trạng hôn nhân:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="280">
                                        <div class="borderBot">
                                            <b>Số năm kinh nghiệm:</b>
                                        </div></td>
                                    <td style="width:15px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="height: 90px; overflow-x: hidden; overflow-y: scroll;border:#c6dbe0 solid 1px;border-top:0px;">
                            <table class="box-DK-search-noborder" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td height="30" valign="top" width="280"><div class="lineHeight25"></div></td>
                                        <td height="30" valign="top" width="200"><div class=" lineHeight25"></div></td>
                                        <td height="30" valign="top" width="200"><div class=" lineHeight25"></div></td>

                                        <td height="30" valign="top" width="180"><div class=" lineHeight25"></div></td>
                                        <td height="30" valign="top" width="200"><div class=" lineHeight25"></div></td>
                                        <td height="30" valign="top" width="280"><div class=" lineHeight25"></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--<div name='div_ntd_quan_tri_tin_tuyen_dung' id='div_ntd_quan_tri_tin_tuyen_dung'> -->
            <div id="box_ds_ho_so_ung_vien" name="box_ds_ho_so_ung_vien">

                <div class="marBot7">
                    <table width="100%">
                        <tbody>
                            <tr height="30" class="borderBot" width="700">
                                <td><a href="javascript: danh_gia_ung_vien()" title="Gửi đánh giá tới ứng viên" class="danhgia1">Đánh giá</a></td>
                                <td><a href="javascript: ntd_quan_tri_gui_phan_hoi_ds_ho_so_ung_vien()" title="Gửi phản hồi tới ứng viên" class="guiBanBe1">Phản hồi</a></td>
                                <td><a href="javascript: ntd_quan_tri_doi_trang_thai_ds_ho_so_ung_vien('luu_phong_van','Bạn có chắc chắn chuyển hồ sơ những ứng viên này sang danh sách phỏng vấn không?')" title="Lưu vào hồ sơ phỏng vấn" class="luuTin1">Phỏng vấn</a></td>
                                <td><a href="javascript: ntd_quan_tri_doi_trang_thai_ds_ho_so_ung_vien('trung_tuyen','Bạn có chắc chắn chuyển hồ sơ những ứng viên này sang danh sách trúng tuyển không?')" title="Lưu ứng viên vào danh sách trúng tuyển" class="trungTuyen1">Trúng tuyển</a></td>
                                <td><a href="javascript: ntd_quan_tri_doi_trang_thai_ds_ho_so_ung_vien('khong_trung_tuyen','Bạn có chắc chắn chuyển hồ sơ những ứng viên này sang danh sách không trúng tuyển ?')" title="Chuyển ứng viên sang danh sách không trúng tuyển" class="khongtrungTuyen1">Không trúng tuyển</a></td>
                                <td><a href="javascript: tu_choi_ung_vien()" title="Từ chối ứng viên tự ứng tuyển" class="guiBanBe1">Từ chối</a></td>
                                <td><a href="javascript: ntd_quan_tri_xoa_ds_ho_so_ung_vien()" title="Xoá hồ sơ ứng viên đã lưu" class="xoaHoSo1">Xóa hồ sơ</a></td>
                                <td><a href="javascript: ntd_quan_tri_tao_file_excel()" title="Tạo file excel danh sách ứng viên" class="excel1">Excel</a></td>

                            </tr>
                        </tbody>
                    </table>
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td height="30" class="borderBot" width="400"><div class="pageList" style="padding-right:0;text-align:left"></div></td>
                                <td class="borderBot" colspan="2">
                                    <div class="pageList" style="padding-right:0">
                                        <b>Sắp xếp theo: </b>
                                        <select class="dropBox" name="select_sap_xep_top" id="select_sap_xep_top" style="width:200px;" onchange="ntd_quan_tri_sap_xep_ho_so_ung_vien('select_sap_xep_top', 'select_sap_xep_bottom')">
                                            <option value="ngay_gui_giam_dan">Ngày gửi giảm dần</option>
                                            <option value="ngay_gui_tang_dan">Ngày gửi tăng dần</option>
                                            <option value="ngay_xu_ly_giam_dan">Ngày xử lý giảm dần</option>
                                            <option value="ngay_xu_ly_tang_dan">Ngày xử lý tăng dần</option>
                                        </select>
                                    </div></td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td class="tb-header-G" align="center">
                                    <input type="checkbox" id="checkbox_ho_so_ung_vien_all" title="Chọn/Bỏ chọn tất cả" onclick="ntd_quan_tri_chon_tat_ca_ho_so_ung_vien(0, this.checked)">
                                </td>
                                <td class="tb-header-G" width="145">Thông tin ứng viên</td>
                                <td class="tb-header-G" width="150">CV/Hồ sơ tìm việc liên quan</td>

                                <td class="tb-header-G" width="95">Mức lương mong muốn</td>
                                <td class="tb-header-G" width="80">Ngày gửi</td>
                                <td class="tb-header-G" width="80">Ngày xử lý</td>
                                <td class="tb-header-G" width="80">Ngày hẹn tiếp theo</td>
                                <td class="tb-header-G" width="85">Trạng thái hồ sơ</td>
                                <td class="tb-header-G" width="140">Thao tác</td>

                            </tr>
                        <input type="hidden" name="tong_so_ho_so_ung_vien" id="tong_so_ho_so_ung_vien" value="0">
                        <input type="hidden" name="page" id="page" value="1">
                        <input type="hidden" name="number_items" id="number_items" value="15">
                        <tr>
                            <td colspan="11">
                                <div style="-moz-border-radius:8px; border:1px solid #CCCCCC;padding:30px 0;text-align:center;">
                                    Trang này không có dữ liệu!
                                    <br>
                                    Vui lòng thử thay đổi các điều kiện tìm kiếm hoặc nhấn vào <a href="/nha-tuyen-dung.html">đây</a> để về trang chủ.
                                </div></td>
                        </tr>
                        </tbody>
                    </table>
                    <table width="100%" class="padTop10">
                        <tbody>
                            <tr>
                                <td height="30" class="borderBot" width="400"><div class="pageList" style="padding-right:0;text-align:left"></div></td>
                                <td class="borderBot" align="right" colspan="2"><b>Sắp xếp theo: </b>
                                    <select class="dropBox" name="select_sap_xep_bottom" id="select_sap_xep_bottom" style="width:200px;" onchange="ntd_quan_tri_sap_xep_ho_so_ung_vien('select_sap_xep_bottom', 'select_sap_xep_top')">
                                        <option value="ngay_gui_giam_dan">Ngày gửi giảm dần</option>
                                        <option value="ngay_gui_tang_dan">Ngày gửi tăng dần</option>
                                        <option value="ngay_xu_ly_giam_dan">Ngày xử lý giảm dần</option>
                                        <option value="ngay_xu_ly_tang_dan">Ngày xử lý tăng dần</option>
                                    </select></td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%">
                        <tbody>
                            <tr height="30" class="borderBot" width="700">
                                <td><a href="javascript: danh_gia_ung_vien()" title="Gửi đánh giá tới ứng viên" class="danhgia1">Đánh giá</a></td>
                                <td><a href="javascript: ntd_quan_tri_gui_phan_hoi_ds_ho_so_ung_vien()" title="Gửi phản hồi tới ứng viên" class="guiBanBe1">Phản hồi</a></td>
                                <td><a href="javascript: ntd_quan_tri_doi_trang_thai_ds_ho_so_ung_vien('luu_phong_van','Bạn có chắc chắn chuyển hồ sơ những ứng viên này sang danh sách phỏng vấn không?')" title="Lưu vào hồ sơ phỏng vấn" class="luuTin1">Phỏng vấn</a></td>
                                <td><a href="javascript: ntd_quan_tri_doi_trang_thai_ds_ho_so_ung_vien('trung_tuyen','Bạn có chắc chắn chuyển hồ sơ những ứng viên này sang danh sách trúng tuyển không?')" title="Lưu ứng viên vào danh sách trúng tuyển" class="trungTuyen1">Trúng tuyển</a></td>
                                <td><a href="javascript: ntd_quan_tri_doi_trang_thai_ds_ho_so_ung_vien('khong_trung_tuyen','Bạn có chắc chắn chuyển hồ sơ những ứng viên này sang danh sách không trúng tuyển ?')" title="Chuyển ứng viên sang danh sách không trúng tuyển" class="khongtrungTuyen1">Không trúng tuyển</a></td>
                                <td><a href="javascript: tu_choi_ung_vien()" title="Từ chối ứng viên tự ứng tuyển" class="guiBanBe1">Từ chối</a></td>
                                <td><a href="javascript: ntd_quan_tri_xoa_ds_ho_so_ung_vien()" title="Xoá hồ sơ ứng viên đã lưu" class="xoaHoSo1">Xóa hồ sơ</a></td>
                                <td><a href="javascript: ntd_quan_tri_tao_file_excel()" title="Tạo file excel danh sách ứng viên" class="excel1">Excel</a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <!--</div> -->
                <script language="javascript" type="text/javascript"></script>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_94") != null) {
            document.getElementById("a_menu_lv2_94").style.color = "#518c04";
        }
    </script>
</div>