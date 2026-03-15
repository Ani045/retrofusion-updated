// ===== DOM Ready =====
document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initMobileMenu();
    initMegaMenu();
    initHeroCarousel();
    initBlogSlider();
    initRetrofusionSlider();
    initScrollReveal();
    initFormHandling();
    initBentoGallery();
});

// ===== Navbar Scroll Effect =====
function initNavbar() {
    const nav = document.getElementById('navbar');
    if (!nav) return;

    const logo = document.getElementById('nav-logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const villasBtn = document.getElementById('villas-dropdown-btn');

    function updateNavbar() {
        const scrolled = window.scrollY > 50;
        if (scrolled) {
            nav.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-lg');
            nav.classList.remove('bg-transparent');
            if (logo) {
                logo.classList.remove('logo-white');
            }
            navLinks.forEach(link => {
                link.classList.add('text-stone-800');
                link.classList.remove('text-white');
            });
            if (mobileBtn) {
                mobileBtn.classList.add('text-stone-700');
                mobileBtn.classList.remove('text-white');
            }
            if (villasBtn) {
                villasBtn.classList.add('text-stone-800');
                villasBtn.classList.remove('text-white');
            }
        } else {
            nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-lg');
            nav.classList.add('bg-transparent');
            if (logo) {
                logo.classList.add('logo-white');
            }
            navLinks.forEach(link => {
                link.classList.remove('text-stone-800');
                link.classList.add('text-white');
            });
            if (mobileBtn) {
                mobileBtn.classList.remove('text-stone-700');
                mobileBtn.classList.add('text-white');
            }
            if (villasBtn) {
                villasBtn.classList.remove('text-stone-800');
                villasBtn.classList.add('text-white');
            }
        }
    }

    window.addEventListener('scroll', updateNavbar);
    updateNavbar();
}

// ===== Mobile Menu =====
function initMobileMenu() {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileVillasBtn = document.getElementById('mobile-villas-btn');
    const mobileVillasPanel = document.getElementById('mobile-villas-panel');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (!mobileBtn || !mobileMenu) return;

    let menuOpen = false;
    let villasOpen = false;

    mobileBtn.addEventListener('click', () => {
        menuOpen = !menuOpen;
        if (menuOpen) {
            mobileMenu.classList.remove('hidden');
            // Use a large fixed value to avoid clipping when sub-panels expand
            mobileMenu.style.maxHeight = '2000px';
            mobileMenu.style.opacity = '1';
            if (menuIcon) menuIcon.classList.add('hidden');
            if (closeIcon) closeIcon.classList.remove('hidden');
        } else {
            mobileMenu.style.maxHeight = '0';
            mobileMenu.style.opacity = '0';
            setTimeout(() => mobileMenu.classList.add('hidden'), 300);
            if (menuIcon) menuIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');
            // Also close villas panel
            villasOpen = false;
            if (mobileVillasPanel) {
                mobileVillasPanel.style.maxHeight = '0';
                mobileVillasPanel.style.opacity = '0';
            }
            const chevron = mobileVillasBtn ? mobileVillasBtn.querySelector('.mobile-chevron') : null;
            if (chevron) chevron.style.transform = 'rotate(0deg)';
        }
    });

    if (mobileVillasBtn && mobileVillasPanel) {
        mobileVillasBtn.addEventListener('click', () => {
            villasOpen = !villasOpen;
            const chevron = mobileVillasBtn.querySelector('.mobile-chevron');
            if (villasOpen) {
                mobileVillasPanel.style.maxHeight = mobileVillasPanel.scrollHeight + 'px';
                mobileVillasPanel.style.opacity = '1';
                if (chevron) chevron.style.transform = 'rotate(180deg)';
            } else {
                mobileVillasPanel.style.maxHeight = '0';
                mobileVillasPanel.style.opacity = '0';
                if (chevron) chevron.style.transform = 'rotate(0deg)';
            }
        });
    }

    // Close mobile menu on link click
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            menuOpen = false;
            mobileMenu.style.maxHeight = '0';
            mobileMenu.style.opacity = '0';
            setTimeout(() => mobileMenu.classList.add('hidden'), 300);
            if (menuIcon) menuIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');
        });
    });
}

