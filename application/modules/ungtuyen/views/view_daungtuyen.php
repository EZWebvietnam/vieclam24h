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
                    <?php
                    foreach ($ungtuyen_detail as $ung_tuyen) {
                        ?>
                        <tr>
                            <td class="tb-row-W" align="center">
                                <input type="checkbox" name="checkbox_viec_lam_da_ung_tuyen[]" id="checkbox_viec_lam_da_ung_tuyen[0]" value="1330523">
                            </td>
                            <td class="tb-row-W"><b><a href="/it-phan-cung/mang/nhan-vien-cong-nghe-thong-tin-c5p1id1330523.html" target="_blank" title="Click để xem thông tin chi tiết việc làm" class="linkBlack" ><?php echo $ungtuyen_detail[0]['e_title']; ?></a></b>
                                <br>
                                <span>Ngành: <?php echo $list_cate_job[$ung_tuyen['m_id']]; ?>
                                </span>
                                <br>
                                Số lượng: <?php echo $ung_tuyen['e_mem']; ?> </td>
                            <td class="tb-row-W" align="center"><?php echo $ung_tuyen['u_companyName']; ?></td>
                            <td class="tb-row-W" align="center" onmouseover="tooltip.show('Hải Dương');" onmouseout="tooltip.hide();"><?php echo $list_city[$ung_tuyen['e_cityID']]; ?></td>
                            <td class="tb-row-W" align="center"><?php echo $list_luong[$ung_tuyen['e_luong']]; ?></td>
                            <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $ung_tuyen['e_dateActive']); ?></td>
                            <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $ung_tuyen['e_lastDate']); ?></td>
                            <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $ung_tuyen['e_datesave']); ?></td>
                            <td class="tb-row-W">
                                <div class="borderBot padTop5">
                                    <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $ung_tuyen['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($ung_tuyen['e_title']))) ?>" target="_blank" title="Click để xem thông tin chi tiết việc làm">Xem</a> | <a onclick="return confirm('Bạn có chắc muốn xóa hồ sơ không ?')" href='<?php echo base_url(); ?>xoa-ho-so/<?php echo $detail_hs['j_id']; ?>/<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>' title="Xoá tạm hồ sơ">Xóa</a>
                                </div>
                            </td>
                        </tr>
<?php } ?>
                    </tbody>
                </table>
                
                <table width="100%">
                    <tbody>
                        <tr>
                            
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