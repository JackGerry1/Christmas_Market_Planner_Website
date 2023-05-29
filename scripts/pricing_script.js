// Select the DOM elements for the venue, adults, children, and result fields
const venueSelect = document.querySelector("#venue");
const adultsInput = document.querySelector("#adults");
const childrenInput = document.querySelector("#children");
const calculateButton = document.querySelector("#calculate");
const resultDiv = document.querySelector("#result");

calculateButton.addEventListener("click", () => {
    // Get the selected venue and the number of adults and children
    const venue = venueSelect.value;
    // make sure the adults and children are treated as ints, so we can multiply and divide them later.
    const adults = parseInt(adultsInput.value);
    const children = parseInt(childrenInput.value);

    // Check if adults or children are not a number
    if (isNaN(adults) || isNaN(children)) {
        alert(
            "Please enter a valid number for the number of adults and children"
        );
        return;
    }

    // Check if venue is not selected or is invalid
    if (
        venue === "" ||
        (venue !== "1" &&
            venue !== "2" &&
            venue !== "3" &&
            venue !== "4" &&
            venue !== "5" &&
            venue !== "6")
    ) {
        alert("Please select a valid venue");
        return;
    }

    // Calculate the cost per adult and child based on the selected venue
    let adultCost;
    let childCost;
    let venueName;

    // Use a switch statement to determine the cost per adult and child at the selected venue
    switch (venue) {
        case "1":
            adultCost = 14.33;
            childCost = 11.33;
            venueName = "Marco Pierre White";
            break;
        case "2":
            adultCost = 8;
            childCost = 7;
            venueName = "Hog Roast Stall";
            break;
        case "3":
            adultCost = 5;
            childCost = 5;
            venueName = "Bratwurst Stall";
            break;
        case "4":
            adultCost = 11.5;
            childCost = 9.5;
            venueName = "Mount Edgecombe";
            break;
        case "5":
            adultCost = 0;
            childCost = 10.25;
            venueName = "Santa's Grotto";
            break;
        case "6":
            adultCost = 13;
            childCost = 6.5;
            venueName = "Saltram Festive Event";
            break;
    }
    // Calculate the total adult cost, total child cost, and cost per head.
    // Calculate single child and adult cost as well as a combined total cost.
    const singleAdultCost = adultCost; 
    const singleChildCost = childCost; 
    const totalAdultCost = adults * adultCost; 
    const totalChildCost = children * childCost; 
    let totalCost = totalAdultCost + totalChildCost; 
    const costPerHead = totalCost / (adults + children); 

    // Limit total cost, total adult cost, total child cost, and cost per head to two decimal places
    const totalCostFixed = totalCost.toFixed(2);
    const totalAdultCostFixed = totalAdultCost.toFixed(2);
    const totalChildCostFixed = totalChildCost.toFixed(2);
    const costPerHeadFixed = costPerHead.toFixed(2);

    // Check for saltram special offer condition.
    if (adults === 2 && children === 3 && venue === "6") {
        adultCost = 0;
        childCost = 0;

        tempCost = 32.5;
        totalCost = tempCost.toFixed(2);

        // Update the result display for the special offer
        resultDiv.innerHTML = `<hr><h1 id="result-header">Results</h1>Venue: ${venueName}<br><br>Cost per head: £${costPerHeadFixed}<br><b>Total cost: £${totalCost}</b>`;
        return resultDiv;
    } else {
        // Update the result display with the normal pricing
        resultDiv.innerHTML = `<hr><h1 id="result-header">Results</h1>Venue: ${venueName}<br>Single adult cost: £${singleAdultCost}<br>Single child cost: £${singleChildCost}<br>Total adult cost: £${totalAdultCostFixed}<br>Total child cost: £${totalChildCostFixed}<br>Cost per head: £${costPerHeadFixed}<br><b>Total cost: £${totalCostFixed}</b>`;
    }
});

window.addEventListener("load", () => {
    // Reset the venue, adults, and children input fields when the page is loaded
    adultsInput.value = "";
    childrenInput.value = "";
});