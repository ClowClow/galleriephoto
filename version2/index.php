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
<main>
  <section class="slider_container">
    <div class="slider">
      <div class="slider_slides">
        <img src="images/slider2.jpg" class="slider_slides_item"
        alt="image représentant un public lors d'un concert"
        width="50%" height="900px"/>
        <img src="images/slider.jpg" class="slider_slides_item"
        alt="image représentant un public lors d'un concert"
        width="50%" height="900px"/>
      </div>
    </div>
  </section>

  <section class="presentation">
    <div class="presentation_image">
      <img src="images/encours.jpg" alt="cette section est en construction"
      width="300px" height="225px"/>
    </div>
    <div class="presentation_text">
      <p>Bonjour, je suis un paragraphe de présentation !!</p>
    </div>
  </section>

  <section class="paralaxe">
  </section>

  <section class="gallery">
    <div class="gallery_album_container">
      <a class="gallery_album_link" href="albums/concerts.php" target="_blank">
        <img src="images/aconcert.jpg" alt="photo impact concert Mademoiselle K"
        width="300px" height="225px"/>
      </a>
    </div>
    <div class="gallery_album_container">
      <a class="gallery_album_link" href="albums/urbain.php" target="_blank">
        <img src="images/aurbain.jpg" alt="photo impact match de foot"
        width="300px" height="225px"/>
      </a>
    </div>
    <div class="gallery_album_container">
      <a class="gallery_album_link" href="albums/charleville.php" target="_blank">
        <img src="images/acharleville.jpg" alt="photo impact hôtel de ville"
        width="300px" height="225px"/>
      </a>
    </div>
    <div class="gallery_album_container">
      <a class="gallery_album_link" href="albums/ambiance.php" target="_blank">
        <img src="images/aambiance.jpg" alt="photo impact grille métalique"
        width="300px" height="225px"/>
      </a>
    </div>
    <div class="gallery_album_container">
      <img src="images/encours.jpg" alt="cette section est en construction"
      width="300px" height="225px"/>
    </div>
    <div class="gallery_album_container">
      <img src="images/encours.jpg" alt="cette section est en construction"
      width="300px" height="225px"/>
    </div>
    <div class="gallery_album_container">
      <img src="images/encours.jpg" alt="cette section est en construction"
      width="300px" height="225px"/>
    </div>
    <div class="gallery_album_container">
      <img src="images/encours.jpg" alt="cette section est en construction"
      width="300px" height="225px"/>
    </div>
  </section>
</main>
<section class="footer">
<?php include "footer1.php"; ?>
<?php include "footer2.php"; ?>
</section>
</body>
</html>
