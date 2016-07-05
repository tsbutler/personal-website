<link rel="stylesheet" type="text/css" href="assets/stylesheets/rps.css">
<div class="rps-container">
<?php 
$weapons = array("rock" =>"asdf", "paper" => "fdsa", "scissors" => "dfsa"); 
$weapon = $_GET["weapon"];


function outcome($weapon){
  if ($weapon == "asdfdfsa"){ 
    return "ROCK WINS!";
  }
  elseif ($weapon == "dfsaasdf") { 
    return "ROCK WINS!";
  }
  elseif ($weapon == "fdsaasdf") { 
    return "PAPER WINS!";
  }
  elseif ($weapon == "asdffdsa") { 
    return "PAPER WINS!";
  }
  elseif ($weapon == "dfsafdsa") {
    return "SCISSORS WINS!";
  }
  elseif ($weapon == "fdsadfsa") {
    return "SCISSORS WINS!";
  }
  elseif ($weapon == "asdfasdf") {
    return "DRAW!";
  }
  elseif ($weapon == "fdsafdsa") {
    return "DRAW!";
  }
  elseif ($weapon == "dfsadfsa") {
    return "DRAW!";
  }
}

function display_outcome($weapon){ ?>
    <div class="outcome">
      <?php echo outcome($weapon); ?><br>
    </div>
  <?php
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

display_outcome($weapon);
?>
</div>






