<div class="navbar-xs">
  <div class="navbar navbar-default navbar-xs navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php?p=main" class="navbar-brand">Night Sky</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <?php

          if (Page::startsWith($p,"main")) {
             echo '<li class="active"><a href="index.php?p=main">Home</a></li>';
          } else {
            echo '<li><a href="index.php?p=main">Home</a></li>';
          }

          if (Page::startsWith($p,"contact")) {
             echo '<li class="active"><a href="index.php?p=contact">Contacts</a></li>';
          } else {
            echo '<li><a href="index.php?p=contact">Contacts</a></li>';
          }

           ?>
          <!--
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Sandstone <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="download">
              <li><a href="http://jsfiddle.net/bootswatch/m0nv7a0o/">Open Sandbox</a></li>
              <li class="divider"></li>
              <li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
              <li><a href="./bootstrap.css">bootstrap.css</a></li>
              <li class="divider"></li>
              <li><a href="./variables.less">variables.less</a></li>
              <li><a href="./bootswatch.less">bootswatch.less</a></li>
              <li class="divider"></li>
              <li><a href="./_variables.scss">_variables.scss</a></li>
              <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>
            </ul>
          </li> -->
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php?p=logout">Logout</a></li>
        </ul>

      </div>
    </div>
  </div>
</div>
