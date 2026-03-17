import React, { useState, useEffect } from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Header from './components/Header';
import Footer from './components/Footer';
import Home from './pages/Home';
import About from './pages/About';

function App() {
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const timer = setTimeout(() => {
      setLoading(false);
    }, 2000);
    return () => clearTimeout(timer);
  }, []);

  return (
    <Router>
      {/* Page Loader */}
      <div className={`page-loader ${!loading ? 'loaded' : ''}`}>
        <div className="loader-content">
          <div className="loader-logo">
            SRDK <span>BIOCHEMICALS</span>
          </div>
          <div className="loader-tagline">Innovating Polymers for Better Therapies</div>
          <div className="loader-bar">
            <div className="loader-bar-inner"></div>
          </div>
        </div>
      </div>

      <Header />
      <main className="main-content">
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
        </Routes>
      </main>
      <Footer />
    </Router>
  );
}

export default App;
