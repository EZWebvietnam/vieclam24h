<div class="content">
    <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
    <div class="colCenter">
        <div>
            <marquee bgcolor="#FFCC99" scrolldelay="180" style="padding:5px;">
                <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Từ 25/10 NTV chỉ được đăng tối đa 10 hồ sơ tìm việc </span>
            </marquee>
        </div>
        <div name="div_tk_ttv" id="div_tk_ttv">
            <div class="navBar">
                <div class="navBarLeft">
                    <h2><a href="/ntv-trang-quan-tri-tin-tim-viec.html" title="Trang quản lý các hồ sơ tìm việc"><span class="navBarTxt24-1">Các hồ sơ tìm việc</span></a></h2>
                </div>
                <div class="navBarRight">
                    <a href="/dang-ho-so-tinh-phi.html" title="Click để tới trang đăng hồ sơ tìm việc hot" class="dangTinVip">Tìm việc hiệu quả</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div name="div_ds_ttv" id="div_ds_ttv">
            <form name="form_ds_ttv" id="form_ds_ttv" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_ds_ttv" width="0" height="0" style="visibility:hidden"></iframe>
                <input type="hidden" name="tin_tv_ds_thu_gon" id="tin_tv_ds_thu_gon" value="1">
                <div class="marBot7">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td class="tb-header" width="65">Mã hồ sơ</td>
                                <td class="tb-header">Tên việc làm</td>
                                <td class="tb-header" width="85">Ngày làm mới</td>
                                <td class="tb-header" width="85">Ngày đăng</td>
                                <td class="tb-header" width="85">Ngày cập nhật</td>
                                <td class="tb-header" width="85">Ngày hết hạn</td>
                                <td class="tb-header" width="100">Tình trạng hồ sơ</td>
                                <td class="tb-header" width="130">Thao tác</td>
                            </tr>

                        <input type="hidden" name="gia_han_2444325" id="gia_han_2444325" value="3">
                        <input type="hidden" name="lam_moi_2444325" id="lam_moi_2444325" value="1000">
                        <?php
                        foreach ($dadang_detail as $detail_hs) {
                            ?>
                            <tr style="">
                                <td class="tb-row-W" align="center"><?php echo $detail_hs['j_id']; ?></td>
                                <td class="tb-row-W">
                                    <div class="cumTT-tieude">
                                        <b class="textRed11"> <a href="/nha-tuyen-dung/it-phan-mem/nhan-vien-it-c74p0id2444325.html" target="_blank" title="Nhân Viên IT" class="textRed11"><?php echo $detail_hs['j_title']; ?></a> </b>
                                        <br>
                                        <span>Ngành: <?php echo $list_cate_job[$detail_hs['m_id']]; ?>
                                        </span>

                                </td>
                                <td class="tb-row-W" align="center"><span><?php echo date('d/m/Y', $detail_hs['j_update']); ?></span>
                                </td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_date']); ?></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_update']); ?></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_lastdate']); ?>
                                </td>
                                <td class="tb-row-W"><span class="textRed11"></span></td>
                                <td class="tb-row-W">
                                    <div class="borderBot padTop5">
                                        <?php
                                        if ($detail_hs['j_status'] == 1) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $detail_hs['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>" target="_blank" title="Xem thông tin chi tiết tin tìm việc">Xem</a> |
                                        <?php } else { ?>
                                            <a href="<?php echo base_url(); ?>hoso-ungvien-cho-duyet/<?php echo $detail_hs['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>" target="_blank" title="Xem thông tin chi tiết tin tìm việc">Xem</a> |
                                        <?php } ?>
                                        <a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $detail_hs['j_id']; ?>" title="">Sửa</a> | <a onclick="return confirm('Bạn có chắc muốn xóa hồ sơ không ?')" href='<?php echo base_url(); ?>xoa-ho-so/<?php echo $detail_hs['j_id']; ?>/<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>' title="Xoá tạm hồ sơ">Xóa</a>
                                    </div>
                                    <div class="padTop5">
                                        <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_gia_han_1_ttv(2281716,2444325); }" title="">Gia hạn</a>
                                    </div></td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="chiTiet">
                    <a href="/ntv-trang-quan-tri-tin-tim-viec.html" title="">Xem danh sách chi tiết</a>
                </div>
            </form>
        </div>
        <div class="barSub">
            <h3><a href="/ntv-trang-quan-tri-viec-lam-da-luu.html">Việc làm đã lưu</a></h3>
        </div>
        <div name="div_ntv_quan_tri_viec_lam_da_luu" id="div_ntv_quan_tri_viec_lam_da_luu">
            <form name="form_ds_viec_lam_da_luu" id="form_ds_viec_lam_da_luu" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_ds_viec_lam_da_luu" width="0" height="0" style="visibility:hidden"></iframe>
                <div class="marBot7">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td class="tb-header" width="5" align="center">
                                    <input type="checkbox" id="checkbox_viec_lam_da_luu_all" title="Chọn/Bỏ chọn tất cả" onclick="select_or_unselect_group_checkbox('checkbox_viec_lam_da_luu[', ']', 1, document.getElementById('checkbox_viec_lam_da_luu_all').checked)">
                                </td>
                                <td class="tb-header" width="165">Tên việc làm</td>
                                <td class="tb-header" width="150">Tên công ty</td>
                                <td class="tb-header" width="100">Nơi làm việc</td>
                                <td class="tb-header" width="85">Mức lương</td>
                                <td class="tb-header" width="85">Ngày đăng</td>
                                <td class="tb-header" width="90">Hạn nộp hồ sơ</td>
                                <td class="tb-header" width="70">Số lần xem</td>
                                <td class="tb-header" width="80">Ngày lưu</td>
                                <td class="tb-header" width="75">Thao tác</td>
                            </tr>
                        <input type="hidden" name="tong_so_viec_lam_da_luu" id="tong_so_viec_lam_da_luu" value="1">
                        <input type="hidden" name="page" id="page" value="1">
                        <input type="hidden" name="number_items" id="number_items" value="15">
