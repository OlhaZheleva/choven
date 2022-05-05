<?php get_header(); ?>

      <main class="content">
        <!-----------------------main ----------->
        <div class="main">
          <h1 class="main__title">
            Благодійний фонд допомоги українським захисникам
          </h1>
          <h3 class="main__sub-title">
            Благодійний фонд - який забеспечує бронежилети, турнікети та інше
            спорядження у гарячі точки.
          </h3>
          <div class="main__contacts">
            <div class="main__donation">
              <a target="_blank"
                class="main__button button"
                href="https://secure.wayforpay.com/page?vkh=6272eee2-1d3c-4879-bfa3-088722d1dba8"
                >ШВИДКИЙ ДОНАТ</a
              >
              <a 
                class="main__button main__button-white button"
                href="<?php echo get_permalink( get_page_by_path( 'payment-ua' ) ); ?>"
                >ІНШІ СПОСОБИ</a
              >
            </div>
            <div class="main__social social">
              <!-- <a href="" class="">
                <div class="main__twitter">
                  <img src="<?php echo get_template_directory_uri();?> /assets/img/twitter.svg" alt="" />
                </div>
              </a> -->
              <a href="https://instagram.com/choven_ua?igshid=YmMyMTA2M2Y=" class="" target="_blank">
                <div class="main__insta">
                  <img src="<?php echo get_template_directory_uri();?> /assets/img/insta.svg" alt="" />
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-----------------------reports ----------->
        <div class="reports" id="reports">
          <div class="reports__about">
            <p class="reports__decrp">Інфографіка станом на 18.04</p>
            <a class="reports__info" href="">
              <img src="<?php echo get_template_directory_uri();?> /assets/img/report__info.png" alt="" />
            </a>
          </div>
          <h2 class="reports__title title">Що зроблено</h2>
          <div class="reports__items">
            <div class="reports__item">
              <p class="reports__sum">1241</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/icons-shield.svg" alt="" />
              <h4 class="reports__name">Бронежилетів</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum">858</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/turniket.svg" alt="" />
              <h4 class="reports__name">Турнікетів</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum">62</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/med.svg" alt="" />
              <h4 class="reports__name">Апетчок</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum">2</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/cars.svg" alt="" />
              <h4 class="reports__name">Автомобілів</h4>
            </div>
            <div class="reports__item">
              <p class="reports__sum">2</p>
              <img class="reports__icon" src="<?php echo get_template_directory_uri();?> /assets/img/teplovis.svg" alt="" />
              <h4 class="reports__name">Тепловізори</h4>
            </div>
          </div>
          <div class="reports__donation">
            <a class="reports__btn button" href="<?php echo get_permalink( get_page_by_path( 'reports-ua' ) ); ?>">ПОВНИЙ ЗВІТ</a>
          </div>
        </div>
        <!-----------------------What we do----------->
        <div class="works" id="works">
          <h2 class="works__title title">Напрямки роботи</h2>
          <div class="works__items">
            <div class="works__item">
              <div class="works__img">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/image 2.png" alt="" />
              </div>
              <h3 class="works__name">Надання амуніції</h3>
              <div class="works__line line"></div>
              <p class="works__descrp">
                Завдяки активній роботі волонтерів необхідність у ліках та їжі
                значно зменшилась, проте найбільшою потребою військових була
                амуніція, саме тому ми прийняли рішення постачати нашим людям
                військове спорядження.
              </p>
            </div>
            <div class="works__item">
              <div class="works__img">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/image 3.png" alt="" />
              </div>
              <h3 class="works__name">Гуманітарна допомога</h3>
              <div class="works__line line"></div>
              <p class="works__descrp">
                Турнікети, ліки, побутові потреби госпіталів. В першу чергу
                шукаємо саме турнікети, адже це найперше, про що просять
                військові. Також за запитами шукаємо інші ліки та побутові речі.
              </p>
            </div>
          </div>
          <div class="works__donation">
            <a target="_blank"
              class="works__btn button"
              href="https://secure.wayforpay.com/page?vkh=626bbfec-47c0-4573-a587-1ef622d1dba8"
              >ДОПОМОГТИ</a
            >
          </div>
        </div>
        <!-----------------Team----------------------->
        <div class="team" id="team">
          <h2 class="team__title title">
            Ми люди різних професій об'єднались заради того, щоб допомогти нашій
            армії виграти у російсько-українській війні.
          </h2>
          <div class="team__items">
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/zadvornyk.png" alt="" />
              </div>
              <h4 class="team__name">Андрій Задворняк</h4>
              <p class="team__descr">Засновник фонду, підприємець</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/komish.png" alt="" />
              </div>
              <h4 class="team__name">Оля Комиш</h4>
              <p class="team__descr">
                CEO проекту Kukuruza та співзасновниця фонду
              </p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/oleg.png" alt="" />
              </div>
              <h4 class="team__name">Олег Фляк</h4>
              <p class="team__descr">Product Manager у Neemb</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/petro.jpg" alt="" />
              </div>
              <h4 class="team__name">Петро Ткачук</h4>
              <p class="team__descr">Адвокат</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/paluga.jpg" alt="" />
              </div>
              <h4 class="team__name">Ольга Палюга</h4>
              <p class="team__descr">
                International Projects & Key Account Manager MarkIT
              </p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/anna.png" alt="" />
              </div>
              <h4 class="team__name">Анна Дубінська</h4>
              <p class="team__descr">Співзасновниця медіа-проектів</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/ivan.png" alt="" />
              </div>
              <h4 class="team__name">Ігор Іванюк</h4>
              <p class="team__descr">Підприємець</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/vasyl.png" alt="" />
              </div>
              <h4 class="team__name">Василь Ткачук</h4>
              <p class="team__descr">Підприємець з Італії</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/dzydik.png" alt="" />
              </div>
              <h4 class="team__name">Андрій Дзядикевич</h4>
              <p class="team__descr">Фінансовий директор Дзен</p>
            </div>
            <div class="team__item">
              <div class="team__photo">
                <img src="<?php echo get_template_directory_uri();?> /assets/img/body.png" alt="" />
              </div>
              <h4 class="team__name">Богдан Островський</h4>
              <p class="team__descr">Supply manager у Дзен</p>
            </div>
          </div>
        </div>
      </main>

<?php get_footer(); ?>