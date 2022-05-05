      <footer class="footer" >
        <div class="footer__logo">
          <a href="<?php echo get_permalink( get_page_by_path( 'english-home' ) ); ?>">
            <img src="<?php echo get_template_directory_uri();?> /assets/img/logo_en.svg" alt="" />
          </a>
        </div>
        <div class="footer__contacts" id="contacts">
          <p class="contacts__adress">
            47201 <br />
            Zboriv, Ternopilʹsʹka oblastʹ<br />
            vul. Kokhanivka, b.26
          </p>
          <a href="tel:+(380) 98-559-87-87" class="contacts__tel"
            >+(380) 98-559-87-87</a
          >
          <a href="tel:+(380) 93-298-67-52" class="contacts__tel"
            >+(380) 93-298-67-52</a
          >
        </div>
        <div class="footer__navigation">
          <nav class="">
            <ul class="nav__items nav">
              <li class="nav__item">
                <a class="nav__link" href="<?php echo get_permalink( get_page_by_path( 'reports-en' ) ); ?>">FUND REPORT</a>
              </li>
               <?php 
        if( is_front_page('english-home') ){
        ?>
	        <li class="nav__item">
                <a class="nav__link" href="#team">ABOUT US</a>
              </li>
        <?php
        }
        else { ?>
            <li class="nav__item">
                <a class="nav__link" href="<?php echo get_permalink( get_page_by_path( 'english-home' ) ); ?>">ABOUT US</a>
              </li>
            <?php
        }
        ?>
               
            </ul>
          </nav>
          <div class="footer__social social">
            <!-- <a class="">
              <div class="footer__twitter">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/twitter.svg" alt="" />
              </div>
            </a> -->
            <a class="" href="https://instagram.com/choven_ua?igshid=YmMyMTA2M2Y=">
              <div class="footer__insta">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/insta.svg" alt="" />
              </div>
            </a>
          </div>
          <div class="footer__policy">
            <a href="https://choven.in.ua/privacy/">Privacy Policy</a>
            <a href="https://choven.in.ua/rules/">Public rules</a>
          </div>
        </div>

        <div class="">
          <a class="footer__btn button-up" href="#top"
            ><img src="<?php echo get_template_directory_uri();?> /assets/img/up.svg" alt=""
          /></a>
        </div>
      </footer>
    </div>
  </body>
</html>