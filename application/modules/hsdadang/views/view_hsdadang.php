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
    <div name="div_tim_kiem_ttv" id="div_tim_kiem_ttv">
        <div class="navBar">
            <div class="navBarLeft">
                <h2><span class="navBarTxt24-1">Các hồ sơ tìm việc</span><span style="color:red;">(Bạn được phép tạo tối đa 10 hồ sơ tìm việc)</span></h2>
            </div>
            <div class="navBarRight">
                <a href="/dang-ho-so-tinh-phi.html" title="Click để tới trang đăng hồ sơ tìm việc hot" class="dangTinVip">Tìm việc hiệu quả</a>
            </div>
            <div class="clear"></div>
        </div>
        <div name="div_ntv_quan_tri_tin_tim_viec" id="div_ntv_quan_tri_tin_tim_viec">
            <form name="form_ds_ttv" id="form_ds_ttv" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_ds_ttv" width="0" height="0" style="visibility:hidden"></iframe>
                <div class="marBot7">

                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td class="tb-header" width="5">
                                    <input type="checkbox" id="checkbox_ttv_all" title="Chọn/Bỏ chọn tất cả" onclick="select_or_unselect_group_checkbox('checkbox_ttv[', ']', 1, document.getElementById('checkbox_ttv_all').checked)">
                                </td>
                                <td class="tb-header" width="65">Mã hồ sơ</td>
                                <td class="tb-header">Tên việc làm</td>
                                <td class="tb-header" width="85">Ngày làm mới</td>
                                <td class="tb-header" width="85">Ngày đăng</td>
                                <td class="tb-header" width="85">Ngày cập nhật</td>
                                <td class="tb-header" width="85">Ngày hết hạn</td>
                                <td class="tb-header" width="100">Tình trạng hồ sơ</td>
                                <td class="tb-header" width="130">Thao tác</td>
                            </tr>
                        <input type="hidden" name="tong_so_ttv" id="tong_so_ttv" value="1">
                        <input type="hidden" name="page" id="page" value="1">
                        <input type="hidden" name="number_items" id="number_items" value="15">

                        <input type="hidden" name="gia_han_2444325" id="gia_han_2444325" value="3">
                        <input type="hidden" name="lam_moi_2444325" id="lam_moi_2444325" value="1000">
                        <?php 
                        foreach($hsdangdang_detail as $detail_hs)
                        {
                        ?>
                        <tr style="">
                            <td class="tb-row-W" align="center">
                                <input type="checkbox" name="checkbox_ttv[]" id="checkbox_ttv[0]" value="2444325">
                            </td>
                            <td class="tb-row-W" align="center"><?php echo $detail_hs['j_id']; ?></td>
                            <td class="tb-row-W">
                                <div class="cumTT-tieude">
                                    <b class="textRed11"> <a href="/nha-tuyen-dung/it-phan-mem/nhan-vien-it-c74p0id2444325.html" target="_blank" title="Nhân Viên IT" class="textRed11"><?php echo $hsdangdang_detail[0]['j_title']; ?></a> </b>
                                    <br>
                                    <span style="font-size: 11px;"><?php echo $list_cate_job[$detail_hs['m_id']]['m_name']; ?></span>
                                    <br>                             
                                </div></td>
                            <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_update']); ?>
                                <br>
                                (Số lần làm mới còn lại: <span class="textRed11">1000</span>) </td>
                            <td class="tb-row-W" align="center"> <?php echo date('d/m/Y', $detail_hs['j_date']); ?></td>
                            <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_update']); ?></td>
                            <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_lastdate']); ?>
                            </td>
                            <td class="tb-row-W"><span class="textRed11"></span></td>
                            <td class="tb-row-W">
                                <div class="borderBot padTop5">
                                    <a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $detail_hs['j_id']; ?>" target="_blank" title="Xem thông tin chi tiết tin tìm việc">Xem</a> |
                                    <a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $detail_hs['j_id']; ?>" title="">Sửa</a> | <a href='javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_doi_trang_thai_1_ttv(2444325,"xoa_tam"); }' title="Xoá tạm hồ sơ">Xóa</a>
                                </div>
                                <div class="padTop5">
                                    <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_gia_han_1_ttv(2281716,2444325); }" title="">Gia hạn</a>
                                </div></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <table width="100%" class="padTop10">
                        <tbody>
                            <tr>
                                <td height="30" class="borderBot" width="400"><a href="javascript:select_or_unselect_group_checkbox('checkbox_ttv[',']',1,true)" title="Chọn tất cả các hồ sơ trong trang" class="checkAll">Chọn tất cả</a><a href="javascript:select_or_unselect_group_checkbox('checkbox_ttv[',']',1,false)" title="Bỏ chọn tất cả các hồ sơ trong trang" class="unCheck">Bỏ chọn tất cả</a></td>
                                <td class="borderBot"><div class="pageList"></div></td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td height="30" class="borderBot" width="700"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_doi_trang_thai_ds_ttv('xoa_tam'); }" title="Xoá tạm các tin" class="xoaHoSo">Xóa tạm hồ sơ</a><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_doi_trang_thai_ds_ttv('dang_tin'); }" title="Đăng các tin" class="dangHoSo">Đăng hồ sơ</a><!-- <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_gia_han_ds_ttv(); }" title="Gia hạn các tin" class="refresh">Gia hạn</a> --><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_doi_trang_thai_ds_ttv('huy_dang_tin'); }" title="Huỷ đăng các tin" class="khongtrungTuyen">Hủy đăng hồ sơ</a><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_doi_trang_thai_ds_ttv('khoi_phuc'); }" title="Khôi phục các tin xoá tạm" class="phucHoi">Phục hồi hồ sơ xóa tạm</a></td>
                                <td class="borderBot" align="right"><b>Sắp xếp theo: </b>
                                    <select class="dropBox" name="select_sap_xep_bottom" id="select_sap_xep_bottom" style="width:200px;" onchange="ntv_quan_tri_sap_xep_ttv('select_sap_xep_bottom', 'select_sap_xep_top')">
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
            if (document.getElementById("a_menu_lv2_69") != null) {
                document.getElementById("a_menu_lv2_69").style.color = "#518c04";
            }
        </script>
    </div>
</div>