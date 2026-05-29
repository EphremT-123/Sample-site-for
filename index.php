<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Nova | AI-powered insights for modern teams</title>
  <!-- Google Fonts: clean, modern typography -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <!-- Font Awesome 6 (free icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #ffffff;
      color: #111827;
      line-height: 1.5;
      scroll-behavior: smooth;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    /* navigation */
    .navbar {
      position: sticky;
      top: 0;
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(8px);
      z-index: 50;
      border-bottom: 1px solid #e9ebf0;
      padding: 1rem 0;
    }

    .nav-wrapper {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .logo {
      font-size: 1.75rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      background: linear-gradient(135deg, #1E2A5E, #2A3F8F);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 500;
      color: #2c3e66;
      transition: color 0.2s;
    }

    .nav-links a:hover {
      color: #1f3a8a;
    }

    .btn-outline-light {
      background: transparent;
      border: 1.5px solid #ccd4e3;
      padding: 0.5rem 1.25rem;
      border-radius: 2rem;
      font-weight: 600;
      transition: all 0.2s;
      color: #1e2a5e;
    }

    .btn-outline-light:hover {
      border-color: #1e2a5e;
      background: #f8fafc;
    }

    /* buttons */
    .btn-primary {
      display: inline-block;
      background: #1e2a5e;
      color: white;
      font-weight: 600;
      padding: 0.85rem 2rem;
      border-radius: 2.5rem;
      text-decoration: none;
      transition: all 0.25s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      border: none;
      cursor: pointer;
    }

    .btn-primary:hover {
      background: #142046;
      transform: translateY(-2px);
      box-shadow: 0 10px 20px -5px rgba(30,42,94,0.25);
    }

    .btn-secondary {
      display: inline-block;
      background: white;
      color: #1e2a5e;
      font-weight: 600;
      padding: 0.85rem 2rem;
      border-radius: 2.5rem;
      text-decoration: none;
      border: 1px solid #cfddee;
      transition: all 0.2s;
    }

    .btn-secondary:hover {
      background: #f5f9ff;
      border-color: #b0c2da;
    }

    /* hero */
    .hero {
      padding: 5rem 0 4rem 0;
    }

    .hero-grid {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 3rem;
    }

    .hero-content {
      flex: 1.2;
    }

    .hero-badge {
      display: inline-block;
      background: #ecfdf5;
      color: #0b5e42;
      font-size: 0.8rem;
      font-weight: 600;
      padding: 0.3rem 0.9rem;
      border-radius: 2rem;
      margin-bottom: 1.5rem;
    }

    .hero-content h1 {
      font-size: 3.3rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      line-height: 1.2;
      margin-bottom: 1.5rem;
      background: linear-gradient(to right, #111827, #2c3e66);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero-content p {
      font-size: 1.2rem;
      color: #4b5563;
      max-width: 90%;
      margin-bottom: 2rem;
    }

    .hero-buttons {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      margin-bottom: 2rem;
    }

    .hero-stats {
      display: flex;
      gap: 2rem;
      margin-top: 1rem;
    }

    .stat span {
      font-size: 1.6rem;
      font-weight: 800;
      color: #1e2a5e;
    }

    .hero-visual {
      flex: 1;
      background: linear-gradient(145deg, #f0f4fe, #e9eefa);
      border-radius: 2.5rem;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 20px 35px -12px rgba(0,0,0,0.08);
    }

    .dashboard-mock {
      background: #ffffff;
      border-radius: 1.8rem;
      padding: 1rem;
      box-shadow: 0 15px 30px -12px rgba(0,0,0,0.1);
    }

    .mock-bar {
      height: 8px;
      background: #e2e8f0;
      border-radius: 10px;
      margin: 12px 0;
      width: 100%;
    }

    .mock-bar.fill {
      background: #1e2a5e;
      width: 68%;
    }

    .mock-bar.fill2 {
      background: #3b5ba5;
      width: 45%;
    }

    /* features section */
    .section {
      padding: 5rem 0;
    }

    .section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 3.5rem auto;
    }

    .section-header h2 {
      font-size: 2.3rem;
      font-weight: 700;
      letter-spacing: -0.01em;
      margin-bottom: 1rem;
    }

    .section-header p {
      color: #4a5568;
      font-size: 1.1rem;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .feature-card {
      background: #ffffff;
      border-radius: 1.8rem;
      padding: 2rem 1.5rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.02), 0 2px 6px rgba(0,0,0,0.05);
      transition: all 0.2s;
      border: 1px solid #f0f2f6;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      border-color: #e2eafc;
      box-shadow: 0 20px 30px -12px rgba(0,0,0,0.08);
    }

    .feature-icon {
      font-size: 2.2rem;
      margin-bottom: 1.2rem;
      color: #1e2a5e;
    }

    .feature-card h3 {
      font-size: 1.4rem;
      margin-bottom: 0.75rem;
    }

    /* testimonials */
    .testimonial-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .testimonial {
      background: #fafcff;
      border-radius: 1.8rem;
      padding: 2rem;
      flex: 1;
      min-width: 260px;
      border: 1px solid #ecf1f7;
    }

    .stars {
      color: #fbbf24;
      margin-bottom: 1rem;
      letter-spacing: 2px;
    }

    .testimonial p {
      font-style: normal;
      color: #2d3a4b;
      margin-bottom: 1.2rem;
    }

    .customer {
      font-weight: 700;
      color: #111;
    }

    /* cta */
    .cta-section {
      background: linear-gradient(105deg, #f0f4ff 0%, #e7edfc 100%);
      border-radius: 3rem;
      padding: 4rem 2rem;
      text-align: center;
      margin: 3rem 0 4rem;
    }

    .cta-section h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .cta-section .btn-primary {
      background: #111827;
      margin-top: 1rem;
      font-size: 1rem;
    }

    .cta-section .btn-primary:hover {
      background: #2c3e66;
    }

    /* footer */
    footer {
      border-top: 1px solid #edf2f7;
      padding: 2.5rem 0;
      margin-top: 2rem;
      text-align: center;
      color: #6c757d;
    }

    .footer-links {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }

    .footer-links a {
      text-decoration: none;
      color: #4a5568;
    }

    /* responsive */
    @media (max-width: 800px) {
      .hero-content h1 {
        font-size: 2.5rem;
      }
      .hero-content p {
        max-width: 100%;
      }
      .nav-wrapper {
        flex-direction: column;
      }
      .nav-links {
        flex-wrap: wrap;
        justify-content: center;
      }
    }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="container nav-wrapper">
    <div class="logo">Nova<span style="color:#1e2a5e;">.</span></div>
    <div class="nav-links">
      <a href="#">Features</a>
      <a href="#">Solutions</a>
      <a href="#">Pricing</a>
      <a href="#">Resources</a>
      <a href="#" class="btn-outline-light">Sign in</a>
      <a href="#" class="btn-primary" style="padding: 0.5rem 1.25rem;">Get started</a>
    </div>
  </div>
</nav>

<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge">
          <i class="fas fa-chart-line" style="margin-right: 6px;"></i> AI-powered analytics · new release
        </div>
        <h1>Turn data into <br>decisions, smarter & faster</h1>
        <p>Nova brings AI-driven insights to your entire team. Automate reports, predict trends, and collaborate in real time — all in one beautiful workspace.</p>
        <div class="hero-buttons">
          <a href="#" class="btn-primary"><i class="fas fa-rocket" style="margin-right: 8px;"></i> Start free trial</a>
          <a href="#" class="btn-secondary"><i class="fas fa-play"></i> Watch demo</a>
        </div>
        <div class="hero-stats">
          <div class="stat"><span>10k+</span> <br>teams</div>
          <div class="stat"><span>99%</span> <br>accuracy</div>
          <div class="stat"><span>4.9</span> <br>⭐ rating</div>
        </div>
      </div>
      <div class="hero-visual">
        <div class="dashboard-mock">
          <i class="fas fa-chart-simple" style="font-size: 1.6rem; color:#1e2a5e; margin-bottom: 8px; display: inline-block;"></i>
          <div style="font-weight:600; margin: 5px 0 12px 0;">Insight dashboard</div>
          <div class="mock-bar"></div>
          <div class="mock-bar fill"></div>
          <div class="mock-bar fill2"></div>
          <div style="display: flex; justify-content: space-between; margin-top: 20px;">
            <span style="background:#eef2ff; padding:5px 12px; border-radius: 50px; font-size:0.7rem;">+32% revenue</span>
            <span style="background:#eef2ff; padding:5px 12px; border-radius: 50px; font-size:0.7rem;">forecast ↑</span>
          </div>
          <div style="margin-top: 20px; background:#eef3ff; border-radius: 30px; padding: 6px 12px; font-size:0.75rem;">
            <i class="fas fa-robot"></i> AI summary: Customer engagement up 18% this quarter
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Everything you need in one intelligent platform</h2>
        <p>Built for modern data teams, loved by decision makers.</p>
      </div>
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-brain"></i></div>
          <h3>AI predictions</h3>
          <p>Leverage machine learning to forecast KPIs and identify hidden opportunities automatically.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-chalkboard-user"></i></div>
          <h3>Real-time collaboration</h3>
          <p>Share dashboards, leave comments, and make decisions as a team without switching tools.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Enterprise security</h3>
          <p>Bank-grade encryption, SSO, and fine-grained access controls for peace of mind.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-chart-pie"></i></div>
          <h3>Custom reports</h3>
          <p>Build beautiful, branded reports in minutes with drag-and-drop widgets and SQL editor.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-plug"></i></div>
          <h3>50+ integrations</h3>
          <p>Connect to Slack, Salesforce, Google Ads, HubSpot and your data warehouse instantly.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-clock"></i></div>
          <h3>Automated alerts</h3>
          <p>Get notified when metrics change significantly — never miss a business signal.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="section-header">
        <h2>Trusted by forward-thinking companies</h2>
        <p>See why teams switch to Nova for their analytics stack.</p>
      </div>
      <div class="testimonial-grid">
        <div class="testimonial">
          <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p>"Nova's AI insights reduced our reporting time by 60%. The intuitive dashboards helped our marketing team pivot strategy in real time."</p>
          <div class="customer">— Sarah Chen, CMO at Luminate</div>
        </div>
        <div class="testimonial">
          <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p>"Finally a tool that bridges data science and business teams. The predictive models are surprisingly accurate and easy to deploy."</p>
          <div class="customer">— Marcus V., Head of Analytics</div>
        </div>
        <div class="testimonial">
          <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
          <p>"From setup to daily use, Nova is a joy. The collaboration features alone saved us countless email threads."</p>
          <div class="customer">— Elena Rossi, Product Lead</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA / pricing teaser -->
  <div class="container">
    <div class="cta-section">
      <h2>Ready to accelerate your data culture?</h2>
      <p style="max-width: 600px; margin: 0.5rem auto;">Join thousands of teams using Nova to unlock the full potential of their data. Start your 14-day trial — no credit card required.</p>
      <a href="#" class="btn-primary" style="background:#111827; padding: 0.8rem 2.2rem;"><i class="fas fa-arrow-right"></i> Claim your trial</a>
      <div style="margin-top: 1.8rem; font-size: 0.85rem; color: #4b5563;">
        <i class="fas fa-check-circle"></i> No commitment · Cancel anytime · Free onboarding resources
      </div>
    </div>
  </div>
</main>

<footer>
  <div class="container">
    <div class="footer-links">
      <a href="#">Product</a>
      <a href="#">Pricing</a>
      <a href="#">Documentation</a>
      <a href="#">API status</a>
      <a href="#">Privacy</a>
      <a href="#">Contact</a>
    </div>
    <div style="margin: 1rem 0;">
      <i class="fab fa-twitter" style="margin: 0 8px;"></i>
      <i class="fab fa-linkedin" style="margin: 0 8px;"></i>
      <i class="fab fa-github" style="margin: 0 8px;"></i>
    </div>
    <p>&copy; 2025 Nova Analytics, Inc. All rights reserved. Intelligent insights for modern teams.</p>
  </div>
</footer>

<!-- simple interactive micro-interaction on buttons (just console free) -->
<script>
  // just a subtle console greeting, plus small effect on demo button to show it's ready
  document.querySelectorAll('.btn-primary, .btn-secondary, .btn-outline-light').forEach(btn => {
    btn.addEventListener('click', (e) => {
      if(btn.classList.contains('btn-primary') || btn.classList.contains('btn-secondary')) {
        // prevent default only for demo to avoid page reload
        e.preventDefault();
        alert('✨ Demo interaction: this is a sample landing page. Thank you for exploring Nova!');
      }
    });
  });
  // make "Get started" and nav demo also show alert
  const navCta = document.querySelector('.nav-links .btn-primary');
  if(navCta) {
    navCta.addEventListener('click', (e) => {
      e.preventDefault();
      alert('✨ Welcome! Start your trial — this is a sample landing page.');
    });
  }
  // watch demo button also
  const watchDemo = document.querySelector('.btn-secondary');
  if(watchDemo) {
    watchDemo.addEventListener('click', (e) => {
      e.preventDefault();
      alert('🎥 Demo video would play here. This is a concept landing page.');
    });
  }
</script>
</body>
</html>
