<?php /*Template Name: Contact */ ?>

<?php get_header(); ?>

<?php get_template_part('nav'); ?>

    </header>

    <?php get_template_part('nav-mobile'); ?>

<div class="about-container col-12 col-lg-8 float-left">

    <main class="contact col-12 float-left p-0">

      <h2 class="col-12 float-left">CONTACT US</h2>

      <?php
      $args = array(
        'post_type' => 'contact-info',
        'posts_per_page' => 1,

      /*  'category_name' => '1950s' */
      );
      $query = new WP_Query( $args );

      ?>

      <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post(); ?>


      <p class="col-12 float-left"><?php the_field('text_info'); ?></p>

<?php endwhile; endif; ?>

      <a href="mailto:gmaust32@gmail.com" class="contact-a col-10 offset-1 col-md-6 offset-md-0 float-left">
<img src="<?php echo get_template_directory_uri(); ?>/images/contact/mail.svg" alt="email us" class="float-left">
<p>gmaust32@gmail.com</p>
      </a>

      <a href="#" class="contact-a col-10 offset-1 col-md-6 offset-md-0 float-left">
<img src="<?php echo get_template_directory_uri(); ?>/images/contact/phone.svg" alt="call us" class="float-left">
<p>1(304) 266-4304</p>
      </a>

      <a href="mailto:empire2000llc@gmail.com " class="contact-a col-10 offset-1 col-md-6 offset-md-0 float-left">
<img src="<?php echo get_template_directory_uri(); ?>/images/contact/mail.svg" alt="email us" class="float-left">
<p>empire2000llc@gmail.com</p>
      </a>

      <a href="#" class="contact-a col-10 offset-1 col-md-6 offset-md-0 float-left">
<img src="<?php echo get_template_directory_uri(); ?>/images/contact/phone.svg" alt="call us" class="float-left">
<p>1(304) 216-0475</p>
      </a>

      </main>
</div>
<div class="map-contact-container col-12 col-lg-4 float-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12292.45563130529!2d-79.9543548133689!3d39.624639021439165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88357c9c2e3cbc41%3A0xb6fcbc1b6044a404!2sGreenmont%2C%20Morgantown%2C%20WV%2026501!5e0!3m2!1sen!2sus!4v1598121882596!5m2!1sen!2sus" allowfullscreen="" aria-hidden="false" tabindex="0" class="map-contact col-12 float-left p-0"></iframe>
</div>

<?php get_footer(); ?>


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
