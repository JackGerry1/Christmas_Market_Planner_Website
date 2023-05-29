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
                <img src="images/events_Saltram_festive.jpg" alt="Saltram Festive" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/events_saltram_festive2.jpg" alt="Setting up the christmas tree" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img
                    src="images/events_saltram_festive3.jpg"
                    alt="Christmas Tree in Saltram"
                />
            </div> <!-- .swiper-slide -->
        </div> <!-- .swiper-wraper -->
        <!-- Pagination buttons -->
        <div class="swiper-pagination"></div>
        <!-- Previous and next buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div> <!-- .swiper -->
    <div class="detailed-container">
        <!-- Text information about Saltram Festive -->
        <div class="detailed-content">
            <h1 class="heading">Saltram Festive Event</h1>
            <p class="text-info">Explore the wonderful Saltram House that has been brilliantly decorated for Christmas.<br>Explore Saltram House with your family, as well as the rest of the nature reserve.</p>
            <h1 class="heading">Detailed Overview Of Events</h1>
            <p class="text-info">Explore the Christmas Garden, Saltram House decorated in the christmas spirit and the Christmastime Ball.<br>You can also enjoy food and drinks in the Saltram Cafe.</p>
            <h1 class="heading">Prices</h1>
            <p class="text-info">National Trust Members can get in for free.<br>If not adults can pay £13.00 and children can pay £6.50.<br>Family Tickets for two adults and three children is £32.50 and one adult and max three children is £19.50.</p>
            <h1 class="heading">Full Prices</h1>
            <!-- Button for more information about the event -->
            <a href="https://www.nationaltrust.org.uk/visit/devon/saltram/christmas-at-saltram" target="_blank"><button class="home-button">Learn More About The Saltram Festive Event</button></a>
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
    <div class="breaker">
        <h1 class="heading">Review System</h1>
    </div> <!-- .breaker -->
    <div class="content home">
        <!-- Review system with JS integration customized to Saltram Festive -->
        <h2>See Some Top Reviews</h2>
        <div class="breaker-reviews"></div>
        <p class="sub-header">Check out the below reviews for our website.</p>
        <div class="reviews"></div>     
        <script src="scripts/review_script.js"></script>
    </div> <!-- .content home -->
    <div class="breaker"></div>
    <div class="detailed-container">
        <div class="detailed-content">
        <h1 class="heading">Find Us At Saltram, Plympton, Plymouth PL7 1UH</h1>
            <div class="map-container">
                <!-- Google map of the Saltram Festive -->
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.218126931214!2d-4.0832426841214735!3d50.38113220023802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486cec5e6bd41845%3A0x7249f5faed92d28e!2sNational%20Trust%20-%20Saltram!5e0!3m2!1sen!2suk!4v1672950732152!5m2!1sen!2suk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> <!-- #map -->
            </div> <!-- .map-container -->
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>