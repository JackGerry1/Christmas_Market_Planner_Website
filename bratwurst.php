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
                <img src="images/food_Bratwerst.jpg" alt="Bratwerst Stall" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/food_bratwurst.jpg" alt="Bratwerst Stall with employee" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/food_bratwurst_sausage.jpg" alt="Sausage Stall" />
            </div> <!-- .swiper-slide -->
        </div> <!-- .swiper-wrapper -->
        <!-- Pagination Buttons -->
        <div class="swiper-pagination"></div>
        <!-- Previous and next image buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div> <!-- .swiper -->
    <div class="detailed-container">
        <div class="detailed-content">
             <!-- Information about the Bratwurst Stall -->
            <h1 class="heading">The Bratwurst Stall</h1>
            <p class="text-info">This is a stunning high-quality food stall that others authentic German sausages at great prices.<br> You can enjoy this food whilst browsing other stalls within the Plymouth Christmas Market.</p>
            <h1 class="heading">Menu Options</h1>
            <p class="text-info">You can get bratwursts, bockwursts, Cheese Krakuaer and Chilli Bockwurst.<br>You can also get an assortmant of cold drinks.</p>
            <h1 class="heading">Prices</h1>
            <p class="text-info">Food is £7 and drinks are £2</p>
            <h1 class="heading">Full Food Prices</h1>
            <a href="https://www.plymouthherald.co.uk/whats-on/whats-on-news/plymouth-christmas-market-prices-revealed-7876985" target="_blank"><button class="home-button">Learn More About The Bratwurst Stall</button></a>
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
    <div class="breaker">
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
        <h1 class="heading">Find Us At New George St, Plymouth PL1</h1>
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