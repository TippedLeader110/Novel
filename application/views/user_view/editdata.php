	<div class="col-md-4 col-xs-4 col-sm-4 offset-md-4" style="border-style: solid;border-color:  orange; border-width: 15px; min-height: 400px; margin-bottom: 20px;">
		<form method="post" action="<?php echo base_url() ?>user/loginpros">
	 		<div class="title-login">
	 			<h3>Edit Your Data</h3>
	 		</div>
	 		<div class="form-login">
	 			<table border="0" style="min-width: 320px;">	 				
	 				<tr>
	 					<td colspan="2" style="padding-top: 10px;">
	 						<input type="text" name="email" class="form-control" placeholder="Email">
	 					</td>
	 				</tr>
	 				<tr>
	 					<td colspan="2" style="padding-top: 10px;">
	 						<input type="text" name="oldpass" class="form-control" placeholder="Old Password" id="myInput">
	 					</td>
	 				</tr>	 				
	 				<tr>
	 					<td colspan="2" style="padding-top: 10px;">
	 						<input type="password" name="newpass" class="form-control" placeholder="New Password" id="myInput">
	 					</td>
	 				</tr>
	 				
	 				<tr>
	 					<td style="max-width: 20px;">
	 						<div class="material-switch pull-right">
	                            <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/ onclick="myFunction()">
	                            <label for="someSwitchOptionWarning" class="label-warning"></label>
                        	</div>
	 					</td>
	 					<td style="padding-top: 12px; color: orange;">
	 						<p>Show Password</p>
	 					</td>
	 				</tr>
	 			</table>
	 			<table style="text-align: center; margin-top: 20px;" align="center" border="0">
	 				<tr>
	 					<td>
	 						<button type="submit" class="btn btn-warning" style="min-width: 150px; color: white;">Save</button>	 						
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
	 						<a href="<?php echo base_url() ?>user/profile" class="btn btn-danger"  style="min-width: 150px; color: white;">Cancel</a>
	 					</td>
	 				</tr>
	 				
	 			</table>                                                    
	 		</div>
		</form>
	</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php if ($this->session->flashdata('swel2')!=''): ?>
<script type="text/javascript">
    let timerInterval
        Swal({
          title: 'Kesalahan !',
          html: 'Username atau Password anda salah !.',
          type: 'error',
          timer: 1500,
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
          title: 'Sukses!',
          html: 'Berhasil daftar, silahkan login.',
          type: 'success',
          timer: 1500,
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