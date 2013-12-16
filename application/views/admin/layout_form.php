<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
         <title>HUTECH DEVLOPERS CLUB ADMINISTRATOR</title>
         <link rel="shortcut icon" href="<?php echo base_url();?>template/favicon.ico" type="image/x-icon" />
        <meta name="description" content="and Validation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?php echo base_url() ?>template/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>template/admin/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/assets/css/select2.css" />

        <!--fonts-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!--ace styles-->

        <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/assets/css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/assets/css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-leaf"></i>
                            HUTECH DEVELOPERS CLUB ADMINISTRATOR
                        </small>
                    </a><!--/.brand-->

                    <ul class="nav ace-nav pull-right">
                        


                       

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo base_url();?>file/uploads/avatar/<?php echo $this->session->userdata['file']?>" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $this->session->userdata['username']?>
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                               

                                <li>
                                    <a href="<?php echo base_url();?>admin/userlist/change_pass">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo base_url();?>admin/index/logout">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!--/.ace-nav-->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
<div class="main-container container-fluid">
    <a class="menu-toggler" id="menu-toggler" href="#">
        <span class="menu-text"></span>
    </a>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-small btn-success">
                    <i class="icon-signal"></i>
                </button>

                <button class="btn btn-small btn-info">
                    <i class="icon-pencil"></i>
                </button>

                <button class="btn btn-small btn-warning">
                    <i class="icon-group"></i>
                </button>

                <button class="btn btn-small btn-danger">
                    <i class="icon-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!--#sidebar-shortcuts-->

        <ul class="nav nav-list">
                     <li>
						<a href="<?php echo base_url();?>admin/userlist/listuser">
							<i class="icon-group"></i>
							<span class="menu-text"> Users </span>
						</a>
                    </li>
                     <li>
						<a href="<?php echo base_url();?>admin/cate/listcate">
							<i class="icon-credit-card"></i>
							<span class="menu-text"> Cates </span>
						</a>
                    </li>  
                    <li>
						<a href="<?php echo base_url();?>admin/post/listpost">
							<i class="icon-book"></i>
							<span class="menu-text"> Posts </span>
						</a>
                    </li>  
                    <li>
						<a href="<?php echo base_url();?>admin/mem/list_mem">
							<i class="icon-coffee"></i>
							<span class="menu-text"> Member </span>
						</a>
                    </li> 
                    <li>
						<a href="<?php echo base_url();?>admin/sendmail/mail_log">
							<i class="icon-envelope"></i>
							<span class="menu-text"> Mail Log </span>
						</a>
                    </li>  
                    <li>
						<a href="#">
							<i class="icon-briefcase"></i>
							<span class="menu-text"> Money </span>
						</a>
                    </li>  
 
                </ul><!--/.nav-list-->
        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left"></i>
        </div>
    </div>
        <?php $this->load->view($main_content);?>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>

<!--basic scripts-->

<!--[if !IE]>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!--<![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='<?php echo base_url() ?>template/admin/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?php echo base_url() ?>template/admin/assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<script src="<?php echo base_url() ?>template/admin/assets/js/fuelux/fuelux.wizard.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/js/additional-methods.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/js/bootbox.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/js/ace.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url() ?>template/admin/assets/js/ace-elements.min.js"></script>


<!--inline scripts related to this page-->

<script type="text/javascript">
    $(function() {

        $('[data-rel=tooltip]').tooltip();

        $(".select2").css('width', '150px').select2({allowClear: true})
                .on('change', function() {
            $(this).closest('form').validate().element($(this));
        });


        var $validation = false;



        $('#skip-validation').removeAttr('checked').on('click', function() {

        });



        //documentation : http://docs.jquery.com/Plugins/Validation/validate


        $.mask.definitions['~'] = '[+-]';
        $('#phone').mask('(999) 999-9999');

        jQuery.validator.addMethod("phone", function(value, element) {
            return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
        }, "Enter a valid phone number.");

        $('#validation_form').validate({
            errorElement: 'span',
            errorClass: 'help-inline',
            focusInvalid: false,
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password2: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                name: {
                    required: true
                },
                phone: {
                    required: true,
                    phone: 'required'
                },
                url: {
                    required: true,
                    url: true
                },
                comment: {
                    required: true
                },
                state: {
                    required: true
                },
                platform: {
                    required: true
                },
                subscription: {
                    required: true
                },
                gender: 'required',
                agree: 'required'
            },
            messages: {
                email: {
                    required: "Please provide a valid email.",
                    email: "Please provide a valid email."
                },
                password: {
                    required: "Please specify a password.",
                    minlength: "Please specify a secure password."
                },
                subscription: "Please choose at least one option",
                gender: "Please choose gender",
                agree: "Please accept our policy"
            },
            invalidHandler: function(event, validator) { //display error alert on form submit   
                $('.alert-error', $('.login-form')).show();
            },
            highlight: function(e) {
                $(e).closest('.control-group').removeClass('info').addClass('error');
            },
            success: function(e) {
                $(e).closest('.control-group').removeClass('error').addClass('info');
                $(e).remove();
            },
            errorPlacement: function(error, element) {
                if (element.is(':checkbox') || element.is(':radio')) {
                    var controls = element.closest('.controls');
                    if (controls.find(':checkbox,:radio').length > 1)
                        controls.append(error);
                    else
                        error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if (element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if (element.is('.chzn-select')) {
                    error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
                }
                else
                    error.insertAfter(element);
            },
            submitHandler: function(form) {
            },
            invalidHandler: function(form) {
            }
        });




        $('#modal-wizard .modal-header').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
    })
</script>

<script>window.jQuery || document.write('<script src="<?php echo base_url()?>/assets/js/jquery/jquery-1.8.0.min.js"><\/script>')</script>
<script src="<?php echo base_url()?>assets/js/jquery/uploadify_31/jquery.uploadify-3.1.min.js" type="text/javascript"></script>

<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#userfile').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '<?php echo base_url()?>assets/js/jquery/uploadify_31/uploadify.swf',
				'uploader' : '<?php echo base_url()?>upload/do_upload',
                                'debug':false,
                                'auto':true,
                                'cancelImg': '<?php echo base_url()?>assets/javascript/jquery/uploadify_31/uploadify-cancel.png',
                                'fileTypeExts':'*.jpg;*.bmp;*.png;*.tif',
                                'fileTypeDesc':'Image Files (.jpg,.bmp,.png,.tif)',
                                'fileSizeLimit':'2MB',
                                'fileObjName':'userfile',
                                'buttonText':'Select Photo(s)',
                                'multi':true,
                                'removeCompleted':false,
                                'onUploadError' : function(file, errorCode, errorMsg, errorString) {
                                    alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
                                },
                                 'onUploadSuccess':function(file){
                                    document.getElementById('file').value=file.name
                                 }
			});
		});
	</script>
        
</body>
</html>
