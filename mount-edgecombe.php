<!-- Insert Header PHP Code -->
<?php 
    include_once 'templates/header.php';    
?>
  <div class="main-content">
  <!-- Slideshow of images using the Swiper library -->  
  <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides for images -->
            <div class="swiper-slide">
                <img src="images/events_Mount_Edgecombe.jpg" alt="Mount Edgecombe" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/events_garden.jpg" alt="Garden" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img
                    src="images/events_Mount_Edgecombe_House.jpg"
                    alt="Mount Edgecombe House"
                />
            </div> <!-- .swiper-slide -->
        </div> <!-- .swiper-wrapper -->
        <!-- Pagination Buttons-->
        <div class="swiper-pagination"></div>
        <!-- Previous and next images buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div> <!-- .swiper -->
    <div class="detailed-container">
        <!-- Text information about Mount Edgecombe -->
        <div class="detailed-content">
            <h1 class="heading">Mount Edgecombe</h1>
            <p class="text-info">Take you and your family to a wonderful trip across to Mount Edgecombe, where you can explore the wonderful gardens.<br> There is also a variety of walking routes around the gardens.</p>
            <h1 class="heading">Detailed Overview Of Events</h1>
            <p class="text-info">Explore the gardens, walk around mount edgecombe and have fun with your family.<br>Explore the house and other wonderful sites at Mount Edgecombe.</p>
            <h1 class="heading">Prices</h1>
            <p class="text-info">Prices may vary depending on what you do at Mount Edgecombe and your means of travel, if you get the Cremyll Ferry it is £2 for adults and £1 for children.<br></p>
            <h1 class="heading">More Information</h1>
            <!-- Button for more information about Mount Edgecombe -->
            <a href="https://www.mountedgcumbe.gov.uk/visit/" target="_blank"><button class="home-button">Learn More About Mount Edgecombe</button></a>
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->  
    <div class="breaker">
        <h1 class="heading">Review System</h1>
    </div> <!-- .breaker -->
    <div class="content home">
        <!-- Review system with JS integration for Mount Edgecombe-->
        <h2>See Some Top Reviews</h2>
        <div class="breaker-reviews"></div>
        <p class="sub-header">Check out the below reviews for our website.</p>
        <div class="reviews"></div>     
        <script src="scripts/review_script.js"></script>
    </div> <!-- .content home -->
    <div class="breaker"></div>
    <div class="detailed-container">
        <div class="detailed-content">
        <h1 class="heading">Find Us At Cremyll, Torpoint PL10 1HZ</h1>
            <div class="map-container">
                <div id="map">
                 <!-- Google map of Mount Edgecombe location -->   
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2545.6555620855406!2d-4.17812538412222!3d50.354329402167046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c937c5f174135%3A0x699b1a0abcad45eb!2sMount%20Edgcumbe%20House%20and%20Country%20Park!5e0!3m2!1sen!2suk!4v1672950440340!5m2!1sen!2suk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> <!-- #map -->
            </div> <!-- .map-container -->
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>