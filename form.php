// inside POST handling
$errors = [];
if ($name === '') $errors[] = 'Name is required.';
if (strlen($message) < 10) $errors[] = 'Message must be at least 10 characters.';
if (!$errors) {
    echo "Thanks, " . htmlspecialchars($name) . "!";
} else {
    foreach ($errors as $e) echo "<p style='color:red;'>".htmlspecialchars($e)."</p>";
}

