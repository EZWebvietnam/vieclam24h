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
            <h2><span class="navBarTxt24-1">Việc làm đã lưu</span></h2>
        </div>
        <div class="navBarRight">
            <a href="/dang-ho-so-tinh-phi.html" title="Click để tới trang đăng hồ sơ tìm việc hot" class="dangTinVip">Tìm việc hiệu quả</a>
        </div>
        <div class="clear"></div>
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
                    foreach($tddaluu_detail as $td_luu)
                    {
                    ?>
                    <tr>
                        <td class="tb-row-W" align="center">
                            <input type="checkbox" name="checkbox_viec_lam_da_luu[]" id="checkbox_viec_lam_da_luu[0]" value="1391037">
                        </td>
                        <td class="tb-row-W"><b><a href="/it-phan-mem/nhan-vien-seo-web-c74p1id1391037.html" target="_blank" title="Click để xem thông tin chi tiết việc làm" class="linkBlack" onmouseover="tooltip.show('&lt;table width=420 cellpadding=1 cellspacing=1 border=0 bgcolor=#d7d7d7&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldBlue14&gt;Nhân viên SEO WEB&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Công ty:&lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Công ty Cổ phần Việt Nam Booking&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Số lượng:&lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;10&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=tt-tieude&gt;Mô tả công việc:&lt;/span&gt;&lt;div class=textBoldBlack14 style=&quot;padding-left:15px;padding-top:5px;&quot;&gt;-Là người có trách nhiệm, nhiệt tình với công việc;&lt;br/&gt;-Đã có quá trình tìm hiểu thực hành làm SEO trên 1 năm;&lt;br/&gt;-Đã có một số website SEO thành công;&lt;br/&gt;-Đã từng tham gia nhiều diễn đàn, mạng cộng đồng, có khả năng xây dựng các blog,&lt;br/&gt;có số lượng website lớn để làm vệ tinh cho website cần SEO;&lt;br/&gt;-Có kinh nghiệm tìm kiếm, phân loại website chất lượng có thể đặt backlinks;&lt;br/&gt;-Có khả năng phát triển nội dung, có kiến thức về on page seo off page;&lt;br/&gt;-Sử dụng thành thạo các công cụ hỗ trợ seo như: Google Webmaster Tools, Google Analytics,...&lt;br/&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;');" onmouseout="tooltip.hide();"><?php echo $tddaluu_detail[0]['e_title']; ?></a></b>
                            <br>
                            <span><?php echo $list_cate_job[$td_luu['m_id']]['m_name']; ?>
                            </span>
                            <br>
                            Số lượng:<?php echo $td_luu['e_mem']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo $tddaluu_detail[0]['u_companyName']; ?></td>
                        <td class="tb-row-W" align="center" onmouseover="tooltip.show('TP. HCM');" onmouseout="tooltip.hide();">
                            <?php echo $list_city[$td_luu['e_cityID']]['n_name']; ?>
                        </td>
                        <td class="tb-row-W" align="center"><?php echo $list_luong[$td_luu['e_luong']]['luong_name']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y',$td_luu['e_dateActive']); ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y',$td_luu['e_lastDate']); ?></td>
                        <td class="tb-row-W" align="center"><?php echo $td_luu['e_visits']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo date('d/m/Y',$td_luu['e_datesave']); ?></td>
                        <td class="tb-row-W">
                            <div class="borderBot padTop5">
                                <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $td_luu['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($tddaluu_detail[0]['e_title']))) ?>" target="_blank" title="Click để xem thông tin chi tiết việc làm">Xem</a> | <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_xoa_1_viec_lam_da_luu(1391037); }" title="Xoá việc làm đã lưu">Xóa</a>
                            </div>
                            <div class="padTop5">
                                <a href="/ntv-nop-ho-so-truc-tuyen.html?ds_id_tin_td=1391037" target="_blank" title="Ứng tuyển vào vị trí này">Ứng tuyển</a>
                            </div></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <table width="100%" class="padTop10">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="400"><a href="javascript:select_or_unselect_group_checkbox('checkbox_viec_lam_da_luu[',']',1,true)" title="Chọn tất cả các ứng viên trong trang" class="checkAll">Chọn tất cả</a><a href="javascript:select_or_unselect_group_checkbox('checkbox_viec_lam_da_luu[',']',1,false)" title="Bỏ chọn tất cả các ứng viên trong trang" class="unCheck">Bỏ chọn tất cả</a></td>
                            <td class="borderBot"><div class="pageList"></div></td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="700"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_xoa_ds_viec_lam_da_luu(); }" title="Xoá việc làm đã lưu" class="xoaHoSo">Xóa tin</a><a href="javascript: ntv_quan_tri_ung_tuyen_ds_viec_lam_da_luu(',~,')" title="Ứng tuyển vào các vị trí tuyển dụng đã chọn" class="dangHoSo">Ứng tuyển</a></td>
                            <td class="borderBot" align="right"><b>Sắp xếp theo: </b>
                                <select class="dropBox" name="select_sap_xep_bottom" id="select_sap_xep_bottom" style="width:200px;" onchange="ntv_quan_tri_sap_xep_viec_lam_da_luu('select_sap_xep_bottom', 'select_sap_xep_top')">
                                    <option value="thoi_gian_luu_tin_giam" selected="">Thời gian lưu tin giảm dần</option>
                                    <option value="thoi_gian_luu_tin_tang">Thời gian lưu tin tăng dần</option>
                                    <option value="thoi_gian_dang_tin_giam">Thời gian đăng tin giảm dần</option>
                                    <option value="thoi_gian_dang_tin_tang">Thời gian đăng tin tăng dần</option>
                                    <option value="thoi_gian_het_han_giam">Hạn nộp hồ sơ giảm dần</option>
                                    <option value="thoi_gian_het_han_tang">Hạn nộp hồ sơ tăng dần</option>
                                    <option value="so_lan_xem_giam">Số lượt xem giảm dần</option>
                                    <option value="so_lan_xem_tang">Số lượt xem tăng dần</option>
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
        if (document.getElementById("a_menu_lv2_70") != null) {
            document.getElementById("a_menu_lv2_70").style.color = "#518c04";
        }
    </script>
</div>