import Alpine from 'alpinejs';
import { createIcons, icons } from 'lucide';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

// Expose Alpine to window
window.Alpine = Alpine;

/**
 * EXPROSA Premium Adaptive 3D Engine
 * Tiered execution: Desktop (Immersive), Tablet (Balanced), Mobile (Lightweight)
 * Respects: prefers-reduced-motion, WebGL capabilities, Page Visibility, IntersectionObserver
 */
const capabilities = {
    webgl: false,
    reducedMotion: false,
    isPointer: false,
    isMobile: false,
    isTablet: false,
    isDesktop: false,
};

function detectCapabilities() {
    capabilities.reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    capabilities.isPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    
    const width = window.innerWidth;
    capabilities.isMobile = width < 768;
    capabilities.isTablet = width >= 768 && width < 1024;
    capabilities.isDesktop = width >= 1024;

    try {
        const testCanvas = document.createElement('canvas');
        capabilities.webgl = Boolean(
            window.WebGLRenderingContext &&
            (testCanvas.getContext('webgl') || testCanvas.getContext('experimental-webgl'))
        );
    } catch (e) {
        capabilities.webgl = false;
    }

    if (!capabilities.webgl) {
        document.documentElement.classList.add('no-webgl');
    }
}

// 1. LENIS SMOOTH SCROLLING (Desktop pointer only, skipped on reduced-motion or mobile)
let lenis = null;
function initLenis() {
    if (capabilities.reducedMotion || capabilities.isMobile) return;

    try {
        lenis = new Lenis({
            duration: 1.1,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1.0,
        });

        lenis.on('scroll', ScrollTrigger.update);

        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });

        gsap.ticker.lagSmoothing(0);
    } catch (e) {
        console.warn('Lenis smooth scroll skipped:', e);
    }
}

// 2. CANVAS CLEAN STEAM & AROMA VAPOR PARTICLES (Adaptive Count & Viewport Pausing)
let particleAnimId = null;
let isParticleVisible = false;

