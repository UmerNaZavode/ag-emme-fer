<?php
$masters = get_field('masters');
$bg_image = $masters['bg_image'];
$image = $masters['image'];
$title = $masters['title'];
$subtitle = $masters['subtitle'];
$description_left = $masters['description_left'];
$description_right = $masters['description_right'];
$button_text = $masters['button_text'];
$button_url = $masters['button_url'];
?>
<div class="masters">
  <img src="<?php echo $bg_image['url']; ?>" class="masters__bg-img" alt="<?php echo $bg_image['alt']; ?>" />
  <img src="<?php echo $image['url']; ?>" class="masters__img" alt="<?php echo $image['alt']; ?>" />
  <div class="masters__wrapper container">
    <h1 class="masters__title title title--accent"><?php echo $title; ?></h1>
    <h3 class="masters__subtitle title title--light "><?php echo $subtitle; ?></h3>
    <div class="masters__content">
      <div class="masters__left">
        <div class="masters__desription">
          <?php echo $description_left; ?>
        </div>
      </div>
      <div class="masters__right">
        <div class="masters__desription">
          <?php echo $description_right; ?>
        </div>
        <button class="masters__button btn" type="button">
          <a href="<?php echo $button_url; ?>" class="masters__link btn__link"><?php echo $button_text; ?></a>
        </button>
      </div>
    </div>
  </div>
</div>
