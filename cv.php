<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CV</title>
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <!-- Simple CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    .card {
      transition: transform 1s, box-shadow 1s;
        border-radius: 24px;
    }

    .card:hover {
      transform: scale(1.02);
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
    }

    .progress-bar {
      font-size: 0.8rem;
    }

    a.btn:hover {
      background-color: #0dcaf0;
      color: #000;
    }

    ul li {
      padding: 5px 0;
    }
  </style>
</head>

<body class="bg-dark text-light">
  <div class="container py-5">
    <!-- Header / Profile -->
    <div class="card bg-dark border-light shadow-lg mb-4">
      <div class="card-body row g-4 align-items-center">
        <div class="col-md-3 text-center">
          <img src="profile_image/my_image.jpg"
            class="img-fluid rounded-circle border border-3 border-light shadow-sm mb-3" width="200" height="200" alt="Profile Photo">
          <div class="d-grid gap-2">
            <a href="mailto:chinthakasw000@gmail.com" class="btn btn-outline-light btn-sm">chinthakasw000@gmail.com</a>
            <a href="tel:+123456789" class="btn btn-outline-light btn-sm">0713018095</a>
          </div>
        </div>
        <div class="col-md-9">
          <h2 class="fw-bold mb-1">H.M.Chinthaka Sandaruwan</h2>
          <p class="text-info fw-semibold mb-1">Fullstack Developer</p>
          <p class="text-secondary mb-3">Bibile, Sri Lanka</p>
          <p class="mb-0">Creative and detail-oriented frontend developer with 5+ years of experience in building
            responsive, user-friendly, and visually engaging web applications.</p>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="row g-4">
      <!-- Left Column -->
      <div class="col-lg-4">
        <!-- Skills -->
        <div class="card bg-dark border-light shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title text-info">Skills</h5>
            <p class="mb-1">HTML & CSS</p>
            <div class="progress mb-2">
              <div class="progress-bar bg-success" style="width: 90%">90%</div>
            </div>
            <p class="mb-1">JavaScript</p>
            <div class="progress mb-2">
              <div class="progress-bar bg-info" style="width: 80%">80%</div>
            </div>
            <p class="mb-1">Bootstrap & UI</p>
            <div class="progress mb-2">
              <div class="progress-bar bg-warning text-dark" style="width: 85%">85%</div>
            </div>
            <p class="mb-1">React.js</p>
            <div class="progress mb-2">
              <div class="progress-bar bg-danger" style="width: 75%">75%</div>
            </div>
            <p class="mb-1">Node.js & Express</p>
            <div class="progress mb-2">
              <div class="progress-bar bg-primary" style="width: 70%">70%</div>
            </div>
            <p class="mb-1">Databases (SQL & NoSQL)</p>
            <div class="progress mb-2">
              <div class="progress-bar bg-secondary" style="width: 65%">65%</div>
            </div>
            <p class="mb-1">Version Control (Git)</p>
            <div class="progress mb-2">
              <div class="progress-bar bg-primary text-light" style="width: 85%">85%</div>
            </div>


            <!-- Tools -->
            <h6 class="mt-4 text-info">Tools</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item bg-dark text-light">Vs Code</li>
              <li class="list-group-item bg-dark text-light">NetBeans</li>
              <li class="list-group-item bg-dark text-light">Unity Hub</li>
              <li class="list-group-item bg-dark text-light">Figma</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-8">
        <!-- Experience -->
        <div class="card bg-dark border-light shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title text-info">Experience</h5>
            <div class="mb-3">
              <h6 class="fw-bold">Senior Frontend Developer — Example Co</h6>
              <small class="text-secondary">2022 — Present • Remote</small>
              <p>Leading frontend projects, building scalable design systems, and boosting performance by 30%.</p>
            </div>
            <div>
              <h6 class="fw-bold">Frontend Developer — Startup X</h6>
              <small class="text-secondary">2019 — 2022 • Colombo</small>
              <p>Developed responsive web apps, integrated REST APIs, and enhanced accessibility across platforms.</p>
            </div>
          </div>
        </div>

        <!-- Education -->
        <div class="card bg-dark border-light shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title text-info">Education</h5>
            <h6 class="fw-bold">BSc (Hons) Software Engineering</h6>
            <small class="text-secondary">2015 — 2019</small>
            <p>Relevant coursework: Web Development, Human-Computer Interaction, Software Engineering.</p>
          </div>
        </div>

        <!-- Projects -->
        <div class="card bg-dark border-light shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-info">Projects</h5>
            <ul class="mb-0">
              <li><strong>Portfolio Site</strong> — Personal portfolio built with Bootstrap & JavaScript.</li>
              <li><strong>POS System</strong> — Point of Sale system with inventory management.</li>
              <li><strong>e-commerce web application</strong> — Responsive app with authentication & CRUD features.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="text-center text-secondary small mt-4">
      <p>Available for freelance & full-time opportunities • Updated: Sept 14, 2025</p>
    </div>
  </div>

  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>
