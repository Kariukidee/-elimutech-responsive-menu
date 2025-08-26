<?php

require 'db.php';

$stmt = $conn->prepare("SELECT id, title FROM courses");
$stmt->execute();
$stmt->bind_result($courseId, $courseTitle);

$courses = [];
while ($stmt->fetch()) {
    $courses[] = ['id' => $courseId, 'title' => $courseTitle];
}
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>ElimuTech</title>
  <link rel="stylesheet" href="css-style.css">
</head>
<body>

  <header>
    <div class="container">
      <div class="logo">ElimuTech</div>
      <nav>
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)">Courses ▾</a>
            <ul class="dropdown-menu">
              <?php foreach ($courses as $c): ?>
                <li>
                  <a href="course.php?id=<?php echo $c['id']; ?>">
                    <?php echo htmlspecialchars($c['title']); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="hamburger">
          <span></span><span></span><span></span>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <section class="welcome container">
      <h1>Welcome to ElimuTech</h1>
      <p>Your gateway to cutting-edge educational courses.</p>
    </section>
  </main>

  <footer>
    <div class="container">
      &copy; <?php echo date('Y'); ?> ElimuTech. All rights reserved.
    </div>
  </footer>

  <script src="js-script.js"></script>
</body>
</html>
