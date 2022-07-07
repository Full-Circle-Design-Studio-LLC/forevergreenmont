<?php /* Template Name: History */ ?>

<?php get_header(); ?>

<?php get_template_part('nav'); ?>

  </header>

<div class="main-container">

<?php get_template_part('nav-mobile'); ?>


    <main class="history float-left col-12" id="history-margin">

            <h2 class="col-12 float-left">HISTORY OF GREENMONT</h2>

      <?php
          $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
          query_posts(
              array (
                  'post_type' => 'history-image',
                  'paged' => $paged )
              );
              // The Loop
              while ( have_posts() ) : the_post(); ?>






      <p class="history-page col-12 float-left">


<?php $image1 = get_field('image_1'); ?>
<span class="img-1 col-12 col-md-5 col-lg-3 float-right">
  <img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt'] ?>" class="col-12 float-left">
<?php echo $image1['caption'] ?>
</span>
Greenmont is nestled between historic South Park, the downtown district and the wooded landscape of White Ave.  Spanning close to 56 acres, Greenmont was originally part of a 600 acre tract of land purchased by Michael Kerns in the late 1700s.  <a href="https://forevergreenmont.com/history-post/kerns-fort/">(See Kerns Fort)</a>  As Morgantown expanded Kerns sold off parcels of his holdings into what has developed into Greenmont and the surrounding areas.  Greenmont derives its name from one of Morgantown's first real estate agents, a Mr. George Hagans who was selling lots in the area and picked the name based on the fact that there were many hardwoods and it was hilly.  Greenmont itself is the oldest established neighborhood in Morgantown.  Many of the laborers recruited to build Morgantown and work in the factories lived in Greenmont, this included stone masons, tin mill workers, coal miners, plasterers and glass factory workers.  It was a convenient community for the working class because the trolley came directly into Greenmont to Sabraton where many of the factories and mills were located.
<br><br>

<?php $image2 = get_field('image_2'); ?>
<span class="img-2 col-12 col-md-5 col-lg-3 float-left">
<img src="<?php echo $image2['url'] ?>" alt="<?php echo $image2['alt'] ?>" class="col-12 float-left">
<?php echo $image2['caption'] ?>
</span>

Most of the homes in Greenmont were built between 1901-1925.  Most of the residents came from Italy, but there was also significant groups from Greece, England and Wales, as well as an African American section of the neighborhood on White Avenue. <a href="https://forevergreenmont.com/history-post/edwards/">(See Edwards House)</a> Greenmont was a working class neighborhood and therefore the homes do not reflect the high style and Victorian features of the neighboring South Park community.  Many homes in Greenmont had garages added with small apartments to allow family members who were immigrating an additional place to stay with relatives.  Greenmont residents established a variety of businesses as they attempted to recreate their villages abroad.  Gardens were prevalent, wine making was a neighborhood must and fresh meat and produce were sold on every corner.  Small locally owned businesses abounded, and between 1929-30, 75 businesses existed in the Greenmont neighborhood.  This included 6 auto repair shops, 5 hair dressers and 11 grocers.
<br><br>



Most businesses at this time however, dealt with construction, ranging from plaster work, plumbing, carpenters, building contractors, drayage (transport of goods), and stone masons.  One locally known and extremely talented mason was Thoney Pietro.  Pietro and his brothers moved to Morgantown in 1911 and opened the Pietro Paving and Construction Company.  They moved into Greenmont where the neighborhood reminded him of his Italian homeland.  Many of the stone walls and the paved roads in Greenmont are the work of Pietro and his men.  <a href="https://forevergreenmont.com/history-post/thoney-pietro/">(See Pietro Building and Pietro Court).</a>  Other examples of his work can be seen today at 334 Pennsylvania Avenue, 333, Pennsylvania Avenue, 233 Cherry Street and 458 White Avenue.

<br><br>
<?php $image3 = get_field('image_3'); ?>
<span class="img-3 col-12 col-md-5 col-lg-3 float-right">
<img src="<?php echo $image3['url'] ?>" alt="<?php echo $image3['alt'] ?>" class="col-12 float-left">
<?php echo $image3['caption'] ?>
</span>

Throughout the 1930s, Greenmont continued to flourish. Many residents continued to work at downtown businesses and industries.  As Morgantown continued to grow so did Greenmont.  During this period the neighborhood saw the construction of Christian and Missionary Alliance Church on Arch Street in 1931 and even more notable, the Second Ward School Annex otherwise known as the Second Ward Negro Elementary School in 1939 <a href="https://forevergreenmont.com/history-post/second-ward-annex/">(See Second Ward Annex).</a>  The spattering of old and new businesses continued throughout the neighborhood until an overall shift in societal construct slowly eroded the once close knit Greenmont community. The trolley closed in 1934 and bus service commenced.  Cars also became more prevalent by the 1940s making it unnecessary for people to walk to grocers and stores.  Also by the end of World War II, the G.I Bill brought an influx of students to the university creating a larger need for student housing.  Long time industries of glass making and coke ovens provided less employment. The neighborhood fabric began to unweave and more people moved into the neighboring suburbs of the ever expanding Morgantown.

      <br><br>
      <?php $image4 = get_field('image_4'); ?>
      <span class="img-4 col-12 col-md-5 col-lg-3 float-left">
      <img src="<?php echo $image4['url'] ?>" alt="<?php echo $image4['alt'] ?>" class="col-12 float-left">
      <?php echo $image4['caption'] ?>
      </span>

    Being in close proximity to downtown had previously been an advantage to Greenmont residents, but with the growth of WVU came the dramatic increase of rentals in the Greenmont area.  As older families died or children moved away, houses were converted into multi-unit apartments to meet student housing needs.  For several decades Greenmont struggled with both societal changes and overdevelopment.  It was not until the early 1990s that residents pressured the city to designate the Greenmont area as an R-1A district.  Essentially this prevented property owners from taking single family homes and carving them up into multi unit apartment buildings.  This designation as well as the recognition of the Fairmont Morgantown Housing Authority to convert rentals back into single family homes in the early 2000s help set the stage for Greenmont's comeback today.

    <br><br>

      Today Greenmont is continuing to gain popularity among home owners and renters alike.  Some older landlords have decided to sell rather than update their properties to compete with the overdeveloped rental market, creating an opportunity for first time home buyers.  Greenmont still provides convenient access to downtown and Sabraton and shares many of the advantages of South Park residents, but at a much smaller price tag.  The ability to walk to local businesses and entertainment venues is becoming more desirable and current residents prefer to park their car instead of driving.  The desire for access to small businesses has also increased and the establishment of new businesses in the neighborhood have had a positive impact on the area.  Greenmont currently has an active neighborhood association that hosts an annual block party and Halloween party.  It is through the hard work of the residents, business owners, city officials and community stakeholders that Greenmont is returning to its once vibrant status.




          </p>

      <?php endwhile; ?>

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

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>
