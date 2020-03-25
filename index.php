<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- theme toggle switch -->
        <label class="toggler">
            <!-- use a checkbox input to create the toggler -->
            <input type="checkbox">
            <span class="toggle round" onclick="toggleTheme()"></span>
        </label>

        <!-- page content -->
        <h1 class="reveal1">Theme Toggler</h1>
        <p class="reveal2">This page contains a toggle switch that will change the theme colours of the page. Try it out!</p>
    </div>

    <!-- load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- my JS and jQuery -->
    <script type="text/javascript" src="app.js"></script>
</body>
</html>
