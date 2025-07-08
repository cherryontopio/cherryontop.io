<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

// Database credentials
$host = 'localhost';
$db   = 'u252934587_subscribers_db';
$user = 'u252934587_subs_user';
$pass = 'heslO1@heslo';
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $options);
    file_put_contents("debug.log", "DB connection successful\n", FILE_APPEND);
} catch (PDOException $e) {
    file_put_contents("debug.log", "DB connection failed: " . $e->getMessage() . "\n", FILE_APPEND);
    echo json_encode(["success" => false, "message" => "Database connection failed"]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    file_put_contents("debug.log", "POST request received: " . print_r($_POST, true) . "\n", FILE_APPEND);

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email address"]);
        exit;
    }

    // Check if email exists
    $stmt = $pdo->prepare("SELECT id FROM subscribers WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(["success" => false, "message" => "Email already subscribed"]);
        exit;
    }

    // Insert new subscriber
    $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (?)");
    if ($stmt->execute([$email])) {
        echo json_encode(["success" => true, "message" => "Thank you for subscribing and welcome to the club! 😊"]);
    } else {
        echo json_encode(["success" => false, "message" => "Subscription failed"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
