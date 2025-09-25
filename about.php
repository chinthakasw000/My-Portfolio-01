<!-- About Section -->
<section id="about" class="py-5 neon-bg section">
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center text-center">
      <!-- Profile Image -->
      <div class="col-md-4 position-relative mb-4 mb-md-0">
        <div class="neon-glow"></div>
        <img src="profile_image/my_image.jpg" 
             class="rounded-circle img-fluid shadow w-50 position-relative profile-img" 
             alt="Profile">
      </div>

      <!-- Details -->
      <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
        <h2>About Me</h2>
        <p class="text-muted">
          I am a full-stack developer with experience in building web applications using modern technologies.
          I enjoy problem-solving and bringing ideas to life through clean and efficient code.
        </p>
        <ul class="list-unstyled">
          <li>💻 Skills: HTML, CSS, JavaScript, Bootstrap, React</li>
          <li>🎓 Education: Fullstack Software Engineering</li>
          <li>📍 Location: Sri Lanka</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<style>
.section {
  height: 512px;
  display: flex;
  align-items: center;
}

/* Neon background */
.neon-bg {
  position: relative;
  overflow: hidden;
}

/* Neon glow effect */
.neon-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 250px;
  height: 250px;
  border-radius: 50%;
  background: #00ffffb3;
  filter: blur(80px);
  transform: translate(-50%, -50%);
  animation: neonPulse 6s infinite alternate ease-in-out;
  z-index: 0;
}

/* Neon animation */
@keyframes neonPulse {
  0% {
    transform: translate(-50%, -50%) scale(1);
    opacity: 0.2;
  }
  50% {
    transform: translate(-50%, -50%) scale(1.3);
    opacity: 0.1;
  }
  100% {
    transform: translate(-50%, -50%) scale(1);
    opacity: 0.2;
  }
}

/* Profile image blur effect */
.profile-img {
  filter: blur(8px);
  transition: filter 0.5s ease-in-out;
  z-index: 1;
  position: relative;
}

/* Clear image on hover */
.profile-img:hover {
  filter: blur(0);
}
</style>
