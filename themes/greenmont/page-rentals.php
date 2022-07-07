<?php /* Template Name: Rentals */ ?>

<?php get_header(); ?>

<?php get_template_part('nav'); ?>


    </header>

<div class="main-container">

<?php get_template_part('nav-mobile'); ?>

      <main class="rentals col-12">

        <div class="col-12 float-left p-0">
        <h2 class="col-12 float-left">AVAILABLE RENTALS</h2>


<ul class="list col-12 p-0">
  <?php
      $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
      query_posts(
          array (
              'post_type' => 'rentals',
              'posts_per_page' => 12,
              'paged' => $paged )
          );
          // The Loop
          while ( have_posts() ) : the_post(); ?>

<?php $image = get_field('main_image'); ?>

  <li class="post-list-item col-12 col-md-6 col-xl-4 float-left"><a href="<?php the_permalink(); ?>" class="col-5 float-left p-0"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0"></a>
<div class="content-container col-7 float-left"><a href="<?php the_permalink(); ?>" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0"><?php the_title(); ?></h3></a>
<ul class="about-tiny col-12 float-left p-0">
  <li><h4 class="available"><?php the_field('availability'); ?> <?php the_field('date-available'); ?></h4></li>
  <li><?php the_field('bedrooms'); ?></li>
  <li><?php the_field('bathrooms'); ?></li>
  <li><?php the_field('pet_friendly'); ?></li>
  </ul>

</div>
  </li>

  <!-- pagination -->


  <!-- No posts found -->

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


</body>
</html>
