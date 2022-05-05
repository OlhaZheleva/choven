<!DOCTYPE html>
<html lang="ua">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <?php wp_head();?>
    <!-- <link rel="stylesheet" href="css/_normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style_blog.css" />
    <link rel="stylesheet" href="css/media.css" /> -->
    <title>Човен UA</title>
  </head>
  <body >
    <div class="main__line line"></div>
    <div class="back__images">
      <img src="<?php echo get_template_directory_uri();?> /assets/img/background_img.svg" alt="" />
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="header__left">
          <div class="header__logo">
            <a href="<?php echo get_home_url(); ?>">
              <img src="<?php echo get_template_directory_uri();?> /assets/img/main_logo.svg" alt="" />
            </a>
          </div>
          <div class="header__lang lang">
            <a class="lang__link" href="<?php echo get_home_url(); ?>
" style="color: #4d77ff">
              <div class="lang__block">
                <p class="lang__name" style="color: #4d77ff">UA</p>
              </div>
            </a>
            <a class="lang__link" href="<?php echo get_permalink( get_page_by_path( 'english-home' ) ); ?>">
              <div class="lang__block">
                <p class="lang__name">EN</p>
              </div>
            </a>
          </div>
          <div class="header__patreons">
            <a href="<?php echo get_permalink( get_page_by_path( 'patreons-ua' ) ); ?>"
              >Патрони України - <br />
              <ins>«Рятувальний човен» </ins></a
            >
          </div>
        </div>
        <div class="header__right">
          <nav class="header__navigation">
            <ul class="nav__items nav">
              <li class="nav__item">
                <a class="nav__link" href="<?php echo get_permalink( get_page_by_path( 'reports-ua' ) ); ?>">ЗВІТ ФОНДУ</a>
              </li>
              
              <?php 
        if( is_front_page() ){
        ?>
	        <li class="nav__item">
                <a class="nav__link" href="#team">Хто ми</a>
              </li>
        <?php
        }
        else { ?>
            <li class="nav__item">
                <a class="nav__link" href="<?php echo get_home_url(); ?>">Хто ми</a>
              </li>
              
              <?php
        }
        ?>
         
              <li class="nav__item">
                <a class="nav__link" href="#contacts">КОНТАКТИ</a>
              </li>
            </ul>
          </nav>
          <div>
            <a target="_blank"
              class="header__btn button"
              href="https://secure.wayforpay.com/page?vkh=6272eee2-1d3c-4879-bfa3-088722d1dba8"
              >ДОНАТ</a
            >
          </div>
        </div>
      </header>