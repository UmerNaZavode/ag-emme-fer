<?php
$contact_form = get_field('contact_form');
$title = $contact_form['title'];
?>
<div class="contact-form">
  <div class="contact-form__wrapper container">
    <div class="contact-form__left">
      <h3 class="contact-form__title title"><?php echo $title; ?></h3>
    </div>
    <?php get_template_part('template-parts/home/contact-form/form'); ?>
  </div>
</div>
