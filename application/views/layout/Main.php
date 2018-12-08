<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.css">
<head>
	<title>Novel</title>
</head>
<body>
<!-- 	<div class="jumbotron" style="margin-top: 50px;background: navy;padding-bottom: 50px;">
		<h2>LALALULUULAUTALITA</h2>
	</div> -->
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>NOVEL CLOUD</h2>
			<h3>Pedia</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php include 'nav.php'; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top: 30px">
			<?php $this->load->view($page) ?>
		</div>
	</div>
	</div>
</body>
</html>