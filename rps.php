<link rel="stylesheet" type="text/css" href="assets/stylesheets/rps.css">
<div class="rps-container">
<?php $weapons = array("rock" => "rock.php", "paper" => "paper.php", "scissors" => "scissors.php"); ?>

<?php foreach($weapons as $key => $val) { ?>
  <div class="rps-link">
    <a href="<?php echo $val; ?>">
      <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
    </a>
  </div>
<?php } ?>
</div>