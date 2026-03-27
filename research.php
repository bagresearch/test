<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Research - BRIST</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* CSS Variables - Light Blue Theme */
    :root {
      --bg: #f0f8ff;
      --ink: #1a1a2e;
      --brand: #3498db;
      --accent: #e3f2fd;
      --card: #ffffff;
      --muted: #5a6a7a;
      --footer-bg: #e3f2fd;
      --footer-text: #2c3e50;
      --link-hover: #2980b9;
    }

    /* Reset box sizing */
    *, *::before, *::after {
      box-sizing: border-box;
    }

    /* Body styling with top padding for the fixed header */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--bg);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      text-align: center;
      padding-top: 70px;
      color: var(--ink);
    }

    /* Fixed top banner with side images and scrolling text */
    .top-banner {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      z-index: 1000;
    }

    .top-banner img.top-left,
    .top-banner img.top-right {
      position: absolute;
      top: 10px;
      height: 40px;
      object-fit: contain;
    }

    .top-banner img.top-left {
      left: 10px;
    }

    .top-banner img.top-right {
      right: 10px;
    }

    .scrolling-text {
      white-space: nowrap;
      font-weight: bold;
      font-size: 14pt;
      color: var(--brand);
      text-transform: uppercase;
      animation: scroll-left 15s linear infinite;
      padding-left: 100%;
    }

    @keyframes scroll-left {
      0% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(-100%);
      }
    }

    /* Main container styling */
    .container {
      max-width: 1000px;
      background: var(--card);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(52, 152, 219, 0.15);
      text-align: center;
      margin: 20px auto;
      flex: 1;
    }

    h1, h2 {
      color: var(--brand);
      text-align: center;
      border-bottom: 2px solid var(--brand);
      padding-bottom: 10px;
    }

    p, ul {
      text-align: justify;
      line-height: 1.8;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 20px;
      padding: 15px;
      background: var(--accent);
      border-radius: 8px;
      border-left: 4px solid var(--brand);
    }

    strong {
      color: var(--brand);
      font-size: 1.1em;
    }

    a {
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      color: var(--brand);
      transition: color 0.3s;
    }

    a:hover {
      color: var(--link-hover);
      text-decoration: underline;
    }

    /* Footer Styles - Light Blue Theme */
    footer {
      background-color: var(--footer-bg);
      color: var(--footer-text);
      padding: 40px 20px 20px;
      margin-top: auto;
      border-top: 3px solid var(--brand);
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-bottom: 30px;
    }

    .footer-column h4 {
      color: var(--brand);
      font-size: 1.2em;
      margin-bottom: 15px;
      border-bottom: 2px solid var(--brand);
      padding-bottom: 8px;
    }

    .footer-column ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-column ul li {
      margin-bottom: 10px;
      background: transparent;
      border-left: none;
      padding: 0;
    }

    .footer-column ul li a {
      color: var(--muted);
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-column ul li a:hover {
      color: var(--brand);
    }

    .footer-brand-header {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 20px;
    }

    .footer-brand-header img {
      height: 50px;
      width: auto;
      border-radius: 8px;
    }

    .footer-brand-header h3 {
      margin: 0;
      color: var(--brand);
      font-size: 1.5em;
    }

    .footer-brand-header p {
      margin: 5px 0 0;
      color: var(--muted);
      font-size: 0.9em;
      text-align: left;
    }

    .footer-contact p {
      margin: 8px 0;
      color: var(--muted);
      text-align: left;
    }

    .footer-bottom {
      border-top: 1px solid var(--brand);
      padding-top: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 10px;
    }

    .footer-bottom p {
      margin: 0;
      color: var(--muted);
    }

    .footer-bottom a {
      color: var(--brand);
      text-decoration: none;
    }

    /* Back to Home Button */
    .back-button {
      margin-top: 30px;
    }

    .back-button a {
      display: inline-block;
      padding: 12px 30px;
      background: var(--brand);
      color: white;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .back-button a:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
      text-decoration: none;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .footer-grid {
        grid-template-columns: 1fr;
      }
      
      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <!-- Fixed Top Banner -->
  <div class="top-banner">
    <img src="chetak123.jpg" alt="Chetak 123" class="top-left">
    <img src="chetak222.jpg" alt="Chetak 222" class="top-right">
    <div class="scrolling-text">Welcome to Research Page of Saswata Bag</div>
  </div>

  <!-- Main Content Container -->
  <div class="container">
    <h1>Research Overview</h1>
    <p><strong>My research focuses on IoT systems, industrial safety, real-time monitoring, and smart solutions for improving human lives.</strong></p>

    <!-- Research Areas Section -->
    <h2>Research Areas</h2>
    <ul>
      <li>
        <strong>Internet of Things (IoT) in Industrial Safety</strong><br>
        Developing smart systems to monitor and enhance safety protocols in industrial environments.
      </li>
      <li>
        <strong>Real-Time Environmental Monitoring</strong><br>
        Implementing sensor networks for continuous assessment of environmental parameters.
      </li>
      <li>
        <strong>Assistive Technologies</strong><br>
        Designing devices to aid individuals with mobility challenges.
      </li>
    </ul>

    <!-- Ongoing Projects Section -->
    <h2>Ongoing Projects</h2>
    <ul>
      <li>
        <strong>Chetak</strong><br>
        Utilizing artificial intelligence to forecast equipment failures and enhance safety in mining operations.
      </li>
      <li>
        <strong>Enhanced Smart Safety Helmet with Multi-Sensor Fusion</strong><br>
        Integrating various sensors to develop advanced safety helmets for industrial workers.
      </li>
      <li>
        <strong>EMG-Controlled Wheelchair</strong><br>
        Developing assistive mobility solutions using electromyography signals.
      </li>
    </ul>

    <!-- Research Collaborations Section -->
    <h2>Research Collaborations</h2>
    <ul>
      <li>
        <strong>Indian Institute of Technology Guwahati (IITG)</strong><br>
        Collaborating on projects related to industrial safety and IoT applications.
      </li>
      <li>
        <strong>National Innovation Foundation (NIF)</strong><br>
        Research on making EMG Controlled Wheel Chair.
      </li>
    </ul>

    <!-- Research Funding Section -->
    <h2>Research Funding</h2>
    <ul>
      <li>
        <strong>Department Of Science Of Technology (DST)</strong><br>
        Funding on project "Smart Safety Helmet".
      </li>
      <li>
        <strong>National Innovation Foundation</strong><br>
        Funding on project "EMG-Wheelchair (Charaibeti)".
      </li>
    </ul>

    <!-- Research Team Section -->
    <h2>Research Team</h2>
    <ul>
      <li>
        <strong>Saswata Bag</strong><br>
        Focus: IoT systems, industrial safety, real-time monitoring, and smart solutions for improving human lives.
      </li>
    </ul>

    <!-- Back to Home Button -->
    <div class="back-button">
      <a href="index.html">Back to Home</a>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-grid">
        <!-- Brand Column -->
        <div class="footer-column footer-brand">
          <div class="footer-brand-header">
            <img src="chetak123.jpg" alt="BRIST Logo" loading="lazy">
            <div>
              <h3>BRIST</h3>
              <p>Advancing Research. Building the Future.</p>
            </div>
          </div>
          <div class="footer-contact">
            <p>📍 Guwahati, Assam, India</p>
            <p>📞 +91 8811960068</p>
            <p>📧 saswata@bagresearch.co.in</p>
          </div>
        </div>

        <!-- Projects Column -->
        <div class="footer-column">
          <h4>Projects</h4>
          <ul>
            <li><a href="chetak.php">CHETAK Coal Mine System</a></li>
            <li><a href="smart-helmet.php">Smart Safety Helmet</a></li>
            <li><a href="emg-wheelchair.php">EMG Wheelchair (Charaibeti)</a></li>
            <li><a href="smart-bin.php">Smart IoT Bin</a></li>
            <li><a href="smart-auto-attendance.php">Auto Attendance System</a></li>
            <li><a href="tetries.php">Tetris on Arduino</a></li>
          </ul>
        </div>

        <!-- Utilities Column -->
        <div class="footer-column">
          <h4>Utilities</h4>
          <ul>
            <li><a href="elibrary.php">📚 E-Library Access</a></li>
            <li><a href="courses.php">🎓 Training Courses</a></li>
            <li><a href="queries.php">❓ Research Queries</a></li>
            <li><a href="council.php">🏛️ Council Portal</a></li>
            <li><a href="generalcomplain.php">General Complains</a></li>
          </ul>
        </div>

        <!-- Administration Column -->
        <div class="footer-column">
          <h4>Administration</h4>
          <ul>
            <li><a href="rnd.php">R&D Section</a></li>
            <li><a href="https://intranet.bagresearch.co.in">Intranet</a></li>
            <li><a href="teamautomation.php">Team Automation</a></li>
            <li><a href="https://intranet.bagresearch.co.in/complaint">Internal Complaints</a></li>
            <li><a href="telephonedirectory.php">Contact Directory</a></li>
            <li><a href="contact.php">General Inquiries</a></li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom">
        <p>© <?php echo date('Y'); ?> <span style="color: var(--brand);">Bag Research Innovation of Science & Technology</span>. All rights reserved.</p>
        <a href="legaldisclaimer.php">Legal Disclaimer</a>
      </div>
    </div>
  </footer>

  <script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Touch feedback for mobile
    document.querySelectorAll('a, button, .research-card, .program-card').forEach(el => {
      el.addEventListener('touchstart', () => el.style.opacity = '0.8', {passive: true});
      el.addEventListener('touchend', () => el.style.opacity = '1', {passive: true});
    });

    // Auto "Last Updated" Date
    const now = new Date();
    const formatted = now.toLocaleDateString("en-IN", {
      day: "numeric", month: "long", year: "numeric"
    });
    console.log("Page loaded. Last updated: " + formatted);
  </script>

</body>
</html>
