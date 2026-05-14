<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Irum Zaidi — Full-Stack Developer</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div id="cursor-glow"></div>
<canvas id="particles"></canvas>

<!-- ─── NAV ─── -->
<nav id="navbar">
  <a href="#hero" class="nav-logo">IZ.</a>
  <ul class="nav-links" id="navLinks">
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#education">Education</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a href="mailto:iruzaidi.9@gmail.com" class="nav-cta">Hire Me</a>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- ─── HERO ─── -->
<section id="hero">
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="hero-inner">
    <div class="hero-badge"><span class="dot"></span> Open to Opportunities</div>
    <h1 class="hero-name">Irum Zaidi</h1>
    <p class="hero-title" id="typed-target"></p>
    <p class="hero-desc">
      Software Engineer crafting pixel-perfect web experiences — from high-performance frontends
      to scalable backends, API integrations, and cloud-deployed solutions.
    </p>
    <div class="hero-btns">
      <a href="#projects" class="btn-primary">View My Work</a>
      <a href="#contact" class="btn-outline">Get In Touch</a>
    </div>
    <div class="hero-socials">
      <a href="https://linkedin.com/in/Irum-Zaidi" target="_blank" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://github.com/Irum-Zaidi" target="_blank" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
      <a href="mailto:iruzaidi.9@gmail.com" class="social-icon" title="Email"><i class="fas fa-envelope"></i></a>
      <a href="tel:+923274511518" class="social-icon" title="Phone"><i class="fas fa-phone"></i></a>
    </div>
  </div>
  <div class="scroll-indicator">
    <span>scroll</span>
    <i class="fas fa-chevron-down"></i>
  </div>
</section>

<!-- ─── ABOUT ─── -->
<section id="about">
  <div class="section-header reveal">
    <span class="section-tag">// who am i</span>
    <h2 class="section-title">About <span>Me</span></h2>
    <div class="section-line"></div>
  </div>
  <div class="about-grid">
    <div class="about-avatar-wrap reveal-left">
      <div class="avatar-ring">
        <div class="avatar-inner">👩‍💻</div>
      </div>
      <div class="about-floats">
        <div class="float-badge f1"><i class="fas fa-cloud"></i> AWS Deployed</div>
        <div class="float-badge f2"><i class="fas fa-code"></i> Full-Stack</div>
        <div class="float-badge f3"><i class="fas fa-star"></i> CGPA 3.66</div>
      </div>
    </div>
    <div class="about-text reveal-right">
      <h3>Passionate Developer &amp;<br/>Problem Solver</h3>
      <p>
        I'm a Full-Stack Developer based in Lahore, Pakistan, with a BS in Software Engineering
        from Virtual University of Pakistan. I specialize in building responsive, high-quality web
        applications using modern technologies.
      </p>
      <p>
        With hands-on experience across the full development lifecycle — from building medical
        portals and e-commerce platforms to integrating payment gateways and deploying on AWS —
        I bring both technical depth and product sensibility to every project.
      </p>
      <div class="about-stats">
        <div class="stat-card"><div class="num">3+</div><div class="lbl">Years Experience</div></div>
        <div class="stat-card"><div class="num">8+</div><div class="lbl">Projects Shipped</div></div>
        <div class="stat-card"><div class="num">5+</div><div class="lbl">APIs Integrated</div></div>
        <div class="stat-card"><div class="num">3.66</div><div class="lbl">CGPA Score</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ─── SKILLS ─── -->
