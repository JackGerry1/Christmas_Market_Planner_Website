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
                <img src="images/about_church.jpg" alt="church" />
            </div>  <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/about_devonport.jpg" alt="Devonport" />
            </div>  <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/about_memorial.jpg" alt="Memorial" />
            </div> <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/about_Town.jpg" alt="Town" />
            </div>  <!-- .swiper-slide -->
        </div>  <!-- .swiper-wrapper -->
        <!-- Pagination Buttons -->
        <div class="swiper-pagination"></div>

        <!-- Previous and next image buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="centered-text">Historical Pictures Of Plymouth</div>
    </div>  <!-- .swiper -->
    <div class="detailed-container">
        <!-- Historical Information about plymouth -->
        <div class="detailed-content">
            <h1 class="heading">Royal Sailors Devonport</h1>
            <p class="text-info">This an old picture of the Royal William Yard approixmately taken in 1841.<br>This was a common port for the sailors, ship builders/repaiers, as well as merchants, maritime traders.<br>It also had cargo holds, docks and warehouses.</p>
            <h1 class="heading">Navy Memorial</h1>
            <p class="text-info">This is a memorial located on the top of the barbican and is dedicated to the sailors who lost their lives in World War 1 and World War 2.<br>These Sailors were from the commonwealth forces and their are the names of sailors on plaques around the memorial.</p>
            <h1 class="heading">Old Town Street</h1>
            <p class="text-info">This picture of Old Town Street were there was a tramline going down the center of the road.<br>This was one of the first pictures of electricty cables being layed down.</p>
            <h1 class="heading">St Andrews Church</h1>
            <p class="text-info">This was a chruch that was located near where Drake Circus is now, before it was destroyed during the second World War.</p>
        </div>  <!-- .detailed-content -->
    </div>  <!-- .detailed-container -->
    <div class="breaker"></div>    
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides for images-->
            <div class="swiper-slide">
                <img src="images/home_Barbican.jpg" alt="Barbican" />
            </div>  <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/home_Drakes.jpg" alt="Drakes" />
            </div>  <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/home_night.jpg" alt="Night" />
            </div>  <!-- .swiper-slide -->
            <div class="swiper-slide">
                <img src="images/home_Smeatons.jpg" alt="Smeatons" />
            </div> <!-- .swiper-slide -->
        </div> <!-- .swiper-wrapper -->
        <!-- Pagination Buttons -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="centered-text">Modern Pictures Of Plymouth</div>
    </div> <!-- .swiper -->
    <div class="detailed-container">
        <div class="detailed-content">
             <!-- Modern Information About Plymouth -->
            <h1 class="heading">The Barbican</h1>
            <p class="text-info">This picture is a beautiful overview of the barbican in modern Plymouth.<br>You can see the sea, Smeatons, tower the navy memorial and much more.</p>
            <h1 class="heading">Inside Drakes Circus</h1>
            <p class="text-info">This is a picture inside the Drakes Circus Shopping centre.<br>There are a variety of shops inside drakes circus where you can buy clothes, gifts, music, beauty products and much more.</p>
            <h1 class="heading">The Hoe At Night</h1>
            <p class="text-info">This a picture of what one part of the hoe looks like at night, you can see the setting sun reflecting of the ocean.</p>
            <h1 class="heading">Smeatons Tower</h1>
            <p class="text-info">This is a picture of Smeatons Tower, which is a lighthouse that looks out over the sea on the barbican.</p>
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
    <div class="breaker"></div>
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>