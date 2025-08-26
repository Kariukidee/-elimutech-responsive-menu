<?php

require 'db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$courseId = (int)$_GET['id'];
echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <title>Course Detail</title>
  <link rel='stylesheet' href='css/style.css'>
</head>
<body>
  <div class='container course-detail'>
    <h2>You selected course ID {$courseId}</h2>
    <p>Coming soon: detailed course information for ID {$courseId}.</p>
    <p><a href='index.php' class='btn-secondary'>Back to Home</a></p>
  </div>
</body>
</html>";
?>
