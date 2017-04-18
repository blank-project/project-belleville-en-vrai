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
  <header id="hdrndx">
    <div class="logo">
      <a href="index.php"><img src="assets/images/NewLogo_BEV_wht.png" alt="affiche bev 8"></a>
    </div>
  </header>
  <?php
  require ('car.php');
  ?>
  <div class="txtbg">
    <h1>BELLEVILLE EN VRAI 8 C'est BIENTOT !</h1>   
    <h2>...Construisons 3 Jours de Fête, ENSEMBLE !</h2>
    <div class="formlinks">
      <a href="beneform.php">INSCRIPTION BENEVOLE</a>
      <a href="sportform.php">INSCRIPTION TOURNOI</a>
      <a href="partiform.php">INSCRIPTION ARTISTE</a>
    </div>
  </div>
  <?php
  require('_footer.php');
  ?>
</body>
</html>
