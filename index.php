<?php include 'includes/header.php'; ?>
<?php include 'includes/data.php'; ?>

<!-- ══════ HERO CAROUSEL ══════ -->
<section class="hero-section" id="hero">
    <div class="hero-decoration deco-1"></div>
    <div class="hero-decoration deco-2"></div>
    <div class="hero-decoration deco-3"></div>
    <div class="container-fluid p-0">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($hero_slides as $slide): ?>
                <div class="swiper-slide">
                    <div class="hero-slide" style="background-image: url('<?php echo $slide['bg']; ?>');">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8 hero-content" data-aos="fade-up">

                                     <span class="hero-subtitle"><?php echo htmlspecialchars($slide['subtitle']); ?></span>
                            <h1 class="hero-title"><?php echo htmlspecialchars($slide['title']); ?></h1>
                            <p class="hero-description"><?php echo htmlspecialchars($slide['description']); ?></p>
                            <?php if (!empty($slide['tags'])): ?>
                            <div class="hero-tags">
                                <?php foreach ($slide['tags'] as $tag): ?>
                                    <span class="hero-tag"><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                            <div class="hero-buttons d-none">
                                <a href="<?php echo htmlspecialchars($slide['button']['href']); ?>" class="btn-hero-primary"><?php echo htmlspecialchars($slide['button']['text']); ?></a>
                            </div>

                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>       
    </div>
</section>

<!-- ══════ ABOUT SECTION ══════ -->
<section class="about-section" id="about">
    <div class="container">
        <div class="about-wrapper">
            <div class="about-text" data-aos="fade-up">
                <span class="section-label">Who We Are</span>
                <h2 class="section-title">About SRDK Biochemicals</h2>
                <p class="about-description">
                    We specialize in FDA-relevant bioabsorbable polymers for drug delivery,
                    3D bioprinting, and biomedical applications. With over 16 years of expertise
                    in sustained release formulations, we deliver pharmaceutical-grade polymer
                    solutions that power next-generation therapies.
                </p>

                <hr class="about-divider" />

                <div class="about-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <span class="highlight-text">With over 16 years of expertise in sustained release formulations</span>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <span class="highlight-text">With over 16 years of expertise in polymers for sustained release formulations</span>
                    </div>
                   
                </div>

                <div class="about-cin">
                    CIN: U24299KA2021PTC151176
                </div>

                <a href="about.php" class="btn-about">Learn More →</a>
            </div>

            <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                <img src="img/about-lab.png" alt="SRDK Biochemicals Lab Facility" class="about-img">
                <div class="about-badge">
                    <span class="badge-number">16+</span>
                    <span class="badge-text">Years of Expertise</span>
                </div>
            </div>
        </div>
    </div>
</section>

 <div class="container py-4 text-center">
            <img src="img/surface-monomers.jpeg" alt="" class="img-fluid"/>
        </div>

<!-- ══════ PRODUCTS SECTION ══════ -->
<section class="products-section" id="products">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-label">Our Portfolio</span>
            <h2 class="section-title">Our Product Portfolio</h2>
            <p class="section-subtitle">
                Pharmaceutical-grade polymers for advanced therapeutic applications
            </p>
        </div>

        <div class="products-grid">
            <?php foreach ($products as $i => $product): ?>
            <div class="product-card" data-aos="fade-up"<?php if ($i > 0) echo ' data-aos-delay="' . ($i * 100) . '"'; ?>>
                <div class="product-icon">
                    <?php echo $product['icon']; ?>
                </div>
                <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                <span class="product-subtitle"><?php echo htmlspecialchars($product['subtitle']); ?></span>
                <ul class="product-features">
                    <?php foreach ($product['features'] as $feature): ?>
                        <li><?php echo htmlspecialchars($feature); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="product-arrow">
                    <a href="<?php echo htmlspecialchars($product['link']); ?>" class="product-link">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════ QUALITY SECTION ══════ -->
