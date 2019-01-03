<div class="col-md-8 col-xs-8 col-sm-8">
    <div class="container">
        <h4 style="color: orange;">Title</h4>
        <hr>
          <?php $u=0; ?>
          <?php foreach ($dat["results"]["bindings"] as $key): ?>
            <?php $u++; ?>
            <div class="carousel-item col-md-3  active">
               <div class="panel panel-default">
                  <div class="panel-thum
                  bnail">
                    <a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>" title="<?php echo $key['wikiid']['value'] ?>" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="<?php echo $key['c']['value'] ?>" alt="<?php echo $key['wikiid']['value'] ?>">
                    </a>
                  </div>
                </div>
            </div>
            
          <?php endforeach ?>
          <?php echo $u ?>
    </div>
</div>    
        <!-- Akhir field konten -->
<!-- Akhir Div -->