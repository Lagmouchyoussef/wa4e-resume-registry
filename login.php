<!DOCTYPE html>
<html>
<head>
<title>Please Log In</title>
<?php require_once "pdo.php"; require_once "util.php"; ?>
</head>
<body>
<div class="container">
<h1>Please Log In</h1>
<?php
if ( isset($_POST['cancel']) ) {
    header("Location: index.php");
    return;
}

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // Pw is php123

$failure = false;

if ( isset($_POST['email']) && isset($_POST['pass']) ) {
    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1 ) {
        $failure = "Email and password are required";
    } else {
        $check = hash('md5', $salt.$_POST['pass']);
        if ( $check == $stored_hash ) {
            $_SESSION['name'] = $_POST['email'];
            $_SESSION['user_id'] = 1;  // Hardcoded for demo
            header("Location: index.php");
            return;
        } else {
            $failure = "Incorrect password";
        }
    }
}

if ( $failure !== false ) {
    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
}
?>
<form method="POST">
<label for="email">Email</label>
<input type="text" name="email" id="email"><br/>
<label for="pass">Password</label>
<input type="password" name="pass" id="pass"><br/>
<input type="submit" value="Log In">
<input type="submit" name="cancel" value="Cancel">
</form>
<p>
For a password hint, view source and find a password hint
in the HTML comments.
<!-- Hint: The password is the three character name of the
programming language used in this class (all lower case)
followed by 123. -->
</p>
</div>
</body>
</html>