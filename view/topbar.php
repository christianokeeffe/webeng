<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="?page=index">TACDB</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?echo $front?>"><a href="?page=index">Frontpage</a></li>
        <li class="dropdown <?echo $reg?>">
          <a href="?page=index" class="dropdown-toggle" data-toggle="dropdown">Regional views<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?page=index">Continent</a></li>
            <li><a href="?page=countryList">Country</a></li>
            <li><a href="?page=index">Province</a></li>
            <li><a href="?page=index">City</a></li>
          </ul>
        </li>
        <li class="dropdown <?echo $stat?>">
          <a href="?page=index" class="dropdown-toggle" data-toggle="dropdown">Statistical views<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?page=index">Population</a></li>
            <li><a href="?page=index">GDP</a></li>
            <li><a href="?page=index">Religions</a></li>
            <li><a href="?page=index">Governments</a></li>
          </ul>
        </li>
        <li class="<?echo $imp?>"><a href="?page=import" >Import data</a></li>
        <li class="<?echo $rdfGen?>"><a href="?page=rdfGenerate" >Export to RDF</a></li>
        <li class="<?echo $viewRDF?>"><a href="?page=viewRDF" >View RDF</a></li>
        <li><a href="?page=index" class="<?echo $about?>">About</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div>
</nav>

<div class="col-md-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    <a href=#>ADD</a>
    more panel content
  </div>
</div>
</div>