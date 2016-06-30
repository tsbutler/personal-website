<link rel="stylesheet" type="text/css" href="assets/stylesheets/rps.css">
<div class="rps-container">
<?php 

$weapons = array("rock" => "rock.php", "paper" => "paper.php", "scissors" => "scissors.php"); 
if($_GET["weapon"] == "rockscissors" || "paperrock" || "scissorsrock")

?>


<?php if($_SESSION == "NGIP"){ ?>
  <?php foreach($weapons as $key => $val) { ?>
    <div class="rps-link">
      <a href="games.php?weapon=<?php echo $key; ?>">
        <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
      </a>
    </div>
  <?php } ?>
<?php } 
elseif($_SESSION == "rock" || "paper" || "scissors") { ?>
  <?php foreach($weapons as $key => $val) { ?>
    <div class="rps-link">
      <a href="games.php?weapon=<?php echo $_GET["weapon"]; ?><?php echo $key; ?>">
        <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
      </a>
    </div>
  <?php } ?>
<?php } ?>
</div>