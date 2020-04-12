<?php
$pages = array();
$pages["home.php"] = "Home";
$pages["cases.php"] = "Cases";
$pages["watwedoen.php"] = "Wat we doen";
$pages["overons.php"] = "Over ons";
$pages["contact.php"] = "Contact";
?>

<!DOCTYPE html>

<head>
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />
  <nav class="navbar fixed-top navbar-expand">
  <div class="container">
    <ul id="gn-menu" class="gn-menu-main">
    <img class="kerk" src="images/vdlpkerkje.png">
      <li class="gn-trigger">
        <a class="gn-icon gn-icon-menu"></a>
        <nav class="gn-menu-wrapper">
          <div class="gn-scroller">
            <ul class="gn-menu">
              <?php foreach ($pages as $url => $title) : ?>
                <li><a <?php if ($url === $activePage) : ?>id="gn-menu-active" <?php endif; ?> href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </nav>
      </li>
    </ul>
  </div>
  </nav>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/gnmenu.js"></script>
  <script>
    new gnMenu(document.getElementById("gn-menu"));
  </script>
</head>

</html>