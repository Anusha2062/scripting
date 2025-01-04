14.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country and City Dropdown</title>
</head>
<body>
    <h1>Select Country and City</h1>

    <label for="country">Country:</label>
    <select id="country" onchange="fetchCities()">
        <option value="">Select a country</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
    </select>
    
    <br><br>

    <label for="city">City:</label>
    <select id="city">
        <option value="">Select a city</option>
    </select>

    <script>
        function fetchCities() {
            const country = document.getElementById('country').value;
            const cityDropdown = document.getElementById('city');
            cityDropdown.innerHTML = '<option value="">Select a city</option>'; // Clear existing cities

            if (country) {
                const xhr = new XMLHttpRequest();
                xhr.open('GET', getCities.php?country=${country}, true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const cities = JSON.parse(xhr.responseText);

                        // Populate the city dropdown
                        cities.forEach(function(city) {
                            const option = document.createElement('option');
                            option.value = city;
                            option.textContent = city;
                            cityDropdown.appendChild(option);
                        });
                    }
                };
                xhr.send();
            }
        }
    </script>
</body>
</html>