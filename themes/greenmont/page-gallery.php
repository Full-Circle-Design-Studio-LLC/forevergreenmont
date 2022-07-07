<?php /* Template Name: Photo-Gallery */ ?>

<?php get_header(); ?>

<?php get_template_part('nav'); ?>

  </header>

<div class="main-container">

<?php get_template_part('nav-mobile'); ?>


<div class="gallery-home col-12 float-left p-0">
<h2 class="col-12 float-left">Photo Gallery</h2>
    <ul class="col-12 float-left p-0">


      <?php
          $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
          query_posts(
              array (
                  'post_type' => 'photo-gallery',
                  'posts_per_page' => 12,
                  'paged' => $paged )
              );
              // The Loop
              while ( have_posts() ) : the_post(); ?>

  <?php $image = get_field('main_image'); ?>

        <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0"></a></li>

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
