<?php
$home_intro = get_field('home_intro');
$label = $home_intro['label'];
$title = $home_intro['title'];
$image = $home_intro['image'];
?>
<div class="home-intro">
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  <div class="container">
    <h3 class="home-intro__label"><?php echo $label; ?></h3>
    <h2 class="home-intro__title"><?php echo $title; ?></h2>
  </div>
  <button id="scroll-btn" class="home-intro__button" type="button"><span><?php get_template_part('template-parts/icons/icon-arrow'); ?></span></button>
</div>
