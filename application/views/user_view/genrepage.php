<div class="col-md-12 col-xs-12 col-sm-12">
    <div class="container-fluid"  style="margin-top: 30px;"> 
      <h4 style="color: orange;">Genre</h4>
        <hr>
      <form>
        <table style="color: orange; max-width: 800px;" class="table table-borderless">
        <tr>
          <td><a href="<?php echo base_url() ?>home/genre/a" class="" title="Genre : A"><h4 style="color: orange">A</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/b" class="" title="Genre : B"><h4 style="color: orange">B</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/c" class="" title="Genre : C"><h4 style="color: orange">C</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/d" class="" title="Genre : D"><h4 style="color: orange">D</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/e" class="" title="Genre : E"><h4 style="color: orange">E</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/f" class="" title="Genre : F"><h4 style="color: orange">F</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/g" class="" title="Genre : G"><h4 style="color: orange">G</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/h" class="" title="Genre : H"><h4 style="color: orange">H</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/i" class="" title="Genre : I"><h4 style="color: orange">I</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/j" class="" title="Genre : J"><h4 style="color: orange">J</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/k" class="" title="Genre : K"><h4 style="color: orange">K</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/l" class="" title="Genre : L"><h4 style="color: orange">L</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/m" class="" title="Genre : M"><h4 style="color: orange">M</h4></a></td>          
        </tr>
        <!---- Pemisah TR -->
        <tr>
          <td><a href="<?php echo base_url() ?>home/genre/n" class="" title="Genre : N"><h4 style="color: orange;">N</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/o" class="" title="Genre : O"><h4 style="color: orange;">O</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/p" class="" title="Genre : P"><h4 style="color: orange;">P</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/q" class="" title="Genre : Q"><h4 style="color: orange;">Q</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/r" class="" title="Genre : R"><h4 style="color: orange;">R</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/s" class="" title="Genre : S"><h4 style="color: orange;">S</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/t" class="" title="Genre : T"><h4 style="color: orange;">T</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/u" class="" title="Genre : U"><h4 style="color: orange;">U</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/v" class="" title="Genre : V"><h4 style="color: orange;">V</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/w" class="" title="Genre : W"><h4 style="color: orange;">W</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/x" class="" title="Genre : X"><h4 style="color: orange;">X</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/y" class="" title="Genre : Y"><h4 style="color: orange;">Y</h4></a></td>
          <td><a href="<?php echo base_url() ?>home/genre/z" class="" title="Genre : Z"><h4 style="color: orange;">Z</h4></a></td>
          
        </tr>
      </table>
      </form>
    <hr>
      
    </div>
    <!-- awal field konten -->
    <div class="container-fluid" style="margin-top: 30px;" id="B">      
        <div class="table-resnpon">
        <h4 style="color: orange;">A</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($a["results"]["bindings"] as $key): ?>
            <?php if ($br==0): ?>
              <tr> 
            <?php endif ?>
          <td><a href="<?php echo base_url() ?>home/deskripsi/<?php echo $key['wikiid']['value'] ?>"><?php echo $key['label']['value'] ?></a></td>
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
    <!-- Akhir Div -->
</div>