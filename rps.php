<link rel="stylesheet" type="text/css" href="assets/stylesheets/rps.css">
<div class="rps-container">
<?php 
$weapons = array("rock" => "rock.php", "paper" => "paper.php", "scissors" => "scissors.php"); 
$weapon = $_GET["weapon"];

switch ($weapon) {
    case "rock" || "paper" || "scissors":
        foreach($weapons as $key => $val) { ?>
          <div class="rps-link">
            <a href="games.php?weapon=<?php echo $_GET["weapon"]; ?><?php echo $key; ?>">
              <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
            </a>
          </div>
          <form action="games.php?weapon=<?php echo $weapon; ?>" method="post">
            <input type="submit" value="And the winner is...">
          </form>
        <?php }
        break;
    case "rockpaper" || "paperrock": ?>
        <div class="rps-victory">
          <p>PAPER WINS!</p>
        </div>
        <?php break;
    case "paperscissors" || "scissorspaper": ?>
        <div class="rps-victory">
          <p>SCISSORS WINS!</p>
        </div>
        <?php break;
    case "rockscissors" || "scissorsrock": ?>
        <div class="rps-victory">
          <p>ROCK WINS!</p>
        </div>
        <?php break;
    case "paperpaper" || "scissorsscissors" || "rockrock": ?>
        <div class="rps-victory">
          <p>DRAW!</p>
        </div>
        <?php break;        
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






