<?php
preg_match("/^\/(\w+)\/(\w+\.php)$/", $_SERVER['REQUEST_URI'], $matches);
$current_folder = $matches[1];
$current_file   = $matches[2];

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
    <li>
      <a class="<?php if ($current_file == to_file($local_nav_titles[$i])) echo 'active'; ?>"
         href="<?= to_dir($current_folder).to_file($local_nav_titles[$i]) ?>">
        <?=$local_nav_titles[$i]?>
      </a>
    </li>
    <?php } ?>
  </ul>
</div>
