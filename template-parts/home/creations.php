<?php
$creations = get_field('creations');
$logo = $creations['logo'];
$title = $creations['title'];
$description = $creations['description'];
?>
<div class="container">
  <div class="creations">
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
    <div class="creations__wrapper">
      <h3 class="creations__title title"><?php echo $title; ?></h3>
      <p class="creations__description"><?php echo $description; ?></p>
    </div>
  </div>
</div>
