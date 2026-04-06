<?php
$hero_slides = [
	[
		'bg' => 'img/hero-bg01.jpg',
		'subtitle' => 'SRDK BIOCHEMICALS',
		'title' => 'Innovating Polymers For Better Therapies',
		'description' => 'Engineering next-generation polymer platforms for safer, more effective patient-centric therapies',
		'tags' => [],
		'button' => [
			'show' => false,
			'href' => '#products',
			'text' => 'Explore Products'
		]
	],
	[
		'bg' => 'img/hero-bg02.jpg',
		'subtitle' => 'CORE PRODUCTS',
		'title' => 'Bioabsorbable Polymers For Drug Delivery & 3D Bioprinting',
		'description' => '16+ years expertise • Pharmaceutical-grade',
		'tags' => ['PLGA', 'PEG-PLGA', 'PEG Block Copolymers', 'PEG Diacrylates', 'PEG Dimethacrylates'],
		'button' => [
			'show' => false,
			'href' => '#products',
			'text' => 'Discover Our Expertise'
		]
	],
	[
		'bg' => 'img/hero-bg03.jpg',
		'subtitle' => 'QUALITY ASSURANCE',
		'title' => 'Pharmaceutical-Grade Specialty Polymers',
		'description' => 'FDA-relevant materials for biomedical applications and controlled release systems',
		'tags' => [],
		'button' => [
			'show' => false,
			'href' => '#products',
			'text' => 'View Products'
		]
	],
	[
		'bg' => 'img/hero-bg04.jpg',
		'subtitle' => 'ADVANCED SOLUTIONS',
		'title' => 'Advanced Polymers For 3D Bioprinting & Regenerative Medicine',
		'description' => 'PEG Diacrylates • PEG Dimethacrylates • Photoinitiators for Hydrogels',
		'tags' => [],
		'button' => [
			'show' => false,
			'href' => 'about.php',
			'text' => 'Learn More'
		]
	],
];

//products data of home page


$products = [
	[
		'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
		'name' => 'PEG Diacrylates',
		'subtitle' => 'PEGDA',
		'features' => ['Photocurable hydrogels', '3D bioprinting scaffolds', 'Tissue engineering'],
		'link' => 'pegdiacrylates.php',
	],
	[
		'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>',
		'name' => 'PEG Dimethacrylates',
		'subtitle' => 'PEGDMA',
		'features' => ['Crosslinkable polymers', 'Durable hydrogels', 'Controlled release systems'],
		'link' => 'pegdimethacrylates.php',
	],
	[
		'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>',
		'name' => 'Photoinitiators',
		'subtitle' => 'FOR HYDROGELS',
		'features' => ['High-efficiency initiation', 'Rapid curing systems', 'PEGDA/PEGDMA optimized'],
		'link' => 'photoinitiators.php',
	],
	[
		'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-7L10 3H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path></svg>',
		'name' => 'PLGA',
		'subtitle' => 'BIOABSORBABLE POLYMERS',
		'features' => ['Biodegradable formulations', 'Long-acting injectables', 'Implant applications'],
		'link' => 'plga.php',
	],
	[
		'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
		'name' => 'PEG-PLGA',
		'subtitle' => 'BLOCK COPOLYMERS',
		'features' => ['Amphiphilic properties', 'Micelles & nanoparticles', 'Enhanced drug delivery'],
		'link' => 'pegplga.php',
	],
	[
		'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>',
		'name' => 'PEG Block Copolymers',
		'subtitle' => 'SPECIALTY POLYMERS',
		'features' => ['Tailored MW control', 'Self-assembly capabilities', 'Controlled release profiles'],
		'link' => 'pegblockcopolymers.php',
	],
];

?>