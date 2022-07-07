<?php /* Template Name: rental-template */ ?>

<?php get_header(); ?>

<div class="project-nav col-12 float-left p-0">
<?php get_template_part('nav'); ?>
</div>

  </header>

<div class="main-container">

<?php get_template_part('nav-mobile'); ?>

    <main class="rental-template col-12 float-left">
        <?php $image = get_field('main_image'); ?>
        <?php $image_before = get_field('image_before'); ?>

      <div class="rental-template-image col-12 col-lg-4 float-left">
      <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="col-6 col-lg-12 float-left">
      <img src="<?php echo $image_before['url'] ?>" alt="<?php echo $image_before['alt'] ?>" class="col-6 col-lg-12 float-left">
      </div>





        <div class="project-container col-12 col-lg-8 float-left float-lg-right">
    <h1 class="col-12 float-left p-0"><?php the_title(); ?></h1>
          <p class="col-12 float-left">
    <?php the_field('story') ?>
              </p>

          </div>

<div class="project-template-gallery-container col-12 float-left p-lg-0 float-lg-left;">


    <h2 class="col-12 float-left">GALLERY</h2>







        <ul class="project-image project-gallery col-12 float-left p-0">




<?php $image1 = get_field('image_1'); ?>
  <li class="<?php the_field('display_image_1'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image1['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 1" data-title="<?php echo $image1['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image1['caption'] ?></p></li>

<?php $image2 = get_field('image_2'); ?>
  <li class="<?php the_field('display_image_2'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image2['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 2" data-title="<?php echo $image2['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image2['url'] ?>" alt="<?php echo $image2['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image2['caption'] ?></p></li>

<?php $image3 = get_field('image_3'); ?>
  <li class="<?php the_field('display_image_3'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image3['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 3" data-title="<?php echo $image3['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image3['url'] ?>" alt="<?php echo $image3['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image3['caption'] ?></p></li>

<?php $image4 = get_field('image_4'); ?>
  <li class="<?php the_field('display_image_4'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image4['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 4" data-title="<?php echo $image4['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image4['url'] ?>" alt="<?php echo $image4['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image4['caption'] ?></p></li>

<?php $image5 = get_field('image_5'); ?>
  <li class="<?php the_field('display_image_5'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image5['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 5" data-title="<?php echo $image5['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image5['url'] ?>" alt="<?php echo $image5['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image5['caption'] ?></p></li>

<?php $image6 = get_field('image_6'); ?>
  <li class="<?php the_field('display_image_6'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image6['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 6" data-title="<?php echo $image6['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image6['url'] ?>" alt="<?php echo $image6['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image6['caption'] ?></p></li>

<?php $image7 = get_field('image_7'); ?>
  <li class="<?php the_field('display_image_7'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image7['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 7" data-title="<?php echo $image7['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image7['url'] ?>" alt="<?php echo $image7['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image7['caption'] ?></p></li>

<?php $image8 = get_field('image_8'); ?>
  <li class="<?php the_field('display_image_8'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image8['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 8" data-title="<?php echo $image8['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image8['url'] ?>" alt="<?php echo $image8['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image8['caption'] ?></p></li>

<?php $image9 = get_field('image_9'); ?>
  <li class="<?php the_field('display_image_9'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image9['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 9" data-title="<?php echo $image9['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image9['url'] ?>" alt="<?php echo $image9['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image9['caption'] ?></p></li>

<?php $image10 = get_field('image_10'); ?>
  <li class="<?php the_field('display_image_10'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image10['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 10" data-title="<?php echo $image10['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image10['url'] ?>" alt="<?php echo $image10['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image10['caption'] ?></p></li>





<?php $image11 = get_field('image_11'); ?>
  <li class="<?php the_field('display_image_11'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image11['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 11" data-title="<?php echo $image11['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image11['url'] ?>" alt="<?php echo $image11['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image11['caption'] ?></p></li>

