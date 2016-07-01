<link rel="stylesheet" type="text/css" href="assets/stylesheets/rps.css">
<div class="rps-container">
<?php 
$weapons = array("rock" => "rock.php", "paper" => "paper.php", "scissors" => "scissors.php"); 
$weapon = $_GET["weapon"];

function outcome($weapon){
  if ($weapon == "rockscissors"){ ?>
    <div class="outcome">
      <?php echo "ROCK WINS!";?>
    </div>
  <?php }
  elseif ($weapon == "scissorsrock") { ?>
    <div class="outcome">
      <?php echo "ROCK WINS!";?>
    </div>
  <?php }
  elseif ($weapon == "paperrock") { ?>
    <div class="outcome">
      <?php echo "PAPER WINS!";?>
    </div>
  <?php }
  elseif ($weapon == "rockpaper") { ?>
    <div class="outcome">
      <?php echo "PAPER WINS!";?>
    </div>
  <?php }
  elseif ($weapon == "scissorspaper") { ?>
    <div class="outcome">
      <?php echo "SCISSORS WINS!";?>
    </div>
  <?php }
  elseif ($weapon == "paperscissors") { ?>
    <div class="outcome">
      <?php echo "SCISSORS WINS!";?>
    </div>
  <?php }
  elseif ($weapon == "rockrock") { ?>
    <div class="outcome">
      <?php echo "DRAW!";?>
    </div>
  <?php }
  elseif ($weapon == "paperpaper") { ?>
    <div class="outcome">
      <?php echo "DRAW!";?>
    </div>
  <?php }
  elseif ($weapon == "scissorsscissors") { ?>
    <div class="outcome">
      <?php echo "DRAW!";?>
    </div>
  <?php }
}

switch ($weapon) {
    case "rock" || "paper" || "scissors":
        foreach($weapons as $key => $val) { ?>
          <div class="rps-link">
            <a href="games.php?weapon=<?php echo $_GET["weapon"]; ?><?php echo $key; ?>">
              <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
            </a>
          </div>
        <?php }
        outcome($weapon);
        break;
    default:
        foreach($weapons as $key => $val) { ?>
          <div class="rps-link">
            <a href="games.php?weapon=<?php echo $key; ?>">
              <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
            </a>
          </div>
        <?php } 
} ?>
</div>






