<?php
$email = array(
    'name' => 'email',
    'id' => 'email',
    'value' => set_value('email'),
    'class' => 'W200');
$full_name = array(
    'name' => 'c_fullname',
    'id' => 'fullname',
    'value' => set_value('c_fullname'),
    'class' => 'W200');
$birthday = array(
    'name' => 'c_birthday',
    'id' => 'birthday',
    'value' => set_value('c_birthday'),
    'class' => 'W200');
$address = array(
    'name' => 'c_address',
    'id' => 'c_address',
    'value' => set_value('c_address'),
    'class' => 'W200');
$password = array(
    'name' => 'password',
    'id' => 'password',
    'value' => set_value('password'),
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'class' => 'W200',
    'placeholder' => '●●●●●●●●');
$confirm_password = array(
    'name' => 'password2',
    'id' => 'password2',
    'value' => set_value('password2'),
    'placeholder' => '●●●●●●●●',
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'class' => 'W200');
?>
<h1 class="PageTitle"> Đăng ký tài khoản Người tìm việc </h1>
<div id="content-detail">

    <div class="GridInfo">
        <div class="Content">

            <h2>Đăng ký</h2>

            <div id="login-image">
                <img src="<?php echo base_url(); ?>template/home/img/register_small.png" alt="Đăng ký">
            </div>

            <div id="login-panel">
                <span class="AlertText"> Để Tìm Việc Nhanh bạn có thể sử dụng ngay tài khoản đã đăng ký (không cần chờ email kích hoạt).
                    <br>
                    Nếu gặp bất kỳ khó khăn nào vui lòng liên hệ ngay các số hotline trên web TimViecNhanh.com để được hỗ trợ. </span>
                <div class="HighBlank"></div>

                <form enctype="multipart/form-data" id="SeekerNguoitimviecDangkyForm" method="post" accept-charset="utf-8">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST">
                    </div>
                    <table class="TableForm">
                        <tbody>
                            <tr>
                                <th>Email<span class="Mandatory">*</span></th>
                                <td>
                                    <?php 
                                    if($email)
                                    {
                                        echo form_input($email);
                                        echo form_error($email['name']);
                                        echo isset($errors[$email['name']]) ? $errors[$email['name']] : '';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Mật khẩu<span class="Mandatory">*</span></th>
                                <td>
                                    <?php 
                                     echo form_password($password);
                                     echo form_error($password['name']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Nhập lại mật khẩu<span class="Mandatory">*</span></th>
                                <td>
                                    <?php 
                                     echo form_password($confirm_password);
                                     echo form_error($confirm_password['name']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Họ tên<span class="Mandatory">*</span></th>
                                <td>
                                    <?php 
                                     echo form_input($full_name);
                                     echo form_error('c_fullname');
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày sinh<span class="Mandatory">*</span></th>
                                <td>
                                    <?php 
                                     echo form_input($birthday);
                                     echo form_error('c_birthday');
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td>
                                    <select name="c_sex" id="SeekerSeekergender">
                                        <option value="Y">Nam</option>
                                        <option value="N">Nữ</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <th>Địa chỉ<span class="Mandatory">*</span></th>
                                <td>
                                    <?php 
                                     echo form_input($address);
                                     echo form_error('c_address');
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tỉnh/Thành phố</th>
                                <td>
                                    <select name="c_city" id="SeekerSeekerbirthtown">
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
                                    </select></td>
                            </tr>
                            <tr>
                                <th>Điện thoại</th>
                                <td>
                                    <input name="c_mobi" class="W200" type="text" id="SeekerMobile">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><h3>Điều khoản sử dụng</h3>
                                    <div id="policy">
                                        <div id="policy-inner">
                                            <p>
                                                TimViecNhanh.com là chuyên trang thông tin cho người tìm việc và nhà tuyển dụng. Chúng tôi không hoạt động về dịch vụ Giới thiệu việc làm. Mọi thông tin do nhà tuyển dụng và người tìm việc tự đăng tải tại website. Chúng tôi đã cố gắng kiểm tra thông tin nhà tuyển dụng trước khi kích hoạt nội dung, Nếu phát hiện thông tin xấu hoặc doanh nghiệp đăng tải thông tin trục lợi người lao động (thu tiền hồ sơ, thu tiền đồng phục, đóng phí ... Các kiểu để người lao động phải nộp tiền) vui lòng báo ngay cho người quản trị website chúng tôi hoặc Sở Lao Động Thương Binh Xã Hội nơi địa bàn quản lý của doanh nghiệp đó về hành vi trục lợi người lao động hoặc các dịch vụ việc làm không phép. <span style="font-weight: bold;">Hãy cùng nhau xây dựng niềm tin trong một thế giới đầy ấp thông tin nhưng hơi thiếu sự tin tưởng</span>. Cam kết <span style="color: red;">Miễn Phí Vĩnh Viễn</span><span style="font-weight: bold;">đăng tin</span> tuyển dụng và tìm việc.
                                                <br>
                                                <br>
                                                Trước khi sử dụng Web TimViecNhanh.com xin vui lòng đọc trang này cẩn thận. Nếu bạn không đồng ý với những thỏa thuận và điều kiện đưa ra từ TimViecNhanh.com, xin vui lòng ngưng ngay việc truy cập và sử dụng trang TimViecNhanh.com. Nếu bạn truy cập hoặc sử dụng Web TimViecNhanh.com xem như bạn đã chấp nhận những thỏa thuận, điều kiện và những điều khoản ràng buộc của TimViecNhanh.com đưa ra.
                                                <br>
                                                <br>
                                                TimViecNhanh.com có thể thay đổi thoả thuận sử dụng theo từng thời kỳ để phù hợp với Quy Định Pháp Luật hiện hành mà không cần thông báo trước. Bạn nên vào trang này định kỳ để xem lại những thỏa thuận và điều kiện bởi những điều kiện này sẽ ràng buôc bạn và TimViecNhanh.com. Những thuật ngữ Bạn và Người sử dụng được dùng ở đây đề cập đến tất cả những cá nhân hoặc những tổ chức truy cập vào trang web này với bất cứ lý do nào. Thoả thuận sử dụng dịch vụ gồm những điều khoản sau:
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp; Tất cả nội dung trang Web TimViecNhanh.com (Như văn bản, biểu tượng, hình ảnh, hình tượng và nội dung) thuộc tài sản sở hữu trí tuệ được Pháp Luật Việt Nam bảo vệ. Bạn không được quyền dùng bất cứ biện pháp kỹ thuật nào để sao chép hoặc sửa chữa bất cứ nội dung nào tại Web TimViecNhanh.com mà không được sự đồng ý của TimViecNhanh.com.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp; Bạn không được gửi hoặc chuyển các thông tin bất hợp pháp, vi phạm thuần phong mỹ tục, đe doạ, lạm dụng, bôi nhọ, nói xấu, khiêu dâm, phi thẩm mỹ, xúc phạm hoặc bất kỳ loại thông tin không đứng đắn nào, bao gồm những việc truyền bá tin tức góp phần hay khuyến khích hành vi phạm tội, gây ra trách nhiệm pháp lý dân sự và hình sự.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp; Bạn không được đăng tin mang tính chất quảng cáo, quảng bá hình ảnh, sản phẩm, dịch vụ...
                                            </p>
                                            <p>
                                                • &nbsp; Bạn không được đăng nhiều tin có cùng một nội dung hoặc có nội dung tương tự trong thông tin tuyển dụng trên web TimViecNhanh.com.
                                            </p>
                                            <p>
                                                •&nbsp; Bạn không được đăng quá 2 tin đăng có nội dung tương tự như nhau trong cùng ngành nghề, nếu có thì phải thông báo cho TimViecNhanh.com và được TimViecNhanh.com chấp nhận bằng văn bản.
                                                <br>
                                                <br>
                                                •&nbsp; Web TimViecNhanh.com hoàn toàn không chịu trách nhiệm khi bạn gửi hay chuyển các thông tin, phần mềm, hoặc các tài liệu khác bất kỳ vi phạm hoặc xâm phạm tác quyền của những người khác, trong đó bao gồm cả tài liệu xâm phạm đến quyền&nbsp; riêng tư hoặc công khai tài liệu được bảo vệ bản quyền, tên thương mại hoặc quyền sở hữu khác, các sản phẩm phát sinh mà không được sự cho phép của người chủ sở hữu hoặc người có quyền hợp pháp. Hoặc vi phạm một quy tắc, chính sách hay hướng dẫn sử dụng nào của nhà cung cấp dịch vụ Internet và Luật Pháp Việt Nam.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; Nếu bạn tin rằng sản phẩm đăng ký bản quyền của bạn đã được tải lên, đăng tải hay sao chép lên trang web TimViecNhanh.com&nbsp; và được sử dụng trên trang web TimViecNhanh.com mà&nbsp; xâm phạm bản quyền của bạn, vui lòng thông báo cho TimViecNhanh.com bằng cách cung cấp đại lý bản quyền chỉ định với những thông tin liên quan đến việc được cung cấp bản quyền của bạn. TimViecNhanh.com sẽ ngưng toàn bộ việc đăng tải, sử dụng sản phẩm bản quyền của bạn khi đã chứng minh tính xác thực mà bạn cung cấp cho TimViecNhanh.com.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; Bạn không được quyền tuyên bố hay phát ngôn cho một doanh nghiệp, hiệp hội hay tổ chức nào khác mà bạn không được uỷ quyền tuyên bố mối liên hệ đó.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; Bạn chịu trách nhiệm lưu giữ bảo mật thông tin và mật khẩu của bạn. Bạn sẽ chịu trách nhiệm với tất cả những sử dụng hoặc đăng ký do tài khoản của bạn tạo ra. Khi bị thất lạc hoặc mất thông tin cá nhân, bạn phải liên hệ ngay với TimViecNhanh.com để được hỗ trợ.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; Khi sử dụng tiện ích của TimViecNhanh.com để đăng thông tin, bạn có quyền sửa chữa các thông tin đã đăng trong phạm vi tài khoản, thông tin của mình. Tuy nhiên, đối với các tin đăng tuyển, việc sửa chữa chỉ có giá trị và được đăng trên website sau khi ban biên tập web TimViecNhanh.com kiểm tra và kích hoạt trong thời gian bất kỳ mà không cần thông báo trước.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; Công ty sẽ không tiết lộ cho bất cứ bên thứ ba tên, địa chỉ, địa chỉ email hay số điện thoại của bạn mà không có sự đồng ý ưu tiên của bạn, ngoại trừ sự cần thiết nhất định hay thích hợp để tuân theo những luật pháp hiện hành.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; Quyền duy nhất của bạn là khi không thỏa mãn chính sách, yêu cầu, thỏa thuận và hoạt động thực tiễn của TimViecNhanh.com thì bạn vui lòng chấm dứt mọi truy cập và giao dịch của bạn với TimViecNhanh.com ngay lập tức. TimViecNhanh.com sẽ chấm dứt hoặc tạm ngưng hoạt động của bạn mà không cần bồi thường với bạn dưới hình thức nào.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; TimViecNhanh.com không thể xác định được người sử dụng thừa nhận thực về chính mình, TimViecNhanh.com không tham gia giao tiếp hoặc kiểm soát hành vi người sử dụng. Cho nên bạn không thể đòi hỏi bất cứ thiệt hại nào với TimViecNhanh.com liên quan đến người sử dụng khác.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; TimViecNhanh.com không phải là Nhà Tuyển Dụng hoặc đại diện cho bất cứ Nhà Tuyển Dụng nào khác. TimViecNhanh.com sẽ không chịu trách nhiệm với bất cứ quyết định nào trong công việc lựa chọn của bạn với mọi lý do.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; TimViecNhanh.com không chịu trách nhiệm đối với bất cứ đường liên kết đến các website nào khác từ TimViecNhanh.com. Những liên kết này chỉ mang tính chất cung cấp như một tiện ích mà TimViecNhanh.com mang lại cho bạn. TimViecNhanh.com không đại diện cho liên kết thứ ba và không đảm bảo rằng các nội dung, tính chính xác và những thiệt hại của những liên kết thứ ba mang lại cho bạn. Nếu bạn cố gắng liên kết thì đó là sự lựa chọn của bạn.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; TimViecNhanh.com không chứng nhận và đảm bảo rằng TimViecNhanh.com hay những liên kết sẽ hoạt động mà không có lỗi nào và máy chủ của nó là hoàn toàn không nhiễm virus hay những phần mềm có hại khác. Nếu bạn sử dụng dịch vụ&nbsp; TimViecNhanh.com dẫn đến nguy hại thay thế kỹ thuật hay dữ liệu riêng của bạn thì TimViecNhanh.com sẽ hoàn toàn không chịu trách nhiệm với những giá trị này.
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; <strong>TimViecNhanh.com có quyền xóa bỏ thông tin tuyển dụng, khóa tài khoản bất cứ lúc nào mà không phải báo trước hoặc bồi thường đối với các thông tin do người sử dụng cung cấp nếu thông tin đó vi phạm một trong các điều khoản sử dụng website, không trung thực, vi phạm pháp luật, không phù hợp với thuần phong mỹ tục, đạo đức xã hội, ảnh hưởng xấu đến dư luận xã hội, vi phạm hoặc không tuân thủ các qui định, thỏa thuận, hướng dẫn trên website này, hoặc theo yêu cầu của cơ quan quản lý nhà nước có thẩm quyền.</strong>
                                            </p>
                                            <p>
                                                • <strong>Khi bạn vi phạm một trong các điều nêu trên TimViecNhanh.com có quyền khóa tài khoản tạm thời hoặc khóa tài khoản vĩnh viễn mà không hoàn trả ngày sử dụng và chi phí đã thanh toán.</strong>
                                                <br>
                                                <br>
                                                •&nbsp;&nbsp;&nbsp; TimViecNhanh.com khẳng định rằng nội dung qui định truy cập TimViecNhanh.com có thể thay đổi bất cứ lúc nào tùy theo sự thay đổi của Pháp Luật và hoàn cảnh Xã Hội.
                                            </p>
                                            <p>
                                                Điều khoản kiểm duyệt tin là một phần không thể tách rời của bản thỏa thuận này: <a title="Điều khoản kiểm duyệt tin" href="http://www.timviecnhanh.com/tintuc/dieukhoankiemduyettin" target="_blank">http://www.timviecnhanh.com/tintuc/dieukhoankiemduyettin</a>
                                                <br>
                                                <br>
                                                Bản thỏa thuận này sẽ được quản lý và thực thi theo Quy Định Pháp Luật của Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam. Bản thỏa thuận này dành riêng cho bạn và TimViecNhanh.com, bạn không thể chuyển quyền và nghĩa vụ của bạn cho bất kỳ ai . Khi bạn truy cập và sử dụng mọi tiện ích và dịch vụ từ TimViecNhanh.com mặc nhiên xem như bạn đã đồng ý và ràng buộc với điều khoản sử dụng này.
                                            </p>
                                        </div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td rowspan="20" width="100"></td>
                                <td class="tbUser-row" valign="top">
                                    <input type="submit" class="button" value="Đăng ký" >
                                    </td>
                                <td rowspan="20" width="100"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="Clear"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#SeekerSeekerbirthday').datepicker({
                dateFormat: 'dd/mm/yy',
                changeMonth: true,
                changeYear: true,
                yearRange: 'c-50',
                monthNamesShort: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7']
            });
        });
    </script>
</div>