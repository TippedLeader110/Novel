<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/source/css/multi-carousel.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="multi-carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	function sukses()
	{
		let timerInterval
		Swal({
		  title: 'Sukses!',
		  html: 'Berhasil login.',
		  type: 'success',
		  timer: 1000,
		  onBeforeOpen: () => {
		    Swal.showLoading()
		    timerInterval = setInterval(() => {
		      Swal.getContent().querySelector('strong')
		        .textContent = Swal.getTimerLeft()
		    }, 100)
		  },
		  onClose: () => {
		    clearInterval(timerInterval)
		  }
		}).then((result) => {
		  if (
		    // Read more about handling dismissals
		    result.dismiss === Swal.DismissReason.timer
		  ) {
		    console.log('I was closed by the timer')
		  }
		})
	}
</script>
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
			<?php include 'sub-nav.php'; ?>

		</div>
	</div>
	<div class="row" style="margin-top: 30px;">		
			<?php $this->load->view($genre); ?>
			<?php $this->load->view($kanan); ?>	
	</div>
	<div class="row">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>