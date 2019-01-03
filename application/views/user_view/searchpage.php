<div class="col-md-12">
	<div class="container">
		<div class="row"><form method="get">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-borderless">
						<tr>
							<td><input value="<?php echo $_GET['cari'] ?>" type="text" name="cari" class="form-control"></td>
							<td><button class="btn">Cari</button></td>
						</tr>
					</table>
				</div>
			</div></form>
		</div>
		<?php $i = 0; ?>
		<?php foreach ($sea["results"]["bindings"] as $key): ?>
		<?php if ($i==0): ?>
		<div class="row">
		<?php endif ?>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<div class="container-fluid" style="height: 300px;border-top: black solid 1px;border-right: black solid 1px;border-left: black solid 1px;" >
							<center><a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>"><img src="<?php echo $key['c']['value'] ?>" style="height: 300px;width: 200px;"></a></center>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="container-fluid" style="margin-bottom: 20px;border-left: black solid 1px;border-right: black solid 1px;border-bottom: black solid 1px"><center>
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