<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php get_template_part('nav'); ?>

  </header>

<div class="main-container">

<?php get_template_part('nav-mobile'); ?>



<div class="article-main-container col-12 col-lg-7 col-xl-7 float-left p-0">
    <article class="home col-12 float-left">
      <div class="photo-container-home col-12 col-lg-5 p-0 p-lg-3 float-left d-lg-none">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-1.png" alt="Street view of Greenmont" class="col-12 p-0">
      </div>


<div class="col-12 float-left p-0">
      <h2 class="col-12 d-lg-none float-left">WELCOME TO GREENMONT</h2>
</div>

      <p class="col-12 float-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-2.png" alt="Street view of Greenmont" class="home-header-image col-5 col-xl-5 d-none d-lg-block float-left">
<span class="h2-duplicate col-12 d-none d-lg-block">WELCOME TO GREENMONT</span> Welcome to Greenmont, Morgantown's oldest and most diverse community. Though relatively small in size, Greenmont  contains a historic district, a multitude of small businesses, including pubs and eateries, access to parks and trails, the best rated school district   in   the   state, public art displays, and most importantly a place to call home. Greenmont is one of the few areas within Morgantown city limits that offers affordable housing for both renters and buyers. Take a minute to explore our neighborhood and discover all we have to offer.
          </p>
      </article>

      <main class="current-projects col-12 float-left">
<h2 class="col-12 float-left">PROJECTS</h2>



        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


          <?php
          $args = array(
            'post_type' => 'project-post',
            'category_name' => 'feature-1',
            'posts_per_page' => 1,

          /*  'category_name' => '1950s' */
          );
          $query = new WP_Query( $args );

          ?>




          <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post(); ?>

          <?php $image = get_field('main_image'); ?>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-block w-100">

              <div class="carousel-text-container col-12 float-left p-0">
                    <a href="<?php the_permalink(); ?>" class="col-12 float-left p-0">
                <h3 class="col-12 float-left"><?php the_title(); ?></h3>
                <p class="col-12 float-left"><?php the_field('summary'); ?>
                </p>
              </a>
                </div>
                </div>



            <?php endwhile; endif; ?>



            <?php
            $args = array(
              'post_type' => 'project-post',
              'category_name' => 'feature-2',
              'posts_per_page' => 1,
            /*  'category_name' => '1950s' */
            );
            $query = new WP_Query( $args );
            ?>

            <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post(); ?>

            <?php $image = get_field('main_image'); ?>



              <div class="carousel-item">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-block w-100">

                <div class="carousel-text-container col-12 float-left p-0">
                  <a href="<?php the_permalink(); ?>" class="col-12 float-left p-0">
                  <h3 class="col-12 float-left"><?php the_title(); ?></h3>
                  <p class="col-12 float-left"><?php the_field('summary'); ?>
                  </p>
                </a>
                  </div>
                  </div>


              <?php endwhile; endif; ?>




              <?php
              $args = array(
                'post_type' => 'project-post',
                'category_name' => 'feature-3',
                'posts_per_page' => 1,
              /*  'category_name' => '1950s' */
              );
              $query = new WP_Query( $args );
              ?>

              <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post(); ?>

              <?php $image = get_field('main_image'); ?>



                <div class="carousel-item">
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-block w-100">

                  <div class="carousel-text-container col-12 float-left p-0">

                    <div class="col-12 float-left">
                      <a href="<?php the_permalink(); ?>" class="col-12 float-left p-0">
                    <h3 class="col-12 float-left"><?php the_title(); ?></h3>
                    <p class="col-12 float-left"><?php the_field('summary'); ?>
                    </p>
                  </a>
                    </div>

                    </div>
</div>

                <?php endwhile; endif; ?>


          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          </div>


        </main>
        </div>

      <aside class="col-12 col-lg-5 float-left float-lg-right">
        <div class="aside-container home-aside col-12 float-left">
        <h2 class="col-12 col-lg-10 offset-lg-1 float-left">PERKS & POINTS OF INTEREST</h2>

<ul class="list col-12 col-lg-10 offset-lg-1 p-0">

  <?php
  $args = array(
    'post_type' => 'perks-post',
    'posts_per_page' => 4,
  /*  'category_name' => '1950s' */
  );
  $query = new WP_Query( $args );
  ?>

  <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post(); ?>

<?php $image = get_field('main_image'); ?>

  <li class="post-list-item col-12 col-md-6 col-lg-12 float-left"><a href="<?php the_permalink(); ?>" class="col-5 float-left p-0"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0"></a>
<div class="content-container col-7 float-left"><a href="<?php the_permalink(); ?>" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0"><?php the_title(); ?></h3></a>
<a href="#" class="contact-tiny"><?php the_field('phone'); ?></a><a href="<?php the_field('perk-website'); ?>" class="contact-tiny <?php the_field('visit-site') ?>" target="_blank">Visit Site</a>
<p class="about-tiny col-12 float-left p-0"><?php the_field('summary'); ?></p>
</div>
  </li>

<?php endwhile; endif; ?>
  <li class="col-12 float-left"><a href="https://forevergreenmont.com/perks/" class="view-more col-12 float-left">View More</a></li>
  </ul>
  </div>
        </aside>

<div class="gallery-home col-12 float-left p-0">
<h2 class="col-12 float-left">Photo Gallery</h2>
    <ul class="rental-template-gallery col-12 float-left p-0">
  <?php
  $args = array(
    'post_type' => 'photo-gallery',
    'posts_per_page' => 4,
  /*  'category_name' => '1950s' */
  );
  $query = new WP_Query( $args );
  ?>

  <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post(); ?>

  <?php $image = get_field('main_image'); ?>


        <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0"></a></li>

<?php endwhile; endif; ?>
        </ul>
<div class="col-12 float-left">
<a href="https://forevergreenmont.com/photo-gallery/" class="view-more-2 col-12 col-lg-6 offset-lg-3 float-left">Visit Gallery</a>
</div>

</div>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12292.45563130529!2d-79.9543548133689!3d39.624639021439165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88357c9c2e3cbc41%3A0xb6fcbc1b6044a404!2sGreenmont%2C%20Morgantown%2C%20WV%2026501!5e0!3m2!1sen!2sus!4v1598121882596!5m2!1sen!2sus" allowfullscreen="" aria-hidden="false" tabindex="0" class="map col-12 float-left p-0"></iframe>

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
