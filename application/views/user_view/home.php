<div class="col-md-8 col-xs-8 col-sm-8">
    <div class="container">
        <h4 style="color: orange;">Random Books</h4>
        <hr>
        <div class="row">
          <?php $u=0; ?>
          <?php foreach ($dat["results"]["bindings"] as $key): ?>
            <?php $u++; ?>

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
            <!--<div style="background-color: white; border-style: solid; border-width: 5px; border-color: orange; min-height: 260px; max-height: 260px; min-width: 210px; min-width: 210px;">
              <a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>" title="<?php echo $key['wikiid']['value'] ?>" class="thumb">
                  <img class="" src="<?php echo $key['c']['value'] ?>" alt="<?php echo $key['wikiid']['value'] ?>" style=" max-height: 250px; min-width: 200px; padding: 5px 5px 5px 5px;">
              </a> 
            </div>
                -->                   
          </div>
        </div>
    </div>
            
          <?php endforeach ?>
          <?php echo $u ?>
</div> 
</div>
        <!-- Akhir field konten -->
<!-- Akhir Div -->