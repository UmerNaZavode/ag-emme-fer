<?php
$creations_info = get_field('creations_info');
$logo = $creations_info['logo'];
$title = $creations_info['title'];
$description = $creations_info['description'];
?>
  <div class="creations container">
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
    <div class="creations__wrapper">
      <h3 class="creations__title title"><?php echo $title; ?></h3>
      <div class="creations__description"><?php echo $description; ?></div>
    </div>
  </div>
