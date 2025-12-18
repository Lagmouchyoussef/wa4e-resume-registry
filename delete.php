<!DOCTYPE html>
<html>
<head>
<title>Delete Profile</title>
<?php require_once "pdo.php"; require_once "util.php"; ?>
</head>
<body>
<div class="container">
<h1>Delete Profile</h1>
<?php
if ( ! isset($_SESSION['user_id']) ) {
    die("ACCESS DENIED");
}

if ( isset($_POST['cancel']) ) {
    header("Location: index.php");
    return;
}

if ( isset($_POST['delete']) ) {
    $stmt = $pdo->prepare('DELETE FROM Profile WHERE profile_id = :pid');
    $stmt->execute(array(':pid' => $_GET['profile_id']));
    $_SESSION['success'] = "Profile deleted";
    header("Location: index.php");
    return;
}

$stmt = $pdo->prepare("SELECT first_name, last_name FROM Profile WHERE profile_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['profile_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for profile_id';
    header( 'Location: index.php' ) ;
    return;
}
?>
<p>First Name: <?= htmlentities($row['first_name']) ?></p>
<p>Last Name: <?= htmlentities($row['last_name']) ?></p>
<form method="post">
<input type="hidden" name="profile_id" value="<?= $_GET['profile_id'] ?>">
<input type="submit" name="delete" value="Delete">
<input type="submit" name="cancel" value="Cancel">
</form>
</div>
</body>
</html>