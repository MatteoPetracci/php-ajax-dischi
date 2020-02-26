<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <title></title>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <i class="fab fa-spotify"></i>
        </div>
      </nav>
    </header>
    <main>

    </main>
    <script id="entry-template" type="text/x-handlebars-template">
      <section>
        <div class="box_album">
          <img src= "{{poster}}" alt="copertina album">
          <h2>{{title}}</h2>
          <h3>{{author}}</h3>
          <h4>{{year}}</h4>
        </div>
      </section>
    </script>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
