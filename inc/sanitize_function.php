<?php
// sanitize_function.php

// Function to sanitize user input
function sanitize_input($input)
{
    global $conn;

    // Use mysqli_real_escape_string to sanitize the input
    $sanitized_input = mysqli_real_escape_string($conn, trim($input));

    return $sanitized_input;
}
?>
