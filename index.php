<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chinthaka</title>

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<style>
hr {
  border: none;               /* Remove default border */
  height: 4px;                /* Thickness of the line */
  background: linear-gradient(270deg, #ffffffff, #000000ff, #ffffffff); /* Gradient */
  background-size: 600% 600%; /* Big enough for smooth animation */
  border-radius: 5px;
  animation: wave 5s ease infinite;
}

@keyframes wave {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
</style>


<body>

  <?php include 'movetotop.php'; ?>

  <?php include 'navbar.php'; ?>

  <?php include 'hero_section.php'; ?>
  <hr class="wave" />
  <?php include 'about.php'; ?>
  <hr />
  <?php include 'services.php'; ?>
  <hr />
  <?php include 'education.php'; ?>
  <hr />
  <?php include 'skills.php'; ?>
  <hr />
  <?php include 'projects.php'; ?>
  <hr />
  <?php include 'knowledge.php'; ?>
  <hr />
  <?php include 'blog.php'; ?>
  <hr />
  <?php include 'contact_section.php'; ?>
  <hr />
  <?php include 'footer.php'; ?>

  <script src="script.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>



  

  

</body>

</html>