<?php

$pages = array("Home" => "index.php", "About" => "about.php", "Things" => "things.php");
$articles = array("Journal" => "journal.php");
$profiles = array("twitter" => "https://twitter.com/ThinkingBinary", "linkedin" => "https://www.linkedin.com/in/thorinbutler", "github" => "https://github.com/tsbutler");
?> 
  <center>
    <h1>Thorin Butler</h1>
  </center>
  
  <?php foreach($profiles as $key => $val) { ?>
    <a href="<?php echo $val; ?>">
      <img src="assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>" style= "width:64px;height:64px;border:0;">
    </a>
  <?php } ?>

  <ul>
    <?php foreach($pages as $key => $val) { ?>
      <li <?php if ($thisPage == $key) echo " id=\"currentpage\""; ?>>
        <a href="<?php echo $val; ?>"><?php echo $key; ?></a>
      </li>
    <?php } ?>
  </ul>

  <ul>
    <?php foreach($articles as $key => $val) { ?>
      <li <?php if ($thisPage == $key) echo " id=\"currentpage\""; ?>>
        <a href="<?php echo $val; ?>"><?php echo $key; ?></a>
      </li>
    <?php } ?>
  </ul>

  


