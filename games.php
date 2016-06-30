<?php $thisPage="Games"; ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
    <title>Things</title>
  </head>
  <body>
    <header><?php echo $thisPage ?></header>
      <div id='main'>
        <nav>
          <div class="nav-bar">
            <?php include 'assets/phpincludes/navigation.php';?>
          </div>
        </nav>
        <article>
          <h1></h1>
            <h2>What this is...</h2>
              <p>This portion of the page showcases a few simple games you can play.</p>
            <h2>Rock | Paper | Scissors</h2>
            <div>
              <?php include 'rps.php' ?>
            </div>
            <h2> Tic | Tac | Toe</h2>
            <div>
            <div>
        </article>
        <aside></aside>
      </div>
    <footer></footer>
  </body>
</html>