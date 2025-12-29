<!DOCTYPE html>
<html>
<head>
<title>Resume Registry c8bd8786</title>
<?php require_once "pdo.php"; require_once "util.php"; ?>
</head>
<body>
<div class="container">
<h1>Resume Registry</h1>
<?php
if ( isset($_SESSION['name']) ) {
    echo "<p><a href='logout.php'>Logout</a></p>\n";
} else {
    echo "<p><a href='login.php'>Please log in</a></p>\n";
}
flashMessages();
?>
<table border="1">
<?php
$stmt = $pdo->query("SELECT profile_id, first_name, last_name, headline FROM Profile");
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo "<a href='view.php?profile_id=".htmlentities($row['profile_id'])."'>".htmlentities($row['first_name'])." ".htmlentities($row['last_name'])."</a>";
    echo "</td><td>".htmlentities($row['headline'])."</td>";
    if ( isset($_SESSION['user_id']) ) {
        echo "<td><a href='edit.php?profile_id=".htmlentities($row['profile_id'])."'>Edit</a> ";
        echo "<a href='delete.php?profile_id=".htmlentities($row['profile_id'])."'>Delete</a></td>";
    }
    echo "</tr>\n";
}
?>
</table>
<?php
if ( isset($_SESSION['user_id']) ) {
    echo "<p><a href='add.php'>Add New Entry</a></p>\n";
}
?>
</div>
</body>
</html>