<?php
preg_match("/^\/(\w+)(?:\/\w+\.php)$/", $_SERVER['REQUEST_URI'], $matches);
$current_folder = $matches[1];

foreach ($navbar_structure as $title => $sub_items) {
  if ($current_folder == to_underscore($title)) {
    $local_nav_titles = $sub_items;
    break;
  }
}
?>


<div class="md-local-nav">
  <ul class="nav">
    <?php for ($i=0; $i < count($local_nav_titles); $i++) { ?>
    <li class="">
      <a href="<?= to_dir($current_folder).to_file($local_nav_titles[$i]) ?>"><?=$local_nav_titles[$i]?></a>
    </li>
    <?php } ?>
  </ul>
</div>
