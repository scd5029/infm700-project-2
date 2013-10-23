<?php
function to_underscore($str) {
  return str_replace(' ', '_', strtolower($str));
}

function to_dir($str) {
  return '/'.to_underscore($str).'/';
}

function to_file($str) {
  return to_underscore($str).'.php';
}

$navbar_structure = array(
  'Our Partners' => array(
    'Corporate Partners',
    'Foundation Partners',
    'Outreach Partners'
  ),
  'Get Involved' => array(
    'Become a Individual Member and Donate',
    'Volunteer',
    'Become a Corporate Partner',
    'Impact to Patterson Park',
    'Patterson Park Planning Work Group'
  ),
  'Events and Outreach' => array(
    'A List of New or Large Events ...',
    'Events Calendar',
    'Community Events',
    'Kids and Family Events',
    'Member Events'
  ),
  'Places and Fun' => array(
    'Park Map and Resources',
    'Swimming Pool',
    'A List of Places and Fun ...'
  ),
  'Who We Are' => array(
    'About the Friends',
    'Contact',
    'Histories and Stories',
    'News Blog',
    'Friends Staff',
    'Annual Report',
    'Employment Opportunities'
  )
);

$lower_buttons = array(
  'Become an Individual Member' =>
    '/get_involved/become_a_individual_member_and_donate.php',
  'Become a Corporate Partner' =>
    '/get_involved/become_a_corporate_partner.php',
  'En Espanol' => '#'
);
?>


<div class="se-navbar" id="js-navbar">
  <!-- Brand Group -->
  <div class="se-navbar-brand">
    <a href="/index.php" class="se-navbar-logo">
      <img src="/_img/brand_logo.gif" alt="">
    </a>
    <a href="#" class="se-navbar-menu-button" id="js-navbar-toggle-menu">
      <img src="/_img_components/menu-button-icon.png" alt="">
    </a>
    <a href="/index.php" class="se-navbar-brand-name">Friends of Patterson Park</a>
    <ul class="se-navbar-brand-social-networks">
      <li><a href="#"><img src="/_img_components/facebook-icon.png" alt=""></a></li>
      <li><a href="#"><img src="/_img_components/rss-icon.png" alt=""></a></li>
      <li><a href="#"><img src="/_img_components/email-icon.png" alt=""></a></li>
    </ul>
  </div>


  <!-- Menu Group -->
  <div class="se-navbar-menus" id="se-navbar-menus">
    <ol class="se-navbar-top-menus">
      <?php foreach ($navbar_structure as $title => $sub_items) { ?>
      <li class="se-navbar-top-menus-item">
        <a href="<?=to_dir($title).to_file($title)?>" class="se-navbar-menu-item-title js-navbar-menus-item"><?=$title?></a>
        <!-- Drop Down -->
        <ol class="se-navbar-top-menus-dropdown">
          <li class="se-navbar-dropdown-back-button js-navbar-menus-item-back">
            <a href="#">Back</a>
          </li>

          <?php foreach ($sub_items as $sub_title) { ?>
          <li class="se-navbar-dropdown-item">
            <a href="<?=to_dir($title).to_file($sub_title)?>"><?=$sub_title?></a>
          </li>
          <?php } ?>

        </ol>
        <!-- /.se-navbar-top-menus-dropdown -->
      </li>
      <?php } ?>
    </ol>
    <!-- /.se-navbar-top-menus -->


    <ol class="se-navbar-lower-buttons">
      <?php foreach ($lower_buttons as $title => $url) { ?>
        <li class="se-navbar-lower-button">
          <a class="se-navbar-lower-anchor" href="<?=$url?>"><?=$title?></a>
        </li>
      <?php } ?>
    </ol>
  </div>
  <!-- /.se-navbar-menus -->
</div>