<section id="skills">
  <div class="section-header reveal">
    <span class="section-tag">// what i use</span>
    <h2 class="section-title">Technical <span>Skills</span></h2>
    <div class="section-line"></div>
  </div>
  <div class="skills-grid">
    <div class="skill-group reveal">
      <div class="skill-group-header">
        <div class="skill-group-icon icon-purple"><i class="fas fa-palette"></i></div>
        <h4>Frontend Development</h4>
      </div>
      <div class="skill-tags">
        <span class="skill-tag">HTML5</span><span class="skill-tag">CSS3</span>
        <span class="skill-tag">JavaScript</span><span class="skill-tag">Bootstrap</span>
        <span class="skill-tag">Tailwind CSS</span><span class="skill-tag">Responsive Design</span>
      </div>
    </div>
    <div class="skill-group reveal">
      <div class="skill-group-header">
        <div class="skill-group-icon icon-cyan"><i class="fas fa-server"></i></div>
        <h4>Backend &amp; Database</h4>
      </div>
      <div class="skill-tags">
        <span class="skill-tag">PHP</span><span class="skill-tag">Laravel</span>
        <span class="skill-tag">MySQL</span><span class="skill-tag">REST APIs</span>
        <span class="skill-tag">Core PHP</span>
      </div>
    </div>
    <div class="skill-group reveal">
      <div class="skill-group-header">
        <div class="skill-group-icon icon-orange"><i class="fab fa-wordpress"></i></div>
        <h4>CMS &amp; Design</h4>
      </div>
      <div class="skill-tags">
        <span class="skill-tag">WordPress</span><span class="skill-tag">Elementor Pro</span>
        <span class="skill-tag">WPXpro</span><span class="skill-tag">Beaver Builder</span>
        <span class="skill-tag">Canva Pro</span>
      </div>
    </div>
    <div class="skill-group reveal">
      <div class="skill-group-header">
        <div class="skill-group-icon icon-blue"><i class="fas fa-cloud"></i></div>
        <h4>Cloud &amp; DevOps</h4>
      </div>
      <div class="skill-tags">
        <span class="skill-tag">AWS EC2</span><span class="skill-tag">AWS SES</span>
        <span class="skill-tag">cPanel</span><span class="skill-tag">Web Hosting</span>
        <span class="skill-tag">Deployment</span>
      </div>
    </div>
    <div class="skill-group reveal">
      <div class="skill-group-header">
        <div class="skill-group-icon icon-green"><i class="fas fa-plug"></i></div>
        <h4>APIs &amp; Integrations</h4>
      </div>
      <div class="skill-tags">
        <span class="skill-tag">Twilio API</span><span class="skill-tag">Payment Gateway</span>
        <span class="skill-tag">Postman</span><span class="skill-tag">Third-party APIs</span>
      </div>
    </div>
    <div class="skill-group reveal">
      <div class="skill-group-header">
        <div class="skill-group-icon icon-pink"><i class="fas fa-robot"></i></div>
        <h4>AI &amp; Testing</h4>
      </div>
      <div class="skill-tags">
        <span class="skill-tag">ChatGPT</span><span class="skill-tag">Claude AI</span>
        <span class="skill-tag">GitHub Copilot</span><span class="skill-tag">SQA</span>
        <span class="skill-tag">System Analysis</span>
      </div>
    </div>
  </div>
</section>

<!-- ─── EXPERIENCE ─── -->
<section id="experience">
  <div class="section-header reveal">
    <span class="section-tag">// where i've worked</span>
    <h2 class="section-title">Work <span>Experience</span></h2>
    <div class="section-line"></div>
  </div>
  <div class="timeline">
    <div class="tl-item reveal">
      <div class="tl-dot"><i class="fas fa-laptop-code"></i></div>
      <div class="tl-card">
        <div class="tl-header">
          <span class="tl-role">Full-Stack Developer</span>
          <span class="tl-date">May 2024 – May 2026</span>
        </div>
        <div class="tl-company">Arty Node, Lahore</div>
        <ul class="tl-points">
          <li>Developed the <strong>'Consult' Medical Portal</strong> using Core PHP for secure pathology and radiology referrals.</li>
          <li>Integrated <strong>AWS SES</strong> and <strong>Twilio APIs</strong>, managed deployments on AWS EC2 and cPanel servers.</li>
          <li>Built and maintained E-Commerce and corporate websites with <strong>payment integration</strong>, responsive design, and SEO optimization.</li>
        </ul>
      </div>
    </div>
    <div class="tl-item reveal">
      <div class="tl-dot"><i class="fab fa-wordpress"></i></div>
      <div class="tl-card">
        <div class="tl-header">
          <span class="tl-role">WordPress Developer</span>
          <span class="tl-date">Dec 2023 – Apr 2024</span>
        </div>
        <div class="tl-company">Topnotch Innovative Technologies, Lahore</div>
        <ul class="tl-points">
          <li>Customized and deployed <strong>8+ premium WordPress themes</strong> using Elementor for the WPXpro marketplace.</li>
          <li>Developed responsive frontend layouts using <strong>HTML, CSS, Bootstrap</strong>, and JavaScript.</li>
          <li>Optimized website performance, PageSpeed scores, and resolved UI inconsistencies before launch.</li>
        </ul>
      </div>
    </div>
    <div class="tl-item reveal">
      <div class="tl-dot"><i class="fas fa-bug"></i></div>
      <div class="tl-card">
        <div class="tl-header">
          <span class="tl-role">SQA Engineer</span>
          <span class="tl-date">Jun 2023 – Dec 2023</span>
        </div>
        <div class="tl-company">Aan Tourism, Lahore</div>
        <ul class="tl-points">
          <li>Performed manual testing and system analysis to identify UI/UX and cross-browser issues.</li>
          <li>Developed and fixed frontend components using <strong>HTML, CSS, Bootstrap</strong>, and JavaScript.</li>
          <li>Collaborated with developers to improve website responsiveness and reduce post-launch issues.</li>
        </ul>
      </div>
    </div>
    <div class="tl-item reveal">
      <div class="tl-dot"><i class="fas fa-database"></i></div>
      <div class="tl-card">
        <div class="tl-header">
          <span class="tl-role">Data Entry Specialist</span>
          <span class="tl-date">Feb 2023 – Apr 2023</span>
        </div>
        <div class="tl-company">Orient Biz Tech, Lahore</div>
        <ul class="tl-points">
          <li>Managed product data entry and website publishing with high accuracy.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ─── PROJECTS ─── -->
