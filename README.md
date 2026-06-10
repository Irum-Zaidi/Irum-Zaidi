# Irum Zaidi — Personal Portfolio Website

A modern, glassmorphism-themed personal portfolio website built with pure HTML, CSS, and JavaScript. No frameworks, no build tools — just open and deploy.

## Live Demo

> Deploy to GitHub Pages and add your URL here.

---

## Features

- **Glassmorphism UI** — frosted glass cards with `backdrop-filter: blur()`, semi-transparent panels, and glowing borders throughout
- **Animated gradient background** — shifting purple, blue, cyan, and pink radial blobs that slowly animate
- **Interactive particle canvas** — mouse-reactive floating particles with connecting lines in the hero section
- **Typing animation** — cycles through roles (Full-Stack Developer, WordPress Expert, AWS Cloud Enthusiast…)
- **Scroll reveal** — sections and cards fade in as you scroll using IntersectionObserver
- **Animated counters** — stats count up when they enter the viewport
- **Sticky glassmorphism navbar** — with active section highlighting and mobile hamburger menu
- **Fully responsive** — 4 breakpoints covering mobile, tablet, laptop, and desktop
- **Zero dependencies** — no npm, no bundler, no frameworks

---

## Sections

| # | Section | Content |
|---|---------|---------|
| 01 | Hero | Name, typing role animator, CTA buttons, social links, particle canvas |
| 02 | About | Bio, code window snippet, animated stat counters |
| 03 | Experience | Timeline — Arty Node, Topnotch Innovative Technologies, Aan Tourism, Orient Biz Tech |
| 04 | Skills | 8 skill cards — Frontend, Backend, CMS, Cloud, APIs, AI, Testing, Design |
| 05 | Projects | 6 project cards — Doctor Help EMR, Haris CPA, Lahore Carpet, Bean Harbor, Petty, Voting System |
| 06 | Education | BS Software Engineering (CGPA 3.66), achievements, certificates, languages |
| 07 | Contact | Email, phone, location, LinkedIn, GitHub |

---

## File Structure

```
portfolio/
├── index.html      # Full HTML structure
├── style.css       # All styles — design tokens, glass theme, animations, responsive
├── script.js       # Particle canvas, typing animator, scroll reveal, counters, nav logic
└── README.md
```

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Markup | HTML5 (semantic) |
| Styling | CSS3 — custom properties, `backdrop-filter`, `clamp()`, CSS Grid, Flexbox |
| Scripting | Vanilla JavaScript (ES6+), Canvas API, IntersectionObserver |
| Fonts | Google Fonts — Inter, Space Grotesk, Fira Code |
| Hosting | GitHub Pages (recommended) |

---

## Deploy to GitHub Pages

1. Create a new repository on GitHub (e.g. `irum-zaidi.github.io` for a user site, or any name for a project site)
2. Push all three files:
   ```bash
   git init
   git add index.html style.css script.js README.md
   git commit -m "Initial portfolio release"
   git branch -M main
   git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO.git
   git push -u origin main
   ```
3. Go to **Settings → Pages → Source → Deploy from branch → main → / (root)**
4. Your site will be live at `https://YOUR_USERNAME.github.io/YOUR_REPO/`

---

## Run Locally

No setup needed. Just open `index.html` in any modern browser:

```bash
# Option 1 — direct file open
open index.html

# Option 2 — via XAMPP (already configured)
# Visit http://localhost/Resume/
```

---

## Customisation

All design values are CSS custom properties in `:root` at the top of `style.css`:

```css
--purple:   #8b5cf6;   /* primary accent */
--cyan:     #22d3ee;   /* secondary accent */
--glass:    rgba(255, 255, 255, 0.06);   /* card background */
--blur:     blur(20px);                  /* glass blur amount */
```

To change colors, update those tokens — every component inherits from them automatically.

---

## Browser Support

Works in all modern browsers that support `backdrop-filter`:

| Chrome | Firefox | Safari | Edge |
|--------|---------|--------|------|
| ✅ 76+ | ✅ 103+ | ✅ 9+ | ✅ 79+ |

---

## License

MIT — free to use, modify, and deploy.

---

*Designed & built by **Irum Zaidi** · Lahore, Pakistan*