function initHeroParticles() {
    const canvas = document.getElementById('hero-particle-canvas');
    if (!canvas) return;

    // Mobile or reduced motion: completely disable particle loop to conserve battery & GPU
    if (capabilities.reducedMotion || capabilities.isMobile) {
        canvas.style.display = 'none';
        return;
    }

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = (canvas.width = canvas.parentElement ? canvas.parentElement.offsetWidth : window.innerWidth);
    let height = (canvas.height = canvas.parentElement ? canvas.parentElement.offsetHeight : window.innerHeight);

    window.addEventListener('resize', () => {
        if (!canvas.parentElement) return;
        width = canvas.width = canvas.parentElement.offsetWidth;
        height = canvas.height = canvas.parentElement.offsetHeight;
    });

    const particles = [];
    // Tablet: 10 delicate aroma particles. Desktop: 24 gentle steam dust particles.
    const count = capabilities.isTablet ? 10 : 24;

    for (let i = 0; i < count; i++) {
        particles.push({
            x: Math.random() * width,
            y: Math.random() * height,
            radius: Math.random() * 2.2 + 0.8,
            speedY: Math.random() * 0.4 + 0.12,
            speedX: (Math.random() - 0.5) * 0.2,
            alpha: Math.random() * 0.14 + 0.04,
            color: Math.random() > 0.5 ? '158, 71, 42' : '120, 113, 108',
        });
    }

    function renderParticles() {
        if (!isParticleVisible || document.hidden) {
            particleAnimId = null;
            return;
        }

        ctx.clearRect(0, 0, width, height);

        for (let i = 0; i < particles.length; i++) {
            const p = particles[i];
            p.y -= p.speedY;
            p.x += p.speedX;

            if (p.y < -10) {
                p.y = height + 10;
                p.x = Math.random() * width;
            }

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${p.color}, ${p.alpha})`;
            ctx.fill();
        }

        particleAnimId = requestAnimationFrame(renderParticles);
    }

    function startParticleLoop() {
        if (!particleAnimId && isParticleVisible && !document.hidden) {
            particleAnimId = requestAnimationFrame(renderParticles);
        }
    }

    function stopParticleLoop() {
        if (particleAnimId) {
            cancelAnimationFrame(particleAnimId);
            particleAnimId = null;
        }
    }

    // IntersectionObserver: Pause particle loop when hero is scrolled out of view
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    isParticleVisible = entry.isIntersecting;
                    if (isParticleVisible) {
                        startParticleLoop();
                    } else {
                        stopParticleLoop();
                    }
                });
            },
            { threshold: 0.05 }
        );
        observer.observe(canvas);
    } else {
        isParticleVisible = true;
        startParticleLoop();
    }

    // VisibilityChange: Pause loop when user switches browser tabs
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopParticleLoop();
        } else if (isParticleVisible) {
            startParticleLoop();
        }
    });
}

// 3. INTERACTIVE 3D HERO STAGE WITH LERP PHYSICS & ADAPTIVE MODES
let stageAnimId = null;
let isStageVisible = false;

function initHeroStage3D() {
    const stageWrapper = document.getElementById('hero-3d-stage-wrapper');
    const stageCard = document.getElementById('hero-3d-stage-card');
    if (!stageWrapper || !stageCard) return;

    // Reduced motion or mobile: static presentation, zero render loops
    if (capabilities.reducedMotion || capabilities.isMobile) {
        stageCard.style.transform = 'none';
        return;
    }

    let targetRotX = 0;
    let targetRotY = 0;
    let currentRotX = 0;
    let currentRotY = 0;
    let isHovering = false;

    // Desktop Pointer Devices: Full interactive mouse tilt & dynamic spotlight
    if (capabilities.isPointer && capabilities.isDesktop) {
        stageWrapper.addEventListener('mouseenter', () => {
            isHovering = true;
        });

        stageWrapper.addEventListener('mousemove', (e) => {
            const rect = stageWrapper.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            // Maximum tilt 12 deg X, 14 deg Y
            targetRotX = ((y - centerY) / centerY) * -10;
            targetRotY = ((x - centerX) / centerX) * 12;

            const spotlight = document.getElementById('hero-stage-spotlight');
            if (spotlight) {
                const pctX = (x / rect.width) * 100;
                const pctY = (y / rect.height) * 100;
                spotlight.style.background = `radial-gradient(circle at ${pctX}% ${pctY}%, rgba(255, 255, 255, 0.55) 0%, rgba(158, 71, 42, 0.08) 45%, transparent 75%)`;
                spotlight.style.opacity = '1';
            }
        });

        stageWrapper.addEventListener('mouseleave', () => {
            isHovering = false;
            targetRotX = 0;
            targetRotY = 0;

            const spotlight = document.getElementById('hero-stage-spotlight');
            if (spotlight) {
                spotlight.style.opacity = '0';
            }
        });
    }

    const layers = stageCard.querySelectorAll('[data-stage-depth]');

    // Smooth 60fps Lerp Render Loop
    function renderStage() {
        if (!isStageVisible || document.hidden) {
            stageAnimId = null;
            return;
        }

        const ease = isHovering ? 0.08 : 0.05;
        currentRotX += (targetRotX - currentRotX) * ease;
        currentRotY += (targetRotY - currentRotY) * ease;

        stageCard.style.transform = `perspective(1200px) rotateX(${currentRotX.toFixed(2)}deg) rotateY(${currentRotY.toFixed(2)}deg)`;

        // Parallax floating layers inside 3D stage
        for (let i = 0; i < layers.length; i++) {
            const layer = layers[i];
            const depth = parseFloat(layer.getAttribute('data-stage-depth') || '40');
            const offsetX = (currentRotY / 12) * (depth * 0.3);
            const offsetY = (currentRotX / -10) * (depth * 0.3);
            layer.style.transform = `translate3d(${offsetX.toFixed(1)}px, ${offsetY.toFixed(1)}px, ${depth}px)`;
        }

        stageAnimId = requestAnimationFrame(renderStage);
    }

    function startStageLoop() {
        if (!stageAnimId && isStageVisible && !document.hidden) {
            stageAnimId = requestAnimationFrame(renderStage);
        }
    }

    function stopStageLoop() {
        if (stageAnimId) {
            cancelAnimationFrame(stageAnimId);
            stageAnimId = null;
        }
    }

    // IntersectionObserver: Pause 3D render loop when hero is off-screen
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    isStageVisible = entry.isIntersecting;
                    if (isStageVisible) {
                        startStageLoop();
                    } else {
                        stopStageLoop();
                    }
                });
            },
            { threshold: 0.05 }
        );
        observer.observe(stageWrapper);
    } else {
        isStageVisible = true;
        startStageLoop();
    }

    // VisibilityChange: Pause loop when user leaves tab
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopStageLoop();
        } else if (isStageVisible) {
            startStageLoop();
        }
    });
}

// 4. INTERACTIVE 3D TILT ENGINE FOR CARDS (Pointer Only)
function init3DTilt() {
    if (!capabilities.isPointer || capabilities.reducedMotion) return;

    const tiltElements = document.querySelectorAll('[data-tilt-3d]');

    tiltElements.forEach((el) => {
        const maxAngle = parseFloat(el.getAttribute('data-tilt-max') || '8');
        const depth = parseFloat(el.getAttribute('data-tilt-depth') || '16');

        let isHovered = false;

        el.addEventListener('mouseenter', () => {
            isHovered = true;
            el.style.transition = 'transform 0.12s ease-out';
        });

        el.addEventListener('mousemove', (e) => {
            if (!isHovered) return;

            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((y - centerY) / centerY) * -maxAngle;
            const rotateY = ((x - centerX) / centerX) * maxAngle;

            el.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateZ(${depth}px)`;

            const glare = el.querySelector('.tilt-glare');
            if (glare) {
                const percentX = (x / rect.width) * 100;
                const percentY = (y / rect.height) * 100;
                glare.style.background = `radial-gradient(circle at ${percentX}% ${percentY}%, rgba(255, 255, 255, 0.45) 0%, rgba(158, 71, 42, 0.06) 45%, transparent 70%)`;
                glare.style.opacity = '1';
            }

            const layers = el.querySelectorAll('[data-tilt-layer]');
            layers.forEach((layer) => {
                const z = layer.getAttribute('data-tilt-layer') || '20';
                layer.style.transform = `translateZ(${z}px)`;
            });
        });

        el.addEventListener('mouseleave', () => {
            isHovered = false;
            el.style.transition = 'transform 0.4s cubic-bezier(0.23, 1, 0.32, 1)';
            el.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';

            const glare = el.querySelector('.tilt-glare');
            if (glare) {
                glare.style.opacity = '0';
            }

            const layers = el.querySelectorAll('[data-tilt-layer]');
            layers.forEach((layer) => {
                layer.style.transform = 'translateZ(0px)';
            });
        });
    });
}