// ===== Mega Menu =====
function initMegaMenu() {
    const villasDropdownBtn = document.getElementById('villas-dropdown-btn');
    const megaMenu = document.getElementById('mega-menu');

    if (!villasDropdownBtn || !megaMenu) return;

    let megaMenuTimeout;

    function showMegaMenu() {
        clearTimeout(megaMenuTimeout);
        megaMenu.classList.add('active');
        megaMenu.style.opacity = '1';
        megaMenu.style.transform = 'translateY(0)';
    }

    function hideMegaMenu() {
        megaMenuTimeout = setTimeout(() => {
            megaMenu.style.opacity = '0';
            megaMenu.style.transform = 'translateY(-10px)';
            setTimeout(() => megaMenu.classList.remove('active'), 200);
        }, 100);
    }

    villasDropdownBtn.addEventListener('mouseenter', showMegaMenu);
    villasDropdownBtn.addEventListener('mouseleave', hideMegaMenu);
    megaMenu.addEventListener('mouseenter', showMegaMenu);
    megaMenu.addEventListener('mouseleave', hideMegaMenu);
}

// ===== Hero Carousel with Diagonal Dissolve =====
function initHeroCarousel() {
    const heroSection = document.getElementById('hero-section');
    if (!heroSection) return;

    const bannerImages = [
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868140/B30_yc8rqu.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868140/C26_j6pstx.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769863044/14_w8imzc.jpg',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769863051/08.2_ws3oiy.jpg',
    ];

    // Preload images
    bannerImages.forEach(src => {
        const img = new Image();
        img.src = src;
    });

    let currentIndex = 0;
    let prevIndex = null;
    let isTransitioning = false;
    let dissolveProgress = 0;

    const currentLayer = document.getElementById('hero-current-layer');
    const prevLayer = document.getElementById('hero-prev-layer');
    const currentImg = document.getElementById('hero-current-img');
    const prevImg = document.getElementById('hero-prev-img');
    const indicators = document.querySelectorAll('.hero-indicator');

    if (!currentImg) return;

    function updateIndicators() {
        indicators.forEach((ind, i) => {
            if (i === currentIndex) {
                ind.classList.add('bg-amber-400', 'w-6');
                ind.classList.remove('bg-white/40', 'w-2');
            } else {
                ind.classList.remove('bg-amber-400', 'w-6');
                ind.classList.add('bg-white/40', 'w-2');
            }
        });
    }

    function getDiagonalDissolveMask(progress) {
        const sweepPosition = progress * 200 - 50;
        const fadeWidth = 35;
        return `linear-gradient(
      135deg,
      transparent ${Math.max(0, sweepPosition)}%,
      rgba(0,0,0,0.2) ${Math.max(0, sweepPosition + fadeWidth * 0.2)}%,
      rgba(0,0,0,0.4) ${Math.max(0, sweepPosition + fadeWidth * 0.4)}%,
      rgba(0,0,0,0.6) ${Math.max(0, sweepPosition + fadeWidth * 0.6)}%,
      rgba(0,0,0,0.8) ${Math.max(0, sweepPosition + fadeWidth * 0.8)}%,
      black ${Math.min(100, sweepPosition + fadeWidth)}%,
      black 100%
    )`;
    }

    function nextSlide() {
        isTransitioning = true;
        prevIndex = currentIndex;
        currentIndex = (currentIndex + 1) % bannerImages.length;
        startDissolve();
    }

    function prevSlideHero() {
        isTransitioning = true;
        prevIndex = currentIndex;
        currentIndex = (currentIndex - 1 + bannerImages.length) % bannerImages.length;
        startDissolve();
    }

    function goToSlide(index) {
        if (index === currentIndex) return;
        isTransitioning = true;
        prevIndex = currentIndex;
        currentIndex = index;
        startDissolve();
    }

    function startDissolve() {
        currentImg.src = bannerImages[currentIndex];
        if (prevImg && prevIndex !== null) {
            prevImg.src = bannerImages[prevIndex];
            prevLayer.style.display = 'block';
        }
        updateIndicators();
        dissolveProgress = 0;

        const duration = 4000;
        const startTime = Date.now();

        function animate() {
            const elapsed = Date.now() - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 2.5);
            dissolveProgress = eased;

            if (prevLayer) {
                const mask = getDiagonalDissolveMask(dissolveProgress);
                prevLayer.style.maskImage = mask;
                prevLayer.style.webkitMaskImage = mask;
            }

            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {
                isTransitioning = false;
                prevIndex = null;
                if (prevLayer) prevLayer.style.display = 'none';
            }
        }

        requestAnimationFrame(animate);
    }

    // Auto advance
    setInterval(nextSlide, 5000);

    // Indicator clicks
    indicators.forEach((ind, i) => {
        ind.addEventListener('click', () => goToSlide(i));
    });

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    heroSection.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
    }, { passive: true });

    heroSection.addEventListener('touchmove', (e) => {
        touchEndX = e.touches[0].clientX;
    }, { passive: true });

    heroSection.addEventListener('touchend', () => {
        const swipeDistance = touchStartX - touchEndX;
        if (Math.abs(swipeDistance) > 50) {
            if (swipeDistance > 0) nextSlide();
            else prevSlideHero();
        }
    });

    // Scroll/wheel with debounce
    let scrollCooldown = false;
    heroSection.addEventListener('wheel', (e) => {
        if (scrollCooldown) return;
        const scrollAmount = Math.abs(e.deltaY) > Math.abs(e.deltaX) ? e.deltaY : e.deltaX;
        if (Math.abs(scrollAmount) > 20) {
            e.preventDefault();
            scrollCooldown = true;
            if (scrollAmount > 0) nextSlide();
            else prevSlideHero();
            setTimeout(() => { scrollCooldown = false; }, 800);
        }
    }, { passive: false });

    updateIndicators();
}

