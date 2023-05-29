// The `Swiper` function is being called here to create a new Swiper instance
// and initialize it with the options specified in the object literal.
const swiper = new Swiper(".swiper", {
    autoplay: {
        // Automatically goes to next image every three seconds.
        delay: 3000,
        // The `disableOnInteraction` option is set to `false`, which means that the
        // autoplay will not be stopped when the user interacts with the Swiper.
        disableOnInteraction: false,
    },

    // Swiper will loopback to the first slide after the last slide is reached.
    loop: true,

    // Allows users to click on the little white circles to go to that corresponding image.
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    // Allows users to manually navigate the slides using the arrows.
    navigation: {
        // Lets users go to next image.
        nextEl: ".swiper-button-next",
        // Lets users go to previous image.
        prevEl: ".swiper-button-prev",
    },
});
