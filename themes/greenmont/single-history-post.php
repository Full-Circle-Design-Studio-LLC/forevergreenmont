<?php /* Template Name: History Post */ ?>

<?php get_header(); ?>
<div class="history-nav col-12 float-left p-0">
<?php get_template_part('nav'); ?>
</div>
  </header>

<div class="main-container">

<div class="history-nav col-12 float-left p-0">
<?php get_template_part('nav-mobile'); ?>
</div>

<div class="photo-header-history col-12 float-left p-0">
  <?php $image = get_field('main-image'); ?>
<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 p-0 float-left">
</div>

    <main class="history float-left col-12">



<div class="history-page col-12 col-lg-10 offset-lg-1 float-left">

<h2 class="col-12 float-left p-0"><?php the_title(); ?></h2>

<span>
<p class="indent col-12 float-left p-0">
<?php the_field('paragraph-1'); ?>
</p>
<br><br>

<span class="img-2 col-12 float-left">

<?php $image1 = get_field('image_1'); ?>
<span class="<?php the_field('display_image_1'); ?> col-6 float-left">
<img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>" class="col-12 float-left">
<?php echo $image1['caption'] ?>
</span>

<span class="col-6 float-left">
      <?php $image2 = get_field('image_2'); ?>
      <img src="<?php echo $image2['url'] ?>" alt="<?php echo $image2['alt'] ?>" class="col-12 float-left">
      <?php echo $image2['caption'] ?>
      </span>
    </span>


<p class="indent col-12 float-left p-0">
<?php the_field('paragraph-2'); ?>
</p>


<br><br>

<p class="indent col-12 float-left p-0">
<?php the_field('paragraph-3'); ?>
</p>

<p class="indent col-12 float-left p-0">
<?php the_field('paragraph-4'); ?>
</p>

<span class="img-2 col-12 float-left">

<?php $image3 = get_field('image_3'); ?>
<span class="<?php the_field('display_image_3'); ?> col-6 float-left">
<img src="<?php echo $image3['url'] ?>" alt="<?php echo $image3['alt'] ?>" class="col-12 float-left">
<?php echo $image3['caption'] ?>
</span>

<span class="col-6 float-left">
      <?php $image4 = get_field('image_4'); ?>
      <img src="<?php echo $image4['url'] ?>" alt="<?php echo $image2['alt'] ?>" class="col-12 float-left">
      <?php echo $image4['caption'] ?>
      </span>
    </span>

    <br><br>

<p class="indent col-12 float-left p-0">
<?php the_field('rest-of-text'); ?>
</p>



</div>



      </main>



<div class="aside-duplicate col-12 col-xl-5 float-left d-none">

      <div class="history aside-container background-white col-12 float-left">


<ul class="col-12 float-left">



          <li class="col-6 col-lg-3 col-xl-12 float-left p-0"><a href="<?php echo get_template_directory_uri(); ?>/images/history/history-1.png" alt="#" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo get_template_directory_uri(); ?>/images/history/history-1.png" alt="#" class="col-12 float-left"></a></li>
          <li class="col-6 col-lg-3 col-xl-12 float-left p-0"><a href="<?php echo get_template_directory_uri(); ?>/images/history/history-2.png" alt="#" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo get_template_directory_uri(); ?>/images/history/history-2.png" alt="#" class="col-12 float-left"></a></li>
          <li class="col-6 col-lg-3 col-xl-12 float-left p-0"><a href="<?php echo get_template_directory_uri(); ?>/images/history/history-3.png" alt="#" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo get_template_directory_uri(); ?>/images/history/history-3.png" alt="#" class="col-12 float-left"></a></li>
          <li class="col-6 col-lg-3 col-xl-12 float-left p-0"><a href="<?php echo get_template_directory_uri(); ?>/images/history/history-4.png" alt="#" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo get_template_directory_uri(); ?>/images/history/history-4.png" alt="#" class="col-12 float-left"></a></li>

</ul>
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
