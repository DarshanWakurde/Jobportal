// Fetch countries from API and populate country dropdown
fetch("https://example.com/api/countries")
    .then(response => response.json())
    .then(data => {
        var countryDropdown = document.getElementById("country");
        data.forEach(country => {
            var option = document.createElement("option");
            option.value = country.code; // Set the appropriate value for each country
            option.text = country.name; // Set the appropriate text for each country
            countryDropdown.appendChild(option);
        });
    })
    .catch(error => {
        console.log("Error occurred while fetching country data:", error);
    });

// Country selection change event
document.getElementById("country").addEventListener("change", function() {
    var country = this.value;

    // Clear state and city dropdowns
    document.getElementById("state").innerHTML = "<option value=''>Select State</option>";
    document.getElementById("city").innerHTML = "<option value=''>Select City</option>";

    if (country !== "") {
        // Fetch states for the selected country from API and populate state dropdown
        fetch("https://example.com/api/states?country=" + country)
            .then(response => response.json())
            .then(data => {
                var stateDropdown = document.getElementById("state");
                data.forEach(state => {
                    var option = document.createElement("option");
                    option.value = state.code; // Set the appropriate value for each state
                    option.text = state.name; // Set the appropriate text for each state
                    stateDropdown.appendChild(option);
                });
            })
            .catch(error => {
                console.log("Error occurred while fetching state data:", error);
            });
    }
});

// State selection change event
document.getElementById("state").addEventListener("change", function() {
    var state = this.value;

    // Clear city dropdown
    document.getElementById("city").innerHTML = "<option value=''>Select City</option>";

    if (state !== "") {
        // Fetch cities for the selected state from API and populate city dropdown
        fetch("https://example.com/api/cities?state=" + state)
            .then(response => response.json())
            .then(data => {
                var cityDropdown = document.getElementById("city");
                data.forEach(city => {
                    var option = document.createElement("option");
                    option.value = city.code; // Set the appropriate value for each city
                    option.text = city.name; // Set the appropriate text for each city
                    cityDropdown.appendChild(option);
                });
            })
            .catch(error => {
                console.log("Error occurred while fetching city data:", error);
            });
    }
});

// Form submission event
document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var country = document.getElementById("country").value;
    var state = document.getElementById("state").value;
    var city = document.getElementById("city").value;
    // Process the selected values
    console.log("Country: " + country);
    console.log("State: " + state);
    console.log("City: " + city);

    // You can perform further actions or submit the form here
});
