<?php echo $this->load->view('admin/components/page_head'); ?>
  <body>
      <div class="navbar navbar-static-top navbar-inverse">
  <div class="navbar-inner">
      <a class="brand" href="<?php echo base_url('admin/dashboard'); ?>">Title</a>
    <ul class="nav">
        <li class="active"><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
        <li><?php echo anchor('admin/page','pages');?></li>
      <li><?php echo anchor('admin/user','users');?></li>
       <li><?php echo anchor('admin/article','news article');?></li>
    </ul>
  </div>
</div>
      
      <div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="span9">
				<?php $this->load->view($subview); ?>
			</div>
			<!-- Sidebar -->
			<div class="span3">
				<section>
					<?php echo mailto('aleksandar.rc83@gmail.com', '<i class="icon-user"></i> joost@codeigniter.tv'); ?><br>
					<?php echo anchor('admin/user/logout', '<i class="icon-off"></i> logout'); ?>
				</section>
			</div>
		</div>
	</div>
        
    
    <?php echo $this->load->view('admin/components/page_tail'); ?>


