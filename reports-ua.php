<?php /* Template Name: reports-ua */ ?> 

<?php get_header('sub-ua'); ?>

<main class="content">
        <div class="blog" id="blog">
          <div class="articles-posts__title ">
              <h1 class="blog-title">Звіт фонду</h1>
          </div>
            <div class="blog__content">
                <ul >
                  <?php
                        $args = array(
                            'category_name' => 'ua',
                            'post_type' => 'post'
                        );
                        // Собственный запрос.
                        $query = new WP_Query( $args );

                        // Проверка на наличие результата.
                        if ( $query->have_posts() ) {

                            echo '<ul class="category posts">';

                                // Прохождение по результатам в цикле.
                                while ( $query->have_posts() ) {

                                    $query->the_post();

                                    ?>

                              <li class="post-grid__item">
                                      <article class="blog-post post">
                                          <h3 class="post-title"><?php the_title(); ?></h3>
                                          <div class="post__line "></div>
                                          <p class="post__descrp"><?php the_content(); ?></p>
                                          <div class="post__img">
                                            <img src="/img/image 2.png" alt="" />
                                          </div>
                                      </article>
                                    </li>

            <?php

        }

    echo '</ul>';

}

// Восстановление оригинальных данных запроса.
wp_reset_postdata();

?>
                
</ul> 

      

  </div>



      </main>

<?php get_footer(); ?>