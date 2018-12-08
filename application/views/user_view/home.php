<div class="col-md-11" style="margin-left: 50px">
			<div class="row"> 	
				<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-borderless"> 


			<?php $i=0; foreach ($data as $key => $v) {?>
				<?php $i++; ?>
				<?php if ($i==1) {?>
				<tr>
				<?php } ?>
					<td>
						<?php echo $v->judul ?>	
					</td>
					<td>

					</td>
					<td>
						
					</td>
				<?php if ($i==3) { echo "</tr>";$i=0; }?>	
				
			<?php } ?>
				</div>
				</div>
				</table>
			</div>	
</div>