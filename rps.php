<link rel="stylesheet" type="text/css" href="assets/stylesheets/rps.css">
<div class="rps-container">
<?php 
$weapons = array("rock" =>"asdf", "paper" => "fdsa", "scissors" => "dfsa"); 
$weapon = $_GET["weapon"];

function outcome($weapon){
  if ($weapon == "asdfdfsa"){ ?>
    <div class="outcome">
      <?php echo "ROCK WINS!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "dfsaasdf") { ?>
    <div class="outcome">
      <?php echo "ROCK WINS!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "fdsaasdf") { ?>
    <div class="outcome">
      <?php echo "PAPER WINS!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "asdffdsa") { ?>
    <div class="outcome">
      <?php echo "PAPER WINS!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "dfsafdsa") { ?>
    <div class="outcome">
      <?php echo "SCISSORS WINS!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "fdsadfsa") { ?>
    <div class="outcome">
      <?php echo "SCISSORS WINS!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "asdfasdf") { ?>
    <div class="outcome">
      <?php echo "DRAW!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "fdsafdsa") { ?>
    <div class="outcome">
      <?php echo "DRAW!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
  elseif ($weapon == "dfsadfsa") { ?>
    <div class="outcome">
      <?php echo "DRAW!";?><br>
        <a href="games.php">RESET</a>
    </div>
  <?php }
}

switch ($weapon) {
      case "asdf" || "fdsa" || "dfsa":
          foreach($weapons as $key => $val) { ?>
            <div class="rps-link">
              <a href="games.php?weapon=<?php echo $_GET["weapon"]; ?><?php echo $val; ?>">
                <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
              </a>
            </div>
          <?php }
          break;
      default:
          foreach($weapons as $key => $val) { ?>
            <div class="rps-link">
              <a href="games.php?weapon=<?php echo $val; ?>">
                <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
              </a>
            </div>
          <?php } 
}

outcome($weapon);
?>
</div>






