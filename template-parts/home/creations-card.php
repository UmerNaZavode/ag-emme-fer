<?php
$creations_card = get_field('creations_card');
$items = $creations_card['items'];
?>
<div class="creations-card container">
  <?php foreach ($items as $key => $item) : ?>
    <?php
    $image = $item['image'];
    $title = $item['title'];
    $plus_button = $item['plus_button'];
    $description = $item['description'];
    $button_text = $item['button_text'];
    $button_url = $item['button_url'];
    ?>
    <div class="creations-card__inner <?php //echo $key === 0 ? 'active' : null; ?>">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <div class="creations-card__wrapper">
        <header class="creations-card__header">
          <h4 class="creations-card__title"><?php echo $title; ?></h4>
          <button type="button" class="creations-card__button btn btn-open"><span></span></button>
        </header>
        <div class="creations-card__description">
          <?php echo $description; ?>
        </div>
        <footer class="creations-card__footer">
          <button type="button" class="creations-card__button--alt btn"><a href="<?php echo $button_url; ?>" class="creations-card__link btn__link"><?php echo $button_text; ?></a></button>
        </footer>
      </div>
    </div>
  <?php endforeach; ?>
</div>
