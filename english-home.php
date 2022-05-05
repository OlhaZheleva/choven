<?php /* Template Name: english-home */ ?> 

<?php get_header('en'); ?>

      <main class="content">
        <!-----------------------main ----------->
        <div class="main">
          <h1 class="main__title">
            Charitable fund for assistance <br />
            to Ukrainian Defenders
          </h1>
          <h3 class="main__sub-title">
            Charitable Foundation - which provides bulletproof <br />vests,
            tourniquets and other equipment to hot spots.
          </h3>
          <div class="main__contacts">
            <div class="main__donation">
              <a target="_blank"
                class="main__button button"
                href="https://secure.wayforpay.com/page?vkh=6272eee2-1d3c-4879-bfa3-088722d1dba8"
                >QUICK DONATION</a
              >
              <a 
                class="main__button main__button-white button"
                href="<?php echo get_permalink( get_page_by_path( 'payment-en' ) ); ?>"
                >OTHER OPTIONS</a
              >
            </div>
            <!-- <div class="main__social social">
              <a href="" class="">
                <div class="main__twitter">
                  <img src="<?php echo get_template_directory_uri();?> /assets/img/twitter.svg" alt="" />
                </div>
              </a>
              <a href="" class="">
                <div class="main__insta">
                  <img src="<?php echo get_template_directory_uri();?> /assets/img/insta.svg" alt="" />
                </div>
              </a>
            </div> -->
          </div>
        </div>
        <!-----------------------reports ----------->
        <div class="reports" id="reports">
          <div class="reports__about">
            <p class="reports__decrp">Infographics as of 18.04</p>
            <a class="reports__info" href="">
              <img src="<?php echo get_template_directory_uri();?> /assets/img/report__info.png" alt="" />
            </a>
          </div>
          <h2 class="reports__title title">What is done</h2>
          <div class="reports__items">
            <div class="reports__item">
              <p class="reports__sum">1241</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/icons-shield.svg" alt="" />
              <h4 class="reports__name">Body armor</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum">858</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/turniket.svg" alt="" />
              <h4 class="reports__name">Tourniquets</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum">62</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/med.svg" alt="" />
              <h4 class="reports__name">First aid kits</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum" style="padding-right: 52px">2</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/cars.svg" alt="" />
              <h4 class="reports__name">Cars</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum">2</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/teplovis.svg" alt="" />
              <h4 class="reports__name" style="font-size: 14.5px">
                Thermal imagers
              </h4>
            </div>
          </div>
          <div class="reports__donation">
            <a class="reports__btn button" href="<?php echo get_permalink( get_page_by_path( 'reports-en' ) ); ?>">OUR REPORTS</a>
          </div>
        </div>
        <!-----------------------What we do----------->
        <div class="works" id="works">
          <h2 class="works__title title">What we do</h2>
          <div class="works__items">
            <div class="works__item">
              <div class="works__img">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/Body_armor.png" alt="" />
              </div>
              <h3 class="works__name">Body armor</h3>
              <div class="works__line line"></div>
              <p class="works__descrp">
                We launched our own production of body armor 4+ protection
                class. The cost of a bulletproof vest is 210 euros = two ceramic
                plates + plate sock.
              </p>
            </div>
            <div class="works__item">
              <div class="works__img">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/Helmets.png" alt="" />
              </div>
              <h3 class="works__name">Helmets</h3>
              <div class="works__line line"></div>
              <p class="works__descrp">
                We bring Kevlar NATO helmets class NIJ 3A - price 105 dollars.
              </p>
            </div>
            <div class="works__item">
              <div class="works__img">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/Humanitarian help.png" alt="" />
              </div>
              <h3 class="works__name">
                Humanitarian <br />
                help
              </h3>
              <div class="works__line line"></div>
              <p class="works__descrp">
                We buy laptops, cars, thermal imagers, mattresses and other
                household items.
              </p>
            </div>
            <div class="works__item">
              <div class="works__img">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/Tourniquets.png" alt="" />
              </div>
              <h3 class="works__name">Tourniquets and first aid kits</h3>
              <div class="works__line line"></div>
              <p class="works__descrp">
                Tourniquets are an urgent need for the military. Every day we
                send 50 pieces to the hot spots.
              </p>
            </div>
          </div>
          <div class="works__donation">
            <a target="_blank" class="works__btn button" href="https://secure.wayforpay.com/page?vkh=6272eee2-1d3c-4879-bfa3-088722d1dba8">QUICK DONATION</a>
          </div>
        </div>
        <!-----------------Team----------------------->
        <div class="team" id="team">
          <h2 class="team__title title">
            People of different professions have united to help our army win the
            Russian-Ukrainian war.
          </h2>
          <div class="team__items">
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/zadvornyk.jpg" alt="" />
              </div>
              <h4 class="team__name">Andrii Zadvorniak</h4>
              <p class="team__descr">Founder of the fund, entrepreneur</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/komish.png" alt="" />
              </div>
              <h4 class="team__name">Olia Komysh</h4>
              <p class="team__descr">
                CEO of the Kukuruza project and co-founder of the fund
              </p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/oleg.png" alt="" />
              </div>
              <h4 class="team__name">Oleh Fliak</h4>
              <p class="team__descr">Product Manager at Neemb</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/petro.jpg" alt="" />
              </div>
              <h4 class="team__name">Petro Tkachuk</h4>
              <p class="team__descr">Lawyer</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/paluga.jpg" alt="" />
              </div>
              <h4 class="team__name">Olga Paluga</h4>
              <p class="team__descr">
                International Projects & Key Account Manager MarkIT
              </p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/anna.png" alt="" />
              </div>
              <h4 class="team__name">Anna Dubinska</h4>
              <p class="team__descr">Co-founder of media projects</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/ivan.png" alt="" />
              </div>
              <h4 class="team__name">Ihor Ivaniuk</h4>
              <p class="team__descr">Entrepreneur</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/vasyl.png" alt="" />
              </div>
              <h4 class="team__name">Vasyl Tkachuk</h4>
              <p class="team__descr">Entrepreneur from Italy</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/dzydik.png" alt="" />
              </div>
              <h4 class="team__name">Andrii Dziadykevych</h4>
              <p class="team__descr">CFO Dzen</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/body.png" alt="" />
              </div>
              <h4 class="team__name">Bohdan Ostrovskyi</h4>
              <p class="team__descr">Supply manager at Dzen</p>
            </div>
          </div>
        </div>
      </main>


<?php get_footer('en'); ?>