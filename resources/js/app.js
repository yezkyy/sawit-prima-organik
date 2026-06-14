import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
Alpine.plugin(collapse);

window.Alpine = Alpine;
Alpine.start();

/*
|--------------------------------------------------------------------------
| Font Awesome
|--------------------------------------------------------------------------
*/
import '@fortawesome/fontawesome-free/css/all.min.css';

/*
|--------------------------------------------------------------------------
| AOS
|--------------------------------------------------------------------------
*/
import AOS from 'aos';
import 'aos/dist/aos.css';

/*
|--------------------------------------------------------------------------
| Swiper
|--------------------------------------------------------------------------
*/
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

// Register modules globally
Swiper.use([Navigation, Pagination, Autoplay, EffectFade]);
window.Swiper = Swiper;

/*
|--------------------------------------------------------------------------
| Fancybox
|--------------------------------------------------------------------------
*/
import { Fancybox } from '@fancyapps/ui';
import '@fancyapps/ui/dist/fancybox/fancybox.css';
window.Fancybox = Fancybox;

/*
|--------------------------------------------------------------------------
| Lenis Smooth Scroll
|--------------------------------------------------------------------------
*/
import Lenis from 'lenis';
import 'lenis/dist/lenis.css';

/*
|--------------------------------------------------------------------------
| GSAP
|--------------------------------------------------------------------------
*/
import gsap from 'gsap';
window.gsap = gsap;

/*
|--------------------------------------------------------------------------
| Typed JS
|--------------------------------------------------------------------------
*/
import Typed from 'typed.js';
window.Typed = Typed;

/*
|--------------------------------------------------------------------------
| CountUp
|--------------------------------------------------------------------------
*/
import { CountUp } from 'countup.js';
window.CountUp = CountUp;

/*
|--------------------------------------------------------------------------
| INITIALIZATIONS
|--------------------------------------------------------------------------
*/

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. AOS Init
    AOS.init({
        once: true,
        duration: 1000,
        easing: 'ease-out-cubic',
        offset: 80,
    });

    // 2. Fancybox Init
    Fancybox.bind('[data-fancybox]', {});

    // 3. Lenis Init
    const lenisElement = document.querySelector('[data-lenis-prevent]') || window;
    const lenis = new Lenis({
        duration: 1.2,
        smoothWheel: true,
        wheelMultiplier: 1,
        touchMultiplier: 2,
        infinite: false,
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);

    // 4. Swiper: Banner
    const bannerSwiper = document.querySelector('.banner-swiper');
    if (bannerSwiper) {
        const slideCount = bannerSwiper.querySelectorAll('.swiper-slide').length;
        new Swiper('.banner-swiper', {
            slidesPerView: 1,
            loop: slideCount > 1,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination-banner',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
    }

    // 5. Swiper: Testimonial
    const testimonialSwiper = document.querySelector('.testimonial-swiper');
    if (testimonialSwiper) {
        const slides = testimonialSwiper.querySelectorAll('.swiper-slide');
        const slideCount = slides.length;
        
        // Hide navigation/pagination if not enough slides
        if (slideCount <= 1) {
            const nextBtn = document.querySelector('.swiper-next-test');
            const prevBtn = document.querySelector('.swiper-prev-test');
            const pagination = document.querySelector('.swiper-pagination-test');
            if (nextBtn) nextBtn.style.display = 'none';
            if (prevBtn) prevBtn.style.display = 'none';
            if (pagination) pagination.style.display = 'none';
        }

        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: slideCount > 3,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination-test',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-next-test',
                prevEl: '.swiper-prev-test',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                    loop: slideCount > 2,
                },
                1024: {
                    slidesPerView: 3,
                    loop: slideCount > 3,
                },
            },
        });
    }

    // 6. Typed JS
    const typedTarget = document.querySelector('#typed-text');
    if (typedTarget) {
        new Typed('#typed-text', {
            strings: [
                'Meningkatkan Produktivitas Sawit',
                'Menjaga Kesuburan Tanah',
                'Mendukung Panen Berkualitas',
                'Solusi Organik Premium'
            ],
            typeSpeed: 60,
            backSpeed: 40,
            backDelay: 2500,
            loop: true,
        });
    }

    // 7. CountUp
    const initCounters = () => {
        document.querySelectorAll('[data-count]').forEach((item) => {
            if (item.classList.contains('counted')) return;

            const value = parseFloat(item.dataset.count);
            const duration = parseFloat(item.dataset.duration) || 2.5;

            const counter = new CountUp(item, value, {
                duration: duration,
                useEasing: true,
                useGrouping: true,
            });

            if (!counter.error) {
                // Trigger when visible using Intersection Observer if not using AOS events
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            counter.start();
                            item.classList.add('counted');
                            observer.unobserve(item);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(item);
            } else {
                console.error(counter.error);
                item.innerHTML = value;
            }
        });
    };
    initCounters();

    // 8. GSAP Animations
    const heroTitle = document.querySelector('.hero-title');
    const heroContent = document.querySelector('.hero-content');
    const heroImage = document.querySelector('.hero-image');

    if (heroTitle) {
        gsap.from(heroTitle, {
            y: 80,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });
    }

    if (heroContent) {
        gsap.from(heroContent, {
            y: 50,
            opacity: 0,
            delay: .2,
            duration: 1,
            ease: 'power3.out'
        });
    }

    if (heroImage) {
        gsap.from(heroImage, {
            x: 100,
            opacity: 0,
            delay: .3,
            duration: 1.2,
            ease: 'power3.out'
        });
    }

});
