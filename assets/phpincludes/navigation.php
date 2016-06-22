<?php 

$pages = array("Home" => "index.php", "About" => "about.php", "Things" => "things.php");
$articles = array("Journal" => "journal.php");
$profiles = array("Twitter" => "https://twitter.com/ThinkingBinary", "LinkedIn" => "https://www.linkedin.com/in/thorinbutler", "GitHub" => "https://github.com/tsbutler");
?> 

<p>Pages</p>
  <ul>
    <?php foreach($pages as $key => $val) { ?>
      <li <?php if ($thisPage == $key) echo " id=\"currentpage\""; ?>>
        <a href="<?php echo $val ?>"><?php echo $key ?></a>
      </li>
    <?php } ?>
  </ul>
<p>Articles</p>
  <ul>
    <?php foreach($articles as $key => $val) { ?>
      <li <?php if ($thisPage == $key) echo " id=\"currentpage\""; ?>>
        <a href="<?php echo $val ?>"><?php echo $key ?></a>
      </li>
    <?php } ?>
  </ul>
<p>Profiles</p>
  <ul>
    <?php foreach($profiles as $key => $val) { ?>
      <li><a href="<?php echo $val ?>"><?php echo $key ?></a></li>
    <?php } ?>
  </ul>

