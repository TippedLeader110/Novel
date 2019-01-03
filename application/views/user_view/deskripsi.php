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
				<tr>
					<td>
						<a href="#">
							<img src="<?php echo base_url() ?>img/add.png" style="max-width: 50px; max-height: 50px;">
						</a>

					</td>
					<td>Add to Your Favourite!</td>
				</tr>
				<tr>
					
				</tr>
			</table>
		</div>
	</div>
</div>
