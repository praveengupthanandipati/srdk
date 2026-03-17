import React from 'react';
import { Link } from 'react-router-dom';
import logoImg from '../assets/img/whitelogo.svg';
import PhoneIcon from '../icons/PhoneIcon';
import MailIcon from '../icons/MailIcon';
import MapPinIcon from '../icons/MapPinIcon';
import '../assets/styles/Footer.scss';

const Footer = () => {
  const footerLinks = {
    overview: [
      { label: 'About Us', path: '/about' },
      { label: 'Our Story', path: '/about#story' },
      { label: 'Infrastructure', path: '/about#infrastructure' },
      { label: 'Careers', path: '/about#careers' },
    ],
    services: [
      { label: 'Drug Delivery Polymers', path: '/services#drug-delivery' },
      { label: '3D Bioprinting Polymers', path: '/services#3d-bioprinting' },
      { label: 'Specialty Polymers', path: '/services#specialty' },
      { label: 'Applications', path: '/services#applications' },
    ],
    products: [
      { label: 'PEG Diacrylates', path: '/products#pegda' },
      { label: 'PEG Dimethacrylates', path: '/products#pegdma' },
      { label: 'Photoinitiators', path: '/products#photoinitiators' },
      { label: 'PLGA', path: '/products#plga' },
      { label: 'PEG-PLGA', path: '/products#peg-plga' },
    ],
    quality: [
      { label: 'Quality Policy', path: '/quality' },
      { label: 'R&D Center', path: '/quality#rd' },
      { label: 'Certifications', path: '/quality#certs' },
      { label: 'FAQ\'s', path: '/faq' },
    ]
  };

  return (
    <footer className="site-footer" id="site-footer">
      <div className="container">
        <div className="row g-4">
          {/* Brand Info */}
          <div className="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <Link to="/" className="d-inline-block">
              <img src={logoImg} alt="SRDK Biochemicals" className="footer-logo-img" />
            </Link>
            <p className="footer-desc">
              SRDK Biochemicals specializes in the design and production of high-purity, FDA-relevant bioabsorbable polymers. We are dedicated to innovating polymers for better therapeutic outcomes.
            </p>
            <div className="social-links">
              <a href="#" className="social-icon" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect x="2" y="9" width="4" height="12"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </a>
              <a href="#" className="social-icon" aria-label="Twitter">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                </svg>
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div className="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h4 className="footer-heading">Company</h4>
            <ul className="footer-links">
              {footerLinks.overview.map((link, idx) => (
                <li key={idx}><Link to={link.path} className="footer-link">{link.label}</Link></li>
              ))}
            </ul>
          </div>

          <div className="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h4 className="footer-heading">Services</h4>
            <ul className="footer-links">
              {footerLinks.services.map((link, idx) => (
                <li key={idx}><Link to={link.path} className="footer-link">{link.label}</Link></li>
              ))}
            </ul>
          </div>

          <div className="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h4 className="footer-heading">Products</h4>
            <ul className="footer-links">
              {footerLinks.products.map((link, idx) => (
                <li key={idx}><Link to={link.path} className="footer-link">{link.label}</Link></li>
              ))}
            </ul>
          </div>

          {/* Contact Info */}
          <div className="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h4 className="footer-heading">Contact Us</h4>
            <ul className="footer-contact-info">
              <li>
                <MapPinIcon className="contact-icon" width="20" height="20" />
                <span>N#244, GROUND FLOOR, SFS 407, 1St MAIN YELAHANKA NEW TOWN, BANGALORE, Karnataka, India – 560064
</span>
              </li>
              <li>
                <PhoneIcon className="contact-icon" width="20" height="20" />
                <div>
                  <a href="tel:+918012345678">+91 80 1234 5678</a><br />
                  <a href="tel:+919876543210">+91 98765 43210</a>
                </div>
              </li>
              <li>
                <MailIcon className="contact-icon" width="20" height="20" />
                <a href="mailto:info@srdkbiochemicals.com">info@srdkbiochemicals.com</a>
              </li>
            </ul>
          </div>
        </div>

        {/* Footer Bottom */}
        <div className="footer-bottom">
          <div className="row">
            <div className="col-md-7">
              <p>
                © 2026 <strong>SRDK BIOCHEMICALS PRIVATE LIMITED</strong>. All rights reserved.               
              </p>
            </div>
            <div className="col-md-5">
              <div className="footer-bottom-links">
                <Link to="/contact">Privacy Policy</Link>
                <Link to="/contact">Terms of Service</Link>
                <Link to="/faq">Cookie Policy</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;

