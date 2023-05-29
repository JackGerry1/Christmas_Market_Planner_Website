<!-- Insert Header PHP Code -->
<?php 
    
    include_once 'templates/header.php';
    // Include the config file for the website
    @include 'templates/config.php';

    session_start();
    
    // check if the user is logged in or not, if not redirect to login page
    if(!isset($_SESSION['user_name'])){
        header('location:login.php');
    }
     

?>    
<div class="main-content">
    <div class="reg-container">
        <div class="reg-position-first">
            <div class="content">
                <!-- Welcome message displayed to the user based on their username -->
                <h1>Welcome <span><?php echo $_SESSION['user_name']; ?></span><br>To The Plymouth Christmas<br>Market Planner Website</h1>
                <p>You may want to visit these pages.</p>
                <!-- Navigation buttons to other pages on the website -->
                <a href="events.php" class="home-button">Events</a>
                <a href="food-venues.php" class="home-button">Food Venues</a>
                <a href="about-plymouth.php" class="home-button">About Plymouth</a>
            </div> <!-- .content -->
        </div> <!-- .reg-position-first -->
    </div> <!-- .reg-container   -->
    <div class="reg-container">
        <div class="reg-position-first">
            <div class="content">
                <!-- Buttons for registering or logging in with another account or logging out of current account -->
                <h1>Account Settings</h1>
                <p>If you want to register or login with another account & logout</p>
                <a href="signup.php" class="home-button">Signup</a>
                <a href="login.php" class="home-button">Login</a>
                <a href="logout.php" class="home-button">Logout</a>               
            </div> <!-- .content -->           
        </div> <!-- .reg-position-first -->
    </div> <!-- .reg-container   -->
</div> <!-- .main-content  -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>