<?php $image12 = get_field('image_12'); ?>
  <li class="<?php the_field('display_image_12'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image12['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 12" data-title="<?php echo $image12['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image12['url'] ?>" alt="<?php echo $image12['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image12['caption'] ?></p></li>

<?php $image13 = get_field('image_13'); ?>
  <li class="<?php the_field('display_image_13'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image13['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 13" data-title="<?php echo $image13['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image13['url'] ?>" alt="<?php echo $image13['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image13['caption'] ?></p></li>

<?php $image14 = get_field('image_14'); ?>
  <li class="<?php the_field('display_image_14'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image14['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 14" data-title="<?php echo $image14['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image14['url'] ?>" alt="<?php echo $image14['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image14['caption'] ?></p></li>

<?php $image15 = get_field('image_15'); ?>
  <li class="<?php the_field('display_image_15'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image15['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 15" data-title="<?php echo $image15['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image15['url'] ?>" alt="<?php echo $image15['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image15['caption'] ?></p></li>

<?php $image16 = get_field('image_16'); ?>
  <li class="<?php the_field('display_image_16'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image16['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 16" data-title="<?php echo $image16['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image16['url'] ?>" alt="<?php echo $image16['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image16['caption'] ?></p></li>

<?php $image17 = get_field('image_17'); ?>
  <li class="<?php the_field('display_image_17'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image17['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 17" data-title="<?php echo $image17['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image17['url'] ?>" alt="<?php echo $image17['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image17['caption'] ?></p></li>

<?php $image18 = get_field('image_18'); ?>
  <li class="<?php the_field('display_image_18'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image18['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 18" data-title="<?php echo $image18['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image18['url'] ?>" alt="<?php echo $image18['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image18['caption'] ?></p></li>

<?php $image19 = get_field('image_19'); ?>
  <li class="<?php the_field('display_image_19'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image19['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 19" data-title="<?php echo $image19['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image19['url'] ?>" alt="<?php echo $image19['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image19['caption'] ?></p></li>

<?php $image20 = get_field('image_20'); ?>
  <li class="<?php the_field('display_image_20'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image20['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 20" data-title="<?php echo $image20['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image20['url'] ?>" alt="<?php echo $image20['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image20['caption'] ?></p></li>




<?php $image31 = get_field('image_31'); ?>
  <li class="<?php the_field('display_image_31'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image31['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 31" data-title="<?php echo $image31['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image31['url'] ?>" alt="<?php echo $image31['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image31['caption'] ?></p></li>

<?php $image32 = get_field('image_32'); ?>
  <li class="<?php the_field('display_image_32'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image32['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 32" data-title="<?php echo $imag32['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image32['url'] ?>" alt="<?php echo $image32['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image32['caption'] ?></p></li>

<?php $image33 = get_field('image_33'); ?>
  <li class="<?php the_field('display_image_33'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image33['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 33" data-title="<?php echo $image33['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image33['url'] ?>" alt="<?php echo $image33['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image33['caption'] ?></p></li>

<?php $image34 = get_field('image_34'); ?>
  <li class="<?php the_field('display_image_34'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image34['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 34" data-title="<?php echo $image34['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image34['url'] ?>" alt="<?php echo $image34['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image34['caption'] ?></p></li>

<?php $image35 = get_field('image_35'); ?>
  <li class="<?php the_field('display_image_35'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image35['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 35" data-title="<?php echo $image35['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image35['url'] ?>" alt="<?php echo $image35['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image35['caption'] ?></p></li>

<?php $image36 = get_field('image_36'); ?>
  <li class="<?php the_field('display_image_36'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image36['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 36" data-title="<?php echo $image36['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image36['url'] ?>" alt="<?php echo $image36['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image36['caption'] ?></p></li>

<?php $image37 = get_field('image_37'); ?>
  <li class="<?php the_field('display_image_37'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image37['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 37" data-title="<?php echo $image37['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image37['url'] ?>" alt="<?php echo $image37['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image37['caption'] ?></p></li>

