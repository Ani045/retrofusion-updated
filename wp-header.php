<?php
/**
 * Header integration for WordPress blog
 * This file contains the head elements and the navbar HTML.
 * You can also use this code in a "Header and Footer" plugin.
 */
?>

<!-- Add this part to your WordPress "Header" (Head section) or wp_head hook -->

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Marcellus&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          amber: {
            50: '#ecf3f1',
            100: '#d0e1dd',
            200: '#a7c8c2',
            300: '#75a89e',
            400: '#48857a',
            500: '#2b695e',
            600: '#0F2A24',
            700: '#143c33',
            800: '#12312b',
            900: '#112924',
            950: '#081714',
          }
        },
        fontFamily: {
          'sans': ['DM Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
          'display': ['Marcellus', 'serif'],
          'body': ['DM Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        },
        fontSize: { 'base': ['9pt', { lineHeight: '1.5' }] }
      }
    }
  }
</script>

<!-- Custom Styles from Main Site -->
<style>
/* Essential animations and styles from styles.css */
@keyframes slideDown { from { opacity: 0; transform: translateY(-100px); } to { opacity: 1; transform: translateY(0); } }
.animate-slide-down { animation: slideDown 0.6s ease-out forwards; }
.font-display { font-family: 'Marcellus', serif; }
#nav-logo.logo-white { filter: brightness(0) invert(1); }
.mega-menu-wrapper { display: none; position: fixed; top: 75px; left: 0; right: 0; z-index: 40; justify-content: center; padding: 10px 1rem 0 1rem; opacity: 0; transform: translateY(-10px); transition: all 0.2s ease; }
.mega-menu-wrapper.active { display: flex; }
.mega-menu-wrapper::before { content: ''; position: absolute; top: -20px; left: 0; right: 0; height: 20px; } /* Buffer bridge */
.nav-link::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 0; height: 1px; background: #fbbf24; transition: width 0.3s; }
.nav-link:hover::after { width: 100%; }

/* Mobile Menu Transitions */
#mobile-menu { transition: all 0.3s ease-in-out; }
#mobile-villas-panel { transition: all 0.3s ease-in-out; }

