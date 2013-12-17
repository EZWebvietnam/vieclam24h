<div class="content" style="background: none repeat scroll 0 0 #FFFFFF;">
    <div class="colLeft">
        <div class="navBar-vl-hot">
            <div class="navBarLeft"><h2><span class="navBarTxt24-1">Việc làm</span>&nbsp;<input src="<?php echo base_url() ?>template/home/images/icon-hot-big.gif" type="image"></h2></div>
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
        <div id="div_ds_nganh_nghe_trang_chu_ntv">
            <div class="barSub">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr>
                            <td width="40%" align="left">
                                <h3>Danh sách ngành nghề</h3>
                            </td>
                            <td width="50%" align="right" style="font-size: 13px;color: #FFFF33;">
                                Sắp xếp theo: <a href="javascript:ds_nganh_nghe_trang_chu_ntv_theo_ten();" style="font-size: 13px;color: #FFFF33;">ABC</a> 
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

        <div name="div_ntv_viec_lam_moi_nhat_trang_chu" id="div_ntv_viec_lam_moi_nhat_trang_chu">
            <div class="barSub">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr>
                            <td width="40%" align="left">
                                <h3>Việc làm mới nhất</h3>
                            </td>
                            <td width="50%" align="right" style="font-size: 13px;font-weight: bold;color: white">
                                Chọn tỉnh
                                <select class="dropbox" style="width:130px; background: #f0e9f9;" name="vl_moi_nhat_select_tinh" id="vl_moi_nhat_select_tinh" onchange="viec_lam_moi_nhat_trang_chu_chon_1_tinh()">
                                    <option value="-1">-- Tất cả --</option>
                                    <option value="2">Hà Nội</option><option value="1">TP. HCM</option><option value="23">Đà Nẵng</option><option value="9">Bình Dương</option><option value="21">Cần Thơ</option><option value="22">Hải Phòng</option><option value="53">Bà Rịa - Vũng Tàu</option><option value="91">Bắc Giang</option><option value="92">Bắc Kạn</option><option value="94">Thừa Thiên Huế</option><option value="32">Bắc Ninh</option><option value="90">Bến Tre</option><option value="93">Bạc Liêu</option><option value="89">Bình Định</option><option value="88">Bình Phước</option><option value="87">Bình Thuận</option><option value="86">Cà Mau</option><option value="85">Cao Bằng</option><option value="84">Cửu Long</option><option value="83">Đắc Lắc</option><option value="52">An Giang</option><option value="82">Đắc Nông</option><option value="81">Điện Biên</option><option value="19">Đồng Nai</option><option value="80">Đồng Tháp</option><option value="79">Gia Lai</option><option value="78">Hà Giang</option><option value="77">Hà Nam</option><option value="76">Hà Tĩnh</option><option value="27">Hải Dương</option><option value="75">Hậu Giang</option><option value="74">Hòa Bình</option><option value="26">Hưng Yên</option><option value="73">Khánh Hòa</option><option value="72">Kiên Giang</option><option value="71">Kon Tum</option><option value="70">Lai Châu</option><option value="69">Lạng Sơn</option><option value="68">Lào Cai</option><option value="67">Lâm Đồng</option><option value="66">Long An</option><option value="65">Nam Định</option><option value="64">Nghệ An</option><option value="63">Ninh Bình</option><option value="62">Ninh Thuận</option><option value="61">Phú Thọ</option><option value="60">Phú Yên</option><option value="59">Quảng Bình</option><option value="58">Quảng Nam</option><option value="30">Quảng Ngãi</option><option value="57">Quảng Ninh</option><option value="56">Quảng Trị</option><option value="55">Sóc Trăng</option><option value="54">Sơn La</option><option value="51">Tây Ninh</option><option value="50">Thái Bình</option><option value="49">Thái Nguyên</option><option value="48">Thanh Hóa</option><option value="47">Tiền Giang</option><option value="46">Trà Vinh</option><option value="45">Tuyên Quang</option><option value="44">Vĩnh Long</option><option value="43">Vĩnh Phúc</option><option value="42">Yên Bái</option><option value="95">Toàn quốc</option><option value="96">Miền Bắc</option><option value="98">Miền Nam</option><option value="97">Miền Trung</option>				</select>
                            </td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="group-3col"><div class="col3">
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/ban-hang/nhan-vien-ban-hang-c63p1id1367669.html" title="Nhân viên bán hàng">Nhân viên bán hàng</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-fourseasons-global-jsc-ntd2329457p1.html" title="Fourseasons Global JSC">Fourseasons Global JSC</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/ban-hang/quan-ly-cua-hang-c63p1id1405793.html" title="Quản lý Cửa hàng">Quản lý Cửa hàng</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-fourseasons-global-jsc-ntd2329457p1.html" title="Fourseasons Global JSC">Fourseasons Global JSC</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/ban-hang/cua-hang-truong-moschino-c63p1id1410377.html" title="Cửa hàng trưởng Moschino">Cửa hàng trưởng Moschino</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-fourseasons-global-jsc-ntd2329457p1.html" title="Fourseasons Global JSC">Fourseasons Global JSC</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/dien-tu-vien-thong/tuyen-gap-nhan-vien-cskh-mang-vinaphone-c54p1id1408193.html" title="Tuyển gấp nhân viên CSKH Mạng Vinaphone">Tuyển gấp nhân viên CSKH...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-mocap-viet-nam-ntd1814458p1.html" title="Công ty Cổ phần Mocap Việt Nam">Công ty Cổ phần Mocap...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/to-chuc-su-kien-qua-tang/nhan-vien-tu-van-to-chuc-su-kien-c83p1id1405942.html" title="Nhân viên tư vấn tổ chức sự kiện">Nhân viên tư vấn tổ chức...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-van-hoa-truyen-thong-new-ntd1994331p1.html" title="Công ty TNHH Văn hóa Truyền Thông NEW">Công ty TNHH Văn hóa Truyền...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/dien-dien-tu/instrument-engineer-5-candidates-c8p1id1089898.html" title="Instrument Engineer - 5 candidates">Instrument Engineer - 5 candidates</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-toyo-vietnam-ntd1828769p1.html" title="Toyo Vietnam">Toyo Vietnam</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-c96p1id1412610.html" title="Nhân viên kinh doanh">Nhân viên kinh doanh</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-chau-a-toan-cau-ntd2390252p1.html" title="Công Ty Cổ Phần Châu Á – Toàn Cầu">Công Ty Cổ Phần Châu...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/it-phan-cung/mang/nhan-vien-quan-tri-mang-nhan-vien-seo-c5p1id1412285.html" title="Nhân viên quản trị mạng, nhân viên Seo">Nhân viên quản trị mạng,...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-cp-thiet-ke-xay-dung-kien-truc-viet-ntd2298709p1.html" title="Công ty CP Thiết Kế - Xây dựng Kiến Trúc Việt">Công ty CP Thiết Kế...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/ky-thuat/truong-phong-ky-thuat-c16p1id687077.html" title="Trưởng phòng kỹ thuật">Trưởng phòng kỹ thuật</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-dau-tu-xay-dung-cat-tuong-ntd738863p1.html" title="Công ty Cổ Phần Đầu Tư Xây Dựng Cát Tường">Công ty Cổ Phần Đầu...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/thuc-tap/thuc-tap-lap-trinh-web-hay-soft-c52p1id1336050.html" title="Thực tập lập trình web hay Soft">Thực tập lập trình web...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-tnhh-tm-dv-khai-hop-ntd2096242p1.html" title="TNHH TM DV Khai Hợp">TNHH TM DV Khai Hợp</a></div>
                        <div></div>
                    </div></div><div class="col3">
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/it-phan-mem/seniornet-c74p1id1411188.html" title="Senior.NET">Senior.NET</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-cong-nghe-jupitech-viet-nam-ntd2349609p1.html" title="Công ty TNHH Công Nghệ Jupitech Việt Nam">Công ty TNHH Công Nghệ...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/it-phan-mem/tuyen-nhan-vien-lap-trinh-tren-ios-c74p1id1411109.html" title="Tuyển nhân viên lập trình trên iOS">Tuyển nhân viên lập trình...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-cong-nghe-jupitech-viet-nam-ntd2349609p1.html" title="Công ty TNHH Công Nghệ Jupitech Việt Nam">Công ty TNHH Công Nghệ...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/it-phan-mem/phan-tich-web-c74p1id1406783.html" title="Phân tích web">Phân tích web</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-vcn-corp-ntd1596371p1.html" title="VCN Corp">VCN Corp</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/buu-chinh/nhan-vien-truc-tong-dai-vinaphone-c2p1id1408197.html" title="Nhân viên trực tổng đài Vinaphone">Nhân viên trực tổng đài...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-mocap-viet-nam-ntd1814458p1.html" title="Công ty Cổ phần Mocap Việt Nam">Công ty Cổ phần Mocap...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/thu-ky-tro-ly/tro-ly-kinh-doanh-ban-hang-c91p1id1148342.html" title="Trợ lý kinh doanh bán hàng">Trợ lý kinh doanh bán hàng</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-may-trac-dia-nam-phuong-ntd1227095p1.html" title="Công ty TNHH Máy Trắc địa Nam Phương">Công ty TNHH Máy Trắc...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/dau-khi-hoa-chat/instrument-engineer-05-candidates-c6p1id1089897.html" title="Instrument Engineer  05 candidates">Instrument Engineer  05 candidates</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-toyo-vietnam-ntd1828769p1.html" title="Toyo Vietnam">Toyo Vietnam</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/bao-ve/nhan-vien-bao-ve-hoi-so-vpbank-c94p1id1360306.html" title="Nhân viên Bảo vệ Hội sở VPBank">Nhân viên Bảo vệ Hội...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-cp-dich-vu-bao-ve-thinh-an-ntd2055092p1.html" title="Công ty CP Dịch vụ Bảo vệ Thịnh An">Công ty CP Dịch vụ Bảo...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/ke-toan-kiem-toan/ke-toan-tong-hop-c30p1id938454.html" title="Kế toán tổng hợp">Kế toán tổng hợp</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-dau-tu-xay-dung-cat-tuong-ntd738863p1.html" title="Công ty Cổ Phần Đầu Tư Xây Dựng Cát Tường">Công ty Cổ Phần Đầu...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/xay-dung/chi-huy-truong-cong-trinh-c41p1id488812.html" title="Chỉ huy trưởng công trình">Chỉ huy trưởng công trình</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-dau-tu-xay-dung-cat-tuong-ntd738863p1.html" title="Công ty Cổ Phần Đầu Tư Xây Dựng Cát Tường">Công ty Cổ Phần Đầu...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/hanh-chinh-van-phong/tuyen-gap-nhan-vien-hanh-chinh-van-thu-c38p1id1326692.html" title="Tuyển gấp Nhân viên hành chính văn thư">Tuyển gấp Nhân viên hành...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-cp-tri-tue-viet-vietclever-group-ntd2080519p1.html" title="Công ty CP Trí Tuệ Việt (VietClever Group)">Công ty CP Trí Tuệ Việt...</a></div>
                        <div></div>
                    </div></div><div class="col3">
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/it-phan-mem/tuyen-nhan-vien-php-c74p1id1411183.html" title="Tuyển nhân viên Php">Tuyển nhân viên Php</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-cong-nghe-jupitech-viet-nam-ntd2349609p1.html" title="Công ty TNHH Công Nghệ Jupitech Việt Nam">Công ty TNHH Công Nghệ...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/quan-tri-kinh-doanh/truong-bo-phan-kinh-doanh-c14p1id1410368.html" title="Trưởng bộ phận kinh doanh">Trưởng bộ phận kinh doanh</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-fourseasons-global-jsc-ntd2329457p1.html" title="Fourseasons Global JSC">Fourseasons Global JSC</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/thiet-ke-my-thuat/designer-c32p1id1406832.html" title="Designer">Designer</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-vcn-corp-ntd1596371p1.html" title="VCN Corp">VCN Corp</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p1id1385291.html" title="Nhân viên kế toán">Nhân viên kế toán</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-mtv-dat-phuong-sai-gon-ntd1688833p1.html" title="Công ty TNHH MTV Đạt Phương Sài Gòn">Công ty TNHH MTV Đạt...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/thu-ky-tro-ly/tro-ly-giam-doc-c91p1id1127073.html" title="Trợ lý giám đốc">Trợ lý giám đốc</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-may-trac-dia-nam-phuong-ntd1227095p1.html" title="Công ty TNHH Máy Trắc địa Nam Phương">Công ty TNHH Máy Trắc...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/bao-ve/nhan-vien-bao-ve-c94p1id1355471.html" title="Nhân viên bảo vệ">Nhân viên bảo vệ</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-cp-dich-vu-bao-ve-thinh-an-ntd2055092p1.html" title="Công ty CP Dịch vụ Bảo vệ Thịnh An">Công ty CP Dịch vụ Bảo...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/lao-dong-pho-thong/nhan-vien-giao-hang-theo-xe-c26p1id1297047.html" title="Nhân viên giao hàng theo xe">Nhân viên giao hàng theo...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-tnhh-nuoc-uong-tinh-khiet-sai-gon-sapuwa-ntd2198693p1.html" title="Công ty TNHH nước uống tinh khiết Sài Gòn (SAPUWA)">Công ty TNHH nước uống...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/bao-ve/nhan-vien-bao-ve-cong-trinh-thuy-dien-c94p1id1398983.html" title="Nhân viên bảo vệ công trình thủy điện">Nhân viên bảo vệ công...</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-cp-dich-vu-bao-ve-thinh-an-ntd2055092p1.html" title="Công ty CP Dịch vụ Bảo vệ Thịnh An">Công ty CP Dịch vụ Bảo...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/ky-thuat/pho-giam-doc-ky-thuat-c16p1id1181971.html" title="Phó giám đốc kỹ thuật">Phó giám đốc kỹ thuật</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-co-phan-dau-tu-xay-dung-cat-tuong-ntd738863p1.html" title="Công ty Cổ Phần Đầu Tư Xây Dựng Cát Tường">Công ty Cổ Phần Đầu...</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem">
                        <div class="ten-chinh"><a href="/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-c96p1id1408417.html" title="Nhân viên kinh doanh">Nhân viên kinh doanh</a></div>
                        <div class="ten-phu"><a href="/danh-sach-cac-tin-tuyen-dung-cong-ty-cp-tri-tue-viet-vietclever-group-ntd2080519p1.html" title="Công ty CP Trí Tuệ Việt (VietClever Group)">Công ty CP Trí Tuệ Việt...</a></div>
                        <div></div>
                    </div></div>
                <div class="pageList">
                    <u class="pageFirst">Đầu</u> <a rel="nofollow" href="javascript:AjaxAction('div_ntv_viec_lam_moi_nhat_trang_chu','%2Fajax%2Fntv_viec_lam_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D1');">1</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntv_viec_lam_moi_nhat_trang_chu','%2Fajax%2Fntv_viec_lam_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D2');">2</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntv_viec_lam_moi_nhat_trang_chu','%2Fajax%2Fntv_viec_lam_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D3');">3</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntv_viec_lam_moi_nhat_trang_chu','%2Fajax%2Fntv_viec_lam_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D4');">4</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntv_viec_lam_moi_nhat_trang_chu','%2Fajax%2Fntv_viec_lam_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D5');">5</a> &nbsp;<a rel="nofollow" href="javascript:AjaxAction('div_ntv_viec_lam_moi_nhat_trang_chu','%2Fajax%2Fntv_viec_lam_moi_nhat_trang_chu%2Findex%2F%3Fid_tinh%3D0%26number_items%3D30%2F1%2F30%2F0%26page%3D10');"><u class="pageLast" style="color:#F20000;">Cuối</u></a>	</div>
                <div class="clear"></div>
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
        <div class="rightBox"> 	<form name="frmtimviecnhanh" method="get" action="">
                <input id="hdn_tu_khoa" type="hidden" value="" name="hdn_tu_khoa">
                <div class="searchBoxTitle" title="Bạn Hãy bấm vào các tiêu thức lọc tìm bên dưới hoặc bấm vào các nút xem thêm để mở ra nhiều lựa chọn hơn!">LỌC TÌM              
                </div>
                <div class="searchBoxLine"></div>
                <div class="searchBox-DK">
                    <div class="searchItem">
                        <div class="searchGroup">Ngành nghề</div>
                        <div class="searchObject">
                            <input id="txt_chon_nganh_nghe" class="s-textbox" type="text" onkeydown="chon_nhanh('txt_chon_nganh_nghe', 'hdn_nganh_nghe_cap1', event)" onblur="if (this.value == '') this.value = 'Tìm nhanh ngành nghề...';" onfocus="if (this.value == 'Tìm nhanh ngành nghề...') this.value = '';" value="Tìm nhanh ngành nghề..." title="Tìm nhanh địa điểm bằng cách nhập tên vào đây" name="txt_chon_nganh_nghe"><br>
                            <select class="s-list" size="3" title="" name="hdn_nganh_nghe_cap1" id="hdn_nganh_nghe_cap1" onkeydown="change_focus(document.forms[1], this)" style="width:173px;"><option value="30" =""="" title="Ke toan-Kiem toan">Kế toán-Kiểm toán</option><option value="38" =""="" title="Hanh chinh-Van phong">Hành chính-Văn phòng</option><option value="46" =""="" title="Sinh vien lam them">Sinh viên làm thêm</option><option value="41" =""="" title="Xay dung">Xây dựng</option><option value="8" =""="" title="dien-dien tu">Điện-Điện tử</option><option value="48" =""="" title="Lam ban thoi gian">Làm bán thời gian</option><option value="39" =""="" title="Van tai - Lai xe">Vận tải - Lái xe</option><option value="84" =""="" title="Khach san-Nha hang">Khách sạn-Nhà hàng</option><option value="89" =""="" title="o to - Xe may">Ô tô - Xe máy</option><option value="63" =""="" title="Ban hang ">Bán hàng </option><option value="49" =""="" title="Bao chi-Truyen hinh">Báo chí-Truyền hình</option><option value="1" =""="" title="Bao hiem">Bảo hiểm</option><option value="94" =""="" title="Bao ve">Bảo vệ</option><option value="79" =""="" title="Bien-Phien dich">Biên-Phiên dịch</option><option value="2" =""="" title="Buu chinh">Bưu chính</option><option value="88" =""="" title="Cong nghe cao">Công nghệ cao</option><option value="90" =""="" title="Cong nghiep">Công nghiệp</option><option value="101" =""="" title="Chung khoan- Vang">Chứng khoán- Vàng</option><option value="4" =""="" title="Co khi-Che tao">Cơ khí-Chế tạo</option><option value="6" =""="" title="Dau khi-Hoa chat">Dầu khí-Hóa chất</option><option value="50" =""="" title="Det may - Da giay">Dệt may - Da giày</option><option value="7" =""="" title="Dich vu">Dịch vụ</option><option value="9" =""="" title="Du lich">Du lịch</option><option value="76" =""="" title="Game">Game</option><option value="10" =""="" title="Giao duc-dao tao">Giáo dục-Đào tạo</option><option value="85" =""="" title="Hang gia dung">Hàng gia dụng</option><option value="57" =""="" title="Hang hai">Hàng hải</option><option value="55" =""="" title="Hang khong">Hàng không</option><option value="87" =""="" title="Hoa hoc-Sinh hoc">Hoá học-Sinh học</option><option value="93" =""="" title="Hoach dinh-Du an">Hoạch định-Dự án</option><option value="12" =""="" title="In an-Xuat ban">In ấn-Xuất bản</option><option value="5" =""="" title="IT phan cung/mang">IT phần cứng/mạng</option><option value="74" =""="" title="IT phan mem">IT phần mềm</option><option value="16" =""="" title="Ky thuat">Kỹ thuật</option><option value="61" =""="" title="Ky thuat ung dung">Kỹ thuật ứng dụng</option><option value="81" =""="" title="KD bat dong san">KD bất động sản</option><option value="15" =""="" title="Kien truc-TK noi that">Kiến trúc-TK nội thất</option><option value="26" =""="" title="Lao dong pho thong">Lao động phổ thông</option><option value="53" =""="" title="Marketing-PR">Marketing-PR</option><option value="20" =""="" title="My pham-Trang suc">Mỹ phẩm-Trang sức</option><option value="17" =""="" title="Nong-Lam-Ngu nghiep">Nông-Lâm-Ngư nghiệp</option><option value="44" =""="" title="Nganh nghe khac">Ngành nghề khác</option><option value="22" =""="" title="Ngan hang">Ngân hàng</option><option value="62" =""="" title="Nghe thuat - dien anh">Nghệ thuật - Điện ảnh</option><option value="78" =""="" title="Nguoi giup viec">Người giúp việc</option><option value="59" =""="" title="Nhan su">Nhân sự</option><option value="96" =""="" title="Nhan vien kinh doanh">Nhân viên kinh doanh</option><option value="65" =""="" title="NV trong quan Internet">NV trông quán Internet</option><option value="18" =""="" title="Phap ly">Pháp lý</option><option value="92" =""="" title="Promotion Girl (PG)">Promotion Girl (PG)</option><option value="28" =""="" title="Quan he doi ngoai">Quan hệ đối ngoại</option><option value="14" =""="" title="Quan tri kinh doanh">Quản trị kinh doanh</option><option value="83" =""="" title="To chuc su kien-Qua tang">Tổ chức sự kiện-Quà tặng</option><option value="86" =""="" title="Thoi trang">Thời trang</option><option value="33" =""="" title="Thu cong my nghe">Thủ công mỹ nghệ</option><option value="34" =""="" title="Thuc pham-do uong">Thực phẩm-Đồ uống</option><option value="52" =""="" title="Thuc tap">Thực tập</option><option value="75" =""="" title="Thiet ke do hoa web">Thiết kế đồ hoạ web</option><option value="32" =""="" title="Thiet ke-My thuat">Thiết kế-Mỹ thuật</option><option value="91" =""="" title="Thu ky-Tro ly">Thư ký-Trợ lý</option><option value="77" =""="" title="Thuong mai dien tu">Thương mại điện tử</option><option value="36" =""="" title="Tiep thi-Quang cao">Tiếp thị-Quảng cáo</option><option value="37" =""="" title="Tu van">Tư vấn</option><option value="40" =""="" title="Vat tu-Thiet bi">Vật tư-Thiết bị</option><option value="42" =""="" title="Xuat, nhap khau">Xuất, nhập khẩu</option><option value="43" =""="" title="Y te-Duoc">Y tế-Dược</option><option value="80" =""="" title="dau tu">Đầu tư</option><option value="54" =""="" title="dien tu vien thong">Điện tử viễn thông</option></select>
                        </div>
                        <div class="clear"></div>
                    </div> 		<div class="searchItem">
                        <div class="searchGroup">Địa điểm</div>
                        <div class="searchObject">
                            <input id="txt_chon_dia_diem" class="s-textbox" type="text" onkeydown="chon_nhanh('txt_chon_dia_diem', 'hdn_dia_diem', event)" onblur="if (this.value == '') this.value = 'Tìm nhanh địa điểm...';" onfocus="if (this.value == 'Tìm nhanh địa điểm...') this.value = '';" value="Tìm nhanh địa điểm..." title="Tìm nhanh địa điểm bằng cách nhập tên vào đây" name="txt_chon_dia_diem"><br>
                            <select class="s-list" size="4" title="" name="hdn_dia_diem" id="hdn_dia_diem" onkeydown="change_focus(document.forms[1], this)" style="width:173px;"><option value="-1">Không chọn địa điểm</option><option value="2" =""="" title="Ha Noi">Hà Nội</option><option value="1" =""="" title="TP. HCM">TP. HCM</option><option value="23" =""="" title="da Nang">Đà Nẵng</option><option value="9" =""="" title="Binh Duong">Bình Dương</option><option value="21" =""="" title="Can Tho">Cần Thơ</option><option value="22" =""="" title="Hai Phong">Hải Phòng</option><option value="53" =""="" title="Ba Ria - Vung Tau">Bà Rịa - Vũng Tàu</option><option value="94" =""="" title="Thua Thien Hue">Thừa Thiên Huế</option><option value="91" =""="" title="Bac Giang">Bắc Giang</option><option value="92" =""="" title="Bac Kan">Bắc Kạn</option><option value="32" =""="" title="Bac Ninh">Bắc Ninh</option><option value="90" =""="" title="Ben Tre">Bến Tre</option><option value="93" =""="" title="Bac Lieu">Bạc Liêu</option><option value="89" =""="" title="Binh dinh">Bình Định</option><option value="88" =""="" title="Binh Phuoc">Bình Phước</option><option value="87" =""="" title="Binh Thuan">Bình Thuận</option><option value="86" =""="" title="Ca Mau">Cà Mau</option><option value="85" =""="" title="Cao Bang">Cao Bằng</option><option value="84" =""="" title="Cuu Long">Cửu Long</option><option value="83" =""="" title="dac Lac">Đắc Lắc</option><option value="82" =""="" title="dac Nong">Đắc Nông</option><option value="52" =""="" title="An Giang">An Giang</option><option value="81" =""="" title="dien Bien">Điện Biên</option><option value="19" =""="" title="dong Nai">Đồng Nai</option><option value="80" =""="" title="dong Thap">Đồng Tháp</option><option value="79" =""="" title="Gia Lai">Gia Lai</option><option value="78" =""="" title="Ha Giang">Hà Giang</option><option value="77" =""="" title="Ha Nam">Hà Nam</option><option value="76" =""="" title="Ha Tinh">Hà Tĩnh</option><option value="27" =""="" title="Hai Duong">Hải Dương</option><option value="75" =""="" title="Hau Giang">Hậu Giang</option><option value="74" =""="" title="Hoa Binh">Hòa Bình</option><option value="26" =""="" title="Hung Yen">Hưng Yên</option><option value="73" =""="" title="Khanh Hoa">Khánh Hòa</option><option value="72" =""="" title="Kien Giang">Kiên Giang</option><option value="71" =""="" title="Kon Tum">Kon Tum</option><option value="70" =""="" title="Lai Chau">Lai Châu</option><option value="69" =""="" title="Lang Son">Lạng Sơn</option><option value="68" =""="" title="Lao Cai">Lào Cai</option><option value="67" =""="" title="Lam dong">Lâm Đồng</option><option value="66" =""="" title="Long An">Long An</option><option value="65" =""="" title="Nam dinh">Nam Định</option><option value="64" =""="" title="Nghe An">Nghệ An</option><option value="63" =""="" title="Ninh Binh">Ninh Bình</option><option value="62" =""="" title="Ninh Thuan">Ninh Thuận</option><option value="61" =""="" title="Phu Tho">Phú Thọ</option><option value="60" =""="" title="Phu Yen">Phú Yên</option><option value="59" =""="" title="Quang Binh">Quảng Bình</option><option value="58" =""="" title="Quang Nam">Quảng Nam</option><option value="30" =""="" title="Quang Ngai">Quảng Ngãi</option><option value="57" =""="" title="Quang Ninh">Quảng Ninh</option><option value="56" =""="" title="Quang Tri">Quảng Trị</option><option value="55" =""="" title="Soc Trang">Sóc Trăng</option><option value="54" =""="" title="Son La">Sơn La</option><option value="51" =""="" title="Tay Ninh">Tây Ninh</option><option value="50" =""="" title="Thai Binh">Thái Bình</option><option value="49" =""="" title="Thai Nguyen">Thái Nguyên</option><option value="48" =""="" title="Thanh Hoa">Thanh Hóa</option><option value="47" =""="" title="Tien Giang">Tiền Giang</option><option value="46" =""="" title="Tra Vinh">Trà Vinh</option><option value="45" =""="" title="Tuyen Quang">Tuyên Quang</option><option value="44" =""="" title="Vinh Long">Vĩnh Long</option><option value="43" =""="" title="Vinh Phuc">Vĩnh Phúc</option><option value="42" =""="" title="Yen Bai">Yên Bái</option><option value="95" =""="" title="Toan quoc">Toàn quốc</option><option value="96" =""="" title="Mien Bac">Miền Bắc</option><option value="98" =""="" title="Mien Nam">Miền Nam</option><option value="97" =""="" title="Mien Trung">Miền Trung</option></select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="searchItem">
                        <div class="searchGroup">Mức lương</div>
                        <div class="searchObject"> <select class="s-drop" size="1" title="" name="hdn_muc_luong" id="hdn_muc_luong" onkeydown="change_focus(document.forms[1], this)"><option value="-1">Chọn Mức lương</option><option value="1" =""="" title="Thoa thuan">Thỏa thuận</option><option value="2" =""="" title="1 - 3 trieu">1 - 3 triệu</option><option value="3" =""="" title="3 - 5 trieu">3 - 5 triệu</option><option value="4" =""="" title="5 - 7 trieu">5 - 7 triệu</option><option value="5" =""="" title="7 – 10 trieu">7 – 10 triệu</option><option value="6" =""="" title="10 – 15 trieu">10 – 15 triệu</option><option value="7" =""="" title="15 – 20 trieu">15 – 20 triệu</option><option value="8" =""="" title="20 – 30 trieu">20 – 30 triệu</option><option value="9" =""="" title="Tren 30 trieu">Trên 30 triệu</option></select>			</div>
                        <div class="clear"></div>
                    </div>
                    <div class="searchItem" style="display:none;">
                        <div class="searchGroup">Cấp bậc</div>
                        <div class="searchObject">  <select class="s-drop" size="1" title="" name="hdn_cap_bac" id="hdn_cap_bac" onkeydown="change_focus(document.forms[1], this)"><option value="-1">Chọn cấp bậc</option><option value="11" =""="" title="Chuyen vien">Chuyên viên</option><option value="10" =""="" title="Ky thuat vien/ky su">Kỹ thuật viên/kỹ sư</option><option value="9" =""="" title="Truong nhom/Giam sat">Trưởng nhóm/Giám sát</option><option value="8" =""="" title="Khac">Khác</option><option value="7" =""="" title="Nhan vien">Nhân viên</option><option value="6" =""="" title="Chuyen gia">Chuyên gia</option><option value="5" =""="" title="Tu van/Tro ly">Tư vấn/Trợ lý</option><option value="4" =""="" title="Truong/Pho phong">Trưởng/Phó phòng</option><option value="3" =""="" title="Quan tri cap cao">Quản trị cấp cao</option></select>			</div>
                        <div class="clear"></div>
                    </div>
                    <div class="searchItem" style="display:none;">
                        <div class="searchGroup">Bằng cấp</div>
                        <div class="searchObject">  <select class="s-drop" size="1" title="" name="hdn_bang_cap" id="hdn_bang_cap" onkeydown="change_focus(document.forms[1], this)"><option value="-1">Chọn bằng cấp</option><option value="6" =""="" title="Khong yeu cau">Không yêu cầu</option><option value="5" =""="" title="Trung hoc">Trung học</option><option value="4" =""="" title="Trung cap">Trung cấp</option><option value="3" =""="" title="Cao dang">Cao đẳng</option><option value="2" =""="" title="dai hoc">Đại học</option><option value="1" =""="" title="Tren dai hoc">Trên đại học</option></select>			</div>
                        <div class="clear"></div>
                    </div>
                    <div class="searchItem">
                        <div class="searchGroup">Kinh nghiệm</div>
                        <div class="searchObject">  <select class="s-drop" size="1" title="" name="hdn_kinh_nghiem" id="hdn_kinh_nghiem" onkeydown="change_focus(document.forms[1], this)"><option value="-1">Chọn kinh nghiệm</option><option value="1" =""="" title="Duoi 1 nam">Dưới 1 năm</option><option value="2" =""="" title="1 nam">1 năm</option><option value="3" =""="" title="2 nam">2 năm</option><option value="4" =""="" title="3 nam">3 năm</option><option value="5" =""="" title="4 nam">4 năm</option><option value="6" =""="" title="5 nam">5 năm</option><option value="7" =""="" title="Hon 5 nam">Hơn 5 năm</option><option value="8" =""="" title="Chua co kinh nghiem">Chưa có kinh nghiệm</option></select>			</div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="padTop5 padRight10" align="right"><input type="image" src="<?php echo base_url() ?>template/home/images/btnTimkiem.gif" alt="Bấm đây để lọc theo các tiêu chí đã chọn!" title="Bấm đây để lọc theo các tiêu chí đã chọn!" onclick="javascript: return tim_kiem_nhanh_selectbox('0');">&nbsp;<input type="image" src="<?php echo base_url() ?>template/home/images/btnHuyTimkiem.gif" alt="Bấm đây để hủy các tiêu thức đã lọc!" title="Bấm đây để hủy các tiêu thức đã lọc!" onclick=" javascript: return huy_dieu_kien_tim_kiem();"></div>
            </form>
        </div>        
        <div class="boxFacebook">
            <iframe src="http://www.facebook.com/plugins/likebox.php?id=389141851104907&amp;width=285&amp;connections=9&amp;stream=false&amp;show_faces=false&amp;header=false&amp;height=244" scrolling="no" frameborder="0" style="border:0px solid #999999; overflow:hidden; width:285px; height:244px;"></iframe>
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