<?php
foreach ($daluu_detail as $detail_vl) {
    ?>
                            <tr>
                                <td class="tb-row-W" align="center">
                                    <input type="checkbox" name="checkbox_viec_lam_da_luu[]" id="checkbox_viec_lam_da_luu[0]" value="1391037">
                                </td>
                                <td class="tb-row-W"><b><a href="/it-phan-mem/nhan-vien-seo-web-c74p1id1391037.html" target="_blank" title="Click để xem thông tin chi tiết việc làm" class="linkBlack" ><?php echo $detail_vl['e_title']; ?></a></b>
                                    <br>
                                    <span>Ngành: <?php echo $list_cate_job[$detail_vl['m_id']]; ?>
                                        <br>
                                        Số lượng:<?php echo $detail_vl['e_mem']; ?></td>
                                        <td class="tb-row-W" align="center"><?php echo $detail_vl['u_companyName']; ?></td>
                                        <td class="tb-row-W" align="center" onmouseover="tooltip.show('TP. HCM');" onmouseout="tooltip.hide();">
                                            <?php echo $list_city[$detail_vl['e_cityID']]; ?></td>
                                        <td class="tb-row-W" align="center"><?php echo $list_luong[$detail_vl['e_luong']]; ?></td>
                                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_vl['e_dateActive']); ?></td>
                                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_vl['e_lastDate']); ?></td>
                                        <td class="tb-row-W" align="center"><?php echo $detail_vl['e_visits']; ?></td>
                                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_vl['e_datesave']); ?></td>
                                        <td class="tb-row-W">
                                            <div class="borderBot padTop5">                                
                                    <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $detail_vl['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_vl['e_title']))) ?>" target="_blank" title="Xem thông tin chi tiết tin tìm việc">Xem</a> | <a href="<?php echo base_url(); ?>ung-tuyen/<?php echo $detail_vl['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_vl['e_title']))) ?>" target="_blank" title="Ứng tuyển vào vị trí này">Ứng tuyển</a>
                                </div></td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <script language="javascript" type="text/javascript"></script>
        </div>
        <div class="barSub">
            <h3><a href="/ntv-trang-quan-tri-viec-lam-da-ung-tuyen.html">Việc làm đã ứng tuyển</a></h3>
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
<?php
foreach ($ungtuyen_detail as $detail_ut) {
    ?>
                            <tr>
                                <td class="tb-row-W" align="center">
                                    <input type="checkbox" name="checkbox_viec_lam_da_ung_tuyen[]" id="checkbox_viec_lam_da_ung_tuyen[0]" value="1330523">
                                </td>
                                <td class="tb-row-W"><b><a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $detail_ut['e_id'] ?>-<?php echo mb_strtolower(url_title(removesign($detail_ut['e_title']))) ?>" target="_blank" title="Click để xem thông tin chi tiết việc làm" class="linkBlack"><?php echo $detail_ut['e_title']; ?></a></b>
                                    <br>
                                    <span>Ngành: <?php echo $list_cate_job[$detail_ut['m_id']]; ?>
                                    </span>
                                    <br>
                                    Số lượng: <?php echo $detail_ut['e_mem']; ?> </td>
                                <td class="tb-row-W" align="center"><?php echo $detail_ut['u_companyName']; ?></td>
                                <td class="tb-row-W" align="center" onmouseover="tooltip.show('Hải Dương');" onmouseout="tooltip.hide();"><?php echo $list_city[$detail_ut['e_cityID']]; ?></td>
                                <td class="tb-row-W" align="center"><?php echo $list_luong[$detail_ut['e_luong']]; ?></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_ut['e_dateActive']); ?></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_ut['e_lastDate']); ?></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_ut['e_createdate']); ?></td>
                                <td class="tb-row-W">
                                    <div class="borderBot padTop5">
                                    <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $detail_ut['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_ut['e_title']))) ?>" target="_blank" title="Click để xem thông tin chi tiết việc làm">Xem</a> | <a onclick="return confirm('Bạn có chắc muốn xóa hồ sơ không ?')" href='<?php echo base_url(); ?>xoa-ho-so/<?php echo $detail_ut['j_id']; ?>/<?php echo mb_strtolower(url_title(removesign($detail_ut['j_title']))) ?>' title="Xoá tạm hồ sơ">Xóa</a>
                                </div></td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <script language="javascript" type="text/javascript"></script>
        </div>
    </div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_67") != null) {
            document.getElementById("a_menu_lv2_67").style.color = "#518c04";
        }
    </script>
</div>