<div class="content" style="background: none repeat scroll 0 0 #FFFFFF;">
    <div class="colLeft">
        <div class="navBar-vl-hot">
            <div class="navBarLeft"><h2><span class="navBarTxt24-1">Việc làm</span>&nbsp;<input src="http://localhost/vieclam24h/template/home/images/icon-hot-big.gif" type="image"><span class="navBar-tennganh">ngành Kế toán-Kiểm toán</span></h2></div>
            <div class="navBarRight"><a href="/dang-viec-lam-tinh-phi.html" title="" class="dangTinVip">Tuyển dụng hiệu quả</a></div>
            <div class="clear"></div>
        </div>
        <div class="group-3col">
            <div class="vieclamhot-t-ntv"></div>
            <div class="vieclamhot-c-ntv">
                <?php
                $i = 1;
                foreach ($tuyendung_detail as $job) {
                    if ($i % 2 == 1) {
                        ?>

                    <?php } ?>
                    <div class="col3">
                        <div class="vieclamItem">
                            <div class="ten-chinh"><a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $job['e_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job['e_title']))) ?>" title="<?php echo $job['e_title'] ?>" style="font-weight:bold;"><?php echo $job['e_title'] ?></a></div>
                            <div class="ten-phu"><a href="#" title="<?php echo $job['u_companyName'] ?>"><?php echo $job['u_companyName'] ?></a></div>
                            <div></div>
                        </div>
                    </div>
                    <?php
                    if ($i % 2 == 0) {
                        ?>

                    <?php } ?>
                    <?php
                    $i++;
                }
                ?>
                <div class="clear"></div>
                <div class="chiTiet"><a href="/viec-lam-hot-l75c0.html" title="Xem danh sách việc làm HOT">Xem danh sách chi tiết</a></div>
            </div>
            <div class="vieclamhot-b-ntv"></div>
        </div>
        <a name="a_ntv_viec_lam_theo_nganh_nghe"></a>
        <div style="background:#fff;" id="div_ntv_viec_lam_theo_nganh_nghe">
            <input type="hidden" name="tongtin" id="tongtin" value="20">
            <div id="message"></div>
            <div class="barSub"><h3>Việc làm ngành Kế toán-Kiểm toán</h3><div class="barSub-dt-hotro" style="left: 490px;">ĐT hỗ trợ: 1900 585 808 PHÍM 8</div></div>
            <div class="group-3col">
                <form name="frm_viec_lam_nhieu_nguoi_xem" method="post" action="">
                    <input type="hidden" name="dang_luu_tin" id="dang_luu_tin" value="">
                    <input type="hidden" name="tong_tin" id="tong_tin" value="20">
                    <input type="hidden" name="checkedvalues" id="checkedvalues" value="0">
                    <input type="hidden" name="mo_ta_list" id="mo_ta_list" value="">
                    <input type="hidden" name="nganh_list" id="nganh_list" value="">
                    <input type="hidden" name="tieu_de_list" id="tieu_de_list" value="">
                    <input type="hidden" name="tai_khoan_list" id="tai_khoan_list" value="">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="padLeft10 marBot7">
                                        <a class="luuTin" title="" href="javascript:ntv_luu_tin();">Lưu tin</a>
                                        <a class="guiBanBe" title="" href="javascript:gui_mail_ban_be();">Gửi cho bạn bè</a>
                                        <a class="toCao" title="" href="javascript:ntv_to_cao();">Tố cáo</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="pageList"><u class="pageFirst">Đầu</u> <u>1</u> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=2">2</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=3">3</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=4">4</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=5">5</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=10"><u class="pageLast" style="color:#F20000;">Cuối</u></a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody><tr>
                                <td width="10" class="tb-header"><input type="checkbox" onclick="javascript:check_all(this, 20, & quot; chk_item & quot; )" id="checkall"></td>
                                <td width="140" class="tb-header">Tên việc làm</td>
                                <td width="100" class="tb-header">Tên công ty</td>
                                <td width="70" class="tb-header">Nơi làm việc</td>
                                <td width="70" class="tb-header">Mức lương</td>
                                <td width="60" class="tb-header">Ngày làm mới</td>
                                <td width="60" class="tb-header">Hạn nộp HS</td>
                            </tr>
                            <tr>
                                <td align="center" class="tb-row-W"><input type="checkbox" id="chk_item0" value="1388326" name="chk_item[]"></td>
                                <td class="tb-row-W"><b><a href="/ke-toan-kiem-toan/ke-toan-kho-c30p1id1388326.html" onmouseover="tooltip.show('&lt;table width=220 cellpadding=1 cellspacing=1 border=0 bgcolor=#d7d7d7&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldBlue14&gt;Kế toán kho&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Công ty: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;VPS Applied Science Co. ltd&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Số lượng: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;1&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldRed14&gt;Mô tả công việc: &lt;/span&gt;&lt;br/&gt;&lt;div class=textBoldBlack14 style=&quot;padding-left:15px;padding-top:5px;&quot;&gt;-         Lập chứng từ nhập xuất, chi phí mua hàng, hoá đơn bán hàng và kê khai thuế đầu vào đầu ra.&lt;br/&gt;-         Hạch toán doanh thu, giá vốn, công nợ.&lt;br/&gt;-         Theo dõi công nợ, lập biên bản xác minh công nợ theo định kỳ &amp;#40;hoăc khi có...&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;');" onmouseout="tooltip.hide();" title="Kế toán kho" class="linkBlack">Kế toán kho</a><span class="txtNew">(Mới)</span></b><br><i class="text11soluong">(4569 lượt xem)</i></td>
                                <td class="tb-row-W"><a class="linkBlack" style="color: #000000; text-align:center;" title="VPS Applied Science Co. ltd" href="/danh-sach-cac-tin-tuyen-dung-vps-applied-science-co-ltd-ntd1769576p1.html">VPS Applied Science Co. ltd</a></td>
                                <td class="tb-row-W" title="Hưng Yên" style="color: #000000; text-align:center;">Hưng Yên</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">Thỏa thuận</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">17-12</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">30-12						<input type="hidden" id="mo_ta0" value="-         Lập chứng từ nhập xuất, chi phí mua hàng, hoá đơn bán hàng và kê khai thuế đầu vào đầu ra.
                                                                                                                  -...">
                                    <input type="hidden" id="tieu_de0" value="Kế toán kho">
                                    <input type="hidden" id="nganh_cap_10" value="30">
                                    <input type="hidden" id="tai_khoan0" value="1769576">
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="tb-row-W"><input type="checkbox" id="chk_item1" value="1409243" name="chk_item[]"></td>
                                <td class="tb-row-W"><b><a href="/ke-toan-kiem-toan/ke-toan-tong-hop-c30p1id1409243.html" onmouseover="tooltip.show('&lt;table width=220 cellpadding=1 cellspacing=1 border=0 bgcolor=#d7d7d7&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldBlue14&gt;Kế toán tổng hợp&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Công ty: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Công ty Cổ phần Thanh toán Điện tử VNPT&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Số lượng: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;1&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldRed14&gt;Mô tả công việc: &lt;/span&gt;&lt;br/&gt;&lt;div class=textBoldBlack14 style=&quot;padding-left:15px;padding-top:5px;&quot;&gt;O	Kiểm soát, hạch toán số liệu về toàn bộ Doanh thu hàng hóa dịch vụ của công ty.&lt;br/&gt;o	Kiểm soát, hạch toán số liệu công nợ phải thu của công ty chính xác,đúng đối tượng, đáp ứng đúng yêu cầu công việc.&lt;br/&gt;o	Phụ trách, chịu trách...&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;');" onmouseout="tooltip.hide();" title="Kế toán tổng hợp" class="linkBlack">Kế toán tổng hợp</a><span class="txtNew">(Mới)</span></b><br><i class="text11soluong">(1177 lượt xem)</i></td>
                                <td class="tb-row-W"><a class="linkBlack" style="color: #000000; text-align:center;" title="Công ty Cổ phần Thanh toán Điện tử VNPT" href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-thanh-toan-dien-tu-vnpt-ntd2338365p1.html">Công ty Cổ phần Thanh toán Điện tử VNPT</a></td>
                                <td class="tb-row-W" title="Hà Nội" style="color: #000000; text-align:center;">Hà Nội</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">Thỏa thuận</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">17-12</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">20-12						<input type="hidden" id="mo_ta1" value="O	Kiểm soát, hạch toán số liệu về toàn bộ Doanh thu hàng hóa dịch vụ của công ty.
                                                                                                                  o	Kiểm soát, hạch toán...">
                                    <input type="hidden" id="tieu_de1" value="Kế toán tổng hợp">
                                    <input type="hidden" id="nganh_cap_11" value="30">
                                    <input type="hidden" id="tai_khoan1" value="2338365">
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="tb-row-W"><input type="checkbox" id="chk_item18" value="1414022" name="chk_item[]"></td>
                                <td class="tb-row-W"><b><a href="/ke-toan-kiem-toan/ke-toan-kho-c30p1id1414022.html" onmouseover="tooltip.show('&lt;table width=220 cellpadding=1 cellspacing=1 border=0 bgcolor=#d7d7d7&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldBlue14&gt;Kế toán kho&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Công ty: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Nhà hàng Hàm Cá mập - Hà Nội&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Số lượng: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;1&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldRed14&gt;Mô tả công việc: &lt;/span&gt;&lt;br/&gt;&lt;div class=textBoldBlack14 style=&quot;padding-left:15px;padding-top:5px;&quot;&gt;Theo dõi quá trình Nhập - Xuất - Tồn hàng hóa trong kho.&lt;br/&gt;Mở thẻ kho theo dõi.&lt;br/&gt;Sử dụng nhập, xuất, hủy trên phầm mềm.&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;');" onmouseout="tooltip.hide();" title="Kế toán kho" class="linkBlack">Kế toán kho</a><span class="txtNew">(Mới)</span></b><br><i class="text11soluong">(36 lượt xem)</i></td>
                                <td class="tb-row-W"><a class="linkBlack" style="color: #000000; text-align:center;" title="Nhà hàng Hàm Cá mập - Hà Nội" href="/danh-sach-cac-tin-tuyen-dung-nha-hang-ham-ca-map-ha-noi-ntd2357282p1.html">Nhà hàng Hàm Cá mập - Hà Nội</a></td>
                                <td class="tb-row-W" title="Hà Nội" style="color: #000000; text-align:center;">Hà Nội</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">Thỏa thuận</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">17-12</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">03-03						<input type="hidden" id="mo_ta18" value="Theo dõi quá trình Nhập - Xuất - Tồn hàng hóa trong kho.
                                                                                                                  Mở thẻ kho theo dõi.
                                                                                                                  Sử dụng nhập, xuất, hủy trên...">
                                    <input type="hidden" id="tieu_de18" value="Kế toán kho">
                                    <input type="hidden" id="nganh_cap_118" value="30">
                                    <input type="hidden" id="tai_khoan18" value="2357282">
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="tb-row-W"><input type="checkbox" id="chk_item19" value="1414685" name="chk_item[]"></td>
                                <td class="tb-row-W"><b><a href="/ke-toan-kiem-toan/ke-toan-truong-c30p1id1414685.html" onmouseover="tooltip.show('&lt;table width=220 cellpadding=1 cellspacing=1 border=0 bgcolor=#d7d7d7&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldBlue14&gt;Kế Toán Trưởng&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Công ty: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Công ty TNHH Khánh Xương&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Số lượng: &lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;1&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldRed14&gt;Mô tả công việc: &lt;/span&gt;&lt;br/&gt;&lt;div class=textBoldBlack14 style=&quot;padding-left:15px;padding-top:5px;&quot;&gt;-	Tổ chức bộ máy kế toán, phân công nhiệm vụ kế toán cho từng kế toán viên.&lt;br/&gt;-	Hướng dẫn, kiểm tra, giám sát công việc của kế toán viên thực hiện theo đúng quy định Pháp Luật của Nhà nước.&lt;br/&gt;-	Hàng tháng vào ngày 5 tây gửi báo...&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;');" onmouseout="tooltip.hide();" title="Kế Toán Trưởng" class="linkBlack">Kế Toán Trưởng</a><span class="txtNew">(Mới)</span></b><br><i class="text11soluong">(0 lượt xem)</i></td>
                                <td class="tb-row-W"><a class="linkBlack" style="color: #000000; text-align:center;" title="Công ty TNHH Khánh Xương" href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-khanh-xuong-ntd2392879p1.html">Công ty TNHH Khánh Xương</a></td>
                                <td class="tb-row-W" title="Long An" style="color: #000000; text-align:center;">Long An</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">10 – 15 triệu</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">17-12</td>
                                <td class="tb-row-W" style="color: #000000; text-align:center;">31-01						<input type="hidden" id="mo_ta19" value="-	Tổ chức bộ máy kế toán, phân công nhiệm vụ kế toán cho từng kế toán viên.
                                                                                                                  -	Hướng dẫn, kiểm tra,...">
                                    <input type="hidden" id="tieu_de19" value="Kế Toán Trưởng">
                                    <input type="hidden" id="nganh_cap_119" value="30">
                                    <input type="hidden" id="tai_khoan19" value="2392879">
                                </td>
                            </tr>
                        </tbody></table>
                    <iframe name="fr_submit" id="fr_submit" width="0" height="0" style="visibility:hidden"></iframe>
                </form>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <div class="padLeft10 marBot7">
                                    <a class="luuTin" title="" href="javascript:ntv_luu_tin();">Lưu tin</a>
                                    <a class="guiBanBe" title="" href="javascript:gui_mail_ban_be();">Gửi cho bạn bè</a>
                                    <a class="toCao" title="" href="javascript:ntv_to_cao();">Tố cáo</a>
                                </div>
                            </td>
                            <td>
                                <div class="pageList"><u class="pageFirst">Đầu</u> <u>1</u> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=2">2</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=3">3</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=4">4</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=5">5</a> &nbsp;<a href="/ke-toan-kiem-toan-c30.html?hdn_tu_khoa=&amp;hdn_nganh_nghe_cap1=30&amp;hdn_dia_diem=-1&amp;hdn_muc_luong=-1&amp;hdn_cap_bac=-1&amp;hdn_bang_cap=-1&amp;hdn_kinh_nghiem=-1&amp;hdn_tong=200&amp;number_items=20&amp;page=10"><u class="pageLast" style="color:#F20000;">Cuối</u></a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="colRight">
        <div class="camNangNTV" style="max-width:300px;">
            <div class="camNangNTV-t">
                <a style="color: #FFFFFF;font-size: 16px;font-weight: bold;" href="http://www.24h.com.vn/cam-nang-tim-viec-c545.html" title="CẨM NANG NGƯỜI TÌM VIỆC" target="_blank">CẨM NANG TÌM VIỆC</a>
            </div>
            <div class="camNang-content">
                <div id="div_cam_nang_tim_viec_0" style="display: none;">					<div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Thanh-cong--uoc-mo--Tu-tin-c545a594246.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-12-09/1386562421-thanh-cong.jpg" alt="Thành công = Ước mơ + Tự tin" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Thanh-cong--uoc-mo--Tu-tin-c545a594246.html" target="_blank" title="Thành công = Ước mơ + Tự tin" class="camNang-title">Thành công = Ước mơ + Tự tin</a>
                                        <span title="Bạn có một ước mơ và bạn tự tin đi đến ước mơ đó? Bạn nhất định sẽ thành công!">Bạn có một ước mơ và bạn tự tin đi đến ước mơ đó?...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Test--Hinh-thuc-phong-van-pho-bien-c545a592315.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-12-02/1385979565-bai-test.jpg" alt="Test – Hình thức phỏng vấn phổ biến" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Test--Hinh-thuc-phong-van-pho-bien-c545a592315.html" target="_blank" title="Test – Hình thức phỏng vấn phổ biến" class="camNang-title">Test – Hình thức phỏng vấn phổ biến</a>
                                        <span title="Nhiều người cho rằng những phần test thường giống như một kỳ thi, nên tỏ ra hoang mang, lúng túng.">Nhiều người cho rằng những phần test thường giống như...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Ghi-diem-khi-khoi-dau-cong-viec-moi-c545a590348.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-11-25/1385345457-ghi-diem.jpg" alt="" ghi="" điểm"="" khi="" khởi="" đầu="" công="" việc="" mới"="" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Ghi-diem-khi-khoi-dau-cong-viec-moi-c545a590348.html" target="_blank" title="" ghi="" điểm"="" khi="" khởi="" đầu="" công="" việc="" mới"="" class="camNang-title">"Ghi điểm" khi khởi đầu công việc mới</a>
                                        <span title="Vạn sự khởi đầu nan. Lúc bắt đầu công việc mới, chắc hẳn bạn sẽ gặp nhiều khó khăn. Hãy ghi nhớ và thực hiện những điều sau để giúp bạn nhanh chóng thích nghi và đạt hiệu quả trong môi trường mới.">Vạn sự khởi đầu nan. Lúc bắt đầu công việc mới, chắc...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="page">
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(0, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page-active.gif" alt="" width="14" height="14">
                        </a>
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(1, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page.gif" alt="" width="14" height="14">
                        </a>
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(2, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page.gif" alt="" width="14" height="14">
                        </a>
                    </div>
                </div>
                <div id="div_cam_nang_tim_viec_1" style="">					<div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Dau-hieu-nguoi-phong-van-khong-thich-ban-c545a588629.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-11-18/1384742656-nha-tuyen-dung.jpg" alt="Dấu hiệu người phỏng vấn không thích bạn" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Dau-hieu-nguoi-phong-van-khong-thich-ban-c545a588629.html" target="_blank" title="Dấu hiệu người phỏng vấn không thích bạn" class="camNang-title">Dấu hiệu người phỏng vấn không thích bạn</a>
                                        <span title="Dưới đây là 10 dấu hiệu cho thấy người phỏng vấn không có thiện cảm tốt với bạn.">Dưới đây là 10 dấu hiệu cho thấy người phỏng vấn không...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/8-con-ac-mong-khi-ban-tim-viec-c545a586775.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-11-11/1384135389-tim-viec.jpg" alt="8 “cơn ác mộng” khi bạn tìm việc" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/8-con-ac-mong-khi-ban-tim-viec-c545a586775.html" target="_blank" title="8 “cơn ác mộng” khi bạn tìm việc" class="camNang-title">8 “cơn ác mộng” khi bạn tìm việc</a>
                                        <span title="Bạn có cảm giác thật tồi tệ khi rơi vào cảnh thất nghiệp hoặc phải làm một công việc mà bạn không hề có hứng thú. Tuy nhiên, khi đi tìm một công việc mới, bạn rất có thể gặp phải những điều còn tồi tệ hơn.">Bạn có cảm giác thật tồi tệ khi rơi vào cảnh thất nghiệp...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/5-cau-noi-khien-ban-bi-loai-khi-phong-van-c545a584918.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-11-04/1383530427-phong-van.jpg" alt="5 câu nói khiến bạn bị loại khi phỏng vấn" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/5-cau-noi-khien-ban-bi-loai-khi-phong-van-c545a584918.html" target="_blank" title="5 câu nói khiến bạn bị loại khi phỏng vấn" class="camNang-title">5 câu nói khiến bạn bị loại khi phỏng vấn</a>
                                        <span title="“Tôi không thể chịu đựng nổi vị sếp hiện tại”, “Các ông sẽ trả tôi bao nhiêu?”, “Tôi không biết nhiều lắm về công ty”…">“Tôi không thể chịu đựng nổi vị sếp hiện tại”, “Các...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="page">
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(0, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page.gif" alt="" width="14" height="14">
                        </a>
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(1, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page-active.gif" alt="" width="14" height="14">
                        </a>
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(2, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page.gif" alt="" width="14" height="14">
                        </a>
                    </div>
                </div>
                <div id="div_cam_nang_tim_viec_2" style="display: none;">					<div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Loi-khuyen-cho-nhan-vien-co-hinh-xam-c545a583238.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-10-28/1382931078-nhan-vien-co-hinh-xam.jpg" alt="Lời khuyên cho nhân viên có hình xăm" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Loi-khuyen-cho-nhan-vien-co-hinh-xam-c545a583238.html" target="_blank" title="Lời khuyên cho nhân viên có hình xăm" class="camNang-title">Lời khuyên cho nhân viên có hình xăm</a>
                                        <span title="Xăm hình trên cơ thể đã trở thành mốt và nhiều người trẻ không ngần ngại sở hữu một hình xăm ấn tượng. Tuy nhiên, việc có hình xăm có thể gây ra những ảnh hưởng bất lợi cho bạn khi bạn đi làm.">Xăm hình trên cơ thể đã trở thành mốt và nhiều người...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Nghe-thuat-ung-xu-khi-mac-loi-o-cong-so-c545a581446.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-10-21/1382338391-sai-lam.jpg" alt="Nghệ thuật ứng xử khi mắc lỗi ở công sở" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/Nghe-thuat-ung-xu-khi-mac-loi-o-cong-so-c545a581446.html" target="_blank" title="Nghệ thuật ứng xử khi mắc lỗi ở công sở" class="camNang-title">Nghệ thuật ứng xử khi mắc lỗi ở công sở</a>
                                        <span title="Khi mắc sai lầm trong công việc, bạn nên làm gì để xử lý tình huống một cách hoàn hảo nhất có thể?">Khi mắc sai lầm trong công việc, bạn nên làm gì để xử...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="camNangItem">
                        <table>
                            <tbody><tr>
                                    <td style="width:80px;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/-c545a579579.html" target="_blank">
                                            <img class="camNang-cnt-img" src="http://img-hn.24hstatic.com:8008//upload/4-2013/images/2013-10-14/1381715449-phong-van.jpg" alt="10 tín hiệu cho thấy một cuộc phỏng vấn thất bại" height="80" width="80">
                                        </a>
                                    </td>
                                    <td style="vertical-align:text-top;">
                                        <a href="http://www.24h.com.vn/cam-nang-tim-viec/-c545a579579.html" target="_blank" title="10 tín hiệu cho thấy một cuộc phỏng vấn thất bại" class="camNang-title">10 tín hiệu cho thấy một cuộc phỏng vấn thất bại</a>
                                        <span title="Trong các cuộc phỏng vấn xin việc, bạn luôn muốn người phỏng vấn đưa ra ngay những phản hồi trực tiếp về phần trả lời của bạn, nhưng điều này thường không xảy ra.">Trong các cuộc phỏng vấn xin việc, bạn luôn muốn người...</span>
                                    </td><td>
                                    </td></tr>
                            </tbody></table>
                        <div class="clear"></div>
                    </div>
                    <div class="page">
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(0, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page.gif" alt="" width="14" height="14">
                        </a>
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(1, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page.gif" alt="" width="14" height="14">
                        </a>
                        <a href="javascript: cam_nang_tim_viec_nhay_trang(2, 'div_cam_nang_tim_viec_', 3)" style="text-decoration:none;">
                            <img src="<?php echo base_url() ?>template/home/images/icon-page-active.gif" alt="" width="14" height="14">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var div_cam_nang_tim_viec_trang_hien_tai = 0;
            setInterval('cam_nang_tim_viec_nhay_trang(div_cam_nang_tim_viec_trang_hien_tai + 1, "div_cam_nang_tim_viec_", 3)', 20000);</script>
        <div class="rightBox">
            <div class="searchBoxTitle" title="Bạn Hãy bấm vào các tiêu thức lọc tìm bên dưới hoặc bấm vào các nút xem thêm để mở ra nhiều lựa chọn hơn!">TÌM KIẾM
            </div>
            <div class="searchBox-DK">
                <form action="/vieclam/timkiem" enctype="multipart/form-data" id="JobSearchJobFormForm" method="get" accept-charset="utf-8">            <table class="TableSearchForm">
                        <tbody><tr>
                                <th>Ngành nghề</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="jobfield" class="W245" id="JobJobfield">
                                        <option value="">Bất kỳ</option>
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
                                    </select>                    </td>
                            </tr>
                            <tr>
                                <th>Tỉnh/Thành phố</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="jobplace" class="W245" id="JobJobplace">
                                        <option value="">Bất kỳ</option>
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
                                    </select>                    </td>
                            </tr>
                            <tr>
                                <th>Trình độ</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="joblevel" class="W245" id="JobJoblevel">
                                        <option value="">Bất kỳ</option>
                                        <option value="1">Lao động phổ thông</option>
                                        <option value="2">Chứng chỉ</option>
                                        <option value="3">Trung học</option>
                                        <option value="4">Trung cấp</option>
                                        <option value="5">Cao đẳng</option>
                                        <option value="6">Đại học</option>
                                        <option value="7">Cao học</option>
                                        <option value="8">Không khai báo</option>
                                    </select>                    </td>
                            </tr>
                            <tr>
                                <th>Kinh nghiệm</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="jobexperience" class="W245" id="JobJobexperience">
                                        <option value="">Bất kỳ</option>
                                        <option value="0">Chưa có kinh nghiệm</option>
                                        <option value="1">1 năm</option>
                                        <option value="2">2 năm</option>
                                        <option value="3">3 năm</option>
                                        <option value="4">4 năm</option>
                                        <option value="5">5 năm</option>
                                        <option value="6">Trên 5 năm</option>
                                    </select>                    </td>
                            </tr>
                            <tr>
                                <th>Hình thức làm việc</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="jobtimework" class="W245" id="JobJobtimework">
                                        <option value="">Bất kỳ</option>
                                        <option value="1">Nhân viên chính thức</option>
                                        <option value="2">Nhân viên thời vụ</option>
                                        <option value="3">Bán thời gian</option>
                                        <option value="4">Làm thêm ngoài giờ</option>
                                        <option value="5">Thực tập và dự án</option>
                                    </select>                    </td>
                            </tr>
                            <tr>
                                <th>Mức lương</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="VND" class="W80" id="JobVND">
                                        <option value="">Bất kỳ</option>
                                        <option value="Y">VND</option>
                                        <option value="N">USD</option>
                                    </select>                            <select name="jobsalary_vnd" id="job-salary-vnd" class="W120" disabled="disabled">
                                        <option value="">Bất kỳ</option>
                                        <option value="1">1-2 triệu</option>
                                        <option value="2">2-3 triệu</option>
                                        <option value="3">3-4 triệu</option>
                                        <option value="4">4-5 triệu</option>
                                        <option value="5">5-8 triệu</option>
                                        <option value="6">8-15 triệu</option>
                                        <option value="8">15-30 triệu</option>
                                        <option value="9">Trên 30 triệu</option>
                                        <option value="7">Thỏa thuận</option>
                                    </select>                            <select name="jobsalary_usd" id="job-salary-usd" class="W120" style="display: none;" disabled="disabled">
                                        <option value="">Bất kỳ</option>
                                        <option value="1">100-150 USD</option>
                                        <option value="2">150-200 USD</option>
                                        <option value="3">200-250 USD</option>
                                        <option value="4">250-300 USD</option>
                                        <option value="5">300-400 USD</option>
                                        <option value="6">400-750 USD</option>
                                        <option value="8">750-1500 USD</option>
                                        <option value="9">Trên 1500 USD</option>
                                        <option value="7">Thỏa thuận</option>
                                    </select>                                            </td>
                            </tr>
                            <tr>
                                <th>
                                    <button type="submit" onclick="javascript:return submitSearch();">
                                        <span style="padding: 3px 8px 3px 8px; font-size: 13px;">Tìm kiếm</span>
                                    </button>
                                </th>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>
        <div class="boxFacebook">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FNhuCauViecLam&amp;width=285&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:285px; height:290px;" allowTransparency="true"></iframe>
            <div class="clear"></div>
            <div class="FB-line"></div>
        </div>
        <script type="text/javascript">
            (function() {
                var po = document.createElement('script');
                po.type = 'text/javascript';
                po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(po, s);
            })();
        </script>
    </div>
    <div class="clear"></div>
</div>
