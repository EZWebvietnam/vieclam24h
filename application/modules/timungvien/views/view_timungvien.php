<div class="content" style="background: none repeat scroll 0 0 #FFFFFF;">
    <div class="colLeft"> 
        <div class="barSub_ntd"><h3>Hồ sơ ứng viên được nhiều người xem</h3></div>
        <div class="group-3col_ntd">
            <?php
                            $i = 1;
                            foreach ($timviec_detail as $job) {
                        if ($i % 2 == 1) {
                                    ?>
                                
                                    <?php } ?>
                            <div class="col3">
                                <div class="vieclamItem">
                                    <div class="ten-chinh"><a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $job['j_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job['j_title']))) ?>" title="<?php echo $job['j_title'] ?>" style="font-weight:bold;"><?php echo $job['j_title'] ?></a></div>
                                    <div class="ten-phu"><a href="#" title="<?php echo $job['u_fullname'] ?>"><?php echo $job['u_fullname'] ?></a></div>
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
            <div class="chiTiet_ntd"><a href="/danh-sach-ung-vien-nhieu-nguoi-xem.html" title="">Xem danh sách chi tiết</a></div>
        </div>
        <div id="div_ds_nganh_nghe_trang_chu_ntd">
            <div class="barSub_ntd">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr>
                            <td width="40%" align="left">
                                <h3>Danh sách ngành nghề</h3>
                            </td>
                            <td width="50%" align="right" style="font-size: 13px;color: #FFFF33;">
                                Sắp xếp theo: <a href="javascript:ds_nganh_nghe_trang_chu_ntd_theo_ten();" style="font-size: 13px;color: #FFFF33;">ABC</a>
                    </td>
                    </tr>
                    </tbody></table>
            </div>            
            <div class="group-3col">
                <?php
                            $i = 1;
                            foreach ($list_cate_job as $k=>$job_cate) {

                                if ($i % 3 == 1) {
                                    ?>
                                    <?php } ?>
                                    <div class="col3">
                                            <div class="ten-chinh" style="font-weight:bold;color:black;">
                                                <a href="<?php echo base_url(); ?>nganh-nghe/<?php echo $k ?>-<?php echo mb_strtolower(url_title(removesign($job_cate))) ?>"  title="<?php echo $job_cate ?>" target="_blank"> <?php echo $job_cate ?></a>
                                            </div>
                                    </div>
                                    <?php
                                    if ($i % 3 == 0) {
                                        ?>
                                <?php } ?>
                                <?php
                                $i++;
                            }
                            ?>
                <div class="clear"></div>
            </div>
        </div>
        <div name="div_ntd_ung_vien_moi_nhat_trang_chu" id="div_ntd_ung_vien_moi_nhat_trang_chu">
            <div class="barSub_ntd">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr>
                            <td width="40%" align="left">
                                <h3>Hồ sơ ứng viên mới nhất</h3>
                            </td>
                            <td width="50%" align="right" style="font-size: 13px;font-weight: bold;color: white">
                                Chọn tỉnh
                                <select class="dropbox" style="width:130px; background: #eafaf9;" name="uv_moi_nhat_select_tinh" id="uv_moi_nhat_select_tinh" onchange="ung_vien_moi_nhat_trang_chu_chon_1_tinh()">
                                    <option value="-1">-- Tất cả --</option>
                                    <option value="2">Hà Nội</option><option value="1">TP. HCM</option><option value="23">Đà Nẵng</option><option value="9">Bình Dương</option><option value="21">Cần Thơ</option><option value="22">Hải Phòng</option><option value="53">Bà Rịa - Vũng Tàu</option><option value="91">Bắc Giang</option><option value="92">Bắc Kạn</option><option value="94">Thừa Thiên Huế</option><option value="32">Bắc Ninh</option><option value="90">Bến Tre</option><option value="93">Bạc Liêu</option><option value="89">Bình Định</option><option value="88">Bình Phước</option><option value="87">Bình Thuận</option><option value="86">Cà Mau</option><option value="85">Cao Bằng</option><option value="84">Cửu Long</option><option value="83">Đắc Lắc</option><option value="52">An Giang</option><option value="82">Đắc Nông</option><option value="81">Điện Biên</option><option value="19">Đồng Nai</option><option value="80">Đồng Tháp</option><option value="79">Gia Lai</option><option value="78">Hà Giang</option><option value="77">Hà Nam</option><option value="76">Hà Tĩnh</option><option value="27">Hải Dương</option><option value="75">Hậu Giang</option><option value="74">Hòa Bình</option><option value="26">Hưng Yên</option><option value="73">Khánh Hòa</option><option value="72">Kiên Giang</option><option value="71">Kon Tum</option><option value="70">Lai Châu</option><option value="69">Lạng Sơn</option><option value="68">Lào Cai</option><option value="67">Lâm Đồng</option><option value="66">Long An</option><option value="65">Nam Định</option><option value="64">Nghệ An</option><option value="63">Ninh Bình</option><option value="62">Ninh Thuận</option><option value="61">Phú Thọ</option><option value="60">Phú Yên</option><option value="59">Quảng Bình</option><option value="58">Quảng Nam</option><option value="30">Quảng Ngãi</option><option value="57">Quảng Ninh</option><option value="56">Quảng Trị</option><option value="55">Sóc Trăng</option><option value="54">Sơn La</option><option value="51">Tây Ninh</option><option value="50">Thái Bình</option><option value="49">Thái Nguyên</option><option value="48">Thanh Hóa</option><option value="47">Tiền Giang</option><option value="46">Trà Vinh</option><option value="45">Tuyên Quang</option><option value="44">Vĩnh Long</option><option value="43">Vĩnh Phúc</option><option value="42">Yên Bái</option><option value="95">Toàn quốc</option><option value="96">Miền Bắc</option><option value="98">Miền Nam</option><option value="97">Miền Trung</option>				</select>
                            </td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="group-3col_ntd"><div class="col3_ntd">
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/thuc-pham-do-uong/nhan-vien-ke-hoach-san-xuat-thuc-pham-do-uong-c34p0id2474635.html" title="Nhân viên kế hoạch sản xuất thực phẩm - đồ uống">Nhân viên kế hoạch sản...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/thuc-pham-do-uong/nhan-vien-ke-hoach-san-xuat-thuc-pham-do-uong-c34p0id2474635.html" title="Cao Tâm Anh">Cao Tâm Anh</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/lao-dong-pho-thong/cong-nhan-vien-bat-ky-c26p0id2511442.html" title="Công nhân viên bất kỳ">Công nhân viên bất kỳ</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/lao-dong-pho-thong/cong-nhan-vien-bat-ky-c26p0id2511442.html" title="Nguyễn Văn Liêm">Nguyễn Văn Liêm</a></div>
                        <div></div>
                    </div>                 
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/quan-he-doi-ngoai/chuyen-vien-doi-ngoai-c28p0id2505069.html" title="Chuyên viên đối ngoại">Chuyên viên đối ngoại</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/quan-he-doi-ngoai/chuyen-vien-doi-ngoai-c28p0id2505069.html" title="Nguyễn Minh Đức">Nguyễn Minh Đức</a></div>
                        <div></div>
                    </div></div>
                <div class="pageList">
                    <u class="pageFirst">Đầu</u> <a rel="nofollow" href="javascript:AjaxAction('div_ntd_ung_vien_moi_nhat_trang_chu','%2Fajax%2Fntd_ung_vien_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D1');">1</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntd_ung_vien_moi_nhat_trang_chu','%2Fajax%2Fntd_ung_vien_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D2');">2</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntd_ung_vien_moi_nhat_trang_chu','%2Fajax%2Fntd_ung_vien_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D3');">3</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntd_ung_vien_moi_nhat_trang_chu','%2Fajax%2Fntd_ung_vien_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D4');">4</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntd_ung_vien_moi_nhat_trang_chu','%2Fajax%2Fntd_ung_vien_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D5');">5</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntd_ung_vien_moi_nhat_trang_chu','%2Fajax%2Fntd_ung_vien_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D10');"><u class="pageLast" style="color:#F20000;">Cuối</u></a>	</div>
                <div class="clear"></div>
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