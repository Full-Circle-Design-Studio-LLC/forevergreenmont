<?php /* Template Name: Multi-Unit */ ?>

<?php get_header(); ?>

<div class="rental-nav col-12 float-left p-0">
<?php get_template_part('nav'); ?>
</div>
  </header>

<div class="main-container">

<?php get_template_part('nav-mobile'); ?>

    <main class="rental-template col-12 float-left">
        <?php $image = get_field('main_image'); ?>

      <div class="rental-template-image col-12 col-md-4 float-left">
      <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-12 float-left p-0">
      </div>


      <h1 class="col-12 col-md-7 offset-md-1 float-left"><?php the_title(); ?></h1>

      <div class="col-12 col-md-7 offset-md-1 float-left">
      <h4 class="available float-left"><?php the_field('availability'); ?> <?php the_field('date-available'); ?></h4>
      </div>

<h4 class="col-12 col-md-7 offset-md-1 float-left"><?php the_field('price'); ?></h4>
      <p class="col-12 col-md-7 offset-md-1 float-left">
<?php the_field('summary') ?>
          </p>





        <div class="property-features-container col-12 col-md-7 offset-md-1 p-0 float-left">
          <h2 class="col-12 float-left"><?php the_field('features-template');  ?></h2>
          <ul class="col-12 float-left p-0">
            <li class="col-6 float-left"><?php the_field('bedrooms'); ?></li>
            <li class="col-6 float-left"><?php the_field('bathrooms'); ?></li>
            <li class="col-6 float-left"><?php the_field('pet_friendly'); ?></li>
            <li class="col-6 float-left"><?php the_field('laundry'); ?></li>
          </ul>

          <div class="contact-landlord-container col-12 float-left">
            <p class="float-left p-0">Interested in this property? Call or Text <a href="#" class="#"> (304) 266-4304</a></p>
            </div>
          </div>

<div class="rental-template-gallery-container col-12 float-left p-lg-0">


    <h2 class="col-12 float-left">GALLERY</h2>

        <ul class="rental-template-gallery col-12 float-left p-0">


<?php $image1 = get_field('image_1'); ?>
        <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image1['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>" class="col-12 float-left"></a></li>

<?php $image2 = get_field('image_2'); ?>
  <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image2['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image2['url'] ?>" alt="<?php echo $image2['alt'] ?>" class="col-12 float-left"></a></li>

<?php $image3 = get_field('image_3'); ?>
  <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image3['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image3['url'] ?>" alt="<?php echo $image3['alt'] ?>" class="col-12 float-left"></a></li>

<?php $image4 = get_field('image_4'); ?>
  <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image4['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image4['url'] ?>" alt="<?php echo $image4['alt'] ?>" class="col-12 float-left"></a></li>

<?php $image5 = get_field('image_5'); ?>
  <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image5['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image5['url'] ?>" alt="<?php echo $image5['alt'] ?>" class="col-12 float-left"></a></li>

<?php $image6 = get_field('image_6'); ?>
  <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image6['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image6['url'] ?>" alt="<?php echo $image6['alt'] ?>" class="col-12 float-left"></a></li>

<?php $image7 = get_field('image_7'); ?>
  <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image7['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image7['url'] ?>" alt="<?php echo $image7['alt'] ?>" class="col-12 float-left"></a></li>

<?php $image8 = get_field('image_8'); ?>
  <li class="col-6 col-md-3 float-left p-0"><a href="<?php echo $image8['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="Front, outside view of the property."><img src="<?php echo $image8['url'] ?>" alt="<?php echo $image8['alt'] ?>" class="col-12 float-left"></a></li>
            </ul>

            </div>

            <div class="contact-landlord-container col-12 float-left d-none">
              <a href="#" class="col-12 col-lg-6 offset-lg-3 float-left">Contact Landlord</a>
              </div>

      </main>
      <div class="map-iframe">
      <?php the_field('map') ?>
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