<section id="projects">
  <div class="section-header reveal">
    <span class="section-tag">// what i've built</span>
    <h2 class="section-title">Featured <span>Projects</span></h2>
    <div class="section-line"></div>
  </div>
  <div class="projects-grid">
    <div class="project-card reveal">
      <div class="project-top">
        <div class="project-icon" style="background:rgba(34,197,94,0.12);color:#22c55e;"><i class="fas fa-heartbeat"></i></div>
        <div class="project-links">
          <a href="https://consult.doctorhelp.com.au/" target="_blank" class="proj-link" title="Consult Portal"><i class="fas fa-external-link-alt"></i></a>
          <a href="https://www.doctorhelp.com.au" target="_blank" class="proj-link" title="Doctor Help"><i class="fas fa-globe"></i></a>
        </div>
      </div>
      <div class="project-body">
        <div class="project-name">Doctor Help — Medical Portal</div>
        <div class="project-desc">A secure medical EMR and consultation portal handling pathology and radiology referrals. Features AWS SES email notifications, Twilio SMS, and cloud deployment on AWS EC2.</div>
        <div class="project-tags">
          <span class="proj-tag">Core PHP</span><span class="proj-tag">MySQL</span>
          <span class="proj-tag">AWS EC2</span><span class="proj-tag">AWS SES</span><span class="proj-tag">Twilio</span>
        </div>
      </div>
    </div>
    <div class="project-card reveal">
      <div class="project-top">
        <div class="project-icon" style="background:rgba(96,165,250,0.12);color:#60a5fa;"><i class="fas fa-briefcase"></i></div>
        <div class="project-links">
          <a href="https://hariscpa.com" target="_blank" class="proj-link"><i class="fas fa-external-link-alt"></i></a>
        </div>
      </div>
      <div class="project-body">
        <div class="project-name">Haris CPA — Corporate Finance</div>
        <div class="project-desc">A professional corporate finance website built for a Certified Public Accountant firm. Focused on clean design, SEO optimization, and performance.</div>
        <div class="project-tags">
          <span class="proj-tag">WordPress</span><span class="proj-tag">Elementor</span>
          <span class="proj-tag">SEO</span><span class="proj-tag">Responsive</span>
        </div>
      </div>
    </div>
    <div class="project-card reveal">
      <div class="project-top">
        <div class="project-icon" style="background:rgba(251,146,60,0.12);color:#fb923c;"><i class="fas fa-shopping-cart"></i></div>
        <div class="project-links">
          <a href="https://lahorecarpet.pk" target="_blank" class="proj-link"><i class="fas fa-external-link-alt"></i></a>
        </div>
      </div>
      <div class="project-body">
        <div class="project-name">Lahore Carpet — E-Commerce</div>
        <div class="project-desc">A full-featured e-commerce platform for a carpet business with secure payment integration, product catalog, and responsive design optimized for conversions.</div>
        <div class="project-tags">
          <span class="proj-tag">WordPress</span><span class="proj-tag">WooCommerce</span>
          <span class="proj-tag">Payment Gateway</span><span class="proj-tag">SEO</span>
        </div>
      </div>
    </div>
    <div class="project-card reveal">
      <div class="project-top">
        <div class="project-icon" style="background:rgba(167,139,250,0.12);color:#a78bfa;"><i class="fas fa-coffee"></i></div>
        <div class="project-links">
          <a href="https://themes.wpxpro.com/beanharbor/" target="_blank" class="proj-link"><i class="fas fa-external-link-alt"></i></a>
        </div>
      </div>
      <div class="project-body">
        <div class="project-name">Bean Harbor — Theme Demo</div>
        <div class="project-desc">A premium WPXpro marketplace theme for coffee e-commerce. Showcases custom Elementor layouts, performance optimization, and a polished shopping experience.</div>
        <div class="project-tags">
          <span class="proj-tag">WordPress</span><span class="proj-tag">Elementor Pro</span>
          <span class="proj-tag">WPXpro</span><span class="proj-tag">Bootstrap</span>
        </div>
      </div>
    </div>
    <div class="project-card reveal">
      <div class="project-top">
        <div class="project-icon" style="background:rgba(244,114,182,0.12);color:#f472b6;"><i class="fas fa-paw"></i></div>
        <div class="project-links">
          <a href="https://themes.wpxpro.com/petty/" target="_blank" class="proj-link"><i class="fas fa-external-link-alt"></i></a>
        </div>
      </div>
      <div class="project-body">
        <div class="project-name">Petty — E-Commerce Theme</div>
        <div class="project-desc">A beautifully crafted pet store e-commerce theme for the WPXpro marketplace, featuring modern layouts and a smooth user experience.</div>
        <div class="project-tags">
          <span class="proj-tag">WordPress</span><span class="proj-tag">Elementor Pro</span>
          <span class="proj-tag">WPXpro</span><span class="proj-tag">JavaScript</span>
        </div>
      </div>
    </div>
    <div class="project-card reveal">
      <div class="project-top">
        <div class="project-icon" style="background:rgba(34,211,238,0.12);color:#22d3ee;"><i class="fas fa-vote-yea"></i></div>
        <div class="project-links"></div>
      </div>
      <div class="project-body">
        <div class="project-name">Online Voting System</div>
        <div class="project-desc">Final Year Project — A secure web-based voting system with user authentication, real-time vote tracking, and admin dashboard built from scratch.</div>
        <div class="project-tags">
          <span class="proj-tag">PHP</span><span class="proj-tag">MySQL</span>
          <span class="proj-tag">Bootstrap</span><span class="proj-tag">HTML/CSS</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── EDUCATION ─── -->
