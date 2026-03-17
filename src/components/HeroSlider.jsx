import React from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Autoplay, Pagination, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

import heroBg1 from '../assets/img/hero-bg01.jpg';
import heroBg2 from '../assets/img/hero-bg02.jpg';
import heroBg3 from '../assets/img/hero-bg03.jpg';
import heroBg4 from '../assets/img/hero-bg04.jpg';
// ── Hero Slides Data ──
const heroSlides = [
  {
    bgImg: heroBg1,
    subtitle: 'SRDK BIOCHEMICALS',
    title: 'Innovating Polymers For Better Therapies',
    description: 'Engineering next-generation polymer platforms for safer, more effective patient-centric therapies',
    buttons: [
      { text: 'Explore Products', type: 'primary', href: '#products' },
    ],
  },
  {
    bgImg: heroBg2,
    subtitle: 'CORE PRODUCTS',
    title: 'Bioabsorbable Polymers For Drug Delivery & 3D Bioprinting',
    description: '16+ years expertise • Pharmaceutical-grade',
    tags: ['PLGA', 'PEG-PLGA', 'PEG Block Copolymers', 'PEG Diacrylates', 'PEG Dimethacrylates'],
    buttons: [
      { text: 'Discover Our Expertise', type: 'primary', href: '#products' },
    ],
  },
  {
    bgImg: heroBg3,
    subtitle: 'QUALITY ASSURANCE',
    title: 'Pharmaceutical-Grade Specialty Polymers',
    description: 'FDA-relevant materials for biomedical applications and controlled release systems',
    buttons: [
      { text: 'View Products', type: 'primary', href: '#products' },
    ],
  },
  {
    bgImg: heroBg4,
    subtitle: 'ADVANCED SOLUTIONS',
    title: 'Advanced Polymers For 3D Bioprinting & Regenerative Medicine',
    description: 'PEG Diacrylates • PEG Dimethacrylates • Photoinitiators for Hydrogels',
    buttons: [
      { text: 'Learn More', type: 'primary', href: '#about' },
    ],
  },
];

const HeroSlider = () => {
  const handleSmoothScroll = (e, href) => {
    if (href.startsWith('#')) {
      e.preventDefault();
      const el = document.querySelector(href);
      if (el) {
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  };

  return (
    <section className="hero-section" id="hero">
      <div className="hero-decoration deco-1"></div>
      <div className="hero-decoration deco-2"></div>
      <div className="hero-decoration deco-3"></div>
      <div className="container-fluid p-0">
        <Swiper
          modules={[Autoplay, Pagination, EffectFade]}
          effect="fade"
          fadeEffect={{ crossFade: true }}
          autoplay={{ delay: 5000, disableOnInteraction: false, pauseOnMouseEnter: true }}
          pagination={{ clickable: true }}
          loop={true}
          speed={800}
        >
          {heroSlides.map((slide, index) => (
            <SwiperSlide key={index}>
              <div className="hero-slide row m-0 align-items-center">
                <div className="hero-bg col-12 p-0" style={{ backgroundImage: `url(${slide.bgImg})` }}></div>
                <div className="hero-overlay col-12 p-0"></div>
                <div className="hero-content col-12 col-md-10 mx-auto">
                  <span className="hero-subtitle">{slide.subtitle}</span>
                  <h1 className="hero-title">{slide.title}</h1>
                  <p className="hero-description">{slide.description}</p>
                  {slide.tags && (
                    <div className="hero-tags">
                      {slide.tags.map((tag, i) => (
                        <span className="hero-tag" key={i}>{tag}</span>
                      ))}
                    </div>
                  )}
                  <div className="hero-buttons mt-3">
                    {slide.buttons.map((btn, i) => (
                      <a
                        key={i}
                        href={btn.href}
                        className={btn.type === 'primary' ? 'btn-hero-primary btn btn-primary me-2' : 'btn-hero-secondary btn btn-outline-light me-2'}
                        onClick={(e) => handleSmoothScroll(e, btn.href)}
                      >
                        {btn.text}
                      </a>
                    ))}
                  </div>
                </div>
              </div>
            </SwiperSlide>
          ))}
        </Swiper>
      </div>
    </section>
  );
};

export default HeroSlider;
