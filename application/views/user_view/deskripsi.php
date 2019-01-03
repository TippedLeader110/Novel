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
	</div>

	<!-- -->
	<div class="col-md-9">
		<div style="min-width: 400px; min-height: 100px; margin-left: -20px;" class="deskr-title">
			<?php echo $key['label']['value']; ?>
		</div>
		<div style="min-width: 400px; min-height: 100px; margin-top: 20px; margin-left: -20px;" class="deskr-subtitle">
			<?php echo $key['ab']['value']; ?>
		</div>
	</div>
</div>