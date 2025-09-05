<?php
// Only process if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $errors = [];

    // Validation
    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters.';
    }

    // Show result
    if (!$errors) {
        echo "<p style='color:green;'>Thanks, " . htmlspecialchars($name) . "!</p>";
        // TODO: store or email the message
    } else {
        foreach ($errors as $e) {
            echo "<p style='color:red;'>" . htmlspecialchars($e) . "</p>";
        }
    }
}
?>

<form method="post" action="form.php">
  <label>Name: <input name="name" required></label><br>
  <label>Message: <textarea name="message" required></textarea></label><br>
  <button type="submit">Send</button>
</form>