// 5. MAGNETIC BUTTONS (Desktop Pointer Only)
function initMagneticButtons() {
    if (!capabilities.isPointer || !capabilities.isDesktop || capabilities.reducedMotion) return;

    const magnets = document.querySelectorAll('[data-magnetic]');

    magnets.forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            gsap.to(btn, {
                x: x * 0.3,
                y: y * 0.3,
                duration: 0.3,
                ease: 'power2.out',
            });
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: 'elastic.out(1, 0.3)',
            });
        });
    });
}

// 6. GSAP SCROLLTRIGGER REVEALS & PARALLAX (Fail-Safe: Never lock opacity to 0)
function initScrollAnimations() {
    if (capabilities.reducedMotion) return;

    // Header reveal
    gsap.from('header', {
        y: -40,
        duration: 0.6,
        ease: 'power2.out',
    });

    // Staggered reveals for cards - Safe upward slide without persistent zero opacity
    document.querySelectorAll('[data-reveal="stagger"]').forEach((container) => {
        const items = Array.from(container.children);
        // Ensure items are 100% visible immediately
        items.forEach((item) => {
            item.style.opacity = '1';
        });

        gsap.from(items, {
            scrollTrigger: {
                trigger: container,
                start: 'top 95%',
                toggleActions: 'play none none none',
            },
            y: 25,
            duration: 0.6,
            stagger: 0.07,
            ease: 'power2.out',
            clearProps: 'transform,opacity',
        });
    });

    // Fade-up elements - Safe reveal
    document.querySelectorAll('[data-reveal="fade-up"]').forEach((el) => {
        el.style.opacity = '1';
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 95%',
                toggleActions: 'play none none none',
            },
            y: 20,
            duration: 0.6,
            ease: 'power2.out',
            clearProps: 'transform,opacity',
        });
    });

    // Parallax background or images (desktop & tablet only)
    if (!capabilities.isMobile) {
        document.querySelectorAll('[data-parallax]').forEach((el) => {
            const speed = parseFloat(el.getAttribute('data-parallax') || '0.12');
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true,
                },
                y: () => speed * 60,
                ease: 'none',
            });
        });
    }

    // Refresh triggers once all images are ready
    window.addEventListener('load', () => {
        ScrollTrigger.refresh();
    });
    setTimeout(() => {
        ScrollTrigger.refresh();
    }, 400);
}

// Start Alpine
Alpine.start();

// DOM LOADED INITIALIZER
document.addEventListener('DOMContentLoaded', () => {
    detectCapabilities();
    createIcons({ icons });
    initLenis();
    initHeroParticles();
    initHeroStage3D();
    init3DTilt();
    initMagneticButtons();
    initScrollAnimations();
});

window.refreshIcons = () => {
    createIcons({ icons });
};

window.reinitEffects = () => {
    detectCapabilities();
    init3DTilt();
    initMagneticButtons();
};
