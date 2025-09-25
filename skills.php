<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Image Auto Scroll Right to Left</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --speed: 40s;
      /* adjust speed */
      --gap: 2rem;
      --img-height: 120px;
    }

    .marquee-container {
      overflow: hidden;
      position: relative;
      border-radius: .75rem;
      /* background: rgba(255, 255, 255, 0.05); */
      padding: 1rem 0;
    }

    .marquee-track {
      display: flex;
      width: max-content;
      gap: var(--gap);
      animation: scroll-left var(--speed) linear infinite;
    }

    .marquee-container:hover .marquee-track {
      animation-play-state: paused;
      cursor: grab;
    }

    .marquee-track img {
      height: var(--img-height);
      width: auto;
      object-fit: cover;
      border-radius: .5rem;
      box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.5);
    }

    @keyframes scroll-left {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }
  </style>
</head>

<body class="bg-dark text-light">

  <div id="skills" class="container py-5 text-center">
    <h1>Skills</h1>
  </div>

  <div class="container py-5">
    <div class="marquee-container">
      <div class="marquee-track">
        <!-- First set -->
        <img src="skills_images/html.png" alt="">
        <img src="skills_images/css.png" alt="">
        <img src="skills_images/js.png" alt="">
        <img src="skills_images/node.png" alt="">
        <img src="skills_images/react native.png" alt="">
        <img src="skills_images/bootstrap.png" alt="">
        <img src="skills_images/sql.png" alt="">
        <img src="skills_images/vs_code.png" alt="">
        <img src="skills_images/git.png" alt="">
        <img src="skills_images/git_hub.png" alt="">
        <img src="skills_images/arduino.png" alt="">
        <img src="skills_images/figma.png" alt="">
        <img src="skills_images/android.png" alt="">
        <img src="skills_images/unity.png" alt="">
        <img src="skills_images/mysql_workbench.png" alt="">
        <img src="skills_images/heidiSQL.png" alt="">
        <img src="skills_images/apache_netbeans.png" alt="">
        <img src="skills_images/java.png" alt="">
        <img src="skills_images/xampp.png" alt="">

        <!-- Duplicate set -->
        <img src="skills_images/html.png" alt="">
        <img src="skills_images/css.png" alt="">
        <img src="skills_images/js.png" alt="">
        <img src="skills_images/node.png" alt="">
        <img src="skills_images/react native.png" alt="">
        <img src="skills_images/bootstrap.png" alt="">
        <img src="skills_images/sql.png" alt="">
        <img src="skills_images/vs_code.png" alt="">
        <img src="skills_images/git.png" alt="">
        <img src="skills_images/git_hub.png" alt="">
        <img src="skills_images/arduino.png" alt="">
        <img src="skills_images/figma.png" alt="">
        <img src="skills_images/android.png" alt="">
        <img src="skills_images/unity.png" alt="">
        <img src="skills_images/mysql_workbench.png" alt="">
        <img src="skills_images/heidiSQL.png" alt="">
        <img src="skills_images/apache_netbeans.png" alt="">
        <img src="skills_images/java.png" alt="">
        <img src="skills_images/xampp.png" alt="">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>