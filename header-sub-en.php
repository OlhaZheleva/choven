<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head();?>
    <!-- <link rel="stylesheet" href="css/_normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style_blog.css" />
    <link rel="stylesheet" href="css/media.css" /> -->
    <title>Choven EN</title>
  </head>
  <body>
    <div class="main__line line"></div>
    <div class="back__images">
      <img src="<?php echo get_template_directory_uri();?> /assets<?php echo get_template_directory_uri();?> /assets/img/background_img.svg" alt="" />
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="header__left">
          <div class="header__logo">
            <a href="<?php echo get_permalink( get_page_by_path( 'english-home' ) ); ?>">
              <img src="<?php echo get_template_directory_uri();?> /assets/img/logo_en.svg" alt="" />
            </a>
          </div>
          <div class="header__lang lang">
            <a class="lang__link" href="<?php echo get_home_url(); ?>
">
              <div class="lang__block">
                <p class="lang__name">UA</p>
              </div>
            </a>
            <a
              class="lang__link"
              href="<?php echo get_permalink( get_page_by_path( 'english-home' ) ); ?>"
              style="color: #4d77ff"
            >
              <div class="lang__block">
                <p class="lang__name" style="color: #4d77ff">EN</p>
              </div>
            </a>
          </div>
          <div class="header__patreons">
            <a href="<?php echo get_permalink( get_page_by_path( 'patreons-en' ) ); ?>">
              Patreons of Ukraine - <br />
              <ins>"Lifeboat"</ins></a
            >
          </div>
        </div>
        <div class="header__right">
          <nav class="header__navigation">
            <ul class="nav__items nav">
              <li class="nav__item">
                <a class="nav__link" href="<?php echo get_permalink( get_page_by_path( 'reports-en' ) ); ?>">FUND REPORT</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="<?php echo get_permalink( get_page_by_path( 'english-home' ) ); ?>">ABOUT US</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#contacts">CONTACTS</a>
              </li>
            </ul>
          </nav>
          <div>
            <a target="_blank"
              class="header__btn button"
              href="https://secure.wayforpay.com/page?vkh=6272eee2-1d3c-4879-bfa3-088722d1dba8"
              >DONATION</a
            >
          </div>
        </div>
      </header>