<section id="education">
  <div class="section-header reveal">
    <span class="section-tag">// my background</span>
    <h2 class="section-title">Education &amp; <span>Achievements</span></h2>
    <div class="section-line"></div>
  </div>
  <div class="edu-grid">
    <div class="edu-card reveal-left">
      <div class="edu-card-header">
        <div class="edu-icon"><i class="fas fa-graduation-cap"></i></div>
        <div>
          <h3>BS Software Engineering</h3>
          <div class="uni">Virtual University of Pakistan</div>
        </div>
      </div>
      <div class="edu-meta">
        <span class="edu-pill">Oct 2019 – Oct 2023</span>
        <span class="edu-pill highlight">CGPA: 3.66 / 4.0</span>
        <span class="edu-pill">Lahore, Pakistan</span>
      </div>
      <p style="color:var(--sub);font-size:0.88rem;line-height:1.7;">
        Graduated with merit scholarship. Focused on web technologies, database systems,
        software engineering principles, and cloud computing. Final project: Web-Based Online Voting System.
      </p>
    </div>
    <div class="reveal-right">
      <h4 style="font-size:1rem;font-weight:700;color:var(--sub);margin-bottom:1rem;text-transform:uppercase;letter-spacing:0.5px;">Certifications &amp; Achievements</h4>
      <div class="achievements-list">
        <div class="ach-item"><i class="fas fa-trophy ach-icon" style="color:#f59e0b;"></i><span>Merit Scholarship — Virtual University of Pakistan</span></div>
        <div class="ach-item"><i class="fas fa-medal ach-icon" style="color:#a78bfa;"></i><span>Position Holder — Global System for Educational Assessment</span></div>
        <div class="ach-item"><i class="fas fa-certificate ach-icon"></i><span>Artificial Intelligence for IT &amp; Non-IT Professionals</span></div>
        <div class="ach-item"><i class="fas fa-paint-brush ach-icon" style="color:#f472b6;"></i><span>Graphic Design — DigiSkills Pakistan</span></div>
        <div class="ach-item"><i class="fab fa-wordpress ach-icon" style="color:#22d3ee;"></i><span>WordPress Development — DigiSkills Pakistan</span></div>
        <div class="ach-item"><i class="fas fa-star ach-icon" style="color:#22c55e;"></i><span>Art &amp; Science Exhibition — Participation Certificate</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ─── CONTACT ─── -->
