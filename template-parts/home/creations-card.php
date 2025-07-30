<?php
$creations_card = get_field('creations_card');
$items = $creations_card['items'];
?>
<div class="creations-card container">
  <?php foreach ($items as $item) : ?>
    <?php
    $image = $item['image'];
    $title = $item['title'];
    $plus_button = $item['plus_button'];
    $description = $item['description'];
    $button_text = $item['button_text'];
    $button_url = $item['button_url'];
    ?>
    <div class="creations-card__inner">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <div class="creations-card__wrapper">
        <div class="creations-card__content">
          <h4 class="creations-card__title"><?php echo $title; ?></h4>
        <button type="submit" class="creations-card__button btn"><span></span></button>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
