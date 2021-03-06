<!DOCTYPE html>

<head>
  <title></title>
  <meta charset="utf8"/>
  <link href:"reset.css" type="text/css" rel="stylesheet">
  <link href="styles/index.css" type="text/css" rel="stylesheet">
</head>

<html>
<body>
<?php include "header.php"; ?>
<div class="slidercontainer">
  <div class="slider">
    <div class="slides">
      <img src="images/slider2.jpg" class="item"
      alt="image représentant un public lors d'un concert"
      width="50%" height="900px" />
      <img src="images/slider.jpg" class="item"
      alt="image représentant un public lors d'un concert"
      width="50%" height="900px"/>
    </div>
  </div>
</div>
<div class="part1" id="part1">
  <div class="imageprésentation">
    <img src="images/encours.jpg" alt="cette section est en construction"
    width="300px" height="225px"/>
  </div>
  <div class="texte">
    <p>Bonjour, je suis un paragraphe de présentation !!</p>
  </div>
</div>
<section class="paralaxe csection">
  <div class="conteneur">
  </div>
</section>
<div class="part2" id="part2">
  <div class="album"><a class="gallerie" href="albums/concerts.php" target="_blank">
    <img src="images/aconcert.jpg" alt="photo impact concert Mademoiselle K"
    width="300px" height="225px"/></a>
  </div>
  <div class="album"><a class="gallerie" href="albums/urbain.php" target="_blank">
    <img src="images/aurbain.jpg" alt="photo impact match de foot"
    width="300px" height="225px"/></a>
  </div>
  <div class="album"><a class="gallerie" href="albums/charleville.php" target="_blank">
    <img src="images/acharleville.jpg" alt="photo impact hôtel de ville"
    width="300px" height="225px"/></a>
  </div>
  <div class="album"><a class="gallerie" href="albums/ambiance.php" target="_blank">
    <img src="images/aambiance.jpg" alt="photo impact grille métalique"
    width="300px" height="225px"/></a>
  </div>
  <div class="album">
    <img src="images/encours.jpg" alt="cette section est en construction"
    width="300px" height="225px"/>
  </div>
  <div class="album">
    <img src="images/encours.jpg" alt="cette section est en construction"
    width="300px" height="225px"/>
  </div>
  <div class="album">
    <img src="images/encours.jpg" alt="cette section est en construction"
    width="300px" height="225px"/>
  </div>
  <div class="album">
    <img src="images/encours.jpg" alt="cette section est en construction"
    width="300px" height="225px"/>
  </div>
</div>
<div class="footer">
<?php include "footer1.php"; ?>
<?php include "footer2.php"; ?>
</div>
</body>
</html>
