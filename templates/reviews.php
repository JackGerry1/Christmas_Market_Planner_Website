<!--
Code Inspired by: 

Adams, D. (2020). Review System with PHP, MySQL, and AJAX. 
[online] CodeShack. Available at: https://codeshack.io/review-system-php-mysql-ajax/ [Accessed 5th January. 2023].

-->

<?php
// Update the details below with your MySQL details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'website_reviews';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to database!');
}
// Below function will convert datetime to time elapsed string.
function time_elapsed_string($datetime, $full = false) {
    // Set the default timezone to Europe/London
    date_default_timezone_set('Europe/London');

    // Create DateTime objects for the current time and the passed datetime
    $now = new DateTime();
    $ago = new DateTime($datetime);
    
    // Calculate the difference between the two dates
    $diff = $now->diff($ago);

    // Initialize an empty array to hold the elapsed time units
    $units = [];

    // If the difference is greater than one year, add the number of years to the units array
    if ($diff->y > 0) {
        $units[] = $diff->y . ' year' . ($diff->y > 1 ? 's' : '');
    }
    // If the difference is greater than one month, add the number of months to the units array
    if ($diff->m > 0) {
        $units[] = $diff->m . ' month' . ($diff->m > 1 ? 's' : '');
    }
    // If the difference is greater than one day, add the number of days to the units array
    if ($diff->d > 0) {
        $units[] = $diff->d . ' day' . ($diff->d > 1 ? 's' : '');
    }
    // If the difference is greater than one hour, add the number of hours to the units array
    if ($diff->h > 0) {
        $units[] = $diff->h . ' hour' . ($diff->h > 1 ? 's' : '');
    }
    // If the difference is greater than one minute, add the number of minutes to the units array
    if ($diff->i > 0) {
        $units[] = $diff->i . ' minute' . ($diff->i > 1 ? 's' : '');
    }
    // If the difference is greater than one second, add the number of seconds to the units array
    if ($diff->s > 0) {
        $units[] = $diff->s . ' second' . ($diff->s > 1 ? 's' : '');
    }
    
    // If $full is not true take only first unit of time
    if (!$full) {
        $units = array_slice($units, 0, 1);
    }

    // Implode the array of units into a string separated by commas, and append " ago"
    return $units ? implode(', ', $units) . ' ago' : 'just now';
}
// Page ID needs to exist, this is used to determine which reviews are for which page.
if (isset($_GET['page_id'])) {
    if (isset($_POST['name'], $_POST['rating'], $_POST['content'])) {
        // Insert a new review (user submitted form)
        $stmt = $pdo->prepare('INSERT INTO reviews (page_id, name, content, rating, submit_date) VALUES (?,?,?,?,NOW())');
        $stmt->execute([$_GET['page_id'], $_POST['name'], $_POST['content'], $_POST['rating']]);
        exit('<p class="sub-header">Your review has been submitted! Please Refresh The Page To See It!</p>');             
    }
    
    // Get all reviews by the Page ID ordered by the submit date
    $stmt = $pdo->prepare('SELECT * FROM reviews WHERE page_id = ? ORDER BY submit_date DESC');
    $stmt->execute([$_GET['page_id']]);
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Get the overall rating and total amount of reviews
    $stmt = $pdo->prepare('SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM reviews WHERE page_id = ?');
    $stmt->execute([$_GET['page_id']]);
    $reviews_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('Please provide the page ID.');
}
?>
<div class="centered-review">
    <!-- Overall rating and total number of reviews -->
    <div class="overall_rating">
        <span class="num"><?=number_format($reviews_info['overall_rating'], 1)?></span>
        <span class="stars"><?=str_repeat('&#9733;', round($reviews_info['overall_rating']))?></span>
        <span class="total"><?=$reviews_info['total_reviews']?> Reviews</span>
    </div>
</div>
<div class="centered-review">
<a href="#" class="write_review_btn">Write Review</a>
</div>
<div class="breaker-reviews"></div>
<!-- Displays information to allow users to write reviews. -->
<div class="write_review">
    <!-- Form for submitting new reviews -->
    <form>
        <input name="name" type="text" placeholder="Your Name" required>
        <input name="rating" type="number" min="1" max="5" placeholder="Rating (1-5)" required>
        <textarea name="content" placeholder="Write your review here..."  required></textarea>
        <div class="centered-review">
            <button class="write_review_btn" type="submit">Submit Review</button>
        </div>
        <div class="breaker-reviews"></div>
    </form>
</div>
<!-- Loop through and display each individual user review -->
<?php foreach ($reviews as $review): ?>




<div class="review">
    <!-- Review name, with htmlspecialchars method to prevent XSS attacks -->
    <h3 class="name"><?=htmlspecialchars($review['name'], ENT_QUOTES)?></h3>
    <div>
        <!-- Review rating -->
        <span class="rating"><?=str_repeat('&#9733;', $review['rating'])?></span>
        <!-- Review date -->
        <span class="date"><?=time_elapsed_string($review['submit_date'])?></span>
    </div>
    <!-- Users Written Review -->
    <p class="content"><?=htmlspecialchars($review['content'], ENT_QUOTES)?></p>
</div>
<?php endforeach ?>