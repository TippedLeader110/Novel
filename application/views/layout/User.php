<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/style.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
<!-- custom CSS -->
<!-- Or open base url/source/css/style.css-->
<style type="text/css">


</style>

<head>
	<title>Novel</title>
</head>
<body>
	<?php include 'brand.php'; ?>	
	<div class="row">
		<div class="col-md-12">
			<?php include 'nav.php'; ?>
			<?php include 'sub-nav2.php'; ?>
		</div>
	</div>
	<div class="row" style="margin-top: 30px;">		
			<?php $this->load->view($page); ?>
	</div>	
</body>
</html>