/* Sticky Navbar Styles */
.nav-sticky { background: rgba(255, 255, 255, 0.95) !important; backdrop-filter: blur(8px); box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); }
.nav-sticky .nav-link { color: #1c1917 !important; }
.nav-sticky #mobile-menu-btn { color: #1c1917 !important; }

/* Global reset for WP compatibility */
#navbar { margin-top: 0 !important; }
.admin-bar #navbar { top: 32px !important; }
@media screen and (max-width: 782px) {
  .admin-bar #navbar { top: 46px !important; }
}
</style>

<!-- Navbar Section (Body Top) -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent animate-slide-down">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16 sm:h-20 w-full">
      <div class="flex-shrink-0 flex items-center lg:w-1/3 justify-start">
        <a href="/" class="flex items-center">
          <img id="nav-logo" src="https://res.cloudinary.com/damfndmrm/image/upload/v1771665559/Retrofusion_logo__20260211_230238_0000_sufgcp.png" alt="Retrofusion Logo" class="logo-white w-32 sm:w-40 md:w-48 xl:w-56 h-auto object-contain transition-all duration-300 origin-left" />
        </a>
      </div>
      <div class="hidden lg:flex items-center justify-center space-x-6 xl:space-x-8 lg:w-1/3">
        <a href="/about.php" class="nav-link text-white hover:text-amber-400 transition-colors font-medium text-lg relative group">
          <span class="text-sm sm:text-base lg:text-lg">About</span>
        </a>
        <a href="/contact.php" class="nav-link text-white hover:text-amber-400 transition-colors font-medium text-lg relative group">
          <span class="text-sm sm:text-base lg:text-lg">Contact</span>
        </a>
        <div id="villas-dropdown-btn" class="relative">
          <button class="nav-link text-white hover:text-amber-400 transition-colors font-medium text-lg flex items-center space-x-1 group">
            <span class="text-sm sm:text-base lg:text-lg">Our Villas</span>
            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
        </div>
      </div>
      <div class="flex items-center justify-end lg:w-1/3 gap-4">
        <a href="/contact.php#name" class="hidden lg:flex items-center justify-center bg-[#0F2A24] text-[#F4EFEA] px-6 py-2.5 rounded-full font-medium transition-colors duration-300 hover:bg-amber-600 hover:text-white text-sm xl:text-base border border-transparent hover:border-amber-600">Enquire Now</a>
        <div class="lg:hidden">
          <button id="mobile-menu-btn" class="text-white hover:text-amber-600 transition-colors">
            <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden bg-white/95 backdrop-blur-md border-t border-stone-200 hidden overflow-hidden transition-all duration-300" style="max-height:0;opacity:0;">
    <div class="px-4 py-6 space-y-4">
      <a href="/about.php" class="block px-3 py-3 text-stone-700 hover:text-amber-600 hover:bg-amber-50 font-medium text-base sm:text-lg rounded-lg transition-colors">About</a>
      <a href="/contact.php" class="block px-3 py-3 text-stone-700 hover:text-amber-600 hover:bg-amber-50 font-medium text-base sm:text-lg rounded-lg transition-colors">Contact</a>
      <div class="border-t border-stone-200 pt-4">
        <button id="mobile-villas-btn" class="w-full flex items-center justify-between px-3 py-3 text-stone-700 hover:text-amber-600 font-medium text-base sm:text-lg">
          <span>Our Villas</span>
          <svg class="mobile-chevron w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="mobile-villas-panel" class="ml-4 mt-2 space-y-2 overflow-hidden transition-all duration-300" style="max-height:0;opacity:0;">
          <a href="/retro-viswa-lonavala" class="block px-3 py-2 text-stone-600 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-colors text-base">Retro Visawa</a>
          <a href="/neo-retro" class="block px-3 py-2 text-stone-600 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-colors text-base">Neo Retro Villa</a>
          <a href="/retro-villas" class="block px-3 py-2 text-stone-600 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-colors text-base">Retro Villa</a>
        </div>
      </div>
      <div class="border-t border-stone-200 pt-4">
        <a href="/contact.php#name" class="block w-full text-center bg-[#0F2A24] text-white px-6 py-3 rounded-full font-medium transition-colors duration-300 hover:bg-amber-600 text-base">Enquire Now</a>
      </div>
    </div>
  </div>
</nav>

<!-- Mega Menu -->
<div id="mega-menu" class="mega-menu-wrapper">
  <div class="w-full max-w-7xl bg-white shadow-2xl border border-stone-200 rounded-2xl overflow-hidden">
    <div class="px-6 sm:px-8 lg:px-10 py-6 sm:py-8">
      <div class="flex items-center justify-between mb-6">
        <div>
          <h3 class="text-xl sm:text-2xl font-bold text-[#0F2A24] font-display">Our <span class="text-amber-600">Villas</span></h3>
          <p class="text-stone-500 text-sm mt-1">Discover our curated collection of luxury stays</p>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6">
        <a href="/retro-viswa-lonavala" class="group block">
          <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500">
            <div class="relative h-40 sm:h-44 md:h-48 overflow-hidden">
              <img src="https://res.cloudinary.com/dprafk917/video/upload/so_2/v1769858399/8wr207mfxnrmy0cvd61bd2gn1g_result__viprl7.jpg" alt="Retro Visawa" class="w-full h-full object-cover scale-125 transition-transform duration-700" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent group-hover:from-black/85 transition-colors duration-300"></div>
              <div class="absolute bottom-0 left-0 right-0 p-4">
                <h4 class="text-lg lg:text-xl font-bold text-white mb-0.5 group-hover:text-amber-300 transition-colors font-display">Retro Visawa</h4>
                <p class="text-white/80 text-xs font-light">Spacious 4BHK with private pool</p>
                <div class="mt-2 flex items-center gap-1.5 text-amber-400 text-xs font-medium opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                  <span>Explore</span><svg class="w-3 h-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a href="/neo-retro" class="group block">
          <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500">
            <div class="relative h-40 sm:h-44 md:h-48 overflow-hidden">
              <img src="https://res.cloudinary.com/dprafk917/video/upload/so_2/v1768241694/1874704f-2b23-41a2-aa21-ca77ce4aaecd_ipao9k.jpg" alt="Neo Retro Villa" class="w-full h-full object-cover scale-125 transition-transform duration-700" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent group-hover:from-black/85 transition-colors duration-300"></div>
              <div class="absolute bottom-0 left-0 right-0 p-4">
                <h4 class="text-lg lg:text-xl font-bold text-white mb-0.5 group-hover:text-amber-300 transition-colors font-display">Neo Retro Villa</h4>
                <p class="text-white/80 text-xs font-light">Artistic retreat with jacuzzi</p>
                <div class="mt-2 flex items-center gap-1.5 text-amber-400 text-xs font-medium opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                  <span>Explore</span><svg class="w-3 h-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a href="/retro-villas" class="group block">
          <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500">
            <div class="relative h-40 sm:h-44 md:h-48 overflow-hidden">
              <img src="https://res.cloudinary.com/dprafk917/video/upload/so_3/v1769867671/final_nkd4ry.jpg" alt="Retro Villa" class="w-full h-full object-cover scale-125 transition-transform duration-700" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent group-hover:from-black/85 transition-colors duration-300"></div>
              <div class="absolute bottom-0 left-0 right-0 p-4">
                <h4 class="text-lg lg:text-xl font-bold text-white mb-0.5 group-hover:text-amber-300 transition-colors font-display">Retro Villa</h4>
                <p class="text-white/80 text-xs font-light">Vintage escape with plunge pool</p>
                <div class="mt-2 flex items-center gap-1.5 text-amber-400 text-xs font-medium opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                  <span>Explore</span><svg class="w-3 h-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
