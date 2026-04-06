document.addEventListener('DOMContentLoaded', function() {
    // ── Page Loader ──
    const loader = document.getElementById('page-loader');
    if (loader) {
        setTimeout(() => {
            loader.classList.add('loaded');
            // Allow clicking after loader is gone
            setTimeout(() => {
                loader.style.display = 'none';
            }, 600);
        }, 2000);
    }

    // ── Header Scroll Effect ──
    const header = document.getElementById('site-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // ── Mobile Navigation ──
    const hamburger = document.getElementById('hamburger');
    const headerNav = document.getElementById('header-nav');
    const overlay = document.getElementById('nav-overlay');

    if (hamburger && headerNav && overlay) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            headerNav.classList.toggle('nav-open');
            overlay.classList.toggle('show');
            document.body.classList.toggle('no-scroll');
        });

        overlay.addEventListener('click', () => {
            hamburger.classList.remove('active');
            headerNav.classList.remove('nav-open');
            overlay.classList.remove('show');
            document.body.classList.remove('no-scroll');
        });

        // Close nav on link click (for anchors)
        const navLinks = headerNav.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                const hasDropdown = link.parentElement.classList.contains('has-dropdown');
                if (window.innerWidth < 992 && hasDropdown) {
                    // Toggle dropdown on mobile
                    link.parentElement.classList.toggle('mobile-open');
                } else {
                    hamburger.classList.remove('active');
                    headerNav.classList.remove('nav-open');
                    overlay.classList.remove('show');
                    document.body.classList.remove('no-scroll');
                }
            });
        });
    }


    // ── Hero Swiper Initialization ──
    const heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        pagination: {
            el: '.hero-swiper .swiper-pagination',
            clickable: true,
        },
        speed: 800,
        observer: true,
        observeParents: true,
    });

    // ── Expertise Swiper Initialization ──
    const expertiseSwiper = new Swiper('.expertise-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        pagination: {
            el: '.expertise-swiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.expertise-swiper .swiper-button-next',
            prevEl: '.expertise-swiper .swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
        speed: 800,
        grabCursor: true,
        observer: true,
        observeParents: true,
    });


    // ── AOS Initialization ──
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
    });

    // ── Smooth Scroll for same-page anchors ──
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const headerHeight = header.offsetHeight;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    // ── Back to Top Button ──
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
