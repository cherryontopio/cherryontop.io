<?php
$success = '';
$error = '';
$formSubmitted = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $host = "localhost";
    $dbname = "u252934587_pre_launch";
    $username = "u252934587_launch_subs";
    $password = "heslO1@hesloO1";

    $firstName = $_POST['firstName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';

    if (!$firstName || !$email) {
        $error = "Please fill in all required fields.";
    } else {
        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_error) {
            $error = "Connection failed: " . $conn->connect_error;
        } else {
            $stmt = $conn->prepare("INSERT INTO subscribers (first_name, email, phone) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $firstName, $email, $phone);
            if ($stmt->execute()) {
                $success = "🎉 Thank you, $firstName! You’ve been added to the waitlist.";
                $formSubmitted = true;
            } else {
                $error = "Oops! Something went wrong: " . $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }
    }
}
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Contact";

// Define the correct path to the header file
$headerPath = __DIR__ . '/includes/header.php';

// Check if the header file exists before including it
if (file_exists($headerPath)) {
    include $headerPath;
} else {
    echo "<p style='color: red;'>Error: Header file not found!</p>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>How to Promote Your Book Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        .promo-wrapper {
            font-family: 'Poppins', sans-serif;
            margin: 0;

            color: #333;
        }

        #promo-logo {
            text-align: center;
            margin: 0 auto;
            padding: 1rem 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #promo-logo img {
            max-width: 70px;
            display: block;
            margin-bottom: 0.5rem;
        }

        .logo-text {
            font-size: 1.2rem;
            font-weight: bold;
            font-family: 'Rock Salt', cursive;
        }



        .footer-promo {
            padding: 40px 0;
            text-align: center;
            margin: 0 auto;
            font-family: 'Poppins', sans-serif;
        }

        .header-promo {
            background-color: white;

        }

        .footer-promo img {
            max-width: 30px;
            display: inline-block;
        }

        .promo-wrapper section {
            padding: 2rem 2rem;
            text-align: center;
        }

        .promo-wrapper h1 {
            font-size: 60px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .promo-wrapper h2 {
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .promo-wrapper h3 {
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.8rem
        }

        .promo-wrapper p {
            max-width: 600px;
            margin: 0 auto 1.3rem;
            font-size: 1.5rem;
            color: #555;
        }

        .promo-wrapper form {
            max-width: 500px;
            margin: 0 auto;
            text-align: left;
        }

        .promo-wrapper label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .promo-wrapper input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.25rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .promo-wrapper button {
            background-color: #8B0000;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .promo-wrapper button:hover {
            background-color: #6b0000;
        }

        .promo-wrapper ul {
            list-style: none;
            padding: 0;
            color: #444;
        }

        .promo-wrapper ul li {
            margin: 0.5rem 0;
        }

        .promo-wrapper img {
            width: 40%;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 2rem;
        }

        .promo-wrapper .message {
            max-width: 500px;
            margin: 1rem auto;
            font-size: 1rem;
            padding: 1rem;
            border-radius: 4px;
        }

        .promo-wrapper .success {
            background-color: #e6f4ea;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
        }

        .promo-wrapper .error {
            background-color: #fdecea;
            color: #c62828;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>

<body>
    <div class="promo-wrapper">

        <!-- Hero Section -->

        <section style="background-color: #f1f1f1; margin-top: 200px;">

            <h2>Course Pre-Launch</h2>
            <h1>How to Promote Your Book Online</h1>
            <p>A step-by-step course to help authors build visibility, grow their audience, and confidently market their books—without overwhelm.</p>
            <img src="/assets/images/promo-pic.webp" alt="Book Promotion Course">
        </section>

        <!-- Signup Form Section -->
        <section style="background-color: #ffffff;">
            <h2>📬 Be the First to Know</h2>
            <p>Join the waitlist and get exclusive early access, launch bonuses, and a sneak peek inside the course.</p>

            <?php if ($success): ?>
                <div class="message success"><?= $success ?></div>
            <?php elseif ($error): ?>
                <div class="message error"><?= $error ?></div>
            <?php endif; ?>

            <?php if (!$formSubmitted): ?>
                <form method="POST" action="">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" required>

                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">

                    <button type="submit">Join the Waitlist</button>
                </form>
            <?php endif; ?>
        </section>


        <!-- Bonus Section -->
        <section style="background-color: #f1f1f1;">
            <h3>🎁 Prelaunch Perks</h3>
            <ul>
                <li>✔️ Early bird pricing</li>
                <li>✔️ Free bonus template pack</li>
                <li>✔️ Priority access to live Q&A</li>
            </ul>
        </section>

    </div>
    <footer class="footer-promo">Coded by <img src="/assets/images/favicon.webp" alt="cherryontop.io logo">

        </div>cherryontop.io</footer>
</body>

</html>