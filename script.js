/* ============================================================
   PARTICLE CANVAS
   ============================================================ */
(function () {
  const canvas = document.getElementById('particleCanvas');
  const ctx = canvas.getContext('2d');
  let particles = [];
  let mouse = { x: null, y: null };
  let raf;

  function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }

  function Particle() {
    this.init();
  }
  Particle.prototype.init = function () {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;
    this.r = Math.random() * 1.8 + 0.4;
    this.vx = (Math.random() - 0.5) * 0.45;
    this.vy = (Math.random() - 0.5) * 0.45;
    this.a = Math.random() * 0.45 + 0.1;
    this.col = Math.random() > 0.55 ? '139,92,246' : '34,211,238';
  };
  Particle.prototype.update = function () {
    this.x += this.vx;
    this.y += this.vy;
    if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
    if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
    if (mouse.x !== null) {
      const dx = this.x - mouse.x;
      const dy = this.y - mouse.y;
      const d = Math.sqrt(dx * dx + dy * dy);
      if (d < 90) {
        const f = (90 - d) / 90;
        this.x += dx * f * 0.025;
        this.y += dy * f * 0.025;
      }
    }
  };
  Particle.prototype.draw = function () {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
    ctx.fillStyle = 'rgba(' + this.col + ',' + this.a + ')';
    ctx.fill();
  };

  function init() {
    const n = Math.min(Math.floor(window.innerWidth / 13), 90);
    particles = Array.from({ length: n }, () => new Particle());
  }

  function connect() {
    for (let i = 0; i < particles.length; i++) {
      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const d = Math.sqrt(dx * dx + dy * dy);
        if (d < 115) {
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = 'rgba(139,92,246,' + ((1 - d / 115) * 0.12) + ')';
          ctx.lineWidth = 0.6;
          ctx.stroke();
        }
      }
    }
  }

  function loop() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    connect();
    particles.forEach(p => { p.update(); p.draw(); });
    raf = requestAnimationFrame(loop);
  }

  resize();
  init();
  loop();

  window.addEventListener('resize', () => { resize(); init(); });
  window.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; });
  window.addEventListener('mouseleave', () => { mouse.x = null; mouse.y = null; });

  const heroEl = document.getElementById('hero');
  const heroObs = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) {
      if (!raf) loop();
    } else {
      cancelAnimationFrame(raf);
      raf = null;
    }
  });
  heroObs.observe(heroEl);
})();

/* ============================================================
   TYPING ANIMATION
   ============================================================ */
(function () {
  const el = document.getElementById('typingText');
  const roles = [
    'Full-Stack Developer',
    'WordPress Expert',
    'AWS Cloud Enthusiast',
    'UI/UX Perfectionist',
    'PHP & Laravel Dev',
  ];
  let ri = 0, ci = 0, deleting = false;

  function tick() {
    const word = roles[ri];
    if (deleting) {
      el.textContent = word.slice(0, --ci);
    } else {
      el.textContent = word.slice(0, ++ci);
    }
    let delay = deleting ? 55 : 95;
    if (!deleting && ci === word.length) { delay = 2000; deleting = true; }
    else if (deleting && ci === 0) { deleting = false; ri = (ri + 1) % roles.length; delay = 450; }
    setTimeout(tick, delay);
  }
  setTimeout(tick, 1100);
})();

/* ============================================================
   SCROLL REVEAL (INTERSECTION OBSERVER)
   ============================================================ */
(function () {
  const obs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const siblings = Array.from(el.parentElement.querySelectorAll('[data-reveal]'));
      const idx = siblings.indexOf(el);
      setTimeout(() => el.classList.add('revealed'), idx * 110);
      obs.unobserve(el);
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('[data-reveal]').forEach(el => obs.observe(el));
})();

/* ============================================================
   COUNTER ANIMATION
   ============================================================ */
(function () {
  const counters = document.querySelectorAll('.stat-num');

  const obs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const target = parseFloat(el.dataset.count);
      const suffix = el.dataset.suffix || '';
      const decimal = parseInt(el.dataset.decimal || '0', 10);
      const duration = 1400;
      const step = target / (duration / 16);
      let current = 0;

      function update() {
        current = Math.min(current + step, target);
        el.textContent = (decimal > 0 ? current.toFixed(decimal) : Math.floor(current)) + suffix;
        if (current < target) requestAnimationFrame(update);
        else el.textContent = (decimal > 0 ? target.toFixed(decimal) : target) + suffix;
      }
      requestAnimationFrame(update);
      obs.unobserve(el);
    });
  }, { threshold: 0.5 });

  counters.forEach(c => obs.observe(c));
})();

/* ============================================================
   NAVIGATION — scroll solid + active section + mobile menu
   ============================================================ */
(function () {
  const navbar = document.getElementById('navbar');
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('navLinks');
  const links = navLinks.querySelectorAll('a');
  const sections = document.querySelectorAll('section[id]');
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    navbar.classList.toggle('solid', y > 40);
    backToTop.classList.toggle('visible', y > 400);

    let current = '';
    sections.forEach(sec => {
      if (y >= sec.offsetTop - 120) current = sec.id;
    });
    links.forEach(a => {
      a.classList.toggle('active', a.getAttribute('href') === '#' + current);
    });
  }, { passive: true });

  hamburger.addEventListener('click', () => {
    const open = navLinks.classList.toggle('open');
    hamburger.setAttribute('aria-expanded', open);
  });

  links.forEach(a => {
    a.addEventListener('click', () => {
      navLinks.classList.remove('open');
      hamburger.setAttribute('aria-expanded', false);
    });
  });

  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();
