<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TACDB</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?echo $front?>"><a href="#">Frontpage</a></li>
        <li class="dropdown <?echo $reg?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Regional views<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Continent</a></li>
            <li><a href="#">Country</a></li>
            <li><a href="#">Province</a></li>
            <li><a href="#">City</a></li>
          </ul>
        </li>
        <li class="dropdown <?echo $stat?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Statistical views<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Population</a></li>
            <li><a href="#">GDP</a></li>
            <li><a href="#">Religions</a></li>
            <li><a href="#">Governments</a></li>
          </ul>
        </li>
        <li><a href="?page=import" class="<?echo $import?>">Import data</a></li>
        <li><a href="#" class="<?echo $about?>">About</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div>
</nav>