<section id="contact">
  <div class="section-header reveal">
    <span class="section-tag">// let's connect</span>
    <h2 class="section-title">Get In <span>Touch</span></h2>
    <div class="section-line"></div>
  </div>
  <div class="contact-inner">
    <div class="contact-info reveal-left">
      <h3>Let's build something great together.</h3>
      <p>Whether you have a project in mind, a job opportunity, or just want to chat about web development — my inbox is always open.</p>
      <div class="contact-items">
        <a href="mailto:iruzaidi.9@gmail.com" class="contact-item">
          <div class="contact-item-icon icon-purple"><i class="fas fa-envelope"></i></div>
          <div class="contact-item-text"><div class="label">Email</div><div class="val">iruzaidi.9@gmail.com</div></div>
        </a>
        <a href="tel:+923274511518" class="contact-item">
          <div class="contact-item-icon icon-cyan"><i class="fas fa-phone"></i></div>
          <div class="contact-item-text"><div class="label">Phone</div><div class="val">+92 327 4511518</div></div>
        </a>
        <a href="https://linkedin.com/in/Irum-Zaidi" target="_blank" class="contact-item">
          <div class="contact-item-icon icon-blue"><i class="fab fa-linkedin-in"></i></div>
          <div class="contact-item-text"><div class="label">LinkedIn</div><div class="val">Irum-Zaidi</div></div>
        </a>
        <a href="https://github.com/Irum-Zaidi" target="_blank" class="contact-item">
          <div class="contact-item-icon" style="background:rgba(255,255,255,0.08);color:var(--text);"><i class="fab fa-github"></i></div>
          <div class="contact-item-text"><div class="label">GitHub</div><div class="val">Irum-Zaidi</div></div>
        </a>
        <div class="contact-item" style="cursor:default;">
          <div class="contact-item-icon icon-green"><i class="fas fa-map-marker-alt"></i></div>
          <div class="contact-item-text"><div class="label">Location</div><div class="val">Green Town, Lahore, Pakistan</div></div>
        </div>
      </div>
    </div>
    <div class="contact-form reveal-right">
      <form id="contactForm">
        <div class="form-row">
          <div class="form-group"><label for="fname">First Name</label><input type="text" id="fname" placeholder="John" required /></div>
          <div class="form-group"><label for="lname">Last Name</label><input type="text" id="lname" placeholder="Doe" required /></div>
        </div>
        <div class="form-group"><label for="email">Email Address</label><input type="email" id="email" placeholder="john@example.com" required /></div>
        <div class="form-group"><label for="subject">Subject</label><input type="text" id="subject" placeholder="Project inquiry..." required /></div>
        <div class="form-group"><label for="message">Message</label><textarea id="message" rows="5" placeholder="Tell me about your project..." required></textarea></div>
        <button type="submit" class="submit-btn">Send Message <i class="fas fa-paper-plane" style="margin-left:8px;"></i></button>
      </form>
    </div>
  </div>
</section>

<!-- ─── FOOTER ─── -->
<footer>
  <div class="footer-logo">IZ.</div>
  <div class="footer-text">© {{ date('Y') }} Irum Zaidi. Crafted with passion in Lahore, Pakistan.</div>
  <div class="footer-socials">
    <a href="https://linkedin.com/in/Irum-Zaidi" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://github.com/Irum-Zaidi" target="_blank" class="social-icon"><i class="fab fa-github"></i></a>
    <a href="mailto:iruzaidi.9@gmail.com" class="social-icon"><i class="fas fa-envelope"></i></a>
  </div>
</footer>

</body>
</html>
