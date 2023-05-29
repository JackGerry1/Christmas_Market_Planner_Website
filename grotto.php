<!-- Insert Header PHP Code -->
<?php 
    include_once 'templates/header.php';    
?>
  <div class="main-content">
  <!-- Slideshow of images using the Swiper library -->  
  <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides For Images -->
            <div class="swiper-slide">
                <img src="images/events_grotto.jpg" alt="Grotto" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/events_inside_grotto.jpg" alt="Inside grotto" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img
                    src="images/events_santas_grottos.jpg"
                    alt="Santa grotto"
                />
            </div> <!-- .swiper-slide -->
        </div> <!-- .swiper-wrapper -->
        <!-- Pagination Buttons -->
        <div class="swiper-pagination"></div>
        <!-- Next and previous image buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div> <!-- .swiper -->
    <div class="detailed-container">
        <div class="detailed-content">
            <!-- Info about Santas Grotto -->
            <h1 class="heading">Santa's Grotto</h1>
            <p class="text-info">Come and visit Santa and have a wonderful experience for your family, especially your children.<br>Explore Santa's Grotto and get into the Christmas Spirit.</p>
            <h1 class="heading">Prices</h1>
            <p class="text-info">£10.25 per child with two free adults.</p>
            <h1 class="heading">Full Prices</h1>
            <a href="https://www.facebook.com/people/Plymouths-City-Centre-Santas-Grotto/100087422798512/" target="_blank"><button class="home-button">Learn More About Santa's Christmas Grotto</button></a>
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
    <div class="breaker">
        <!-- Review System -->
        <h1 class="heading">Review System</h1>
    </div> <!-- .breaker -->
    <div class="content home">
        <h2>See Some Top Reviews</h2>
        <div class="breaker-reviews"></div>
        <p class="sub-header">Check out the below reviews for our website.</p>
        <div class="reviews"></div>     
        <script src="scripts/review_script.js"></script>
    </div> <!-- .content home -->
    <div class="breaker"></div>
    <div class="detailed-container">
        <div class="detailed-content">
            <!-- Map For Santa's Grotto -->
        <h1 class="heading">Find Us At New George St, Plymouth PL1 To Come And Visit Santa</h1>
            <div class="map-container">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d636.1851684441347!2d-4.143012170736958!3d50.37138985408475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934c3fff7999%3A0x32c4edc997c670c1!2sThe%20Sundial!5e0!3m2!1sen!2suk!4v1672948732008!5m2!1sen!2suk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> <!-- #map -->
            </div> <!-- .map-container -->
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>