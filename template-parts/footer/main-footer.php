<?php
$footer = get_field('footer', 'option');
$logo = $footer['logo'];
$first_phone = $footer['first_phone'];
$seccond_phone = $footer['seccond_phone'];
$email = $footer['email'];
$address = $footer['address'];
$hours = $footer['hours'];
// $adress_url = $footer['adress_url'];
// $full_company_name = $footer['full_company_name'];
// $short_company_name = $footer['short_company_name'];
// $vat = $footer['vat'];
// $partner_url = $footer['partner_url'];
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
            <a target="_blank" class="footer-top__link"><?php echo $address; ?></a>
          </div>
        </li>
        <li class="footer-top__item">
          <div class="footer-top__inner">
            <div class="footer-top__label">Telefono</div>
            <a href="<?php echo clear_phone($first_phone); ?>" target="_blank" class="footer-top__link"><?php echo $first_phone; ?></a>
          </div>
          <div class="footer-top__inner">
            <div class="footer-top__label">Indirezzo</div>
            <a href="<?php echo clear_phone($seccond_phone); ?>" target="_blank" class="footer-top__link"><?php echo $seccond_phone; ?></a>
          </div>
        </li>
        <li class="footer-top__item">
          <div class="footer-top__inner">
            <div class="footer-top__label">Email</div>
            <a target="_blank" class="footer-top__link"><?php echo $address; ?></a>
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

</div>
