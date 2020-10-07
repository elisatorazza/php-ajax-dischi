<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Discs</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <img src="img/logo-spotify.png" alt="Logo Spotify">
      </div>
    </header>
    <main>
      <section class="grid">
        <?php foreach ($database as $album) {?>
        <div class="album">
          <div class="small-container">
            <div class="poster">
              <img src="<?php echo $album["poster"]?>" alt="">
            </div>
            <h3 class="title"><?php echo $album["title"] ?></h3>
            <p class="artist"><?php echo $album["author"] ?></p>
            <p class= "year"><?php echo $album["year"] ?></p>
          </div>
        </div>
        <?php } ?>
      </section>
    </main>
  </body>
</html>
