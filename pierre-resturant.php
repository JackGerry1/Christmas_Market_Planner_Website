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
                <img src="images/food_pierre_resturant.jpg" alt="Marco Resturant" />
            </div>
            <div class="swiper-slide">
                <img src="images/food_marco_menu.jpg" alt="Marco Menu" />
            </div>
            <div class="swiper-slide">
                <img
                    src="images/food_marco_fish.jpg"
                    alt="Marco Fish"
                />
            </div>
        </div>
        <!-- Pagination Buttons -->
        <div class="swiper-pagination"></div>
        <!-- Previous and next image buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="detailed-container">
        <!-- Text information about Marco Pierre White Restuarant -->
        <div class="detailed-content">
            <h1 class="heading">Marco Pierre Restaurant</h1>
            <p class="text-info">This is a stunning high-quality resturant that serves afternoon tea, steaks and much more. Supported by a fantastic view The Barbican.<br> You can enjoy a three course meal in a relaxed but sophisticated environment.</p>
            <h1 class="heading">Menu Options</h1>
            <p class="text-info">There is a wonderfull array of food that is availble for you and your family spread across three courses.<br>For starters you can have, prawn cocktails, calamari, salads and much more.<br>For main course you can have a variety of steaks, burgers fish and chips and much more.<br>Deserts are cheesecake, sticky toffee pudding, billionaire's slice and much more.</p>
            <h1 class="heading">Prices</h1>
            <p class="text-info">The average price for a starter is roughly £10<br>Main Courses roughly average is £25<br>Deserts average is roughly £8</p>
            <h1 class="heading">Full Menu With Prices</h1>
            <!-- Button for more information about Marco Pierre White Restaurant -->
            <a href="https://www.mpwrestaurants.co.uk/assets/media/files/STEAKHOUSE/PLYMOUTH/SHPlymouth_ALaCarte.pdf" target="_blank"><button class="home-button">Learn More About Marco Pierre White Restaurant</button></a>
        </div>
    </div>  
    <div class="breaker">
        <h1 class="heading">Review System</h1>
    </div>
    <div class="content home">
        <!-- Review system with JS integration for Marco Pierre White Restaurant-->
        <h2>See Some Top Reviews</h2>
        <div class="breaker-reviews"></div>
        <p class="sub-header">Check Out Marco Pierre White Reviews Below</p>
        <div class="reviews"></div>     
        <script src="scripts/review_script.js"></script>
    </div>
    <div class="breaker"></div>
    <div class="detailed-container">
        <div class="detailed-content">
        <h1 class="heading">Find Us At Armada Way, Plymouth PL1 2HJ</h1>
        <!-- Google map of the Saltram Festive -->    
            <div class="map-container">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10179.824433319489!2d-4.1417885!3d50.3673729!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x746307eb44c7a87e!2sMarco%20Pierre%20White!5e0!3m2!1sen!2suk!4v1672947871051!5m2!1sen!2suk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> <!-- #map -->
            </div> <!-- .map-container -->
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>