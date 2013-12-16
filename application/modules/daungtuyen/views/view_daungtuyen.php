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
            <h2><span class="navBarTxt24-1">Việc làm đã ứng tuyển</span></h2>
        </div>
        <div class="navBarRight">
            <a href="/dang-ho-so-tinh-phi.html" title="Click để tới trang đăng hồ sơ tìm việc hot" class="dangTinVip">Tìm việc hiệu quả</a>
        </div>
        <div class="clear"></div>
    </div>
    <div name="div_ntv_quan_tri_viec_lam_da_ung_tuyen" id="div_ntv_quan_tri_viec_lam_da_ung_tuyen">
        <form name="form_ds_viec_lam_da_ung_tuyen" id="form_ds_viec_lam_da_ung_tuyen" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_ds_viec_lam_da_ung_tuyen" width="0" height="0" style="visibility:hidden"></iframe>
            <div class="marBot7">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td class="tb-header" width="5" align="center">
                                <input type="checkbox" id="checkbox_viec_lam_da_ung_tuyen_all" title="Chọn/Bỏ chọn tất cả" onclick="select_or_unselect_group_checkbox('checkbox_viec_lam_da_ung_tuyen[', ']', 0, document.getElementById('checkbox_viec_lam_da_ung_tuyen_all').checked)">
                            </td>
                            <td class="tb-header" width="200">Tên việc làm</td>
                            <td class="tb-header" width="200">Tên công ty</td>
                            <td class="tb-header" width="80">Nơi làm việc</td>
                            <td class="tb-header" width="85">Mức lương</td>
                            <td class="tb-header" width="85">Ngày đăng</td>
                            <td class="tb-header" width="90">Hạn nộp hồ sơ</td>
                            <td class="tb-header" width="90">Ngày nộp</td>
                            <td class="tb-header" width="95">Thao tác</td>

                        </tr>
                    <input type="hidden" name="tong_so_viec_lam_da_ung_tuyen" id="tong_so_viec_lam_da_ung_tuyen" value="0">
                    <input type="hidden" name="page" id="page" value="1">
                    <input type="hidden" name="number_items" id="number_items" value="15">
                    <tr>
                        <td class="tb-row-W" align="center">
                            <input type="checkbox" name="checkbox_viec_lam_da_ung_tuyen[]" id="checkbox_viec_lam_da_ung_tuyen[0]" value="1330523">
                        </td>
                        <td class="tb-row-W"><b><a href="/it-phan-cung/mang/nhan-vien-cong-nghe-thong-tin-c5p1id1330523.html" target="_blank" title="Click để xem thông tin chi tiết việc làm" class="linkBlack" ><?php echo $ungtuyen_detail[0]['e_title']; ?></a></b>
                            <br>
                            <span>Ngành: <?php echo $list_cate_job[$ungtuyen_detail[0]['m_id']]['m_name']; ?>
                            <?php echo $ungtuyen_detail[0]['e_nghe1']; ?> <?php echo $ungtuyen_detail[0]['e_nghe2']; ?> <?php echo $ungtuyen_detail[0]['e_nghe3']; ?></span>
                            <br>
                            Số lượng: <?php echo $ungtuyen_detail[0]['e_mem']; ?> </td>
                        <td class="tb-row-W" align="center"><?php echo $ungtuyen_detail[0]['u_companyName']; ?></td>
                        <td class="tb-row-W" align="center" onmouseover="tooltip.show('Hải Dương');" onmouseout="tooltip.hide();"><?php echo $list_city[$ungtuyen_detail[0]['e_cityID']]['n_name']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo $list_luong[$ungtuyen_detail[0]['e_luong']]['luong_name']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $ungtuyen_detail[0]['e_dateActive']); ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $ungtuyen_detail[0]['e_lastDate']); ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $ungtuyen_detail[0]['e_datesave']); ?></td>
                        <td class="tb-row-W">
                            <div class="borderBot padTop5">
                                <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $ungtuyen_detail[0]['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($ungtuyen_detail[0]['e_title']))) ?>" target="_blank" title="Click để xem thông tin chi tiết việc làm">Xem</a>
                            </div>
                            <div class="padTop5">
                                <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_xoa_1_viec_lam_da_ung_tuyen(1330523); }" title="Hủy ứng tuyển việc làm đã ứng tuyển">Hủy ứng tuyển</a>
                            </div></td>
                    </tr>
                    </tbody>
                </table>
                <table width="100%" class="padTop10">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="400"><a href="javascript:select_or_unselect_group_checkbox('checkbox_viec_lam_da_ung_tuyen[',']',0,true)" title="Chọn tất cả các ứng viên trong trang" class="checkAll">Chọn tất cả</a><a href="javascript:select_or_unselect_group_checkbox('checkbox_viec_lam_da_ung_tuyen[',']',0,false)" title="Bỏ chọn tất cả các ứng viên trong trang" class="unCheck">Bỏ chọn tất cả</a></td>
                            <td class="borderBot"><div class="pageList"></div></td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="700"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_xoa_ds_viec_lam_da_ung_tuyen(); }" title="Hủy ứng tuyển danh sách việc làm đã ứng tuyển" class="xoaHoSo">Hủy ứng tuyển</a></td>
                            <td class="borderBot" align="right"><b>Sắp xếp theo: </b>
                                <select class="dropBox" name="select_sap_xep_bottom" id="select_sap_xep_bottom" style="width:200px;" onchange="ntv_quan_tri_sap_xep_viec_lam_da_ung_tuyen('select_sap_xep_bottom', 'select_sap_xep_top')">
                                    <option value="thoi_gian_ung_tuyen_giam" selected="">Thời gian ứng tuyển giảm dần</option>
                                    <option value="thoi_gian_ung_tuyen_tang">Thời gian ứng tuyển tăng dần</option>
                                    <option value="thoi_gian_dang_tin_giam">Thời gian đăng tin giảm dần</option>
                                    <option value="thoi_gian_dang_tin_tang">Thời gian đăng tin tăng dần</option>
                                    <option value="thoi_gian_het_han_giam">Hạn nộp hồ sơ giảm dần</option>
                                    <option value="thoi_gian_het_han_tang">Hạn nộp hồ sơ tăng dần</option>
                                </select></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        <!--</div> -->
        <script language="javascript" type="text/javascript"></script>
    </div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_71") != null) {
            document.getElementById("a_menu_lv2_71").style.color = "#518c04";
        }
    </script>
</div>