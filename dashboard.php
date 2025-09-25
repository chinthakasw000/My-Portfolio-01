<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Chinthaka</title>

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: "Roboto", sans-serif;
    }

    .sidebar {
      min-height: 100vh;
      width: 250px;
      background-color: #212529;
    }

    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      display: block;
      padding: 12px 20px;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #343a40;
      color: #fff;
    }

    .content {
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
      <h4 class="text-white text-center mb-4">Dashboard</h4>
      <a href="#"><i class="fa fa-home me-2"></i> Home</a>
      <a href="#"><i class="fa fa-user me-2"></i> Profile</a>
      <a href="#"><i class="fa fa-project-diagram me-2"></i> Projects</a>
      <a href="#"><i class="fa fa-cogs me-2"></i> Settings</a>
      <a href="#"><i class="fa fa-sign-out-alt me-2"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
      <!-- Top Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <div class="container-fluid">
          <span class="navbar-brand">Welcome, Chinthaka</span>
          <button class="btn btn-outline-light btn-sm" id="themeToggle">
            <i class="fa fa-adjust"></i> Toggle Theme
          </button>
        </div>
      </nav>

      <!-- Content -->
      <div class="content">
        <h1 class="mb-4">Dashboard Overview</h1>

        <!-- Row of Cards -->
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card bg-dark text-white shadow">
              <div class="card-body">
                <h5 class="card-title"><i class="fa fa-users me-2"></i> Users</h5>
                <p class="card-text display-6">120</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-dark text-white shadow">
              <div class="card-body">
                <h5 class="card-title"><i class="fa fa-project-diagram me-2"></i> Projects</h5>
                <p class="card-text display-6">8</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-dark text-white shadow">
              <div class="card-body">
                <h5 class="card-title"><i class="fa fa-blog me-2"></i> Blog Posts</h5>
                <p class="card-text display-6">15</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Table -->
        <div class="mt-5">
          <h4>Recent Activities</h4>
          <div class="table-responsive">
            <table class="table table-dark table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Activity</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>User registered</td>
                  <td>2025-09-10</td>
                  <td><span class="badge bg-success">Completed</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>New project added</td>
                  <td>2025-09-12</td>
                  <td><span class="badge bg-info">In Progress</span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Blog post updated</td>
                  <td>2025-09-13</td>
                  <td><span class="badge bg-warning text-dark">Pending</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Theme Toggle
    const themeToggle = document.getElementById("themeToggle");
    const html = document.documentElement;

    themeToggle.addEventListener("click", () => {
      if (html.getAttribute("data-bs-theme") === "dark") {
        html.setAttribute("data-bs-theme", "light");
      } else {
        html.setAttribute("data-bs-theme", "dark");
      }
    });
  </script>
</body>

</html>
