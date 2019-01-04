<div class="col-md-12" style="margin-bottom: 100px;">
	<div class="container">
		<div class="row">
			<form method="get">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-borderless">
							<tr>
								<td style="min-width: 540px;">
									<input value="<?php echo $_GET['cari'] ?>" type="text" name="cari" class="form-control" placeholder="Search Here..">
								</td>
								<td><button class="btn">Go!</button></td>
							</tr>
						</table>
					</div>
				</div>
			</form>
		</div>
		<?php $i = 0; ?>
		<?php foreach ($sea["results"]["bindings"] as $key): ?>
		<?php if ($i==0): ?>
		<div class="row">
		<?php endif ?>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<div class="container-fluid" style="height: 300px;border-top: #e0e0d1 solid 1px;border-right: #e0e0d1 solid 1px;border-left: #e0e0d1 solid 1px;" >
							<center><a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>"><img src="<?php echo $key['c']['value'] ?>" style="height: 300px;width: 200px;"></a></center>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="container-fluid" style="margin-bottom: 20px;border-left: #e0e0d1 solid 1px;border-right: #e0e0d1 solid 1px;border-top: #e0e0d1 solid 1px;border-bottom: #e0e0d1 solid 1px; padding: 10px 10px 10px 10px;"><center>
							<a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>"><h5><?php echo $key['label']['value'] ?></h5></a></center>
						</div>
					</div>
				</div>
			</div>
		<?php $i++; ?>
		<?php if ($i==4): ?>
		</div>
		<?php $i=0; ?>
		<?php endif ?>
		<?php endforeach ?>
	</div>
</div>