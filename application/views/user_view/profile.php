<div class="col-md-12" style="margin-bottom: 100px;">
	<!-- ini header col -->
	<div class="row">
		<!-- Awal COL -->
		<div class="col-md-3" style=" min-height: 55px;background: orange; margin-left: 15px;">
			<div class="row">
				<div class="bg-icon-profile">
					<img src="<?php echo base_url() ?>img/profile.png" class="icon-profile">
				</div>
				<div class="title-profile">
					Profile
				</div>
			</div>
		</div>
		<!-- AKhir COL -->
		<!-- Awal COL -->
		<div class="col-md-8" style=" min-height: 55px;background: orange;margin-left: 30px;">
			<div class="row">
				<div class="bg-icon-profile">
					<img src="<?php echo base_url() ?>img/rate.png" class="icon-profile">
				</div>
				<div class="title-profile">
					Your Favourite
				</div>
			</div>
		</div>
		<!-- AKhir COL -->			
	</div>
	<!-- ini contain col -->	
	<div class="row">
		<!-- Awal COL -->
		<div class="col-md-3" style=" min-height: 300px;background: #fff5e6; margin-left: 15px;  border-width: 1px; border-color: grey;">			
			
			<div class="container" style="background: white; min-height: 40px; max-width: 200px; margin-top: 20px; border-width: 1px; border-color: #d6d6c2; border-style: solid;">
				<table width="160" border="0">
					<tr>
						<td style="width: 30px;">
							<img src="<?php echo base_url() ?>img/profile.png" style="max-width: 25px; max-height: 25px; padding-top: 7px;">
							
						</td>
						<td style="padding-top: 5px; max-width: 140px; font-size: 17px; font-weight: 500;" class="text-truncate"">
							<span title="<?php echo $this->session->user ?>"><?php echo $this->session->user ?></span>							
						</td>
					</tr>
				</table>
			</div>
			<div class="container" style="background: white; min-height: 40px; max-width: 200px; margin-top: 5px; border-width: 1px; border-color: #d6d6c2; border-style: solid;">
				<table width="160" border="0">
					<tr>
						<td style="width: 30px;">
							<img src="<?php echo base_url() ?>img/email.png" style="max-width: 25px; max-height: 25px; padding-top: 7px;">
							
						</td>
						<td style="padding-top: 5px;padding-left: 10px; max-width: 140px; font-size: 17px; font-weight: 500;" class="text-truncate">
							<?php $this->db->where('username', $this->session->user);
							$do = $this->db->get('users')->result();
							foreach ($do as $key => $rr) {
							 } ?>
							<span title="<?php echo $rr->email ?>"><?php echo $rr->email ?></span>
						</td>
					</tr>
				</table>
			</div>
			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">
				<a href="<?php echo base_url() ?>user/editdata" class="btn" style="color: white; font-weight: 700; background: orange;">Edit Your Data</a>
			</div>
		</div>
		<!-- AKhir COL -->
		<!-- Awal COL -->
		<div class="col-md-8" style=" min-height: 300px;background: #fff5e6;margin-left: 30px; border-width: 1px; border-color: grey; padding-top: 20px; font-weight: 500; font-size: 18px;">
			<h5 style="color: orange;">Tips :</h5>
			<h6 style="color: orange;">You can Unfavourite Book by Click the Book then Click <i>Delete from favourite</i> Button</h6>
			<br>
			<div class="row">
				<?php include 'a.php'; ?>
				<?php foreach ($da as $key => $v): ?>
				<?php 
				$re = $this->defmodel->trans($v->wikiid);
				$dsat = json_decode(request($re),true);
				foreach ($dsat["results"]["bindings"] as $key) {
					$haha = $key['label']['value'];
				}
				 ?>

				<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="container-fluid" style="height: 300px;border-top: #e0e0d1 solid 1px;border-right: #e0e0d1 solid 1px;border-left: #e0e0d1 solid 1px;" >
							<center><a href="<?php echo base_url() ?>home/deskripsi/<?php echo $v->wikiid ?>"><img src="<?php echo $key['img']['value'] ?>" style="height: 300px;width: 180px;"></a></center>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">					
						<div class="container-fluid" style="margin-bottom: 20px;border-left: #e0e0d1 solid 1px;border-right: #e0e0d1 solid 1px;border-top: #e0e0d1 solid 1px;border-bottom: #e0e0d1 solid 1px; padding: 10px 10px 10px 10px;"><center>
							<a href="<?php echo base_url() ?>home/deskripsi/<?php echo $v->wikiid ?>"><h6><?php echo $key['label']['value'] ?></h6></a></center>
						</div>
					</div>
				</div>
			</div>
					
				<?php endforeach ?>
			</div>
		</div>
		<!-- AKhir COL -->	
	</div>
</div>