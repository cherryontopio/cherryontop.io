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

    // Sanitize and trim the POST data
    $first_name = trim(htmlspecialchars($_POST["first_name"]));  // Use htmlspecialchars() and trim()
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);  // Email sanitization is still fine

    // Phone number sanitization: Allow only digits, spaces, +, - characters
    $phone = preg_replace('/[^0-9+\-\s]/', '', $_POST["phone"]);  // Remove any invalid characters for phone number

    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email address"]);
        exit;
    }

    // Optional: Validate phone number format (you can adjust the regex based on your needs)
    if (strlen($phone) < 10) {  // Simple check to ensure the phone number has a reasonable length
        echo json_encode(["success" => false, "message" => "Invalid phone number"]);
        exit;
    }

    // Check if email already exists in the database
    $stmt = $pdo->prepare("SELECT id FROM subscribers WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(["success" => false, "message" => "Email already subscribed"]);
        exit;
    }

    // Insert new subscriber into the database
    $stmt = $pdo->prepare("INSERT INTO subscribers (first_name, email, phone) VALUES (?, ?, ?)");
    if ($stmt->execute([$first_name, $email, $phone])) {
        echo json_encode(["success" => true, "message" => "Thank you for subscribing to the course! 😊"]);
    } else {
        echo json_encode(["success" => false, "message" => "Subscription failed"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
