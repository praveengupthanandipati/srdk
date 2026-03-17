import React, { useState, useEffect } from 'react';
import { Link, useLocation } from 'react-router-dom';
import logoImg from '../assets/img/logo.svg';
import ChevronDown from '../icons/ChevronDown';
import ChevronRight from '../icons/ChevronRight';
import PhoneIcon from '../icons/PhoneIcon';
import MailIcon from '../icons/MailIcon';
import '../assets/styles/Header.scss';

const Header = () => {
  const [scrolled, setScrolled] = useState(false);
  const [mobileNavOpen, setMobileNavOpen] = useState(false);
  const [openSubMenus, setOpenSubMenus] = useState({});
  const location = useLocation();

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  // Close nav on route change
  useEffect(() => {
    setMobileNavOpen(false);
    setOpenSubMenus({});
  }, [location]);

  const toggleSubMenu = (label) => {
    setOpenSubMenus(prev => ({
      ...prev,
      [label]: !prev[label]
    }));
  };

  const navLinks = [
    { path: '/', label: 'Home' },
    { path: '/about', label: 'About Us' },
    { 
      path: '/services', 
      label: 'Services',
      subLinks: [
        { path: '/services#drug-delivery', label: 'Drug Delivery Polymers'},
        { path: '/services#3d-bioprinting', label: '3D Bioprinting Polymers' },
        { path: '/services#specialty', label: 'Specialty Polymers' },
        { path: '/services#applications', label: 'Applications & Partnerships' },
      ],
    },
    {
      path: '/products',
      label: 'Products',
      subLinks: [       
        { path: '/products#photoinitiators', label: 'PEG DIacrylates' },
        { path: '/products#plga', label: 'PEG Dimethacrylates' },
        { path: '/products#peg-plga', label: 'Photointiators' },
        { path: '/products#peg-block-copolymers', label: 'PLGA' },
        { path: '/products#peg-block-copolymers', label: 'PEG-PLGA' },
        { path: '/products#peg-block-copolymers', label: 'PEG block copolymers' },
      ],
    },
    { path: '/quality', label: 'Quality' },
    { path: '/faq', label: "FAQ's" },
    { path: '/contact', label: 'Contact' },
  ];

  const renderNavLinks = (links, isSubMenu = false) => {
    return (
      <ul className={`${isSubMenu ? "sub-menu" : "header-nav"} ${!isSubMenu && mobileNavOpen ? 'nav-open' : ''}`}>
        {links.map((link) => {
          const hasDropdown = link.subLinks && link.subLinks.length > 0;
          const isOpen = openSubMenus[link.label];

          return (
            <li 
              key={link.label} 
              className={`nav-item ${hasDropdown ? 'has-dropdown' : ''} ${isOpen ? 'mobile-open' : ''}`}
            >
              <div className="nav-link-wrapper">
                {link.path.startsWith('#') || link.path.includes('#') ? (
                  <a 
                    href={link.path} 
                    className={`nav-link ${location.pathname === link.path.split('#')[0] ? 'active' : ''}`}
                    onClick={(e) => {
                      if (hasDropdown && window.innerWidth < 992) {
                        e.preventDefault();
                        toggleSubMenu(link.label);
                      }
                    }}
                  >
                    {link.label}
                    {hasDropdown && (
                      <span className="chevron-icon">
                        {isSubMenu ? <ChevronRight /> : <ChevronDown />}
                      </span>
                    )}
                  </a>
                ) : (
                  <Link 
                    to={link.path} 
                    className={`nav-link ${location.pathname === link.path ? 'active' : ''}`}
                    onClick={(e) => {
                      if (hasDropdown && window.innerWidth < 992) {
                        e.preventDefault();
                        toggleSubMenu(link.label);
                      }
                    }}
                  >
                    {link.label}
                    {hasDropdown && (
                      <span className="chevron-icon">
                        {isSubMenu ? <ChevronRight /> : <ChevronDown />}
                      </span>
                    )}
                  </Link>
                )}
              </div>
              {hasDropdown && renderNavLinks(link.subLinks, true)}
            </li>
          );
        })}
      </ul>
    );
  };

  return (
    <>
      <header className={`site-header ${scrolled ? 'scrolled' : ''}`} id="site-header">
        <div className="container">
          <div className="header-inner">
            <Link to="/" className="header-logo">
              <img src={logoImg} alt="SRDK Biochemicals" className="logo-img" />
            </Link>

            {renderNavLinks(navLinks)}
            <div className="header-cta">           
              <a href="#contact" className="header-contact-btn">             
                <span>Contact Us</span>
              </a>
            </div>

            <button 
              className={`hamburger ${mobileNavOpen ? 'active' : ''}`}
              onClick={() => setMobileNavOpen(!mobileNavOpen)}
              aria-label="Toggle Navigation"
            >
              <span className="hamburger-line"></span>
              <span className="hamburger-line"></span>
              <span className="hamburger-line"></span>
            </button>
          </div>
        </div>
      </header>
      
      {/* Mobile Overlay */}
      <div 
        className={`nav-overlay ${mobileNavOpen ? 'show' : ''}`}
        onClick={() => setMobileNavOpen(false)}
      ></div>
    </>
  );
};

export default Header;

