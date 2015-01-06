<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        Webpage Testinator
        <small class="sr-only">Ghostlab App</small>
      </a>

    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
          <?php
            foreach ($assets as $id => $asset)
            {
              $name = array_key_exists("shortname", $asset) ? $asset["shortname"] : $asset["name"];
              echo("<li><a href=\"#$id\">$name</a></li>");
            }
          ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
