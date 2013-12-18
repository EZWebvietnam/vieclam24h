<div name="div_ntv_quan_tri_cap_nhat_tin_tim_viec" id="div_ntv_quan_tri_cap_nhat_tin_tim_viec">
    <div class="colLeft-QT">
        <form name="form_cap_nhat_tin_tv" id="form_cap_nhat_tin_tv" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_cap_nhat_tin_tv" width="0" height="0" style="visibility:hidden"></iframe>
            <input type="hidden" name="id_tin_tv" id="id_tin_tv" value="-1">
            <input type="hidden" name="id_tin_goc" id="id_tin_goc" value="-1">
            <div class="tbInfo-header">
                Công việc mong muốn
            </div>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                    <tr>
                        <td rowspan="50" width="10" class="br-L"></td>
                        <td valign="top" width="160" class="tbUser-row"><b>Vị trí mong muốn: (<span class="textRed">*</span>)</b></td>
                        <td class="tbUser-row"><a name="href-tieu_de"></a>
                            <input type="text" class="textbox" name="tieu_de" id="tieu_de" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                        return(false);
                                    }">
                            <div id="err_tieu_de" class="textRed11"></div></td>
                        <td rowspan="10" width="10" class="br-R"></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Cấp bậc mong muốn (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-chuc_vu"></a>
                            <select class="dropbox" name="select_box_chuc_vu" id="select_box_chuc_vu">
                                
                               <?php 
                               foreach($list_capbac as $k_cb=>$cb)
                                {
                                ?>
                                <option value="<?php echo $k_cb ?>"><?php echo $cb;?></opption>
                                <?php }?>
                                
                            </select><div id="err_chuc_vu" class="textRed11"></div></td>

                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Chọn ngành nghề: <span class="textRed">*</span></b>
                            <br>
                        <td class="tbUser-row">        
                            <select name="nganh_nghe" class="dropbox" id="nganh_nghe">
                                
                                <?php foreach($list_cate_job as $k_cate=>$cate)
                                {
                                ?>
                                <option value="<?php echo $k_cate ?>"><?php echo $cate;?></opption>
                                <?php }?>
                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Địa điểm làm việc (<span class="textRed">*</span>):</b>
                            <br>
                        <td class="tbUser-row"><a name="href-tinh"></a>
                            <select name="dia_diem" class="dropbox" id="dia_diem">
                                
                                <?php foreach($list_city as $k=>$city)
                                {
                                ?>
                                <option value="<?php echo $k ?>"><?php echo $city;?></opption>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Hình thức làm việc (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-thoi_gian"></a>
                            <select class="dropbox" name="thoi_gian_lam_viec" id="thoi_gian_lam_viec">
                                
                                <?php 
                               foreach($list_time as $k_t=>$time)
                                {
                                ?>
                                <option value="<?php echo $k_t ?>"><?php echo $time;?></opption>
                                <?php }?>
                            </select><div id="err_thoi_gian" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Mức lương mong muốn (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-muc_luong"></a>
                            <select class="dropbox" name="muc_luong" id="muc_luong">
                               
                                <?php foreach($list_luong as $k_l=>$luong)
                                {
                                ?>
                                <option value="<?php echo $k_l ?>"><?php echo $luong;?></opption>
                                <?php }?>
                            </select><div id="err_muc_luong" class="textRed11"></div></td>
                    </tr>

                    <tr>
                    <td valign="top" class="tbUser-row"><b>Mục tiêu nghề nghiệp:</b><!-- <br/><i class="text11 textRed">(tối đa 1000 ký tự)</i> --></td>
                        <td class="tbUser-row" colspan="3"><a name="href-muc_tieu_nghe_nghiep"></a>												<textarea class="textArea" style="width:500px;height:100px" name="muc_tieu_nghe_nghiep" id="muc_tieu_nghe_nghiep"></textarea><div id="err_muc_tieu_nghe_nghiep" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Hồ sơ hiển thị đến ngày (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-den_ngay"></a>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="130">
                                            <input class="dateline" type="text" style="width:110px" name="c_ngay_co_the_bat_dau_lam">
                                        </td>
                                        <td width="30">
                                            <input type="image" src="<?php echo base_url(); ?>template/home/images/iconCalendar.gif" >
                                        </td>
                                        <td>(dd/mm/yyyy)</td>
                                    </tr>
                                </tbody>
                            </table><div id="err_den_ngay" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" height="10" class="br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Thông tin cá nhân
            </div>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td rowspan="10" width="10" class="br-L"></td>
                        <td width="160" class="tbUser-row" valign="top" style="padding-top:20px"><div id="div_anh_dai_dien_da_duyet" style="display: inline;"></div>
                            <div id="div_anh_dai_dien_cho_duyet" style="display: none;">
                                <div id="div_anh_dai_dien"></div>
                                <div class="padTop10">
                                    <a name="href-anh_dai_dien"></a>
                                    <input type="image" src="<?php echo base_url() ?>template/home/images/btnUpAnh.gif">
                                </div>
                            </div></td>
                        <td valign="top" class="padTop10">
                            <div id="thong_tin_ntv_da_duyet" style="display: inline;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Họ và tên:</b></td>
                                            <td class="tbUser-row"> <?php echo $this->session->userdata('u_fullname')?> </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Ngày sinh:</b></td>
                                            <td class="tbUser-row"> <?php echo date('d/m/Y',$this->session->userdata('u_birthday'))?> </td>
                                        </tr>
                                        <tr>
                                            
                                            <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                            <td class="tbUser-row"> <?php echo $list_sex[$taohsuv_detail[0]['u_sex']]; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="right">
                                                <input type="button" class="buttonGreen" value="Sửa" onclick="ntv_quan_tri_hien_thi_sua_thong_tin_tai_khoan();
                                                        return(false);">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            <div id="thong_tin_ntv_cho_duyet" style="display: none;">
                                <div class="textRed11"></div>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Họ và tên (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-ho_ten"></a>
                                                <input type="text" class="textbox" name="txt_ho_ten" id="txt_ho_ten" style="width:210px" value="Đoàn Quang Thắng">
                                                <div id="err_ho_ten" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Ngày sinh (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-row"><a name="href-ngay_sinh"></a>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="130">
                                                                <input type="text" class="textbox" name="ngay_sinh" id="ngay_sinh" style="width:110px" readonly="" value="12-08-1981" onclick="show_box_popup_calendar(12, 08, 1981, 'ngay_sinh', '', '', '', '', '#7214AE');
                                                                        return false;">
                                                            </td>
                                                            <td width="30">
                                                                <input type="image" src="images/iconCalendar.gif" onclick="show_box_popup_calendar(12, 08, 1981, 'ngay_sinh', '', '', '', '', '#7214AE');
                                                                        return false;">
                                                            </td>
                                                            <td>(dd-mm-yyyy)</td>
                                                        </tr>
                                                    </tbody>
                                                </table><div id="err_ngay_sinh" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                            <td class="tbUser-row"><a name="href-gioi_tinh"></a>
                                                <input type="radio" name="gioi_tinh" id="gioi_tinh_nam" value="1" checked="">
                                                &nbsp; Nam&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gioi_tinh" id="gioi_tinh_nu" value="0">
                                                &nbsp; Nữ&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gioi_tinh" id="gioi_tinh_khac" value="2">
                                                &nbsp; Khác <div id="err_gioi_tinh" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Tình trạng hôn nhân:</b></td>
                                            <td class="tbUser-row"><a name="href-tinh_trang_hon_nhan"></a>
                                                <select class="dropbox" style="width:220px" name="tinh_trang_hon_nhan" id="tinh_trang_hon_nhan">
                                                    <option value="0">Độc thân</option>
                                                    <option value="1">Đã có gia đình</option>
                                                </select><div id="err_tinh_trang_hon_nhan" class="textRed11"></div></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" align="right">
                                                <input type="button" class="buttonGreen" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                            ntv_quan_tri_thay_doi_thong_tin_ntv();
                                                        }">
                                                <input type="button" class="buttonGreen" value="Hủy" onclick="ntv_quan_tri_khong_hien_thi_sua_thong_tin_tai_khoan();
                                                        return(false);">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div></td>
                        <td rowspan="10" width="10" class="br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Trình độ học vấn
            </div>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                    <tr>
                        <td rowspan="10" width="10" class="br-L"></td>
                        <td width="160" valign="top" class="tbUser-row"><b>Trình độ học vấn (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-trinh_do"></a>
                            <select class="dropbox" name="trinh_do" id="trinh_do">
                               
                                <option value="1">Trên đại học</option><option value="2">Đại học</option><option value="3">Cao đẳng</option><option value="4">Trung cấp</option><option value="5">Trung học</option><option value="6">Không yêu cầu</option>
                            </select><div id="err_trinh_do" class="textRed11"></div></td>
                        <td rowspan="10" width="50" class="br-R"></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Ngành học (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-nganh_hoc"></a>
                            <input type="text" class="textbox" name="nganh_hoc" id="nganh_hoc" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                        return(false);
                                    }">
                            <div id="err_nganh_hoc" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Tốt nghiệp năm:</b></td>
                        <td class="tbUser-row">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="110"><a name="href-nam_tot_nghiep"></a>
                                            <select class="dropbox" style="width:80px" name="select_box_nam_tot_nghiep" id="select_box_nam_tot_nghiep">
                                               
                                                <option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option>
                                            </select><div id="err_nam_tot_nghiep" class="textRed11"></div></td>
                                        <td width="100"><b>Loại tốt nghiệp:</b></td>
                                        <td><a name="href-loai_tot_nghiep"></a>
                                            <select class="dropbox" style="width:120px" name="select_box_loai_tot_nghiep" id="select_box_loai_tot_nghiep">
                                                
                                                <option value="1">Xuất sắc</option><option value="2">Giỏi</option><option value="3">Khá</option><option value="4">Trung bình khá</option><option value="5">Trung bình</option>
                                            </select><div id="err_loai_tot_nghiep" class="textRed11"></div></td>
                                    </tr>
                                </tbody>
                            </table></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Tốt nghiệp tại trường:</b>
                        </td>
                        <td class="tbUser-row" width ="510"><a name="href-c_truong"></a>
                            <textarea class="textArea" style="width:500px" name="c_truong_da_hoc" id="c_truong_da_hoc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Trình độ ngoại ngữ:</b></td>
                        <td class="tbUser-row">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="267"><a name="href-ngoai_ngu"></a>
                                            <select class="dropbox" style="width:255px" name="select_box_ngoai_ngu" id="select_box_ngoai_ngu">
                                                
                                                <option value="1">Tiếng Anh – Tiếng Đức</option><option value="2">Tiếng Anh - Tiếng Nga</option><option value="3">Tiếng Anh – Tiếng Ý</option><option value="4">Tiếng Anh – Tiếng Tây Ban Nha</option><option value="5">English - Tiếng Anh</option><option value="6">French - Tiếng Pháp</option><option value="7">United States - Tiếng Anh Mỹ</option><option value="8">Russian - Tiếng Nga</option><option value="9">Chinese - Tiếng Trung</option><option value="10">Korean - Tiếng Hàn</option><option value="11">Japanese - Tiếng Nhật</option><option value="12">German - Tiếng Đức</option><option value="13">Arabic - Tiếng Ả Rập</option><option value="14">Bengalic - Tiếng Bengal</option><option value="15">Bulgarian - Tiếng Bungary</option><option value="16">Burmese - Tiếng Miến điện</option><option value="17">Cambodian - Tiếng Campuchia</option><option value="18">Czech  - Tiếng Séc</option><option value="19">Danmark - Tiếng Đan mạch</option><option value="20">Dutch - Tiếng Hà Lan</option><option value="21">Finnish - Tiếng phần Lan</option><option value="22">Greek - Tiếng Hy Lạp</option><option value="23">Hindi - Tiếng Hinđi</option><option value="24">Hungarian - Tiếng Hungary</option><option value="25">Indonesian - Tiếng Inđônesia</option><option value="26">Italian - Tiếng Ý</option><option value="27">Laotian - Tiếng Lào</option><option value="28">Malay - Tiếng Mã Lai</option><option value="29">Norwegian - Tiếng Nauy</option><option value="30">Polish - Tiếng Ba Lan</option><option value="31">Portuguese - Tiếng Bồ Đào Nha</option><option value="32">Romanian  - Tiếng Ru ma ni</option><option value="33">Spanish - Tiếng Tây Ban Nha</option><option value="34">Taiwanese - Tiếng Đài Loan</option><option value="35">Turkish - Tiếng Thổ Nhĩ Kỳ</option><option value="36">Thai - Tiếng Thái</option><option value="37">Ukrainian - Tiếng Ucraina</option><option value="38">Khác</option>
                                            </select><div id="err_ngoai_ngu" class="textRed11"></div></td>
                                        <td><a name="href-trinh_do_ngoai_ngu"></a>
                                            <select class="dropbox" style="width:255px" name="select_box_trinh_do_ngoai_ngu" id="select_box_trinh_do_ngoai_ngu">
                                                
                                                <option value="1">Sơ cấp</option><option value="2">Trung cấp</option><option value="3">Cao cấp</option>
                                            </select><div id="err_trinh_do_ngoai_ngu" class="textRed11"></div></td>
                                    </tr>
                                </tbody>
                            </table></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Trình độ tin học:</b></td>
                        <td class="tbUser-row"><a name="href-trinh_do_tin_hoc"></a>												<textarea class="textArea" style="width:500px" name="trinh_do_tin_hoc" id="trinh_do_tin_hoc"></textarea><div id="err_trinh_do_tin_hoc" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Các bằng cấp
                                <br>
                                / chứng chỉ khác:</b></td>
                        <td class="tbUser-row"><a name="href-bang_cap_khac"></a>												<textarea class="textArea" style="width:500px" name="bang_cap_khac" id="bang_cap_khac"></textarea><div id="err_bang_cap_khac" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Kinh nghiệm làm việc
            </div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                    <tr>
                        <td rowspan="17" width="10" class="br-L"></td>
                        <td width="160" valign="top" class="tbUser-row"><b>Số năm kinh nghiệm (<span class="textRed">*</span>):</b></td>
                        <td class="tbUser-row"><a name="href-so_nam_kinh_nghiem"></a>
                            <select class="dropbox" name="so_nam_kinh_nghiem" id="so_nam_kinh_nghiem">
                                
                                <option value="8">Chưa có kinh nghiệm</option><option value="1">Dưới 1 năm</option><option value="2">1 năm</option><option value="3">2 năm</option><option value="4">3 năm</option><option value="5">4 năm</option><option value="6">5 năm</option><option value="7">Hơn 5 năm</option>
                            </select><div id="err_so_nam_kinh_nghiem" class="textRed11"></div></td>
                        <td width="50" rowspan="17" class="br-R"></td>
                    </tr>

                    <tr>
                        <td valign="top" class="tbUser-row"><b>Quá trình làm việc:</b>
                            <br>
                            <span class="text11" style="line-height:14px"> Nếu bạn chưa có kinh nghiệm làm việc, hãy đưa ra các công việc/ hoạt động bạn đã từng tham gia hoặc đảm trách và các thành tích kỹ năng đạt được </span></td>
                        <td class="tbUser-row"><a name="href-kinh_nghiem"></a>												<textarea class="textArea" style="width:500px;height:200px;line-height:20px" name="c_kinh_nghiem" id="c_kinh_nghiem">
                            </textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" height="10"></td>
                    </tr>
                    <tr>
                        <td valign="top" class="tbUser-row"><b>Kỹ năng nổi bật:</b></td>
                        <td class="tbUser-row"><a name="href-ky_nang"></a>												<textarea class="textArea" style="width:500px" name="ky_nang" id="ky_nang"></textarea><div id="err_ky_nang" class="textRed11"></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" height="10" class="br-L br-R"></td>
                    </tr>
                </tbody>
            </table>
            <div class="tbInfo-header">
                Nguồn tham khảo
            </div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td valign="top" width="350" class="tbUser-row br-L"><b>Nguồn tham khảo:</b>
                            <br>
                            <span class="text11" style="line-height:14px">Hãy nêu tên những người không phải là người thân, không phải là người đã thuê bạn làm việc? (Họ tên, địa chỉ, số điện thoại, nghề nghiệp, quan hệ, đã biết bạn mấy năm?)</span></td>
                        <td class="tbUser-row"><a name="href-nguon_tham_khao"></a>												<textarea class="textArea" style="width:500px;height:100px" name="c_nguon_tham_khao" id="c_nguon_tham_khao">
                            </textarea></td>
                        <td rowspan="15" width="100" class="br-R"></td>
                    </tr>
                </tbody>
            </table>

            <div class="tbInfo-header">
                Thông tin liên hệ
            </div>
            <div id="div_thong_tin_lien_he_da_duyet" style="display: inline;">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td colspan="4" height="10"></td>
                        </tr>
                        <tr>
                            <td rowspan="20" width="10" class="br-L"></td>
                            <td valign="top" width="115" class="tbUser-row"><b>Người liên hệ:</b></td>
                            <td class="tbUser-row"><?php echo $this->session->userdata('u_fullname')?> </td>
                            <td rowspan="10" width="25" class="br-R"></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Địa chỉ liên hệ:</b></td>
                            <td class="tbUser-row"> <?php echo $this->session->userdata('u_adress')?> </td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Email liên hệ:</b></td>
                            <td class="tbUser-row"> <?php echo $this->session->userdata('u_username')?> </td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Điện thoại liên hệ:</b></td>
                            <td class="tbUser-row"> <?php echo $this->session->userdata('u_mobi')?> </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="button" class="buttonGreen" value="Sửa" onclick="ntv_quan_tri_hien_thi_sua_thong_tin_lien_he();">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="borderBot" height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="10"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="div_thong_tin_lien_he_cho_duyet" style="display: none;">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td colspan="4" height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="4" height="10"><div class="textRed11"></div></td>
                        </tr>
                        <tr>
                            <td colspan="4" height="10"></td>
                        </tr>
                        <tr>
                            <td rowspan="20" width="45" class="br-L"></td>
                            <td valign="top" width="115" class="tbUser-row"><b>Người liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="nguoi_lien_he" id="nguoi_lien_he" value="<?php echo $this->session->userdata('u_fullname')?>">
                                <div id="err_nguoi_lien_he" class="textRed11"></div></td>
                            <td rowspan="10" width="25" class="br-R"></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Địa chỉ liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="dia_chi_nguoi_lien_he" id="dia_chi_nguoi_lien_he" value="<?php echo $this->session->userdata('u_adress')?> ">
                                <div id="err_dia_chi_nguoi_lien_he" class="textRed11"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Email liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="email_lien_he" id="email_lien_he" value="<?php echo $this->session->userdata('u_username')?>">
                                <div id="err_email_lien_he" class="textRed11"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" class="tbUser-row"><b>Điện thoại liên hệ:</b></td>
                            <td class="tbUser-row">
                                <input type="text" class="textbox" name="dien_thoai_lien_he" id="dien_thoai_lien_he" value="<?php echo $this->session->userdata('u_mobi')?>">
                                <div id="err_dien_thoai_lien_he" class="textRed11"></div></td>
                        </tr>

                        <tr>
                            <td colspan="2" align="right">
                                <input type="button" class="buttonGreen" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntv_quan_tri_thay_doi_lien_he_ntv();
                                            return(false);
                                        }">
                                <input type="button" class="buttonGreen" value="Hủy" onclick="ntv_quan_tri_khong_hien_thi_sua_thong_tin_lien_he();">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="borderBot" height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="10"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="2" height="10"></td>
                    </tr>
                    <tr>
                        <td class="tbUser-row" valign="top" colspan="2" align="center">
                            <input type="submit" class="button" value="Đăng hồ sơ tìm việc" style="width:150px;" />
                            &nbsp;&nbsp;
                            <input type="submit" class="button" value="Quay lại" >
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="br-B mar-B-20"></div>
            <div class="pad10">

            </div>
        </form>
        
        
    </div>
    <div class="clear"></div>
   
</div>