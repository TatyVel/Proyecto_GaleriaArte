	<meta charset="UTF-8">
	<title><?=$page_title?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/mdb/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/mdb/css/mdb.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/mdb/css/addons/datatables.min.css">
	<?php $this->load->view('template/header_view'); ?>
	<?php $this->load->view($view,$data_view); ?>
	<?php $this->load->view('template/footer_view'); ?>	