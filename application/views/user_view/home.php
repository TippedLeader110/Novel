<div class="col-md-12">
  <div class="container">
    <div class="row">
      <?php $u=0; ?>
      <?php foreach ($dat["results"]["bindings"] as $key): ?>
      
      <?php $id = rand(0,27) ?>

      <!-- konten -->
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-12">
            <div class="container-fluid" style="height: 300px;border-top: #e0e0d1 solid 1px;border-right: #e0e0d1 solid 1px;border-left: #e0e0d1 solid 1px;" >
              <center><a href="<?php echo base_url() ?>home/deskripsi/<?php echo $dat["results"]["bindings"][$id]['wikiid']['value'] ?>"><img src="<?php echo $dat["results"]["bindings"][$id]['c']['value'] ?>" style="height: 300px;width: 200px;"></a></center>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="container-fluid" style="margin-bottom: 20px;border-left: #e0e0d1 solid 1px;border-right: #e0e0d1 solid 1px;border-top: #e0e0d1 solid 1px;border-bottom: #e0e0d1 solid 1px; padding: 10px 10px 10px 10px;"><center>
              <a href="<?php echo base_url() ?>home/deskripsi/<?php echo $dat["results"]["bindings"][$id]['wikiid']['value'] ?>"><h5><?php echo $dat["results"]["bindings"][$id]['label']['value'] ?></h5></a></center>
            </div>
          </div>
        </div>
      </div>
      <?php $u++; ?>
      <?php if ($u==8): ?>
        <?php break; ?>
      <?php endif ?>
<?php endforeach ?>
    </div>
  </div>
</div>


<!--
<div class="col-md-12 col-xs-12 col-sm-12" style="background-color: grey">z
    <div class="container">
        <h4 style="color: orange;">Random Books</h4>
        <hr>
    </div>
      <div class="row">
          <?php $u=0; ?>
          <?php foreach ($dat["results"]["bindings"] as $key): ?>
            <?php $u++; ?>
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
          <div class="col-md-10">
            <div class="row">
              <div class="bg-image-konten">
                <a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>"  title="<?php echo $key['wikiid']['value'] ?>">
                  <img style="height: 300px;width: 200px;" src="<?php echo $key['c']['value'] ?>" alt="<?php echo $key['wikiid']['value'] ?>" alt="<?php echo $key['wikiid']['value'] ?>" class="image-konten">
                </a>                
              </div>
              <div class="keterangan">
                lorem lorem desu
              </div>
            </div>               
          </div>
        
    </div>
</div>
          <?php endforeach ?>
          <?php echo $u ?>
       --> 
        <!-- Akhir field konten -->
<!-- Akhir Div -->