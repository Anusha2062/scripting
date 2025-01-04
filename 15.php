15.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display BCA Description</title>
</head>
<body>
    <h1>BCA Description</h1>
    <div id="content"></div>

    <script>
        function loadContent() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'bca.txt', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('content').textContent = xhr.responseText;
                } else {
                    document.getElementById('content').textContent = 'Failed to load content.';
                }
            };
            xhr.send();
        }

        // Load content when the page loads
        window.onload = loadContent;
    </script>
</body>
</html>