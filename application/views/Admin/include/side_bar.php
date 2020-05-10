<script src="<?php echo base_url().'assets/admin/js/jquery.dcjqaccordion.2.7.js'?>"></script>
<script src="<?php echo base_url().'assets/admin/js/scripts.js'?>"></script>



<?php  if($this->session->userdata('isLogin') == 'yes'){   ?>
    <header class="header fixed-top clearfix">
            <!--logo start-->
		    <div class="brand">
                <a href="<?php echo base_url('Admin/dashboard'); ?>" class="logo">
                    <img style="padding-left: 45px; margin-top: -15px; width: 85%;" src="<?php echo base_url().'assets/admin/images/logo.png'; ?>">
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
           
	        <div class="top-nav clearfix ">
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                       <li><a href="<?php echo base_url('Admin/logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
                    </li>
                </ul>
			</div>
           </header>
		<!--sidebar start-->
         <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="<?php echo base_url('Admin/dashboard'); ?>">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
						
						 <li>
                            <a class="" href="<?php echo base_url('admin-article'); ?>">
                               <i class="fa fa-rss-square"></i>
                                <span>Add Article</span>
                            </a>
                        </li>
						
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <?php }else{  redirect(base_url('Admin/login')); } ?>