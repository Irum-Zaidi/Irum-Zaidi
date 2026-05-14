/* ── CURSOR GLOW ── */
const glow = document.getElementById('cursor-glow');
if (glow) {
    document.addEventListener('mousemove', e => {
        glow.style.left = e.clientX + 'px';
        glow.style.top  = e.clientY + 'px';
    });
}

/* ── PARTICLES CANVAS ── */
(function () {
    const canvas = document.getElementById('particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;

    function resize() {
        W = canvas.width  = window.innerWidth;
        H = canvas.height = window.innerHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    function rand(a, b) { return Math.random() * (b - a) + a; }

    const COLORS = ['rgba(167,139,250,', 'rgba(34,211,238,', 'rgba(244,114,182,'];
    const particles = Array.from({ length: 80 }, () => ({
        x: rand(0, window.innerWidth),
        y: rand(0, window.innerHeight),
        r: rand(0.5, 2.5),
        dx: rand(-0.3, 0.3),
        dy: rand(-0.3, 0.3),
        alpha: rand(0.1, 0.5),
        color: COLORS[Math.floor(rand(0, COLORS.length))],
    }));

    function draw() {
        ctx.clearRect(0, 0, W, H);
        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = p.color + p.alpha + ')';
            ctx.fill();
            p.x += p.dx; p.y += p.dy;
            if (p.x < 0 || p.x > W) p.dx *= -1;
            if (p.y < 0 || p.y > H) p.dy *= -1;
        });
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 120) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = `rgba(167,139,250,${0.08 * (1 - dist / 120)})`;
                    ctx.lineWidth = 0.5;
                    ctx.stroke();
                }
            }
        }
        requestAnimationFrame(draw);
    }
    draw();
})();

/* ── TYPING ANIMATION ── */
(function () {
    const el = document.getElementById('typed-target');
    if (!el) return;
    const texts = [
        'Full-Stack Developer',
        'WordPress Expert',
        'Cloud & AWS Engineer',
        'UI/UX Implementer',
        'API Integration Specialist',
    ];
    let ti = 0, ci = 0, deleting = false;
    const cursor = '<span class="typed-cursor">|</span>';

    function type() {
        const current = texts[ti];
        if (!deleting) {
            ci++;
            el.innerHTML = current.slice(0, ci) + cursor;
            if (ci === current.length) { deleting = true; setTimeout(type, 1800); return; }
            setTimeout(type, 70);
        } else {
            ci--;
            el.innerHTML = current.slice(0, ci) + cursor;
            if (ci === 0) { deleting = false; ti = (ti + 1) % texts.length; setTimeout(type, 400); return; }
            setTimeout(type, 35);
        }
    }
    type();
})();

/* ── SCROLL REVEAL ── */
(function () {
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach((el, i) => {
        el.style.transitionDelay = (i % 4) * 0.08 + 's';
        obs.observe(el);
    });
})();

/* ── HAMBURGER ── */
(function () {
    const btn   = document.getElementById('hamburger');
    const links = document.getElementById('navLinks');
    if (!btn || !links) return;

    btn.addEventListener('click', () => {
        links.classList.toggle('open');
        btn.classList.toggle('open');
    });
    links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
        links.classList.remove('open');
        btn.classList.remove('open');
    }));
    document.addEventListener('click', e => {
        if (!btn.contains(e.target) && !links.contains(e.target)) {
            links.classList.remove('open');
            btn.classList.remove('open');
        }
    });
})();

/* ── CONTACT FORM ── */
(function () {
    const form = document.getElementById('contactForm');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const btn = this.querySelector('.submit-btn');
        btn.textContent = '✓ Message Sent!';
        btn.style.background = 'linear-gradient(135deg,#22c55e,#16a34a)';
        setTimeout(() => {
            btn.innerHTML = 'Send Message <i class="fas fa-paper-plane" style="margin-left:8px;"></i>';
            btn.style.background = '';
            this.reset();
        }, 3000);
    });
})();

/* ── COUNTER ANIMATION ── */
(function () {
    const counters = document.querySelectorAll('.stat-card .num');
    counters.forEach(el => {
        const raw = el.textContent.trim();
        el.dataset.target  = parseFloat(raw);
        el.dataset.suffix  = raw.endsWith('+') ? '+' : '';
        el.dataset.decimal = raw.includes('.') ? '1' : '0';
        el.textContent = '0' + el.dataset.suffix;
    });
    const obs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el      = entry.target;
            const target  = parseFloat(el.dataset.target);
            const suffix  = el.dataset.suffix;
            const isDecimal = el.dataset.decimal === '1';
            const step    = target / (1500 / 16);
            let current   = 0;
            const timer   = setInterval(() => {
                current += step;
                if (current >= target) { current = target; clearInterval(timer); }
                el.textContent = (isDecimal ? current.toFixed(2) : Math.ceil(current)) + suffix;
            }, 16);
            obs.unobserve(el);
        });
    }, { threshold: 0.5 });
    counters.forEach(c => obs.observe(c));
})();
