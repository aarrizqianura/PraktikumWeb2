<?php
// Form untuk input password
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo "<b>Password:</b> " . htmlspecialchars($password) . "<br>";
    echo "<b>Password Hash:</b> " . htmlspecialchars($hash) . "<br>";
}
?>
<form method="post">
    <label for="password">Masukkan Password:</label>
    <input type="text" name="password" id="password" required>
    <button type="submit">Generate Hash</button>
</form>