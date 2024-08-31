<!DOCTYPE html>
<head>
    <title>Greeting Result</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>

<main class="container">

<?php

//setting time according to the timezone
date_default_timezone_set('Asia/kolkata');


// Variable initialisation
$greeting = '';
$name = '';
$favorite_food = '';


// checking if the form has been submitted and getting time

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hour = date('g'); 
    $period = date('A'); // AM or PM

    $name = htmlspecialchars($_POST['name']);
    $favorite_food = htmlspecialchars($_POST['favorite_food']);

    // Specific greeting message based on the time in AM/PM format
    if (($period == 'AM' && $hour >= 2) || ($period == 'AM' && $hour < 11) || ($period == 'PM' && $hour == 12)) {
        $greeting = "Good Morning";
    } elseif (($period == 'AM' && $hour == 11) || ($period == 'PM' && $hour < 4) || ($period == 'PM' && $hour == 4)) {
        $greeting = "Good Afternoon";
    } elseif (($period == 'PM' && $hour == 4) || ($period == 'PM' && $hour < 9) || ($period == 'PM' && $hour == 9)) {
        $greeting = "Good Evening";
    } else {
        $greeting = "Good Night";
    }
    // Display
    echo "<p>$greeting $name. Your favorite food is $favorite_food.</p>";
}
?>
<a href="greeting.php" class="button">Go Back</a>


</main>

</body>
</html>