// ===== Blog Slider =====
function initBlogSlider() {
    const prevBtn = document.getElementById('blog-prev');
    const nextBtn = document.getElementById('blog-next');
    const track = document.getElementById('blog-slider-track');

    if (!prevBtn || !nextBtn || !track) return;

    const totalPosts = track.children.length;
    let currentSlide = 0;

    function updateSlider() {
        track.style.transform = `translateX(-${currentSlide * 50}%)`;
    }

    nextBtn.addEventListener('click', () => {
        currentSlide = currentSlide === totalPosts - 1 ? 0 : currentSlide + 1;
        updateSlider();
    });

    prevBtn.addEventListener('click', () => {
        currentSlide = currentSlide === 0 ? totalPosts - 1 : currentSlide - 1;
        updateSlider();
    });
}

// ===== Retrofusion Standard Slider =====
function initRetrofusionSlider() {
    const sliderImg = document.getElementById('retrofusion-slider-img');
    const nextBtn = document.getElementById('retrofusion-slider-next');
    const prevBtn = document.getElementById('retrofusion-slider-prev');

    if (!sliderImg) return;

    const images = [
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769863054/03.1_c7vcel.jpg',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769862646/pool_ckwldd.png',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769863047/20_haycpz.jpg',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868140/B30_yc8rqu.webp',
    ];
    let current = 0;

    function updateImage() {
        sliderImg.src = images[current];
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            current = (current + 1) % images.length;
            updateImage();
        });
    }
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            current = (current - 1 + images.length) % images.length;
            updateImage();
        });
    }
}

// ===== Scroll Reveal =====
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right');

    if (!revealElements.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => observer.observe(el));
}

// ===== Form Handling =====
function initFormHandling() {
    const bookingForm = document.getElementById('booking-form');
    if (!bookingForm) return;

    bookingForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(bookingForm);
        const data = Object.fromEntries(formData);
        console.log('Form submitted:', data);
        alert('Thank you! We will contact you shortly.');
        bookingForm.reset();
    });
}

