<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Services</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Hover Effect for Service Cards */
    .animation {
      transition: transform 1s ease, box-shadow 1s ease;
      border-radius: 12px;
    }

    .animation:hover {
      transform: translateY(-10px) scale(1.03);
    
   
    }
  </style>
</head>

<body>

  <!-- Hero Section -->
  <header class="text-white text-center py-5 " id="services">
    <div class="container">
      <h1 class="text-center mb-4" >Services</h1>
      <p class="lead">I offer a variety of services to meet your needs.</p>
    </div>
  </header>

  <!-- Services Section -->
  <section class="py-1">
    <div class="container ">
      <div class="row text-center">
        <div class="col-md-4 mb-4 animation">
          <div class="card shadow h-100">
            <div class="card-body">
              <h5 class="card-title">Web Design</h5>
              <p class="card-text">Modern, responsive, and user-friendly web design for your business.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 animation">
          <div class="card shadow h-100">
            <div class="card-body">
              <h5 class="card-title">Web Development</h5>
              <p class="card-text">Robust and scalable websites built with the latest technologies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 animation">
          <div class="card shadow h-100">
            <div class="card-body">
              <h5 class="card-title">Mobile App Development</h5>
              <p class="card-text">Cross-platform and native mobile apps tailored to your needs.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 animation">
          <div class="card shadow h-100">
            <div class="card-body">
              <h5 class="card-title">UI/UX Design</h5>
              <p class="card-text">Beautiful, intuitive, and engaging user experiences and interfaces.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 animation">
          <div class="card shadow h-100">
            <div class="card-body">
              <h5 class="card-title">Desktop Application Development</h5>
              <p class="card-text">Powerful and efficient desktop applications for businesses.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
</body>

</html>
