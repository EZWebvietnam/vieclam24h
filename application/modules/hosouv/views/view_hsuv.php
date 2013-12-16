<div id="content-detail">

    <div id="content-left">
        <div class="navBarRight">
            <a href="/dang-ho-so-tinh-phi.html" title="" class="dangTinVip">Tìm việc hiệu quả</a>
        </div>
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td align="left" height="40">Ngày làm mới: <b><?php echo date('d/m/Y',$hsuv_detail[0]['j_update']); ?></b></td><td align="right">Mã: <b><?php echo $hsuv_detail[0]['j_id']; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Số lượt xem: <b>19</b></td>
                </tr>
                <tr>
                    <td class="tbInfo-header_ntd br-L_ntd br-R_ntd" colspan="2"><h2>Thông tin cá nhân</h2></td>
                </tr>
                <tr>
                    <td width="140" class="tbUser-row_ntd br-L_ntd" valign="top" style="padding-top:20px"><img src="<?php echo base_url(); ?>template/home/img/user-img.jpg" alt="" width="130" height="160" class="userImg"></td>
                    <td width="100%" valign="top" class="padTop10_ntd br-R_ntd">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="170" valign="top" class="tbUser-info_ntd" align="right"><b>Họ và tên:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['u_fullname']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Ngày sinh:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo date('d/m/Y',$hsuv_detail[0]['u_birthday']); ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Giới tính:</b></td>
                                    <td class="tbUser-info"><?php echo $list_sex[$hsuv_detail[0]['e_sex']]['sex_name']; ?></td>
                                </tr>                                
                            </tbody>
                        </table></td>
                </tr>
                <tr>
                    <td class="tbInfo-header_ntd br-L_ntd br-R_ntd" colspan="2"><h2>Trình độ học vấn</h2></td>
                </tr>
                <tr>
                    <td valign="top" class="padTop10_ntd br-L_ntd br-R_ntd" colspan="2">
                        <table width="80%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="180" valign="top" class="tbUser-info_ntd" align="right"><b>Trình độ học vấn:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_bangcap[$hsuv_detail[0]['j_trinhdo']]['bang_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Ngành học:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_nganhhoc']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Tốt nghiệp năm:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_namtotnghiep']; ?><?php echo $list_loaitn[$hsuv_detail[0]['j_loaitotnghiep']]['tn_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Tốt nghiệp tại trường:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_truongdahoc']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Ngoại ngữ:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_ngoaingu[$hsuv_detail[0]['j_ngoaingu']]['nn_name']; ?> <?php echo $list_trinhdonn[$hsuv_detail[0]['j_trinhdonn']]['td_name']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Trình độ tin học:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_tinhoc']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Các bằng cấp/Chứng chỉ khác:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_bangcapkhac']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="10"></td>
                                </tr>
                            </tbody>
                        </table></td>
                </tr>
                <tr>
                    <td class="tbInfo-header_ntd br-L_ntd br-R_ntd" colspan="2"><h2>Kinh nghiệm làm việc</h2></td>
                </tr>
                <tr>
                    <td valign="top" class="padTop10_ntd br-L_ntd br-R_ntd" colspan="2">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="280" valign="top" class="tbUser-info_ntd" align="right"><b>Số năm kinh nghiệm:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_exp[$hsuv_detail[0]['j_kinhnghiem']]['exp_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Kinh nghiệm:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_infokinhnghiem']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Các kỹ năng:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_kynang']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="10"></td>
                                </tr>
                            </tbody>
                        </table></td>
                </tr>
                <tr>
                    <td class="tbInfo-header_ntd br-L_ntd br-R_ntd" colspan="2"><h2>Công việc mong muốn</h2></td>
                </tr>
                <tr>
                    <td valign="top" class="padTop10_ntd br-L_ntd br-R_ntd" colspan="2">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="280" valign="top" class="tbUser-info_ntd" align="right"><b>Vị trí mong muốn:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_capbac[$hsuv_detail[0]['j_chucmm']]['cb_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Cấp bậc mong muốn:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_muctieunn']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Ngành nghề:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_cate_job[$hsuv_detail[0]['m_id']]['m_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Hình thức làm việc:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_time[$hsuv_detail[0]['j_timeID']]['t_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Địa điểm làm việc:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_city[$hsuv_detail[0]['j_cityID']]['n_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Mức lương mong muốn:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $list_luong[$hsuv_detail[0]['j_luongmm']]['luong_name']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Mục tiêu nghề nghiệp:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_muctieunn']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="10"></td>
                                </tr>
                            </tbody>
                        </table></td>
                </tr>
                <tr>
                    <td class="tbInfo-header_ntd br-L_ntd br-R_ntd" colspan="2"><h2>Nguồn tham khảo</h2></td>
                </tr>
                <tr>
                    <td valign="top" class="padTop10_ntd br-L_ntd br-R_ntd" colspan="2">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="280" valign="top" class="tbUser-info_ntd" align="right"><b>Nguồn tham khảo:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['j_thamkhao']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="10"></td>
                                </tr>
                            </tbody>
                        </table></td>
                </tr>
                <tr>
                    <td class="tbInfo-header_ntd br-L_ntd br-R_ntd" colspan="2"><h2>Thông tin liên hệ</h2></td>
                </tr>
                <tr>
                    <td valign="top" class="padTop10_ntd br-L_ntd br-R_ntd" colspan="2">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="280" valign="top" class="tbUser-info_ntd" align="right"><b>Người liên hệ:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['u_fullname']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Địa chỉ liên hệ:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['u_adress']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Email liên hệ:</b></td>
                                    <td class="tbUser-info_ntd"><a href="mailto:quangthang12891@gmail.com" title=""><?php echo $hsuv_detail[0]['u_email']; ?></a></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-info_ntd" align="right"><b>Điện thoại liên hệ:</b></td>
                                    <td class="tbUser-info_ntd"><?php echo $hsuv_detail[0]['u_mobi']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="10"></td>
                                </tr>
                            </tbody>
                        </table></td>
                </tr>
                <tr>
                    <td class="borderBot_ntd" colspan="2" height="1"></td>
                </tr>
            </tbody>
        </table>
        <form name="frm_ung_vien_main" method="post" action="">
            <input type="hidden" name="dang_luu_ho_so" id="dang_luu_ho_so" value="">
            <input type="hidden" name="dang_luu_phong_van" id="dang_luu_phong_van" value="">
            <input type="checkbox" id="chk_item0" value="2444325" name="chk_item[]" checked="checked" style="display:none;">
            <input type="hidden" id="kinh_nghiem0" value="Tên công ty: Teerabook
                   Vị trí công việc: Nhân viên
                   Ngành nghề: CNTT
                   Thời gian bắt đầu: 2/5/2013
                   Thời gian kết thúc: 28/7/2013
                   Mô tả công việc: Lập trình web
                   Lý do thôi việc: lý do gia đình
                   Thành tích đạt được:
                   Mức lương: 5.000.000">
            <input type="hidden" id="tieu_de0" value="Nhân Viên IT">
            <input type="hidden" id="nganh_cap_10" value="74">
            <input type="hidden" id="tai_khoan0" value="2281716">
            <input type="hidden" id="email_ntv0" value="quangthang12891@gmail.com">
            <input type="hidden" id="ten_ntv0" value="Đoàn Quang Thắng">
            <input type="hidden" name="tong_tin" id="tong_tin" value="1">
            <input type="hidden" name="checkedvalues" id="checkedvalues" value="0">
            <input type="hidden" name="kinh_nghiem_list" id="kinh_nghiem_list" value="">
            <input type="hidden" name="nganh_list" id="nganh_list" value="">
            <input type="hidden" name="tieu_de_list" id="tieu_de_list" value="">
            <input type="hidden" name="tai_khoan_list" id="tai_khoan_list" value="">
            <iframe name="fr_submit" id="fr_submit" width="0" height="0" style="visibility:hidden"></iframe>
        </form>
        <div class="padLeft10_ntd marBot7_ntd padTop10_ntd">
            <a class="luuTin_ntd" title="" href="javascript:ntd_luu_ho_so();">Lưu hồ sơ</a><!--a class="guiBanBe_ntd" title="" href="javascript:gui_email_phan_hoi();">Gửi phản hồi</a--><!--a class="luuTin_ntd" title="" href="javascript:ntv_luu_phong_van();" >Lưu phỏng vấn</a--><a class="inTin_ntd" title="" href="javascript: print_preview('/ajax/ntd_chi_tiet_ung_vien/index/2444325/1/','width=700,height=1000,scrollbars=yes');">In tin này</a><a class="toCao_ntd" title="" href="javascript:ntd_to_cao_ung_vien();">Tố cáo</a>
        </div>
        <iframe name="fr_tin_tim_viec_da_xem" src="/ajax/account/cap_nhat_tintimviec_daxem/2444325/74" id="fr_submit" width="0" height="0" style="visibility:hidden"></iframe>
        <div>
            <img width="0" height="0" src="http://thongke.24h.com.vn/subdomain-analytics/vieclam-analytics.php?url_tracker=http%3A%2F%2Fvieclam.24h.com.vn%2Fclicked-tin-c74id2444325.html%3Ftype%3Dtintimviec">
        </div>
    </div>
    <div id="content-right">

        <div class="GridSub">
            <div class="TopLeft">
                <div class="TopRight">
                    <h2 class="Headline"><a href="/vieclam/tintuyendungnhanh" target="_blank">Tin tuyển dụng nhanh</a></h2>
                </div>
            </div>
            <div class="BodyLeft">
                <div class="BodyRight">
                    <table class="TableTdn">
                        <tbody>
                            <?php
                            foreach ($job_post_list as $job) {
                                ?>
                                <tr>
                                    <td class="W50">
                                        <?php 
                                                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/'.$job['u_img']))
                                                    {
                                                    ?>
                                                        <img src="<?php echo base_url(); ?>file/<?php echo $job['u_img']; ?>" width="50" alt="<?php echo $job['e_title']; ?>">
                                                    <?php } else {?> 
                                                        <img src="<?php echo base_url(); ?>template/home/img/default.gif" width="50" alt="<?php echo $job['e_title']; ?>">
                                                        <?php }?>
                                    </td>
                                    
                                    <td style="padding-left: 3px;"><a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $job['e_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job['e_title']))) ?>" title="<?php echo $job['e_title'] ?>" target="_blank"><?php echo $job['e_title'] ?></a>
                                        <div class="TinyBlank"></div><span class="Number"><?php echo $job['u_companyName'] ?></span></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="BottomLeft">
                <div class="BottomRight"></div>
            </div>
        </div>
        <div class="Blank"></div>

        <div class="Grid">
            <div class="TopLeft">
                <div class="TopRight">
                    <h2 class="Headline"> Tìm việc làm theo hình thức làm việc </h2>
                </div>
            </div>
            <div class="BodyLeft">
                <div class="BodyRight">

                    <table class="TableList">
                        <tbody>
                            <?php
                            foreach ($list_time as $time) {
                                ?>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="/vieclam/tinhchatcongviec/20/viec-lam-cho-tri-thuc-lon-tuoi-tren-50-tuoi.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm cho trí thức lớn tuổi (trên 50 tuổi)']);" title="<?php echo $time['t_name'] ?>" target="_blank"><?php echo $time['t_name'] ?></a>

                                            </li>
                                        </ul></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>                       
                    </table>
                </div>
            </div>
            <div class="BottomLeft">
                <div class="BottomRight"></div>
            </div>
        </div>
        <div class="Blank"></div>

        <div class="GridSub">
            <div class="TopLeft">
                <div class="TopRight">
                    <h2 class="Headline">Người tìm việc năng động</h2>
                </div>
            </div>
            <div class="BodyLeft">
                <div class="BodyRight">
                    <table class="TableVip">
                        <tbody>
                            <?php
                           
                            foreach ($user_post_list as $user_post) {
                                ?>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url(); ?>info-hoso-ungvien/<?php echo $user_post['j_id'] ?>-<?php echo mb_strtolower(url_title(removesign($user_post['j_title']))) ?>" title="<?php echo $user_post['j_title'] ?>" target="_blank"><?php echo $user_post['j_title'] ?></a>
                                                <div class="TinyBlank"></div>
                                                <span class="Number"><?php echo $user_post['u_fullname'] ?></span>
                                            </li>
                                        </ul></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="BottomLeft">
                <div class="BottomRight"></div>
            </div>
        </div>
        
        <div class="Blank"></div>
    </div>
    <div class="Clear"></div>
</div>