<section class="quality-section" id="quality">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-label">Our Standards</span>
            <h2 class="section-title">Quality Assurance</h2>
            <p class="section-subtitle">Pharmaceutical-Grade Excellence</p>
        </div>

        <div class="row quality-grid">
            <?php foreach ($quality_assurance as $i => $qa): ?>
            <div class="col-12 col-md-4 mb-4" data-aos="fade-up"<?php if ($i > 0) echo ' data-aos-delay="' . ($i * 150) . '"'; ?>>
                <div class="quality-card h-100 text-center p-4">
                    <div class="quality-icon mb-3">
                        <?php echo $qa['icon']; ?>
                    </div>
                    <h3 class="quality-title mb-2"><?php echo htmlspecialchars($qa['title']); ?></h3>
                    <ul class="quality-features list-unstyled mb-0">
                        <?php foreach ($qa['features'] as $feature): ?>
                        <li><?php echo htmlspecialchars($feature); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="quality-cta text-center mt-4" data-aos="fade-up">
            <a href="quality.php" class="btn-quality">Learn About Our Quality Standards →</a>
        </div>
    </div>
</section>

<!-- ══════ SERVICES SECTION ══════ -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-label">Areas of Expertise</span>
            <h2 class="section-title">What We Do</h2>
            <p class="section-subtitle">Functional polymers for controlled drug delivery & 3D bioprinting</p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card" data-aos="fade-up">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M2 22l1.25-5.33L1.5 12h5l2.5-4 2.5 4h5l-1.75 4.67L16 22H2z"></path>
                        <path d="M8 12l2-4 2 4M10 8V2"></path>
                    </svg>
                </div>
                <h3 class="service-title">Drug Delivery Polymers</h3>
                <ul class="service-list">
                    <li><span class="bullet"></span>PLGA</li>
                    <li><span class="bullet"></span>PEG-PLGA</li>
                    <li><span class="bullet"></span>PEG Block Copolymers</li>
                </ul>              
            </div>
            <!-- Service 2 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                </div>
                <h3 class="service-title">3D Bioprinting Polymers</h3>
                <ul class="service-list">
                    <li><span class="bullet"></span>PEGDA</li>
                    <li><span class="bullet"></span>PEGDMA</li>
                    <li><span class="bullet"></span>Photoinitiators</li>
                </ul>               
            </div>
            <!-- Service 3 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                    </svg>
                </div>
                <h3 class="service-title">Specialty Polymers</h3>
                <ul class="service-list">
                    <li><span class="bullet"></span>Poly(2-oxazoline) (POZ)-Based Polymers</li>
                    <li><span class="bullet"></span>Hyaluronic Acid (HA)-Based Polymers</li>
                    <li><span class="bullet"></span>GELMA & collagen methacrylate platforms</li>
                </ul>               
            </div>
            <!-- Service 4 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h3 class="service-title">Applications & Partnerships</h3>
                <ul class="service-list">
                    <li><span class="bullet"></span>Long-acting injectables</li>
                    <li><span class="bullet"></span>Implants & tissue models</li>
                    <li><span class="bullet"></span>Regenerative medicine</li>
                    <li><span class="bullet"></span>CDMO partnerships</li>
                </ul>               
            </div>
        </div>
    </div>
</section>


<!-- ══════ POLYMERIZATION EXPERTISE SECTION ══════ -->
<section class="polymer-expertise-section" id="polymer-expertise">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                  <div data-aos="fade-up" class="text-center">
                    <span class="section-label">Advanced Techniques</span>
                    <h2 class="section-title">Our Polymerization Expertise</h2>
                    <p class="section-subtitle">
                        SRDK Biochemicals offers comprehensive expertise in advanced polymerization techniques, specializing in
                        controlled synthesis of biodegradable and functional polymers for drug delivery and biomedical
                        applications.
                    </p>
                </div>
            </div>
        </div>

        <div class="expertise-swiper-container" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper expertise-swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($advanced_techniques as $technique): ?>
                    <div class="swiper-slide">
                        <div class="expertise-card">
                            <div class="expertise-icon">
                                <?php echo $technique['icon']; ?>
                            </div>
                            <h3 class="expertise-name"><?php echo htmlspecialchars($technique['title']); ?></h3>
                            <span class="expertise-subtitle"><?php echo htmlspecialchars($technique['subtitle']); ?></span>
                            <ul class="expertise-features">
                                <?php foreach ($technique['features'] as $feature): ?>
                                <li><?php echo htmlspecialchars($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>