<?php
$footer = get_field('footer', 'option');
$logo = $footer['logo'];
$first_phone = $footer['first_phone'];
$seccond_phone = $footer['seccond_phone'];
$email = $footer['email'];
$hours = $footer['hours'];
$full_address = $footer['full_address'];
$adress_url = $footer['adress_url'];
$full_company_name = $footer['full_company_name'];
$short_company_name = $footer['short_company_name'];
$vat = $footer['vat'];
$partner_url = $footer['partner_url'];
// $partner_logo = $footer['partner_logo'];
?>
<div class="footer-top">
  <div class="footer-top__wrap container">
    <div class="footer-top__content">
      <ul class="footer-top__list">
        <li class="footer-top__item">
          <img width="189" height="42" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
          <div class="footer-top__inner">
            <div class="footer-top__label">Indirezzo</div>
            <a href="<?php echo $adress_url; ?>" target="_blank" class="footer-top__link"><?php echo $full_address; ?></a>
          </div>
        </li>
        <li class="footer-top__item">
          <div class="footer-top__inner">
            <div class="footer-top__label">Telefono</div>
            <a href="tel:<?php echo clear_phone($first_phone); ?>" target="_blank" class="footer-top__link"><?php echo $first_phone; ?></a>
          </div>
          <div class="footer-top__inner">
            <div class="footer-top__label">Telefono</div>
            <a href="tel:<?php echo clear_phone($seccond_phone); ?>" target="_blank" class="footer-top__link"><?php echo $seccond_phone; ?></a>
          </div>
        </li>
        <li class="footer-top__item">
          <div class="footer-top__inner">
            <div class="footer-top__label">Email</div>
            <a href="mailto:<?php echo $email; ?>" target="_blank" class="footer-top__link"><?php echo $email; ?></a>
          </div>
          <div class="footer-top__inner">
            <div class="footer-top__label">Orari di apertura</div>
            <a target="_blank" class="footer-top__link"><?php echo $hours ?></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="main-footer">
  <div class="main-footer__wrap container">
    <div class="main-footer__left">
      <div class="main-footer__copyright">
        Copyright &copy; <?php echo date('Y') ?> <?php echo $full_company_name; ?> Partita Iva: <?php echo $vat; ?>
      </div>
      <div class="main-footer__partner">
        <?php echo $short_company_name; ?> ha scelto <a target="_blank" href="<?php echo $partner_url; ?>">Altuofianco</a>
      </div>
    </div>
    <div class="main-footer__right">
      <?php wp_nav_menu([
        'theme_location'  => 'footer-menu',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'footer-menu main-footer__footer-menu',
        'menu_id'         => 'js-main-menu',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'         => '',
      ]); ?>
    </div>
  </div>
</div>
