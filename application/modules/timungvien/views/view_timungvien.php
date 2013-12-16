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
                            foreach ($list_cate_job as $job_cate) {

                                if ($i % 3 == 1) {
                                    ?>
                                    <?php } ?>
                                    <div class="col3">
                                            <div class="ten-chinh" style="font-weight:bold;color:black;">
                                                <a href="<?php echo base_url(); ?>nganh-nghe/<?php echo $job_cate['m_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job_cate['m_name']))) ?>" title="<?php echo $job_cate['m_name'] ?>"><?php echo $job_cate['m_name'] ?></a>
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
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-hoac-giam-sat-kinh-doanh-c96p0id2491638.html" title="Nhân viên kinh doanh hoặc Giám sát kinh doanh">Nhân viên kinh doanh hoặc...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-hoac-giam-sat-kinh-doanh-c96p0id2491638.html" title="Trương Phước Nhân">Trương Phước Nhân</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id2513712.html" title="Nhân viên kế toán">Nhân viên kế toán</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id2513712.html" title="Trần Thị Minh Thúy">Trần Thị Minh Thúy</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/co-khi-che-tao/nhan-vien-ky-thuat-bao-tri-van-hanh-c4p0id2455918.html" title="Nhân viên kỹ thuật, bảo trì, vận hành">Nhân viên kỹ thuật,...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/co-khi-che-tao/nhan-vien-ky-thuat-bao-tri-van-hanh-c4p0id2455918.html" title="Nguyễn Thanh Hùng">Nguyễn Thanh Hùng</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/van-tai-lai-xe/lai-xe-bang-d-4-29-cho-c39p0id2506600.html" title="Lái Xe Bằng D ( 4 _ 29 chỗ )" style=" color:red; font-weight:bold;">Lái Xe Bằng D ( 4 _...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/van-tai-lai-xe/lai-xe-bang-d-4-29-cho-c39p0id2506600.html" title="Thành Dương">Thành Dương</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/khach-san-nha-hang/giam-sat-nha-hang-c84p0id2255253.html" title="Giám sát nhà hàng">Giám sát nhà hàng</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/khach-san-nha-hang/giam-sat-nha-hang-c84p0id2255253.html" title="Hoàng Thị Ánh Hảo">Hoàng Thị Ánh Hảo</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-c8p0id2500186.html" title="Nhân viên kỹ thuật">Nhân viên kỹ thuật</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-c8p0id2500186.html" title="Nguyền Khắc Hữu Tân">Nguyền Khắc Hữu Tân</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/det-may-da-giay/nhan-vien-lam-ban-thoi-gian-thiet-ke-mau-giac-so-do-c50p0id2342151.html" title="Nhân viên làm bán thời gian thiết kế mẫu, giác sơ đồ">Nhân viên làm bán thời...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/det-may-da-giay/nhan-vien-lam-ban-thoi-gian-thiet-ke-mau-giac-so-do-c50p0id2342151.html" title="Nguyễn  Thao">Nguyễn  Thao</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/hanh-chinh-van-phong/hanh-chinh-van-phong-c38p0id2428194.html" title="Hành chính văn phòng">Hành chính văn phòng</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/hanh-chinh-van-phong/hanh-chinh-van-phong-c38p0id2428194.html" title="Trần Minh Hân ">Trần Minh Hân </a></div>
                        <div></div>
                    </div></div><div class="col3_ntd">
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/nhan-su/nhan-vien-hanh-chinh-nhan-su-c59p0id2496017.html" title="Nhân viên hành chính nhân sự">Nhân viên hành chính nhân...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/nhan-su/nhan-vien-hanh-chinh-nhan-su-c59p0id2496017.html" title="Trần Thị Lý">Trần Thị Lý</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-c8p0id2509669.html" title="Nhân viên kỹ thuật">Nhân viên kỹ thuật</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-c8p0id2509669.html" title="Bùi Duy Đức">Bùi Duy Đức</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/nhan-su/nhan-vien-nhan-su-c59p0id2243632.html" title="Nhân viên nhân sự">Nhân viên nhân sự</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/nhan-su/nhan-vien-nhan-su-c59p0id2243632.html" title="Phạm Thị Mai">Phạm Thị Mai</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/khach-san-nha-hang/quan-ly-chuoi-nha-hang-/quan-ly-nha-hang-c84p0id2258691.html" title="Quản lý  chuỗi nhà hàng /Quản lý nhà hàng">Quản lý  chuỗi nhà hàng...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/khach-san-nha-hang/quan-ly-chuoi-nha-hang-/quan-ly-nha-hang-c84p0id2258691.html" title="Trần Văn Hóa">Trần Văn Hóa</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-c30p0id2514052.html" title="Kế toán">Kế toán</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-c30p0id2514052.html" title="Nguyễn Thị Ánh Tuyết">Nguyễn Thị Ánh Tuyết</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/ky-thuat/quan-ly-san-xuat-c16p0id2353851.html" title="Quản lý sản xuất">Quản lý sản xuất</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/ky-thuat/quan-ly-san-xuat-c16p0id2353851.html" title="Phạm Kiều Hưng">Phạm Kiều Hưng</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/khach-san-nha-hang/to-truong-giam-sat-nha-hang-c84p0id2516815.html" title="Tổ trưởng, giám sát nhà hàng">Tổ trưởng, giám sát...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/khach-san-nha-hang/to-truong-giam-sat-nha-hang-c84p0id2516815.html" title="Hoàng Thị Ánh Hảo">Hoàng Thị Ánh Hảo</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/marketing-pr/trade-marketing-executive-c53p0id2513200.html" title="Trade Marketing executive">Trade Marketing executive</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/marketing-pr/trade-marketing-executive-c53p0id2513200.html" title="Lê Đến">Lê Đến</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/co-khi-che-tao/tho-tien-c4p0id2512226.html" title="Thợ tiện">Thợ tiện</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/co-khi-che-tao/tho-tien-c4p0id2512226.html" title="Hà Văn Kết">Hà Văn Kết</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id2493255.html" title="Nhân viên kế toán">Nhân viên kế toán</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id2493255.html" title="Hồ Thị Thanh Mỹ">Hồ Thị Thanh Mỹ</a></div>
                        <div></div>
                    </div></div><div class="col3_ntd">
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/van-tai-lai-xe/nhan-vien-lai-xe-bang-b2-c39p0id2515457.html" title="Nhân viên lái xe bằng B2">Nhân viên lái xe bằng...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/van-tai-lai-xe/nhan-vien-lai-xe-bang-b2-c39p0id2515457.html" title="Trần Thanh Tùng">Trần Thanh Tùng</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/xay-dung/ky-su-cau-duong-c41p0id2277870.html" title="Ky sư cầu đường">Ky sư cầu đường</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/xay-dung/ky-su-cau-duong-c41p0id2277870.html" title="Đinh Văn Phi">Đinh Văn Phi</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-nhan-vien-van-phong-c30p0id2497994.html" title="Nhân viên kế toán, nhân viên văn phòng">Nhân viên kế toán, nhân...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-nhan-vien-van-phong-c30p0id2497994.html" title="Dương Thị Huyền">Dương Thị Huyền</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-mang-chung-tu-ve-nha-lam-ke-toan-partime-c30p0id2515580.html" title="Kế toán mang chứng từ về nhà làm, kế toán Partime">Kế toán mang chứng từ...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-mang-chung-tu-ve-nha-lam-ke-toan-partime-c30p0id2515580.html" title="Nguyễn Thị Thanh Chúc">Nguyễn Thị Thanh Chúc</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/it-phan-mem/lap-trinh-vien-net-c74p0id2363303.html" title="Lập trình viên .NET">Lập trình viên .NET</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/it-phan-mem/lap-trinh-vien-net-c74p0id2363303.html" title="Trần Văn Toán">Trần Văn Toán</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/cong-nghiep/nhan-vien-qc/-quan-ly-san-xuat-c90p0id2388751.html" title="Nhân viên QC/ Quản lý sản xuất">Nhân viên QC/ Quản lý...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/cong-nghiep/nhan-vien-qc/-quan-ly-san-xuat-c90p0id2388751.html" title="Phạm Kiều Hưng">Phạm Kiều Hưng</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/nhan-su/chuyen-vien-tuyen-dung-c59p0id2413348.html" title="Chuyên viên tuyển dụng">Chuyên viên tuyển dụng</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/nhan-su/chuyen-vien-tuyen-dung-c59p0id2413348.html" title="Trần Minh Hân ">Trần Minh Hân </a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/det-may-da-giay/nhan-vien-phong-ky-thuat-qc-c50p0id2447203.html" title="Nhân viên phòng kỹ thuật - QC">Nhân viên phòng kỹ thuật...</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/det-may-da-giay/nhan-vien-phong-ky-thuat-qc-c50p0id2447203.html" title="Nguyễn Văn Thạo">Nguyễn Văn Thạo</a></div>
                        <div></div>
                    </div>
                    <div class="vieclamItem_ntd">
                        <div class="ten-chinh_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id2493560.html" title="Nhân viên kế toán">Nhân viên kế toán</a></div>
                        <div class="ten-phu_ntd"><a href="/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id2493560.html" title="Hồ Thị Mỹ Dung">Hồ Thị Mỹ Dung</a></div>
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
    </div><div class="colRight">
        <div class="rightBox"> 	<form name="frmtimungviennhanh" method="get" action="">
                <input id="hdn_tu_khoa" type="hidden" value="" name="hdn_tu_khoa">
                <div class="searchBoxTitle" title="Bạn Hãy bấm vào các tiêu thức lọc tìm bên dưới hoặc bấm vào các nút xem thêm để mở ra nhiều lựa chọn hơn!">LỌC TÌM          
                </div>
                <div class="searchBoxLine"></div>
                <div class="searchBox-DK">
                    <div class="searchItem">
                        <div class="searchGroup">Ngành nghề</div>
                        <div class="searchObject">
                            <input id="txt_chon_nganh_nghe" class="s-textbox" type="text" onkeydown="chon_nhanh('txt_chon_nganh_nghe', 'hdn_nganh_nghe_cap1', event)" onblur="if (this.value == '')
                                            this.value = 'Tìm nhanh ngành nghề...';" onfocus="if (this.value == 'Tìm nhanh ngành nghề...')
                                                        this.value = '';" value="Tìm nhanh ngành nghề..." title="Tìm nhanh địa điểm bằng cách nhập tên vào đây" name="txt_chon_nganh_nghe"><br>
                            <select class="s-list" size="3" title="" name="hdn_nganh_nghe_cap1" id="hdn_nganh_nghe_cap1" onkeydown="change_focus(document.forms[1], this)" style="width:173px;"><option value="30" =""="" title="Ke toan-Kiem toan">Kế toán-Kiểm toán</option><option value="38" =""="" title="Hanh chinh-Van phong">Hành chính-Văn phòng</option><option value="46" =""="" title="Sinh vien lam them">Sinh viên làm thêm</option><option value="41" =""="" title="Xay dung">Xây dựng</option><option value="8" =""="" title="dien-dien tu">Điện-Điện tử</option><option value="48" =""="" title="Lam ban thoi gian">Làm bán thời gian</option><option value="39" =""="" title="Van tai - Lai xe">Vận tải - Lái xe</option><option value="84" =""="" title="Khach san-Nha hang">Khách sạn-Nhà hàng</option><option value="89" =""="" title="o to - Xe may">Ô tô - Xe máy</option><option value="63" =""="" title="Ban hang ">Bán hàng </option><option value="49" =""="" title="Bao chi-Truyen hinh">Báo chí-Truyền hình</option><option value="1" =""="" title="Bao hiem">Bảo hiểm</option><option value="94" =""="" title="Bao ve">Bảo vệ</option><option value="79" =""="" title="Bien-Phien dich">Biên-Phiên dịch</option><option value="2" =""="" title="Buu chinh">Bưu chính</option><option value="88" =""="" title="Cong nghe cao">Công nghệ cao</option><option value="90" =""="" title="Cong nghiep">Công nghiệp</option><option value="101" =""="" title="Chung khoan- Vang">Chứng khoán- Vàng</option><option value="4" =""="" title="Co khi-Che tao">Cơ khí-Chế tạo</option><option value="6" =""="" title="Dau khi-Hoa chat">Dầu khí-Hóa chất</option><option value="50" =""="" title="Det may - Da giay">Dệt may - Da giày</option><option value="7" =""="" title="Dich vu">Dịch vụ</option><option value="9" =""="" title="Du lich">Du lịch</option><option value="76" =""="" title="Game">Game</option><option value="10" =""="" title="Giao duc-dao tao">Giáo dục-Đào tạo</option><option value="85" =""="" title="Hang gia dung">Hàng gia dụng</option><option value="57" =""="" title="Hang hai">Hàng hải</option><option value="55" =""="" title="Hang khong">Hàng không</option><option value="87" =""="" title="Hoa hoc-Sinh hoc">Hoá học-Sinh học</option><option value="93" =""="" title="Hoach dinh-Du an">Hoạch định-Dự án</option><option value="12" =""="" title="In an-Xuat ban">In ấn-Xuất bản</option><option value="5" =""="" title="IT phan cung/mang">IT phần cứng/mạng</option><option value="74" =""="" title="IT phan mem">IT phần mềm</option><option value="16" =""="" title="Ky thuat">Kỹ thuật</option><option value="61" =""="" title="Ky thuat ung dung">Kỹ thuật ứng dụng</option><option value="81" =""="" title="KD bat dong san">KD bất động sản</option><option value="15" =""="" title="Kien truc-TK noi that">Kiến trúc-TK nội thất</option><option value="26" =""="" title="Lao dong pho thong">Lao động phổ thông</option><option value="53" =""="" title="Marketing-PR">Marketing-PR</option><option value="20" =""="" title="My pham-Trang suc">Mỹ phẩm-Trang sức</option><option value="17" =""="" title="Nong-Lam-Ngu nghiep">Nông-Lâm-Ngư nghiệp</option><option value="44" =""="" title="Nganh nghe khac">Ngành nghề khác</option><option value="22" =""="" title="Ngan hang">Ngân hàng</option><option value="62" =""="" title="Nghe thuat - dien anh">Nghệ thuật - Điện ảnh</option><option value="78" =""="" title="Nguoi giup viec">Người giúp việc</option><option value="59" =""="" title="Nhan su">Nhân sự</option><option value="96" =""="" title="Nhan vien kinh doanh">Nhân viên kinh doanh</option><option value="65" =""="" title="NV trong quan Internet">NV trông quán Internet</option><option value="18" =""="" title="Phap ly">Pháp lý</option><option value="92" =""="" title="Promotion Girl (PG)">Promotion Girl (PG)</option><option value="28" =""="" title="Quan he doi ngoai">Quan hệ đối ngoại</option><option value="14" =""="" title="Quan tri kinh doanh">Quản trị kinh doanh</option><option value="83" =""="" title="To chuc su kien-Qua tang">Tổ chức sự kiện-Quà tặng</option><option value="86" =""="" title="Thoi trang">Thời trang</option><option value="33" =""="" title="Thu cong my nghe">Thủ công mỹ nghệ</option><option value="34" =""="" title="Thuc pham-do uong">Thực phẩm-Đồ uống</option><option value="52" =""="" title="Thuc tap">Thực tập</option><option value="75" =""="" title="Thiet ke do hoa web">Thiết kế đồ hoạ web</option><option value="32" =""="" title="Thiet ke-My thuat">Thiết kế-Mỹ thuật</option><option value="91" =""="" title="Thu ky-Tro ly">Thư ký-Trợ lý</option><option value="77" =""="" title="Thuong mai dien tu">Thương mại điện tử</option><option value="36" =""="" title="Tiep thi-Quang cao">Tiếp thị-Quảng cáo</option><option value="37" =""="" title="Tu van">Tư vấn</option><option value="40" =""="" title="Vat tu-Thiet bi">Vật tư-Thiết bị</option><option value="42" =""="" title="Xuat, nhap khau">Xuất, nhập khẩu</option><option value="43" =""="" title="Y te-Duoc">Y tế-Dược</option><option value="80" =""="" title="dau tu">Đầu tư</option><option value="54" =""="" title="dien tu vien thong">Điện tử viễn thông</option></select>
                        </div>
                        <div class="clear"></div>
                    </div> 		<div class="searchItem">
                        <div class="searchGroup">Địa điểm</div>
                        <div class="searchObject">
                            <input id="txt_chon_dia_diem" class="s-textbox" type="text" onkeydown="chon_nhanh('txt_chon_dia_diem', 'hdn_dia_diem', event)" onblur="if (this.value == '')
                                            this.value = 'Tìm nhanh địa điểm...';" onfocus="if (this.value == 'Tìm nhanh địa điểm...')
                                                        this.value = '';" value="Tìm nhanh địa điểm..." title="Tìm nhanh địa điểm bằng cách nhập tên vào đây" name="txt_chon_dia_diem"><br>
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
                <div class="padTop5 padRight10" align="right"><input type="image" src="<?php echo base_url(); ?>template/home//images/btnTimkiem.gif" alt="Bấm đây để lọc theo các tiêu chí đã chọn!" title="Bấm đây để lọc theo các tiêu chí đã chọn!" onclick="javascript: return tim_ung_vien_nhanh_selectbox('0');">&nbsp;<input type="image" src="<?php echo base_url(); ?>template/home/images/btnHuyTimkiem.gif" alt="Bấm đây để hủy các tiêu thức đã lọc!" title="Bấm đây để hủy các tiêu thức đã lọc!" onclick="javascript: return huy_dieu_kien_tim_kiem();"></div>
            </form>
        </div>
        <div class="boxFacebook">
            <iframe src="http://www.facebook.com/plugins/likebox.php?id=389141851104907&amp;width=285&amp;connections=9&amp;stream=false&amp;show_faces=false&amp;header=false&amp;height=244" scrolling="no" frameborder="0" style="border:0px solid #999999; overflow:hidden; width:285px; height:244px;"></iframe>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>