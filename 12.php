12.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Movies List</h1>

    <!-- Table to display movie data -->
    <table id="moviesTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Poster</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Director</th>
                <th>Country</th>
                <th>Language</th>
                <th>Actors</th>
            </tr>
        </thead>
        <tbody>
            <!-- Movie rows will be inserted here -->
        </tbody>
    </table>

    <script>
        // Fetch the movie data from the API
        function fetchMovies() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://freetestapi.com/api/v1/movies', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const movies = JSON.parse(xhr.responseText); // Parse the JSON response

                    // Clear previous content
                    const tableBody = document.getElementById('moviesTable').getElementsByTagName('tbody')[0];
                    tableBody.innerHTML = '';

                    // Loop through the movies and display them in table rows
                    movies.forEach(function(movie) {
                        const row = document.createElement('tr');
                        
                        row.innerHTML = `
                            <td>${movie.id}</td>
                            <td>${movie.title}</td>
                            <td><img src="${movie.poster}" alt="${movie.title}"></td>
                            <td>${movie.year}</td>
                            <td>${movie.genre}</td>
                            <td>${movie.rating}</td>
                            <td>${movie.director}</td>
                            <td>${movie.country}</td>
                            <td>${movie.language}</td>
                            <td>${movie.actors}</td>
                        `;
                        
                        tableBody.appendChild(row);
                    });
                } else {
                    console.error('Failed to fetch movies');
                }
            };
            xhr.send();
        }

        // Call the function to fetch movies when the page loads
        window.onload = fetchMovies;
    </script>
</body>
</html>