<div class="content-info" style="background: none repeat scroll 0 0 #FFFFFF;">
    <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
    <div name="div_thong_tin_ntv" id="div_thong_tin_ntv">
        <div class="colLeft">
            <div class="navBar">
                <div class="navBarLeft" style="width:400px;">
                    <span class="navBarTxt24-1">Thông tin Người tìm việc</span>
                </div>
                <div class="navBarRight">
                    <a href="/dang-ho-so-tinh-phi.html" title="" class="dangTinVip">Tìm việc hiệu quả</a>
                </div>
                <div class="clear"></div>
            </div>            
            <div class="tbInfo-header br-L br-R">
                Thông tin đăng nhập
            </div>
            <div class="padTop10 padBot10 br-L br-R br-B">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td width="150" valign="top" class="tbUser-row"><b>Email đăng nhập:</b></td>
                            <td class="tbUser-row"><?php echo $info_list[0]['u_username']; ?>
                                <br>
                                <a href="/trang-doi-mat-khau.html" title="">[Đổi mật khẩu]</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form name="form_cap_nhat_thong_tin_ntv" id="form_cap_nhat_thong_tin_ntv" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_cap_nhat_thong_tin_ntv" width="0" height="0" style="visibility:hidden"></iframe>
                <div class="tbInfo-header br-L br-R">
                    Thông tin cá nhân
                </div>
                <div class="padBot10 br-L br-R br-B ">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="140" class="tbUser-row" valign="top" style="padding-top:20px">
                                    <div id="div_anh_dai_dien">
                                        <img src="<?php echo base_url(); ?>template/home/images/user-img.jpg" alt="" width="130" height="160" class="userImg">
                                    </div>
                                    <div class="padTop10">
                                        <a name="href-anh_dai_dien"></a>
                                        <input type="image" src="<?php echo base_url(); ?>template/home/images/btnUpAnh.gif" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                    ntv_quan_tri_show_box_popup_doi_anh_dai_dien();
                                                    dat_trang_thai_xu_ly_xong();
                                                    return false;
                                                }">
                                    </div><div id="div_xoa_anh_dai_dien"></div></td>
                                <td valign="top" class="padTop10">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="125" valign="top" class="tbUser-row"><b>Họ và tên (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><a name="href-ho_ten"></a>
                                                    <input type="text" class="textbox" name="txt_ho_ten" id="txt_ho_ten" style="width:210px" value="<?php echo $info_list[0]['u_fullname']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                                return(false);
                                                            }">
                                                    <div id="err_ho_ten" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-row"><b>Ngày sinh (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><a name="href-ngay_sinh"></a>
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td width="130">
                                                                
                                                                    <input class="dateline" type="text" style="width:110px" name="c_ngay_co_the_bat_dau_lam" value="<?php echo date('d/m/Y',$info_list[0]['u_birthday']); ?>">
                                                                </td>
                                                                <td width="30">
                                                                    <input type="image" src="<?php echo base_url(); ?>template/home/images/iconCalendar.gif" >
                                                                </td>
                                                                <td>(dd/mm/yyyy)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table><div id="err_ngay_sinh" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                                <td class="tbUser-row">
                                                 <?php 
                                                
                                                foreach($sex as $sex_)
                                                {
                                                    if($info_list[0]['u_sex']==$sex_['sex_id'])
                                                    {
                                                    ?>
                                                    <input type="radio" name="gioi_tinh"  value="<?php echo $sex_['sex_id']?>" checked="">
                                                    &nbsp; <?php echo $sex_['sex_name']?>
                                                    
                                                <?php } else { ?> <input type="radio" name="gioi_tinh" id="gioi_tinh_<?php echo mb_strtolower(url_title(removesign($sex_['sex_name'])))?>" value="<?php echo $sex_['sex_id']?>">
                                                    &nbsp; <?php echo $sex_['sex_name']?><?php }} ?>
                                               
                                                </div></td>
                                               
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
                                                <td width="120" valign="top" class="tbUser-row"><b>Địa chỉ (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><a name="href-dia_chi"></a>
                                                    <input type="text" class="textbox" name="txt_dia_chi" id="txt_dia_chi" style="width:210px" value="<?php echo $info_list[0]['u_adress']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                                return(false);
                                                            }">
                                                    <div id="err_dia_chi" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-row"><b>Tỉnh/ thành phố (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><a name="href-tinh"></a>
                                                    <select class="dropbox" name="select_tinh" id="select_tinh">
                                                        <option value="-1">-- Chọn tỉnh --</option>
                                                        <option value="2" selected="">Hà Nội</option><option value="1">TP. HCM</option><option value="23">Đà Nẵng</option><option value="9">Bình Dương</option><option value="21">Cần Thơ</option><option value="22">Hải Phòng</option><option value="53">Bà Rịa - Vũng Tàu</option><option value="91">Bắc Giang</option><option value="92">Bắc Kạn</option><option value="94">Thừa Thiên Huế</option><option value="32">Bắc Ninh</option><option value="90">Bến Tre</option><option value="93">Bạc Liêu</option><option value="89">Bình Định</option><option value="88">Bình Phước</option><option value="87">Bình Thuận</option><option value="86">Cà Mau</option><option value="85">Cao Bằng</option><option value="84">Cửu Long</option><option value="83">Đắc Lắc</option><option value="52">An Giang</option><option value="82">Đắc Nông</option><option value="81">Điện Biên</option><option value="19">Đồng Nai</option><option value="80">Đồng Tháp</option><option value="79">Gia Lai</option><option value="78">Hà Giang</option><option value="77">Hà Nam</option><option value="76">Hà Tĩnh</option><option value="27">Hải Dương</option><option value="75">Hậu Giang</option><option value="74">Hòa Bình</option><option value="26">Hưng Yên</option><option value="73">Khánh Hòa</option><option value="72">Kiên Giang</option><option value="71">Kon Tum</option><option value="70">Lai Châu</option><option value="69">Lạng Sơn</option><option value="68">Lào Cai</option><option value="67">Lâm Đồng</option><option value="66">Long An</option><option value="65">Nam Định</option><option value="64">Nghệ An</option><option value="63">Ninh Bình</option><option value="62">Ninh Thuận</option><option value="61">Phú Thọ</option><option value="60">Phú Yên</option><option value="59">Quảng Bình</option><option value="58">Quảng Nam</option><option value="30">Quảng Ngãi</option><option value="57">Quảng Ninh</option><option value="56">Quảng Trị</option><option value="55">Sóc Trăng</option><option value="54">Sơn La</option><option value="51">Tây Ninh</option><option value="50">Thái Bình</option><option value="49">Thái Nguyên</option><option value="48">Thanh Hóa</option><option value="47">Tiền Giang</option><option value="46">Trà Vinh</option><option value="45">Tuyên Quang</option><option value="44">Vĩnh Long</option><option value="43">Vĩnh Phúc</option><option value="42">Yên Bái</option><option value="95">Toàn quốc</option><option value="96">Miền Bắc</option><option value="98">Miền Nam</option><option value="97">Miền Trung</option>
                                                    </select><div id="err_tinh" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td width="120" valign="top" class="tbUser-row"><b>Số điện thoại:</b></td>
                                                <td class="tbUser-row"><a name="href-so_dien_thoai"></a>
                                                    <input type="text" class="textbox" name="txt_dien_thoai_lien_he" id="txt_dien_thoai_lien_he" style="width:210px" value="<?php echo $info_list[0]['u_mobi']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                                return(false);
                                                            }">
                                                    <div id="err_so_dien_thoai" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td width="120" valign="top" class="tbUser-row"><b>Email (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><a name="href-email_lien_he"></a>
                                                    <input type="text" class="textbox" name="txt_email_lien_he" id="txt_email_lien_he" style="width:210px" value="<?php echo $info_list[0]['u_email']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                                return(false);
                                                            }">
                                                    <div id="err_email_lien_he" class="textRed11"></div></td>
                                            </tr>    
                                            <tr>
                                                <td></td>
                                                <td height="60" class="tbUser-row">
                                                    <input type="submit" class="button" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                                ntv_quan_tri_cap_nhat_thong_tin_tai_khoan();
                                                            }">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <br>
            <br>
            <div id="thong_tin_cu" style="display:none">
                <hr style="height:1px; color:#7214AE; background:#7214AE;">
                <br>
                <span style="color:blue;font-size:14px;">Thông tin đã được duyệt:</span>
                <br>
                <br>
                <div class="tbInfo-header br-L br-R">
                    Thông tin cá nhân
                </div>
                <div class="padBot10 br-L br-R br-B ">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="140" class="tbUser-row" valign="top" style="padding-top:20px"></td>
                                <td valign="top" class="padTop10">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="125" valign="top" class="tbUser-row"><b>Họ và tên (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_fullname']; ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-row"><b>Ngày sinh (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_birthday']; ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_sex']; ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-row"><b>Tình trạng hôn nhân:</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_marry']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="120" valign="top" class="tbUser-row"><b>Địa chỉ (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_adress']; ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-row"><b>Tỉnh/ thành phố (<span class="textRed">*</span>):</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_cityID']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="120" valign="top" class="tbUser-row"><b>Số điện thoại:</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_mobi']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="120" valign="top" class="tbUser-row"><b>Email:</b></td>
                                                <td class="tbUser-row"><?php echo $info_list[0]['u_email']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="colRight">        
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
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
        </script>
    </div>
    <div class="clear"></div>
</div>