// ===== Bento Gallery & Lightbox =====
function initBentoGallery() {
    const grid = document.getElementById('bento-grid');
    if (!grid) return;

    let allImages = [
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1770226533/N34_stewru.jpg',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868140/B30_yc8rqu.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868140/C26_j6pstx.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868140/05_ivb2yz.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1770226534/N36_om6t9d.jpg',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868155/M08_qewdva.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868143/M01_jjmwdw.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868142/G31_mdlfjh.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868143/J24_wrncmb.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868144/M21_c2fjh0.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868144/M09_hilzeh.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868141/I08_mjtxcg.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868143/F18A_qmvadk.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868142/H10_byp3oh.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868142/K17_qzihhb.webp',
        'https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769868141/E06_tevptf.webp',
    ];

    if (window.galleryImages && Array.isArray(window.galleryImages)) {
        allImages = window.galleryImages;
    }

    let gallerySets = [];
    if (window.gallerySets && Array.isArray(window.gallerySets)) {
        gallerySets = window.gallerySets;
    } else {
        // Default behavior: slice allImages into sets of 4
        for (let i = 0; i < allImages.length; i += 4) {
            gallerySets.push(allImages.slice(i, i + 4));
        }
    }

    let currentSet = 0;
    const totalSets = gallerySets.length;
    let galleryInterval;

    window.setGallerySet = (index) => {
        currentSet = index;
        updateGallery();
        resetInterval();
    };

    function updateGallery() {
        const setImages = gallerySets[currentSet];
        const imgElements = grid.querySelectorAll('img');

        // Simple fade out/in effect
        grid.style.opacity = '0';

        setTimeout(() => {
            imgElements.forEach((img, i) => {
                if (setImages[i]) {
                    img.src = setImages[i];
                    // Find index in allImages
                    let globalIndex = allImages.indexOf(setImages[i]);
                    // Fallback to 0 if not found (shouldn't happen)
                    if (globalIndex === -1) globalIndex = 0;
                    img.parentElement.setAttribute('onclick', `openLightbox(${globalIndex})`);
                }
            });

            // Update indicators
            const indicators = document.querySelectorAll('#gallery-indicators button');
            if (indicators.length) {
                indicators.forEach((btn, i) => {
                    if (i === currentSet) {
                        btn.classList.remove('bg-stone-300', 'w-2', 'hover:bg-stone-400');
                        btn.classList.add('bg-amber-600', 'w-8');
                    } else {
                        btn.classList.add('bg-stone-300', 'w-2', 'hover:bg-stone-400');
                        btn.classList.remove('bg-amber-600', 'w-8');
                    }
                });
            }

            grid.style.opacity = '1';
        }, 300);
    }

    function resetInterval() {
        if (galleryInterval) clearInterval(galleryInterval);
        galleryInterval = setInterval(() => {
            currentSet = (currentSet + 1) % totalSets;
            updateGallery();
        }, 5000);
    }

    // Initialize
    updateGallery();
    resetInterval();

    // Lightbox Logic
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCounter = document.getElementById('lightbox-counter');
    let currentLightboxIndex = 0;

    window.openLightbox = (index) => {
        if (!lightbox) return;
        currentLightboxIndex = index;
        updateLightboxImage();
        lightbox.classList.remove('hidden');
        // Small delay to allow display:flex to apply before opacity transition
        setTimeout(() => {
            lightbox.classList.remove('opacity-0');
            document.body.style.overflow = 'hidden';
        }, 10);
    };

    window.closeLightbox = () => {
        if (!lightbox) return;
        lightbox.classList.add('opacity-0');
        setTimeout(() => {
            lightbox.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    };

    window.nextLightboxImage = () => {
        currentLightboxIndex = (currentLightboxIndex + 1) % allImages.length;
        updateLightboxImage();
    };

    window.prevLightboxImage = () => {
        currentLightboxIndex = (currentLightboxIndex - 1 + allImages.length) % allImages.length;
        updateLightboxImage();
    };

    function updateLightboxImage() {
        if (!lightboxImg) return;
        // Fade out image slightly
        lightboxImg.style.opacity = '0.5';
        setTimeout(() => {
            lightboxImg.src = allImages[currentLightboxIndex];
            if (lightboxCounter) lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${allImages.length}`;
            lightboxImg.style.opacity = '1';
        }, 200);
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox || lightbox.classList.contains('hidden')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextLightboxImage();
        if (e.key === 'ArrowLeft') prevLightboxImage();
    });
}

// ===== FAQ Toggle =====
window.toggleFAQ = (button) => {
    const content = button.nextElementSibling;
    const icon = button.querySelector('svg');
    const isExpanded = content.style.height && content.style.height !== '0px';

    if (isExpanded) {
        content.style.height = '0px';
        content.style.opacity = '0';
        icon.style.transform = 'rotate(0deg)';
    } else {
        content.style.height = content.scrollHeight + 'px';
        content.style.opacity = '1';
        icon.style.transform = 'rotate(180deg)';
    }
};
