<?php
// form handler
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

     $message = "Thanks Bhai jaan, $name! We got your email: $email";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 300px; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        input { width: 100%; margin: 5px 0; padding: 8px; }
        button { background: #4CAF50; color: white; border: none; padding: 10px; cursor: pointer; }
        button:hover { background: #45a049; }
        p { margin-top: 20px; color: green; }
    </style>
</head>
<body>
    <h2>Contact Form</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="text" name="phone" placeholder="Enter your phone number">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Submit</button>
    </form>

    <?php if ($message) { echo "<p>$message</p>"; } ?>
</body>
</html>