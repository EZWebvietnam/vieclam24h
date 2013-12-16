<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HUTECH DEVLOPERS CLUB ADMINISTRATOR</title>
        <link rel="shortcut icon" href="<?php echo base_url();?>template/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?php echo base_url();?>template/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>template/admin/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url();?>template/admin/assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <!--fonts-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!--ace styles-->

        <link rel="stylesheet" href="<?php echo base_url();?>template/admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>template/admin/assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>template/admin/assets/css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
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
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-group"></i>
                            <span class="menu-text"> Users </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo base_url();?>admin/userlist/listuser">
                                    <i class="icon-double-angle-right"></i>
                                    List Users
                                </a>
                            </li>
                            <?php 
                        if($this->session->userdata['user_id']==1)
                        {
                        ?>
                            <li>
                                <a href="<?php echo base_url();?>admin/userlist/add">
                                    <i class="icon-double-angle-right"></i>
                                    Add User
                                </a>
                            </li>
                        <?php }?>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-credit-card"></i>
                            <span class="menu-text"> Category </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo base_url();?>admin/cate/listcate">
                                    <i class="icon-double-angle-right"></i>
                                    List Cates
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/cate/add">
                                    <i class="icon-double-angle-right"></i>
                                    Add Cate
                                </a>
                            </li>

                            
                        </ul>
                    </li>    
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class=" icon-book"></i>
                            <span class="menu-text"> Post </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo base_url();?>admin/post/listpost">
                                    <i class="icon-double-angle-right"></i>
                                    List Posts
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/post/add">
                                    <i class="icon-double-angle-right"></i>
                                    Add Post
                                </a>
                            </li>

                            
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/mem/list_mem" class="dropdown-toggle">
                            <i class="  icon-coffee"></i>
                            <span class="menu-text"> Member </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo base_url();?>admin/mem/list_mem">
                                    <i class="icon-double-angle-right"></i>
                                    List Members
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-double-angle-right"></i>
                                    Add Member
                                </a>
                            </li>

                            
                        </ul>
                    </li>  
                    <li>
                        <a href="<?php echo base_url();?>admin/mem/list_mem" class="dropdown-toggle">
                            <i class="icon-envelope"></i>
                            <span class="menu-text"> Send Mail </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo base_url();?>admin/sendmail/mail_log">
                                    <i class="icon-double-angle-right"></i>
                                    Mail Log
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/sendmail/send">
                                    <i class="icon-double-angle-right"></i>
                                    Send Mail
                                </a>
                            </li>

                            
                        </ul>
                    </li>  
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="menu-text"> Money </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <i class="icon-double-angle-right"></i>
                                    List
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-double-angle-right"></i>
                                    Add
                                </a>
                            </li>

                            
                        </ul>
                    </li>  
 
                </ul><!--/.nav-list-->

                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left"></i>
                </div>
            </div>

            <div class="main-content">
                
                <div class="page-content">
                    

                    <div class="row-fluid">
                        <div class="span12">
                            <!--PAGE CONTENT BEGINS-->
                            <?php echo $this->load->view($main_content);?>

                            <div id="modal-table" class="modal hide fade" tabindex="-1">
                                <div class="modal-header no-padding">
                                    <div class="table-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        Results for "Latest Registered Domains"
                                    </div>
                                </div>

                                <div class="modal-body no-padding">
                                    <div class="row-fluid">
                                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                            <thead>
                                                <tr>
                                                    <th>Domain</th>
                                                    <th>Price</th>
                                                    <th>Clicks</th>

                                                    <th>
                                                        <i class="icon-time bigger-110"></i>
                                                        Update
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#">ace.com</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td>3,330</td>
                                                    <td>Feb 12</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">base.com</a>
                                                    </td>
                                                    <td>$35</td>
                                                    <td>2,595</td>
                                                    <td>Feb 18</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">max.com</a>
                                                    </td>
                                                    <td>$60</td>
                                                    <td>4,400</td>
                                                    <td>Mar 11</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">best.com</a>
                                                    </td>
                                                    <td>$75</td>
                                                    <td>6,500</td>
                                                    <td>Apr 03</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">pro.com</a>
                                                    </td>
                                                    <td>$55</td>
                                                    <td>4,250</td>
                                                    <td>Jan 21</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-small btn-danger pull-left" data-dismiss="modal">
                                        <i class="icon-remove"></i>
                                        Close
                                    </button>

                                    <div class="pagination pull-right no-margin">
                                        <ul>
                                            <li class="prev disabled">
                                                <a href="#">
                                                    <i class="icon-double-angle-left"></i>
                                                </a>
                                            </li>

                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>

                                            <li>
                                                <a href="#">2</a>
                                            </li>

                                            <li>
                                                <a href="#">3</a>
                                            </li>

                                            <li class="next">
                                                <a href="#">
                                                    <i class="icon-double-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--PAGE CONTENT ENDS-->
                        </div><!--/.span-->
                    </div><!--/.row-fluid-->
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
            window.jQuery || document.write("<script src='<?php echo base_url();?>template/admin/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>

        <!--<![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo base_url();?>template/admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

        <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="<?php echo base_url();?>template/admin/assets/js/bootstrap.min.js"></script>

        <!--page specific plugin scripts-->

        <script src="<?php echo base_url();?>template/admin/assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>template/admin/assets/js/jquery.dataTables.bootstrap.js"></script>

        <!--ace scripts-->

        <script src="<?php echo base_url();?>template/admin/assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>template/admin/assets/js/ace.min.js"></script>

        <!--inline scripts related to this page-->

        <script type="text/javascript">
            $(function() {
                var oTable1 = $('#sample-table-2').dataTable({
                    "aoColumns": [
                        {"bSortable": false},
                        null, null, null, null, null,
                        {"bSortable": false}
                    ]});


                $('table th input:checkbox').on('click', function() {
                    var that = this;
                    $(this).closest('table').find('tr > td:first-child input:checkbox')
                            .each(function() {
                        this.checked = that.checked;
                        $(this).closest('tr').toggleClass('selected');
                    });

                });


                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }
            })
        </script>
    </body>
</html>
