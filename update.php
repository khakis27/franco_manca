<?php
session_start();
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

if (isset($_SESSION['x']) && isset($_SESSION['x_updated'])) {
    $x = $_SESSION['x'];
    $x_updated = $_SESSION['x_updated'];

    // Send the value of x and its update time as SSE
    echo "data: {\"x\": \"$x\", \"x_updated\": \"$x_updated\"}\n\n";
    flush();
}
?>