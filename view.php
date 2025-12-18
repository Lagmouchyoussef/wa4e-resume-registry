<!DOCTYPE html>
<html>
<head>
<title>Profile View</title>
<?php require_once "pdo.php"; require_once "util.php"; ?>
</head>
<body>
<div class="container">
<h1>Profile information</h1>
<?php
$stmt = $pdo->prepare("SELECT * FROM Profile WHERE profile_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['profile_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for profile_id';
    header( 'Location: index.php' ) ;
    return;
}
echo "<p>First Name: ".htmlentities($row['first_name'])."</p>\n";
echo "<p>Last Name: ".htmlentities($row['last_name'])."</p>\n";
echo "<p>Email: ".htmlentities($row['email'])."</p>\n";
echo "<p>Headline:<br/>".htmlentities($row['headline'])."</p>\n";
echo "<p>Summary:<br/>".htmlentities($row['summary'])."</p>\n";
?>
<p><a href="index.php">Done</a></p>
</div>
</body>
</html>