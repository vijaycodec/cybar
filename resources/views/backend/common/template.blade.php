<?php $this->load->view("common/header_info"); ?>
@include('backend.common.header_info')
<?php $this->load->view("common/sidebar"); ?>
<!-- @include('backend.common.sidebar') -->
 <!-- <?php
	// $controller = $this->uri->segment(1);
	// $function = $this->uri->segment(2);
	// $second_para = $function!=""?"/".$function:'';
	// $url = $controller.$second_para;
	
?>   -->
<aside class="app-aside app-aside-expand-md app-aside-light">
     <!-- .aside-content -->
     <div class="aside-content">
       <!-- .aside-header -->
       <header class="aside-header d-block d-md-none">
         <!-- .btn-account -->
         <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
       </header><!-- /.aside-header -->
       <!-- .aside-menu -->
       <div class="aside-menu overflow-hidden">
         <!-- .stacked-menu -->
         <nav id="stacked-menu" class="stacked-menu">
           <!-- .menu -->
           <ul class="menu">
                <li class="menu-item ">
                   <a href="" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                 </li>
                 <li class="menu-item ">
                   <a href="" class="menu-link"><span class="menu-icon"><i class="fa fa-user"></i></span> <span class="menu-text">User Details</span></a>
                 </li>
                 <li class="menu-item">
                   <a href="" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Course Category Details</span></a>
                 </li>
                 <li class="menu-item ">
                   <a href="<?= base_url('testimonials');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Testimonials Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'blogs' || $url == 'blogs/add' || $url == 'blogs/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('blogs');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Blogs Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'our_services' || $url == 'our_services/add' || $url == 'our_services/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('our_services');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Our Services Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'corporate_training' || $url == 'corporate_training/add' || $url == 'corporate_training/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('corporate_training');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Corporate Training Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'resources' || $url == 'resources/add' || $url == 'resources/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('resources');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Resources Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'event' || $url == 'event/add' || $url == 'event/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('event');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Events Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'template_l3' || $url == 'template_l3/add' || $url == 'template_l3/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('template_l3');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Template l3 Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'course' || $url == 'course/add' || $url == 'course/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('course');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">l3 Category Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'sub_category' || $url == 'sub_category/add' || $url == 'sub_category/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('sub_category');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">l3 Sub Category Details</span></a>
                 </li>
                 <li class="menu-item <?php if($url == 'content_data' || $url == 'content_data/add' || $url == 'content_data/edit_details'){echo 'has-active';}?>">
                   <a href="<?= base_url('content_data');?>" class="menu-link"><span class="menu-icon"><i class="menu-icon oi oi-browser"></i></span> <span class="menu-text">Content l3 Details</span></a>
                 </li>
           </ul><!-- /.menu -->
         </nav><!-- /.stacked-menu -->
       </div><!-- /.aside-menu -->
       <!-- Skin changer -->
       <footer class="aside-footer border-top p-2">
         <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
       </footer><!-- /Skin changer -->
     </div><!-- /.aside-content -->
   </aside><!-- /.app-aside -->
   <!-- .app-main -->
<main class="app-main">
<?php $this->load->view($main_content); ?>
@include('backend.common.footer')
<?php $this->load->view("common/footer"); ?>
@include('backend.common.footer')