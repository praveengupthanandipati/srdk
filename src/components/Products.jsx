import React from 'react';
import ArrowRight from '../icons/ArrowRight';
import BeakerIcon from '../icons/BeakerIcon';
import MoleculeIcon from '../icons/MoleculeIcon';
import CubeIcon from '../icons/CubeIcon';
import DropletIcon from '../icons/DropletIcon';
import ZapIcon from '../icons/ZapIcon';

// ── Products Data ──
const products = [
  {
    icon: <DropletIcon />,
    name: 'PEG Diacrylates',
    subtitle: 'PEGDA',
    features: ['Photocurable hydrogels', '3D bioprinting scaffolds', 'Tissue engineering'],
  },
  {
    icon: <CubeIcon />,
    name: 'PEG Dimethacrylates',
    subtitle: 'PEGDMA',
    features: ['Crosslinkable polymers', 'Durable hydrogels', 'Controlled release systems'],
  },
  {
    icon: <ZapIcon />,
    name: 'Photoinitiators',
    subtitle: 'FOR HYDROGELS',
    features: ['High-efficiency initiation', 'Rapid curing systems', 'PEGDA/PEGDMA optimized'],
  },
  {
    icon: <BeakerIcon />,
    name: 'PLGA',
    subtitle: 'BIOABSORBABLE POLYMERS',
    features: ['Biodegradable formulations', 'Long-acting injectables', 'Implant applications'],
  },
  {
    icon: <MoleculeIcon />,
    name: 'PEG-PLGA',
    subtitle: 'BLOCK COPOLYMERS',
    features: ['Amphiphilic properties', 'Micelles & nanoparticles', 'Enhanced drug delivery'],
  },
  {
    icon: <CubeIcon />,
    name: 'PEG Block Copolymers',
    subtitle: 'SPECIALTY POLYMERS',
    features: ['Tailored MW control', 'Self-assembly capabilities', 'Controlled release profiles'],
  },
];

const Products = () => {
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
    <section className="products-section" id="products">
      <div className="section-header" data-aos="fade-up">
        <span className="section-label">Our Portfolio</span>
        <h2 className="section-title">Our Product Portfolio</h2>
        <p className="section-subtitle">
          Pharmaceutical-grade polymers for advanced therapeutic applications
        </p>
      </div>

      <div className="products-grid">
        {products.map((product, index) => (
          <div
            className="product-card"
            key={index}
            data-aos="fade-up"
            data-aos-delay={index * 100}
          >
            <div className="product-icon">{product.icon}</div>
            <h3 className="product-name">{product.name}</h3>
            <span className="product-subtitle">{product.subtitle}</span>
            <ul className="product-features">
              {product.features.map((feature, i) => (
                <li key={i}>{feature}</li>
              ))}
            </ul>
            <div className="product-arrow"><ArrowRight /></div>
          </div>
        ))}
      </div>
    </section>
  );
};

export default Products;
