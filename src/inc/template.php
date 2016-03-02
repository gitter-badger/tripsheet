<?php 

function print_template($content, $head = false) {
global $barc_lang;
global $barc_available_langs;
global $barc_args;
global $barc_page;

?>
<!DOCTYPE html>
<html lang="<?php echo $barc_lang; ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>TripSheet.org</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/bootstrap/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/style.css">

<?php if($head != false) echo $head; ?>

</head>
<body>
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL; ?>">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="topnav">
          <ul class="nav navbar-nav">
            <li<?php if($barc_page == 'home') echo ' class="active"'; ?>><a href="<?php echo URL; ?>"><span class="glyphicon glyphicon-home"></span> <?php echo t("nav.home"); ?></a></li>
            <li<?php if($barc_page == 'profile') echo ' class="active"'; ?>><a href="<?php echo URL; ?>/profile"><span class="glyphicon glyphicon-list-alt"></span> <?php echo t("nav.profile"); ?></a></li>
            <li<?php if($barc_page == 'checklist') echo ' class="active"'; ?>><a href="<?php echo URL; ?>/checklist"><span class="glyphicon glyphicon-check"></span> <?php echo t("nav.checklist"); ?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><?php echo t("nav.more"); ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo URL; ?>/privacy"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> <?php echo t("nav.privacy"); ?></a></li>
                <li><a href="<?php echo URL; ?>/contribute"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo t("nav.contribute"); ?></a></li>
                <li><a href="<?php echo URL; ?>/about"><span class="glyphicon glyphicon-console" aria-hidden="true"></span> <?php echo t("nav.about"); ?></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <?php echo t("lang.".$barc_lang); ?><span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <?php 
                  foreach($barc_available_langs as $lang) {
                    echo '<li><a href="' . BASE_URL . '/' .  $lang . '/' . implode($barc_args) . '">' . t('lang.'.$lang) . '</a></li>';
                  }
                ?>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <?php echo $content; ?>
    
  </div>

  <footer class="footer">
    <div class="container">
      <p class="text-muted">Copyright &copy; 2016 Erik Hofer &bull; <a href="#">Impressum</a> &bull; <a href="#">Datenschutz</a></p>
    </div>
  </footer>

  <script src="<?php echo BASE_URL; ?>/assets/jquery/jquery-1.12.1.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php     
}

 ?>