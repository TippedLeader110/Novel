<?php 
$this->db->where('username', $this->session->user);
$da = $this->db->get('users')->result();
foreach ($da as $key => $value) {
	$daa = $value->id_users;
}
$this->db->where('user', $daa);
$d = $this->db->get('fav')->num_rows();
 ?>
<?php foreach ($dsat["results"]["bindings"] as $key){} ?>
<?php 
		$uri = $uri;
		$requestURL = $this->defmodel->getauth($uri);
		// echo $requestURL;
		$data = json_decode(request($requestURL),true);
		foreach ($data["results"]["bindings"] as $key2){} 
		
		
 ?>
<div class="row" style="margin-bottom: 145px;">
	<div class="col-md-3">
		<div class="bg-img-deskr">
			<img src="<?php echo $key['img']['value'] ?>" class="img-deskr">
		</div>
		<div style="min-height: 50px; background: #fff5e6; max-width: 210px; padding: 5px 5px 5px 5px; margin-top: 10px;">
			<table width="200" border="0">
				<tr>
					<td>
						<b>Author</b>
					</td>
					<td style="padding-left: 5px; ">
						<?php echo $key2['auth']['value']?>
					</td>
				</tr>
				<tr>
					<td>
						<b>Genre</b>
					</td>
					<td style="padding-left: 5px; ">
						<?php echo $key['genre']['value']?>						
					</td>
				</tr>
			</table>
		</div>
	</div>

	<!-- -->
	<div class="col-md-9">
		<div style="min-width: 400px; min-height: 50px; margin-left: -20px;" class="deskr-title">
			<?php echo $key['label']['value']; ?>
		</div>
		<div style="min-width: 400px; min-height: 100px; margin-top: 20px; margin-left: -20px;" class="deskr-subtitle">
			<?php echo $key['ab']['value']; ?>
		</div>
		
		<div style="min-width: 50px; max-width: 250px; background: #fff5e6; margin-left: -20px; padding: 10px 10px 10px 10px; margin-top: 10px; border-style: solid; border-width: 1px; border-color: #ebebe0;">
			<table border="0">
				<?php if ($d==0): ?>
				<tr>
					<td><form name="form" method="post" action="<?php echo base_url() ?>home/simpan">
						<a href="#">
							<input type="text" hidden value="<?php echo $uri ?>" name="fav">
							<img onclick="form.submit()" src="<?php echo base_url() ?>img/add.png" style="max-width: 50px; max-height: 50px;">
						</a>

					</td>
					<td>Add to Your Favourite!</td>
				</tr></form>
				<tr>
					
				</tr>
				<?php endif ?>
				<?php if ($d!=0): ?>
				<tr>
					<td><form name="form" method="post" action="<?php echo base_url() ?>home/del">
						<a href="#">
							<input type="text" hidden value="<?php echo $uri ?>" name="fav">
							<img onclick="form.submit()" src="<?php echo base_url() ?>img/cek.png" style="max-width: 50px; max-height: 50px;">
						</a>

					</td>
					<td>Telah ditambahkan ke favorite!</td>
				</tr></form>
				<tr>
					
				</tr>
				<?php endif ?>
			</table>
		</div>
	</div>
</div>
<?php if ($this->session->flashdata('swel2')!=''): ?>
<script type="text/javascript">
    let timerInterval
        Swal({
          title: 'Sukses !',
          html: 'Buku telah di faforitkan !.',
          type: 'success',
          timer: 1800,
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
</script>
<?php endif ?>
<?php if ($this->session->flashdata('swel')!=''): ?>
<script type="text/javascript">
    let timerInterval
        Swal({
          title: 'Kesalahan !',
          html: 'Login terlebih dahulu !.',
          type: 'error',
          timer: 1800,
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
</script>
<?php endif ?>
<?php if ($this->session->flashdata('swel4')!=''): ?>
<script type="text/javascript">
    let timerInterval
        Swal({
          title: 'Dihapus !',
          html: 'Buku telah dihapus dari favorite !.',
          type: 'success',
          timer: 1800,
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
</script>
<?php endif ?>