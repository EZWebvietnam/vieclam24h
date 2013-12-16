<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
         <title>HUTECH DEVLOPERS CLUB ADMINISTRATOR</title>
            <link rel="shortcut icon" href="<?php echo base_url();?>template/favicon.ico" type="image/x-icon" />
        <meta name="description" content="3 styles with inline editable feature" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?php echo base_url(); ?>template/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>template/admin/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/jquery-ui-1.10.3.custom.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/jquery.gritter.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/select2.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/bootstrap-editable.css" />

        <!--fonts-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!--ace styles-->

        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo base_url(); ?>template/admin/assets/css/ace-ie.min.css" />
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
                                        <i class="icon-cog"></i>
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
 
                </ul>

                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs">
                    

                    <div class="nav-search" id="nav-search">
                        <form class="form-search" />
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="icon-search nav-search-icon"></i>
                        </span>
                        </form>
                    </div><!--#nav-search-->
                </div>

                <div class="page-content">
                    
                    <?php $this->load->view($main_content);?>
                </div><!--/.page-content-->

                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="icon-cog bigger-150"></i>
                    </div>

                    <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-class="default" value="#438EB9" />#438EB9
                                    <option data-class="skin-1" value="#222A2D" />#222A2D
                                    <option data-class="skin-2" value="#C6487E" />#C6487E
                                    <option data-class="skin-3" value="#D0D0D0" />#D0D0D0
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div>
                            <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
                            <label class="lbl" for="ace-settings-header"> Fixed Header</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>
                    </div>
                </div><!--/#ace-settings-container-->
            </div><!--/.main-content-->
        </div><!--/.main-container-->

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
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/bootstrap.min.js"></script>

        <!--page specific plugin scripts-->

        <!--[if lte IE 8]>
          <script src="<?php echo base_url(); ?>template/admin/assets/js/excanvas.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.gritter.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/bootbox.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.easy-pie-chart.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.hotkeys.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/bootstrap-wysiwyg.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/date-time/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/fuelux/fuelux.spinner.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/x-editable/bootstrap-editable.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/x-editable/ace-editable.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.maskedinput.min.js"></script>

        <!--ace scripts-->

        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

        <!--inline scripts related to this page-->

        <script type="text/javascript">
            $(function() {

                //editables on first profile page
                $.fn.editable.defaults.mode = 'inline';
                $.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
                $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>' +
                        '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';

                //editables 
                $('#username').editable({
                    type: 'text',
                    name: 'username'
                });

                var countries = [];
                $.each({"CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
                    countries.push({id: k, text: v});
                });

                var cities = [];
                cities["CA"] = [];
                $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function(k, v) {
                    cities["CA"].push({id: v, text: v});
                });
                cities["IN"] = [];
                $.each(["Delhi", "Mumbai", "Bangalore"], function(k, v) {
                    cities["IN"].push({id: v, text: v});
                });
                cities["NL"] = [];
                $.each(["Amsterdam", "Rotterdam", "The Hague"], function(k, v) {
                    cities["NL"].push({id: v, text: v});
                });
                cities["TR"] = [];
                $.each(["Ankara", "Istanbul", "Izmir"], function(k, v) {
                    cities["TR"].push({id: v, text: v});
                });
                cities["US"] = [];
                $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"], function(k, v) {
                    cities["US"].push({id: v, text: v});
                });

                var currentValue = "NL";
                $('#country').editable({
                    type: 'select2',
                    value: 'NL',
                    source: countries,
                    success: function(response, newValue) {
                        if (currentValue == newValue)
                            return;
                        currentValue = newValue;

                        var source = (!newValue || newValue == "") ? [] : cities[newValue];
                        $('#city').editable('destroy').editable({
                            type: 'select2',
                            source: source
                        }).editable('setValue', null);
                    }
                });

                $('#city').editable({
                    type: 'select2',
                    value: 'Amsterdam',
                    source: cities[currentValue]
                });



                $('#signup').editable({
                    type: 'date',
                    format: 'yyyy-mm-dd',
                    viewformat: 'dd/mm/yyyy',
                    datepicker: {
                        weekStart: 1
                    }
                });

                $('#age').editable({
                    type: 'spinner',
                    name: 'age',
                    spinner: {
                        min: 16, max: 99, step: 1
                    }
                });

                //var $range = document.createElement("INPUT");
                //$range.type = 'range';
                $('#login').editable({
                    type: 'slider', //$range.type == 'range' ? 'range' : 'slider',
                    name: 'login',
                    slider: {
                        min: 1, max: 50, width: 100
                    },
                    success: function(response, newValue) {
                        if (parseInt(newValue) == 1)
                            $(this).html(newValue + " hour ago");
                        else
                            $(this).html(newValue + " hours ago");
                    }
                });

                $('#about').editable({
                    mode: 'inline',
                    type: 'wysiwyg',
                    name: 'about',
                    wysiwyg: {
                        //css : {'max-width':'300px'}
                    },
                    success: function(response, newValue) {
                    }
                });



                // *** editable avatar *** //
                try {//ie8 throws some harmless exception, so let's catch it

                    //it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
                    //so let's have a fake appendChild for it!
                    if (/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))
                        Image.prototype.appendChild = function(el) {
                        }

                    var last_gritter
                    $('#avatar').editable({
                        type: 'image',
                        name: 'avatar',
                        value: null,
                        image: {
                            //specify ace file input plugin's options here
                            btn_choose: 'Change Avatar',
                            droppable: true,
                            /**
                             //this will override the default before_change that only accepts image files
                             before_change: function(files, dropped) {
                             return true;
                             },
                             */

                            //and a few extra ones here
                            name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                            max_size: 110000, //~100Kb
                            on_error: function(code) {//on_error function will be called when the selected file has a problem
                                if (last_gritter)
                                    $.gritter.remove(last_gritter);
                                if (code == 1) {//file format error
                                    last_gritter = $.gritter.add({
                                        title: 'File is not an image!',
                                        text: 'Please choose a jpg|gif|png image!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                } else if (code == 2) {//file size rror
                                    last_gritter = $.gritter.add({
                                        title: 'File too big!',
                                        text: 'Image size should not exceed 100Kb!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                }
                                else {//other error
                                }
                            },
                            on_success: function() {
                                $.gritter.removeAll();
                            }
                        },
                        url: function(params) {
                            // ***UPDATE AVATAR HERE*** //
                            //You can replace the contents of this function with examples/profile-avatar-update.js for actual upload


                            var deferred = new $.Deferred

                            //if value is empty, means no valid files were selected
                            //but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
                            //so we return just here to prevent problems
                            var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                            if (!value || value.length == 0) {
                                deferred.resolve();
                                return deferred.promise();
                            }


                            //dummy upload
                            setTimeout(function() {
                                if ("FileReader" in window) {
                                    //for browsers that have a thumbnail of selected image
                                    var thumb = $('#avatar').next().find('img').data('thumb');
                                    if (thumb)
                                        $('#avatar').get(0).src = thumb;
                                }

                                deferred.resolve({'status': 'OK'});

                                if (last_gritter)
                                    $.gritter.remove(last_gritter);
                                last_gritter = $.gritter.add({
                                    title: 'Avatar Updated!',
                                    text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                    class_name: 'gritter-info gritter-center'
                                });

                            }, parseInt(Math.random() * 800 + 800))

                            return deferred.promise();
                        },
                        success: function(response, newValue) {
                        }
                    })
                } catch (e) {
                }



                //another option is using modals
                $('#avatar2').on('click', function() {
                    var modal =
                            '<div class="modal hide fade">\
                                        <div class="modal-header">\
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                                <h4 class="blue">Change Avatar</h4>\
                                        </div>\
                                        \
                                        <form class="no-margin">\
                                        <div class="modal-body">\
                                                <div class="space-4"></div>\
                                                <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                        </div>\
                                        \
                                        <div class="modal-footer center">\
                                                <button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
                                                <button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
                                        </div>\
                                        </form>\
                                </div>';


                    var modal = $(modal);
                    modal.modal("show").on("hidden", function() {
                        modal.remove();
                    });

                    var working = false;

                    var form = modal.find('form:eq(0)');
                    var file = form.find('input[type=file]').eq(0);
                   
                    form.on('submit', function() {
                       

                        
                        form.find('button').attr('disabled', 'disabled');
                        form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");

                        var deferred = new $.Deferred;
                        working = true;
                        deferred.done(function() {
                            form.find('button').removeAttr('disabled');
                           
                            form.find('.modal-body > :last-child').remove();

                            modal.modal("hide");

                            var thumb = file.next().find('img').data('thumb');
                            if (thumb)
                                $('#avatar2').get(0).src = thumb;

                            working = false;
                        });


                        setTimeout(function() {
                            deferred.resolve();
                        }, parseInt(Math.random() * 800 + 800));

                        return false;
                    });

                });



                //////////////////////////////
                $('#profile-feed-1').slimScroll({
                    height: '250px',
                    alwaysVisible: true
                });

                $('.profile-social-links > a').tooltip();

                $('.easy-pie-chart.percentage').each(function() {
                    var barColor = $(this).data('color') || '#555';
                    var trackColor = '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 72;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size / 10),
                        animate: false,
                        size: size
                    }).css('color', barColor);
                });

                ///////////////////////////////////////////

                //show the user info on right or left depending on its position
                

                ///////////////////////////////////////////
               
                $('.input-mask-phone').mask('(999) 999-9999');



                ////////////////////
                //change profile
                $('[data-toggle="buttons-radio"]').on('click', function(e) {
                    var target = $(e.target);
                    var which = parseInt($.trim(target.text()));
                    $('.user-profile').parent().hide();
                    $('#user-profile-' + which).parent().show();
                });
            });
            window.onerror = function(){
   return true;
}
        </script>
        
    </body>
</html>
