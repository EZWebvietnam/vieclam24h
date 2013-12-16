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
            <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Từ 25/10 NTV chỉ được đăng tối đa 10 hồ sơ tìm việc </span>
        </marquee>
    </div>
    <div name="div_ntd_quan_tri_tin_tuyen_dung" id="div_ntd_quan_tri_tin_tuyen_dung">
        <form name="form_ds_ttd" id="form_ds_ttd" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_ds_ttd" width="0" height="0" style="visibility:hidden"></iframe>
            <div class="marBot7">

                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td class="tb-header-G" align="center" width="5">
                                <input type="checkbox" id="checkbox_ttd_all" title="Chọn/Bỏ chọn tất cả" onclick="select_or_unselect_group_checkbox('checkbox_ttd[', ']', 3, document.getElementById('checkbox_ttd_all').checked)">
                            </td>
                            <td class="tb-header-G" width="55">Mã tin</td>
                            <td class="tb-header-G" width="150">Tiêu đề tuyển dụng</td>
                            <td class="tb-header-G" width="85">Ngày làm mới</td>
                            <td class="tb-header-G" width="80">Ngày đăng</td>
                            <td class="tb-header-G" width="80">Ngày cập nhật</td>
                            <td class="tb-header-G" width="85">Ngày hết hạn</td>
                            <td class="tb-header-G" width="80">Tình trạng tin</td>
                            <td class="tb-header-G" width="80">HS ứng tuyển</td>
                            <td class="tb-header-G" width="130">Thao tác</td>

                        </tr>
                    <input type="hidden" name="tong_so_ttd" id="tong_so_ttd" value="3">
                    <input type="hidden" name="page" id="page" value="1">
                    <input type="hidden" name="number_items" id="number_items" value="15">
                    <input type="hidden" name="gia_han_1407482" id="gia_han_1407482" value="3">
                    <input type="hidden" name="lam_moi_1407482" id="lam_moi_1407482" value="1000">
                    <?php  
                            foreach ($tddangdang_detail as $tddadang){                      
                        ?>
                    <tr style="">
                        
                        <td class="tb-row-W" align="center">
                            <input type="checkbox" name="checkbox_ttd[]" id="checkbox_ttd[0]" value="1407482">
                        </td>
                        <td class="tb-row-W" align="center"><?php echo $tddadang['e_id']; ?></td>
                        <td class="ntd_tb-row-W">
                            <div class="cumTT-tieude">
                                <b class="linkBlack"> <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $tddadang['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($tddadang['e_title']))) ?>" target="_blank" title="<?php echo $tddadang['e_title']; ?>" class="linkBlack"><?php echo $tddadang['e_title']; ?></a> </b>
                                <br>
                                <span style="font-size: 11px;">
                                    <?php echo $list_cate_job[$tddadang['m_id']]['m_name']; ?>
                                </span>
                                <br>
                                <span style="font-size: 11px; font-style:italic;color: #999;">(0 lượt xem)</span>
                            </div></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $tddadang['e_dateActive']); ?>
                            <br>
                            </td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $tddadang['e_date']); ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $tddadang['e_dateActive']); ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $tddadang['e_lastDate']); ?>
                            </td>
                        <td class="ntd_tb-row-W"><?php echo $tddadang['e_active']; ?></td>
                        <td class="tb-row-W" align="center">0
                            <br>
                        </td>
                        <td class="ntd_tb-row-W">
                            <div class="borderBot padTop5">
                                <a href="/bao-ve/cong-tac-vien-kinh-doanh-tinh-c94p1id1407482.html" target="_blank" title="">Xem</a> | <a href='javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_1_ttd(1407482,"xoa_tam"); }' title="Xoá tạm tin tuyển dụng">Xóa</a>
                            </div>
                            <div class="borderBot padTop5">
                                <a href='javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_1_ttd(1407482,"huy_dang_tin"); }' title="Huỷ đăng tin tuyển dụng">Huỷ đăng tin</a>
                            </div>
                            <div class="padTop5">
                                <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_xuat_ban_them_1_ttd(1407482); }" title="Xuất bản thêm tin tuyển dụng">Xuất bản thêm</a>
                            </div></td>
                            
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <table width="100%" class="padTop10">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="400"><a href="javascript:select_or_unselect_group_checkbox('checkbox_ttd[',']',3,true)" title="Chọn tất cả các tin tuyển dụng trong trang" class="checkAll">Chọn tất cả</a><a href="javascript:select_or_unselect_group_checkbox('checkbox_ttd[',']',3,false)" title="Bỏ chọn tất cả các tin tuyển dụng trong trang" class="unCheck">Bỏ chọn tất cả</a></td>
                            <td class="borderBot"><div class="pageList"></div></td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="700"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_ds_ttd('xoa_tam'); }" title="Xoá tạm các tin" class="xoaHoSo">Xóa tạm tin</a><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_ds_ttd('dang_tin'); }" title="Đăng các tin" class="dangHoSo">Đăng tin</a><!-- <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_gia_han_ds_ttd(); }" title="Gia hạn các tin" class="refresh">Gia hạn tuyển</a> --><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_ds_ttd('huy_dang_tin');}" title="Huỷ đăng các tin" class="khongtrungTuyen">Hủy đăng tin</a><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_ds_ttd('khoi_phuc'); }" title="Khôi phục các tin xoá tạm" class="phucHoi">Phục hồi tin xóa tạm</a></td>
                            <td class="borderBot" align="right"><b>Sắp xếp theo: </b>
                                <select class="dropBox" name="select_sap_xep_bottom" id="select_sap_xep_bottom" style="width:200px;" onchange="ntd_quan_tri_sap_xep_ttd('select_sap_xep_bottom', 'select_sap_xep_top')">
                                    <option value="thoi_gian_cap_nhat_giam" selected="">Thời gian cập nhật giảm dần</option>
                                    <option value="thoi_gian_cap_nhat_tang">Thời gian cập nhật tăng dần</option>
                                    <option value="thoi_gian_lam_moi_giam">Thời gian làm mới giảm dần</option>
                                    <option value="thoi_gian_lam_moi_tang">Thời gian làm mới tăng dần</option>
                                    <option value="thoi_gian_dang_tin_giam">Thời gian đăng giảm dần</option>
                                    <option value="thoi_gian_dang_tin_tang">Thời gian đăng tăng dần</option>
                                    <option value="thoi_gian_het_han_giam">Thời gian hết hạn giảm dần</option>
                                    <option value="thoi_gian_het_han_tang">Thời gian hết hạn tăng dần</option>
                                    <option value="so_lan_xem_giam">Số lần xem giảm dần</option>
                                    <option value="so_lan_xem_tang">Số lần xem tăng dần</option>
                                    <option value="so_ho_so_ung_tuyen_giam">Số hồ sơ ứng tuyển giảm dần</option>
                                    <option value="so_ho_so_ung_tuyen_tang">Số hồ sơ ứng tuyển tăng dần</option>
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
        if (document.getElementById("a_menu_lv2_91") != null) {
            document.getElementById("a_menu_lv2_91").style.color = "#518c04";
        }
    </script>
</div>