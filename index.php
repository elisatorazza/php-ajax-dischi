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

      </section>
    </main>

    <!-- Template album-->
    <script id="album-template" type="text/x-handlebars-template">
      <div class="album">
        <div class="small-container">
          <div class="poster">
            <img src="{{poster}}" alt="Logo album">
          </div>
          <h3 class="title">{{title}}</h3>
          <p class="artist">{{artist}}</p>
          <p class= "year">{{year}}</p>
        </div>
      </div>
    </script>

    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
