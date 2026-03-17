import React from 'react';

const MoleculeIcon = (props) => (
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}>
    <circle cx="12" cy="12" r="3"></circle>
    <circle cx="19" cy="5" r="2"></circle>
    <circle cx="5" cy="19" r="2"></circle>
    <line x1="14.5" y1="9.5" x2="17.5" y2="6.5"></line>
    <line x1="9.5" y1="14.5" x2="6.5" y2="17.5"></line>
    <circle cx="19" cy="19" r="2"></circle>
    <line x1="14.5" y1="14.5" x2="17.5" y2="17.5"></line>
  </svg>
);

export default MoleculeIcon;
