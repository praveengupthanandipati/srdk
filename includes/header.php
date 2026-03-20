<?php
$current_page = basename($_SERVER['PHP_SELF']);
$product_pages = ['pegdiacrylates.php', 'pegdimethacrylates.php', 'photoinitiators.php', 'plga.php', 'pegplga.php', 'pegblockcopolymers.php'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="SRDK Biochemicals - Innovating Polymers for Better Therapies. Pharmaceutical-grade bioabsorbable polymers for drug delivery, 3D bioprinting, and biomedical applications.">
    <meta name="keywords"
        content="SRDK Biochemicals, polymers, PLGA, PEG-PLGA, PEGDA, PEGDMA, bioabsorbable polymers, drug delivery, 3D bioprinting, pharmaceutical">
    <meta name="author" content="SRDK Biochemicals Pvt Ltd">
    <title>SRDK Biochemicals | Innovating Polymers for Better Therapies</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link href="styles/style.css" rel="stylesheet">
</head>

<body>

    <!-- Page Loader -->
    <div class="page-loader" id="page-loader">
        <div class="loader-content">
            <div class="loader-logo">
                SRDK <span>BIOCHEMICALS</span>
            </div>
            <div class="loader-tagline">Innovating Polymers for Better Therapies</div>
            <div class="loader-bar">
                <div class="loader-bar-inner"></div>
            </div>
        </div>
    </div>

    <header class="site-header" id="site-header">
        <div class="container">
            <div class="header-inner">
                <a href="index.php" class="header-logo">
                    <img src="img/logo.svg" alt="SRDK Biochemicals" class="logo-img">
                </a>

                <ul class="header-nav" id="header-nav">
                    <li class="nav-item">
                        <a href="index.php"
                            class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php"
                            class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php"
                            class="nav-link <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#products"
                            class="nav-link <?php echo (in_array($current_page, $product_pages)) ? 'active' : ''; ?>">Products
                            <i class="bi bi-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="<?php echo ($current_page == 'pegdiacrylates.php') ? 'active' : ''; ?>"><a href="pegdiacrylates.php"
                                    class="sub-menu-link <?php echo ($current_page == 'pegdiacrylates.php') ? 'active' : ''; ?>">PEG
                                    Diacrylates</a></li>
                            <li class="<?php echo ($current_page == 'pegdimethacrylates.php') ? 'active' : ''; ?>"><a href="pegdimethacrylates.php"
                                    class="sub-menu-link <?php echo ($current_page == 'pegdimethacrylates.php') ? 'active' : ''; ?>">PEG
                                    Dimethacrylates</a></li>
                            <li class="<?php echo ($current_page == 'photoinitiators.php') ? 'active' : ''; ?>"><a href="photoinitiators.php"
                                    class="sub-menu-link <?php echo ($current_page == 'photoinitiators.php') ? 'active' : ''; ?>">Photoinitiators</a>
                            </li>
                            <li class="<?php echo ($current_page == 'plga.php') ? 'active' : ''; ?>"><a href="plga.php"
                                    class="sub-menu-link <?php echo ($current_page == 'plga.php') ? 'active' : ''; ?>">PLGA</a>
                            </li>
                            <li class="<?php echo ($current_page == 'pegplga.php') ? 'active' : ''; ?>"><a href="pegplga.php"
                                    class="sub-menu-link <?php echo ($current_page == 'pegplga.php') ? 'active' : ''; ?>">PEG-PLGA</a>
                            </li>
                            <li class="<?php echo ($current_page == 'pegblockcopolymers.php') ? 'active' : ''; ?>"><a href="pegblockcopolymers.php"
                                    class="sub-menu-link <?php echo ($current_page == 'pegblockcopolymers.php') ? 'active' : ''; ?>">PEG
                                    block copolymers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="quality.php"
                            class="nav-link <?php echo ($current_page == 'quality.php') ? 'active' : ''; ?>">Quality</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php"
                            class="nav-link <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?>">FAQ's</a>
                    </li>
                </ul>

                <div class="header-cta">
                    <a href="contact.php"
                        class="header-contact-btn <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                        <span>Contact Us</span>
                    </a>
                </div>

                <button class="hamburger" id="hamburger" aria-label="Toggle Navigation">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Overlay -->
    <div class="nav-overlay" id="nav-overlay"></div>

    <main class="main-content">