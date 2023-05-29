# Christmas Market Planner

Welcome to the Christmas Market Planner! This website is designed to help you plan your visit to the Plymouth Christmas Market. It provides information about the market, food venues, events, and more.

## Table of Contents
- [About Plymouth](#about-plymouth)
- [Food Venues](#food-venues)
- [Specific Food Venues](#specific-food-venues)
- [Events](#events)
- [Specific Events](#specific-events)
- [Registration](#registration)
- [Login](#login)
- [Authenticated Welcome Page](#authenticated-welcome-page)
- [Scripts](#scripts)
- [Review System](#review-system)
- [Features](#features)
- [Database](#database)

## About Plymouth
The "About Plymouth" page provides details about the city of Plymouth, its history, attractions, and places of interest.

## Food Venues
The "Food Venues" page showcases various food venues available at the Christmas Market. 

## Specific Food Venues
From the food venues page the user can go to more detailed pages, where they can write and read reviews. In addiiton they can also obtain more detailed information about the food venues. 

## Events
The "Events" page highlights the upcoming events at the Christmas Market. Users can find information about entertainment, performances, and schedules.

## Specific Events
From the events page the user can go to more detailed pages, where they can write and read reviews. In addiiton they can also obtain more detailed information about the events. 

## Registration
The "Registration" page allows users to create an account on the website. By registering, users gain access to additional features such as writing reviews.

## Login
The "Login" page enables registered users to log into their accounts and access personalized features.

## Authenticated Welcome Page
Once logged in, users are redirected to the Authenticated Welcome Page. Here, they can view personalized content and access features available only to authenticated users.

## Scripts
There are a variety of scripts on the website the first one being a currency converter, which calls an API that will track the most likely used currencies, such as GBP, USD, AUD, NZD, CAD and EUR. 

The second script is the pricing script that will allows the users to enter the number of people going to a specific food venue, or event, and will give them an accurate price including discounts if any. 

## Review System

The Christmas Market Planner website includes a review system that allows users to write reviews for specific events and food venues. The review script ensures that reviews are displayed only on the relevant pages and not on other pages.

### How it Works

1. Page Identification: When a user navigates to a particular event or food venue page, the review script identifies the current page by extracting the page's unique identifier or slug from the URL.

2. Review Submission: When a user writes a review for an event or food venue, the review script stores the review content along with the associated page identifier in the MySQL database.

3. Displaying Reviews: When a page loads, the review script checks the current page identifier against the stored reviews in the database. It retrieves and displays only the reviews that match the current page's identifier.

### Benefits

- Relevant Reviews: By associating reviews with specific pages, the review system ensures that users see reviews only for the event or food venue they are currently viewing. This enhances the user experience and provides accurate and targeted information.

- Efficient Filtering: Displaying reviews specific to the current page reduces unnecessary database queries and improves performance, as there is no need to retrieve reviews that do not pertain to the current page.

- Easy Maintenance: As the website expands with more pages, the review system can easily adapt by dynamically identifying the current page and retrieving corresponding reviews, without any manual intervention required.

Please note that the exact implementation details of the review system may vary depending on the specific technologies and frameworks used in your project. This README provides a high-level explanation of the concept to help you understand the functionality of the review script.

## Features
- Multiple pages for easy navigation and information access.
- Registration and login system to manage user accounts.
- Ability for users to write reviews for events and food venues.
- Authenticated welcome page with personalized content for logged-in users.

## Database
The website uses a MySQL database managed through PHPMyAdmin. The database stores user account information, event details, food venue information, and user reviews.

Please note that this README provides a general overview of the Christmas Market Planner website. For more detailed information about installation, configuration, and usage, please refer to the project documentation.

Feel free to explore the website and have a wonderful time planning your visit to the Plymouth Christmas Market!
