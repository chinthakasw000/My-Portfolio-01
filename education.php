<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Two Images in Row</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .equal-img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
    }

    /* Hover effect: move up */
    .col-md-6:hover .equal-img {
      transform: translateY(-15px);
      box-shadow: 0 10px 20px rgba(0, 255, 255, 0.7);
      filter: none;
    }



 
  </style>
</head>

<body class="bg-dark text-light">

  <div id="education">
    <div class="container py-5 text-center">
      <h1>Education</h1>
    </div>

    <div class="container py-5">
      <div class="row text-center">
        <div class="col-md-6 mb-4">
          <img src="education/java_institute.jpg" class="equal-img rounded shadow" alt="Java Institute">
          <h3 class="mt-3">Java Institute</h3>
          <p>Professional Diploma in Software Engineering (FQ- UK)</p>
        </div>
        <div class="col-md-6 mb-4">
          <img src="education/bcu.jpg" class="equal-img rounded shadow" alt="Birmingham City University">
          <h3 class="mt-3">Birmingham City University</h3>
          <p>BSc(Hons) in Software Engineering</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
