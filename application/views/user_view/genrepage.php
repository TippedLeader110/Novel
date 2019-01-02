<div class="col-md-12 col-xs-12 col-sm-12">
    <!-- awal field konten -->
    <div class="container-fluid" style="margin-top: 30px;">
        <h4 style="color: orange;">Genre</h4>
        <hr>
        <div class="table-responsive">
        <table class="table table-borderless">
        		<?php $br=0; ?>
        	<?php foreach ($r["results"]["bindings"] as $key): ?>
        		<?php if ($br==0): ?>
        			<tr>
        		<?php endif ?>
        	<td><?php echo $key['b']['value'] ?></td>
        	<?php $br++; ?>
	        	<?php if ($br=='7'): ?>
	        	</tr>
	        	<?php $br=0; ?>
	        	<?php endif ?>
        	<?php endforeach ?>
        </table>
        </div>
    </div>
    <!-- Akhir Div -->
</div>