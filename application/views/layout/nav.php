<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: orange;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 18px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $home ?>" style="margin-right: 10px;">
        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo $genre ?>" style="margin-right: 10px;">
        <a class="nav-link" href="<?php echo base_url() ?>home/genre">Genre <span class="sr-only">(current)</span></a>
      </li>
      
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <select class="form-control">
        <option value="all">All</option>
        <option value="1">option 1</option>
        <option value="2">option 2</option>
        <option value="3">option 3</option>
      </select>
      <input class="form-control" type="search" placeholder="Search.." aria-label="Search">
      <button class="btn btn-default my-2 my-sm-0" type="submit">Go!</button>
    </form>

  </div>
</nav>