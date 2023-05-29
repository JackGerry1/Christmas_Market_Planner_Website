/* 
Code Inspired by: 

CodingNepal (2021). Build A Currency Converter App in HTML CSS & JavaScript. 
[online] Codeshack. Available at: https://www.codingnepalweb.com/currency-converter-app-in-html-javascript/ 
[Accessed 7th January. 2023].
‌
*/

// This code is setting up event listeners for a form that allows a user to select
// Two currencies and displays the exchange rate between them.

// First, it selects all form select elements, the "from" select element
// The "to" select element, and the form button.

const dropList = document.querySelectorAll("form select"),
    fromCurrency = document.querySelector(".from select"),
    toCurrency = document.querySelector(".to select"),
    getButton = document.querySelector("form button");

// Next, it loops through each select element and populates it with options
// for each currency code in the "country_list" object. It also adds an event listener that will load a flag image for the selected currency when the select element is changed.

for (let i = 0; i < dropList.length; i++) {
    for (let currency_code in country_list) {
        // This sets the default option to be selected for each select element
        // (GBP for the first element, EUR for the second).
        let selected =
            i == 0
                ? currency_code == "GBP"
                    ? "selected"
                    : ""
                : currency_code == "EUR"
                ? "selected"
                : "";
        let optionTag = `<option value="${currency_code}" ${selected}>${currency_code}</option>`;
        dropList[i].insertAdjacentHTML("beforeend", optionTag);
    }
    // This event listener will call the "loadFlag" function when the select element is changed.
    dropList[i].addEventListener("change", (e) => {
        loadFlag(e.target);
    });
}

// This function looks up the flag image URL for the selected currency code in the "country_list" object
// and sets the src attribute of the flag image element to the URL.

function loadFlag(element) {
    for (let code in country_list) {
        if (code == element.value) {
            let imgTag = element.parentElement.querySelector("img");
            imgTag.src = `https://flagcdn.com/48x36/${country_list[
                code
            ].toLowerCase()}.png`;
        }
    }
}

// This event listener calls the "getExchangeRate" function when the page is finished loading.

window.addEventListener("load", () => {
    getExchangeRate();
});

// This event listener prevents the default action of the form button and calls the "getExchangeRate"
// function when the button is clicked.

getButton.addEventListener("click", (e) => {
    e.preventDefault();
    getExchangeRate();
});

// This event listener swaps the selected currency codes in the "from" and "to" select elements and
// Calls the "getExchangeRate" function when the exchange icon is clicked.

const exchangeIcon = document.querySelector("form .icon");
exchangeIcon.addEventListener("click", () => {
    // This stores the selected currency code in the "from" select element in a temporary variable.
    let tempCode = fromCurrency.value;
    // This sets the value of the "from" select element to the value of the "to" select element.
    fromCurrency.value = toCurrency.value;
    // This sets the value of the "to" select element to the value stored in the temporary variable.
    toCurrency.value = tempCode;
    loadFlag(fromCurrency);
    loadFlag(toCurrency);
    getExchangeRate();
});

function getExchangeRate() {
    // Get a reference to the form input element and the element that will display the exchange rate
    const amount = document.querySelector("form input");
    const exchangeRateTxt = document.querySelector("form .exchange-rate");
    let amountVal = amount.value;

    // Check if amountVal is not a number
    if (isNaN(amountVal)) {
        // Show an error message to the user
        alert("Please enter a valid number");
        return;
    }

    // If the amount is empty or 0, set it to 1
    if (amountVal == "" || amountVal == "0") {
        amount.value = "1";
        amountVal = 1;
    }

    // Show a message to the user indicating that the exchange rate is being fetched
    exchangeRateTxt.innerText = "Getting exchange rate...";

    // Build the URL for the exchange rate API
    let url = `https://v6.exchangerate-api.com/v6/cf16d6fa152b71f0ef7ef119/latest/${fromCurrency.value}`;

    // Make a request to the API to get the exchange rate
    fetch(url)
        .then((response) => response.json())
        .then((result) => {
            // Calculate the total exchange rate based on the amount and the rate returned by the API
            let exchangeRate = result.conversion_rates[toCurrency.value];
            let totalExRate = (amountVal * exchangeRate).toFixed(2);

            // Display the exchange rate to the user
            exchangeRateTxt.innerText = `${amountVal} ${fromCurrency.value} = ${totalExRate} ${toCurrency.value}`;
        })
        .catch(() => {
            // If there was an error, show a message to the user
            exchangeRateTxt.innerText = "Something went wrong";
        });
}
