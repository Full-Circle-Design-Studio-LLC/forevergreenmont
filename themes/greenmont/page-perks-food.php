<?php /* Template Name: Perks-Food */ ?>

<?php get_header(); ?>

<?php get_template_part('nav'); ?>

    </header>

<div class="main-container">

<?php get_template_part('nav-mobile'); ?>

      <main class="perks perks-height col-12 col-lg-12 col-xl-8 float-left">
        <div class="col-12 float-left p-0">
  <h2 class="col-12 float-left">PERKS & POINTS OF INTEREST</h2>

<?php get_template_part('subnav'); ?>

<ul class="list col-12 p-0">

  <?php
      $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
      query_posts(
          array (
              'post_type' => 'perks-post',
              'category_name' => 'food',
              'posts_per_page' => 8,
              'paged' => $paged )
          );
          // The Loop
          while ( have_posts() ) : the_post(); ?>

<?php $image = get_field('main_image'); ?>

<li class="post-list-item col-12 col-md-6 col-xl-6 float-left"><a href="<?php the_permalink(); ?>" class="col-5 float-left p-0"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0"></a>
<div class="content-container col-7 float-left"><a href="<?php the_permalink(); ?>" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0"><?php the_title(); ?></h3></a>
<a href="#" class="contact-tiny"><?php the_field('phone'); ?></a><a href="<?php the_field('perk-website'); ?>" class="contact-tiny <?php the_field('visit-site') ?>" target="_blank">Visit Site</a>
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

  </div>
        </main>

        <aside class="col-12 col-xl-4 float-left" id="perks-aside">
          <div class="perks-height aside-container col-12 float-left">
            <h2 class="col-12 col-lg-11 offset-lg-1 p-0 float-left">WHAT ARE THE PERKS?</h2>
            <div class="aside-image-container col-12 col-lg-10 offset-lg-1 offset-xl-0 float-left p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/1.svg" alt="#" class="col-2 col-xl-2 offset-xl-1 float-left p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/2.svg" alt="#" class="col-2 col-xl-2 float-left p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/3.svg" alt="#" class="col-2 col-xl-2 float-left p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/4.svg" alt="#" class="col-2 col-xl-2 float-left p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/5.svg" alt="#" class="col-2 col-xl-2 float-left p-0">
            </div>
          <p class="col-12 col-lg-10 offset-lg-1 float-left p-0">

            <p class="col-12 col-lg-10 offset-lg-1 float-left p-0">
              Greenmont is known for its diversity, walkability and affordability, while maintaining a close-knit community feel.  Unique to Greenmont,  small businesses are intertwined into the streetscape, offering a variety of amenities to the residents. Step off your porch and grab a bite to eat at Madeline Maries, a fresh cup of Joe at Quantum Bean, or a cold one at Morgantown's oldest bar, Gene's Beer Garden.  Greenmont is also home to Phoenix Bakery, Chestnut Brew Works, Brockway Auto Repair, Studio 101, the Laundry and several other locally owned businesses. Get your haircut, have the oil changed on your car or enjoy a locally brewed stout all within the neighborhood.
              </p>
          <p class="col-12 col-lg-10 offset-lg-1 float-left p-0">
            For those hoofing it, Greenmont is within walking distance to the downtown area and the downtown campus.  Mountain line transit also runs through our neighborhood as regular service with several bus stops.  One of our latest access points to the rail trail and downtown, is Kern's Crossing, a new pedestrian bridge that spans Decker's Creek and links lower Greenmont to downtown.
            </p>

          </div>
          </aside>

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
