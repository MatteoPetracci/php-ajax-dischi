<?php include 'server.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
      <?php foreach ($database as $value) { ?>
          <div class="box_album">
            <img src="<?php echo $value['poster'] ?>" alt="copertina album">
            <h2><?php echo $value['title']; ?></h2>
            <h3><?php echo $value['author']; ?></h3>
            <h4><?php echo $value['year']; ?></h4>
          </div>
      <?php } ?>

    </main>
  </body>
</html>
