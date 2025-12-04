<?php
// Stop execution if honeypot trap is filled — bot detected
if (!empty($_POST['hp'])) {
    header("Location: index.php?sent=0");
    exit;
}

// Check required fields
if (!isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    header("Location: index.php?sent=0");
    exit;
}

require_once "db.php";  // database connection

$name    = trim($_POST['name']);
$email   = trim($_POST['email']);
$message = trim($_POST['message']);

// Prepare secure insert query
$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    // success
    header("Location: index.php?sent=1");
} else {
    // failed
    header("Location: index.php?sent=0");
}

$stmt->close();
$conn->close();
exit;
?>