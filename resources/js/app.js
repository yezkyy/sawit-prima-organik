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
window.Swiper = Swiper;

import { Navigation, Pagination, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

/*
|--------------------------------------------------------------------------
| Fancybox
|--------------------------------------------------------------------------
*/
import { Fancybox } from '@fancyapps/ui';
import '@fancyapps/ui/dist/fancybox/fancybox.css';

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

/*
|--------------------------------------------------------------------------
| Typed JS
|--------------------------------------------------------------------------
*/
import Typed from 'typed.js';

/*
|--------------------------------------------------------------------------
| CountUp
|--------------------------------------------------------------------------
*/
import { CountUp } from 'countup.js';

/*
|--------------------------------------------------------------------------
| AOS Init
|--------------------------------------------------------------------------
*/
AOS.init({
    once: true,
    duration: 1000,
    easing: 'ease-out-cubic',
    offset: 80,
});

/*
|--------------------------------------------------------------------------
| Fancybox Init
|--------------------------------------------------------------------------
*/
Fancybox.bind('[data-fancybox]', {});

/*
|--------------------------------------------------------------------------
| Lenis Init
|--------------------------------------------------------------------------
*/
const lenis = new Lenis({
    duration: 1.2,
    smoothWheel: true,
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

/*
|--------------------------------------------------------------------------
| Swiper Global Init
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {

    const testimonialSlider = document.querySelector('.testimonial-swiper');

    if (testimonialSlider) {

        const slideCount =
            testimonialSlider.querySelectorAll('.swiper-slide').length;

        new Swiper('.testimonial-swiper', {
            modules: [Navigation, Pagination, Autoplay],

            loop: slideCount > 3,

            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    }

});

/*
|--------------------------------------------------------------------------
| Typed Hero Text
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {

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

});

/*
|--------------------------------------------------------------------------
| Count Up
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('[data-count]').forEach((item) => {

        const value = item.dataset.count;

        const counter = new CountUp(item, value, {
            duration: 3,
        });

        if (!counter.error) {
            counter.start();
        }

    });

});

/*
|--------------------------------------------------------------------------
| GSAP Animations
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {

    const heroTitle = document.querySelector('.hero-title');
    const heroContent = document.querySelector('.hero-content');
    const heroImage = document.querySelector('.hero-image');

    if (heroTitle) {

        gsap.from(heroTitle, {
            y: 80,
            opacity: 0,
            duration: 1,
        });

    }

    if (heroContent) {

        gsap.from(heroContent, {
            y: 50,
            opacity: 0,
            delay: .2,
            duration: 1,
        });

    }

    if (heroImage) {

        gsap.from(heroImage, {
            x: 100,
            opacity: 0,
            delay: .3,
            duration: 1.2,
        });

    }

});