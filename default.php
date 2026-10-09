<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R7HPK5NPZH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R7HPK5NPZH');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light House - Premium Decorative & Architectural Lighting | Parle Point, Surat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-black text-white overflow-x-hidden" style="opacity: 0;">
    
    <!-- Top Bar Header -->
    <nav class="fixed top-0 w-full z-50 nav-glass transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="font-display text-xl sm:text-2xl font-bold text-glow">
                    Light House
                </div>
                <div class="desktop-nav hidden md:flex space-x-8">
                    <a href="#catalogue" class="hover:text-yellow-400 transition-colors golden-underline">Catalogue</a>
                    <a href="#about" class="hover:text-yellow-400 transition-colors golden-underline">About Us</a>
                    <a href="#gallery" class="hover:text-yellow-400 transition-colors golden-underline">Gallery</a>
                    <a href="#contact" class="hover:text-yellow-400 transition-colors golden-underline">Contact</a>
                </div>
                <div class="hamburger md:hidden" onclick="toggleMobileMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#catalogue" onclick="closeMobileMenu()" class="text-2xl mb-6 hover:text-yellow-400 transition-colors">Catalogue</a>
        <a href="#about" onclick="closeMobileMenu()" class="text-2xl mb-6 hover:text-yellow-400 transition-colors">About Us</a>
        <a href="#gallery" onclick="closeMobileMenu()" class="text-2xl mb-6 hover:text-yellow-400 transition-colors">Gallery</a>
        <a href="#contact" onclick="closeMobileMenu()" class="text-2xl mb-6 hover:text-yellow-400 transition-colors">Contact</a>
    </div>

    <!-- Floating Call Button -->
    <button onclick="window.open('tel:+919979947925', '_blank')" class="floating-call btn-luxury w-16 h-16 rounded-full flex items-center justify-center shadow-2xl">
        <i class="fas fa-phone text-black text-xl"></i>
    </button>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <div class="w-full h-full bg-gradient-to-br from-gray-900 via-black to-gray-800 relative">
                <div class="hero-overlay absolute inset-0"></div>
            </div>
        </div>

        <div class="text-center z-10 max-w-6xl mx-auto px-4 sm:px-6">
            <div class="mb-8 floating">
                <div class="relative inline-block">
                    <img id="heroLogo" src="lhlogo.png" alt="Light House Logo" class="w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 object-contain rounded-lg premium-glow" onerror="handleLogoError()">
                    <i id="fallbackIcon" class="fas fa-gem text-6xl sm:text-8xl text-yellow-400 text-glow" style="display: none;"></i>
                    <div class="absolute -top-1 -right-1 sm:-top-2 sm:-right-2 w-2 h-2 sm:w-4 sm:h-4 bg-yellow-400 rounded-full sparkle"></div>
                </div>
            </div>
            <h1 class="font-display text-4xl sm:text-6xl md:text-8xl font-bold mb-6 text-glow leading-tight">
                Light House
            </h1>
            <p class="text-xl sm:text-2xl md:text-3xl text-yellow-400 mb-4 font-semibold">
                Premium Decorative & Architectural Lighting
            </p>
            <p class="text-lg sm:text-xl text-gray-300 mb-12 max-w-3xl mx-auto">
                Illuminate your spaces with elegance and innovation
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <button onclick="document.getElementById('catalogue').scrollIntoView({behavior: 'smooth'})" class="btn-luxury px-8 py-4 rounded-full text-black font-semibold text-lg">
                    <i class="fas fa-book-open mr-2"></i> View Catalogue
                </button>
                <button onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})" class="border-2 border-yellow-400 px-8 py-4 rounded-full hover:bg-yellow-400 hover:text-black transition-all text-lg">
                    <i class="fas fa-map-marker-alt mr-2"></i> Visit Us
                </button>
            </div>
        </div>
    </section>

    <!-- Catalogue Section (Updated Links) -->
    <section id="catalogue" class="py-20 luxury-gradient">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl sm:text-5xl font-bold mb-6 text-glow">Our Premium Catalogue</h2>
                <div class="section-divider mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Explore our extensive collection of premium lighting solutions designed to transform any space
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                <!-- Mix Lights -->
                <a href="catalogue-mix.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-diamond text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Architect Exclusive</h3>
                    <p class="text-gray-400 text-sm mb-4">All Latest trends Here</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>
                
                <!-- Hanging Lights -->
                <a href="catalogue-hanging.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-lightbulb text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Hanging Lights</h3>
                    <p class="text-gray-400 text-sm mb-4">Stylish pendant and hanging fixtures</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Zoomer -->
                <a href="catalogue-zoomer.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-gem text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Zoomer</h3>
                    <p class="text-gray-400 text-sm mb-4">Luxury crystal chandeliers</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                 <!-- Wall Lights -->
                 <a href="catalogue-wall.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-square text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Wall Lights</h3>
                    <p class="text-gray-400 text-sm mb-4">Modern wall-mounted fixtures</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Picture Lights -->
                <a href="catalogue-picture.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-image text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Picture & Mirror</h3>
                    <p class="text-gray-400 text-sm mb-4">Elegant art lighting</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Table Hanging -->
                <a href="catalogue-table-hanging.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-utensils text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Table Hanging</h3>
                    <p class="text-gray-400 text-sm mb-4">Dining table lighting</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Floor Lamps -->
                <a href="catalogue-floor.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-200 to-orange-400 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-sun text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Floor & Table Lamps</h3>
                    <p class="text-gray-400 text-sm mb-4">Desks and floor lamps</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Gate Lamps -->
                <a href="catalogue-gate.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-gray-400 to-gray-600 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-door-open text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Gate Lamps</h3>
                    <p class="text-gray-400 text-sm mb-4">Outdoor entrance lighting</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Commercial -->
                <a href="catalogue-commercial.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-building text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Commercial</h3>
                    <p class="text-gray-400 text-sm mb-4">Office and retail lighting</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Fans -->
                <a href="catalogue-fans.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-fan text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Fans</h3>
                    <p class="text-gray-400 text-sm mb-4">Premium ceiling fans</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>

                <!-- Designer Fans -->
                <a href="catalogue-designer-fans.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-rose-500 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-maximize text-2xl text-black"></i></div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Designer Fans</h3>
                    <p class="text-gray-400 text-sm mb-4">Exclusive designer fans</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a>
                
                 <!-- Decorative Lights -->
                 <!-- <a href="catalogue-decorative.html" class="catalogue-card p-6 rounded-2xl text-center group block">
                    <div class="w-16 h-16 gold-gradient rounded-full flex items-center justify-center mx-auto mb-4 premium-glow"><i class="fas fa-star text-2xl text-black"></i></div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2 text-yellow-400">Decorative Lights</h3>
                    <p class="text-gray-400 text-sm mb-3 sm:mb-4">Elegant decorative lighting</p>
                    <div class="text-yellow-400 font-semibold group-hover:underline"><i class="fas fa-download mr-2"></i>View Catalogue</div>
                </a> -->
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-black">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="font-display text-4xl sm:text-5xl font-bold mb-6 text-glow">About Light House</h2>
                    <div class="section-divider mb-8"></div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <p class="text-lg text-gray-300 leading-relaxed mb-8">
                            Light House is Surat's exclusive lighting destination offering premium decorative and
                            architectural lighting solutions for homes, offices, and commercial spaces. With <span
                                class="text-yellow-400 font-semibold">23+ years of trust, quality, and
                                innovation</span>, we bring brilliance to every corner.
                        </p>
                        <p class="text-gray-400 leading-relaxed mb-8">
                            Located at the prestigious Parle Point, we curate the finest lighting collections from
                            renowned manufacturers worldwide, ensuring that every space we illuminate becomes a
                            masterpiece of design and functionality.
                        </p>
                        <div class="flex items-center space-x-8">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-yellow-400 mb-2">23+</div>
                                <p class="text-gray-400 text-sm">Years Experience</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-yellow-400 mb-2">50000+</div>
                                <p class="text-gray-400 text-sm">Happy Customers</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-yellow-400 mb-2">70+</div>
                                <p class="text-gray-400 text-sm">Premium Brands</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="card-luxury p-6 rounded-xl text-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-award text-black"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-400">Premium Quality</h3>
                            <p class="text-gray-400 text-sm">Only the finest materials and craftsmanship</p>
                        </div>

                        <div class="card-luxury p-6 rounded-xl text-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user-tie text-black"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-400">Expert Consultation</h3>
                            <p class="text-gray-400 text-sm">Professional lighting design advice</p>
                        </div>

                        <div class="card-luxury p-6 rounded-xl text-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-palette text-black"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-400">Custom Solutions</h3>
                            <p class="text-gray-400 text-sm">Bespoke lighting tailored to your needs</p>
                        </div>

                        <div class="card-luxury p-6 rounded-xl text-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-headset text-black"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-400">After-Sales Support</h3>
                            <p class="text-gray-400 text-sm">Comprehensive maintenance and support</p>
                        </div>

                        <div class="card-luxury p-6 rounded-xl text-center sm:col-span-2">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-drafting-compass text-black"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-400">Architect Collaborations</h3>
                            <p class="text-gray-400 text-sm">Trusted partner for leading architects and designers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section (Preserved Structure) -->
    <section id="gallery" class="py-20 luxury-gradient">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl sm:text-5xl font-bold mb-6 text-glow">Our Gallery</h2>
                <div class="section-divider mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Discover the beauty of our premium lighting collections and showroom
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                 <div class="gallery-item h-64 relative overflow-hidden rounded-xl">
                    <img src="1.png" alt="Gallery 1" class="w-full h-full object-cover" onerror="this.src='1.png';">
                </div>
                <div class="gallery-item h-64 relative overflow-hidden rounded-xl">
                    <img src="2.png" alt="Gallery 2" class="w-full h-full object-cover" onerror="this.src='2.png';">
                </div>
                <div class="gallery-item h-64 relative overflow-hidden rounded-xl">
                    <img src="3.png" alt="Gallery 3" class="w-full h-full object-cover" onerror="this.src='3.png';">
                </div>
                 <div class="gallery-item h-64 relative overflow-hidden rounded-xl">
                    <img src="5.png" alt="Gallery 5" class="w-full h-full object-cover" onerror="this.src='5.png';">
                </div>
                 <div class="gallery-item h-64 relative overflow-hidden rounded-xl">
                    <img src="4.png" alt="Gallery 4" class="w-full h-full object-cover" onerror="this.src='4.png';">
                </div>
                 <div class="gallery-item h-64 relative overflow-hidden rounded-xl">
                    <img src="6.png" alt="Gallery 6" class="w-full h-full object-cover" onerror="this.src='6.png';">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-black">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl sm:text-5xl font-bold mb-6 text-glow">What Our Clients Say</h2>
                <div class="section-divider mb-8"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="card-luxury p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-black"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-yellow-400">Rajesh Patel</h4>
                            <p class="text-gray-400 text-sm">Architect</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic mb-4">"Light House has been our go-to partner for premium lighting
                        solutions. Their quality and service are unmatched in Surat."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="card-luxury p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-black"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-yellow-400">Priya Shah</h4>
                            <p class="text-gray-400 text-sm">Interior Designer</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic mb-4">"The variety and quality of lighting options at Light House is
                        incredible. They understand design like no one else."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="card-luxury p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-black"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-yellow-400">Amit Desai</h4>
                            <p class="text-gray-400 text-sm">Homeowner</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic mb-4">"Our home transformation with Light House's lighting solutions
                        exceeded all expectations. Truly premium quality!"</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 luxury-gradient">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl sm:text-5xl font-bold mb-6 text-glow">Visit Our Showroom</h2>
                <div class="section-divider mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Experience our premium lighting collections at our exclusive showroom in Parle Point, Surat
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="space-y-8">
                    <div class="card-luxury p-8 rounded-2xl">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-map-marker-alt text-3xl text-yellow-400 mt-2"></i>
                            <div>
                                <h3 class="text-2xl font-semibold text-yellow-400 mb-3">Showroom Address</h3>
                                <p class="text-gray-300 text-lg">Light House</p>
                                <p class="text-gray-300">M-3/4, Malhar Complex, Ichhanath Road</p>
                                <p class="text-gray-300">Parle Point, Surat, Gujarat-395007</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-luxury p-8 rounded-2xl">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-phone text-3xl text-yellow-400 mt-2"></i>
                            <div>
                                <h3 class="text-2xl font-semibold text-yellow-400 mb-3">Contact Information</h3>
                                <p class="text-gray-300 text-lg">+91 99799 47925</p>
                                <p class="text-gray-300">sanjaysonani15@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-luxury p-8 rounded-2xl">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-clock text-3xl text-yellow-400 mt-2"></i>
                            <div>
                                <h3 class="text-2xl font-semibold text-yellow-400 mb-3">Business Hours</h3>
                                <p class="text-gray-300">Monday - Saturday: 10:00 AM - 8:30 PM</p>
                                <p class="text-gray-300">Sunday: Closed </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="card-luxury p-8 rounded-2xl">
                        <h3 class="text-2xl font-semibold text-yellow-400 mb-6">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <button onclick="window.open('https://instagram.com/lighthouse.surat', '_blank')"
                                class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                                <i class="fab fa-instagram text-black text-xl"></i>
                            </button>
                            <button onclick="window.open('https://wa.me/919979947925', '_blank')"
                                class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                                <i class="fab fa-whatsapp text-black text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <!-- Contact Form -->
                    <div class="card-luxury p-8 rounded-2xl">
                        <h3 class="text-2xl font-semibold text-yellow-400 mb-6">Get In Touch</h3>
                        <form class="space-y-4" action="send_email.php" method="POST">
                            <input type="text" name="name" placeholder="Your Name" required class="w-full p-4 bg-gray-800 border border-gray-700 rounded-lg focus:border-yellow-400 focus:outline-none">
                            <input type="tel" name="phone" placeholder="Phone Number" required class="w-full p-4 bg-gray-800 border border-gray-700 rounded-lg focus:border-yellow-400 focus:outline-none">
                            <textarea name="message" placeholder="Your Message" rows="4" required class="w-full p-4 bg-gray-800 border border-gray-700 rounded-lg focus:border-yellow-400 focus:outline-none"></textarea>
                            <button type="submit" class="w-full btn-luxury py-4 rounded-lg text-black font-semibold text-lg">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Google Maps -->
                    <div class="card-luxury p-8 rounded-2xl">
                        <h3 class="text-2xl font-semibold text-yellow-400 mb-6">Find Us</h3>
                        <div class="bg-gray-800 rounded-lg h-64 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt text-4xl text-yellow-400 mb-4"></i>
                                <p class="text-gray-300">Interactive Map</p>
                                <button onclick="window.open('https://maps.app.goo.gl/4DFERnsobCrxQB1K9', '_blank')" class="mt-4 btn-luxury px-6 py-2 rounded-full text-black font-semibold">
                                    Open in Google Maps
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-black border-t border-gray-800">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center">
                <div class="font-display text-3xl font-bold mb-4 text-glow">
                    Light House
                </div>
                <p class="text-gray-400 mb-6">Designed for brilliance.</p>
                <div class="section-divider mb-6"></div>
                <p class="text-gray-500">© 2025 Light House | All Rights Reserved</p>
                <p class="text-gray-600 text-sm mt-2">Premium Lighting Solutions • Parle Point, Surat</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>