<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

// Database credentials
$host = 'localhost';
$db   = 'u252934587_course_db';
$user = 'u252934587_pre_launch';
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
    echo json_encode(["success" => false, "message" => "Database connection failed", "error_code" => 1001]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    file_put_contents("debug.log", "POST request received: " . print_r($_POST, true) . "\n", FILE_APPEND);

    // Sanitize and trim the POST data
    $first_name = trim(htmlspecialchars($_POST["first_name"]));  // Trim and sanitize first name
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);  // Sanitize email
    $phone = preg_replace('/[^0-9+\-\s]/', '', $_POST["phone"]);  // Sanitize phone number

    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email address", "error_code" => 2001]);
        exit;
    }

    // Validate phone number length
    if (strlen($phone) < 10) {
        echo json_encode(["success" => false, "message" => "Invalid phone number. It must be at least 10 digits.", "error_code" => 2002]);
        exit;
    }

    // Check if email already exists in the database
    $stmt = $pdo->prepare("SELECT id FROM subscribers WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(["success" => false, "message" => "Email already subscribed", "error_code" => 2003]);
        exit;
    }

    // Insert new subscriber into the database
    $stmt = $pdo->prepare("INSERT INTO subscribers (first_name, email, phone) VALUES (?, ?, ?)");
    if ($stmt->execute([$first_name, $email, $phone])) {
        echo json_encode(["success" => true, "message" => "Thank you for subscribing to the course! 😊"]);
    } else {
        file_put_contents("debug.log", "Subscription insert failed: " . implode(", ", $stmt->errorInfo()) . "\n", FILE_APPEND);
        echo json_encode(["success" => false, "message" => "Subscription failed", "error_code" => 2004]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request", "error_code" => 3001]);
}
