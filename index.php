<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 60 Days - Day 1 - PHP Basics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Variables
        $firstName = "Enamul";
        $lastName = "Islam";
        $fullName = $firstName . " " . $lastName;

        // Set default timezone to Dhaka, Bangladesh
        date_default_timezone_set('Asia/Dhaka');

        $fullDateTime = date("Y-m-d h:i A");
        $fullAddress = "Dhaka, Bangladesh";

        // DYNAMIC GREETING
        $hour = date("H");
        $minute = date("i");

        // Greeting according to time with IF-ELSEIF-ELSE
        if ($hour < 12) {
            $greeting = "🌅 Good Morning";
            $greetingEmoji = "☀️";
        } elseif ($hour < 18) {
            $greeting = "🌤️ Good Afternoon";
            $greetingEmoji = "🌤️";
        } else {
            $greeting = "🌙 Good Evening";
            $greetingEmoji = "🌙";
        }
        
    ?>

    <div class="container">
        <div class="main-card">
            
            <!-- ========== HEADER SECTION ========== -->
            <div class="header">
                <div class="greeting-emoji"><?php echo $greetingEmoji; ?></div>
                <div class="greeting-text"><?php echo $greeting; ?></div>
                <div class="full-name"><?php echo $fullName; ?></div>
                <div class="time-display">
                    📍 <?php echo $fullAddress; ?> | 🕐 <?php echo $fullDateTime; ?>
                </div>
            </div>

            <!-- ========== MAIN BODY ========== -->
            <div class="main-body">
                <h2>Welcome to PHP 60 Days - Day 1</h2>
                <p>This is a simple PHP page demonstrating basic PHP syntax, variables, and conditional statements.</p>

            </div>

            <!-- ========== FOOTER ========== -->
            <div class="footer">
                <p><strong>🚀 Day 2 Complete! 🎉</strong></p>
                <p>You've learned: Variables, Strings, Concatenation, String Functions & Conditions</p>
                <p style="margin-top: 15px; opacity: 0.8;">Next: Day 3 - Numbers, Math Operations & Calculator Project 💻</p>
            </div>

        </div>
    </div>
</body>
</html>