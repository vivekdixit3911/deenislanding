<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test_input = $_POST['test_input'];
    echo "Received input: " . htmlspecialchars($test_input);
} else {
    echo "No POST request received.";
}
?>
