<!DOCTYPE html>
<html>
<head>
<title>Edit Profile c8bd8786</title>
<?php require_once "pdo.php"; require_once "util.php"; ?>
</head>
<body>
<div class="container">
<h1>Edit Profile</h1>
<?php
if ( ! isset($_SESSION['user_id']) ) {
    die("ACCESS DENIED");
}

if ( isset($_POST['cancel']) ) {
    header("Location: index.php");
    return;
}

$stmt = $pdo->prepare("SELECT * FROM Profile WHERE profile_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['profile_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for profile_id';
    header( 'Location: index.php' ) ;
    return;
}

if ( isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['headline']) && isset($_POST['summary']) ) {
    $msg = validateProfile();
    if ( is_string($msg) ) {
        $_SESSION['error'] = $msg;
        header("Location: edit.php?profile_id=".$_GET['profile_id']);
        return;
    }

    $stmt = $pdo->prepare('UPDATE Profile SET first_name=:fn, last_name=:ln, email=:em, headline=:he, summary=:su WHERE profile_id=:pid');
    $stmt->execute(array(
        ':pid' => $_GET['profile_id'],
        ':fn' => $_POST['first_name'],
        ':ln' => $_POST['last_name'],
        ':em' => $_POST['email'],
        ':he' => $_POST['headline'],
        ':su' => $_POST['summary'])
    );
    $_SESSION['success'] = "Profile updated";
    header("Location: index.php");
    return;
}

flashMessages();

$fn = htmlentities($row['first_name']);
$ln = htmlentities($row['last_name']);
$em = htmlentities($row['email']);
$he = htmlentities($row['headline']);
$su = htmlentities($row['summary']);
?>
<form method="post">
<p>First Name:
<input type="text" name="first_name" size="60" value="<?= $fn ?>"/></p>
<p>Last Name:
<input type="text" name="last_name" size="60" value="<?= $ln ?>"/></p>
<p>Email:
<input type="text" name="email" size="30" value="<?= $em ?>"/></p>
<p>Headline:<br/>
<input type="text" name="headline" size="80" value="<?= $he ?>"/></p>
<p>Summary:<br/>
<textarea name="summary" rows="8" cols="80"><?= $su ?></textarea>
<p>
<input type="submit" value="Save">
<input type="submit" name="cancel" value="Cancel">
</p>
</form>
</div>
</body>
</html>