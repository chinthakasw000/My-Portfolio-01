<?php
// Handle scroll button click logging
if (isset($_POST['scroll_click'])) {
  $logFile = 'scroll_log.txt';
  $time = date("Y-m-d H:i:s");
  file_put_contents($logFile, "Scroll clicked at: $time\n", FILE_APPEND);
  echo json_encode(['status' => 'success']);
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scroll To Top</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>

    #scrollTopBtn {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #00ffffb3, #272727ff);
      color: #fff;
      border: none;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
      transition: all 0.3s ease;
      z-index: 1000;
      animation: float 3s ease-in-out infinite;
      cursor: pointer;
    }

    /* Floating animation */
    @keyframes float {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-5px);
      }

      100% {
        transform: translateY(0);
      }
    }

    /* Hover effects - pause float and apply hover state */
    #scrollTopBtn:hover {
      animation-play-state: paused;
      transform: translateY(-8px) scale(1.05);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
      background: linear-gradient(135deg, #272727ff, #00ffffb3);
    }

    /* Active/click state */
    #scrollTopBtn:active {
      transform: translateY(-3px) scale(0.98);
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.4);
      transition: all 0.1s ease;
    }

  </style>
</head>

<body>

  <button class="position-fixed bottom-0 end-0 m-3" id="scrollTopBtn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const btn = document.getElementById('scrollTopBtn');
    btn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });

      // Send click info to backend via fetch
      fetch('index.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: 'scroll_click=1'
        }).then(res => res.json())
        .then(data => console.log(data));
    });
  </script>
  
</body>

</html>