<?php $image38 = get_field('image_38'); ?>
  <li class="<?php the_field('display_image_38'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image38['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 38" data-title="<?php echo $image38['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image38['url'] ?>" alt="<?php echo $image38['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image38['caption'] ?></p></li>

<?php $image39 = get_field('image_39'); ?>
  <li class="<?php the_field('display_image_39'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image39['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 39" data-title="<?php echo $image39['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image39['url'] ?>" alt="<?php echo $image39['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image39['caption'] ?></p></li>

<?php $image40 = get_field('image_40'); ?>
  <li class="<?php the_field('display_image_40'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image40['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 40" data-title="<?php echo $image40['caption'] ?>">
    <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image40['url'] ?>" alt="<?php echo $image40['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image40['caption'] ?></p></li>




    <?php $image41 = get_field('image_41'); ?>
      <li class="<?php the_field('display_image_41'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image41['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 41" data-title="<?php echo $image41['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image41['url'] ?>" alt="<?php echo $image41['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image41['caption'] ?></p></li>

    <?php $image42 = get_field('image_42'); ?>
      <li class="<?php the_field('display_image_42'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image42['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 42" data-title="<?php echo $imag42['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image42['url'] ?>" alt="<?php echo $image42['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image42['caption'] ?></p></li>

    <?php $image43 = get_field('image_43'); ?>
      <li class="<?php the_field('display_image_43'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image43['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 43" data-title="<?php echo $image43['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image43['url'] ?>" alt="<?php echo $image43['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image43['caption'] ?></p></li>

    <?php $image44 = get_field('image_44'); ?>
      <li class="<?php the_field('display_image_44'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image44['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 44" data-title="<?php echo $image44['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image44['url'] ?>" alt="<?php echo $image44['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image44['caption'] ?></p></li>

    <?php $image45 = get_field('image_45'); ?>
      <li class="<?php the_field('display_image_45'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image45['url'] ?>" class="col-12 float-left p-0" data-lightbox="Image 45" data-title="<?php echo $image45['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image45['url'] ?>" alt="<?php echo $image45['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image45['caption'] ?></p></li>

    <?php $image46 = get_field('image_46'); ?>
      <li class="<?php the_field('display_image_46'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image46['url'] ?>" class="col-12 float-left p-0" data-lightbox="Gallery" data-title="<?php echo $image46['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image46['url'] ?>" alt="<?php echo $image46['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image46['caption'] ?></p></li>

    <?php $image47 = get_field('image_47'); ?>
      <li class="<?php the_field('display_image_47'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image47['url'] ?>" class="col-12 float-left p-0" data-lightbox="Gallery" data-title="<?php echo $image47['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image47['url'] ?>" alt="<?php echo $image47['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image47['caption'] ?></p></li>

    <?php $image48 = get_field('image_48'); ?>
      <li class="<?php the_field('display_image_48'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image48['url'] ?>" class="col-12 float-left p-0" data-lightbox="Gallery" data-title="<?php echo $image48['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image48['url'] ?>" alt="<?php echo $image48['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image48['caption'] ?></p></li>

    <?php $image49 = get_field('image_49'); ?>
      <li class="<?php the_field('display_image_49'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image49['url'] ?>" class="col-12 float-left p-0" data-lightbox="Gallery" data-title="<?php echo $image49['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image49['url'] ?>" alt="<?php echo $image49['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image49['caption'] ?></p></li>

    <?php $image50 = get_field('image_50'); ?>
      <li class="<?php the_field('display_image_50'); ?> col-6 col-md-3 float-left p-0"><a href="<?php echo $image50['url'] ?>" class="col-12 float-left p-0" data-lightbox="Gallery" data-title="<?php echo $image50['caption'] ?>">
        <div class="project-image-container col-12 float-left p-0"><img src="<?php echo $image50['url'] ?>" alt="<?php echo $image50['alt'] ?>" class="col-12 float-left p-0"></a></div><p class="col-12 float-left p-0"><?php echo $image50['caption'] ?></p></li>


            </ul>




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
