8.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Effects</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hideBtn').click(function() {
                $('#content').hide();
            });

            $('#showBtn').click(function() {
                $('#content').show();
            });

            $('#toggleBtn').click(function() {
                $('#content').toggle();
            });

            $('#fadeInBtn').click(function() {
                $('#content').fadeIn();
            });

            $('#fadeOutBtn').click(function() {
                $('#content').fadeOut();
            });

            $('#fadeToggleBtn').click(function() {
                $('#content').fadeToggle();
            });

            $('#slideUpBtn').click(function() {
                $('#content').slideUp();
            });

            $('#slideDownBtn').click(function() {
                $('#content').slideDown();
            });

            $('#slideToggleBtn').click(function() {
                $('#content').slideToggle();
            });

            $('#animateBtn').click(function() {
                $('#content').animate({fontSize: '20px', opacity: 0.5}, 1000);
            });
        });
    </script>
</head>
<body>
    <button id="hideBtn">Hide</button>
    <button id="showBtn">Show</button>
    <button id="toggleBtn">Toggle</button>
    <button id="fadeInBtn">Fade In</button>
    <button id="fadeOutBtn">Fade Out</button>
    <button id="fadeToggleBtn">Fade Toggle</button>
    <button id="slideUpBtn">Slide Up</button>
    <button id="slideDownBtn">Slide Down</button>
    <button id="slideToggleBtn">Slide Toggle</button>
    <button id="animateBtn">Animate</button>

    <div id="content" style="width: 200px; height: 200px; background-color: lightblue; margin-top: 20px;">
        Content to manipulate
    </div>
</body>
</html>