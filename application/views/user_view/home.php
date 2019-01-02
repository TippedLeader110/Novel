<div class="col-md-8 col-xs-8 col-sm-8">
    <div class="container">
        <h4 style="color: orange;">Title</h4>
        <hr>
        <div class="row">
           <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <?php $u=0; ?>
          <?php foreach ($dat["results"]["bindings"] as $key): ?>
            <?php $u++; ?>
            <div class="carousel-item col-md-3  active">
               <div class="panel panel-default">
                  <div class="panel-thum
                  bnail">
                    <a href="<?php $str ?>" title="<?php echo $key['wikiid']['value'] ?>" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="<?php echo $key['c']['value'] ?>" alt="<?php echo $key['wikiid']['value'] ?>">
                    </a>
                  </div>
                </div>
            </div>
            
          <?php endforeach ?>
          <?php echo $u ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        </div>
    </div>
        <!-- Akhir field konten -->
</div>
<!-- Akhir Div -->