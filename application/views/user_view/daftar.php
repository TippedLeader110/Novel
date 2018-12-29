<!--
<div class="row">
	<div class="col-md-4 offset-md-4" style="border-style: solid;border-color:  #ff6600; border-width: 15px;">
		<form method="post" action="http:/project/main/daftar2">
		<table class="table table-borderless">
			<tr>
				<th><h4 align="center">Sign Up</h4></th>
			</tr>
			<tr>
				<th>Email :</th>
			</tr>
			<tr>
				<th><input type="email" name="email" class="form-control"></th>
			</tr>
			<tr>
				<th>Username :</th>
			</tr>	
			<tr>
				<th><input type="text" name="user" class="form-control"></th>
			</tr>
			<tr>
				<th>Password :</th>
			</tr>
			<tr>
				<th><input type="Password" name="pass" class="form-control"></th>
			</tr>
			<th><center><button type="submit" name="submit" class="btn" style="border-radius: 0px; background: #ff6600;"><div style="color: white;">Create Account</div></button></center></th>
		</table>
		</form>
	</div>
</div>
-->
	<div class="col-md-4 col-xs-4 col-sm-4 offset-md-4" style="border-style: solid;border-color:  orange; border-width: 15px; min-height: 400px;">
		<form method="post" action="#">
	 		<div class="title-login">
	 			<h3>Sign Up</h3>
	 		</div>
	 		<div class="form-login">
	 			<table border="0" style="min-width: 320px;">
	 				<tr>
	 					<td colspan="2">
	 						<input type="text" name="email" class="form-control" placeholder="Email">
	 					</td>
	 				</tr>
	 				<tr>
	 					<td colspan="2" style="padding-top: 10px;">
	 						<input type="username" name="user" class="form-control" placeholder="Username">
	 					</td>
	 				</tr>
	 				<tr>
	 					<td colspan="2" style="padding-top: 10px;">
	 						<input type="password" name="pass" class="form-control" placeholder="Password" id="myInput">
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
	 						<button type="submit" class="btn btn-warning" style="min-width: 150px; color: white;">Sign Up</button>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td align="center" style="padding-top: 20px;">
	 						<p style="color: orange; max-height: 10px;">Already have an Account?</p>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td align="center">
	 						<a href="<?php base_url() ?>login" style="max-height: 40px;"><h6 style="color: #ff9900;" title="Register an Account">Login</h6></a>
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
