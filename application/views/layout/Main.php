<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.css">
<head>
	<title>Repository</title>
</head>
<body>
	<div class="jumbotron" style="margin-top: 50px;background: navy;padding-bottom: 50px;">
		<h2>LALALULUULAUTALITA</h2>
	</div>
	<div class="row">
		<?php include 'nav.php'; ?>
		<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top: 90px">
			<?php $this->load->view($page) ?>
		</div>
	</div>
</body>
</html>