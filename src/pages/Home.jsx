import React, { useEffect } from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';

import aboutLab from '../assets/img/about-lab.png';
import HeroSlider from '../components/HeroSlider';

import Products from '../components/Products';

import ArrowRight from '../icons/ArrowRight';
import CheckIcon from '../icons/CheckIcon';
import BeakerIcon from '../icons/BeakerIcon';
import ShieldIcon from '../icons/ShieldIcon';
import ClipboardIcon from '../icons/ClipboardIcon';
import MicroscopeIcon from '../icons/MicroscopeIcon';
import PrinterIcon from '../icons/PrinterIcon';
import ZapIcon from '../icons/ZapIcon';
import UsersIcon from '../icons/UsersIcon';
import MapPinIcon from '../icons/MapPinIcon';
import MailIcon from '../icons/MailIcon';
import PhoneIcon from '../icons/PhoneIcon';





// ── Quality Data ──
const qualityItems = [
  {
    icon: <ShieldIcon />,
    title: 'GMP-Compliant Manufacturing',
    features: ['Stringent quality control', 'Batch consistency', 'Comprehensive testing'],
  },
  {
    icon: <ClipboardIcon />,
    title: 'Regulatory Readiness',
    features: ['FDA-relevant standards', 'Client filing support', 'Full documentation'],
  },
  {
    icon: <MicroscopeIcon />,
    title: 'Advanced Analytical Capabilities',
    features: ['GPC / NMR analysis', 'HPLC / Degradation studies', 'Purity confirmation'],
  },
];

// ── Services Data ──
const services = [
  {
    icon: <BeakerIcon />,
    title: 'Drug Delivery Polymers',
    items: ['PLGA', 'PEG-PLGA', 'PEG Block Copolymers'],
    link: 'Learn More',
  },
  {
    icon: <PrinterIcon />,
    title: '3D Bioprinting Polymers',
    items: ['PEGDA', 'PEGDMA', 'Photoinitiators'],
    link: 'Learn More',
  },
  {
    icon: <ZapIcon />,
    title: 'Specialty Polymers',
    items: ['Stimuli-responsive', 'Mucoadhesive', 'Surface functionalized'],
    link: 'Learn More',
  },
  {
    icon: <UsersIcon />,
    title: 'Applications & Partnerships',
    items: ['Long-acting injectables', 'Implants & tissue models', 'Regenerative medicine', 'CDMO partnerships'],
    link: 'Partner With Us',
  },
];

// ── Checkbox Options ──
const productOptions = ['PEGDA', 'PEGDMA', 'Photoinitiators', 'PLGA', 'PEG-PLGA', 'PEG Block Copolymers'];


const Home = () => {
  useEffect(() => {
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: true,
      offset: 80,
    });
  }, []);

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
    <>
      {/* ══════ HERO CAROUSEL ══════ */}
      <HeroSlider />

      {/* ══════ ABOUT SECTION ══════ */}
      <section className="about-section" id="about">
        <div className="about-wrapper">
          <div className="about-text" data-aos="fade-right">
            <span className="section-label">Who We Are</span>
            <h2 className="section-title">About SRDK Biochemicals</h2>
            <p className="about-description">
              We specialize in FDA-relevant bioabsorbable polymers for drug delivery,
              3D bioprinting, and biomedical applications. With over 16 years of expertise
              in sustained release formulations, we deliver pharmaceutical-grade polymer
              solutions that power next-generation therapies.
            </p>

            <hr className="about-divider" />

            <div className="about-highlights">
              <div className="highlight-item">
                <div className="highlight-icon"><CheckIcon /></div>
                <span className="highlight-text">16+ years expertise in sustained release formulations</span>
              </div>
              <div className="highlight-item">
                <div className="highlight-icon"><CheckIcon /></div>
                <span className="highlight-text">Pharmaceutical-grade excellence</span>
              </div>
              <div className="highlight-item">
                <div className="highlight-icon"><CheckIcon /></div>
                <span className="highlight-text">Bengaluru-based with global reach</span>
              </div>
            </div>

            <div className="about-cin">
              CIN: U24299KA2021PTC151176
            </div>

            <a href="#contact" className="btn-about" onClick={(e) => handleSmoothScroll(e, '#contact')}>
              Learn More →
            </a>
          </div>

          <div className="about-image" data-aos="fade-left" data-aos-delay="200">
            <img src={aboutLab} alt="SRDK Biochemicals Lab Facility" className="about-img" />
            <div className="about-badge">
              <span className="badge-number">16+</span>
              <span className="badge-text">Years of Expertise</span>
            </div>
          </div>
        </div>
      </section>

      {/* ══════ PRODUCTS SECTION ══════ */}
      <Products />

      {/* ══════ QUALITY SECTION ══════ */}
      <section className="quality-section" id="quality">
        <div className='container'>
        <div className="section-header" data-aos="fade-up">
          <span className="section-label">Our Standards</span>
          <h2 className="section-title">Quality Assurance</h2>
          <p className="section-subtitle">Pharmaceutical-Grade Excellence</p>
        </div>

        <div className="row quality-grid">
          {qualityItems.map((item, index) => (
            <div
              className="col-12 col-md-4 w-100"
              key={index}
              data-aos="fade-up"
              data-aos-delay={index * 150}
            >
              <div className="quality-card h-100 text-center p-4">
                <div className="quality-icon mb-3">{item.icon}</div>
                <h3 className="quality-title mb-2">{item.title}</h3>
                <ul className="quality-features list-unstyled mb-0">
                  {item.features.map((feature, i) => (
                    <li key={i}>{feature}</li>
                  ))}
                </ul>
              </div>
            </div>
          ))}
        </div>

        <div className="quality-cta" data-aos="fade-up" data-aos-delay="200">
          <a href="#contact" className="btn-quality" onClick={(e) => handleSmoothScroll(e, '#contact')}>
            Learn About Our Quality Standards →
          </a>
        </div>
        </div>
      </section>

      {/* ══════ SERVICES SECTION ══════ */}
      <section className="services-section" id="services">
        <div className="section-header" data-aos="fade-up">
          <span className="section-label">What We Do</span>
          <h2 className="section-title">What We Do</h2>
          <p className="section-subtitle">
            Functional polymers for controlled drug delivery & 3D bioprinting
          </p>
        </div>

        <div className="services-grid">
          {services.map((service, index) => (
            <div
              className="service-card"
              key={index}
              data-aos="fade-up"
              data-aos-delay={index * 100}
            >
              <div className="service-icon">{service.icon}</div>
              <h3 className="service-title">{service.title}</h3>
              <ul className="service-list">
                {service.items.map((item, i) => (
                  <li key={i}>
                    <span className="bullet"></span>
                    {item}
                  </li>
                ))}
              </ul>
              <a href="#contact" className="service-link" onClick={(e) => handleSmoothScroll(e, '#contact')}>
                {service.link} <ArrowRight />
              </a>
            </div>
          ))}
        </div>
      </section>


    </>
  );
};

export default Home;
