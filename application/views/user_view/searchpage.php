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
			<div class="col-md-3" >
				<div class="row">
					<div class="col-md-12">
						<div class="container-fluid">
							<a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>"><img src="<?php echo $key['c']['value'] ?>" style="max-width: 100px"></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="container-fluid">
							<a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>"><h4><?php echo $key['label']['value'] ?></h4></a>
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