<div class="col-md-12 col-xs-12 col-sm-12">
    <div class="container-fluid"  style="margin-top: 30px;"> 
      <h4 style="color: orange;">Genre</h4>
        <hr>
      <form>
        <table style="color: orange; max-width: 800px;" class="table table-borderless">
        <tr>
          <td><a href="#A" class="" title="Genre : A"><h4 style="color: orange">A</h4></a></td>
          <td><a href="#B" class="" title="Genre : B"><h4 style="color: orange">B</h4></a></td>
          <td><a href="#C" class="" title="Genre : C"><h4 style="color: orange">C</h4></a></td>
          <td><a href="#D" class="" title="Genre : D"><h4 style="color: orange">D</h4></a></td>
          <td><a href="#E" class="" title="Genre : E"><h4 style="color: orange">E</h4></a></td>
          <td><a href="#F" class="" title="Genre : F"><h4 style="color: orange">F</h4></a></td>
          <td><a href="#G" class="" title="Genre : G"><h4 style="color: orange">G</h4></a></td>
          <td><a href="#H" class="" title="Genre : H"><h4 style="color: orange">H</h4></a></td>
          <td><a href="#I" class="" title="Genre : I"><h4 style="color: orange">I</h4></a></td>
          <td><a href="#J" class="" title="Genre : J"><h4 style="color: orange">J</h4></a></td>
          <td><a href="#K" class="" title="Genre : K"><h4 style="color: orange">K</h4></a></td>
          <td><a href="#L" class="" title="Genre : L"><h4 style="color: orange">L</h4></a></td>
          <td><a href="#M" class="" title="Genre : M"><h4 style="color: orange">M</h4></a></td>          
        </tr>
        <!---- Pemisah TR -->
        <tr>
          <td><a href="#N" class="" title="Genre : N"><h4 style="color: orange;">N</h4></a></td>
          <td><a href="#O" class="" title="Genre : O"><h4 style="color: orange;">O</h4></a></td>
          <td><a href="#P" class="" title="Genre : P"><h4 style="color: orange;">P</h4></a></td>
          <td><a href="#Q" class="" title="Genre : Q"><h4 style="color: orange;">Q</h4></a></td>
          <td><a href="#R" class="" title="Genre : R"><h4 style="color: orange;">R</h4></a></td>
          <td><a href="#S" class="" title="Genre : S"><h4 style="color: orange;">S</h4></a></td>
          <td><a href="#T" class="" title="Genre : T"><h4 style="color: orange;">T</h4></a></td>
          <td><a href="#U" class="" title="Genre : U"><h4 style="color: orange;">U</h4></a></td>
          <td><a href="#V" class="" title="Genre : V"><h4 style="color: orange;">V</h4></a></td>
          <td><a href="#W" class="" title="Genre : W"><h4 style="color: orange;">W</h4></a></td>
          <td><a href="#X" class="" title="Genre : X"><h4 style="color: orange;">X</h4></a></td>
          <td><a href="#Y" class="" title="Genre : Y"><h4 style="color: orange;">Y</h4></a></td>
          <td><a href="#Z" class="" title="Genre : Z"><h4 style="color: orange;">Z</h4></a></td>
          
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
    <div class="container-fluid" style="margin-top: 30px;" id="B">      
        <div class="table-resnpon">
        <h4 style="color: orange;">B</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($b["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="C">      
        <div class="table-resnpon">
        <h4 style="color: orange;">C</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($c["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="D">      
        <div class="table-resnpon">
        <h4 style="color: orange;">D</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($d["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="E">      
        <div class="table-resnpon">
        <h4 style="color: orange;">E</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($e["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="F">      
        <div class="table-resnpon">
        <h4 style="color: orange;">F</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($f["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="G">      
        <div class="table-resnpon">
        <h4 style="color: orange;">G</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($g["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="H">      
        <div class="table-resnpon">
        <h4 style="color: orange;">H</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($h["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="I">      
        <div class="table-resnpon">
        <h4 style="color: orange;">I</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($i["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="J">      
        <div class="table-resnpon">
        <h4 style="color: orange;">J</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($j["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="K">      
        <div class="table-resnpon">
        <h4 style="color: orange;">K</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($k["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="L">      
        <div class="table-resnpon">
        <h4 style="color: orange;">L</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($l["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="M">      
        <div class="table-resnpon">
        <h4 style="color: orange;">M</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($m["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="N">      
        <div class="table-resnpon">
        <h4 style="color: orange;">N</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($n["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="O">      
        <div class="table-resnpon">
        <h4 style="color: orange;">O</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($o["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="P">      
        <div class="table-resnpon">
        <h4 style="color: orange;">P</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($p["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="Q">      
        <div class="table-resnpon">
        <h4 style="color: orange;">Q</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($q["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="R">      
        <div class="table-resnpon">
        <h4 style="color: orange;">R</h4>
        <hr>
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
    <div class="container-fluid" style="margin-top: 30px;" id="S">      
        <div class="table-resnpon">
        <h4 style="color: orange;">S</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($s["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="T">      
        <div class="table-resnpon">
        <h4 style="color: orange;">T</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($t["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="U">      
        <div class="table-resnpon">
        <h4 style="color: orange;">U</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($u["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="V">      
        <div class="table-resnpon">
        <h4 style="color: orange;">V</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($v["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="W">      
        <div class="table-resnpon">
        <h4 style="color: orange;">W</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($w["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="X">      
        <div class="table-resnpon">
        <h4 style="color: orange;">X</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($x["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="Y">      
        <div class="table-resnpon">
        <h4 style="color: orange;">Y</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($y["results"]["bindings"] as $key): ?>
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
    <div class="container-fluid" style="margin-top: 30px;" id="Z">
        <div class="table-resnpon">
        <h4 style="color: orange;">Z</h4>
        <hr>
        <table class="table table-borderless">
            <?php $br=0; ?>
          <?php foreach ($z["results"]["bindings"] as $key): ?>
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