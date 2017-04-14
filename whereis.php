<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>BELLEVILLE EN VRAI</title>
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="assets/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/menustyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
</head>
  <body>
    <?php
      require('_menu.php')
     ?>
    <div class="txtbg">
      <div class="">
      <h1>BELLEVILLE EN VRAI C'EST ICI  <i class="fa fa-map-marker" aria-hidden="true" id="ou"></i></h1>
      </div>
      <?php
        require('_carto.php');
       ?>
    </div>
    <div class="">
      <?php
      require('_footer.php')
      ?>
    </div>
  </body>
</html>