<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Hồ sơ ứng viên | Nhu cầu việc làm</title>
            <link rel="canonical" href="http://vieclam.24h.com.vn/">
                <link rel="image_src" href="http://vieclam.24h.com.vn/upload/logo_footer/1341470265_logo-footer-viec-lam.jpg">
                    <meta name="og:image" content="http://vieclam.24h.com.vn/upload/logo_footer/1341470265_logo-footer-viec-lam.jpg">
                        <link rel="shortcut icon" href="/images/icon-viec-lam.ico">
                            <link rel="shortcut icon" href="/images/icon-viec-lam.gif" type="image/gif">
                                <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/home/css/style.css">
                                    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
                                    <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.vi.KB_OfTrUIBU.O/m=auth/exm=plus,plusone/rt=j/sv=1/d=1/ed=1/am=EQ/rs=AItRSTPWJUgwav-xa5gaGieqNAafdlwSbg/cb=gapi.loaded_1" async=""></script>
                                    <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.vi.KB_OfTrUIBU.O/m=plus,plusone/rt=j/sv=1/d=1/ed=1/am=EQ/rs=AItRSTPWJUgwav-xa5gaGieqNAafdlwSbg/cb=gapi.loaded_0" async=""></script>
                                    <script type="text/javascript" async="" src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script>
                                    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
                                    <script async="" src="http://b.scorecardresearch.com/beacon.js"></script>
                                    <script type="text/javascript" src="<?php echo base_url(); ?>template/home/js/vieclam.js"></script>
                                    </head>
                                    <body>
                                        <a name="StartOfPage"></a>
                                        <div class="container">
                                            <header id="new-header" role="banner">
                                                <div style="overflow: hidden;">
                                                    <div class="logo1">
                                                        <a href="/" title="ItWorks" rel="home" id="logo"> <img src="<?php echo base_url(); ?>template/home/images/logo.png" alt="Tìm việc làm hàng đầu - Itworks" height="100" width="380"> </a>
                                                    </div>
                                                    <div id="right-header">
                                                        <div style="overflow: hidden;">
                                                                                                                       
                                                            <div id="block-block-62" class="block block-block odd">

                                                                <div id="header-slogan">
                                                                    Trang Việc Làm Số 1 Việt Nam
                                                                </div>
                                                            </div>
                                                            <?php if ($is_login == 0) { ?>
                                                            <div id="header-user-menu" class="sigup-register-menu">
                                                                <a href="<?php echo base_url(); ?>dangnhap/index" ga_click="_gaq.push(['_trackEvent', 'Header', 'Click', 'Đăng nhập']);" title="Đăng nhập"> Đăng nhập </a>
                                                                |         
                                                                <a href="<?php echo base_url(); ?>dangky" ga_click="_gaq.push(['_trackEvent', 'Header', 'Click', 'Đăng ký']);" title="Đăng ký"> Đăng ký </a>                                                                                                                                            
                                                            </div>
                                                            <?php } else { ?> 
                                                            <div id="header-user-menu" class="sigup-register-menu" style="font-size: 12px;font-weight: inherit;">
                                                                <?php echo $this->session->userdata['u_username']; ?> <br> <a style="font-size: 12px;" href="<?php echo base_url(); ?>dangnhap/logout">Đăng xuất</a>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="new-menu">
                                                    <div class="region region-header">
                                                        <div id="block-menu" class="block-menu" role="navigation">

                                                            <ul class="menu1">
                                                                <li class="first leaf">
                                                                    <a href="/" title="" class="active">Tìm việc làm</a>
                                                                </li>
                                                                <li class="leaf">
                                                                    <a href="/viec-lam-moi" title="">Tìm ứng viên</a>
                                                                </li>
                                                                <li class="leaf">
                                                                    <a href="/tao-ho-so-tung-buoc" title="">Cẩm nang</a>
                                                                </li>
                                                                <li class="leaf">
                                                                    <span href="/tao-ho-so-tung-buoc" title="">nhucauvieclam.vn</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>

                                            <div class="ntv-qt-menu-sub" id="menu_lv2_51" style="">
                                                <ul>
                                                    <li>
                                                        <a id="a_menu_lv2_60" href="/ntv-trang-chu-quan-tri.html" title="Quản lý tìm việc" onclick="change_menu_onclick(51)">Quản lý tìm việc</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a id="a_menu_lv2_141" href="/ntv-trang-quan-tri-tin-tim-viec.html" title="Hồ sơ đã đăng" onclick="change_menu_onclick(51)">Hồ sơ đã đăng</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a id="a_menu_lv2_59" href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html" title="Tạo HS tìm việc" onclick="change_menu_onclick(51)">Tạo HS tìm việc</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a id="a_menu_lv2_142" href="/ntv-trang-quan-tri-viec-lam-da-luu.html" title="VL đã lưu" onclick="change_menu_onclick(51)">VL đã lưu</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a id="a_menu_lv2_143" href="/ntv-trang-quan-tri-viec-lam-da-ung-tuyen.html" title="VL đã ứng tuyển" onclick="change_menu_onclick(51)">VL đã ứng tuyển</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a id="a_menu_lv2_61" href="/ntv-trang-quan-tri-ho-so-ca-nhan.html" title="Hồ sơ cá nhân (CV)" onclick="change_menu_onclick(51)">Hồ sơ cá nhân (CV)</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a id="a_menu_lv2_62" href="/ntv-trang-quan-tri-thong-tin-tai-khoan.html" title="Thông tin cá nhân" onclick="change_menu_onclick(51)">Thông tin cá nhân</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a id="a_menu_lv2_63" href="/ntv-trang-quan-tri-xem-thong-bao.html" title="Thông báo" onclick="change_menu_onclick(51)">Thông báo</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <input type="hidden" name="hdn_menu_selected" id="hdn_menu_selected" value="51">
                                                <script type="text/javascript">
                                                    v_menu_selected = document.getElementById("hdn_menu_selected");
                                                    change_menu_onclick(v_menu_selected.value);
                                                </script>

                                                <?php echo $this->load->view($main_content); ?>

                                        </div>
                                        <div class="footerContainer">
                                            <div class="footer">
                                                <div class="footerMenu1">
                                                    <a href="/ntv-trang-chu-quan-tri.html" title="Quản lý tìm việc">Quản lý tìm việc</a> | <a href="/ntv-trang-quan-tri-tin-tim-viec.html" title="Hồ sơ đã đăng">Hồ sơ đã đăng</a> | <a href="/ntv-trang-quan-tri-cap-nhat-tin-tim-viec.html" title="Tạo HS tìm việc">Tạo HS tìm việc</a> | <a href="/ntv-trang-quan-tri-viec-lam-da-luu.html" title="Việc làm đã lưu">Việc làm đã lưu</a> | <a href="/ntv-trang-quan-tri-theo-doi-tin-tuyen-dung.html" title="NTD của tôi">NTD của tôi</a> | <a href="/ntv-trang-quan-tri-ho-so-ca-nhan.html" title="Hồ sơ cá nhân">Hồ sơ cá nhân</a> | <a href="/huong-dan/huong-dan-ntv-dang-ky-tai-khoan.html" title="Hướng dẫn">Hướng dẫn</a> | <a href="http://tongdaihotro.24h.com.vn/HoTroViecLam.html" title="HỖ TRỢ:1900 585 808 PHÍM 8" target="_blank">HỖ TRỢ:1900 585 808 PHÍM 8</a>
                                                </div>
                                                <div class="footerMenu2">
                                                    <a href="http://baogia.24h.com.vn/Profile_24h_com_vn.pdf" title="Giới thiệu">Giới thiệu</a>
                                                    <a href="http://baogia.24h.com.vn/" target="_blank" title="Liên hệ quảng cáo">Liên hệ quảng cáo</a>
                                                    <a href="/hoi-dap-l0.html" title="">Góp ý</a>
                                                    <a href="#StartOfPage" title="Đầu trang">Đầu trang</a>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="seoFooter">
                                                    <h3><a href="http://vieclam.24h.com.vn/" title="Tim viec lam NHANH |Vieclam 24h uy tin TIM VIEC online MIEN PHI">Tim viec lam NHANH |Vieclam 24h uy tin TIM VIEC online MIEN PHI</a></h3>
                                                </div>
                                                <div class="copyright">
                                                    <p>
                                                        © Copyright 2004-2012 24H.COM.VN, all rights reserved. Sử dụng phần mềm (L&amp;C) OCM 5.9
                                                        <br>
                                                            Cơ quan chủ quản: Công ty Cổ phần Quảng cáo Trực tuyến 24H
                                                            <br>
                                                                ® Ghi rõ nguồn "24H.COM.VN" khi bạn phát hành lại thông tin từ website này
                                                                </p>
                                                                <p></p>
                                                                <div class="clear"></div>
                                                                </div>
                                                                </div>
                                                                <script type="text/javascript" language="javascript">
                                                                    var pageTracker = _gat._getTracker("UA-8382265-5");
                                                                    pageTracker._initData();
                                                                    pageTracker._trackPageview();
                                                                </script>
                                                                <script type="text/javascript">
                                                                    display_viec_lam_da_xem();
                                                                    </script>
                                                                    <div id="fb-root" class=" fb_reset">
                                                                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                                                            <div></div>
                                                                        </div>
                                                                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                                                            <div>
                                                                                <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="http://static.ak.facebook.com/connect/xd_arbiter.php?version=28#channel=f3be8bbda8&amp;channel_path=%2F%3Ffb_xd_fragment%23xd_sig%3Df12d4b1484%26&amp;origin=http%3A%2F%2Fhcm.vieclam.24h.com.vn" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter.php?version=28#channel=f3be8bbda8&amp;channel_path=%2F%3Ffb_xd_fragment%23xd_sig%3Df12d4b1484%26&amp;origin=http%3A%2F%2Fhcm.vieclam.24h.com.vn" style="border: none;"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div><iframe name="oauth2relay419637816" id="oauth2relay419637816" src="https://accounts.google.com/o/oauth2/postmessageRelay?parent=http%3A%2F%2Fhcm.vieclam.24h.com.vn#rpctoken=321884538&amp;forcesecure=1" style="width: 1px; height: 1px; position: absolute; top: -100px;"></iframe>
                                                                    </body>
                                                                    </html>