<?php /*Template Name: Page-Projects */ ?>

<?php get_header(); ?>

<?php get_template_part('nav'); ?>

    </header>

    <?php get_template_part('nav-mobile'); ?>

<div class="main-container">

      <main class="projects col-12">
        <h2 class="col-12 float-left">PROJECTS</h2>

        <ul class="list col-12 p-0">

          <?php
              $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
              query_posts(
                  array (
                      'post_type' => 'project-post',
                      'posts_per_page' => 8,
                      'paged' => $paged )
                  );
                  // The Loop
                  while ( have_posts() ) : the_post(); ?>

        <?php $image = get_field('main_image'); ?>

          <li class="post-list-item col-12 col-md-6 col-xl-4 float-left"><a href="<?php the_permalink(); ?>" class="col-5 float-left p-0"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0"></a>
        <div class="content-container col-7 float-left"><a href="<?php the_permalink(); ?>" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0"><?php the_title(); ?></h3></a>
        <p class="about-tiny col-12 float-left p-0"><?php the_field('summary'); ?></p>
        </div>
          </li>

        <?php endwhile; ?>

        </ul>

        <div class="col-12 float-left p-0">
      <p class="pagination-previous col-6 float-left">
      <?php previous_posts_link(); ?>
      </p>

      <p class="pagination-next col-6 float-left">
      <?php next_posts_link(); ?>
      </p>
      </div>



        </main>



              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12292.45563130529!2d-79.9543548133689!3d39.624639021439165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88357c9c2e3cbc41%3A0xb6fcbc1b6044a404!2sGreenmont%2C%20Morgantown%2C%20WV%2026501!5e0!3m2!1sen!2sus!4v1598121882596!5m2!1sen!2sus" allowfullscreen="" aria-hidden="false" tabindex="0" class="map-projects col-12 float-left p-0"></iframe>

          <?php get_footer(); ?>

          </div> <!--Closes Main Container -->
          </div> <!--Closes Container-fluid -->

          <script>
          function myFunction() {
            var element =
            document.getElementById("nav");
            element.classList.toggle("toggle-display-on");
          }
          </script>

                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


          </body>
          </html>
