/* 
Code Inspired by: 

Adams, D. (2020). Review System with PHP, MySQL, and AJAX. 
[online] CodeShack. Available at: https://codeshack.io/review-system-php-mysql-ajax/ [Accessed 5th January. 2023].

*/

// Determine the current page URL
const currentUrl = window.location.pathname;

// Initialize the reviews page ID
let reviewsPageId = 0;

// Use a switch statement to determine the reviews page ID based on the current URL
switch (currentUrl) {
    case "/Christmas_Market_Planner_Website/pierre-resturant.php":
        reviewsPageId = 1;
        break;
    case "/Christmas_Market_Planner_Website/hog-roast.php":
        reviewsPageId = 2;
        break;
    case "/Christmas_Market_Planner_Website/bratwurst.php":
        reviewsPageId = 3;
        break;
    case "/Christmas_Market_Planner_Website/mount-edgecombe.php":
        reviewsPageId = 4;
        break;
    case "/Christmas_Market_Planner_Website/grotto.php":
        reviewsPageId = 5;
        break;
    default:
        reviewsPageId = 6;
}

// Fetch the reviews template from the server and pass the page ID as a parameter
fetch("templates/reviews.php?page_id=" + reviewsPageId)
    .then((response) => response.text())
    .then((data) => {
        // Insert the data into the .reviews element
        document.querySelector(".reviews").innerHTML = data;

        // Set up the click event handler for the write review button
        document.querySelector(".reviews .write_review_btn").onclick = (
            event
        ) => {
            event.preventDefault();
            // Display the write review form
            document.querySelector(".reviews .write_review").style.display =
                "block";
            // Set focus on the name input field
            document
                .querySelector(".reviews .write_review input[name='name']")
                .focus();
        };

        // Set up the submit event handler for the write review form
        document.querySelector(".reviews .write_review form").onsubmit = (
            event
        ) => {
            event.preventDefault();
            // Send a POST request to the server with the form data
            fetch("templates/reviews.php?page_id=" + reviewsPageId, {
                method: "POST",
                body: new FormData(
                    document.querySelector(".reviews .write_review form")
                ),
            })
                .then((response) => response.text())
                .then((data) => {
                    // Insert the response data into the write review form element
                    document.querySelector(".reviews .write_review").innerHTML =
                        data;
                });
        };
    });
