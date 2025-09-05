<!-- form.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $message = trim($_POST['message'] ?? '');
    // TODO: store or email the message
    echo "Thanks, " . htmlspecialchars($name) . "!";
    exit;
}
?>
<form method="post" action="form.php">
  <label>Name: <input name="name" required></label><br>
  <label>Message: <textarea name="message" required></textarea></label><br>
  <button type="submit">Send</button>
</form>
